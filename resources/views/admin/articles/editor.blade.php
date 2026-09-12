<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $isEdit ? 'Edit Artikel' : 'Tulis Artikel Baru' }} | Geely Dashboard</title>
    
    <link rel="icon" type="image/png" href="{{ asset('favicon.png') }}?v={{ time() }}">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
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
        }
        .hud-input {
            width: 100%;
            background: #080d14;
            border: 1px solid rgba(255, 255, 255, 0.12);
            border-radius: 12px;
            padding: 10px 14px;
            font-size: 13px;
            color: #ffffff;
            transition: all 0.2s;
        }
        .hud-input:focus {
            outline: none;
            border-color: #00b4d8;
            box-shadow: 0 0 15px rgba(0, 180, 216, 0.2);
        }
    </style>
</head>
<body class="min-h-screen pb-20 antialiased">

    <header class="border-b border-white/10 bg-[#080d14]/90 backdrop-blur-md sticky top-0 z-30">
        <div class="w-full max-w-[1400px] mx-auto px-4 sm:px-6 h-16 sm:h-20 flex items-center justify-between">
            <div>
                <h1 class="font-bold text-base sm:text-xl uppercase tracking-wider text-white">
                    {{ $isEdit ? 'Edit Artikel' : 'Tulis Artikel SEO Baru' }}
                </h1>
                <p class="text-[10px] text-gray-400">Optimalkan konten untuk Google SERP Geely BSD Tangerang</p>
            </div>

            <div class="flex items-center gap-3">
                <a href="{{ route('admin.articles.index') }}" class="px-4 py-2 rounded-xl bg-white/5 border border-white/10 text-xs font-semibold text-gray-300 hover:text-white">
                    Batal
                </a>
                <button type="submit" form="articleForm" class="px-5 py-2 rounded-xl bg-[#00b4d8] hover:bg-[#00c4e8] text-black text-xs font-bold uppercase tracking-wider shadow-[0_0_20px_rgba(0,180,216,0.4)]">
                    Simpan & Publikasikan
                </button>
            </div>
        </div>
    </header>

    <main class="w-full max-w-[1400px] mx-auto px-4 sm:px-6 pt-6">

        @if($errors->any())
            <div class="mb-6 p-4 rounded-xl bg-rose-500/10 border border-rose-500/30 text-rose-300 text-xs space-y-1">
                @foreach($errors->all() as $err)
                    <p>&bull; {{ $err }}</p>
                @endforeach
            </div>
        @endif

        <form id="articleForm" action="{{ $isEdit ? route('admin.articles.update', $article->id) : route('admin.articles.store') }}" 
              method="POST" enctype="multipart/form-data" class="grid grid-cols-1 lg:grid-cols-3 gap-6">
            @csrf
            @if($isEdit)
                @method('PUT')
            @endif

            <!-- Kolom Kiri: Konten Utama (2 Kolom) -->
            <div class="lg:col-span-2 space-y-5">
                
                <div class="hud-card p-5 space-y-4">
                    <div>
                        <label class="block text-[11px] font-bold uppercase tracking-wider text-gray-400 mb-1.5">Judul Artikel (H1)</label>
                        <input type="text" name="title" id="articleTitle" value="{{ old('title', $article->title) }}" required 
                               placeholder="Contoh: Spesifikasi Lengkap Geely EX5: Jarak Tempuh 495 KM & Fitur Canggih di BSD" class="hud-input text-base font-bold">
                    </div>

                    @if($isEdit)
                    <div>
                        <label class="block text-[11px] font-bold uppercase tracking-wider text-gray-400 mb-1.5">Slug URL Kustom</label>
                        <input type="text" name="slug" value="{{ old('slug', $article->slug) }}" required class="hud-input font-mono text-xs">
                    </div>
                    @endif

                    <div>
                        <label class="block text-[11px] font-bold uppercase tracking-wider text-gray-400 mb-1.5">Ringkasan Artikel (Excerpt)</label>
                        <textarea name="excerpt" rows="2" placeholder="Ringkasan singkat 1-2 kalimat untuk preview di halaman Home dan Google Snippet..." class="hud-input">{{ old('excerpt', $article->excerpt) }}</textarea>
                    </div>

                    <div>
                        <label class="block text-[11px] font-bold uppercase tracking-wider text-gray-400 mb-1.5">Isi Artikel Lengkap</label>
                        <textarea name="content" rows="16" required placeholder="Tulis isi artikel lengkap di sini. Anda dapat menggunakan format paragraf HTML seperti <p>, <h3>, <ul>, <strong> untuk memperkaya konten..." class="hud-input font-mono leading-relaxed">{{ old('content', $article->content) }}</textarea>
                    </div>
                </div>

                <!-- Bagian SEO Super-Boost -->
                <div class="hud-card p-5 space-y-4 border-cyan-500/20">
                    <div class="flex items-center gap-2 text-cyan-400 font-bold text-xs uppercase tracking-wider">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"/></svg>
                        Google SEO & SERP Optimization
                    </div>

                    <div>
                        <label class="block text-[11px] font-bold uppercase tracking-wider text-gray-400 mb-1">Meta Title (Judul di Google)</label>
                        <input type="text" name="meta_title" value="{{ old('meta_title', $article->meta_title) }}" 
                               placeholder="Jika kosong, akan otomatis mengikuti Judul Artikel" class="hud-input">
                    </div>

                    <div>
                        <label class="block text-[11px] font-bold uppercase tracking-wider text-gray-400 mb-1">Meta Description (Snippet Deskripsi)</label>
                        <textarea name="meta_description" rows="2" placeholder="Deskripsi 150-160 karakter untuk menarik klik dari Google..." class="hud-input">{{ old('meta_description', $article->meta_description) }}</textarea>
                    </div>

                    <div>
                        <label class="block text-[11px] font-bold uppercase tracking-wider text-gray-400 mb-1">Meta Keywords</label>
                        <input type="text" name="meta_keywords" value="{{ old('meta_keywords', $article->meta_keywords) }}" 
                               placeholder="geely bsd, harga geely ex5, test drive bsd city, promo mobil listrik tangerang" class="hud-input">
                    </div>
                </div>

            </div>

            <!-- Kolom Kanan: Pengaturan & Gambar (1 Kolom) -->
            <div class="space-y-5">
                
                <div class="hud-card p-5 space-y-4">
                    <h3 class="text-xs font-bold uppercase tracking-wider text-white border-b border-white/10 pb-2">Status Publikasi</h3>

                    <label class="flex items-center gap-3 cursor-pointer">
                        <input type="checkbox" name="is_published" value="1" {{ old('is_published', $article->is_published ?? true) ? 'checked' : '' }} class="w-4 h-4 rounded text-[#00b4d8] bg-black/40 border-white/20">
                        <span class="text-xs font-semibold text-white">Tayangkan Langsung (Published)</span>
                    </label>

                    <div>
                        <label class="block text-[11px] font-bold uppercase tracking-wider text-gray-400 mb-1.5">Kategori Artikel</label>
                        <select name="category" class="hud-input cursor-pointer">
                            <option value="News & Promo" {{ old('category', $article->category) === 'News & Promo' ? 'selected' : '' }}>News & Promo</option>
                            <option value="Review Kendaraan" {{ old('category', $article->category) === 'Review Kendaraan' ? 'selected' : '' }}>Review Kendaraan</option>
                            <option value="Teknologi EV" {{ old('category', $article->category) === 'Teknologi EV' ? 'selected' : '' }}>Teknologi EV</option>
                            <option value="Event Showroom" {{ old('category', $article->category) === 'Event Showroom' ? 'selected' : '' }}>Event Showroom</option>
                        </select>
                    </div>

                    <div>
                        <label class="block text-[11px] font-bold uppercase tracking-wider text-gray-400 mb-1.5">Penulis / Author</label>
                        <input type="text" name="author" value="{{ old('author', $article->author ?? 'Admin Geely BSD') }}" class="hud-input">
                    </div>
                </div>

                <div class="hud-card p-5 space-y-4">
                    <h3 class="text-xs font-bold uppercase tracking-wider text-white border-b border-white/10 pb-2">Gambar Utama (Featured Image)</h3>

                    @if($article->image)
                        <div class="rounded-xl overflow-hidden border border-white/10 aspect-video bg-black/40">
                            <img src="{{ $article->image_url }}" alt="Preview" class="w-full h-full object-cover">
                        </div>
                    @endif

                    <div>
                        <label class="block text-[11px] font-bold uppercase tracking-wider text-gray-400 mb-1.5">Upload File Gambar (JPG/PNG/WEBP)</label>
                        <input type="file" name="image" accept="image/*" class="hud-input file:mr-3 file:py-1 file:px-3 file:rounded-lg file:border-0 file:text-xs file:font-semibold file:bg-white/10 file:text-white">
                    </div>

                    <div>
                        <label class="block text-[11px] font-bold uppercase tracking-wider text-gray-400 mb-1.5">Atau Masukkan URL Gambar Eksternal</label>
                        <input type="url" name="image_url" value="{{ old('image_url', Str::startsWith($article->image, 'http') ? $article->image : '') }}" placeholder="https://assets.zyrosite.com/..." class="hud-input text-xs">
                    </div>
                </div>

            </div>
        </form>

    </main>

</body>
</html>