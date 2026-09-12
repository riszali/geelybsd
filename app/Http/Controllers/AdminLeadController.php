<?php

namespace App\Http\Controllers;

use App\Models\Lead;
use App\Models\PageVisit;
use Carbon\Carbon;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Illuminate\View\View;
use Symfony\Component\HttpFoundation\StreamedResponse;

class AdminLeadController extends Controller
{
    /**
     * Menampilkan dashboard CRM leads beserta metrik traffic analytics landing page
     */
    public function index(Request $request): View
    {
        $query = Lead::query()->latest();

        // Filter Pencarian (Nama, No Telepon, atau Model)
        if ($request->filled('search')) {
            $search = trim($request->input('search'));
            $query->where(function ($q) use ($search) {
                $q->where('name', 'like', "%{$search}%")
                  ->orWhere('phone', 'like', "%{$search}%");

                if (Schema::hasColumn('leads', 'car_model')) {
                    $q->orWhere('car_model', 'like', "%{$search}%");
                }
                if (Schema::hasColumn('leads', 'model_interest')) {
                    $q->orWhere('model_interest', 'like', "%{$search}%");
                }
            });
        }

        // Filter Status Pipeline
        if ($request->filled('status')) {
            $query->where('status', $request->input('status'));
        }

        // Filter Spesifik Model Mobil
        if ($request->filled('model')) {
            $model = $request->input('model');
            if (Schema::hasColumn('leads', 'car_model')) {
                $query->where('car_model', $model);
            } elseif (Schema::hasColumn('leads', 'model_interest')) {
                $query->where('model_interest', $model);
            }
        }

        $leads = $query->paginate(15)->withQueryString();

        // Metrik Counter Pipeline Leads (Mendukung alias stats & metrics agar kompatibel dengan view blade)
        $stats = [
            'total'     => Lead::count(),
            'new'       => Lead::where('status', 'new')->count(),
            'contacted' => Lead::where('status', 'contacted')->count(),
            'scheduled' => Lead::whereIn('status', ['test_drive_scheduled', 'scheduled', 'qualified'])->count(),
            'qualified' => Lead::whereIn('status', ['qualified', 'test_drive_scheduled', 'scheduled'])->count(),
            'deal'      => Lead::whereIn('status', ['spk_deal', 'converted', 'deal'])->count(),
            'converted' => Lead::whereIn('status', ['spk_deal', 'converted', 'deal'])->count(),
            'lost'      => Lead::whereIn('status', ['lost', 'cancelled'])->count(),
            'cancelled' => Lead::whereIn('status', ['lost', 'cancelled'])->count(),
        ];
        $metrics = $stats;

        // Statistik Kunjungan Web
        $today = Carbon::today()->toDateString();
        $sevenDaysAgo = Carbon::today()->subDays(6)->toDateString();

        $totalPageViews = 0;
        $todayPageViews = 0;
        $totalUniqueVisitors = 0;
        $todayUniqueVisitors = 0;
        $mobileCount = 0;
        $desktopCount = 0;
        $tabletCount = 0;
        $topPages = collect();
        $chartData = [];
        $maxDailyViews = 1;

        if (Schema::hasTable('page_visits')) {
            $totalPageViews = PageVisit::count();
            $todayPageViews = PageVisit::whereDate('visit_date', $today)->count();
            $totalUniqueVisitors = PageVisit::distinct('ip_address')->count('ip_address');
            $todayUniqueVisitors = PageVisit::whereDate('visit_date', $today)->distinct('ip_address')->count('ip_address');

            // Device Breakdown
            $deviceStats = PageVisit::select('device_type', DB::raw('count(*) as count'))
                ->groupBy('device_type')
                ->pluck('count', 'device_type')
                ->toArray();

            $mobileCount = $deviceStats['mobile'] ?? 0;
            $desktopCount = $deviceStats['desktop'] ?? 0;
            $tabletCount = $deviceStats['tablet'] ?? 0;

            // Halaman Terpopuler
            $topPages = PageVisit::select('path', DB::raw('count(*) as views'))
                ->groupBy('path')
                ->orderByDesc('views')
                ->limit(5)
                ->get();

            // Tren Kunjungan 7 Hari Terakhir
            $dailyVisitsRaw = PageVisit::select('visit_date', DB::raw('count(*) as views'), DB::raw('count(distinct ip_address) as uniques'))
                ->whereDate('visit_date', '>=', $sevenDaysAgo)
                ->groupBy('visit_date')
                ->orderBy('visit_date', 'asc')
                ->get()
                ->keyBy(function ($item) {
                    return Carbon::parse($item->visit_date)->format('Y-m-d');
                });

            for ($i = 6; $i >= 0; $i--) {
                $date = Carbon::today()->subDays($i)->format('Y-m-d');
                $dayLabel = Carbon::today()->subDays($i)->locale('id')->isoFormat('dd, D MMM');
                $views = isset($dailyVisitsRaw[$date]) ? (int) $dailyVisitsRaw[$date]->views : 0;
                $uniques = isset($dailyVisitsRaw[$date]) ? (int) $dailyVisitsRaw[$date]->uniques : 0;

                if ($views > $maxDailyViews) {
                    $maxDailyViews = $views;
                }

                $chartData[] = [
                    'date'    => $date,
                    'label'   => $dayLabel,
                    'views'   => $views,
                    'uniques' => $uniques,
                ];
            }
        }

        $totalDevices = max(1, $mobileCount + $desktopCount + $tabletCount);

        $analytics = [
            'total_views'     => $totalPageViews,
            'today_views'     => $todayPageViews,
            'total_uniques'   => $totalUniqueVisitors,
            'today_uniques'   => $todayUniqueVisitors,
            'mobile_percent'  => round(($mobileCount / $totalDevices) * 100),
            'desktop_percent' => round(($desktopCount / $totalDevices) * 100),
            'tablet_percent'  => round(($tabletCount / $totalDevices) * 100),
            'top_pages'       => $topPages,
            'chart_data'      => $chartData,
            'max_views'       => $maxDailyViews,
        ];

        return view('admin.leads.index', compact('leads', 'stats', 'metrics', 'analytics'));
    }

    /**
     * Memperbarui Status Pipeline Lead (Mendukung AJAX JSON dan Form Redirect)
     */
    public function updateStatus(Request $request, Lead $lead): JsonResponse|RedirectResponse
    {
        $validated = $request->validate([
            'status'      => 'required|string|max:50',
            'sales_notes' => 'nullable|string|max:1000',
        ]);

        $lead->status = $validated['status'];
        if (isset($validated['sales_notes']) && Schema::hasColumn('leads', 'sales_notes')) {
            $lead->sales_notes = $validated['sales_notes'];
        }
        $lead->save();

        if ($request->expectsJson() || $request->ajax()) {
            return response()->json([
                'success' => true,
                'message' => "Status prospek {$lead->name} berhasil diperbarui.",
                'lead'    => $lead,
            ]);
        }

        return redirect()->back()->with('success', "Status prospek {$lead->name} berhasil diperbarui.");
    }

    /**
     * Export Seluruh Data Leads ke Format CSV
     */
    public function exportCsv(): StreamedResponse
    {
        $fileName = 'geely_bsd_leads_' . date('Y_m_d_His') . '.csv';

        return response()->streamDownload(function () {
            $file = fopen('php://output', 'w');
            fputcsv($file, [
                'ID',
                'Nama Pelanggan',
                'No WhatsApp',
                'Model Mobil',
                'Tipe Layanan',
                'Lokasi Dealer',
                'Tanggal Test Drive',
                'Waktu Test Drive',
                'Status Pipeline',
                'Waktu Registrasi',
            ]);

            Lead::latest()->chunk(200, function ($leads) use ($file) {
                foreach ($leads as $lead) {
                    $model = $lead->car_model_label ?? $lead->car_model ?? $lead->model_interest ?? '-';
                    $location = $lead->dealer_location_label ?? $lead->dealer_location ?? 'Dealer BSD';
                    $preferredDate = $lead->preferred_date ? Carbon::parse($lead->preferred_date)->format('Y-m-d') : '-';

                    fputcsv($file, [
                        $lead->id,
                        $lead->name,
                        $lead->phone,
                        $model,
                        $lead->type ?? 'test_drive',
                        $location,
                        $preferredDate,
                        $lead->preferred_time ?? '-',
                        $lead->status,
                        $lead->created_at ? $lead->created_at->format('Y-m-d H:i:s') : '-',
                    ]);
                }
            });

            fclose($file);
        }, $fileName, [
            'Content-Type'        => 'text/csv',
            'Content-Disposition' => "attachment; filename=\"{$fileName}\"",
            'Pragma'              => 'no-cache',
            'Cache-Control'       => 'must-revalidate, post-check=0, pre-check=0',
            'Expires'             => '0',
        ]);
    }
}