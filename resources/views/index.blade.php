<x-layouts.app>
    @push('head')
        <title>Dealer Resmi Geely BSD Tangerang | Test Drive Geely EX5 & EX2</title>
        <meta name="description" content="Kunjungi Showroom Dealer Resmi Geely BSD City, Tangerang. Temukan era baru mobilitas, dapatkan promo terbaru, dan booking test drive Geely EX5 & EX2 hari ini!">
        <meta name="keywords" content="Geely BSD, Dealer Geely Tangerang, Dealer Geely BSD City, Mobil Listrik Geely, Geely EX5, Geely EX2, Harga Geely, Test Drive Geely, Showroom Geely Banten">
        <link rel="canonical" href="https://geelybsd.id/">
        
        <meta property="og:type" content="website">
        <meta property="og:url" content="https://geelybsd.id/">
        <meta property="og:title" content="Dealer Resmi Geely BSD Tangerang | Kendaraan Listrik Premium">
        <meta property="og:description" content="Kunjungi Showroom Dealer Resmi Geely BSD City. Dapatkan promo terbaru dan test drive Geely EX5 & EX2.">
        <meta property="og:image" content="https://assets.zyrosite.com/Yle46KEPN6IkVONg/azs02470-VCvpUDL4Xo3Qi0iF.JPG">

        <meta property="twitter:card" content="summary_large_image">
        <meta property="twitter:url" content="https://geelybsd.id/">
        <meta property="twitter:title" content="Dealer Resmi Geely BSD Tangerang | Kendaraan Listrik Premium">
        <meta property="twitter:description" content="Kunjungi Showroom Dealer Resmi Geely BSD City. Dapatkan promo terbaru dan test drive Geely EX5 & EX2.">
        <meta property="twitter:image" content="https://assets.zyrosite.com/Yle46KEPN6IkVONg/azs02470-VCvpUDL4Xo3Qi0iF.JPG">
    @endpush

    <style>
        html { scroll-behavior: smooth; }
        
        .bg-noise::before {
            content: "";
            position: absolute;
            inset: 0;
            background-image: url("data:image/svg+xml,%3Csvg viewBox='0 0 200 200' xmlns='http://www.w3.org/2000/svg'%3E%3Cfilter id='noiseFilter'%3E%3CfeTurbulence type='fractalNoise' baseFrequency='0.8' numOctaves='3' stitchTiles='stitch'/%3E%3C/filter%3E%3Crect width='100%25' height='100%25' filter='url(%23noiseFilter)' opacity='0.04'/%3E%3C/svg%3E");
            pointer-events: none;
            z-index: 1;
            mix-blend-mode: overlay;
        }

        .glass-panel {
            background: rgba(25, 25, 30, 0.4);
            backdrop-filter: blur(32px);
            -webkit-backdrop-filter: blur(32px);
            border: 1px solid rgba(255, 255, 255, 0.05);
            border-top: 1px solid rgba(255, 255, 255, 0.15);
            box-shadow: 0 30px 60px rgba(0, 0, 0, 0.4), inset 0 1px 0 rgba(255, 255, 255, 0.1);
        }
        
        .glass-panel-light {
            background: rgba(255, 255, 255, 0.7);
            backdrop-filter: blur(24px);
            -webkit-backdrop-filter: blur(24px);
            border: 1px solid rgba(255, 255, 255, 0.5);
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.05), inset 0 1px 0 rgba(255, 255, 255, 0.8);
        }

        .btn-shimmer {
            position: relative;
            overflow: hidden;
        }
        .btn-shimmer::after {
            content: '';
            position: absolute;
            top: -50%;
            left: -50%;
            width: 200%;
            height: 200%;
            background: linear-gradient(to right, transparent, rgba(255,255,255,0.3), transparent);
            transform: rotate(45deg) translateX(-100%);
            animation: shimmer 3s infinite cubic-bezier(0.19, 1, 0.22, 1);
        }
        @keyframes shimmer {
            100% { transform: rotate(45deg) translateX(100%); }
        }

        .animate-float-slow { animation: float 6s ease-in-out infinite; }
        .animate-float-fast { animation: float 4s ease-in-out infinite reverse; }
        @keyframes float {
            0% { transform: translateY(0px); }
            50% { transform: translateY(-15px); }
            100% { transform: translateY(0px); }
        }

        .reveal-up { opacity: 0; transform: translateY(60px) scale(0.98); transition: all 1.2s cubic-bezier(0.22, 1, 0.36, 1); }
        .reveal-left { opacity: 0; transform: translateX(-60px); transition: all 1.2s cubic-bezier(0.22, 1, 0.36, 1); }
        .reveal-right { opacity: 0; transform: translateX(60px); transition: all 1.2s cubic-bezier(0.22, 1, 0.36, 1); }
        .is-revealed { opacity: 1 !important; transform: translate(0) scale(1) !important; }

        .delay-100 { transition-delay: 100ms; }
        .delay-200 { transition-delay: 200ms; }
        .delay-300 { transition-delay: 300ms; }
        .delay-400 { transition-delay: 400ms; }

        .text-liquid {
            background: linear-gradient(270deg, #ffffff, #818cf8, #22d3ee, #ffffff);
            background-size: 300% 300%;
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            animation: liquidText 8s ease infinite;
        }
        @keyframes liquidText {
            0% { background-position: 0% 50%; }
            50% { background-position: 100% 50%; }
            100% { background-position: 0% 50%; }
        }

        .sr-only {
            position: absolute;
            width: 1px;
            height: 1px;
            padding: 0;
            margin: -1px;
            overflow: hidden;
            clip: rect(0, 0, 0, 0);
            white-space: nowrap;
            border-width: 0;
        }

        @media (max-width: 767px) {
            .mobile-bento-glass-light {
                background: rgba(255, 255, 255, 0.45) !important;
                backdrop-filter: blur(20px) !important;
                -webkit-backdrop-filter: blur(20px) !important;
                border: 1px solid rgba(255, 255, 255, 0.6) !important;
                border-bottom: 1px solid rgba(255, 255, 255, 0.2) !important;
                border-right: 1px solid rgba(255, 255, 255, 0.2) !important;
                box-shadow: 0 10px 30px rgba(0, 0, 0, 0.05) !important;
            }
            .mobile-bento-glass-dark {
                background: rgba(15, 15, 20, 0.5) !important;
                backdrop-filter: blur(20px) !important;
                -webkit-backdrop-filter: blur(20px) !important;
                border: 1px solid rgba(255, 255, 255, 0.15) !important;
                border-bottom: 1px solid rgba(0, 0, 0, 0.5) !important;
                box-shadow: 0 10px 30px rgba(0, 0, 0, 0.3) !important;
            }
            .mobile-bento-pill {
                background: rgba(10, 10, 15, 0.5) !important;
                backdrop-filter: blur(16px) !important;
                -webkit-backdrop-filter: blur(16px) !important;
                border: 1px solid rgba(255, 255, 255, 0.1) !important;
                border-radius: 20px !important;
            }
            .mobile-bento-p { padding: 12px !important; }
            .mobile-always-visible {
                opacity: 1 !important; 
                transform: translate(0) !important;
            }
            .mobile-soft-gradient {
                opacity: 0.3 !important; 
            }
        }

        @media (min-width: 768px) {
            .premium-card-hover {
                transition: transform 0.5s cubic-bezier(0.25, 1, 0.5, 1), box-shadow 0.5s cubic-bezier(0.25, 1, 0.5, 1), border-color 0.5s ease;
                will-change: transform, box-shadow;
            }
            .premium-card-hover:hover {
                transform: translateY(-8px);
                box-shadow: 0 30px 60px -12px rgba(0, 0, 0, 0.15), 0 18px 36px -18px rgba(0, 0, 0, 0.1);
                border-color: rgba(0, 0, 0, 0.1);
            }
            .premium-card-dark.premium-card-hover:hover {
                box-shadow: 0 30px 60px -12px rgba(0, 0, 0, 0.5), 0 18px 36px -18px rgba(0, 0, 0, 0.4), inset 0 1px 0 rgba(255,255,255,0.1);
                border-color: rgba(255, 255, 255, 0.2);
            }
            
            .glare-effect::after {
                content: '';
                position: absolute;
                top: 0; left: -150%; width: 50%; height: 100%;
                background: linear-gradient(to right, rgba(255,255,255,0) 0%, rgba(255,255,255,0.15) 50%, rgba(255,255,255,0) 100%);
                transform: skewX(-25deg);
                transition: left 0.8s ease-in-out;
                z-index: 20;
                pointer-events: none;
            }
            .glare-effect:hover::after {
                left: 200%;
            }
        }
    </style>

    <header class="relative h-[100svh] w-full flex items-center justify-center overflow-hidden bg-black bg-noise">
        <div class="absolute inset-0 z-0">
            <video autoplay muted loop playsinline class="w-full h-full object-cover scale-110 animate-[ken-burns_30s_ease-out_infinite_alternate]">
                <source src="https://assets.zyrosite.com/Yle46KEPN6IkVONg/say-hi-to-the-geely-ex5---geely-auto-uk-1080p-h264-_1-Sz3UdvLVUW0EehYY.mp4" type="video/mp4">
            </video>
            <div class="absolute inset-0 bg-[radial-gradient(circle_at_center,transparent_0%,rgba(0,0,0,0.8)_100%)]"></div>
            <div class="absolute inset-x-0 bottom-0 h-3/4 bg-gradient-to-t from-black via-black/60 to-transparent"></div>
        </div>
        <div class="relative z-20 w-full max-w-7xl mx-auto px-6 text-center mt-20">
            <h1 class="font-geely text-5xl sm:text-6xl md:text-8xl lg:text-[130px] text-white uppercase leading-[0.9] md:leading-[0.8] tracking-tighter drop-shadow-2xl mb-8 reveal-up delay-100">
                <span class="sr-only">Temukan inovasi mobilitas masa depan dengan Geely EX2, Geely EX5, dan Geely Starray EM-i - </span>
                DRIVE THE <br>
                <span class="text-liquid">FUTURE</span>
            </h1>
            <p class="text-gray-400 max-w-6xl mx-auto text-sm md:text-xl font-light tracking-wide leading-relaxed mb-12 reveal-up delay-200">
                Rasakan era baru mobilitas premium bersama line-up revolusioner kami. Jelajahi kelincahan urban <strong>Geely EX2</strong>, inovasi elektrik tangguh <strong>Geely EX5</strong>, dan performa hybrid mutakhir dari <strong>Geely Starray EM-i</strong>. Perpaduan sempurna antara desain aerodinamis dan teknologi masa depan tanpa batas.
            </p>
            <div class="flex flex-col sm:flex-row items-center justify-center gap-4 md:gap-6 reveal-up delay-300">
                <a href="/test-drive" title="Booking Test Drive Mobil Geely di BSD" class="btn-shimmer flex items-center justify-center gap-3 bg-white/10 backdrop-blur-md border border-white/20 text-white px-10 md:px-12 py-4 md:py-5 rounded-full font-bold text-[10px] md:text-[11px] tracking-[0.2em] uppercase transition-all duration-500 hover:bg-white/20 hover:border-white/40 hover:scale-105 hover:shadow-[0_0_30px_rgba(255,255,255,0.2)] w-full sm:w-auto">
                    <span>Book Test Drive</span>
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path></svg>
                </a>
                <a href="#lineup" title="Eksplorasi Model Mobil Listrik Geely Terbaru" class="group flex items-center gap-4 text-white hover:text-cyan-300 transition-colors duration-300 mt-4 sm:mt-0">
                    <div class="w-12 h-12 rounded-full bg-white/10 backdrop-blur-md border border-white/20 flex items-center justify-center group-hover:bg-white/20 group-hover:border-cyan-400 transition-all duration-300">
                        <svg class="w-4 h-4 transform group-hover:translate-y-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 14l-7 7m0 0l-7-7m7 7V3"></path></svg>
                    </div>
                    <span class="text-[10px] font-bold tracking-[0.2em] uppercase">Explore Models</span>
                </a>
            </div>
        </div>
    </header>

    <!-- ==========================================
         SECTION 2: THE ECOSYSTEM (SEKARANG DISembunyikan VIA CSS 'hidden')
    =========================================== -->
    <section id="experience" class="hidden py-24 lg:py-32 bg-[#fafafa] relative border-t border-gray-100 overflow-hidden">
        <div class="absolute inset-0 bg-[url('data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSI0MCIgaGVpZ2h0PSI0MCI+CjxwYXRoIGQ9Ik0wIDBoNDB2NDBIMHoiIGZpbGw9Im5vbmUiLz4KPHBhdGggZD0iTTAgNDBMMCAwTDIwIDBMNDAgMEw0MCA0MEwyMCA0MEwwIDQweiIgZmlsbD0ibm9uZSIgc3Ryb2tlPSIjMDAwIiBzdHJva2Utb3BhY2l0eT0iMC4wMyIgc3Ryb2tlLXdpZHRoPSIxIi8+Cjwvc3ZnPg==')] pointer-events-none opacity-50"></div>
        <div class="absolute top-0 right-1/4 w-[600px] h-[600px] bg-blue-100/50 rounded-full blur-[120px] pointer-events-none"></div>
        <div class="max-w-[1600px] mx-auto px-6 md:px-12 lg:px-16 relative z-10">
            <div class="flex flex-col md:flex-row justify-between items-start md:items-end mb-12 md:mb-16 gap-6 reveal-up">
                <div class="max-w-3xl">
                    <div class="inline-flex items-center gap-4 mb-4 md:mb-6">
                        <div class="w-10 h-[1px] bg-gradient-to-r from-blue-600 to-transparent"></div>
                        <span class="text-blue-600 text-[10px] font-bold tracking-[0.4em] uppercase">Eksklusivitas Geely BSD</span>
                    </div>
                    <h2 class="font-geely text-4xl sm:text-5xl md:text-6xl lg:text-7xl uppercase tracking-tighter text-gray-900 leading-[0.9]">
                        Beyond <br>
                        <span class="text-transparent bg-clip-text bg-gradient-to-r from-blue-600 to-cyan-500">Expectations</span>
                    </h2>
                </div>
                <div class="md:text-right pb-2 max-w-sm ml-auto">
                    <p class="text-gray-500 text-sm md:text-base leading-relaxed font-light">
                        Lebih dari sekadar kendaraan. Kami merancang ekosistem mobilitas premium di Tangerang yang memahami setiap kebutuhan Anda, menghadirkan standar pelayanan tanpa kompromi.
                    </p>
                </div>
            </div>
            <div class="relative w-full rounded-[24px] md:rounded-3xl overflow-hidden group reveal-up bg-gray-900 shadow-xl mb-3 md:mb-6 md:border md:border-white/10 premium-card-hover premium-card-dark glare-effect">
                <img src="https://assets.zyrosite.com/Yle46KEPN6IkVONg/azs02470-VCvpUDL4Xo3Qi0iF.JPG" alt="Fasad Depan Showroom Dealer Resmi Geely BSD City Tangerang Banten" class="w-full h-auto block transform group-hover:scale-105 transition-transform duration-[2.5s] ease-out brightness-90 group-hover:brightness-100 object-cover object-[center_60%] md:object-center">
                <div class="hidden md:block absolute inset-0 bg-gradient-to-t from-black/90 via-black/20 to-transparent opacity-90 group-hover:opacity-100 transition-opacity duration-500 mobile-soft-gradient"></div>
                <div class="hidden md:flex absolute bottom-3 left-3 right-3 md:bottom-0 md:left-0 md:right-0 md:inset-x-0 z-10 p-4 md:p-12 w-auto md:w-full flex-col sm:flex-row justify-between items-start sm:items-end gap-6 mobile-bento-pill md:bg-transparent md:border-none md:rounded-none">
                    <div class="transform translate-y-4 group-hover:translate-y-0 transition-transform duration-500 ease-out mobile-always-visible">
                        <span class="text-cyan-300 text-[8px] md:text-[9px] tracking-[0.3em] uppercase font-bold mb-2 md:mb-3 block drop-shadow-md">Flagship Location</span>
                        <h3 class="font-geely text-2xl sm:text-4xl md:text-5xl text-white uppercase tracking-tight leading-none mb-1 md:mb-2 drop-shadow-lg">Geely BSD City</h3>
                        <p class="text-gray-300 text-[10px] md:text-sm font-light drop-shadow-md">Tangerang Selatan, Banten</p>
                    </div>
                    <a href="/location" title="Peta Lokasi Dealer Geely BSD" class="hidden md:flex w-12 h-12 md:w-14 md:h-14 rounded-full border border-white/20 bg-white/10 backdrop-blur-xl items-center justify-center text-white hover:bg-white hover:text-black transition-all duration-300 transform group-hover:scale-110 shrink-0 self-end">
                        <svg class="w-5 h-5 transform -rotate-45" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path></svg>
                    </a>
                </div>
            </div>

            <div class="grid grid-cols-2 md:grid-cols-3 gap-3 md:gap-6 reveal-up">
                <div class="col-span-2 md:col-span-1 group relative rounded-[20px] md:rounded-3xl overflow-hidden bg-gray-900 shadow-xl md:border md:border-white/5 premium-card-hover premium-card-dark glare-effect">
                    <img src="https://assets.zyrosite.com/Yle46KEPN6IkVONg/azs02479-QJjtY6j87MG4Clmo.JPG" alt="Fasilitas Lounge Mewah dan Ruang Tunggu Servis Mobil Geely BSD City" class="w-full h-[140px] md:h-64 lg:h-80 object-cover object-[center_70%] md:object-center block transform group-hover:scale-105 transition-transform duration-[2.5s] ease-out brightness-90 group-hover:brightness-100">
                    <div class="hidden md:block absolute inset-0 bg-gradient-to-t from-black/80 via-black/10 to-transparent opacity-70 group-hover:opacity-90 transition-opacity duration-500 pointer-events-none mobile-soft-gradient"></div>
                    <div class="hidden md:block absolute bottom-2 left-2 right-2 md:bottom-0 md:left-0 md:right-0 p-3 md:p-6 text-white transform translate-y-4 group-hover:translate-y-0 transition-transform duration-500 ease-out opacity-0 group-hover:opacity-100 pointer-events-none mobile-always-visible mobile-bento-pill md:bg-transparent md:border-none md:rounded-none">
                        <span class="text-[7px] md:text-[8px] tracking-[0.2em] font-bold uppercase mb-1 block text-cyan-300 md:text-white">Atmosphere</span>
                        <h4 class="font-geely text-base md:text-xl uppercase tracking-tight">Premium Lounge</h4>
                    </div>
                </div>
                <div class="col-span-1 md:col-span-1 group relative rounded-[20px] md:rounded-3xl overflow-hidden bg-gray-900 shadow-xl md:border md:border-white/5 premium-card-hover premium-card-dark glare-effect">
                    <img src="https://assets.zyrosite.com/Yle46KEPN6IkVONg/azs02475-QBhC4tRBny6VqEdA.JPG" alt="Area Display Kendaraan Listrik Geely EX5 di Showroom Premium Tangerang" class="w-full h-[140px] md:h-64 lg:h-80 object-cover object-[center_60%] md:object-center block transform group-hover:scale-105 transition-transform duration-[2.5s] ease-out brightness-90 group-hover:brightness-100">
                    <div class="hidden md:block absolute inset-0 bg-gradient-to-t from-black/80 via-black/10 to-transparent opacity-70 group-hover:opacity-90 transition-opacity duration-500 pointer-events-none mobile-soft-gradient"></div>
                    <div class="hidden md:block absolute bottom-2 left-2 right-2 md:bottom-0 md:left-0 md:right-0 p-3 md:p-6 text-white transform translate-y-4 group-hover:translate-y-0 transition-transform duration-500 ease-out opacity-0 group-hover:opacity-100 pointer-events-none mobile-always-visible mobile-bento-pill md:bg-transparent md:border-none md:rounded-none">
                        <span class="text-[7px] md:text-[8px] tracking-[0.2em] font-bold uppercase mb-1 block text-cyan-300 md:text-white">Experience</span>
                        <h4 class="font-geely text-base md:text-xl uppercase tracking-tight leading-tight">Showroom Floor</h4>
                    </div>
                </div>

                <div class="col-span-1 md:col-span-1 group relative rounded-[20px] md:rounded-3xl overflow-hidden bg-gray-900 shadow-xl md:border md:border-white/5 premium-card-hover premium-card-dark glare-effect">
                    <img src="https://assets.zyrosite.com/Yle46KEPN6IkVONg/image_2lvu6s2lvu6s2lvu-E26lFJQBrXZTiyRq.png" alt="Desain Interior Arsitektur Modern Showroom Geely BSD" class="w-full h-[140px] md:h-64 lg:h-80 object-cover object-[center_70%] md:object-center block transform group-hover:scale-105 transition-transform duration-[2.5s] ease-out brightness-90 group-hover:brightness-100">
                    <div class="hidden md:block absolute inset-0 bg-gradient-to-t from-black/80 via-black/10 to-transparent opacity-70 group-hover:opacity-90 transition-opacity duration-500 pointer-events-none mobile-soft-gradient"></div>
                    <div class="hidden md:block absolute bottom-2 left-2 right-2 md:bottom-0 md:left-0 md:right-0 p-3 md:p-6 text-white transform translate-y-4 group-hover:translate-y-0 transition-transform duration-500 ease-out opacity-0 group-hover:opacity-100 pointer-events-none mobile-always-visible mobile-bento-pill md:bg-transparent md:border-none md:rounded-none">
                        <span class="text-[7px] md:text-[8px] tracking-[0.2em] font-bold uppercase mb-1 block text-cyan-300 md:text-white">Design</span>
                        <h4 class="font-geely text-base md:text-xl uppercase tracking-tight leading-tight">Modern Space</h4>
                    </div>
                </div>
                <div class="col-span-1 md:col-span-2 lg:col-span-1 rounded-[20px] md:rounded-3xl bg-white md:border md:border-gray-200 p-6 md:p-8 flex flex-col justify-between group md:hover:border-blue-200 transition-all duration-500 relative overflow-hidden mobile-bento-glass-light mobile-bento-p premium-card-hover">
                    <div class="absolute top-0 right-0 w-32 h-32 md:w-40 md:h-40 bg-blue-50/50 rounded-full blur-[40px] md:blur-[50px] group-hover:bg-blue-100 transition-colors duration-700"></div>
                    <div class="w-8 h-8 md:w-12 md:h-12 rounded-full bg-blue-50/80 md:bg-blue-50 flex items-center justify-center text-blue-600 mb-3 md:mb-6 group-hover:scale-110 group-hover:bg-blue-600 group-hover:text-white transition-all duration-500 shrink-0">
                        <svg class="w-4 h-4 md:w-5 md:h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M13 10V3L4 14h7v7l9-11h-7z"></path></svg>
                    </div>
                    <div class="relative z-10 mt-auto">
                        <h4 class="font-geely text-base md:text-2xl text-gray-900 uppercase tracking-tight mb-1 md:mb-2">Fast <br> Charging</h4>
                        <p class="text-gray-500 text-[9px] md:text-sm font-light leading-relaxed hidden md:block">Akses prioritas ke jaringan pengisian daya berkecepatan tinggi eksklusif untuk member setia dealer Geely BSD.</p>
                    </div>
                </div>
                <div class="col-span-1 md:col-span-1 rounded-[20px] md:rounded-3xl bg-white md:border md:border-gray-200 p-6 md:p-8 flex flex-col justify-between group md:hover:border-indigo-200 transition-all duration-500 relative overflow-hidden mobile-bento-glass-light mobile-bento-p premium-card-hover">
                    <div class="absolute top-0 right-0 w-32 h-32 md:w-40 md:h-40 bg-indigo-50/50 rounded-full blur-[40px] md:blur-[50px] group-hover:bg-indigo-100 transition-colors duration-700"></div>
                    <div class="w-8 h-8 md:w-12 md:h-12 rounded-full bg-indigo-50/80 md:bg-indigo-50 flex items-center justify-center text-indigo-600 mb-3 md:mb-6 group-hover:scale-110 group-hover:bg-indigo-600 group-hover:text-white transition-all duration-500 shrink-0">
                        <svg class="w-4 h-4 md:w-5 md:h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M5 3v4M3 5h4M6 17v4m-2-2h4m5-16l2.286 6.857L21 12l-5.714 2.143L13 21l-2.286-6.857L5 12l5.714-2.143L13 3z"></path></svg>
                    </div>
                    <div class="relative z-10 mt-auto">
                        <h4 class="font-geely text-base md:text-2xl text-gray-900 uppercase tracking-tight mb-1 md:mb-2">VIP <br> Concierge</h4>
                        <p class="text-gray-500 text-[9px] md:text-sm font-light leading-relaxed hidden md:block">Layanan asisten pribadi eksklusif untuk kemudahan servis dan jadwal perawatan mobil listrik Anda.</p>
                    </div>
                </div>

            </div>

        </div>
    </section>

    <section id="lineup" class="py-24 lg:py-40 bg-[#020202] text-white relative overflow-hidden">
        <div class="absolute top-0 left-0 w-full h-full overflow-hidden pointer-events-none z-0 opacity-40">
            <div class="absolute top-[-20%] left-[-10%] w-[60vw] h-[60vw] bg-indigo-900/30 rounded-full blur-[150px] mix-blend-screen animate-float-slow"></div>
            <div class="absolute bottom-[-20%] right-[-10%] w-[50vw] h-[50vw] bg-cyan-900/20 rounded-full blur-[150px] mix-blend-screen animate-float-fast"></div>
        </div>
        <div class="max-w-[1600px] mx-auto px-6 md:px-12 lg:px-16 relative z-10">
            <div class="text-center max-w-3xl mx-auto mb-16 md:mb-20 reveal-up">
                <div class="inline-flex items-center gap-4 mb-6">
                    <div class="w-12 h-[1px] bg-gradient-to-r from-transparent to-cyan-500"></div>
                    <span class="text-cyan-400 text-[10px] font-bold tracking-[0.4em] uppercase">Elevate Every Journey.</span>
                    <div class="w-12 h-[1px] bg-gradient-to-l from-transparent to-cyan-500"></div>
                </div>
                <h2 class="font-geely text-4xl sm:text-5xl md:text-6xl lg:text-7xl uppercase tracking-tighter text-white leading-none mb-6">
                    MASTERPIECE <br> <span class="text-transparent bg-clip-text bg-gradient-to-r from-gray-400 to-gray-600">IN MOTION</span>
                </h2>
                <p class="text-gray-400 text-sm md:text-base leading-relaxed font-light">
                    Koleksi kendaraan EV unggulan yang dirancang tanpa kompromi. Memadukan estetika aerodinamis kelas dunia dengan arsitektur elektrik paling canggih di industri otomotif Indonesia.
                </p>
            </div>
            <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
                @php
                    $showcase = [
                        [
                            'name' => 'Geely EX5',
                            'type' => 'Premium Smart SUV',
                            'stats' => ['AWD Dual Motor', '600km Range'],
                            'img' => 'https://assets.zyrosite.com/Yle46KEPN6IkVONg/2400x0-16-YyvDPj63y9fNXbar.webp',
                            'link' => '/models/ex5',
                            'delay' => ''
                        ],
                        [
                            'name' => 'Geely EX2',
                            'type' => 'Urban Electric Crossover',
                            'stats' => ['Agile Dynamics', 'Ultra Fast Charge'],
                            'img' => 'https://assets.zyrosite.com/Yle46KEPN6IkVONg/rdspace-6fdMIYg90CYd8lJd.webp',
                            'link' => '/models/ex2',
                            'delay' => 'delay-100'
                        ],
                        [
                            'name' => 'Starray EM-i',
                            'type' => 'The Future Sedan',
                            'stats' => ['Hybrid Gen-X', '0.22 Cd Aero'],
                            'img' => 'https://assets.zyrosite.com/Yle46KEPN6IkVONg/02-exterior-geely-starray-em-i-geely-ambara-group-2-AVLxzgj4K6TXQRbW.webp',
                            'link' => '/models/starray-em-i',
                            'delay' => 'delay-200'
                        ]
                    ];
                @endphp

                @foreach($showcase as $car)
                <div class="group relative flex flex-col md:block h-auto md:h-[600px] rounded-[20px] md:rounded-[32px] overflow-hidden reveal-up {{ $car['delay'] }} md:border md:border-white/10 premium-card-hover premium-card-dark glare-effect bg-[#0a0a0c] md:bg-transparent">
                    <div class="relative w-full h-[220px] sm:h-[280px] md:absolute md:inset-0 md:h-full shrink-0">
                        <img src="{{ $car['img'] }}" alt="Mobil Listrik {{ $car['name'] }} - {{ $car['type'] }} tersedia di Dealer Geely BSD" class="absolute inset-0 w-full h-full object-cover object-center transform group-hover:scale-110 transition-transform duration-[1.5s] ease-out brightness-90 md:brightness-75 group-hover:brightness-100">
                        <div class="absolute inset-0 bg-gradient-to-t from-[#0a0a0c] via-transparent to-transparent opacity-90 md:opacity-90 group-hover:opacity-80 transition-opacity duration-500"></div>
                    </div>
                    
                    <div class="relative z-10 -mt-8 mx-3 mb-3 md:mt-0 md:mx-0 md:mb-0 md:absolute md:inset-0 p-4 md:p-8 flex flex-col justify-end mobile-bento-glass-dark rounded-[16px] md:bg-transparent md:border-none md:rounded-none shadow-2xl md:shadow-none">
                        <div class="transform translate-y-0 md:translate-y-4 md:group-hover:translate-y-0 transition-transform duration-500 ease-out">
                            <span class="text-cyan-400 text-[9px] md:text-[9px] font-bold tracking-[0.3em] uppercase mb-1.5 md:mb-2 block drop-shadow-md">
                                {{ $car['type'] }}
                            </span>
                            <h3 class="font-geely text-2xl md:text-4xl uppercase tracking-tighter text-white mb-2 md:mb-4 drop-shadow-lg">
                                {{ $car['name'] }}
                            </h3>
                            
                            <div class="flex flex-wrap gap-2 md:gap-3 mb-3 md:mb-6 opacity-100 md:opacity-0 md:group-hover:opacity-100 transition-opacity duration-500 delay-100">
                                @foreach($car['stats'] as $stat)
                                <span class="px-2.5 py-1 md:px-3 md:py-1.5 rounded-full border border-white/20 bg-black/40 backdrop-blur-md text-gray-300 text-[8px] tracking-[0.2em] font-medium uppercase whitespace-nowrap">
                                    {{ $stat }}
                                </span>
                                @endforeach
                            </div>
                            
                            <div class="pt-3 md:pt-6 border-t border-white/10 flex justify-between items-center opacity-100 md:opacity-0 md:group-hover:opacity-100 transition-opacity duration-500 delay-200">
                                <a href="{{ $car['link'] }}" title="Spesifikasi Detail {{ $car['name'] }}" class="text-white hover:text-cyan-400 text-[9px] md:text-[10px] font-bold tracking-[0.2em] uppercase transition-colors flex items-center gap-2">
                                    Discover Details <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path></svg>
                                </a>
                            </div>
                        </div>
                    </div>

                </div>
                @endforeach

            </div>            
        </div>
    </section>

<!-- ==========================================
            SECTION 4: READY TO EXPLORE
        =========================================== -->
        <section class="section-stars py-16 md:py-24 lg:py-40 relative w-full overflow-hidden">
            
            <div class="absolute top-0 inset-x-0 h-40 bg-gradient-to-b from-white to-transparent opacity-10 pointer-events-none z-10"></div>
            <div class="absolute top-0 inset-x-0 h-32 bg-gradient-to-b from-white via-[#090A0F]/80 to-transparent pointer-events-none z-10 mix-blend-overlay"></div>

            <div id="stars"></div>
            <div id="stars2"></div>
            <div id="stars3"></div>

            <div class="relative z-20 w-full max-w-[1400px] mx-auto px-6">
                
                <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 lg:gap-12">
                    
                    <!-- Text Section: Diubah menjadi order-2 (bawah di HP) dan lg:order-1 (kiri di Desktop) -->
                    <div class="order-2 lg:order-1 lg:col-span-5 glass-panel p-8 md:p-10 lg:p-12 rounded-[24px] md:rounded-[40px] flex flex-col justify-center group hover:border-cyan-500/30 transition-all duration-500 reveal-left">
                        <div class="absolute top-0 left-0 w-64 h-64 bg-cyan-500/10 rounded-full blur-[80px] pointer-events-none transition-colors duration-700 group-hover:bg-cyan-500/20"></div>
                        
                        <div class="relative z-10">
                            <span class="text-cyan-400 text-[10px] md:text-xs tracking-[0.4em] font-bold uppercase mb-4 block drop-shadow-md">All-New EX5</span>
                            <h2 class="font-geely text-4xl md:text-5xl lg:text-6xl uppercase tracking-tighter mb-6 md:mb-8 leading-[0.9]">
                                <span class="star-title-gradient drop-shadow-2xl">Ready To <br> Explore</span>
                            </h2>
                            
                            <p class="text-gray-300 text-sm md:text-base leading-relaxed font-light mb-8 md:mb-10 max-w-[90vw] md:max-w-none drop-shadow-sm">
                                Rasakan kebebasan berkendara tanpa batas dengan arsitektur baterai mutakhir dan efisiensi aerodinamis kelas dunia. Geely EX5 dirancang secara presisi memadukan performa elektrik superior dengan tata ruang kabin yang lapang.
                            </p>
                            
                            <a href="/test-drive" class="inline-flex items-center gap-3 text-white text-[10px] font-bold tracking-[0.2em] uppercase hover:text-cyan-400 transition-colors w-max pb-2 border-b border-white/30 hover:border-cyan-400">
                                Book Test Drive <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path></svg>
                            </a>
                        </div>
                    </div>

                    <!-- Video & Stats Section: Diubah menjadi order-1 (atas di HP) dan lg:order-2 (kanan di Desktop) -->
                    <div class="order-1 lg:order-2 lg:col-span-7 flex flex-col reveal-right relative z-10">
                        
                        <!-- Main Image/Video Showcase -->
                        <div class="glass-panel p-2 rounded-[24px] md:rounded-[40px] group hover:border-white/30 transition-all duration-500 shadow-2xl flex flex-col star-showcase z-10 relative">
                            <!-- PERBAIKAN: Menggunakan aspect-video (16:9) untuk semua ukuran layar -->
                            <div class="relative w-full aspect-video rounded-[18px] md:rounded-[32px] overflow-hidden bg-gray-900">
                                
                                <!-- PERBAIKAN: Pastikan video mengambil seluruh ruang container parentnya -->
                                <video autoplay muted loop playsinline class="absolute inset-0 w-full h-full object-cover object-center transform transition-transform duration-[4s] ease-out opacity-90 group-hover:opacity-100 z-0 mirror-rhd">
                                    <source src="https://assets.zyrosite.com/Yle46KEPN6IkVONg/video_atmosphere-WPk8K2f2d7da9R4C.mp4" type="video/mp4">
                                </video>
                                
                                <div class="absolute inset-0 bg-gradient-to-t from-[#090A0F]/90 via-black/20 to-transparent opacity-100 pointer-events-none z-10"></div>
                                
                                <div class="absolute bottom-12 lg:bottom-10 left-6 md:left-10 z-20 transform translate-y-4 group-hover:translate-y-0 transition-transform duration-500 ease-out pointer-events-none">
                                    <p class="text-glow-anim font-geely text-2xl md:text-3xl lg:text-4xl uppercase tracking-tight mb-1 drop-shadow-lg">Immersive Atmosphere</p>
                                    <p class="text-gray-300 text-[9px] md:text-[10px] tracking-[0.2em] uppercase font-bold drop-shadow-md">Premium Cabin Experience</p>
                                </div>
                            </div>
                        </div>

                        <!-- 3 Stats Grid Mobile 3 Kolom Sejajar -->
                        <div class="grid grid-cols-3 gap-2 sm:gap-3 md:gap-4 lg:gap-6 -mt-6 sm:-mt-10 md:-mt-8 lg:mt-6 relative z-20 px-1 sm:px-4 md:px-0 lg:px-0">
                            <div class="absolute inset-0 bg-gradient-to-r from-cyan-500/20 via-indigo-500/20 to-purple-500/20 blur-[50px] rounded-full pointer-events-none z-0"></div>

                            <div class="glass-panel relative z-10 p-3 sm:p-5 md:p-6 lg:p-8 rounded-[16px] sm:rounded-[24px] md:rounded-[32px] hover:border-cyan-400/50 transition-all duration-500 shadow-xl flex flex-col justify-center items-center text-center">
                                <p class="text-gray-300 text-[6px] sm:text-[9px] tracking-[0.1em] sm:tracking-[0.2em] font-bold uppercase mb-1 sm:mb-2 drop-shadow-sm whitespace-nowrap">Up to</p>
                                <h3 class="font-geely flex items-baseline justify-center text-xl sm:text-3xl md:text-4xl lg:text-5xl text-white mb-1 sm:mb-2 drop-shadow-md">
                                    <span class="leading-none text-cyan-400">495</span><span class="text-[8px] sm:text-sm lg:text-lg text-gray-400 ml-0.5 sm:ml-1 leading-none">km*</span>
                                </h3>
                                <div class="h-[1px] w-4 sm:w-8 bg-white/20 mb-1 sm:mb-2 transition-all duration-500"></div>
                                <p class="text-gray-400 text-[5px] sm:text-[8px] md:text-[9px] tracking-widest uppercase font-bold">NEDC Range</p>
                            </div>
                            
                            <div class="glass-panel relative z-10 p-3 sm:p-5 md:p-6 lg:p-8 rounded-[16px] sm:rounded-[24px] md:rounded-[32px] hover:border-indigo-400/50 transition-all duration-500 shadow-xl flex flex-col justify-center items-center text-center">
                                <p class="text-gray-300 text-[6px] sm:text-[9px] tracking-[0.1em] sm:tracking-[0.2em] font-bold uppercase mb-1 sm:mb-2 drop-shadow-sm whitespace-nowrap">Fast Charging</p>
                                <h3 class="font-geely flex items-baseline justify-center text-xl sm:text-3xl md:text-4xl lg:text-5xl text-white mb-1 sm:mb-2 drop-shadow-md">
                                    <span class="leading-none text-indigo-400">20</span><span class="text-[8px] sm:text-sm lg:text-lg text-gray-400 ml-0.5 sm:ml-1 leading-none">mins**</span>
                                </h3>
                                <div class="h-[1px] w-4 sm:w-8 bg-white/20 mb-1 sm:mb-2 transition-all duration-500"></div>
                                <p class="text-gray-400 text-[5px] sm:text-[8px] md:text-[9px] tracking-widest uppercase font-bold">30% - 80%</p>
                            </div>

                            <div class="glass-panel relative z-10 p-3 sm:p-5 md:p-6 lg:p-8 rounded-[16px] sm:rounded-[24px] md:rounded-[32px] hover:border-purple-400/50 transition-all duration-500 shadow-xl flex flex-col justify-center items-center text-center">
                                <p class="text-gray-300 text-[6px] sm:text-[9px] tracking-[0.1em] sm:tracking-[0.2em] font-bold uppercase mb-1 sm:mb-2 drop-shadow-sm whitespace-nowrap">Acceleration</p>
                                <h3 class="font-geely flex items-baseline justify-center text-xl sm:text-3xl md:text-4xl lg:text-5xl text-white mb-1 sm:mb-2 drop-shadow-md">
                                    <span class="leading-none text-purple-400">6.9</span><span class="text-[8px] sm:text-[11px] lg:text-sm text-gray-400 ml-0.5 sm:ml-1 tracking-normal lowercase leading-none">sec</span>
                                </h3>
                                <div class="h-[1px] w-4 sm:w-8 bg-white/20 mb-1 sm:mb-2 transition-all duration-500"></div>
                                <p class="text-gray-400 text-[5px] sm:text-[8px] md:text-[9px] tracking-widest uppercase font-bold">0-100 km/h</p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>

        <!-- ==========================================
             SECTION 5: FINANCIAL PLAN & PROMO
        =========================================== -->
        <section class="py-16 md:py-24 lg:py-32 relative w-full overflow-hidden">
            
            <!-- Massive Center Glow -->
            <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-[600px] h-[600px] bg-blue-600/20 rounded-full blur-[120px] pointer-events-none z-0"></div>

            <div class="relative z-10 w-full max-w-[1400px] mx-auto px-6">
                <!-- Glass Panel Wrapper -->
                <div class="glass-panel rounded-[24px] md:rounded-[40px] overflow-hidden relative shadow-2xl group border border-white/10 hover:border-blue-500/30 transition-colors duration-500">
                    
                    <div class="grid grid-cols-1 lg:grid-cols-12 items-stretch">
                        
                        <!-- Content Area -->
                        <div class="order-2 lg:order-1 lg:col-span-5 p-8 md:p-10 lg:p-12 flex flex-col justify-center relative z-10">
                            <div class="inline-flex items-center gap-3 px-4 py-2 rounded-full border border-blue-500/30 bg-blue-500/10 mb-6 w-max">
                                <div class="w-2 h-2 rounded-full bg-blue-400 animate-pulse"></div>
                                <span class="text-blue-300 text-[9px] md:text-[10px] font-bold tracking-[0.2em] uppercase">Promo & Pembiayaan</span>
                            </div>
                            
                            <h2 class="font-geely text-4xl sm:text-5xl lg:text-5xl text-white uppercase tracking-tighter mb-6 leading-[1.1]">
                                Miliki <br> <span class="text-transparent bg-clip-text bg-gradient-to-r from-blue-400 via-cyan-300 to-white">Geely Impian</span>
                            </h2>
                            
                            <p class="text-gray-300 text-sm md:text-base font-light leading-relaxed mb-8 max-w-[90vw] md:max-w-none">
                                Dapatkan penawaran harga terbaik dan akses kebebasan finansial dengan program pembiayaan premium yang 100% transparan di wilayah Tangerang dan Jakarta.
                            </p>

                            <a href="/credit-simulation" class="inline-flex items-center justify-center gap-3 bg-gradient-to-r from-blue-600 to-cyan-500 text-white px-8 py-4 rounded-full font-bold text-[10px] md:text-[11px] tracking-[0.2em] uppercase transition-all duration-300 hover:scale-105 hover:shadow-[0_0_30px_rgba(59,130,246,0.5)] w-full sm:w-max">
                                <span>Mulai Simulasi Kredit</span>
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path></svg>
                            </a>
                        </div>                    
                        
                        <!-- Image Banner Area -->
                        <div class="order-1 lg:order-2 lg:col-span-7 relative min-h-[250px] sm:min-h-[350px] lg:min-h-full overflow-hidden bg-gray-900">
                            <!-- Foto Promo Baru -->
                            <img src="https://assets.zyrosite.com/Yle46KEPN6IkVONg/banner_home-promo-01-202507-YBgjeGg2pzIW7kpk.jpg" alt="Promo Geely BSD" class="absolute inset-0 w-full h-full object-cover object-center transform group-hover:scale-105 transition-transform duration-[4s] ease-out z-0">
                            
                            <!-- Gradients for smooth blending to text area -->
                            <div class="absolute inset-0 bg-gradient-to-t from-[#090A0F] via-[#090A0F]/60 to-transparent lg:bg-gradient-to-r lg:from-[#090A0F] lg:via-[#090A0F]/30 lg:to-transparent z-10"></div>
                        </div>
                        
                    </div>
                </div>
            </div>
        </section>

        
            <!-- ==========================================
             SECTION 3: FEATURE OVERVIEW (VIDEO & TEXT)
             PERBAIKAN: Font size judul disesuaikan agar tidak overflow
        =========================================== -->
        <section class="py-16 md:py-24 lg:py-40 bg-white relative overflow-hidden">
            <!-- Glow Light Backgrounds -->
            <div class="absolute top-32 right-[-10%] w-[600px] h-[600px] bg-cyan-200/50 rounded-full blur-[120px] pointer-events-none z-0"></div>
            <div class="absolute bottom-[-10%] left-[-10%] w-[500px] h-[500px] bg-blue-200/50 rounded-full blur-[120px] pointer-events-none z-0"></div>

            <div class="max-w-[1600px] mx-auto px-0 md:px-12 lg:px-16 relative z-10">
                <div class="grid grid-cols-1 lg:grid-cols-12 gap-0 lg:gap-20 items-center">
                    
                    <!-- VIDEO -->
                    <div class="lg:col-span-7 order-1 lg:order-2 reveal-right h-full px-4 md:px-0">
                        <div class="relative rounded-[24px] md:rounded-[32px] overflow-hidden shadow-[0_30px_60px_rgba(0,0,0,0.15)] border border-gray-100 group video-feature w-full h-[45vh] md:h-[50vh] lg:h-full">
                            <video autoplay muted loop playsinline class="absolute inset-0 w-full h-full object-cover transform group-hover:scale-105 transition-transform duration-[2.5s] ease-out">
                                <source src="https://assets.zyrosite.com/Yle46KEPN6IkVONg/say-hi-to-the-geely-ex5---geely-auto-uk-1080p-h264-_1-Sz3UdvLVUW0EehYY.mp4" type="video/mp4">
                            </video>
                            <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/10 to-transparent opacity-80 group-hover:opacity-100 transition-opacity duration-500"></div>
                            <div class="absolute bottom-16 lg:bottom-12 left-6 md:left-12 transform translate-y-4 group-hover:translate-y-0 transition-transform duration-500 ease-out">
                                <span class="text-cyan-400 text-[9px] md:text-[10px] tracking-[0.3em] font-bold uppercase block mb-2 drop-shadow-md">Drive the Future.</span>
                                <h4 class="font-geely text-2xl md:text-4xl uppercase tracking-tight text-white drop-shadow-lg leading-none">Define Your Journey..</h4>
                            </div>
                        </div>
                    </div>

                    <!-- TEXT CONTENT -->
                    <div class="lg:col-span-5 order-2 lg:order-1 reveal-left relative z-20 -mt-10 md:-mt-16 lg:mt-0 px-6 lg:px-0">
                        <!-- Menggunakan Light Glassmorphism yang sudah disempurnakan -->
                        <div class="glass-panel-light p-8 md:p-10 lg:p-12 rounded-[32px] lg:rounded-[40px] shadow-[0_20px_50px_rgba(0,0,0,0.05)] lg:shadow-[0_30px_60px_rgba(0,0,0,0.05)]">
                            <div class="inline-flex items-center gap-3 mb-6 px-5 py-2.5 rounded-full border border-cyan-200 bg-white/50 backdrop-blur-md shadow-sm">
                                <span class="text-cyan-600 text-[9px] font-bold tracking-[0.4em] uppercase">Redefining Joyful Rides</span>
                            </div>
                            
                            <!-- Font size judul disesuaikan agar tidak overflow -->
                            <h2 class="font-geely text-2xl sm:text-3xl md:text-4xl lg:text-5xl uppercase tracking-tighter text-gray-900 mb-6 md:mb-8 leading-[1.1] drop-shadow-sm">
                                Keseimbangan <br> <span class="text-gradient-cyan">Sempurna</span>
                            </h2>
                            
                            <div class="space-y-4 md:space-y-6 text-gray-600 text-sm md:text-base font-medium leading-relaxed">
                                <p>Geely EX5 hadir sebagai pilihan terbaik bagi Anda yang mencari SUV dengan performa tangguh, desain elegan, serta teknologi canggih. Ditenagai mesin efisien dan fitur keselamatan lengkap.</p>
                                <p>Desain eksterior modern aerodinamis menawarkan efisiensi optimal. Interior dirancang untuk kenyamanan maksimal dengan material premium dan layar infotainment cerdas.</p>
                                <p>Dilengkapi sistem keamanan tingkat tinggi seperti Adaptive Cruise Control dan Blind Spot Monitoring untuk perlindungan ekstra.</p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>

<!-- ==========================================
            SECTION 4: READY TO EXPLORE
        =========================================== -->
        <section class="section-stars py-16 md:py-24 lg:py-40 relative w-full overflow-hidden">
            
            <div class="absolute top-0 inset-x-0 h-40 bg-gradient-to-b from-white to-transparent opacity-10 pointer-events-none z-10"></div>
            <div class="absolute top-0 inset-x-0 h-32 bg-gradient-to-b from-white via-[#090A0F]/80 to-transparent pointer-events-none z-10 mix-blend-overlay"></div>

            <div id="stars"></div>
            <div id="stars2"></div>
            <div id="stars3"></div>

            <div class="relative z-20 w-full max-w-[1400px] mx-auto px-6">
                
                <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 lg:gap-12">
                    
                    <!-- Text Section: Diubah menjadi order-2 (bawah di HP) dan lg:order-1 (kiri di Desktop) -->
                    <div class="order-2 lg:order-1 lg:col-span-5 glass-panel p-8 md:p-10 lg:p-12 rounded-[24px] md:rounded-[40px] flex flex-col justify-center group hover:border-cyan-500/30 transition-all duration-500 reveal-left">
                        <div class="absolute top-0 left-0 w-64 h-64 bg-cyan-500/10 rounded-full blur-[80px] pointer-events-none transition-colors duration-700 group-hover:bg-cyan-500/20"></div>
                        
                        <div class="relative z-10">
                            <span class="text-cyan-400 text-[10px] md:text-xs tracking-[0.4em] font-bold uppercase mb-4 block drop-shadow-md">All-New EX5</span>
                            <h2 class="font-geely text-4xl md:text-5xl lg:text-6xl uppercase tracking-tighter mb-6 md:mb-8 leading-[0.9]">
                                <span class="star-title-gradient drop-shadow-2xl">Ready To <br> Explore</span>
                            </h2>
                            
                            <p class="text-gray-300 text-sm md:text-base leading-relaxed font-light mb-8 md:mb-10 max-w-[90vw] md:max-w-none drop-shadow-sm">
                                Rasakan kebebasan berkendara tanpa batas dengan arsitektur baterai mutakhir dan efisiensi aerodinamis kelas dunia. Geely EX5 dirancang secara presisi memadukan performa elektrik superior dengan tata ruang kabin yang lapang.
                            </p>
                            
                            <a href="/test-drive" class="inline-flex items-center gap-3 text-white text-[10px] font-bold tracking-[0.2em] uppercase hover:text-cyan-400 transition-colors w-max pb-2 border-b border-white/30 hover:border-cyan-400">
                                Book Test Drive <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path></svg>
                            </a>
                        </div>
                    </div>

                    <!-- Video & Stats Section: Diubah menjadi order-1 (atas di HP) dan lg:order-2 (kanan di Desktop) -->
                    <div class="order-1 lg:order-2 lg:col-span-7 flex flex-col reveal-right relative z-10">
                        
                        <!-- Main Image/Video Showcase -->
                        <div class="glass-panel p-2 rounded-[24px] md:rounded-[40px] group hover:border-white/30 transition-all duration-500 shadow-2xl flex flex-col star-showcase z-10 relative">
                            <!-- PERBAIKAN: Menggunakan aspect-video (16:9) untuk semua ukuran layar -->
                            <div class="relative w-full aspect-video rounded-[18px] md:rounded-[32px] overflow-hidden bg-gray-900">
                                
                                <!-- PERBAIKAN: Pastikan video mengambil seluruh ruang container parentnya -->
                                <video autoplay muted loop playsinline class="absolute inset-0 w-full h-full object-cover object-center transform transition-transform duration-[4s] ease-out opacity-90 group-hover:opacity-100 z-0 mirror-rhd">
                                    <source src="https://assets.zyrosite.com/Yle46KEPN6IkVONg/video_atmosphere-WPk8K2f2d7da9R4C.mp4" type="video/mp4">
                                </video>
                                
                                <div class="absolute inset-0 bg-gradient-to-t from-[#090A0F]/90 via-black/20 to-transparent opacity-100 pointer-events-none z-10"></div>
                                
                                <div class="absolute bottom-12 lg:bottom-10 left-6 md:left-10 z-20 transform translate-y-4 group-hover:translate-y-0 transition-transform duration-500 ease-out pointer-events-none">
                                    <p class="text-glow-anim font-geely text-2xl md:text-3xl lg:text-4xl uppercase tracking-tight mb-1 drop-shadow-lg">Immersive Atmosphere</p>
                                    <p class="text-gray-300 text-[9px] md:text-[10px] tracking-[0.2em] uppercase font-bold drop-shadow-md">Premium Cabin Experience</p>
                                </div>
                            </div>
                        </div>

                        <!-- 3 Stats Grid Mobile 3 Kolom Sejajar -->
                        <div class="grid grid-cols-3 gap-2 sm:gap-3 md:gap-4 lg:gap-6 -mt-6 sm:-mt-10 md:-mt-8 lg:mt-6 relative z-20 px-1 sm:px-4 md:px-0 lg:px-0">
                            <div class="absolute inset-0 bg-gradient-to-r from-cyan-500/20 via-indigo-500/20 to-purple-500/20 blur-[50px] rounded-full pointer-events-none z-0"></div>

                            <div class="glass-panel relative z-10 p-3 sm:p-5 md:p-6 lg:p-8 rounded-[16px] sm:rounded-[24px] md:rounded-[32px] hover:border-cyan-400/50 transition-all duration-500 shadow-xl flex flex-col justify-center items-center text-center">
                                <p class="text-gray-300 text-[6px] sm:text-[9px] tracking-[0.1em] sm:tracking-[0.2em] font-bold uppercase mb-1 sm:mb-2 drop-shadow-sm whitespace-nowrap">Up to</p>
                                <h3 class="font-geely flex items-baseline justify-center text-xl sm:text-3xl md:text-4xl lg:text-5xl text-white mb-1 sm:mb-2 drop-shadow-md">
                                    <span class="leading-none text-cyan-400">495</span><span class="text-[8px] sm:text-sm lg:text-lg text-gray-400 ml-0.5 sm:ml-1 leading-none">km*</span>
                                </h3>
                                <div class="h-[1px] w-4 sm:w-8 bg-white/20 mb-1 sm:mb-2 transition-all duration-500"></div>
                                <p class="text-gray-400 text-[5px] sm:text-[8px] md:text-[9px] tracking-widest uppercase font-bold">NEDC Range</p>
                            </div>
                            
                            <div class="glass-panel relative z-10 p-3 sm:p-5 md:p-6 lg:p-8 rounded-[16px] sm:rounded-[24px] md:rounded-[32px] hover:border-indigo-400/50 transition-all duration-500 shadow-xl flex flex-col justify-center items-center text-center">
                                <p class="text-gray-300 text-[6px] sm:text-[9px] tracking-[0.1em] sm:tracking-[0.2em] font-bold uppercase mb-1 sm:mb-2 drop-shadow-sm whitespace-nowrap">Fast Charging</p>
                                <h3 class="font-geely flex items-baseline justify-center text-xl sm:text-3xl md:text-4xl lg:text-5xl text-white mb-1 sm:mb-2 drop-shadow-md">
                                    <span class="leading-none text-indigo-400">20</span><span class="text-[8px] sm:text-sm lg:text-lg text-gray-400 ml-0.5 sm:ml-1 leading-none">mins**</span>
                                </h3>
                                <div class="h-[1px] w-4 sm:w-8 bg-white/20 mb-1 sm:mb-2 transition-all duration-500"></div>
                                <p class="text-gray-400 text-[5px] sm:text-[8px] md:text-[9px] tracking-widest uppercase font-bold">30% - 80%</p>
                            </div>

                            <div class="glass-panel relative z-10 p-3 sm:p-5 md:p-6 lg:p-8 rounded-[16px] sm:rounded-[24px] md:rounded-[32px] hover:border-purple-400/50 transition-all duration-500 shadow-xl flex flex-col justify-center items-center text-center">
                                <p class="text-gray-300 text-[6px] sm:text-[9px] tracking-[0.1em] sm:tracking-[0.2em] font-bold uppercase mb-1 sm:mb-2 drop-shadow-sm whitespace-nowrap">Acceleration</p>
                                <h3 class="font-geely flex items-baseline justify-center text-xl sm:text-3xl md:text-4xl lg:text-5xl text-white mb-1 sm:mb-2 drop-shadow-md">
                                    <span class="leading-none text-purple-400">6.9</span><span class="text-[8px] sm:text-[11px] lg:text-sm text-gray-400 ml-0.5 sm:ml-1 tracking-normal lowercase leading-none">sec</span>
                                </h3>
                                <div class="h-[1px] w-4 sm:w-8 bg-white/20 mb-1 sm:mb-2 transition-all duration-500"></div>
                                <p class="text-gray-400 text-[5px] sm:text-[8px] md:text-[9px] tracking-widest uppercase font-bold">0-100 km/h</p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>


    <!-- ==========================================
         SECTION 5: FEATURED FOCUS (MAGAZINE BENTO)
    =========================================== -->
    <section class="py-24 lg:py-40 bg-white relative overflow-hidden">
        
        <div class="absolute top-1/4 right-0 w-64 h-64 bg-cyan-100/60 rounded-full blur-[80px] pointer-events-none md:hidden"></div>
        <div class="absolute bottom-1/4 left-0 w-64 h-64 bg-indigo-100/60 rounded-full blur-[80px] pointer-events-none md:hidden"></div>

        <div class="max-w-[1600px] mx-auto px-6 md:px-12 lg:px-16 relative z-10">
            
            <div class="flex flex-col md:flex-row justify-between items-start md:items-end mb-12 md:mb-16 gap-6 reveal-up">
                <div class="max-w-2xl">
                    <div class="flex items-center gap-4 mb-4 md:mb-6">
                        <div class="w-10 h-[2px] bg-black"></div>
                        <span class="text-black text-[9px] md:text-[10px] font-bold tracking-[0.4em] uppercase">Spotlight Geely EX2</span>
                    </div>
                    <h2 class="font-geely text-4xl sm:text-5xl md:text-6xl lg:text-7xl uppercase tracking-tighter text-gray-900 leading-[0.9]">
                        EX2 <span class="text-gray-300">URBAN</span> <br> BLUEPRINT
                    </h2>
                </div>
                <div class="md:text-right pb-2">
                    <p class="text-gray-500 text-sm md:text-base font-light max-w-sm ml-auto">
                        Manifestasi arsitektural antara dinamika perkotaan dan tata ruang kabin futuristik pada lini mobil listrik Geely terbaru.
                    </p>
                </div>
            </div>

            <div class="grid grid-cols-2 md:grid-cols-4 grid-rows-none md:grid-rows-2 gap-3 md:gap-4 h-auto md:h-[800px] reveal-up delay-100">
                
                <div class="col-span-2 md:col-span-2 md:row-span-2 group relative rounded-[20px] md:rounded-[32px] overflow-hidden bg-gray-100 cursor-pointer h-[200px] md:h-auto premium-card-hover md:border md:border-gray-200 glare-effect">
                    <img src="https://assets.zyrosite.com/Yle46KEPN6IkVONg/geely-ex2-highlight-mP43QkLzBRHoaLz3.jpg" alt="Eksterior Depan Geely EX2 EV dengan Desain Aerodinamis Tercanggih" class="w-full h-full object-cover object-center md:object-center transform group-hover:scale-105 transition-transform duration-[1.5s] ease-out">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-transparent to-transparent opacity-60 group-hover:opacity-90 transition-opacity duration-500 mobile-soft-gradient"></div>
                    
                    <div class="absolute bottom-2 left-2 right-2 md:bottom-10 md:left-10 md:right-10 flex justify-between items-center md:items-end mobile-bento-glass-dark rounded-[16px] md:bg-transparent md:border-none md:rounded-none p-3 md:p-0 z-10">
                        <div>
                            <span class="text-cyan-300 md:text-white/80 text-[7px] md:text-[10px] font-bold tracking-[0.3em] uppercase block mb-1 md:mb-3 drop-shadow-md">01 // Exterior</span>
                            <h3 class="font-geely text-xl md:text-4xl text-white uppercase tracking-tight leading-none drop-shadow-lg">Aero Stance</h3>
                        </div>
                        <div class="w-8 h-8 md:w-12 md:h-12 rounded-full bg-white/20 backdrop-blur-md flex items-center justify-center text-white transform translate-x-4 opacity-0 group-hover:translate-x-0 group-hover:opacity-100 transition-all duration-500 mobile-always-visible">
                            <svg class="w-3 h-3 md:w-5 md:h-5 transform -rotate-45" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path></svg>
                        </div>
                    </div>
                </div>

                <div class="col-span-1 md:col-span-1 md:row-span-2 group relative rounded-[20px] md:rounded-[32px] overflow-hidden bg-gray-200 cursor-pointer h-[160px] md:h-auto premium-card-hover md:border md:border-gray-200 glare-effect">
                    <img src="https://assets.zyrosite.com/Yle46KEPN6IkVONg/exterior_ex2_05-A1azJbNx5vfMLwxk.webp" alt="Gaya Hidup Berkendara EV di Perkotaan dengan Mobil Geely EX2" class="w-full h-full object-cover object-[center_60%] md:object-center transform group-hover:scale-105 transition-transform duration-[1.5s] ease-out">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-transparent to-transparent opacity-60 group-hover:opacity-90 transition-opacity duration-500 mobile-soft-gradient"></div>
                    <div class="absolute bottom-2 left-2 right-2 md:bottom-10 md:left-8 mobile-bento-glass-dark rounded-[16px] md:bg-transparent md:border-none md:rounded-none p-3 md:p-0 z-10">
                        <span class="text-cyan-300 md:text-white/80 text-[7px] md:text-[10px] font-bold tracking-[0.3em] uppercase block mb-1 md:mb-3 drop-shadow-md">02 // Lifestyle</span>
                        <h3 class="font-geely text-base md:text-3xl text-white uppercase tracking-tight leading-none drop-shadow-lg">Agility</h3>
                    </div>
                </div>

                <div class="col-span-1 md:col-span-1 md:row-span-1 group relative rounded-[20px] md:rounded-[32px] overflow-hidden bg-transparent md:bg-[#f8fafc] md:border md:border-gray-200 cursor-pointer flex flex-col justify-between hover:bg-gray-100 transition-colors duration-500 h-[160px] md:h-auto mobile-bento-glass-light p-4 md:p-8 premium-card-hover">
                    <div class="z-10">
                        <span class="text-blue-500 md:text-gray-400 text-[7px] md:text-[9px] font-bold tracking-[0.3em] uppercase block mb-1 md:mb-2">03 // Utility</span>
                        <h3 class="font-geely text-base md:text-2xl text-gray-900 uppercase tracking-tight">Max Cargo</h3>
                    </div>
                    <div class="w-full h-[60%] relative mt-auto">
                        <img src="https://assets.zyrosite.com/Yle46KEPN6IkVONg/ldspace-B4XeAula05tXqaeN.png" alt="Kapasitas Bagasi Luas Mobil Listrik Keluarga Geely EX2" class="absolute inset-0 w-full h-full object-contain transform group-hover:scale-110 group-hover:-translate-y-2 transition-transform duration-[1.5s] ease-out mix-blend-darken">
                    </div>
                </div>

                <div class="col-span-2 md:col-span-1 md:row-span-1 group relative rounded-[20px] md:rounded-[32px] overflow-hidden bg-gray-900 cursor-pointer h-[140px] md:h-auto premium-card-hover premium-card-dark glare-effect">
                    <img src="https://assets.zyrosite.com/Yle46KEPN6IkVONg/interior_ex2_01-mjE49a4pNXu7kyQv.jpg" alt="Desain Interior Kabin Premium Futuristik Geely EX2 Indonesia" class="w-full h-full object-cover object-[center_60%] md:object-center transform group-hover:scale-105 transition-transform duration-[1.5s] ease-out opacity-80 group-hover:opacity-100">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/90 to-transparent opacity-80 group-hover:opacity-100 transition-opacity duration-500 mobile-soft-gradient"></div>
                    <div class="absolute bottom-2 left-2 right-2 md:bottom-8 md:left-8 mobile-bento-glass-dark rounded-[16px] md:bg-transparent md:border-none md:rounded-none p-3 md:p-0 z-10">
                        <span class="text-cyan-300 md:text-gray-400 text-[7px] md:text-[9px] font-bold tracking-[0.3em] uppercase block mb-1 md:mb-2 drop-shadow-md">04 // Cockpit</span>
                        <h3 class="font-geely text-base md:text-2xl text-white uppercase tracking-tight leading-tight drop-shadow-lg">Digital Oasis</h3>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- ==========================================
         SECTION 6: TECHNOLOGY (BENTO GLASS)
    =========================================== -->
    <section class="py-24 lg:py-40 bg-[#050505] bg-noise overflow-hidden relative">
        <div class="max-w-[1600px] mx-auto px-6 md:px-12 lg:px-16 relative z-10">

            <div class="text-center max-w-3xl mx-auto mb-16 md:mb-20 reveal-up">
                <div class="inline-flex items-center gap-3 px-4 py-2 rounded-full border border-cyan-500/30 bg-cyan-500/5 mb-6">
                    <svg class="w-4 h-4 text-cyan-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 3v2m6-2v2M9 19v2m6-2v2M5 9H3m2 6H3m18-6h-2m2 6h-2M7 19h10a2 2 0 002-2V7a2 2 0 00-2-2H7a2 2 0 00-2 2v10a2 2 0 002 2zM9 9h6v6H9V9z"></path></svg>
                    <span class="text-cyan-400 text-[8px] md:text-[9px] font-bold tracking-[0.4em] uppercase">Teknologi Baterai Mobil Listrik</span>
                </div>
                <h2 class="font-geely text-4xl sm:text-5xl md:text-6xl lg:text-7xl uppercase tracking-tighter text-white leading-[1] md:leading-[0.9] mb-6">
                    GEA PLATFORM <br> <span class="text-transparent bg-clip-text bg-gradient-to-r from-gray-500 to-gray-700">NEURAL CORE</span>
                </h2>
                <p class="text-gray-400 text-sm md:text-base font-light leading-relaxed">
                    Arsitektur elektrik cerdas global (GEA) mengintegrasikan superkomputer on-board dengan sasis baja boron untuk menghadirkan tingkat keselamatan dan efisiensi mobilitas EV tertinggi di kelasnya.
                </p>
            </div>

            <div class="grid grid-cols-2 lg:grid-cols-12 gap-3 md:gap-6">
                
                <div class="col-span-2 lg:col-span-8 aspect-video md:aspect-auto md:h-[600px] group relative rounded-[20px] md:rounded-[32px] overflow-hidden bg-black reveal-scale border border-white/5 md:border-white/10 shadow-2xl premium-card-hover premium-card-dark glare-effect">
                    <video autoplay muted loop playsinline aria-label="Simulasi Platform GEA Cerdas Geely" class="w-full h-full object-cover opacity-60 mix-blend-screen">
                        <source src="https://assets.zyrosite.com/Yle46KEPN6IkVONg/geely-ex2-inside-the-gea-intelligent-electric-platform---geely-auto-720p-h264-tjCY49tcStbBVMrV.mp4" type="video/mp4">
                    </video>
                    
                    <svg class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-16 h-16 md:w-32 md:h-32 text-cyan-500/20 pointer-events-none animate-[spin_20s_linear_infinite] z-10" fill="none" viewBox="0 0 100 100">
                        <circle cx="50" cy="50" r="48" stroke="currentColor" stroke-width="0.5" stroke-dasharray="4 4"/>
                        <circle cx="50" cy="50" r="30" stroke="currentColor" stroke-width="0.5"/>
                    </svg>
                </div>

                <div class="col-span-2 lg:col-span-4 grid grid-cols-2 lg:flex lg:flex-col gap-3 md:gap-6">
                    <!-- Card 1 -->
                    <div class="col-span-1 glass-panel mobile-bento-glass-dark rounded-[20px] md:rounded-[32px] p-4 md:p-10 flex flex-col justify-center relative overflow-hidden group reveal-right delay-100 premium-card-hover premium-card-dark">
                        <div class="absolute top-0 right-0 w-24 h-24 md:w-32 md:h-32 bg-cyan-500/10 rounded-full blur-[30px] md:blur-[40px] group-hover:bg-cyan-500/20 transition-colors duration-500"></div>
                        <div class="w-8 h-8 md:w-14 md:h-14 rounded-full bg-white/5 flex items-center justify-center text-cyan-400 border border-white/10 mb-3 md:mb-6 group-hover:scale-110 transition-transform duration-500 shrink-0 z-10">
                            <svg class="w-4 h-4 md:w-6 md:h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"></path></svg>
                        </div>
                        <div class="z-10">
                            <h3 class="font-geely text-sm md:text-3xl text-white uppercase mb-1 md:mb-3 tracking-tight">AI Integration</h3>
                            <p class="text-gray-400 text-[8px] md:text-sm font-light leading-relaxed hidden md:block">
                                Penyelarasan millidetik antara sensor Lidar, Radar, dan otak komputasi pusat mobil Geely Anda.
                            </p>
                        </div>
                    </div>

                    <!-- Card 2 -->
                    <div class="col-span-1 glass-panel mobile-bento-glass-dark rounded-[20px] md:rounded-[32px] p-4 md:p-10 flex flex-col justify-center relative overflow-hidden group reveal-right delay-200 premium-card-hover premium-card-dark">
                        <div class="absolute bottom-0 right-0 w-24 h-24 md:w-32 md:h-32 bg-indigo-50/50 rounded-full blur-[30px] md:blur-[40px] group-hover:bg-indigo-500/20 transition-colors duration-500"></div>
                        <div class="w-8 h-8 md:w-14 md:h-14 rounded-full bg-white/5 flex items-center justify-center text-indigo-400 border border-white/10 mb-3 md:mb-6 group-hover:scale-110 transition-transform duration-500 shrink-0 z-10">
                            <svg class="w-4 h-4 md:w-6 md:h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M13 10V3L4 14h7v7l9-11h-7z"></path></svg>
                        </div>
                        <div class="z-10">
                            <h3 class="font-geely text-sm md:text-3xl text-white uppercase mb-1 md:mb-3 tracking-tight leading-tight">Hyper Efficiency</h3>
                            <p class="text-gray-400 text-[8px] md:text-sm font-light leading-relaxed hidden md:block">
                                Manajemen termal pintar yang melindungi baterai mobil listrik dan memaksimalkan jangkauan tempuh hingga 600km.
                            </p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

            <!-- ==========================================
             WRAPPER UNTUK EFEK STICKY OVERLAP
             (Section 4 Video & Section 5 Content digabung)
        =========================================== -->
        <div class="relative w-full pb-10 bg-[#050505]">
            
            <!-- SECTION 4: STICKY VIDEO BACKGROUND -->
            <div class="sticky top-[25vh] md:top-0 w-full aspect-video md:h-[100vh] overflow-hidden z-0">
                <video autoplay muted loop playsinline class="absolute inset-0 w-full h-full object-cover">
                    <source src="https://assets.zyrosite.com/Yle46KEPN6IkVONg/geely---coming-soon-starray-em-i---geely-epping-1080p-h264-YZ9EbbbjRws55ErL.mp4" type="video/mp4">
                </video>
                
                <!-- Subtle gradient overlays for smooth blending -->
                <div class="absolute inset-x-0 top-0 h-10 md:h-32 bg-gradient-to-b from-[#050505] to-transparent pointer-events-none z-10"></div>
                <div class="absolute inset-x-0 bottom-0 h-10 md:h-32 bg-gradient-to-t from-[#050505] to-transparent pointer-events-none z-10"></div>
            </div>

            <!-- SECTION 5: EM-I SUPER HYBRID TECHNOLOGY -->
            <section class="mt-[40vh] md:mt-[70vh] py-16 md:py-24 lg:py-32 bg-[#050505] relative z-30 shadow-[0_-30px_60px_rgba(0,0,0,0.9)] min-h-[100vh] rounded-t-[2rem] md:rounded-none border-t border-white/5 md:border-t-0">
                <div class="absolute top-0 right-0 w-[500px] h-[500px] bg-cyan-600/10 rounded-full blur-[150px] pointer-events-none z-0"></div>
                <div class="absolute bottom-0 left-0 w-[400px] h-[400px] bg-emerald-600/10 rounded-full blur-[120px] pointer-events-none z-0"></div>

                <div class="max-w-[1600px] w-full mx-auto px-4 sm:px-8 md:px-12 lg:px-16 relative z-10 grid grid-cols-1 lg:grid-cols-2 gap-6 lg:gap-x-20 lg:gap-y-10 items-center lg:items-start">
                    
                    <div class="order-1 lg:col-start-1 lg:row-start-1 flex flex-col justify-center">
                        <h3 class="text-cyan-400 text-[10px] md:text-sm font-bold tracking-[0.3em] uppercase mb-4 reveal-up">
                            Efficiency meets intelligent
                        </h3>
                        <h2 class="font-geely text-3xl sm:text-4xl md:text-5xl lg:text-7xl uppercase tracking-tighter text-white mb-6 reveal-up delay-100 leading-tight">
                            EM-i <span class="text-gradient-cyan">super hybrid</span>
                        </h2>
                        <p class="text-gray-400 text-xs sm:text-sm md:text-base lg:text-lg font-light leading-relaxed mb-4 lg:mb-10 reveal-up delay-200">
                            EM-i or E-Motive intelligence is Geely's advanced hybrid technology, combining the benefits of fuel and battery for greater efficiency, capability, and lower emissions.
                        </p>
                    </div>

                    <div class="order-2 lg:col-start-2 lg:row-start-1 relative reveal-left delay-300">
                        <div class="absolute top-1/4 left-1/2 -translate-x-1/2 -translate-y-1/4 w-[80%] h-[60%] bg-cyan-600/20 rounded-full blur-[100px] pointer-events-none z-0"></div>
                        <div class="glass-panel p-2 md:p-3 rounded-[1.5rem] md:rounded-[2rem] relative z-10">
                            <div class="relative w-full aspect-video rounded-[1rem] md:rounded-[1.5rem] overflow-hidden">
                                <video autoplay muted loop playsinline class="absolute inset-0 w-full h-full object-cover transform md:hover:scale-105 transition-transform duration-700">
                                    <source src="https://geelyprod-assets.oss-ap-southeast-5.aliyuncs.com/products/starray-emi/section-2/EM-i-Super-Hybrid.mp4" type="video/mp4">
                                </video>
                            </div>
                        </div>
                    </div>

                    <div class="order-3 lg:col-start-2 lg:row-start-2 glass-panel p-5 sm:p-6 md:p-8 rounded-2xl md:rounded-3xl reveal-up delay-400 relative z-10 group overflow-hidden">
                        <div class="absolute -right-10 -top-10 w-32 h-32 bg-cyan-500/20 rounded-full blur-[40px] group-hover:bg-cyan-400/40 transition-colors duration-500"></div>
                        <h4 class="text-white font-bold text-base sm:text-lg md:text-2xl mb-2 md:mb-4 relative z-10 group-hover:text-cyan-300 transition-colors drop-shadow-sm">
                            Highest Thermal Efficiency (46.5%)
                        </h4>
                        <p class="text-gray-400 text-xs sm:text-sm md:text-base lg:text-lg relative z-10 leading-relaxed group-hover:text-gray-300 transition-colors">
                            Globally leading platform thermal efficiency, surpassing industry standards.
                        </p>
                    </div>

                    <div class="order-4 lg:col-start-1 lg:row-start-2 glass-panel p-5 sm:p-6 md:p-8 rounded-2xl md:rounded-3xl reveal-up delay-300 relative group overflow-hidden">
                        <div class="absolute -right-10 -top-10 w-32 h-32 bg-emerald-500/20 rounded-full blur-[40px] group-hover:bg-emerald-400/40 transition-colors duration-500"></div>
                        <h4 class="text-white font-bold text-base sm:text-lg md:text-2xl mb-2 md:mb-4 relative z-10 group-hover:text-emerald-300 transition-colors drop-shadow-sm">
                            High Efficiency Electric Drive
                        </h4>
                        <p class="text-gray-400 text-xs sm:text-sm md:text-base lg:text-lg relative z-10 leading-relaxed group-hover:text-gray-300 transition-colors">
                            Class-leading PHEV with high-efficiency drive and continuous variable voltage performance.
                        </p>
                    </div>

                </div>
            </section>
            
        </div> <!-- End of Sticky Wrapper -->

            <!-- ==========================================
             SECTION 11: GEELY APP REMOTE CONTROL
        =========================================== -->
        <section id="app-remote" class="py-16 md:py-24 lg:py-32 relative z-30 bg-[#050505] border-t border-white/5">
            <div class="absolute top-0 right-0 w-[500px] h-[500px] bg-cyan-600/10 rounded-full blur-[150px] pointer-events-none z-0"></div>
            <div class="absolute bottom-0 left-0 w-[400px] h-[400px] bg-emerald-600/10 rounded-full blur-[120px] pointer-events-none z-0"></div>

            <div class="max-w-[1600px] w-full mx-auto px-0 sm:px-8 md:px-12 lg:px-16 relative z-10">
                
                <!-- Section Header -->
                <div class="text-center mb-12 md:mb-20 max-w-4xl mx-auto px-4">
                    <h3 class="text-cyan-400 text-[10px] md:text-sm font-bold tracking-[0.3em] uppercase mb-4 reveal-up">
                        Effortless Convenience
                    </h3>
                    <h2 class="font-geely text-3xl sm:text-4xl md:text-5xl lg:text-7xl uppercase tracking-tighter text-white mb-6 reveal-up delay-100 leading-tight">
                        Geely App <span class="text-gradient-cyan">Remote Control</span>
                    </h2>
                    <p class="text-gray-400 text-xs sm:text-sm md:text-base lg:text-lg font-light leading-relaxed reveal-up delay-200">
                        Geely App Remote Control puts effortless convenience in your hands. Drive with confidence knowing you’re always connected.
                    </p>
                </div>

                <!-- Slideshow on Mobile, Bento Grid on Desktop -->
                <div class="flex overflow-x-auto overscroll-x-contain hide-scrollbar snap-x snap-mandatory gap-6 md:grid md:grid-cols-3 lg:gap-8 pb-8 md:pb-0 px-4 md:px-0">
                    
                    <!-- Feature 1: Always Charged -->
                    <div class="flex-shrink-0 w-[85vw] snap-center md:w-auto glass-panel rounded-[1.5rem] md:rounded-[2rem] flex flex-col reveal-up delay-100 group shadow-[0_30px_60px_rgba(0,0,0,0.5)]">
                        <div class="relative w-full aspect-[4/3] overflow-hidden">
                            <img src="https://assets.zyrosite.com/Yle46KEPN6IkVONg/always-carghed.jpg-sPvzxctIegkiPhzC.webp" alt="Always Charged" draggable="false" loading="lazy" class="absolute inset-0 w-full h-full object-cover transform md:group-hover:scale-105 transition-transform duration-700 select-none pointer-events-none">
                        </div>
                        <div class="p-6 md:p-8">
                            <h4 class="text-white font-geely text-xl md:text-2xl mb-3 group-hover:text-cyan-400 transition-colors">Always Charged</h4>
                            <p class="text-gray-400 text-xs sm:text-sm leading-relaxed">
                                Schedule and monitor charging remotely to ensure your car is powered up when you need it. More convenience, more efficiency, all at your fingertips.
                            </p>
                        </div>
                    </div>

                    <!-- Feature 2: Never Lost -->
                    <div class="flex-shrink-0 w-[85vw] snap-center md:w-auto glass-panel rounded-[1.5rem] md:rounded-[2rem] flex flex-col reveal-up delay-200 group shadow-[0_30px_60px_rgba(0,0,0,0.5)]">
                        <div class="relative w-full aspect-[4/3] overflow-hidden">
                            <img src="https://assets.zyrosite.com/Yle46KEPN6IkVONg/never-lost.jpg-9JUUSHg9iMEbQsEN.webp" alt="Never Lost" draggable="false" loading="lazy" class="absolute inset-0 w-full h-full object-cover transform md:group-hover:scale-105 transition-transform duration-700 select-none pointer-events-none">
                        </div>
                        <div class="p-6 md:p-8">
                            <h4 class="text-white font-geely text-xl md:text-2xl mb-3 group-hover:text-cyan-400 transition-colors">Never Lost</h4>
                            <p class="text-gray-400 text-xs sm:text-sm leading-relaxed">
                                Precision map positioning with a one-tap “Find my Car” feature. No more lost cars, park with confidence, locate with ease.
                            </p>
                        </div>
                    </div>

                    <!-- Feature 3: Full Control -->
                    <div class="flex-shrink-0 w-[85vw] snap-center md:w-auto glass-panel rounded-[1.5rem] md:rounded-[2rem] flex flex-col reveal-up delay-300 group shadow-[0_30px_60px_rgba(0,0,0,0.5)]">
                        <div class="relative w-full aspect-[4/3] overflow-hidden">
                            <img src="https://assets.zyrosite.com/Yle46KEPN6IkVONg/full-control.jpg-ycOYdP2jZuNB3u9w.webp" alt="Full Control" draggable="false" loading="lazy" class="absolute inset-0 w-full h-full object-cover transform md:group-hover:scale-105 transition-transform duration-700 select-none pointer-events-none">
                        </div>
                        <div class="p-6 md:p-8">
                            <h4 class="text-white font-geely text-xl md:text-2xl mb-3 group-hover:text-cyan-400 transition-colors">Full Control</h4>
                            <p class="text-gray-400 text-xs sm:text-sm leading-relaxed">
                                Pre-cool or warm up your car for ultimate comfort. Remotely unlock the doors for family. Check and control windows, doors, and vehicle status anytime.
                            </p>
                        </div>
                    </div>

                </div>

                <!-- Swipe indicator for mobile -->
                <div class="text-center mt-2 flex md:hidden justify-center items-center gap-2 text-cyan-400 text-[9px] font-bold uppercase tracking-widest animate-pulse">
                    <svg class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path></svg>
                    Swipe to explore
                </div>

            </div>
        </section>

    <!-- ==========================================
         ADVANCED INTERSECTION OBSERVER SCRIPT
    =========================================== -->
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const observerOptions = {
                root: null,
                rootMargin: '0px',
                threshold: 0.15
            };

            const revealObserver = new IntersectionObserver((entries, observer) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.classList.add('is-revealed');
                        // Unobserve after revealing to keep the performance high
                        observer.unobserve(entry.target);
                    }
                });
            }, observerOptions);

            const revealElements = document.querySelectorAll('.reveal-up, .reveal-left, .reveal-right, .reveal-scale');
            revealElements.forEach(el => revealObserver.observe(el));
        });
    </script>

    <!-- ==========================================
         ADVANCED SEO JSON-LD SCHEMA MARKUP
         (Menjadikan website ini sebagai entitas Dealer fisik di mata Google)
    =========================================== -->
    <script type="application/ld+json">
    {
      "@@context": "https://schema.org",
      "@@graph": [
        {
          "@@type": "AutoDealer",
          "name": "Dealer Resmi Geely BSD City",
          "image": "https://assets.zyrosite.com/Yle46KEPN6IkVONg/azs02470-VCvpUDL4Xo3Qi0iF.JPG",
          "@@id": "https://geelybsd.id",
          "url": "https://geelybsd.id",
          "telephone": "+628111234567", 
          "description": "Dealer mobil listrik resmi Geely BSD Tangerang. Melayani test drive, pembelian tunai/kredit, dan servis resmi Geely EX5, EX2, dan Starray EM-i.",
          "address": {
            "@@type": "PostalAddress",
            "streetAddress": "BSD City",
            "addressLocality": "Tangerang Selatan",
            "addressRegion": "Banten",
            "postalCode": "15322",
            "addressCountry": "ID"
          },
          "geo": {
            "@@type": "GeoCoordinates",
            "latitude": -6.3023, 
            "longitude": 106.6521
          },
          "openingHoursSpecification": {
            "@@type": "OpeningHoursSpecification",
            "dayOfWeek": ["Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday", "Sunday"],
            "opens": "08:30",
            "closes": "17:30"
          },
          "priceRange": "$$$"
        },
        {
          "@@type": "ItemList",
          "itemListElement": [
            {
              "@@type": "ListItem",
              "position": 1,
              "name": "Geely EX5",
              "url": "https://geelybsd.id/models/ex5"
            },
            {
              "@@type": "ListItem",
              "position": 2,
              "name": "Geely EX2",
              "url": "https://geelybsd.id/models/ex2"
            },
            {
              "@@type": "ListItem",
              "position": 3,
              "name": "Starray EM-i",
              "url": "https://geelybsd.id/models/starray-em-i"
            }
          ]
        }
      ]
    }
    </script>
</x-layouts.app>