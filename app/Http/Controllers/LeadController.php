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
     * Menampilkan Dashboard Utama CRM Leads dan Live Traffic Web Analytics.
     * Mengagregasi data prospek dari seluruh channel (WhatsApp, Test Drive, Kredit)
     * serta statistik pengunjung landing page secara real-time.
     *
     * @param Request $request
     * @return View
     */
    public function index(Request $request): View
    {
        $query = Lead::query()->latest();

        // 1. Filter Pencarian Multi-Kolom (Nama, No WhatsApp, Email, Sumber, Model, Catatan)
        if ($request->filled('search')) {
            $search = trim($request->input('search'));
            $query->where(function ($q) use ($search) {
                $q->where('name', 'like', "%{$search}%")
                  ->orWhere('phone', 'like', "%{$search}%")
                  ->orWhere('source', 'like', "%{$search}%");

                if (Schema::hasColumn('leads', 'email')) {
                    $q->orWhere('email', 'like', "%{$search}%");
                }
                if (Schema::hasColumn('leads', 'car_model')) {
                    $q->orWhere('car_model', 'like', "%{$search}%");
                }
                if (Schema::hasColumn('leads', 'model_interest')) {
                    $q->orWhere('model_interest', 'like', "%{$search}%");
                }
                if (Schema::hasColumn('leads', 'sales_notes')) {
                    $q->orWhere('sales_notes', 'like', "%{$search}%");
                }
            });
        }

        // 2. Filter Status Pipeline CRM
        if ($request->filled('status')) {
            $status = $request->input('status');
            if ($status === 'scheduled') {
                $query->whereIn('status', ['test_drive_scheduled', 'scheduled', 'qualified']);
            } elseif ($status === 'deal') {
                $query->whereIn('status', ['spk_deal', 'converted', 'deal']);
            } elseif ($status === 'lost') {
                $query->whereIn('status', ['lost', 'cancelled']);
            } else {
                $query->where('status', $status);
            }
        }

        // 3. Filter Tipe Sumber / Channel Leads (whatsapp_inquiry, test_drive, credit_simulation)
        if ($request->filled('type')) {
            $query->where('type', $request->input('type'));
        }

        // 4. Filter Model Kendaraan (ex5, ex2, starray, coolray)
        if ($request->filled('model')) {
            $model = strtolower(trim($request->input('model')));
            if (Schema::hasColumn('leads', 'car_model')) {
                $query->where('car_model', $model);
            } elseif (Schema::hasColumn('leads', 'model_interest')) {
                $query->where('model_interest', $model);
            }
        }

        // 5. Filter Lokasi Dealer
        if ($request->filled('dealer') && Schema::hasColumn('leads', 'dealer_location')) {
            $query->where('dealer_location', $request->input('dealer'));
        }

        // 6. Filter Rentang Tanggal Masuk (Date Range)
        if ($request->filled('start_date')) {
            $query->whereDate('created_at', '>=', $request->input('start_date'));
        }
        if ($request->filled('end_date')) {
            $query->whereDate('created_at', '<=', $request->input('end_date'));
        }

        // Paginasi Data Leads dengan Query String Terlampir
        $leads = $query->paginate(15)->withQueryString();

        // Menghitung Metrik Pipeline Prospek
        $stats = [
            'total'       => Lead::count(),
            'new'         => Lead::where('status', 'new')->count(),
            'contacted'   => Lead::where('status', 'contacted')->count(),
            'scheduled'   => Lead::whereIn('status', ['test_drive_scheduled', 'scheduled', 'qualified'])->count(),
            'deal'        => Lead::whereIn('status', ['spk_deal', 'converted', 'deal'])->count(),
            'lost'        => Lead::whereIn('status', ['lost', 'cancelled'])->count(),

            // Metrik Channel Sumber Leads
            'whatsapp'    => Lead::where('type', 'whatsapp_inquiry')->count(),
            'test_drive'  => Lead::where('type', 'test_drive')->count(),
            'credit'      => Lead::where('type', 'credit_simulation')->count(),

            // Prospek Hari Ini (Today Metrics)
            'today_total' => Lead::whereDate('created_at', Carbon::today())->count(),
            'today_wa'    => Lead::where('type', 'whatsapp_inquiry')->whereDate('created_at', Carbon::today())->count(),
            'today_td'    => Lead::where('type', 'test_drive')->whereDate('created_at', Carbon::today())->count(),
            'today_cr'    => Lead::where('type', 'credit_simulation')->whereDate('created_at', Carbon::today())->count(),

            // Prospek Bulan Ini
            'month_total' => Lead::whereMonth('created_at', Carbon::now()->month)
                                 ->whereYear('created_at', Carbon::now()->year)
                                 ->count(),
        ];
        $metrics = $stats;

        // Menyiapkan Data Analitik Kunjungan Website (Page Visits)
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

            // Agregasi Berdasarkan Jenis Perangkat (Mobile, Desktop, Tablet)
            $deviceStats = PageVisit::select('device_type', DB::raw('count(*) as count'))
                ->groupBy('device_type')
                ->pluck('count', 'device_type')
                ->toArray();

            $mobileCount  = $deviceStats['mobile'] ?? 0;
            $desktopCount = $deviceStats['desktop'] ?? 0;
            $tabletCount  = $deviceStats['tablet'] ?? 0;

            // Halaman Terpopuler (Top 5 Landing Pages)
            $topPages = PageVisit::select('path', DB::raw('count(*) as views'))
                ->groupBy('path')
                ->orderByDesc('views')
                ->limit(5)
                ->get();

            // Tren Kunjungan Harian 7 Hari Terakhir
            $dailyVisitsRaw = PageVisit::select('visit_date', DB::raw('count(*) as views'), DB::raw('count(distinct ip_address) as uniques'))
                ->whereDate('visit_date', '>=', $sevenDaysAgo)
                ->groupBy('visit_date')
                ->orderBy('visit_date', 'asc')
                ->get()
                ->keyBy(function ($item) {
                    return Carbon::parse($item->visit_date)->format('Y-m-d');
                });

            for ($i = 6; $i >= 0; $i--) {
                $currentDate = Carbon::today()->subDays($i);
                $dateString = $currentDate->format('Y-m-d');
                $dayLabel = $currentDate->locale('id')->isoFormat('dd, D MMM');

                $views = isset($dailyVisitsRaw[$dateString]) ? (int) $dailyVisitsRaw[$dateString]->views : 0;
                $uniques = isset($dailyVisitsRaw[$dateString]) ? (int) $dailyVisitsRaw[$dateString]->uniques : 0;

                if ($views > $maxDailyViews) {
                    $maxDailyViews = $views;
                }

                $chartData[] = [
                    'date'    => $dateString,
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
     * Mengambil detail satu data prospek (Lead) dalam format JSON untuk modal/drawer.
     *
     * @param Lead $lead
     * @return JsonResponse
     */
    public function show(Lead $lead): JsonResponse
    {
        return response()->json([
            'success' => true,
            'lead'    => $lead,
            'badge'   => $lead->status_badge ?? null,
            'wa_url'  => $lead->whatsapp_follow_up_url ?? null,
        ]);
    }

    /**
     * Memperbarui Status Pipeline Lead dan Catatan Sales.
     *
     * @param Request $request
     * @param Lead $lead
     * @return JsonResponse|RedirectResponse
     */
    public function updateStatus(Request $request, Lead $lead): JsonResponse|RedirectResponse
    {
        $validated = $request->validate([
            'status'      => 'required|string|max:50',
            'sales_notes' => 'nullable|string|max:1000',
        ]);

        $lead->status = $validated['status'];

        if (array_key_exists('sales_notes', $validated) && Schema::hasColumn('leads', 'sales_notes')) {
            $lead->sales_notes = $validated['sales_notes'];
        }

        $lead->save();

        if ($request->expectsJson() || $request->ajax()) {
            return response()->json([
                'success' => true,
                'message' => "Status prospek {$lead->name} berhasil diperbarui menjadi {$lead->status}.",
                'lead'    => $lead,
            ]);
        }

        return redirect()->back()->with('success', "Status prospek {$lead->name} berhasil diperbarui.");
    }

    /**
     * Menghapus (Soft Delete) Data Prospek dari Sistem.
     *
     * @param Request $request
     * @param Lead $lead
     * @return JsonResponse|RedirectResponse
     */
    public function destroy(Request $request, Lead $lead): JsonResponse|RedirectResponse
    {
        $customerName = $lead->name;
        $lead->delete();

        if ($request->expectsJson() || $request->ajax()) {
            return response()->json([
                'success' => true,
                'message' => "Prospek {$customerName} berhasil dihapus.",
            ]);
        }

        return redirect()->back()->with('success', "Prospek {$customerName} berhasil dihapus.");
    }

    /**
     * Export Seluruh Data Leads ke Format CSV Lengkap.
     * Menggunakan streamed download untuk mencegah memori server overload.
     *
     * @return StreamedResponse
     */
    public function exportCsv(): StreamedResponse
    {
        $fileName = 'geely_bsd_leads_' . date('Y_m_d_His') . '.csv';

        return response()->streamDownload(function () {
            $file = fopen('php://output', 'w');

            // Menambahkan UTF-8 BOM agar terbaca sempurna saat dibuka di Microsoft Excel
            fprintf($file, chr(0xEF).chr(0xBB).chr(0xBF));

            // Header Kolom CSV Lengkap
            fputcsv($file, [
                'ID Prospek',
                'Tipe Channel',
                'Nama Pelanggan',
                'No WhatsApp / Telepon',
                'Model Mobil',
                'Varian Mobil',
                'Lokasi Dealer',
                'Tanggal Test Drive',
                'Waktu Test Drive',
                'Estimasi OTR',
                'Uang Muka (DP)',
                'Tenor (Tahun)',
                'Angsuran Per Bulan',
                'Status Pipeline',
                'Catatan Sales',
                'Sumber Halaman / Tombol',
                'IP Address Pengunjung',
                'Waktu Masuk',
            ]);

            // Memproses Data per Chunk 200 Baris
            Lead::latest()->chunk(200, function ($leads) use ($file) {
                foreach ($leads as $lead) {
                    $model = $lead->car_model_label ?? $lead->car_model ?? $lead->model_interest ?? '-';
                    $location = $lead->dealer_location_label ?? $lead->dealer_location ?? 'Dealer BSD City';
                    $preferredDate = $lead->preferred_date ? Carbon::parse($lead->preferred_date)->format('Y-m-d') : '-';
                    $dpText = $lead->dp_percent ? $lead->dp_percent . '%' : '-';
                    $tenorText = $lead->tenor_years ? $lead->tenor_years . ' Tahun' : '-';
                    $otrText = $lead->estimated_otr ? 'Rp ' . number_format($lead->estimated_otr, 0, ',', '.') : '-';
                    $installmentText = $lead->estimated_installment ? 'Rp ' . number_format($lead->estimated_installment, 0, ',', '.') : '-';

                    fputcsv($file, [
                        $lead->id,
                        $lead->type ?? 'test_drive',
                        $lead->name,
                        $lead->phone,
                        $model,
                        $lead->car_variant ?? '-',
                        $location,
                        $preferredDate,
                        $lead->preferred_time ?? '-',
                        $otrText,
                        $dpText,
                        $tenorText,
                        $installmentText,
                        $lead->status,
                        $lead->sales_notes ?? '-',
                        $lead->source ?? 'Website',
                        $lead->ip_address ?? '-',
                        $lead->created_at ? $lead->created_at->format('Y-m-d H:i:s') : '-',
                    ]);
                }
            });

            fclose($file);
        }, $fileName, [
            'Content-Type'        => 'text/csv; charset=UTF-8',
            'Content-Disposition' => "attachment; filename=\"{$fileName}\"",
            'Pragma'              => 'no-cache',
            'Cache-Control'       => 'must-revalidate, post-check=0, pre-check=0',
            'Expires'             => '0',
        ]);
    }
}