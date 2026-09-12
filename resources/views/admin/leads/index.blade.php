<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <title>CRM Leads & Web Traffic Analytics | Dealer Resmi Geely BSD</title>
    
    <link rel="icon" type="image/png" href="{{ asset('favicon.png') }}?v={{ time() }}">
    <link rel="preload" href="https://assets.zyrosite.com/Yle46KEPN6IkVONg/GEELY Bold Regular.woff2" as="font" type="font/woff2" crossorigin>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">

    <script src="https://cdn.tailwindcss.com"></script>

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

        .hide-scrollbar::-webkit-scrollbar {
            display: none;
        }
        .hide-scrollbar {
            -ms-overflow-style: none;
            scrollbar-width: none;
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
<body class="min-h-screen pb-20 selection:bg-[#00b4d8] selection:text-black overflow-x-hidden">

    <header class="border-b border-white/10 bg-[#080d14]/95 backdrop-blur-md sticky top-0 z-40">
        <div class="max-w-[1600px] mx-auto px-4 sm:px-6 lg:px-8 h-16 sm:h-20 flex items-center justify-between">
            <div class="flex items-center gap-3 sm:gap-4">
                <img src="{{ asset('assets/footer-logos-geely.png') }}" alt="Geely Logo" class="h-7 sm:h-9 w-auto object-contain">
                <div class="h-5 sm:h-6 w-[1px] bg-white/15"></div>
                <div>
                    <h1 class="font-geely text-sm sm:text-lg uppercase tracking-tight text-white flex items-center gap-1.5 sm:gap-2">
                        Geely <span class="text-[#00b4d8]">Dashboard</span>
                    </h1>
                    <p class="text-[9px] sm:text-[10px] text-gray-400 tracking-wider uppercase truncate max-w-[140px] sm:max-w-none">
                        Dama &bull; {{ Auth::user()->name ?? 'Admin' }}
                    </p>
                </div>
            </div>

            <div class="flex items-center gap-2 sm:gap-3">
                <a href="{{ route('home') }}" target="_blank" class="hidden md:inline-flex px-3.5 py-2 rounded-xl hud-card-sm hover:bg-white/10 text-gray-300 text-xs font-semibold tracking-wider transition-all">
                    Lihat Web &rarr;
                </a>
                
                <a href="{{ route('admin.leads.export') }}" title="Ekspor Leads ke CSV" class="inline-flex items-center justify-center gap-1.5 px-3 sm:px-4 py-2 rounded-xl bg-[#00b4d8] hover:bg-[#00c4e8] text-black text-[11px] sm:text-xs font-bold uppercase tracking-wider transition-all shadow-[0_0_15px_rgba(0,180,216,0.35)]">
                    <svg class="w-3.5 h-3.5 sm:w-4 sm:h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 10v6m0 0l-3-3m3 3l3-3m2 8H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path></svg>
                    <span class="hidden xs:inline">CSV</span>
                </a>

                <form method="POST" action="{{ route('admin.logout') }}" class="inline-block">
                    @csrf
                    <button type="submit" title="Keluar dari Panel Admin" class="p-2 sm:px-3.5 sm:py-2 rounded-xl bg-rose-500/10 hover:bg-rose-500 text-rose-400 hover:text-white text-[11px] sm:text-xs font-bold uppercase tracking-wider transition-all border border-rose-500/30 flex items-center gap-1 cursor-pointer">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1"></path></svg>
                        <span class="hidden sm:inline">Logout</span>
                    </button>
                </form>
            </div>
        </div>
    </header>

    <main class="max-w-[1600px] mx-auto px-3.5 sm:px-6 lg:px-8 pt-5 sm:pt-8 space-y-6 sm:space-y-8">

        <!-- Flash Message -->
        @if(session('success'))
        <div class="p-3.5 sm:p-4 rounded-2xl bg-emerald-500/10 border border-emerald-500/30 text-emerald-300 text-xs flex items-center justify-between">
            <span class="pr-2">{{ session('success') }}</span>
            <button onclick="this.parentElement.remove()" class="text-emerald-400 font-bold p-1">&times;</button>
        </div>
        @endif

        <!-- ======================================================================
             BAGIAN 1: STATISTIK KUNJUNGAN WEB (WEB TRAFFIC REALTIME)
        ====================================================================== -->
        <section class="space-y-3.5 sm:space-y-4">
            <div class="flex items-center justify-between">
                <div class="flex items-center gap-2.5">
                    <span class="w-2.5 h-2.5 rounded-full bg-emerald-400 animate-pulse"></span>
                    <h2 class="font-geely text-base sm:text-xl uppercase tracking-wider text-white">Live Traffic Analytics</h2>
                </div>
                <span class="text-[10px] sm:text-[11px] text-gray-400 tracking-wider">Geely BSD Portal</span>
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

            <div class="grid grid-cols-1 lg:grid-cols-12 gap-3.5 sm:gap-6">
                <!-- Grafik Bar Kunjungan 7 Hari -->
                <div class="lg:col-span-8 hud-card p-4 sm:p-6">
                    <div class="flex flex-col sm:flex-row sm:items-center justify-between mb-4 sm:mb-6 gap-2">
                        <div>
                            <h3 class="font-semibold text-xs sm:text-sm uppercase tracking-wider text-white">Tren Kunjungan 7 Hari</h3>
                            <p class="text-[10px] sm:text-[11px] text-gray-400 mt-0.5">Perbandingan tayangan & pengunjung unik</p>
                        </div>
                        <div class="flex items-center gap-3 text-[9px] sm:text-[10px] uppercase font-bold tracking-wider self-start sm:self-auto">
                            <span class="flex items-center gap-1.5"><span class="w-2 h-2 rounded-sm bg-[#00b4d8]"></span> Pageviews</span>
                            <span class="flex items-center gap-1.5"><span class="w-2 h-2 rounded-sm bg-indigo-500"></span> Unique</span>
                        </div>
                    </div>

                    <div class="h-44 sm:h-48 flex items-end justify-between gap-1.5 sm:gap-2 pt-2 px-1 sm:px-2 border-b border-white/10">
                        @foreach($analytics['chart_data'] ?? [] as $day)
                            @php
                                $maxV = max(1, $analytics['max_views'] ?? 1);
                                $barHeightViews = max(6, round(($day['views'] / $maxV) * 100));
                                $barHeightUniques = max(6, round(($day['uniques'] / $maxV) * 100));
                            @endphp
                            <div class="flex-1 flex flex-col items-center gap-1 group relative">
                                <div class="absolute -top-12 bg-black/90 text-white text-[9px] sm:text-[10px] py-1 px-1.5 rounded border border-white/20 opacity-0 group-hover:opacity-100 transition-opacity pointer-events-none whitespace-nowrap z-20 shadow-lg">
                                    {{ $day['views'] }} Views ({{ $day['uniques'] }} Unik)
                                </div>

                                <div class="w-full flex items-end justify-center gap-0.5 sm:gap-1 h-32 sm:h-36">
                                    <div class="w-2 sm:w-4 bg-[#00b4d8] rounded-t transition-all duration-500 hover:brightness-125" style="height: {{ $barHeightViews }}%"></div>
                                    <div class="w-2 sm:w-4 bg-indigo-500 rounded-t transition-all duration-500 hover:brightness-125" style="height: {{ $barHeightUniques }}%"></div>
                                </div>
                                <span class="text-[8px] sm:text-[10px] text-gray-400 mt-1 sm:mt-2 font-mono whitespace-nowrap truncate w-full text-center">
                                    {{ \Illuminate\Support\Str::substr($day['label'], 0, 3) }}
                                </span>
                            </div>
                        @endforeach
                    </div>
                </div>

                <!-- Top 5 Landing Pages -->
                <div class="lg:col-span-4 hud-card p-4 sm:p-6 flex flex-col justify-between">
                    <div>
                        <h3 class="font-semibold text-xs sm:text-sm uppercase tracking-wider text-white mb-0.5">Halaman Terpopuler</h3>
                        <p class="text-[10px] sm:text-[11px] text-gray-400 mb-3.5 sm:mb-5">Top kunjungan landing page</p>

                        <div class="space-y-2.5">
                            @forelse($analytics['top_pages'] ?? [] as $index => $page)
                                <div class="flex items-center justify-between text-xs p-2 sm:p-2.5 rounded-xl bg-white/5 border border-white/5">
                                    <div class="flex items-center gap-2 overflow-hidden">
                                        <span class="w-4 h-4 sm:w-5 sm:h-5 rounded-full bg-[#00b4d8]/20 text-[#00b4d8] text-[9px] sm:text-[10px] font-bold flex items-center justify-center shrink-0">
                                            {{ $index + 1 }}
                                        </span>
                                        <span class="font-mono text-[11px] sm:text-xs text-gray-300 truncate" title="{{ $page->path }}">{{ $page->path }}</span>
                                    </div>
                                    <span class="text-[11px] sm:text-xs font-bold text-white shrink-0 ml-2">{{ number_format($page->views) }} <span class="text-[9px] text-gray-400 font-normal">views</span></span>
                                </div>
                            @empty
                                <div class="text-center py-5 text-xs text-gray-500">Belum ada kunjungan tercatat.</div>
                            @endforelse
                        </div>
                    </div>
                    <div class="text-[9px] sm:text-[10px] text-gray-500 tracking-wider pt-3 sm:pt-4 border-t border-white/5 flex items-center gap-1.5 mt-3 sm:mt-0">
                        <svg class="w-3.5 h-3.5 text-emerald-400 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                        Pencatatan real-time otomatis
                    </div>
                </div>
            </div>
        </section>

        <!-- ======================================================================
             BAGIAN 2: PIPELINE LEADS CRM (TEST DRIVE, WHATSAPP, SIMULASI KREDIT)
        ====================================================================== -->
        <section id="pipeline" class="space-y-3.5 sm:space-y-4 scroll-mt-24">
            <div class="flex items-center justify-between">
                <div>
                    <h2 class="font-geely text-base sm:text-xl uppercase tracking-wider text-white">Pipeline Prospek Penjualan</h2>
                    <p class="text-[10px] sm:text-[11px] text-gray-400">Total Prospek: <strong class="text-white">{{ $stats['total'] ?? $metrics['total'] ?? 0 }}</strong> &bull; Masuk Hari Ini: <strong class="text-emerald-400">+{{ $stats['today_total'] ?? $metrics['today_total'] ?? 0 }}</strong></p>
                </div>
                <div class="flex items-center gap-2">
                    <span class="hidden sm:inline-flex items-center gap-1.5 px-3 py-1 rounded-full border border-emerald-500/30 bg-emerald-500/10 text-emerald-400 text-[10px] font-bold uppercase tracking-wider">
                        <svg class="w-3 h-3 fill-current" viewBox="0 0 24 24"><path d="M12.031 6.172c-3.181 0-5.767 2.586-5.768 5.766-.001 1.298.38 2.27 1.019 3.287l-.711 2.598 2.664-.699c.97.531 1.769.82 2.8.82 3.18 0 5.768-2.587 5.768-5.767.001-3.181-2.586-5.805-5.772-5.805zm6.545 5.767c0 3.609-2.936 6.545-6.545 6.545-1.127 0-2.18-.288-3.109-.792l-4.422 1.16 1.18-4.307c-.579-.974-.894-2.09-.894-3.206 0-3.61 2.936-6.545 6.545-6.545 3.609 0 7.245 2.936 7.245 7.145z"/></svg>
                        {{ $stats['whatsapp'] ?? $metrics['whatsapp'] ?? 0 }} Chat WA
                    </span>
                </div>
            </div>

            <!-- Metrik Status Counter (Horizontal Scroll on Mobile) -->
            <div class="flex overflow-x-auto hide-scrollbar sm:grid sm:grid-cols-3 lg:grid-cols-6 gap-2 sm:gap-3 md:gap-4 -mx-3.5 px-3.5 sm:mx-0 sm:px-0">
                <a href="{{ route('admin.leads.index', array_merge(request()->except('status'))) }}#pipeline" class="hud-card-sm p-3 sm:p-4 shrink-0 min-w-[130px] sm:min-w-0 flex-1 border-l-4 border-[#00b4d8] hover:bg-white/5 transition-all {{ !request('status') ? 'bg-[#00b4d8]/10' : '' }}">
                    <span class="text-gray-400 text-[9px] sm:text-[10px] font-bold tracking-wider uppercase block truncate">Semua Lead</span>
                    <span class="text-xl sm:text-2xl font-black text-white mt-1 block">{{ $stats['total'] ?? $metrics['total'] ?? 0 }}</span>
                </a>
                <a href="{{ route('admin.leads.index', array_merge(request()->except('status'), ['status' => 'new'])) }}#pipeline" class="hud-card-sm p-3 sm:p-4 shrink-0 min-w-[130px] sm:min-w-0 flex-1 border-l-4 border-cyan-400 hover:bg-white/5 transition-all {{ request('status') === 'new' ? 'bg-cyan-500/10' : '' }}">
                    <span class="text-cyan-400 text-[9px] sm:text-[10px] font-bold tracking-wider uppercase block truncate">Baru (New)</span>
                    <span class="text-xl sm:text-2xl font-black text-cyan-300 mt-1 block">{{ $stats['new'] ?? $metrics['new'] ?? 0 }}</span>
                </a>
                <a href="{{ route('admin.leads.index', array_merge(request()->except('status'), ['status' => 'contacted'])) }}#pipeline" class="hud-card-sm p-3 sm:p-4 shrink-0 min-w-[130px] sm:min-w-0 flex-1 border-l-4 border-amber-400 hover:bg-white/5 transition-all {{ request('status') === 'contacted' ? 'bg-amber-500/10' : '' }}">
                    <span class="text-amber-400 text-[9px] sm:text-[10px] font-bold tracking-wider uppercase block truncate">Dihubungi</span>
                    <span class="text-xl sm:text-2xl font-black text-amber-300 mt-1 block">{{ $stats['contacted'] ?? $metrics['contacted'] ?? 0 }}</span>
                </a>
                <a href="{{ route('admin.leads.index', array_merge(request()->except('status'), ['status' => 'scheduled'])) }}#pipeline" class="hud-card-sm p-3 sm:p-4 shrink-0 min-w-[130px] sm:min-w-0 flex-1 border-l-4 border-blue-400 hover:bg-white/5 transition-all {{ request('status') === 'scheduled' ? 'bg-blue-500/10' : '' }}">
                    <span class="text-blue-400 text-[9px] sm:text-[10px] font-bold tracking-wider uppercase block truncate">Scheduled</span>
                    <span class="text-xl sm:text-2xl font-black text-blue-300 mt-1 block">{{ $stats['scheduled'] ?? $metrics['scheduled'] ?? 0 }}</span>
                </a>
                <a href="{{ route('admin.leads.index', array_merge(request()->except('status'), ['status' => 'deal'])) }}#pipeline" class="hud-card-sm p-3 sm:p-4 shrink-0 min-w-[130px] sm:min-w-0 flex-1 border-l-4 border-emerald-400 hover:bg-white/5 transition-all {{ request('status') === 'deal' ? 'bg-emerald-500/10' : '' }}">
                    <span class="text-emerald-400 text-[9px] sm:text-[10px] font-bold tracking-wider uppercase block truncate">SPK / Deal</span>
                    <span class="text-xl sm:text-2xl font-black text-emerald-300 mt-1 block">{{ $stats['deal'] ?? $metrics['deal'] ?? 0 }}</span>
                </a>
                <a href="{{ route('admin.leads.index', array_merge(request()->except('status'), ['status' => 'lost'])) }}#pipeline" class="hud-card-sm p-3 sm:p-4 shrink-0 min-w-[130px] sm:min-w-0 flex-1 border-l-4 border-rose-400 hover:bg-white/5 transition-all {{ request('status') === 'lost' ? 'bg-rose-500/10' : '' }}">
                    <span class="text-rose-400 text-[9px] sm:text-[10px] font-bold tracking-wider uppercase block truncate">Drop / Lost</span>
                    <span class="text-xl sm:text-2xl font-black text-rose-300 mt-1 block">{{ $stats['lost'] ?? $metrics['lost'] ?? 0 }}</span>
                </a>
            </div>

            <!-- Filter Tipe Sumber Leads (Pills Toolbar) -->
            <div class="flex items-center gap-2 overflow-x-auto hide-scrollbar pb-1">
                <a href="{{ route('admin.leads.index', array_merge(request()->except('type', 'page'))) }}#pipeline" class="px-3.5 py-1.5 rounded-xl text-xs font-bold tracking-wider uppercase transition-all whitespace-nowrap {{ !request('type') ? 'bg-white text-black' : 'hud-card-sm text-gray-400 hover:text-white' }}">
                    Semua Channel ({{ $stats['total'] ?? $metrics['total'] ?? 0 }})
                </a>
                <a href="{{ route('admin.leads.index', array_merge(request()->except('page'), ['type' => 'test_drive'])) }}#pipeline" class="px-3.5 py-1.5 rounded-xl text-xs font-bold tracking-wider uppercase transition-all whitespace-nowrap flex items-center gap-1.5 {{ request('type') === 'test_drive' ? 'bg-cyan-400 text-black' : 'hud-card-sm text-cyan-300 hover:bg-white/5' }}">
                    <span class="w-2 h-2 rounded-full bg-cyan-400 {{ request('type') === 'test_drive' ? 'bg-black' : '' }}"></span>
                    Test Drive ({{ $stats['test_drive'] ?? $metrics['test_drive'] ?? 0 }})
                </a>
                <a href="{{ route('admin.leads.index', array_merge(request()->except('page'), ['type' => 'whatsapp_inquiry'])) }}#pipeline" class="px-3.5 py-1.5 rounded-xl text-xs font-bold tracking-wider uppercase transition-all whitespace-nowrap flex items-center gap-1.5 {{ request('type') === 'whatsapp_inquiry' ? 'bg-emerald-400 text-black' : 'hud-card-sm text-emerald-300 hover:bg-white/5' }}">
                    <span class="w-2 h-2 rounded-full bg-emerald-400 {{ request('type') === 'whatsapp_inquiry' ? 'bg-black' : '' }}"></span>
                    Chat WhatsApp ({{ $stats['whatsapp'] ?? $metrics['whatsapp'] ?? 0 }})
                </a>
                <a href="{{ route('admin.leads.index', array_merge(request()->except('page'), ['type' => 'credit_simulation'])) }}#pipeline" class="px-3.5 py-1.5 rounded-xl text-xs font-bold tracking-wider uppercase transition-all whitespace-nowrap flex items-center gap-1.5 {{ request('type') === 'credit_simulation' ? 'bg-indigo-400 text-black' : 'hud-card-sm text-indigo-300 hover:bg-white/5' }}">
                    <span class="w-2 h-2 rounded-full bg-indigo-400 {{ request('type') === 'credit_simulation' ? 'bg-black' : '' }}"></span>
                    Simulasi Kredit ({{ $stats['credit'] ?? $metrics['credit'] ?? 0 }})
                </a>
            </div>

            <!-- Filter & Search Bar -->
            <div class="hud-card p-3.5 sm:p-5">
                <form method="GET" action="{{ route('admin.leads.index') }}#pipeline" class="grid grid-cols-1 sm:grid-cols-12 gap-2.5 sm:gap-3 items-center">
                    @if(request('status'))
                    <input type="hidden" name="status" value="{{ request('status') }}">
                    @endif
                    @if(request('type'))
                    <input type="hidden" name="type" value="{{ request('type') }}">
                    @endif

                    <div class="sm:col-span-6">
                        <input type="text" name="search" value="{{ request('search') }}" placeholder="Cari nama, no. WhatsApp, atau sumber..." class="w-full px-3.5 sm:px-4 py-2.5 rounded-xl bg-[#0a0f16] border border-white/10 text-white placeholder-gray-500 text-xs focus:outline-none focus:border-[#00b4d8]">
                    </div>
                    <div class="sm:col-span-3">
                        <select name="model" class="w-full px-3.5 sm:px-4 py-2.5 rounded-xl bg-[#0a0f16] border border-white/10 text-white text-xs focus:outline-none focus:border-[#00b4d8] cursor-pointer">
                            <option value="">Semua Model Mobil</option>
                            <option value="ex5" {{ request('model') === 'ex5' ? 'selected' : '' }}>Geely EX5</option>
                            <option value="ex2" {{ request('model') === 'ex2' ? 'selected' : '' }}>Geely EX2</option>
                            <option value="starray" {{ request('model') === 'starray' ? 'selected' : '' }}>Starray EM-i</option>
                            <option value="coolray" {{ request('model') === 'coolray' ? 'selected' : '' }}>Geely Coolray</option>
                        </select>
                    </div>
                    <div class="sm:col-span-3 flex gap-2">
                        <button type="submit" class="flex-1 py-2.5 rounded-xl bg-[#00b4d8] hover:bg-[#00c4e8] text-black text-xs font-bold uppercase tracking-wider transition-all">
                            Filter
                        </button>
                        @if(request()->hasAny(['search', 'model', 'status', 'type']))
                        <a href="{{ route('admin.leads.index') }}#pipeline" class="px-3.5 py-2.5 rounded-xl bg-rose-500/10 hover:bg-rose-500/20 text-rose-400 text-xs border border-rose-500/30 flex items-center justify-center">
                            Reset
                        </a>
                        @endif
                    </div>
                </form>
            </div>

            <!-- TAMPILAN KHUSUS MOBILE: Card-based View (< md screen) -->
            <div class="block md:hidden space-y-3">
                @forelse($leads as $lead)
                <div class="hud-card p-4 space-y-3 border-l-4 {{ $lead->status === 'spk_deal' ? 'border-emerald-400' : ($lead->status === 'new' ? 'border-cyan-400' : ($lead->status === 'lost' ? 'border-rose-400' : 'border-[#00b4d8]')) }}">
                    <div class="flex items-start justify-between gap-2">
                        <div>
                            <div class="flex items-center gap-2 mb-1">
                                @if($lead->type === 'whatsapp_inquiry')
                                    <span class="inline-flex items-center gap-1 px-2 py-0.5 rounded-md bg-emerald-500/20 text-emerald-300 border border-emerald-500/40 text-[9px] font-bold uppercase tracking-wider">
                                        <svg class="w-2.5 h-2.5 fill-current" viewBox="0 0 24 24"><path d="M12.031 6.172c-3.181 0-5.767 2.586-5.768 5.766-.001 1.298.38 2.27 1.019 3.287l-.711 2.598 2.664-.699c.97.531 1.769.82 2.8.82 3.18 0 5.768-2.587 5.768-5.767.001-3.181-2.586-5.805-5.772-5.805zm6.545 5.767c0 3.609-2.936 6.545-6.545 6.545-1.127 0-2.18-.288-3.109-.792l-4.422 1.16 1.18-4.307c-.579-.974-.894-2.09-.894-3.206 0-3.61 2.936-6.545 6.545-6.545 3.609 0 7.245 2.936 7.245 7.145z"/></svg>
                                        WA Click
                                    </span>
                                @elseif($lead->type === 'credit_simulation')
                                    <span class="inline-flex items-center gap-1 px-2 py-0.5 rounded-md bg-indigo-500/20 text-indigo-300 border border-indigo-500/40 text-[9px] font-bold uppercase tracking-wider">
                                        Kredit
                                    </span>
                                @else
                                    <span class="inline-flex items-center gap-1 px-2 py-0.5 rounded-md bg-cyan-500/20 text-cyan-300 border border-cyan-500/40 text-[9px] font-bold uppercase tracking-wider">
                                        Test Drive
                                    </span>
                                @endif
                            </div>

                            <span class="font-bold text-white text-sm block">{{ $lead->name }}</span>
                            @if(preg_match('/[0-9]/', $lead->phone))
                                <a href="tel:{{ $lead->phone }}" class="text-gray-400 text-xs mt-0.5 block hover:text-[#00b4d8]">{{ $lead->phone }}</a>
                            @else
                                <span class="text-gray-400 text-xs mt-0.5 block italic">{{ $lead->phone }}</span>
                            @endif
                        </div>
                        
                        <span class="inline-block px-2.5 py-1 rounded-full border text-[9px] font-bold tracking-wider uppercase shrink-0 {{ $lead->status_badge['bg'] }}">
                            {{ $lead->status_badge['label'] }}
                        </span>
                    </div>

                    <div class="grid grid-cols-2 gap-2 text-[11px] p-2.5 rounded-xl bg-[#0a0f16] border border-white/5">
                        <div>
                            <span class="text-[9px] text-gray-400 block uppercase tracking-wider">Model Mobil</span>
                            <span class="font-bold text-cyan-300 block truncate">{{ $lead->car_model_label }}</span>
                            <span class="text-[9px] text-gray-500 truncate block">{{ $lead->source ?? 'Website' }}</span>
                        </div>
                        <div>
                            <span class="text-[9px] text-gray-400 block uppercase tracking-wider">Jadwal & Info</span>
                            @if($lead->type === 'whatsapp_inquiry')
                                <span class="text-emerald-300 block truncate font-medium">Klik Tombol WA</span>
                                <span class="text-[9px] text-gray-500 truncate block">{{ $lead->created_at->format('H:i') }} WIB</span>
                            @elseif($lead->type === 'credit_simulation')
                                <span class="text-indigo-300 block truncate font-medium">DP {{ $lead->dp_percent ?? 20 }}% &bull; {{ $lead->tenor_years ?? 5 }} Thn</span>
                                <span class="text-[9px] text-gray-500 truncate block">Rp {{ number_format($lead->estimated_installment ?? 0) }}/bln</span>
                            @else
                                <span class="text-gray-200 block truncate">{{ $lead->preferred_date ? $lead->preferred_date->format('d M Y') : 'Fleksibel' }}</span>
                                <span class="text-[9px] text-gray-500 truncate block">{{ $lead->dealer_location_label }}</span>
                            @endif
                        </div>
                    </div>

                    <div class="flex items-center justify-between gap-2 pt-1">
                        <!-- Action Button: Chat WA vs Detail WA Info -->
                        @if(preg_match('/[0-9]{7,}/', $lead->phone))
                            <a href="{{ $lead->whatsapp_follow_up_url }}" target="_blank" class="flex-1 inline-flex items-center justify-center gap-1.5 px-3 py-2 rounded-xl bg-emerald-500/20 hover:bg-emerald-500/30 text-emerald-300 border border-emerald-400/30 text-[11px] font-bold tracking-wider transition-all">
                                <svg class="w-3.5 h-3.5 fill-current" viewBox="0 0 24 24"><path d="M12.031 6.172c-3.181 0-5.767 2.586-5.768 5.766-.001 1.298.38 2.27 1.019 3.287l-.711 2.598 2.664-.699c.97.531 1.769.82 2.8.82 3.18 0 5.768-2.587 5.768-5.767.001-3.181-2.586-5.805-5.772-5.805zm6.545 5.767c0 3.609-2.936 6.545-6.545 6.545-1.127 0-2.18-.288-3.109-.792l-4.422 1.16 1.18-4.307c-.579-.974-.894-2.09-.894-3.206 0-3.61 2.936-6.545 6.545-6.545 3.609 0 7.245 2.936 7.245 7.145z"/></svg>
                                Follow Up WA
                            </a>
                        @else
                            <div class="flex-1 px-3 py-2 rounded-xl bg-emerald-500/10 border border-emerald-500/20 text-emerald-400 text-[11px] font-semibold text-center truncate">
                                WA Langsung Masuk
                            </div>
                        @endif

                        <!-- Fast Status Update -->
                        <form method="POST" action="{{ route('admin.leads.update-status', $lead->id) }}" class="flex-1">
                            @csrf
                            @method('PATCH')
                            <select name="status" onchange="this.form.submit()" class="w-full px-2.5 py-2 rounded-xl bg-[#0a0f16] border border-white/15 text-white text-[11px] focus:outline-none focus:border-[#00b4d8] cursor-pointer text-center">
                                <option value="new" {{ $lead->status === 'new' ? 'selected' : '' }}>New</option>
                                <option value="contacted" {{ $lead->status === 'contacted' ? 'selected' : '' }}>Contacted</option>
                                <option value="test_drive_scheduled" {{ in_array($lead->status, ['test_drive_scheduled', 'scheduled', 'qualified']) ? 'selected' : '' }}>Scheduled</option>
                                <option value="spk_deal" {{ in_array($lead->status, ['spk_deal', 'converted', 'deal']) ? 'selected' : '' }}>SPK / Deal</option>
                                <option value="lost" {{ in_array($lead->status, ['lost', 'cancelled']) ? 'selected' : '' }}>Lost</option>
                            </select>
                        </form>
                    </div>

                    <div class="text-[9px] text-gray-500 tracking-wider flex justify-between items-center pt-1 border-t border-white/5">
                        <span>Lead ID #{{ $lead->id }}</span>
                        <span>{{ $lead->created_at->diffForHumans() }}</span>
                    </div>
                </div>
                @empty
                <div class="hud-card p-8 text-center text-gray-500 text-xs">
                    Belum ada prospek/leads yang cocok dengan filter saat ini.
                </div>
                @endforelse
            </div>

            <!-- TAMPILAN DESKTOP & TABLET: Table View (>= md screen) -->
            <div class="hidden md:block hud-card overflow-hidden">
                <div class="overflow-x-auto custom-scrollbar">
                    <table class="w-full text-left border-collapse text-xs">
                        <thead>
                            <tr class="border-b border-white/10 bg-[#0a0f16] text-[10px] tracking-[0.2em] uppercase text-gray-400">
                                <th class="py-4 px-6">Channel & Pelanggan</th>
                                <th class="py-4 px-6">Model Pilihan</th>
                                <th class="py-4 px-6">Detail Kebutuhan</th>
                                <th class="py-4 px-6">Status Pipeline</th>
                                <th class="py-4 px-6">Tindakan Sales</th>
                                <th class="py-4 px-6 text-right">Update Status</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-white/5">
                            @forelse($leads as $lead)
                            <tr class="hover:bg-white/[0.02] transition-colors">
                                <td class="py-4 px-6">
                                    <div class="flex items-center gap-2 mb-1">
                                        @if($lead->type === 'whatsapp_inquiry')
                                            <span class="inline-flex items-center gap-1 px-2 py-0.5 rounded-md bg-emerald-500/20 text-emerald-300 border border-emerald-500/40 text-[9px] font-bold uppercase tracking-wider">
                                                <svg class="w-2.5 h-2.5 fill-current" viewBox="0 0 24 24"><path d="M12.031 6.172c-3.181 0-5.767 2.586-5.768 5.766-.001 1.298.38 2.27 1.019 3.287l-.711 2.598 2.664-.699c.97.531 1.769.82 2.8.82 3.18 0 5.768-2.587 5.768-5.767.001-3.181-2.586-5.805-5.772-5.805zm6.545 5.767c0 3.609-2.936 6.545-6.545 6.545-1.127 0-2.18-.288-3.109-.792l-4.422 1.16 1.18-4.307c-.579-.974-.894-2.09-.894-3.206 0-3.61 2.936-6.545 6.545-6.545 3.609 0 7.245 2.936 7.245 7.145z"/></svg>
                                                Chat WA Masuk
                                            </span>
                                        @elseif($lead->type === 'credit_simulation')
                                            <span class="inline-flex items-center gap-1 px-2 py-0.5 rounded-md bg-indigo-500/20 text-indigo-300 border border-indigo-500/40 text-[9px] font-bold uppercase tracking-wider">
                                                Simulasi Kredit
                                            </span>
                                        @else
                                            <span class="inline-flex items-center gap-1 px-2 py-0.5 rounded-md bg-cyan-500/20 text-cyan-300 border border-cyan-500/40 text-[9px] font-bold uppercase tracking-wider">
                                                Test Drive
                                            </span>
                                        @endif
                                    </div>
                                    <span class="font-bold text-white text-sm block">{{ $lead->name }}</span>
                                    <span class="text-gray-400 text-[11px] block mt-0.5">{{ $lead->phone }}</span>
                                    <span class="text-[9px] text-gray-500 block mt-1 uppercase tracking-wider">{{ $lead->created_at->diffForHumans() }} &bull; {{ $lead->source ?? 'Web' }}</span>
                                </td>

                                <td class="py-4 px-6">
                                    <span class="font-bold text-cyan-300 block text-sm">{{ $lead->car_model_label }}</span>
                                    <span class="text-gray-400 text-[10px] uppercase tracking-wider block">
                                        {{ $lead->dealer_location_label }}
                                    </span>
                                </td>

                                <td class="py-4 px-6">
                                    @if($lead->type === 'whatsapp_inquiry')
                                        <span class="text-emerald-400 font-medium block">Interaksi Tombol WA</span>
                                        <span class="text-gray-400 text-[11px] block">Membuka chat WhatsApp sales</span>
                                    @elseif($lead->type === 'credit_simulation')
                                        <span class="text-indigo-300 font-medium block">DP {{ $lead->dp_percent ?? 20 }}% ({{ $lead->tenor_years ?? 5 }} Thn)</span>
                                        <span class="text-gray-400 text-[11px] block">Cicilan: Rp {{ number_format($lead->estimated_installment ?? 0) }}/bln</span>
                                    @else
                                        <span class="text-white block">{{ $lead->preferred_date ? $lead->preferred_date->format('d M Y') : '-' }}</span>
                                        <span class="text-gray-400 text-[11px] block">Jam: {{ $lead->preferred_time ?? '-' }}</span>
                                    @endif
                                </td>

                                <td class="py-4 px-6">
                                    <span class="inline-block px-3 py-1 rounded-full border text-[10px] font-bold tracking-wider uppercase {{ $lead->status_badge['bg'] }}">
                                        {{ $lead->status_badge['label'] }}
                                    </span>
                                </td>

                                <td class="py-4 px-6">
                                    @if(preg_match('/[0-9]{7,}/', $lead->phone))
                                        <a href="{{ $lead->whatsapp_follow_up_url }}" target="_blank" class="inline-flex items-center gap-2 px-3 py-1.5 rounded-lg bg-emerald-500/20 hover:bg-emerald-500/30 text-emerald-300 border border-emerald-400/30 text-[11px] font-bold tracking-wider transition-all">
                                            <svg class="w-3.5 h-3.5 fill-current" viewBox="0 0 24 24"><path d="M12.031 6.172c-3.181 0-5.767 2.586-5.768 5.766-.001 1.298.38 2.27 1.019 3.287l-.711 2.598 2.664-.699c.97.531 1.769.82 2.8.82 3.18 0 5.768-2.587 5.768-5.767.001-3.181-2.586-5.805-5.772-5.805zm6.545 5.767c0 3.609-2.936 6.545-6.545 6.545-1.127 0-2.18-.288-3.109-.792l-4.422 1.16 1.18-4.307c-.579-.974-.894-2.09-.894-3.206 0-3.61 2.936-6.545 6.545-6.545 3.609 0 7.245 2.936 7.245 7.145z"/></svg>
                                            Chat WA
                                        </a>
                                    @else
                                        <span class="text-xs text-gray-500 italic">Chat Masuk Langsung</span>
                                    @endif
                                </td>

                                <td class="py-4 px-6 text-right">
                                    <form method="POST" action="{{ route('admin.leads.update-status', $lead->id) }}" class="inline-flex items-center gap-2">
                                        @csrf
                                        @method('PATCH')
                                        <select name="status" onchange="this.form.submit()" class="px-2.5 py-1 rounded-lg bg-[#0a0f16] border border-white/15 text-white text-[11px] focus:outline-none focus:border-[#00b4d8] cursor-pointer">
                                            <option value="new" {{ $lead->status === 'new' ? 'selected' : '' }}>New</option>
                                            <option value="contacted" {{ $lead->status === 'contacted' ? 'selected' : '' }}>Contacted</option>
                                            <option value="test_drive_scheduled" {{ in_array($lead->status, ['test_drive_scheduled', 'scheduled', 'qualified']) ? 'selected' : '' }}>Scheduled</option>
                                            <option value="spk_deal" {{ in_array($lead->status, ['spk_deal', 'converted', 'deal']) ? 'selected' : '' }}>SPK / Deal</option>
                                            <option value="lost" {{ in_array($lead->status, ['lost', 'cancelled']) ? 'selected' : '' }}>Lost</option>
                                        </select>
                                    </form>
                                </td>
                            </tr>
                            @empty
                            <tr>
                                <td colspan="6" class="py-12 text-center text-gray-500">
                                    Belum ada prospek/leads yang cocok dengan pencarian atau filter.
                                </td>
                            </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>

            <!-- Pagination Footer -->
            @if($leads->hasPages())
            <div class="p-3 sm:p-4 rounded-2xl border border-white/10 bg-[#0a0f16] overflow-x-auto">
                {{ $leads->fragment('pipeline')->links() }}
            </div>
            @endif
        </section>

    </main>

    <!-- Script Pemulihan Posisi Scroll Otomatis (Anti-Jump) -->
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            // Pulihkan posisi scroll jika sebelumnya tersimpan
            const savedScrollPos = sessionStorage.getItem('crm_leads_scroll_pos');
            if (savedScrollPos !== null) {
                window.scrollTo({
                    top: parseInt(savedScrollPos, 10),
                    behavior: 'instant'
                });
                sessionStorage.removeItem('crm_leads_scroll_pos');
            }

            // Simpan posisi scroll sebelum halaman berpindah akibat klik filter atau submit status
            const pipelineSection = document.getElementById('pipeline');
            if (pipelineSection) {
                pipelineSection.addEventListener('click', function (e) {
                    const link = e.target.closest('a');
                    if (link && !link.hasAttribute('target') && !link.href.startsWith('tel:') && !link.href.startsWith('https://wa.me')) {
                        sessionStorage.setItem('crm_leads_scroll_pos', window.scrollY);
                    }
                });

                pipelineSection.addEventListener('change', function (e) {
                    if (e.target.tagName === 'SELECT') {
                        sessionStorage.setItem('crm_leads_scroll_pos', window.scrollY);
                    }
                });

                pipelineSection.addEventListener('submit', function () {
                    sessionStorage.setItem('crm_leads_scroll_pos', window.scrollY);
                });
            }
        });
    </script>

</body>
</html>