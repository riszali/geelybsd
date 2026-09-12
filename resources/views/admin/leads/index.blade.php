<!DOCTYPE html>
<html lang="id" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Geely Dashboard | CRM Leads & Web Analytics</title>
    
    <link rel="icon" type="image/png" href="{{ asset('favicon.png') }}?v={{ time() }}">
    <link rel="preload" href="https://assets.zyrosite.com/Yle46KEPN6IkVONg/GEELY Bold Regular.woff2" as="font" type="font/woff2" crossorigin>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&family=Orbitron:wght@500;600;700;800;900&display=swap" rel="stylesheet">

    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

    <style>
        @font-face {
            font-family: 'Geely';
            src: url('https://assets.zyrosite.com/Yle46KEPN6IkVONg/GEELY Bold Regular.woff2') format('woff2');
            font-weight: normal;
            font-style: normal;
            font-display: swap;
        }

        body {
            background-color: #03060a;
            color: #f1f5f9;
            font-family: 'Inter', sans-serif;
            -webkit-tap-highlight-color: transparent;
        }

        .font-geely {
            font-family: 'Geely', sans-serif;
        }

        .font-orbitron {
            font-family: 'Orbitron', 'Geely', sans-serif;
        }

        .hud-card {
            background: #0d131a;
            border: 1px solid rgba(255, 255, 255, 0.08);
            border-radius: 24px;
            box-shadow: 0 20px 50px -15px rgba(0, 0, 0, 0.8);
        }

        .hud-card-sm {
            background: #0a0f16;
            border: 1px solid rgba(255, 255, 255, 0.06);
            border-radius: 18px;
        }

        .custom-scrollbar::-webkit-scrollbar {
            height: 6px;
            width: 6px;
        }
        .custom-scrollbar::-webkit-scrollbar-track {
            background: #0d131a;
        }
        .custom-scrollbar::-webkit-scrollbar-thumb {
            background: rgba(255, 255, 255, 0.15);
            border-radius: 4px;
        }
        .custom-scrollbar::-webkit-scrollbar-thumb:hover {
            background: #00b4d8;
        }
    </style>
</head>
<body class="min-h-screen pb-20 selection:bg-[#00b4d8] selection:text-black antialiased">

    <!-- Toast Notification Box (Menggantikan alert bawaan browser) -->
    <div id="toastNotification" class="fixed top-5 right-5 z-50 transform translate-y-[-150%] opacity-0 transition-all duration-300 pointer-events-none">
        <div class="hud-card px-5 py-3.5 flex items-center gap-3 border border-cyan-500/40 shadow-[0_0_30px_rgba(0,229,255,0.2)] bg-[#0d131a]/95 backdrop-blur-md">
            <span id="toastIcon" class="w-2.5 h-2.5 rounded-full bg-[#00E5FF] animate-pulse"></span>
            <span id="toastMessage" class="text-xs font-semibold text-white tracking-wide">Pemberitahuan</span>
        </div>
    </div>

    <header class="border-b border-white/10 bg-[#080d14]/90 backdrop-blur-md sticky top-0 z-30">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 h-20 flex items-center justify-between">
            <div class="flex items-center gap-3 sm:gap-4">
                <img src="{{ asset('assets/footer-logos-geely.png') }}" alt="Geely Logo" class="h-8 sm:h-10 w-auto object-contain">
                <div class="h-6 w-[1px] bg-white/15"></div>
                <div>
                    <h1 class="font-geely text-base sm:text-xl uppercase tracking-wider text-white flex items-center gap-2">
                        GEELY <span class="text-[#00b4d8]">DASHBOARD</span>
                    </h1>
                    <p class="text-[9px] sm:text-[10px] text-gray-400 tracking-widest uppercase">
                        Dama &bull; {{ Auth::user()->name ?? 'Admin Geely BSD' }}
                    </p>
                </div>
            </div>

            <div class="flex items-center gap-2 sm:gap-3">
                <a href="{{ route('admin.leads.export') }}" class="hidden sm:inline-flex items-center gap-2 px-4 py-2.5 rounded-xl border border-white/15 bg-white/5 hover:bg-white/10 text-xs font-semibold uppercase tracking-wider text-gray-300 hover:text-white transition-all">
                    <svg class="w-4 h-4 text-[#00b4d8]" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4"/></svg>
                    Export CSV
                </a>

                <form action="{{ route('admin.logout') }}" method="POST">
                    @csrf
                    <button type="submit" class="inline-flex items-center gap-2 px-3.5 sm:px-4 py-2 sm:py-2.5 rounded-xl bg-red-500/10 border border-red-500/30 hover:bg-red-500 text-red-400 hover:text-white text-xs font-semibold uppercase tracking-wider transition-all">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1"/></svg>
                        <span class="hidden sm:inline">Logout</span>
                    </button>
                </form>
            </div>
        </div>
    </header>

    <main class="max-w-7xl mx-auto px-3 sm:px-6 lg:px-8 pt-6 sm:pt-8 space-y-6 sm:space-y-8">

        <!-- ======================================================================
             BAGIAN 1: STATISTIK KUNJUNGAN WEB (WEB ANALYTICS REALTIME)
        ====================================================================== -->
        <section class="space-y-4">
            <div class="flex items-center justify-between">
                <div class="flex items-center gap-2.5 sm:gap-3">
                    <span class="w-2.5 h-2.5 rounded-full bg-emerald-400 animate-pulse"></span>
                    <h2 class="font-geely text-lg sm:text-xl uppercase tracking-wider text-white">Live Traffic Analytics</h2>
                </div>
                <span class="text-[10px] sm:text-[11px] text-gray-400 tracking-wider">Statistik Pengunjung Landing Page</span>
            </div>

            <!-- Kartu Metrik Kunjungan -->
            <div class="grid grid-cols-2 lg:grid-cols-4 gap-2.5 sm:gap-4">
                <div class="hud-card p-3.5 sm:p-5 relative overflow-hidden">
                    <div class="absolute top-0 right-0 w-20 h-20 bg-cyan-500/10 rounded-full blur-[25px] pointer-events-none"></div>
                    <span class="text-[9px] sm:text-[10px] font-bold tracking-[0.15em] sm:tracking-[0.2em] uppercase text-gray-400 block mb-1">Total Pageviews</span>
                    <div class="font-geely text-2xl sm:text-4xl text-white">{{ number_format($analytics['total_views'] ?? 0) }}</div>
                    <span class="text-[10px] sm:text-[11px] text-[#00b4d8] mt-1.5 sm:mt-2 block font-medium">+{{ number_format($analytics['today_views'] ?? 0) }} hari ini</span>
                </div>

                <div class="hud-card p-3.5 sm:p-5 relative overflow-hidden">
                    <div class="absolute top-0 right-0 w-20 h-20 bg-indigo-500/10 rounded-full blur-[25px] pointer-events-none"></div>
                    <span class="text-[9px] sm:text-[10px] font-bold tracking-[0.15em] sm:tracking-[0.2em] uppercase text-gray-400 block mb-1">Pengunjung Unik</span>
                    <div class="font-geely text-2xl sm:text-4xl text-white">{{ number_format($analytics['total_uniques'] ?? 0) }}</div>
                    <span class="text-[10px] sm:text-[11px] text-indigo-400 mt-1.5 sm:mt-2 block font-medium">+{{ number_format($analytics['today_uniques'] ?? 0) }} hari ini</span>
                </div>

                <div class="hud-card p-3.5 sm:p-5 relative overflow-hidden">
                    <div class="absolute top-0 right-0 w-20 h-20 bg-emerald-500/10 rounded-full blur-[25px] pointer-events-none"></div>
                    <span class="text-[9px] sm:text-[10px] font-bold tracking-[0.15em] sm:tracking-[0.2em] uppercase text-gray-400 block mb-1">Perangkat (Device)</span>
                    <div class="flex items-baseline gap-1.5 mt-0.5">
                        <span class="text-xl sm:text-3xl font-geely text-emerald-400">{{ $analytics['mobile_percent'] ?? 0 }}%</span>
                        <span class="text-[10px] sm:text-xs text-gray-400">Mobile</span>
                    </div>
                    <div class="w-full bg-white/10 h-1.5 rounded-full overflow-hidden mt-2.5 sm:mt-3 flex">
                        <div class="bg-emerald-400 h-full" style="width: {{ $analytics['mobile_percent'] ?? 0 }}%"></div>
                        <div class="bg-blue-400 h-full" style="width: {{ $analytics['desktop_percent'] ?? 0 }}%"></div>
                        <div class="bg-amber-400 h-full" style="width: {{ $analytics['tablet_percent'] ?? 0 }}%"></div>
                    </div>
                    <div class="flex justify-between text-[8px] sm:text-[9px] text-gray-400 mt-1 uppercase tracking-wider">
                        <span>Desktop: {{ $analytics['desktop_percent'] ?? 0 }}%</span>
                        <span>Tab: {{ $analytics['tablet_percent'] ?? 0 }}%</span>
                    </div>
                </div>

                <div class="hud-card p-3.5 sm:p-5 relative overflow-hidden">
                    <div class="absolute top-0 right-0 w-20 h-20 bg-pink-500/10 rounded-full blur-[25px] pointer-events-none"></div>
                    <span class="text-[9px] sm:text-[10px] font-bold tracking-[0.15em] sm:tracking-[0.2em] uppercase text-gray-400 block mb-1">Conversion Rate</span>
                    @php
                        $totalLeadsCount = $stats['total'] ?? $metrics['total'] ?? 0;
                        $conversionRate = ($analytics['total_uniques'] ?? 0) > 0 
                            ? round(($totalLeadsCount / $analytics['total_uniques']) * 100, 1) 
                            : 0;
                    @endphp
                    <div class="font-geely text-2xl sm:text-4xl text-pink-400">{{ $conversionRate }}%</div>
                    <span class="text-[10px] sm:text-[11px] text-gray-400 mt-1.5 sm:mt-2 block font-medium truncate">{{ $totalLeadsCount }} leads / {{ $analytics['total_uniques'] ?? 0 }} visitor</span>
                </div>
            </div>

            <!-- GRAFIK UTAMA: TRAFIK KUNJUNGAN VS PROSPEK CUSTOMER (DUAL AXIS GLOW SPLINE) -->
            <div class="hud-card p-4 sm:p-7 relative overflow-hidden">
                <div class="flex flex-col md:flex-row md:items-center justify-between gap-4 mb-6">
                    <div>
                        <div class="flex items-center gap-2.5">
                            <span class="text-[#00E5FF]">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6"/></svg>
                            </span>
                            <h3 class="font-geely text-base sm:text-2xl uppercase tracking-wider text-white">
                                TRAFIK KUNJUNGAN VS PROSPEK CUSTOMER
                            </h3>
                        </div>
                        <p class="text-[11px] sm:text-xs text-gray-400 mt-1">
                            Tren statistik pengunjung website dibandingkan konversi booking test drive (7 Hari Terakhir).
                        </p>
                    </div>

                    <div class="flex items-center gap-4 sm:gap-6 text-xs font-semibold self-start md:self-auto">
                        <div class="flex items-center gap-2">
                            <span class="w-3 h-3 rounded-full bg-[#00E5FF] shadow-[0_0_10px_#00E5FF]"></span>
                            <span class="text-white text-xs">Pengunjung Web</span>
                        </div>
                        <div class="flex items-center gap-2">
                            <span class="w-3 h-3 rounded-full bg-[#A855F7] shadow-[0_0_10px_#A855F7]"></span>
                            <span class="text-white text-xs">Lead Test Drive</span>
                        </div>
                    </div>
                </div>

                <!-- Canvas Chart.js -->
                <div class="relative w-full h-[280px] sm:h-[360px]">
                    <canvas id="trafficComparisonChart"></canvas>
                </div>

                <!-- 3 Kotak Metrik Ringkasan di Bawah Grafik -->
                <div class="grid grid-cols-1 md:grid-cols-3 gap-3 sm:gap-4 mt-6 pt-6 border-t border-white/10">
                    <div class="hud-card-sm p-4 sm:p-5 text-center flex flex-col items-center justify-center">
                        <span class="text-[10px] sm:text-[11px] font-bold tracking-[0.18em] uppercase text-gray-400 block mb-2">
                            RATA-RATA PENGUNJUNG/HARI
                        </span>
                        <div class="font-orbitron text-2xl sm:text-4xl text-[#00E5FF] font-bold tracking-tight">
                            {{ $analytics['avg_visitors_per_day'] ?? 27 }}
                        </div>
                    </div>

                    <div class="hud-card-sm p-4 sm:p-5 text-center flex flex-col items-center justify-center">
                        <span class="text-[10px] sm:text-[11px] font-bold tracking-[0.18em] uppercase text-gray-400 block mb-2">
                            JAM PUNCAK KUNJUNGAN
                        </span>
                        <div class="font-orbitron text-lg sm:text-2xl text-[#EAB308] font-bold tracking-wider">
                            {{ $analytics['peak_visiting_hour'] ?? '14:00 - 15:00 WIB' }}
                        </div>
                    </div>

                    <div class="hud-card-sm p-4 sm:p-5 text-center flex flex-col items-center justify-center">
                        <span class="text-[10px] sm:text-[11px] font-bold tracking-[0.18em] uppercase text-gray-400 block mb-2">
                            RASIO VISITOR TO LEAD
                        </span>
                        <div class="font-orbitron text-2xl sm:text-4xl text-[#D946EF] font-bold tracking-tight">
                            {{ $analytics['ratio_visitor_to_lead'] ?? 0.1 }}%
                        </div>
                    </div>
                </div>
            </div>

            <!-- Top 5 Landing Pages -->
            <div class="hud-card p-4 sm:p-6">
                <div class="flex items-center justify-between mb-4">
                    <div>
                        <h3 class="font-semibold text-xs sm:text-sm uppercase tracking-wider text-white">Halaman Terpopuler</h3>
                        <p class="text-[10px] sm:text-[11px] text-gray-400 mt-0.5">Top kunjungan landing page berdasarkan URL path</p>
                    </div>
                    <div class="text-[9px] sm:text-[10px] text-gray-500 tracking-wider flex items-center gap-1.5">
                        <svg class="w-3.5 h-3.5 text-emerald-400 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                        Pencatatan real-time
                    </div>
                </div>

                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-5 gap-2.5">
                    @forelse($analytics['top_pages'] ?? [] as $index => $page)
                        <div class="flex items-center justify-between text-xs p-3 rounded-xl bg-white/5 border border-white/5">
                            <div class="flex items-center gap-2 overflow-hidden">
                                <span class="w-5 h-5 rounded-full bg-[#00b4d8]/20 text-[#00b4d8] text-[10px] font-bold flex items-center justify-center shrink-0">
                                    {{ $index + 1 }}
                                </span>
                                <span class="font-mono text-xs text-gray-300 truncate" title="{{ $page->path }}">{{ $page->path }}</span>
                            </div>
                            <span class="text-xs font-bold text-white shrink-0 ml-2">{{ number_format($page->views) }} <span class="text-[9px] text-gray-400 font-normal">views</span></span>
                        </div>
                    @empty
                        <div class="col-span-full text-center py-4 text-xs text-gray-500">Belum ada kunjungan tercatat.</div>
                    @endforelse
                </div>
            </div>
        </section>

        <!-- ======================================================================
             BAGIAN 2: PIPELINE LEADS CRM (TEST DRIVE, WHATSAPP, SIMULASI KREDIT)
        ====================================================================== -->
        <section id="pipeline" class="space-y-4 pt-4">
            <div class="flex flex-col sm:flex-row sm:items-center justify-between gap-2">
                <div>
                    <h2 class="font-geely text-lg sm:text-2xl uppercase tracking-wider text-white">
                        PIPELINE PROSPEK PENJUALAN
                    </h2>
                    <p class="text-[11px] sm:text-xs text-gray-400 mt-0.5">
                        Kelola data calon pembeli dari WhatsApp, form test drive, dan kalkulator kredit.
                    </p>
                </div>
                <div class="text-xs text-gray-400 tracking-wider">
                    Total Masuk: <span class="text-white font-bold">{{ $stats['total'] ?? $metrics['total'] ?? 0 }}</span> leads
                </div>
            </div>

            <!-- Leads Status Cards Filter (Horizontal Scroll di Mobile) -->
            <div class="flex overflow-x-auto custom-scrollbar gap-2 sm:gap-3 pb-2 -mx-3 px-3 sm:mx-0 sm:px-0">
                <a href="{{ route('admin.leads.index', array_merge(request()->except('status'), ['#pipeline'])) }}" 
                   class="hud-card-sm p-3.5 sm:p-4 min-w-[130px] sm:min-w-[150px] flex-1 block border-l-4 border-[#00b4d8] hover:bg-white/5 transition-all {{ !request('status') ? 'ring-1 ring-[#00b4d8]/40 bg-white/[0.04]' : '' }}">
                    <span class="text-[9px] sm:text-[10px] font-bold uppercase text-gray-400 tracking-wider block">Semua Lead</span>
                    <div class="font-geely text-xl sm:text-3xl text-white mt-1">{{ $stats['total'] ?? $metrics['total'] ?? 0 }}</div>
                </a>

                <a href="{{ route('admin.leads.index', array_merge(request()->except('status'), ['status' => 'new', '#pipeline'])) }}" 
                   class="hud-card-sm p-3.5 sm:p-4 min-w-[130px] sm:min-w-[150px] flex-1 block border-l-4 border-cyan-400 hover:bg-white/5 transition-all {{ request('status') === 'new' ? 'ring-1 ring-cyan-400/40 bg-white/[0.04]' : '' }}">
                    <span class="text-[9px] sm:text-[10px] font-bold uppercase text-cyan-400 tracking-wider block">Baru (New)</span>
                    <div class="font-geely text-xl sm:text-3xl text-white mt-1">{{ $stats['new'] ?? $metrics['new'] ?? 0 }}</div>
                </a>

                <a href="{{ route('admin.leads.index', array_merge(request()->except('status'), ['status' => 'contacted', '#pipeline'])) }}" 
                   class="hud-card-sm p-3.5 sm:p-4 min-w-[130px] sm:min-w-[150px] flex-1 block border-l-4 border-amber-400 hover:bg-white/5 transition-all {{ request('status') === 'contacted' ? 'ring-1 ring-amber-400/40 bg-white/[0.04]' : '' }}">
                    <span class="text-[9px] sm:text-[10px] font-bold uppercase text-amber-400 tracking-wider block">Dihubungi</span>
                    <div class="font-geely text-xl sm:text-3xl text-white mt-1">{{ $stats['contacted'] ?? $metrics['contacted'] ?? 0 }}</div>
                </a>

                <a href="{{ route('admin.leads.index', array_merge(request()->except('status'), ['status' => 'scheduled', '#pipeline'])) }}" 
                   class="hud-card-sm p-3.5 sm:p-4 min-w-[130px] sm:min-w-[150px] flex-1 block border-l-4 border-blue-400 hover:bg-white/5 transition-all {{ request('status') === 'scheduled' ? 'ring-1 ring-blue-400/40 bg-white/[0.04]' : '' }}">
                    <span class="text-[9px] sm:text-[10px] font-bold uppercase text-blue-400 tracking-wider block">Scheduled</span>
                    <div class="font-geely text-xl sm:text-3xl text-white mt-1">{{ $stats['scheduled'] ?? $metrics['scheduled'] ?? $metrics['qualified'] ?? 0 }}</div>
                </a>

                <a href="{{ route('admin.leads.index', array_merge(request()->except('status'), ['status' => 'deal', '#pipeline'])) }}" 
                   class="hud-card-sm p-3.5 sm:p-4 min-w-[130px] sm:min-w-[150px] flex-1 block border-l-4 border-emerald-400 hover:bg-white/5 transition-all {{ request('status') === 'deal' ? 'ring-1 ring-emerald-400/40 bg-white/[0.04]' : '' }}">
                    <span class="text-[9px] sm:text-[10px] font-bold uppercase text-emerald-400 tracking-wider block">SPK / Deal</span>
                    <div class="font-geely text-xl sm:text-3xl text-white mt-1">{{ $stats['deal'] ?? $metrics['deal'] ?? $metrics['converted'] ?? 0 }}</div>
                </a>

                <a href="{{ route('admin.leads.index', array_merge(request()->except('status'), ['status' => 'lost', '#pipeline'])) }}" 
                   class="hud-card-sm p-3.5 sm:p-4 min-w-[130px] sm:min-w-[150px] flex-1 block border-l-4 border-rose-400 hover:bg-white/5 transition-all {{ request('status') === 'lost' ? 'ring-1 ring-rose-400/40 bg-white/[0.04]' : '' }}">
                    <span class="text-[9px] sm:text-[10px] font-bold uppercase text-rose-400 tracking-wider block">Drop / Lost</span>
                    <div class="font-geely text-xl sm:text-3xl text-white mt-1">{{ $stats['lost'] ?? $metrics['lost'] ?? 0 }}</div>
                </a>
            </div>

            <!-- Filter Kategori Channel Leads -->
            <div class="hud-card p-3 sm:p-4 flex flex-wrap items-center justify-between gap-3">
                <div class="flex flex-wrap items-center gap-2">
                    <span class="text-[10px] uppercase font-bold tracking-wider text-gray-400 mr-1 hidden sm:inline">Channel:</span>
                    
                    <a href="{{ route('admin.leads.index', array_merge(request()->except('type'), ['#pipeline'])) }}" 
                       class="px-3 py-1.5 rounded-lg text-xs font-semibold tracking-wider uppercase transition-all {{ !request('type') ? 'bg-[#00b4d8] text-black shadow-[0_0_15px_rgba(0,180,216,0.4)]' : 'bg-white/5 text-gray-300 hover:bg-white/10' }}">
                        Semua Channel
                    </a>

                    <a href="{{ route('admin.leads.index', array_merge(request()->except('type'), ['type' => 'test_drive', '#pipeline'])) }}" 
                       class="px-3 py-1.5 rounded-lg text-xs font-semibold tracking-wider uppercase transition-all flex items-center gap-1.5 {{ request('type') === 'test_drive' ? 'bg-cyan-500 text-black shadow-[0_0_15px_rgba(6,182,212,0.4)]' : 'bg-white/5 text-cyan-300 hover:bg-white/10' }}">
                        <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"/></svg>
                        Test Drive ({{ $stats['test_drive'] ?? 0 }})
                    </a>

                    <a href="{{ route('admin.leads.index', array_merge(request()->except('type'), ['type' => 'whatsapp_inquiry', '#pipeline'])) }}" 
                       class="px-3 py-1.5 rounded-lg text-xs font-semibold tracking-wider uppercase transition-all flex items-center gap-1.5 {{ request('type') === 'whatsapp_inquiry' ? 'bg-emerald-500 text-black shadow-[0_0_15px_rgba(16,185,129,0.4)]' : 'bg-white/5 text-emerald-300 hover:bg-white/10' }}">
                        <svg class="w-3.5 h-3.5" fill="currentColor" viewBox="0 0 24 24"><path d="M.057 24l1.687-6.163c-1.041-1.804-1.588-3.849-1.587-5.946.003-6.556 5.338-11.891 11.893-11.891 3.181.001 6.167 1.24 8.413 3.488 2.245 2.248 3.481 5.236 3.48 8.414-.003 6.557-5.338 11.892-11.893 11.892-1.99-.001-3.951-.5-5.688-1.448l-6.305 1.654zm6.597-3.807c1.676.995 3.276 1.591 5.392 1.592 5.448 0 9.886-4.434 9.889-9.885.002-5.462-4.415-9.89-9.881-9.892-5.452 0-9.887 4.434-9.889 9.884-.001 2.225.651 3.891 1.646 5.438l-.998 3.648 3.841-.785z"/></svg>
                        Chat WhatsApp ({{ $stats['whatsapp'] ?? 0 }})
                    </a>

                    <a href="{{ route('admin.leads.index', array_merge(request()->except('type'), ['type' => 'credit_simulation', '#pipeline'])) }}" 
                       class="px-3 py-1.5 rounded-lg text-xs font-semibold tracking-wider uppercase transition-all flex items-center gap-1.5 {{ request('type') === 'credit_simulation' ? 'bg-indigo-500 text-white shadow-[0_0_15px_rgba(99,102,241,0.4)]' : 'bg-white/5 text-indigo-300 hover:bg-white/10' }}">
                        <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 7h6m0 10v-3m-3 3h.01M9 17h.01M9 14h.01M12 14h.01M15 11h.01M12 11h.01M9 11h.01M7 21h10a2 2 0 002-2V5a2 2 0 00-2-2H7a2 2 0 00-2 2v14a2 2 0 002 2z"/></svg>
                        Simulasi Kredit ({{ $stats['credit'] ?? 0 }})
                    </a>
                </div>

                <div class="text-[11px] text-gray-400">
                    Hari ini: <span class="text-cyan-400 font-bold">+{{ $stats['today_total'] ?? 0 }}</span> prospek baru
                </div>
            </div>

            <!-- Form Pencarian Multi Kolom & Filter Model -->
            <div class="hud-card p-4 sm:p-5">
                <form action="{{ route('admin.leads.index') }}#pipeline" method="GET" class="flex flex-col md:flex-row gap-2.5 sm:gap-3">
                    @if(request('type'))
                        <input type="hidden" name="type" value="{{ request('type') }}">
                    @endif
                    @if(request('status'))
                        <input type="hidden" name="status" value="{{ request('status') }}">
                    @endif

                    <div class="relative flex-1">
                        <input type="text" name="search" value="{{ request('search') }}" 
                               placeholder="Cari nama, WhatsApp, email, catatan sales..." 
                               class="w-full bg-[#0a0f16] border border-white/10 rounded-xl px-4 py-3 pl-10 text-xs text-white placeholder-gray-500 focus:outline-none focus:border-[#00b4d8]">
                        <svg class="w-4 h-4 text-gray-500 absolute left-3.5 top-1/2 -translate-y-1/2 pointer-events-none" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"/></svg>
                    </div>

                    <select name="model" class="bg-[#0a0f16] border border-white/10 rounded-xl px-4 py-3 text-xs text-white focus:outline-none focus:border-[#00b4d8]">
                        <option value="">Semua Model Mobil</option>
                        <option value="ex5" {{ request('model') === 'ex5' ? 'selected' : '' }}>Geely EX5</option>
                        <option value="ex2" {{ request('model') === 'ex2' ? 'selected' : '' }}>Geely EX2</option>
                        <option value="starray" {{ request('model') === 'starray' ? 'selected' : '' }}>Starray EM-i</option>
                        <option value="coolray" {{ request('model') === 'coolray' ? 'selected' : '' }}>Geely Coolray</option>
                    </select>

                    <div class="flex gap-2">
                        <button type="submit" class="flex-1 md:flex-none px-6 py-3 rounded-xl bg-[#00b4d8] text-black font-bold text-xs uppercase tracking-wider hover:bg-[#00c4e8] transition-all">
                            Filter
                        </button>
                        @if(request()->hasAny(['search', 'model', 'status', 'type']))
                            <a href="{{ route('admin.leads.index') }}#pipeline" class="px-4 py-3 rounded-xl bg-white/5 border border-white/10 text-gray-300 hover:text-white text-xs font-semibold flex items-center justify-center">
                                Reset
                            </a>
                        @endif
                    </div>
                </form>
            </div>

            <!-- TAMPILAN 1: TABEL LEADS LEBAR (UNTUK TABLET & DESKTOP) -->
            <div class="hud-card overflow-hidden hidden md:block">
                <div class="overflow-x-auto custom-scrollbar">
                    <table class="w-full text-left border-collapse text-xs">
                        <thead>
                            <tr class="border-b border-white/10 bg-[#0a0f16] text-[10px] uppercase font-bold tracking-widest text-gray-400">
                                <th class="py-4 px-6">Pelanggan & Kontak</th>
                                <th class="py-4 px-6">Channel & Model</th>
                                <th class="py-4 px-6">Detail Permintaan</th>
                                <th class="py-4 px-6">Status Pipeline</th>
                                <th class="py-4 px-6 text-right">Tindakan</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-white/5">
                            @forelse($leads as $lead)
                                <tr class="hover:bg-white/[0.02] transition-colors">
                                    <td class="py-4 px-6">
                                        <div class="font-semibold text-white text-sm">{{ $lead->name }}</div>
                                        <div class="text-gray-400 font-mono mt-0.5">{{ $lead->phone }}</div>
                                        <div class="text-[10px] text-gray-500 mt-1">Masuk: {{ $lead->created_at ? $lead->created_at->diffForHumans() : '-' }}</div>
                                    </td>
                                    <td class="py-4 px-6">
                                        <div class="flex flex-col gap-1.5 items-start">
                                            @if(($lead->type ?? '') === 'whatsapp_inquiry')
                                                <span class="inline-flex items-center gap-1 px-2.5 py-0.5 rounded-full text-[9px] font-bold uppercase tracking-wider bg-emerald-500/10 border border-emerald-500/30 text-emerald-300">
                                                    Chat WhatsApp
                                                </span>
                                            @elseif(($lead->type ?? '') === 'credit_simulation')
                                                <span class="inline-flex items-center gap-1 px-2.5 py-0.5 rounded-full text-[9px] font-bold uppercase tracking-wider bg-indigo-500/10 border border-indigo-500/30 text-indigo-300">
                                                    Simulasi Kredit
                                                </span>
                                            @else
                                                <span class="inline-flex items-center gap-1 px-2.5 py-0.5 rounded-full text-[9px] font-bold uppercase tracking-wider bg-cyan-500/10 border border-cyan-500/30 text-cyan-300">
                                                    Test Drive
                                                </span>
                                            @endif

                                            <span class="font-bold text-gray-200 text-xs">
                                                {{ $lead->car_model_label ?? strtoupper($lead->car_model ?? $lead->model_interest ?? '-') }}
                                            </span>
                                        </div>
                                    </td>
                                    <td class="py-4 px-6">
                                        @if(($lead->type ?? '') === 'credit_simulation')
                                            <div class="text-gray-300">DP: {{ $lead->dp_percent ?? 20 }}% &bull; Tenor: {{ $lead->tenor_years ?? 5 }} Thn</div>
                                            <div class="text-[11px] text-indigo-400 font-medium mt-0.5">
                                                Angs: Rp {{ number_format($lead->estimated_installment ?? 0, 0, ',', '.') }}/bln
                                            </div>
                                        @elseif(($lead->type ?? '') === 'whatsapp_inquiry')
                                            <div class="text-gray-300 truncate max-w-[200px]" title="{{ $lead->source }}">
                                                {{ $lead->source ?? 'Floating WA Button' }}
                                            </div>
                                            <div class="text-[11px] text-gray-500 mt-0.5">Dealer BSD City</div>
                                        @else
                                            <div class="text-gray-200">
                                                {{ $lead->preferred_date ? \Carbon\Carbon::parse($lead->preferred_date)->isoFormat('D MMMM Y') : 'Fleksibel' }}
                                            </div>
                                            <div class="text-[11px] text-gray-400 mt-0.5">
                                                Jam: {{ $lead->preferred_time ?? '-' }} &bull; Lokasi: {{ $lead->dealer_location_label ?? strtoupper($lead->dealer_location ?? 'BSD') }}
                                            </div>
                                        @endif
                                    </td>
                                    <td class="py-4 px-6">
                                        <select onchange="updateLeadStatus({{ $lead->id }}, this.value)" 
                                                class="bg-[#0a0f16] border border-white/15 rounded-lg px-3 py-1.5 text-xs text-white focus:outline-none focus:border-[#00b4d8] cursor-pointer">
                                            <option value="new" {{ $lead->status === 'new' ? 'selected' : '' }}>New</option>
                                            <option value="contacted" {{ $lead->status === 'contacted' ? 'selected' : '' }}>Contacted</option>
                                            <option value="test_drive_scheduled" {{ in_array($lead->status, ['test_drive_scheduled', 'scheduled', 'qualified']) ? 'selected' : '' }}>Scheduled</option>
                                            <option value="spk_deal" {{ in_array($lead->status, ['spk_deal', 'converted', 'deal']) ? 'selected' : '' }}>SPK / Deal</option>
                                            <option value="lost" {{ in_array($lead->status, ['lost', 'cancelled']) ? 'selected' : '' }}>Lost</option>
                                        </select>
                                    </td>
                                    <td class="py-4 px-6 text-right">
                                        <a href="{{ $lead->whatsapp_follow_up_url ?? ('https://wa.me/' . preg_replace('/[^0-9]/', '', $lead->phone)) }}" 
                                           target="_blank" 
                                           class="inline-flex items-center gap-1.5 px-3 py-1.5 rounded-lg bg-emerald-500/10 border border-emerald-500/30 text-emerald-400 hover:bg-emerald-500 hover:text-black transition-all font-semibold text-[11px] tracking-wider uppercase">
                                            <svg class="w-3.5 h-3.5" fill="currentColor" viewBox="0 0 24 24"><path d="M.057 24l1.687-6.163c-1.041-1.804-1.588-3.849-1.587-5.946.003-6.556 5.338-11.891 11.893-11.891 3.181.001 6.167 1.24 8.413 3.488 2.245 2.248 3.481 5.236 3.48 8.414-.003 6.557-5.338 11.892-11.893 11.892-1.99-.001-3.951-.5-5.688-1.448l-6.305 1.654zm6.597-3.807c1.676.995 3.276 1.591 5.392 1.592 5.448 0 9.886-4.434 9.889-9.885.002-5.462-4.415-9.89-9.881-9.892-5.452 0-9.887 4.434-9.889 9.884-.001 2.225.651 3.891 1.646 5.438l-.998 3.648 3.841-.785z"/></svg>
                                            Chat WA
                                        </a>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="5" class="py-12 text-center text-gray-500 text-xs">
                                        Belum ada data prospek yang sesuai kriteria pencarian.
                                    </td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>

                <div class="p-4 border-t border-white/10">
                    {{ $leads->links() }}
                </div>
            </div>

            <!-- TAMPILAN 2: MOBILE CARD VIEW (UNTUK SMARTPHONE) -->
            <div class="space-y-3 block md:hidden">
                @forelse($leads as $lead)
                    <div class="hud-card p-4 space-y-3">
                        <div class="flex items-start justify-between gap-2">
                            <div>
                                <h4 class="font-bold text-white text-base">{{ $lead->name }}</h4>
                                <div class="text-gray-400 font-mono text-xs">{{ $lead->phone }}</div>
                                <span class="text-[10px] text-gray-500 block mt-0.5">
                                    {{ $lead->created_at ? $lead->created_at->diffForHumans() : '-' }}
                                </span>
                            </div>

                            @if(($lead->type ?? '') === 'whatsapp_inquiry')
                                <span class="px-2.5 py-1 rounded-full text-[9px] font-bold uppercase tracking-wider bg-emerald-500/15 border border-emerald-500/30 text-emerald-300 shrink-0">
                                    WA Inquiry
                                </span>
                            @elseif(($lead->type ?? '') === 'credit_simulation')
                                <span class="px-2.5 py-1 rounded-full text-[9px] font-bold uppercase tracking-wider bg-indigo-500/15 border border-indigo-500/30 text-indigo-300 shrink-0">
                                    Kredit
                                </span>
                            @else
                                <span class="px-2.5 py-1 rounded-full text-[9px] font-bold uppercase tracking-wider bg-cyan-500/15 border border-cyan-500/30 text-cyan-300 shrink-0">
                                    Test Drive
                                </span>
                            @endif
                        </div>

                        <div class="p-2.5 rounded-xl bg-white/[0.03] border border-white/5 text-xs space-y-1">
                            <div class="text-gray-300 font-semibold">
                                Model: <span class="text-white">{{ $lead->car_model_label ?? strtoupper($lead->car_model ?? $lead->model_interest ?? '-') }}</span>
                            </div>
                            @if(($lead->type ?? '') === 'credit_simulation')
                                <div class="text-gray-400 text-[11px]">
                                    DP: {{ $lead->dp_percent ?? 20 }}% &bull; Tenor: {{ $lead->tenor_years ?? 5 }} Thn
                                </div>
                                <div class="text-indigo-400 text-[11px] font-medium">
                                    Est. Angsuran: Rp {{ number_format($lead->estimated_installment ?? 0, 0, ',', '.') }}/bln
                                </div>
                            @else
                                <div class="text-gray-400 text-[11px]">
                                    Jadwal: {{ $lead->preferred_date ? \Carbon\Carbon::parse($lead->preferred_date)->isoFormat('D MMM Y') : 'Fleksibel' }} ({{ $lead->preferred_time ?? '-' }})
                                </div>
                                <div class="text-gray-400 text-[11px]">
                                    Titik: {{ $lead->dealer_location_label ?? strtoupper($lead->dealer_location ?? 'Dealer BSD') }}
                                </div>
                            @endif
                        </div>

                        <div class="flex items-center gap-2 pt-1">
                            <div class="flex-1">
                                <select onchange="updateLeadStatus({{ $lead->id }}, this.value)" 
                                        class="w-full bg-[#0a0f16] border border-white/15 rounded-xl px-3 py-2 text-xs text-white focus:outline-none focus:border-[#00b4d8]">
                                    <option value="new" {{ $lead->status === 'new' ? 'selected' : '' }}>New</option>
                                    <option value="contacted" {{ $lead->status === 'contacted' ? 'selected' : '' }}>Contacted</option>
                                    <option value="test_drive_scheduled" {{ in_array($lead->status, ['test_drive_scheduled', 'scheduled', 'qualified']) ? 'selected' : '' }}>Scheduled</option>
                                    <option value="spk_deal" {{ in_array($lead->status, ['spk_deal', 'converted', 'deal']) ? 'selected' : '' }}>SPK / Deal</option>
                                    <option value="lost" {{ in_array($lead->status, ['lost', 'cancelled']) ? 'selected' : '' }}>Lost</option>
                                </select>
                            </div>

                            <a href="{{ $lead->whatsapp_follow_up_url ?? ('https://wa.me/' . preg_replace('/[^0-9]/', '', $lead->phone)) }}" 
                               target="_blank" 
                               class="flex-1 py-2 px-3 rounded-xl bg-emerald-500/15 border border-emerald-500/40 text-emerald-300 font-bold text-xs uppercase tracking-wider flex items-center justify-center gap-1.5">
                                <svg class="w-3.5 h-3.5" fill="currentColor" viewBox="0 0 24 24"><path d="M.057 24l1.687-6.163c-1.041-1.804-1.588-3.849-1.587-5.946.003-6.556 5.338-11.891 11.893-11.891 3.181.001 6.167 1.24 8.413 3.488 2.245 2.248 3.481 5.236 3.48 8.414-.003 6.557-5.338 11.892-11.893 11.892-1.99-.001-3.951-.5-5.688-1.448l-6.305 1.654zm6.597-3.807c1.676.995 3.276 1.591 5.392 1.592 5.448 0 9.886-4.434 9.889-9.885.002-5.462-4.415-9.89-9.881-9.892-5.452 0-9.887 4.434-9.889 9.884-.001 2.225.651 3.891 1.646 5.438l-.998 3.648 3.841-.785z"/></svg>
                                Chat WA
                            </a>
                        </div>
                    </div>
                @empty
                    <div class="hud-card p-8 text-center text-xs text-gray-500">
                        Belum ada data prospek yang sesuai kriteria pencarian.
                    </div>
                @endforelse

                <div class="pt-2">
                    {{ $leads->links() }}
                </div>
            </div>
        </section>

    </main>

    <script>
        // Fungsi helper untuk menampilkan notifikasi toast (Pengganti alert)
        function showToast(message, isError = false) {
            const toast = document.getElementById('toastNotification');
            const msgEl = document.getElementById('toastMessage');
            const iconEl = document.getElementById('toastIcon');

            if (!toast || !msgEl) return;

            msgEl.textContent = message;
            if (isError) {
                iconEl.className = 'w-2.5 h-2.5 rounded-full bg-rose-500 animate-pulse';
            } else {
                iconEl.className = 'w-2.5 h-2.5 rounded-full bg-[#00E5FF] animate-pulse';
            }

            toast.classList.remove('translate-y-[-150%]', 'opacity-0');
            toast.classList.add('translate-y-0', 'opacity-100');

            setTimeout(() => {
                toast.classList.remove('translate-y-0', 'opacity-100');
                toast.classList.add('translate-y-[-150%]', 'opacity-0');
            }, 3500);
        }

        // Fungsi Update Status Pipeline Lead via AJAX
        function updateLeadStatus(leadId, newStatus) {
            const csrfToken = document.querySelector('meta[name="csrf-token"]') 
                ? document.querySelector('meta[name="csrf-token"]').getAttribute('content') 
                : '{{ csrf_token() }}';

            fetch(`/admin/leads/${leadId}/status`, {
                method: 'PATCH',
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': csrfToken,
                    'Accept': 'application/json'
                },
                body: JSON.stringify({ status: newStatus })
            })
            .then(res => res.json())
            .then(data => {
                if (data.success) {
                    showToast(data.message || 'Status prospek berhasil diperbarui.');
                } else {
                    showToast('Gagal memperbarui status prospek.', true);
                }
            })
            .catch(err => {
                console.error(err);
                showToast('Terjadi kendala koneksi ke server.', true);
            });
        }

        document.addEventListener('DOMContentLoaded', function () {
            // 1. Pemulihan Posisi Scroll Otomatis (Mencegah Layar Lompat ke Atas)
            const savedScrollPos = sessionStorage.getItem('crm_leads_scroll_pos');
            if (savedScrollPos !== null) {
                window.scrollTo({
                    top: parseInt(savedScrollPos, 10),
                    behavior: 'instant'
                });
                sessionStorage.removeItem('crm_leads_scroll_pos');
            }

            // Simpan posisi scroll sebelum halaman reload akibat filter
            const pipelineSection = document.getElementById('pipeline');
            if (pipelineSection) {
                pipelineSection.addEventListener('click', function (e) {
                    const link = e.target.closest('a');
                    if (link && !link.hasAttribute('target') && !link.href.startsWith('tel:') && !link.href.startsWith('https://wa.me')) {
                        sessionStorage.setItem('crm_leads_scroll_pos', window.scrollY);
                    }
                });

                pipelineSection.addEventListener('submit', function () {
                    sessionStorage.setItem('crm_leads_scroll_pos', window.scrollY);
                });
            }

            // 2. Inisialisasi Chart.js Dual-Axis Glowing Spline
            const canvas = document.getElementById('trafficComparisonChart');
            if (canvas) {
                const ctx = canvas.getContext('2d');
                const rawChartData = @json($analytics['chart_data'] ?? []);
                
                const labels = rawChartData.map(d => d.label);
                const visitorData = rawChartData.map(d => d.views || 0);
                const leadData = rawChartData.map(d => d.leads || 0);

                // Gradient Biru/Cyan di bawah kurva Pengunjung Web
                const visitorGradient = ctx.createLinearGradient(0, 0, 0, 320);
                visitorGradient.addColorStop(0, 'rgba(0, 229, 255, 0.40)');
                visitorGradient.addColorStop(0.6, 'rgba(0, 180, 216, 0.12)');
                visitorGradient.addColorStop(1, 'rgba(0, 229, 255, 0.0)');

                const maxVisitorVal = Math.max(...visitorData, 10);
                const maxLeadVal = Math.max(...leadData, 1);

                new Chart(ctx, {
                    type: 'line',
                    data: {
                        labels: labels,
                        datasets: [
                            {
                                label: 'Pengunjung Web',
                                data: visitorData,
                                yAxisID: 'yVisitors',
                                borderColor: '#00E5FF',
                                borderWidth: 3,
                                backgroundColor: visitorGradient,
                                fill: true,
                                tension: 0.45,
                                pointBackgroundColor: '#FFFFFF',
                                pointBorderColor: '#00E5FF',
                                pointBorderWidth: 3,
                                pointRadius: 5.5,
                                pointHoverRadius: 8,
                                pointHoverBackgroundColor: '#FFFFFF',
                                pointHoverBorderColor: '#00E5FF',
                                pointHoverBorderWidth: 4,
                            },
                            {
                                label: 'Lead Test Drive',
                                data: leadData,
                                yAxisID: 'yLeads',
                                borderColor: '#A855F7',
                                borderWidth: 3,
                                backgroundColor: 'transparent',
                                fill: false,
                                tension: 0.45,
                                pointBackgroundColor: '#FFFFFF',
                                pointBorderColor: '#A855F7',
                                pointBorderWidth: 3,
                                pointRadius: 5.5,
                                pointHoverRadius: 8,
                                pointHoverBackgroundColor: '#FFFFFF',
                                pointHoverBorderColor: '#A855F7',
                                pointHoverBorderWidth: 4,
                            }
                        ]
                    },
                    options: {
                        responsive: true,
                        maintainAspectRatio: false,
                        interaction: {
                            mode: 'index',
                            intersect: false,
                        },
                        plugins: {
                            legend: {
                                display: false
                            },
                            tooltip: {
                                backgroundColor: 'rgba(7, 12, 18, 0.95)',
                                titleColor: '#FFFFFF',
                                titleFont: { family: 'Inter', size: 12, weight: 'bold' },
                                bodyFont: { family: 'Inter', size: 11 },
                                bodySpacing: 6,
                                padding: 12,
                                borderColor: 'rgba(255, 255, 255, 0.15)',
                                borderWidth: 1,
                                cornerRadius: 10,
                                callbacks: {
                                    label: function (context) {
                                        if (context.datasetIndex === 0) {
                                            return ` Pengunjung Web: ${context.parsed.y} views`;
                                        } else {
                                            return ` Lead Test Drive: ${context.parsed.y} prospek`;
                                        }
                                    }
                                }
                            }
                        },
                        scales: {
                            x: {
                                grid: {
                                    color: 'rgba(255, 255, 255, 0.05)',
                                    drawBorder: false,
                                },
                                ticks: {
                                    color: '#94A3B8',
                                    font: { family: 'Inter', size: 11, weight: '500' },
                                    padding: 8
                                }
                            },
                            yVisitors: {
                                type: 'linear',
                                position: 'left',
                                beginAtZero: true,
                                suggestedMax: Math.ceil(maxVisitorVal * 1.15),
                                grid: {
                                    color: 'rgba(255, 255, 255, 0.05)',
                                    drawBorder: false,
                                },
                                ticks: {
                                    color: '#00E5FF',
                                    font: { family: 'Inter', size: 11, weight: '600' },
                                    padding: 10,
                                    stepSize: Math.max(10, Math.ceil(maxVisitorVal / 6))
                                }
                            },
                            yLeads: {
                                type: 'linear',
                                position: 'right',
                                beginAtZero: true,
                                suggestedMax: Math.max(1, maxLeadVal),
                                grid: {
                                    drawOnChartArea: false,
                                    drawBorder: false,
                                },
                                ticks: {
                                    color: '#A855F7',
                                    font: { family: 'Inter', size: 11, weight: '700' },
                                    padding: 10,
                                    precision: 0
                                }
                            }
                        }
                    }
                });
            }
        });
    </script>

</body>
</html>