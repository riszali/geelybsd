<x-layouts.app>
    @push('head')
        <title>{{ $article->meta_title ?? $article->title }} | Dealer Geely BSD</title>
        <meta name="description" content="{{ $article->meta_description ?? $article->excerpt }}">
        <meta name="keywords" content="{{ $article->meta_keywords ?? 'Geely BSD, Dealer Geely Tangerang, Mobil Listrik Geely' }}">
        <link rel="canonical" href="{{ url()->current() }}">
        
        <!-- OpenGraph Meta Tags -->
        <meta property="og:type" content="article">
        <meta property="og:url" content="{{ url()->current() }}">
        <meta property="og:title" content="{{ $article->title }}">
        <meta property="og:description" content="{{ $article->excerpt }}">
        <meta property="og:image" content="{{ $article->image_url }}">
        <meta property="article:published_time" content="{{ $article->published_at ? $article->published_at->toIso8601String() : now()->toIso8601String() }}">
        <meta property="article:author" content="{{ $article->author }}">

        <!-- Twitter Card -->
        <meta name="twitter:card" content="summary_large_image">
        <meta name="twitter:title" content="{{ $article->title }}">
        <meta name="twitter:description" content="{{ $article->excerpt }}">
        <meta name="twitter:image" content="{{ $article->image_url }}">

        <!-- Structured Data Google NewsArticle -->
        <script type="application/ld+json">
        {
            "@context": "https://schema.org",
            "@type": "NewsArticle",
            "headline": "{{ addslashes($article->title) }}",
            "image": [
                "{{ $article->image_url }}"
            ],
            "datePublished": "{{ $article->published_at ? $article->published_at->toIso8601String() : now()->toIso8601String() }}",
            "dateModified": "{{ $article->updated_at ? $article->updated_at->toIso8601String() : now()->toIso8601String() }}",
            "author": [{
                "@type": "Person",
                "name": "{{ $article->author }}",
                "url": "https://geelybsd.id"
            }],
            "publisher": {
                "@type": "Organization",
                "name": "Dealer Resmi Geely BSD Tangerang",
                "logo": {
                    "@type": "ImageObject",
                    "url": "{{ asset('assets/footer-logos-geely.png') }}"
                }
            },
            "description": "{{ addslashes($article->excerpt) }}"
        }
        </script>
    @endpush

    <article class="min-h-screen bg-[#050505] text-white pt-28 sm:pt-36 pb-24 relative overflow-hidden">
        
        <!-- Ambient Glow -->
        <div class="absolute top-10 left-1/2 -translate-x-1/2 w-[700px] h-[500px] bg-cyan-600/10 rounded-full blur-[160px] pointer-events-none"></div>

        <div class="max-w-4xl mx-auto px-4 sm:px-6 relative z-10">
            
            <!-- Breadcrumbs -->
            <nav class="flex items-center gap-2 text-xs text-gray-400 mb-6 uppercase tracking-wider">
                <a href="{{ route('home') }}" class="hover:text-cyan-400">Home</a>
                <span>&rsaquo;</span>
                <a href="/news" class="hover:text-cyan-400">Berita & Wawasan</a>
                <span>&rsaquo;</span>
                <span class="text-cyan-400 truncate">{{ $article->category }}</span>
            </nav>

            <!-- Kategori & Meta -->
            <div class="flex items-center gap-3 mb-4">
                <span class="px-3 py-1 rounded-full text-[10px] font-bold uppercase tracking-widest bg-cyan-500/10 border border-cyan-500/30 text-cyan-300">
                    {{ $article->category }}
                </span>
                <span class="text-xs text-gray-400">&bull; {{ $article->formatted_date }}</span>
                <span class="text-xs text-gray-500">&bull; {{ $article->reading_time }} menit baca</span>
            </div>

            <!-- Judul Utama -->
            <h1 class="font-geely text-3xl sm:text-4xl md:text-5xl font-bold uppercase tracking-tight text-white leading-tight mb-6">
                {{ $article->title }}
            </h1>

            <!-- Excerpt Penjelas -->
            <p class="text-gray-300 text-base sm:text-lg leading-relaxed font-light mb-8 border-l-2 border-cyan-400 pl-4">
                {{ $article->excerpt }}
            </p>

            <!-- Gambar Utama -->
            <div class="w-full aspect-[16/9] rounded-2xl md:rounded-3xl overflow-hidden border border-white/10 shadow-2xl mb-10 bg-gray-900">
                <img src="{{ $article->image_url }}" alt="{{ $article->title }}" class="w-full h-full object-cover">
            </div>

            <!-- Konten Artikel -->
            <div class="prose prose-invert prose-cyan max-w-none text-gray-300 text-base sm:text-lg leading-relaxed space-y-5 font-normal">
                {!! nl2br(e($article->content)) !!}
            </div>

            <!-- Box CTA Test Drive & Konsultasi -->
            <div class="mt-14 p-6 sm:p-8 rounded-3xl bg-gradient-to-r from-cyan-950/40 via-blue-950/30 to-black border border-cyan-500/30 shadow-2xl flex flex-col sm:flex-row items-center justify-between gap-6">
                <div>
                    <h3 class="text-xl sm:text-2xl font-geely font-bold uppercase text-white mb-1">
                        Ingin Merasakan Sensasi Geely?
                    </h3>
                    <p class="text-gray-400 text-xs sm:text-sm">
                        Jadwalkan test drive Geely EX5 atau EX2 di Showroom Geely BSD hari ini.
                    </p>
                </div>
                <div class="flex items-center gap-3 w-full sm:w-auto">
                    <a href="/test-drive" class="flex-1 sm:flex-none text-center px-6 py-3.5 rounded-full bg-[#00b4d8] hover:bg-[#00c4e8] text-black text-xs font-bold uppercase tracking-wider transition-all shadow-[0_0_20px_rgba(0,180,216,0.4)]">
                        Book Test Drive
                    </a>
                    <a href="https://wa.me/+6282246666904?text={{ urlencode('Halo Geely BSD, saya baru membaca artikel: ' . $article->title . '. Boleh minta info promo terbarunya?') }}" target="_blank" class="px-5 py-3.5 rounded-full bg-emerald-500/20 border border-emerald-500/40 text-emerald-300 hover:bg-emerald-500 hover:text-black text-xs font-bold uppercase tracking-wider transition-all">
                        Chat Sales
                    </a>
                </div>
            </div>

            <!-- Artikel Terkait -->
            @if(isset($relatedArticles) && $relatedArticles->count() > 0)
                <div class="mt-16 pt-10 border-t border-white/10">
                    <h3 class="font-geely text-xl uppercase tracking-wider text-white mb-6">Artikel Menarik Lainnya</h3>
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-5">
                        @foreach($relatedArticles as $rel)
                            <a href="{{ route('news.show', $rel->slug) }}" class="group block rounded-2xl overflow-hidden bg-white/5 border border-white/10 hover:border-cyan-400/50 transition-all p-3">
                                <div class="aspect-video rounded-xl overflow-hidden mb-3 bg-gray-900">
                                    <img src="{{ $rel->image_url }}" alt="{{ $rel->title }}" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                                </div>
                                <span class="text-[9px] text-cyan-400 font-bold uppercase tracking-widest block mb-1">{{ $rel->category }}</span>
                                <h4 class="text-sm font-bold text-white group-hover:text-cyan-300 transition-colors line-clamp-2">{{ $rel->title }}</h4>
                            </a>
                        @endforeach
                    </div>
                </div>
            @endif

        </div>

    </article>
</x-layouts.app>