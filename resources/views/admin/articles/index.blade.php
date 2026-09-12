<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manajemen Artikel & SEO | Geely Dashboard</title>
    
    <link rel="icon" type="image/png" href="{{ asset('favicon.png') }}?v={{ time() }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&family=Orbitron:wght@600;700;800&display=swap" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>

    <style>
        body {
            background-color: #03060a;
            color: #f1f5f9;
            font-family: 'Inter', sans-serif;
        }
        .hud-card {
            background: #0d131a;
            border: 1px solid rgba(255, 255, 255, 0.08);
            border-radius: 18px;
            box-shadow: 0 16px 40px -12px rgba(0, 0, 0, 0.7);
        }
        .hud-card-sm {
            background: #0a0f16;
            border: 1px solid rgba(255, 255, 255, 0.06);
            border-radius: 14px;
        }
    </style>
</head>
<body class="min-h-screen pb-16 antialiased selection:bg-[#00b4d8] selection:text-black">

    <header class="border-b border-white/10 bg-[#080d14]/90 backdrop-blur-md sticky top-0 z-30">
        <div class="w-full max-w-[1600px] mx-auto px-4 sm:px-6 lg:px-8 h-16 sm:h-20 flex items-center justify-between">
            <div class="flex items-center gap-3 sm:gap-4">
                <img src="{{ asset('assets/footer-logos-geely.png') }}" alt="Geely Logo" class="h-8 sm:h-10 w-auto object-contain">
                <div class="h-6 w-[1px] bg-white/15"></div>
                <div>
                    <h1 class="font-bold text-base sm:text-xl uppercase tracking-wider text-white flex items-center gap-2">
                        GEELY <span class="text-[#00b4d8]">NEWS & SEO</span>
                    </h1>
                    <p class="text-[9px] sm:text-[10px] text-gray-400 tracking-widest uppercase">
                        Dama &bull; Content Management Portal
                    </p>
                </div>
            </div>

            <div class="flex items-center gap-2 sm:gap-3">
                <a href="{{ route('admin.leads.index') }}" class="inline-flex items-center gap-2 px-3.5 py-2 rounded-xl border border-white/15 bg-white/5 hover:bg-white/10 text-xs font-semibold uppercase tracking-wider text-gray-300 hover:text-white transition-all">
                    &larr; CRM Leads
                </a>
                <a href="{{ route('admin.articles.create') }}" class="inline-flex items-center gap-2 px-4 py-2 rounded-xl bg-[#00b4d8] hover:bg-[#00c4e8] text-black text-xs font-bold uppercase tracking-wider transition-all shadow-[0_0_20px_rgba(0,180,216,0.3)]">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M12 4v16m8-8H4"/></svg>
                    Tulis Artikel Baru
                </a>
            </div>
        </div>
    </header>

    <main class="w-full max-w-[1600px] mx-auto px-4 sm:px-6 lg:px-8 pt-6 space-y-6">

        @if(session('success'))
            <div class="p-4 rounded-xl bg-emerald-500/10 border border-emerald-500/30 text-emerald-300 text-xs font-semibold flex items-center justify-between">
                <span>{{ session('success') }}</span>
                <button onclick="this.parentElement.remove()" class="text-emerald-400 hover:text-white">&times;</button>
            </div>
        @endif

        <!-- 4 Kotak Metrik Artikel -->
        <div class="grid grid-cols-2 lg:grid-cols-4 gap-3 sm:gap-4">
            <div class="hud-card p-4 sm:p-5 relative overflow-hidden">
                <span class="text-[10px] font-bold tracking-widest uppercase text-gray-400 block mb-1">Total Artikel</span>
                <div class="text-2xl sm:text-3xl font-bold text-white">{{ number_format($stats['total'] ?? 0) }}</div>
                <span class="text-[10px] text-gray-500 mt-1 block">Konten Terdaftar</span>
            </div>

            <div class="hud-card p-4 sm:p-5 relative overflow-hidden">
                <span class="text-[10px] font-bold tracking-widest uppercase text-emerald-400 block mb-1">Terbit (Published)</span>
                <div class="text-2xl sm:text-3xl font-bold text-emerald-400">{{ number_format($stats['published'] ?? 0) }}</div>
                <span class="text-[10px] text-gray-500 mt-1 block">Tampil di Google & Home</span>
            </div>

            <div class="hud-card p-4 sm:p-5 relative overflow-hidden">
                <span class="text-[10px] font-bold tracking-widest uppercase text-amber-400 block mb-1">Draft / Arsip</span>
                <div class="text-2xl sm:text-3xl font-bold text-amber-400">{{ number_format($stats['draft'] ?? 0) }}</div>
                <span class="text-[10px] text-gray-500 mt-1 block">Belum Ditayangkan</span>
            </div>

            <div class="hud-card p-4 sm:p-5 relative overflow-hidden">
                <span class="text-[10px] font-bold tracking-widest uppercase text-[#00E5FF] block mb-1">Total Pembaca</span>
                <div class="text-2xl sm:text-3xl font-bold text-[#00E5FF]">{{ number_format($stats['views'] ?? 0) }}</div>
                <span class="text-[10px] text-gray-500 mt-1 block">Akumulasi Page Views</span>
            </div>
        </div>

        <!-- Filter & Search Toolbar -->
        <div class="hud-card p-3.5 sm:p-4 flex flex-col md:flex-row items-center justify-between gap-3">
            <form action="{{ route('admin.articles.index') }}" method="GET" class="flex flex-1 gap-2 w-full">
                <input type="text" name="search" value="{{ request('search') }}" 
                       placeholder="Cari judul artikel, topik, atau kata kunci SEO..." 
                       class="flex-1 bg-[#0a0f16] border border-white/10 rounded-xl px-4 py-2 text-xs text-white placeholder-gray-500 focus:outline-none focus:border-[#00b4d8]">
                
                <select name="status" class="bg-[#0a0f16] border border-white/10 rounded-xl px-3 py-2 text-xs text-white focus:outline-none focus:border-[#00b4d8]">
                    <option value="">Semua Status</option>
                    <option value="published" {{ request('status') === 'published' ? 'selected' : '' }}>Published</option>
                    <option value="draft" {{ request('status') === 'draft' ? 'selected' : '' }}>Draft</option>
                </select>

                <button type="submit" class="px-4 py-2 bg-white/10 hover:bg-white/20 rounded-xl text-xs font-bold uppercase tracking-wider text-white transition-all">
                    Filter
                </button>
            </form>

            <a href="/news" target="_blank" class="text-xs text-[#00b4d8] hover:underline flex items-center gap-1.5 shrink-0">
                Lihat Halaman Berita Publik &rarr;
            </a>
        </div>

        <!-- Tabel Daftar Artikel -->
        <div class="hud-card overflow-hidden">
            <div class="overflow-x-auto">
                <table class="w-full text-left text-xs border-collapse">
                    <thead>
                        <tr class="border-b border-white/10 bg-[#0a0f16] text-[10px] uppercase font-bold tracking-widest text-gray-400">
                            <th class="py-3.5 px-5">Artikel & Gambar</th>
                            <th class="py-3.5 px-5">Kategori</th>
                            <th class="py-3.5 px-5">SEO & Slug</th>
                            <th class="py-3.5 px-5">Status & Views</th>
                            <th class="py-3.5 px-5 text-right">Aksi</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-white/5">
                        @forelse($articles as $item)
                            <tr class="hover:bg-white/[0.02] transition-colors">
                                <td class="py-3.5 px-5">
                                    <div class="flex items-center gap-3.5">
                                        <img src="{{ $item->image_url }}" alt="{{ $item->title }}" class="w-14 h-10 rounded-lg object-cover bg-gray-900 shrink-0 border border-white/10">
                                        <div>
                                            <a href="{{ route('news.show', $item->slug) }}" target="_blank" class="font-bold text-white hover:text-[#00b4d8] text-sm line-clamp-1">
                                                {{ $item->title }}
                                            </a>
                                            <span class="text-[10px] text-gray-500 block mt-0.5">
                                                {{ $item->formatted_date }} &bull; {{ $item->reading_time }} mnt baca
                                            </span>
                                        </div>
                                    </div>
                                </td>
                                <td class="py-3.5 px-5">
                                    <span class="px-2.5 py-1 rounded-full text-[9px] font-bold uppercase tracking-wider bg-cyan-500/10 border border-cyan-500/30 text-cyan-300">
                                        {{ $item->category }}
                                    </span>
                                </td>
                                <td class="py-3.5 px-5">
                                    <div class="font-mono text-[11px] text-gray-400 truncate max-w-xs">/news/{{ $item->slug }}</div>
                                    <div class="text-[10px] text-gray-500 mt-0.5 line-clamp-1">{{ $item->meta_description ?? $item->excerpt }}</div>
                                </td>
                                <td class="py-3.5 px-5">
                                    <div class="flex items-center gap-2">
                                        @if($item->is_published)
                                            <span class="w-2 h-2 rounded-full bg-emerald-400"></span>
                                            <span class="text-emerald-400 font-semibold text-[11px]">Terbit</span>
                                        @else
                                            <span class="w-2 h-2 rounded-full bg-amber-400"></span>
                                            <span class="text-amber-400 font-semibold text-[11px]">Draft</span>
                                        @endif
                                        <span class="text-gray-500 text-[10px]">&bull; {{ number_format($item->views) }} views</span>
                                    </div>
                                </td>
                                <td class="py-3.5 px-5 text-right space-x-1.5">
                                    <a href="{{ route('admin.articles.edit', $item->id) }}" class="inline-flex items-center px-3 py-1.5 rounded-lg bg-white/5 border border-white/10 hover:bg-white/15 text-xs text-gray-300 hover:text-white transition-all">
                                        Edit
                                    </a>
                                    <form action="{{ route('admin.articles.destroy', $item->id) }}" method="POST" class="inline" onsubmit="return confirm('Apakah Anda yakin ingin menghapus artikel ini?');">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="px-2.5 py-1.5 rounded-lg bg-red-500/10 border border-red-500/30 text-red-400 hover:bg-red-500 hover:text-white transition-all text-xs">
                                            Hapus
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="5" class="py-12 text-center text-gray-500 text-xs">
                                    Belum ada artikel yang dibuat. Klik tombol <strong>Tulis Artikel Baru</strong> di atas untuk membuat artikel pertama dan menaikkan SEO Geely BSD.
                                </td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>

            <div class="p-4 border-t border-white/10">
                {{ $articles->links() }}
            </div>
        </div>

    </main>

</body>
</html>