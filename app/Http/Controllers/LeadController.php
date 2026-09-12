<?php

namespace App\Http\Controllers;

use App\Models\Lead;
use App\Models\PageVisit;
use Carbon\Carbon;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;

class LeadController extends Controller
{
    /**
     * API Handler: Menerima Formulir Booking Test Drive dari Landing Page
     */
    public function storeTestDrive(Request $request): JsonResponse
    {
        $validated = $request->validate([
            'car_model' => 'required|string|max:50',
            'full_name' => 'required|string|min:2|max:100',
            'phone' => 'required|string|min:9|max:20',
            'preferred_date' => 'required|date',
            'preferred_time' => 'required|string|max:20',
            'dealer_location' => 'required|string|max:50',
        ]);

        $lead = Lead::create([
            'type' => 'test_drive',
            'name' => trim($validated['full_name']),
            'phone' => trim($validated['phone']),
            'car_model' => $validated['car_model'],
            'preferred_date' => $validated['preferred_date'],
            'preferred_time' => $validated['preferred_time'],
            'dealer_location' => $validated['dealer_location'],
            'status' => 'new',
            'source' => 'Website Test Drive HUD',
            'ip_address' => $request->ip(),
            'user_agent' => $request->userAgent(),
        ]);

        return response()->json([
            'success' => true,
            'message' => 'Reservasi test drive berhasil dikirim.',
            'lead_id' => $lead->id,
        ], 201);
    }

    /**
     * API Handler: Menerima Leads dari Simulasi Kredit
     */
    public function storeCreditLead(Request $request): JsonResponse
    {
        $validated = $request->validate([
            'name' => 'required|string|min:2|max:100',
            'phone' => 'required|string|min:9|max:20',
            'car_model' => 'required|string|max:50',
            'car_variant' => 'nullable|string|max:50',
            'estimated_otr' => 'nullable|numeric',
            'dp_percent' => 'nullable|integer',
            'tenor_years' => 'nullable|integer',
            'leasing_partner' => 'nullable|string|max:50',
            'estimated_installment' => 'nullable|numeric',
            'estimated_tdp' => 'nullable|numeric',
        ]);

        $lead = Lead::create([
            'type' => 'credit_simulation',
            'name' => trim($validated['name']),
            'phone' => trim($validated['phone']),
            'car_model' => $validated['car_model'],
            'car_variant' => $validated['car_variant'] ?? null,
            'estimated_otr' => $validated['estimated_otr'] ?? null,
            'dp_percent' => $validated['dp_percent'] ?? null,
            'tenor_years' => $validated['tenor_years'] ?? null,
            'leasing_partner' => $validated['leasing_partner'] ?? null,
            'estimated_installment' => $validated['estimated_installment'] ?? null,
            'estimated_tdp' => $validated['estimated_tdp'] ?? null,
            'status' => 'new',
            'source' => 'Website Credit Calculator',
            'ip_address' => $request->ip(),
            'user_agent' => $request->userAgent(),
        ]);

        return response()->json([
            'success' => true,
            'message' => 'Prospek pembiayaan berhasil dicatat.',
            'lead_id' => $lead->id,
        ], 201);
    }

    /**
     * API Handler: Otomatis mencatat interaksi klik tombol WhatsApp ke CRM
     */
    public function storeWhatsappClick(Request $request): JsonResponse
    {
        $currentPath = (string) $request->input('path', '/');
        $detectedModel = 'general';

        // Deteksi konteks model mobil berdasarkan halaman yang sedang dibuka pengunjung
        if (str_contains($currentPath, 'ex5')) {
            $detectedModel = 'ex5';
        } elseif (str_contains($currentPath, 'ex2')) {
            $detectedModel = 'ex2';
        } elseif (str_contains($currentPath, 'starray')) {
            $detectedModel = 'starray';
        } elseif (str_contains($currentPath, 'coolray')) {
            $detectedModel = 'coolray';
        }

        $lead = Lead::create([
            'type' => 'whatsapp_inquiry',
            'name' => 'WA Prospek (' . now()->format('d/m H:i') . ')',
            'phone' => 'Chat Masuk via Web',
            'car_model' => $detectedModel,
            'dealer_location' => 'bsd',
            'status' => 'new',
            'source' => 'Floating WhatsApp (' . ($currentPath ?: '/') . ')',
            'ip_address' => $request->ip(),
            'user_agent' => $request->userAgent(),
        ]);

        return response()->json([
            'success' => true,
            'message' => 'Interaksi WhatsApp berhasil tercatat di CRM.',
            'lead_id' => $lead->id,
        ], 201);
    }

    /**
     * Dashboard CRM Admin: Daftar Leads, Filter, & Statistik Kunjungan Web
     */
    public function adminIndex(Request $request): View
    {
        $query = Lead::query()->latest();

        if ($request->filled('search')) {
            $search = $request->input('search');
            $query->where(function ($q) use ($search) {
                $q->where('name', 'like', "%{$search}%")
                  ->orWhere('phone', 'like', "%{$search}%");
            });
        }

        if ($request->filled('status')) {
            $query->where('status', $request->input('status'));
        }

        if ($request->filled('model')) {
            $query->where('car_model', $request->input('model'));
        }

        $leads = $query->paginate(15)->withQueryString();

        $stats = [
            'total' => Lead::count(),
            'new' => Lead::where('status', 'new')->count(),
            'contacted' => Lead::where('status', 'contacted')->count(),
            'scheduled' => Lead::where('status', 'test_drive_scheduled')->count(),
            'deal' => Lead::where('status', 'spk_deal')->count(),
            'lost' => Lead::where('status', 'lost')->count(),
        ];

        $today = Carbon::today()->toDateString();
        $sevenDaysAgo = Carbon::today()->subDays(6)->toDateString();

        $totalPageViews = PageVisit::count();
        $todayPageViews = PageVisit::whereDate('visit_date', $today)->count();
        $totalUniqueVisitors = PageVisit::distinct('ip_address')->count('ip_address');
        $todayUniqueVisitors = PageVisit::whereDate('visit_date', $today)->distinct('ip_address')->count('ip_address');

        $deviceStats = PageVisit::select('device_type', DB::raw('count(*) as count'))
            ->groupBy('device_type')
            ->pluck('count', 'device_type')
            ->toArray();

        $mobileCount = $deviceStats['mobile'] ?? 0;
        $desktopCount = $deviceStats['desktop'] ?? 0;
        $tabletCount = $deviceStats['tablet'] ?? 0;
        $totalDevices = max(1, $mobileCount + $desktopCount + $tabletCount);

        $topPages = PageVisit::select('path', DB::raw('count(*) as views'))
            ->groupBy('path')
            ->orderByDesc('views')
            ->limit(5)
            ->get();

        $dailyVisitsRaw = PageVisit::select('visit_date', DB::raw('count(*) as views'), DB::raw('count(distinct ip_address) as uniques'))
            ->whereDate('visit_date', '>=', $sevenDaysAgo)
            ->groupBy('visit_date')
            ->orderBy('visit_date', 'asc')
            ->get()
            ->keyBy(function ($item) {
                return Carbon::parse($item->visit_date)->format('Y-m-d');
            });

        $chartData = [];
        $maxDailyViews = 1;

        for ($i = 6; $i >= 0; $i--) {
            $date = Carbon::today()->subDays($i)->format('Y-m-d');
            $dayLabel = Carbon::today()->subDays($i)->locale('id')->isoFormat('dd, D MMM');
            $views = isset($dailyVisitsRaw[$date]) ? (int) $dailyVisitsRaw[$date]->views : 0;
            $uniques = isset($dailyVisitsRaw[$date]) ? (int) $dailyVisitsRaw[$date]->uniques : 0;

            if ($views > $maxDailyViews) {
                $maxDailyViews = $views;
            }

            $chartData[] = [
                'date' => $date,
                'label' => $dayLabel,
                'views' => $views,
                'uniques' => $uniques,
            ];
        }

        $analytics = [
            'total_views' => $totalPageViews,
            'today_views' => $todayPageViews,
            'total_uniques' => $totalUniqueVisitors,
            'today_uniques' => $todayUniqueVisitors,
            'mobile_percent' => round(($mobileCount / $totalDevices) * 100),
            'desktop_percent' => round(($desktopCount / $totalDevices) * 100),
            'tablet_percent' => round(($tabletCount / $totalDevices) * 100),
            'top_pages' => $topPages,
            'chart_data' => $chartData,
            'max_views' => $maxDailyViews,
        ];

        return view('admin.leads.index', compact('leads', 'stats', 'analytics'));
    }

    /**
     * Memperbarui Status Pipeline Lead
     */
    public function updateStatus(Request $request, Lead $lead): RedirectResponse
    {
        $validated = $request->validate([
            'status' => 'required|in:new,contacted,test_drive_scheduled,spk_deal,lost',
            'sales_notes' => 'nullable|string|max:1000',
        ]);

        $lead->status = $validated['status'];
        if (isset($validated['sales_notes'])) {
            $lead->sales_notes = $validated['sales_notes'];
        }
        $lead->save();

        return redirect()->back()->with('success', "Status prospek {$lead->name} berhasil diperbarui.");
    }

    /**
     * Export Leads ke Format CSV / Excel Langsung
     */
    public function exportCsv()
    {
        $leads = Lead::latest()->get();
        $filename = 'geely_bsd_leads_' . date('Y_m_d_His') . '.csv';

        $headers = [
            'Content-Type' => 'text/csv',
            'Content-Disposition' => "attachment; filename=\"{$filename}\"",
            'Pragma' => 'no-cache',
            'Cache-Control' => 'must-revalidate, post-check=0, pre-check=0',
            'Expires' => '0',
        ];

        $callback = function () use ($leads) {
            $file = fopen('php://output', 'w');
            
            fputcsv($file, [
                'ID', 'Tipe', 'Nama Pelanggan', 'No WhatsApp', 'Model Mobil', 
                'Lokasi Dealer', 'Tgl Test Drive', 'Jam Test Drive', 
                'Status Pipeline', 'Catatan Sales', 'Sumber', 'Waktu Masuk'
            ]);

            foreach ($leads as $lead) {
                fputcsv($file, [
                    $lead->id,
                    $lead->type,
                    $lead->name,
                    $lead->phone,
                    $lead->car_model_label,
                    $lead->dealer_location_label,
                    $lead->preferred_date ? $lead->preferred_date->format('Y-m-d') : '-',
                    $lead->preferred_time ?? '-',
                    $lead->status,
                    $lead->sales_notes ?? '-',
                    $lead->source,
                    $lead->created_at->format('Y-m-d H:i:s'),
                ]);
            }
            fclose($file);
        };

        return response()->stream($callback, 200, $headers);
    }
}