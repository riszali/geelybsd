<x-layouts.app>
    <!-- ==========================================
         ADVANCED SEO META TAGS FOR GEELY EX2
    =========================================== -->
    @push('head')
        <title>Harga & Spesifikasi Geely EX2 2024 BSD | Crossover Listrik Modern</title>
        <meta name="description" content="Temukan Geely EX2, crossover listrik stylish dengan jarak tempuh 395km. Harga promo mulai Rp 229 Juta hanya di Dealer Resmi Geely BSD Tangerang. Cek spesifikasi lengkap di sini!">
        <meta name="keywords" content="Geely EX2, Harga Geely EX2, Mobil Listrik Murah BSD, Crossover EV Tangerang, Geely BSD City, Promo Mobil Geely 2024, Spesifikasi Geely EX2 Indonesia">
        <link rel="canonical" href="https://geelybsd.id/models/ex2">
        
        <!-- Open Graph / Facebook -->
        <meta property="og:type" content="product">
        <meta property="og:url" content="https://geelybsd.id/models/ex2">
        <meta property="og:title" content="Geely EX2: Crossover Listrik Cerdas Harga Mulai 229 Juta | Geely BSD">
        <meta property="og:description" content="Bawa pulang Geely EX2 dengan fitur ADAS lengkap dan desain pemenang award. Kunjungi showroom Geely BSD hari ini.">
        <meta property="og:image" content="https://assets.zyrosite.com/Yle46KEPN6IkVONg/banner_ex2b-Rcl937dqFR7EP4xN.jpg">

        <!-- Twitter -->
        <meta property="twitter:card" content="summary_large_image">
        <meta property="twitter:title" content="Harga Geely EX2 2024 - Dealer Resmi Tangerang">
        <meta property="twitter:image" content="https://assets.zyrosite.com/Yle46KEPN6IkVONg/banner_ex2b-Rcl937dqFR7EP4xN.jpg">
    @endpush
    <!-- ==========================================
         ULTRA-PREMIUM GLOBAL STYLES
    =========================================== -->
    <style>
        /* Base Resets & Smooth Scrolling */
        html, body { 
            scroll-behavior: smooth; 
            overflow-x: hidden; /* MENGUNCI LAYAR AGAR TIDAK GESER KANAN-KIRI */
            max-width: 100vw;
            width: 100%;
            position: relative;
        }
        
        /* Advanced Cinematic Noise */
        .bg-noise::before {
            content: "";
            position: absolute;
            inset: 0;
            background-image: url("data:image/svg+xml,%3Csvg viewBox='0 0 200 200' xmlns='http://www.w3.org/2000/svg'%3E%3Cfilter id='noiseFilter'%3E%3CfeTurbulence type='fractalNoise' baseFrequency='0.8' numOctaves='3' stitchTiles='stitch'/%3E%3C/filter%3E%3Crect width='100%25' height='100%25' filter='url(%23noiseFilter)' opacity='0.04'/%3E%3C/svg%3E");
            pointer-events: none;
            z-index: 1;
            mix-blend-mode: overlay;
        }

        /* Next-Gen Spatial Glassmorphism */
        .glass-panel {
            background: rgba(25, 25, 30, 0.4);
            backdrop-filter: blur(32px);
            -webkit-backdrop-filter: blur(32px);
            border: 1px solid rgba(255, 255, 255, 0.05);
            border-top: 1px solid rgba(255, 255, 255, 0.15);
            box-shadow: 0 30px 60px rgba(0, 0, 0, 0.4), inset 0 1px 0 rgba(255, 255, 255, 0.1);
        }

        /* Continuous Button Shimmer Effect */
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

        /* Float Animations for UI Elements */
        .animate-float-slow { animation: float 6s ease-in-out infinite; }
        .animate-float-fast { animation: float 4s ease-in-out infinite reverse; }
        @keyframes float {
            0% { transform: translateY(0px); }
            50% { transform: translateY(-15px); }
            100% { transform: translateY(0px); }
        }

        /* Ultra-Smooth Scroll Reveals */
        .reveal-up { opacity: 0; transform: translateY(60px) scale(0.98); transition: all 1.2s cubic-bezier(0.22, 1, 0.36, 1); }
        .reveal-left { opacity: 0; transform: translateX(-60px); transition: all 1.2s cubic-bezier(0.22, 1, 0.36, 1); }
        .reveal-right { opacity: 0; transform: translateX(60px); transition: all 1.2s cubic-bezier(0.22, 1, 0.36, 1); }
        .is-revealed { opacity: 1 !important; transform: translate(0) scale(1) !important; }

        /* Delays */
        .delay-100 { transition-delay: 100ms; }
        .delay-200 { transition-delay: 200ms; }
        .delay-300 { transition-delay: 300ms; }
        .delay-400 { transition-delay: 400ms; }
        .delay-500 { transition-delay: 500ms; }

        /* Liquid Text Gradient */
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
        
        /* Gradient Text for Sections */
        .text-gradient-cyan {
            background: linear-gradient(to right, #22d3ee, #3b82f6);
            -webkit-background-clip: text;
            background-clip: text;
            -webkit-text-fill-color: transparent;
        }

        /* Custom Scrollbar for Slideshow */
        .no-scrollbar::-webkit-scrollbar { display: none; }
        .no-scrollbar { -ms-overflow-style: none; scrollbar-width: none; }
        
        /* Smooth Snapping for Mobile Sliders */
        .snap-x-mandatory {
            scroll-snap-type: x mandatory;
            -webkit-overflow-scrolling: touch;
        }

        /* Dedicated Vignette Overlay */
        .vignette-overlay {
            background: radial-gradient(circle at center, transparent 15%, #050505 100%);
            box-shadow: inset 0 0 200px 100px #050505;
        }

        /* STARFIELD BACKGROUND STYLES */
        .starfield-container {
            background: radial-gradient(ellipse at bottom, #1B2735 0%, #050505 100%);
            overflow: hidden;
            position: relative;
        }

        #stars, #stars2, #stars3 {
            width: 1px;
            height: 1px;
            background: transparent;
            position: absolute;
            top: 0;
            left: 0;
        }

        #stars { box-shadow: 440px 1195px #FFF , 376px 1569px #FFF , 1802px 55px #FFF , 35px 1289px #FFF , 1139px 388px #FFF , 1969px 703px #FFF , 500px 200px #FFF, 1200px 800px #FFF, 1500px 300px #FFF, 200px 1400px #FFF, 800px 1800px #FFF, 100px 100px #FFF, 1700px 1200px #FFF; animation: animStar 50s linear infinite; }
        #stars:after { content: " "; position: absolute; top: 2000px; width: 1px; height: 1px; background: transparent; box-shadow: inherit; }
        #stars2 { width: 2px; height: 2px; box-shadow: 240px 195px #FFF , 1376px 569px #FFF , 802px 55px #FFF , 1035px 1289px #FFF , 139px 388px #FFF, 969px 703px #FFF, 400px 1100px #FFF, 1600px 500px #FFF; animation: animStar 100s linear infinite; }
        #stars2:after { content: " "; position: absolute; top: 2000px; width: 2px; height: 2px; background: transparent; box-shadow: inherit; }
        #stars3 { width: 3px; height: 3px; box-shadow: 1440px 195px #FFF , 76px 1569px #FFF , 1002px 1055px #FFF , 350px 289px #FFF , 1139px 1388px #FFF; animation: animStar 150s linear infinite; }
        #stars3:after { content: " "; position: absolute; top: 2000px; width: 3px; height: 3px; background: transparent; box-shadow: inherit; }

        @keyframes animStar {
            from { transform: translateY(0px); }
            to { transform: translateY(-2000px); }
        }
    </style>

    <!-- WRAPPER UTAMA UNTUK MENCEGAH SCROLL HORIZONTAL -->
    <div class="w-full overflow-hidden">

        <!-- ==========================================
             SECTION 1: HERO REVEAL & PRICING
        =========================================== -->
        <section class="relative h-[100svh] w-full flex items-center justify-center overflow-hidden bg-[#050505]">
            <!-- Hero Background Video -->
            <div class="absolute inset-0 z-0 bg-noise">
                <video autoplay muted loop playsinline class="w-full h-full object-cover transform scale-105 brightness-75">
                    <source src="https://assets.zyrosite.com/Yle46KEPN6IkVONg/geely-ex2-more-space-than-you-think---geely-auto-indonesia-720p-h264-vEUDO2JgiwOk2CFi.mp4" type="video/mp4">
                </video>
                <div class="absolute inset-0 bg-[radial-gradient(circle_at_center,transparent_0%,rgba(0,0,0,0.8)_100%)]"></div>
                <div class="absolute inset-x-0 bottom-0 h-3/4 bg-gradient-to-t from-[#050505] via-[#050505]/80 to-transparent"></div>
            </div>

            <div class="relative z-20 w-full max-w-7xl mx-auto px-4 md:px-6 text-center mt-10 md:mt-16">
                <div class="inline-flex items-center gap-3 mb-4 px-4 py-2 rounded-full border border-white/10 bg-white/5 backdrop-blur-md reveal-up">
                    <span class="relative flex h-2 w-2">
                        <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-cyan-400 opacity-75"></span>
                        <span class="relative inline-flex rounded-full h-2 w-2 bg-cyan-500"></span>
                    </span>
                    <span class="text-cyan-400 text-[9px] tracking-[0.4em] font-medium uppercase">Geely EX2</span>
                </div>

                <h1 class="font-geely text-[60px] sm:text-7xl md:text-8xl lg:text-[120px] text-white uppercase leading-[0.8] tracking-tighter drop-shadow-2xl mb-8 reveal-up delay-100">
                    <span class="text-liquid">EX2</span>
                </h1>
                
                <div class="flex flex-col sm:flex-row items-center justify-center gap-4 md:gap-8 mb-6 reveal-up delay-200">
                    <div class="glass-panel px-6 py-4 md:px-8 md:py-5 rounded-3xl border border-white/20 backdrop-blur-md w-full max-w-[280px] sm:min-w-[240px]">
                        <span class="text-gray-400 text-[10px] font-bold tracking-[0.3em] uppercase block mb-1 md:mb-2">PRO</span>
                        <span class="font-geely text-xl md:text-1xl text-white tracking-tight">Rp 229.900.000</span>
                    </div>
                    
                    <div class="glass-panel px-6 py-4 md:px-8 md:py-5 rounded-3xl border border-cyan-500/40 bg-cyan-500/10 backdrop-blur-md w-full max-w-[280px] sm:min-w-[240px] relative overflow-hidden shadow-[0_0_30px_rgba(34,211,238,0.15)]">
                        <div class="absolute inset-0 bg-gradient-to-r from-transparent via-white/10 to-transparent -translate-x-full animate-[shimmer_3s_infinite]"></div>
                        <span class="text-cyan-300 text-[10px] font-bold tracking-[0.3em] uppercase block mb-1 md:mb-2">MAX</span>
                        <span class="font-geely text-xl md:text-1xl text-white tracking-tight">Rp 259.900.000</span>
                    </div>
                </div>

                <p class="text-gray-400 text-[9px] md:text-[11px] font-light tracking-[0.2em] uppercase mb-10 reveal-up delay-300 max-w-2xl mx-auto leading-relaxed">
                    *OTR Jakarta and For SPK until 15 February 2026<br class="hidden sm:block"> or 2000 First SPK Customers
                </p>

                <div class="flex flex-col sm:flex-row items-center justify-center gap-6 reveal-up delay-400">
                    <a href="#award" class="btn-shimmer flex items-center justify-center gap-3 bg-white text-black px-10 py-4 md:px-12 md:py-5 rounded-full font-bold text-[10px] md:text-[11px] tracking-[0.2em] uppercase transition-transform duration-500 hover:scale-105 hover:shadow-[0_0_50px_rgba(255,255,255,0.4)]">
                        <span>Explore Design</span>
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 14l-7 7m0 0l-7-7m7 7V3"></path></svg>
                    </a>
                </div>
            </div>
        </section>

        <!-- ==========================================
             SECTION 2: EUROPEAN PRODUCT DESIGN AWARD
        =========================================== -->
        <section id="award" class="relative py-20 md:py-24 lg:py-40 bg-[#050505] overflow-hidden">
            <div class="absolute inset-0 z-0 opacity-40">
                <img src="https://assets.zyrosite.com/Yle46KEPN6IkVONg/banner_ex2b-Rcl937dqFR7EP4xN.jpg" alt="EX2 Design Background" class="w-full h-full object-cover">
                <div class="absolute inset-0 bg-gradient-to-r from-[#050505] via-transparent to-[#050505]"></div>
                <div class="absolute inset-0 bg-gradient-to-b from-[#050505] via-transparent to-[#050505]"></div>
            </div>

            <div class="max-w-7xl mx-auto px-6 relative z-10">
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 lg:gap-16 items-center">
                    <!-- Content Side -->
                    <div class="reveal-left">
                        <div class="inline-flex items-center gap-2 mb-6 px-4 py-2 rounded-full border border-cyan-500/20 bg-cyan-500/5 text-cyan-400">
                            <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
                            <span class="text-[10px] font-bold tracking-[0.3em] uppercase">Global Recognition</span>
                        </div>

                        <h2 class="font-geely text-4xl md:text-5xl lg:text-6xl text-white uppercase tracking-tighter leading-tight mb-6 md:mb-8">
                            AWARD-WINNING <br> <span class="text-liquid">EXCELLENCE</span>
                        </h2>

                        <p class="text-gray-400 text-sm md:text-base font-light leading-relaxed mb-8 md:mb-10 max-w-lg">
                            Geely EX2 has been honored with the prestigious <strong>European Product Design Award</strong>. This accolade recognizes our commitment to harmonizing futuristic aesthetics with human-centric functionality.
                        </p>

                        <div class="flex flex-wrap gap-6 md:gap-8 items-center opacity-80">
                            <div class="flex flex-col">
                                <span class="text-white font-geely text-2xl md:text-3xl mb-1">EUROPE</span>
                                <span class="text-gray-500 text-[9px] font-bold tracking-[0.2em] uppercase">Design Standards</span>
                            </div>
                            <div class="w-[1px] h-8 md:h-10 bg-white/10"></div>
                            <div class="flex flex-col">
                                <span class="text-white font-geely text-2xl md:text-3xl mb-1">PREMIUM</span>
                                <span class="text-gray-500 text-[9px] font-bold tracking-[0.2em] uppercase">Material Finish</span>
                            </div>
                        </div>
                    </div>

                    <!-- Award Badge Side -->
                    <div class="relative reveal-right delay-200 mt-6 lg:mt-0">
                        <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-48 h-48 md:w-64 md:h-64 bg-cyan-500/20 rounded-full blur-[80px] animate-pulse"></div>
                        
                        <div class="glass-panel p-3 md:p-4 rounded-[32px] md:rounded-[40px] relative z-10 overflow-hidden group max-w-sm mx-auto">
                            <div class="absolute inset-0 bg-gradient-to-br from-white/10 to-transparent opacity-50"></div>
                            <img src="https://assets.zyrosite.com/Yle46KEPN6IkVONg/screenshot-2026-02-24-201054-hyZg0pSUXLAu1Xx3.png" alt="European Product Design Award" class="w-full h-auto rounded-[24px] md:rounded-[32px] transition-transform duration-700 group-hover:scale-105">
                            
                            <div class="absolute bottom-4 right-4 md:bottom-6 md:right-6 px-3 py-1.5 md:px-4 md:py-2 bg-white/10 backdrop-blur-md rounded-full border border-white/20">
                                <span class="text-white text-[8px] md:text-[9px] font-bold tracking-widest uppercase">Winner 2024</span>
                            </div>
                        </div>

                        <div class="mt-6 md:mt-8 text-center">
                            <p class="text-gray-500 text-[9px] md:text-[10px] tracking-[0.4em] uppercase font-light">Evolving the Future of Mobility</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- ==========================================
             SECTION 3: THE JOYFUL & SMART DRIVING
        =========================================== -->
        <section id="specs" class="py-16 md:py-24 lg:py-32 bg-[#050505] relative z-30 overflow-hidden">
            <div class="absolute top-1/4 left-1/4 -translate-x-1/2 -translate-y-1/2 w-[600px] md:w-[800px] h-[300px] md:h-[400px] bg-cyan-600/10 rounded-full blur-[150px] pointer-events-none z-0"></div>
            <div class="absolute bottom-1/4 right-1/4 translate-x-1/4 translate-y-1/4 w-[500px] h-[500px] bg-cyan-600/10 rounded-full blur-[150px] pointer-events-none z-0"></div>

            <div class="max-w-[1600px] mx-auto px-4 sm:px-6 relative z-10 text-center">
                
                <h2 class="font-geely text-2xl sm:text-3xl md:text-4xl lg:text-5xl xl:text-6xl uppercase tracking-tighter mb-6 md:mb-8 reveal-up leading-tight drop-shadow-md whitespace-nowrap text-liquid">
                    THE JOYFUL AND SMART DRIVING
                </h2>

                <!-- Controls (Tabs & Swatches) Diposisikan Di Atas Viewer -->
                <div class="flex flex-col items-center justify-center gap-4 reveal-up delay-100 relative z-30 mb-8 md:mb-10">
                    <div class="inline-flex glass-panel p-1.5 rounded-full border border-white/10 shadow-[0_4px_15px_rgba(0,0,0,0.5)]">
                        <button id="btn-tab-exterior" class="px-6 py-2.5 md:px-8 md:py-3 rounded-full text-white text-[9px] md:text-[11px] font-bold tracking-[0.2em] uppercase bg-white/10 shadow-[0_0_20px_rgba(255,255,255,0.05)] transition-all">Exterior</button>
                        <button id="btn-tab-interior" class="px-6 py-2.5 md:px-8 md:py-3 rounded-full text-gray-500 hover:text-white text-[9px] md:text-[11px] font-bold tracking-[0.2em] uppercase transition-all">Interior</button>
                    </div>

                    <div class="h-6">
                        <p id="active-color-name" class="text-[10px] md:text-xs font-bold tracking-[0.3em] uppercase transition-all duration-300 drop-shadow-sm" style="color: #cbd5e1;">Pearl White</p>
                    </div>

                    <div id="swatches-exterior" class="flex flex-wrap justify-center gap-3 md:gap-6 transition-all duration-500 opacity-100 px-4">
                        <button class="swatch-ext active w-10 h-10 md:w-12 md:h-12 rounded-full border border-white ring-2 ring-transparent ring-offset-4 ring-offset-[#050505] transition-all" style="background-color: #f8f9fa;" data-src="https://riszali.sirv.com/Spins/ex2/White.spin" data-name="Pearl White" data-text-color="#cbd5e1" data-bg-color="#e2e8f0"></button>
                        <button class="swatch-ext w-10 h-10 md:w-12 md:h-12 rounded-full border border-white/20 hover:border-white/60 transition-all" style="background-color: #ffd1dc;" data-src="https://riszali.sirv.com/Spins/ex2/IceBerryPink.spin" data-name="Ice Berry Pink" data-text-color="#f472b6" data-bg-color="#fbcfe8"></button>
                        <button class="swatch-ext w-10 h-10 md:w-12 md:h-12 rounded-full border border-white/20 hover:border-white/60 transition-all" style="background-color: #e3dac9;" data-src="https://riszali.sirv.com/Spins/ex2/NebullaBeigi.spin" data-name="Nebulla Beige" data-text-color="#fcd34d" data-bg-color="#fef08a"></button>
                        <button class="swatch-ext w-10 h-10 md:w-12 md:h-12 rounded-full border border-white/20 hover:border-white/60 transition-all" style="background-color: #9cd1e8;" data-src="https://riszali.sirv.com/Spins/ex2/SeaSaltBlue%20().spin" data-name="Sea Salt Blue" data-text-color="#38bdf8" data-bg-color="#bae6fd"></button>
                        <button class="swatch-ext w-10 h-10 md:w-12 md:h-12 rounded-full border border-white/20 hover:border-white/60 transition-all" style="background-color: #7b8084;" data-src="https://riszali.sirv.com/Spins/ex2/Comet%20grey%20().spin" data-name="Comet Grey" data-text-color="#94a3b8" data-bg-color="#94a3b8"></button>
                        <button class="swatch-ext w-10 h-10 md:w-12 md:h-12 rounded-full border border-white/20 hover:border-white/60 transition-all" style="background-color: #c0c0c0;" data-src="https://riszali.sirv.com/Spins/ex2/Starsilver.spin" data-name="Star Silver" data-text-color="#cbd5e1" data-bg-color="#cbd5e1"></button>
                    </div>

                    <div id="swatches-interior" class="hidden flex-wrap justify-center gap-4 md:gap-6 transition-all duration-500 opacity-0 pointer-events-none px-4">
                        <button class="swatch-int active w-10 h-10 md:w-12 md:h-12 rounded-full border border-white ring-2 ring-transparent ring-offset-4 ring-offset-[#050505] transition-all" style="background-color: #e5e5e5;" data-src="https://assets.zyrosite.com/Yle46KEPN6IkVONg/skyline-white-YQe9py6QFEDr79dt.webp" data-name="Skyline White" data-text-color="#cbd5e1"></button>
                        <button class="swatch-int w-10 h-10 md:w-12 md:h-12 rounded-full border border-white/20 hover:border-white/60 transition-all" style="background-color: #3b3b3b;" data-src="https://assets.zyrosite.com/Yle46KEPN6IkVONg/horizon-gray-7NhbdLeYf8TcgE58.webp" data-name="Horizon Gray" data-text-color="#94a3b8"></button>
                    </div>
                </div>

                <!-- Viewer Display Container -->
                <div class="glass-panel p-2 md:p-4 rounded-[2rem] md:rounded-[2.5rem] overflow-hidden reveal-up delay-200 shadow-[0_30px_60px_rgba(0,0,0,0.8)] w-full relative z-10 mb-10 lg:mb-16 aspect-video">
                    <div class="absolute inset-0 rounded-[2rem] bg-gradient-to-b from-white/5 to-transparent pointer-events-none z-20"></div>
                    <div class="relative w-full h-full rounded-[1.5rem] md:rounded-[2rem] overflow-hidden">
                        
                        <!-- NEW: Dynamic Background Container for 360 Exterior -->
                        <div id="360-bg-container" class="absolute inset-0 transition-colors duration-700" style="background-color: #e2e8f0;">
                            <!-- Radial gradient for that studio spotlight effect -->
                            <div class="absolute inset-0 bg-[radial-gradient(circle_at_center,rgba(255,255,255,0.9)_0%,transparent_100%)]"></div>
                        </div>
                        
                        <div id="wrapper-exterior" class="absolute z-10 transition-opacity duration-500" style="top: -20%; left: -20%; width: 140%; height: 140%; opacity: 1; pointer-events: auto;">
                            <iframe id="iframe-exterior" src="https://riszali.sirv.com/Spins/ex2/White.spin" class="w-full h-full border-0" allowfullscreen></iframe>
                        </div>
                        <div id="wrapper-interior" class="absolute inset-0 w-full h-full transition-opacity duration-500 z-0" style="opacity: 0; pointer-events: none;">
                            <iframe id="iframe-interior" src="https://cdn.pannellum.org/2.5/pannellum.htm#panorama=https://assets.zyrosite.com/Yle46KEPN6IkVONg/skyline-white-YQe9py6QFEDr79dt.webp&autoLoad=true&autoRotate=-2" class="w-full h-full border-0" allowfullscreen></iframe>
                        </div>
                    </div>
                </div>

                <!-- Box Spesifikasi (Bertumpuk / Overlapping dengan Viewer) -->
                <div class="grid grid-cols-3 gap-2 sm:gap-4 md:gap-8 reveal-up delay-300 -mt-20 sm:-mt-24 md:-mt-32 lg:-mt-40 px-2 sm:px-6 md:px-10 lg:px-20 relative z-30 mb-8">
                    <!-- Glowing orb directly behind specs for extreme glass blur -->
                    <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-[80%] h-[120%] bg-gradient-to-r from-cyan-500/20 via-blue-500/20 to-cyan-500/20 blur-[60px] rounded-[100px] pointer-events-none z-0"></div>

                    <!-- Box 1 (Range) -->
                    <div class="glass-panel relative z-10 p-4 sm:p-6 md:p-8 lg:p-10 rounded-[20px] sm:rounded-[24px] md:rounded-[32px] group hover:border-cyan-400/50 transition-colors duration-500 flex flex-col justify-center items-center shadow-2xl">
                        <p class="text-gray-300 text-[6px] sm:text-[9px] md:text-[10px] font-bold tracking-[0.1em] sm:tracking-[0.2em] uppercase mb-1 sm:mb-3 group-hover:text-cyan-300 transition-colors duration-300 drop-shadow-sm text-center">Range up to</p>
                        <h3 class="font-geely flex items-baseline justify-center text-2xl sm:text-4xl md:text-5xl lg:text-7xl text-white uppercase mb-1 sm:mb-3 group-hover:scale-105 transition-transform duration-500 drop-shadow-[0_10px_20px_rgba(0,0,0,0.5)]">
                            <span class="text-cyan-400 leading-none drop-shadow-[0_0_15px_rgba(34,211,238,0.4)]">395</span><span class="text-[8px] sm:text-[14px] md:text-xl text-gray-400 ml-0.5 sm:ml-1.5 leading-none lowercase">km*</span>
                        </h3>
                        <div class="h-[1px] w-6 sm:w-12 bg-white/20 mx-auto mb-1.5 sm:mb-3 group-hover:bg-cyan-400/80 transition-colors duration-300"></div>
                        <p class="text-gray-400 text-[5px] sm:text-[7px] md:text-[8px] lg:text-[10px] font-bold tracking-wider sm:tracking-widest uppercase text-center leading-tight">NEDC Combined</p>
                    </div>

                    <!-- Box 2 (Acceleration) -->
                    <div class="glass-panel relative z-10 p-4 sm:p-6 md:p-8 lg:p-10 rounded-[20px] sm:rounded-[24px] md:rounded-[32px] group hover:border-cyan-400/50 transition-colors duration-500 flex flex-col justify-center items-center shadow-2xl">
                        <p class="text-gray-300 text-[6px] sm:text-[9px] md:text-[10px] font-bold tracking-[0.1em] sm:tracking-[0.2em] uppercase mb-1 sm:mb-3 group-hover:text-cyan-300 transition-colors duration-300 drop-shadow-sm text-center">Acceleration</p>
                        <h3 class="font-geely flex items-baseline justify-center text-2xl sm:text-4xl md:text-5xl lg:text-7xl text-white uppercase mb-1 sm:mb-3 group-hover:scale-105 transition-transform duration-500 drop-shadow-[0_10px_20px_rgba(0,0,0,0.5)]">
                            <span class="text-cyan-400 leading-none drop-shadow-[0_0_15px_rgba(34,211,238,0.4)]">11.5</span><span class="text-[8px] sm:text-[14px] md:text-xl text-gray-400 ml-0.5 sm:ml-1.5 leading-none lowercase">Sec</span>
                        </h3>
                        <div class="h-[1px] w-6 sm:w-12 bg-white/20 mx-auto mb-1.5 sm:mb-3 group-hover:bg-cyan-400/80 transition-colors duration-300"></div>
                        <p class="text-gray-400 text-[5px] sm:text-[7px] md:text-[8px] lg:text-[10px] font-bold tracking-wider sm:tracking-widest uppercase text-center leading-tight">0-100 Km/H</p>
                    </div>

                    <!-- Box 3 (Fast Charging) -->
                    <div class="glass-panel relative z-10 p-4 sm:p-6 md:p-8 lg:p-10 rounded-[20px] sm:rounded-[24px] md:rounded-[32px] group hover:border-cyan-400/50 transition-colors duration-500 flex flex-col justify-center items-center shadow-2xl">
                        <p class="text-gray-300 text-[6px] sm:text-[9px] md:text-[10px] font-bold tracking-[0.1em] sm:tracking-[0.2em] uppercase mb-1 sm:mb-3 group-hover:text-cyan-300 transition-colors duration-300 drop-shadow-sm text-center">*DC Fast Charge</p>
                        <h3 class="font-geely flex items-baseline justify-center text-2xl sm:text-4xl md:text-5xl lg:text-7xl text-white uppercase mb-1 sm:mb-3 group-hover:scale-105 transition-transform duration-500 drop-shadow-[0_10px_20px_rgba(0,0,0,0.5)]">
                            <span class="text-cyan-400 leading-none drop-shadow-[0_0_15px_rgba(34,211,238,0.4)]">25</span><span class="text-[8px] sm:text-[14px] md:text-xl text-gray-400 ml-0.5 sm:ml-1.5 leading-none lowercase">min*</span>
                        </h3>
                        <div class="h-[1px] w-6 sm:w-12 bg-white/20 mx-auto mb-1.5 sm:mb-3 group-hover:bg-cyan-400/80 transition-colors duration-300"></div>
                        <p class="text-gray-400 text-[5px] sm:text-[7px] md:text-[8px] lg:text-[10px] font-bold tracking-wider sm:tracking-widest uppercase text-center leading-tight">30%-80% SOC</p>
                    </div>
                </div>

            </div>
        </section>

        <!-- ==========================================
             SECTION 4: THE SPACE
        =========================================== -->
        <section id="space" class="py-20 md:py-24 lg:py-32 bg-[#050505] relative overflow-hidden">
            <div class="max-w-7xl mx-auto px-6 relative z-10">
                <!-- Header -->
                <div class="text-center mb-12 md:mb-16 lg:mb-24">
                    <h2 class="font-geely text-4xl sm:text-5xl md:text-7xl lg:text-8xl uppercase tracking-tighter text-white mb-4 md:mb-6 reveal-up">
                        THE <span class="text-liquid">SPACE</span>
                    </h2>
                    <p class="text-gray-400 text-[9px] md:text-[10px] lg:text-xs font-light tracking-[0.2em] md:tracking-[0.3em] uppercase reveal-up delay-100 max-w-2xl mx-auto leading-relaxed">
                        Designed for more than storage, they are spacious, versatile, and smart.<br>
                        Turn every drive feels <span class="text-white font-bold">twice as joyful</span>.
                    </p>
                </div>

                <!-- Slideshow Container -->
                <div class="relative reveal-up delay-200">
                    <div id="space-slider" class="flex gap-4 md:gap-6 overflow-x-auto no-scrollbar snap-x-mandatory pb-8 md:pb-10 cursor-grab active:cursor-grabbing">
                        
                        <!-- Card 1 -->
                        <div class="min-w-[85vw] md:min-w-[450px] snap-center">
                            <div class="glass-panel rounded-[32px] md:rounded-[40px] overflow-hidden group h-full border-white/10 hover:border-cyan-500/30 transition-all duration-500">
                                <div class="h-[250px] md:h-[300px] overflow-hidden relative">
                                    <img src="https://assets.zyrosite.com/Yle46KEPN6IkVONg/space-1-m-fTuPc6cnuM2qgK8R.webp" alt="Rear Trunk" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110">
                                    <div class="absolute inset-0 bg-gradient-to-t from-[#050505]/80 via-transparent to-transparent"></div>
                                </div>
                                <div class="p-6 md:p-8 lg:p-10">
                                    <span class="text-cyan-400 text-[8px] md:text-[9px] font-bold tracking-[0.3em] uppercase mb-3 block">Versatility</span>
                                    <h3 class="font-geely text-xl sm:text-2xl md:text-3xl text-white uppercase mb-3 tracking-tight leading-tight">1320L Rear <br>Trunk Capacity</h3>
                                    <p class="text-gray-400 text-[11px] md:text-xs lg:text-sm font-light leading-relaxed">
                                        A treasure cave that turns storing kids' toys into an adventure game, doubling the fun of family time.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <!-- Card 2 -->
                        <div class="min-w-[85vw] md:min-w-[450px] snap-center">
                            <div class="glass-panel rounded-[32px] md:rounded-[40px] overflow-hidden group h-full border-white/10 hover:border-cyan-500/30 transition-all duration-500">
                                <div class="h-[250px] md:h-[300px] overflow-hidden relative">
                                    <img src="https://assets.zyrosite.com/Yle46KEPN6IkVONg/space-2-m-mExBnw2wvEFt7MRV.webp" alt="Front Trunk" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110">
                                    <div class="absolute inset-0 bg-gradient-to-t from-[#050505]/80 via-transparent to-transparent"></div>
                                </div>
                                <div class="p-6 md:p-8 lg:p-10">
                                    <span class="text-cyan-400 text-[8px] md:text-[9px] font-bold tracking-[0.3em] uppercase mb-3 block">Smart Storage</span>
                                    <h3 class="font-geely text-xl sm:text-2xl md:text-3xl text-white uppercase mb-3 tracking-tight leading-tight">70L Large <br>Front Trunk</h3>
                                    <p class="text-gray-400 text-[11px] md:text-xs lg:text-sm font-light leading-relaxed">
                                        A treasure cave that turns storing kids' toys into an adventure game, doubling the fun of family time.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <!-- Card 3 -->
                        <div class="min-w-[85vw] md:min-w-[450px] snap-center">
                            <div class="glass-panel rounded-[32px] md:rounded-[40px] overflow-hidden group h-full border-white/10 hover:border-cyan-500/30 transition-all duration-500">
                                <div class="h-[250px] md:h-[300px] overflow-hidden relative">
                                    <img src="https://assets.zyrosite.com/Yle46KEPN6IkVONg/space-3-m-XpUx5h8pBoRXsP9O.webp" alt="Bridge Storage" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110">
                                    <div class="absolute inset-0 bg-gradient-to-t from-[#050505]/80 via-transparent to-transparent"></div>
                                </div>
                                <div class="p-6 md:p-8 lg:p-10">
                                    <span class="text-cyan-400 text-[8px] md:text-[9px] font-bold tracking-[0.3em] uppercase mb-3 block">Interior Design</span>
                                    <h3 class="font-geely text-xl sm:text-2xl md:text-3xl text-white uppercase mb-3 tracking-tight leading-tight">Bridge Style <br>Storage</h3>
                                    <p class="text-gray-400 text-[11px] md:text-xs lg:text-sm font-light leading-relaxed">
                                        A treasure cave that turns storing kids' toys into an adventure game, doubling the fun of family time.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Navigation Visuals -->
                    <div class="flex items-center justify-center gap-6 mt-4 md:mt-8">
                        <button id="slide-left" class="w-10 h-10 md:w-12 md:h-12 rounded-full border border-white/10 flex items-center justify-center text-white hover:bg-white hover:text-black transition-all">
                            <svg class="w-4 h-4 md:w-5 md:h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path></svg>
                        </button>
                        <div class="flex gap-2" id="slider-dots">
                            <div class="w-6 md:w-8 h-1 bg-cyan-500 rounded-full"></div>
                            <div class="w-2 h-1 bg-white/20 rounded-full"></div>
                            <div class="w-2 h-1 bg-white/20 rounded-full"></div>
                        </div>
                        <button id="slide-right" class="w-10 h-10 md:w-12 md:h-12 rounded-full border border-white/10 flex items-center justify-center text-white hover:bg-white hover:text-black transition-all">
                            <svg class="w-4 h-4 md:w-5 md:h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
                        </button>
                    </div>
                </div>
            </div>
        </section>

        <!-- ==========================================
             SECTION 5: AMBIENT LIGHTING
        =========================================== -->
        <section id="ambient" class="starfield-container py-20 md:py-24 lg:py-40 relative z-10">
            <div id="stars"></div>
            <div id="stars2"></div>
            <div id="stars3"></div>

            <div class="max-w-7xl mx-auto px-6 relative z-20">
                <div class="flex flex-col items-center text-center">
                    <div class="reveal-up mb-10 md:mb-12">
                        <h2 class="font-geely text-4xl sm:text-5xl md:text-6xl lg:text-7xl text-white uppercase tracking-tighter leading-[0.9] mb-4 md:mb-6">
                            URBAN <span class="text-liquid">STARLIGHT</span>
                        </h2>
                        <p class="text-gray-400 text-[9px] md:text-xs font-bold tracking-[0.2em] md:tracking-[0.4em] uppercase max-w-xl mx-auto">
                            The only 256-colour urban starlight ambient lighting in its class.
                        </p>
                    </div>

                    <!-- Hero Image -->
                    <div class="w-full reveal-up delay-200">
                        <div class="glass-panel p-1.5 md:p-4 rounded-[24px] md:rounded-[40px] overflow-hidden shadow-[0_0_80px_rgba(129,140,248,0.15)] group relative">
                            <div class="absolute inset-0 bg-gradient-to-tr from-cyan-500/10 via-transparent to-purple-500/10 opacity-60"></div>
                            <img src="https://assets.zyrosite.com/Yle46KEPN6IkVONg/ambient-lighting-1-YCHFgHZwRQjP7gVB.webp" 
                                 alt="EX2 Ambient Lighting" 
                                 class="w-full h-auto rounded-[18px] md:rounded-[32px] transition-transform duration-[2000ms] group-hover:scale-105">
                            
                            <div class="absolute bottom-6 left-6 md:bottom-12 md:left-12 flex flex-col items-start gap-1 md:gap-2 z-50">
                                <div class="flex -space-x-1.5 mb-1 opacity-100">
                                    <div class="w-3 h-3 md:w-3.5 md:h-3.5 rounded-full bg-cyan-400 shadow-[0_0_15px_rgba(34,211,238,0.8)]"></div>
                                    <div class="w-3 h-3 md:w-3.5 md:h-3.5 rounded-full bg-purple-500 shadow-[0_0_15px_rgba(168,85,247,0.8)]"></div>
                                    <div class="w-3 h-3 md:w-3.5 md:h-3.5 rounded-full bg-orange-400 shadow-[0_0_15px_rgba(251,146,60,0.8)]"></div>
                                </div>
                                <div class="relative">
                                    <span class="absolute inset-0 text-xl md:text-4xl font-geely font-black tracking-tight uppercase text-black/40 blur-[2px] translate-y-[1px]">
                                        256 Colors
                                    </span>
                                    <span class="relative block text-xl md:text-4xl font-geely font-black tracking-tight uppercase bg-gradient-to-r from-cyan-300 via-white to-orange-300 bg-clip-text text-transparent filter drop-shadow-[0_4px_12px_rgba(0,0,0,0.8)]">
                                        256 Colors
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="mt-12 md:mt-16 reveal-up delay-400 max-w-2xl">
                        <p class="text-gray-500 text-xs md:text-sm lg:text-base font-light leading-relaxed italic">
                            "Designed to reflect your mood, the urban starlight system transforms the cabin into a sanctuary of personalized color and light."
                        </p>
                    </div>
                </div>
            </div>
        </section>

        <!-- ==========================================
             SECTION 6: DRIVING PLEASURE (REVISED: SLIDESHOW ON MOBILE)
        =========================================== -->
        <section id="driving" class="py-20 md:py-24 lg:py-32 bg-[#050505] relative overflow-hidden">
            <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-[400px] md:w-[600px] h-[200px] md:h-[300px] bg-cyan-500/10 rounded-full blur-[120px] pointer-events-none z-0"></div>

            <div class="max-w-7xl mx-auto px-0 md:px-6 relative z-10">
                <div class="text-center mb-10 md:mb-16 lg:mb-24 px-6 md:px-0">
                    <h2 class="font-geely text-4xl sm:text-5xl md:text-7xl lg:text-8xl uppercase tracking-tighter text-white mb-4 md:mb-6 reveal-up leading-tight">
                        DOUBLE THE <br><span class="text-liquid">PLEASURE</span>
                    </h2>
                    <p class="text-gray-400 text-xs md:text-sm lg:text-base font-light tracking-wide reveal-up delay-100 max-w-2xl mx-auto leading-relaxed">
                        Agile, confident, and effortlessly fun. GEELY EX2 delivers twice the smoothness and pleasure.
                    </p>
                </div>

                <!-- 
                   Diubah menjadi flex horizontal scroll di mobile (bisa diswipe), 
                   tapi kembali menjadi Grid 3 kolom yang rapi saat di layar PC/Tablet (md:). 
                -->
                <div class="flex overflow-x-auto overscroll-x-contain no-scrollbar snap-x-mandatory gap-4 md:grid md:grid-cols-3 md:gap-8 pb-6 md:pb-0 px-4 md:px-0 reveal-up delay-200">
                    
                    <!-- Card 1 -->
                    <div class="flex-shrink-0 w-[85vw] snap-center md:w-auto glass-panel rounded-[24px] md:rounded-[32px] overflow-hidden group border border-white/10 hover:border-cyan-500/40 transition-all duration-500 flex flex-col shadow-xl">
                        <div class="h-[200px] md:h-[250px] lg:h-[300px] overflow-hidden relative">
                            <img src="https://assets.zyrosite.com/Yle46KEPN6IkVONg/gambar-9-driving-pleasure-geely-ex2-mrThxF1DGtduy9Ih.webp" alt="Smart rear drive system" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110">
                            <div class="absolute inset-0 bg-gradient-to-t from-[#050505] via-[#050505]/40 to-transparent"></div>
                        </div>
                        <div class="p-6 md:p-8 flex-grow bg-[#050505]/50 flex flex-col justify-end -mt-10 relative z-10">
                            <h3 class="font-geely text-xl lg:text-2xl text-white uppercase mb-2 md:mb-3 tracking-tight leading-tight">Smart Rear Drive System</h3>
                            <p class="text-gray-400 text-[11px] lg:text-sm font-light leading-relaxed">
                                Delivers balanced power and effortless precision.
                            </p>
                        </div>
                    </div>

                    <!-- Card 2 -->
                    <div class="flex-shrink-0 w-[85vw] snap-center md:w-auto glass-panel rounded-[24px] md:rounded-[32px] overflow-hidden group border border-white/10 hover:border-cyan-500/40 transition-all duration-500 flex flex-col shadow-xl delay-100">
                        <div class="h-[200px] md:h-[250px] lg:h-[300px] overflow-hidden relative">
                            <img src="https://assets.zyrosite.com/Yle46KEPN6IkVONg/gambar-10-driving-pleasure-geely-ex2-MJhRNhH2mxqA4wUU.webp" alt="4.95m turning radius" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110">
                            <div class="absolute inset-0 bg-gradient-to-t from-[#050505] via-[#050505]/40 to-transparent"></div>
                        </div>
                        <div class="p-6 md:p-8 flex-grow bg-[#050505]/50 flex flex-col justify-end -mt-10 relative z-10">
                            <h3 class="font-geely text-xl lg:text-2xl text-white uppercase mb-2 md:mb-3 tracking-tight leading-tight">4.95m Turning Radius</h3>
                            <p class="text-gray-400 text-[11px] lg:text-sm font-light leading-relaxed">
                                Smooth control in narrow alleys or tight parking spots.
                            </p>
                        </div>
                    </div>

                    <!-- Card 3 -->
                    <div class="flex-shrink-0 w-[85vw] snap-center md:w-auto glass-panel rounded-[24px] md:rounded-[32px] overflow-hidden group border border-white/10 hover:border-cyan-500/40 transition-all duration-500 flex flex-col shadow-xl delay-200">
                        <div class="h-[200px] md:h-[250px] lg:h-[300px] overflow-hidden relative">
                            <img src="https://assets.zyrosite.com/Yle46KEPN6IkVONg/gambar-11-driving-pleasure-geely-ex2-revv-L9dvXtn7UMFfh2D3.webp" alt="Dynamic Stability" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110">
                            <div class="absolute inset-0 bg-gradient-to-t from-[#050505] via-[#050505]/40 to-transparent"></div>
                        </div>
                        <div class="p-6 md:p-8 flex-grow bg-[#050505]/50 flex flex-col justify-end -mt-10 relative z-10">
                            <h3 class="font-geely text-xl lg:text-2xl text-white uppercase mb-2 md:mb-3 tracking-tight leading-tight">Dynamic Stability</h3>
                            <p class="text-gray-400 text-[11px] lg:text-sm font-light leading-relaxed">
                                Engineered for maximum stability and a confident driving experience at any speed.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Swipe indicator for mobile -->
                <div class="text-center mt-2 flex md:hidden justify-center items-center gap-2 text-cyan-400 text-[9px] font-bold uppercase tracking-widest animate-pulse reveal-up delay-300">
                    <svg class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path></svg>
                    Swipe to explore
                </div>
            </div>
        </section>

        <!-- ==========================================
             SECTION 7: SAFETY & EASE 
        =========================================== -->
        <section id="safety" class="py-20 md:py-24 bg-[#050505] relative overflow-hidden">
            <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-[400px] md:w-[800px] h-[400px] md:h-[800px] border border-cyan-500/10 rounded-full pointer-events-none z-0"></div>
            <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-[300px] md:w-[500px] h-[300px] md:h-[500px] border border-cyan-500/20 rounded-full pointer-events-none z-0 border-dashed animate-[spin_40s_linear_infinite]"></div>
            <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-[300px] md:w-[600px] h-[300px] md:h-[600px] bg-cyan-600/5 rounded-full blur-[120px] pointer-events-none z-0"></div>

            <div class="w-full relative z-10">
                <div class="text-center mb-10 md:mb-16 px-6 max-w-7xl mx-auto">
                    <div class="inline-flex items-center gap-2 mb-4 md:mb-6 px-4 py-2 rounded-full border border-cyan-500/20 bg-cyan-500/5 text-cyan-400 reveal-up">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path></svg>
                        <span class="text-[9px] md:text-[10px] font-bold tracking-[0.3em] uppercase">Advanced ADAS</span>
                    </div>
                    <h2 class="font-geely text-4xl sm:text-5xl md:text-7xl lg:text-8xl uppercase tracking-tighter text-white mb-4 md:mb-6 reveal-up delay-100 leading-[0.9]">
                        DOUBLE <span class="text-liquid">THE SAFETY</span> <br> AND EASE
                    </h2>
                    <p class="text-gray-400 text-xs md:text-sm lg:text-base font-light tracking-wide reveal-up delay-200 max-w-2xl mx-auto leading-relaxed">
                        Stay protected with intelligent systems that watch, predict, and respond before you do.
                    </p>
                </div>

                <div class="w-full overflow-x-auto no-scrollbar reveal-up delay-300 pb-8 px-4 md:px-0">
                    <div class="flex flex-col gap-3 md:gap-4 w-max lg:mx-auto">
                        
                        <!-- ROW 1 (6 Items) -->
                        <div class="flex flex-nowrap gap-3 md:gap-4 lg:justify-center">
                            
                            <!-- Feature 1 -->
                            <div class="glass-panel w-[120px] md:w-[150px] p-3 md:p-4 rounded-3xl border border-white/10 hover:border-cyan-500/50 hover:bg-cyan-500/10 hover:shadow-[0_10px_30px_rgba(34,211,238,0.15)] transition-all duration-500 group flex flex-col items-center text-center cursor-default shrink-0">
                                <div class="w-10 h-10 md:w-12 md:h-12 rounded-2xl bg-white/5 border border-white/10 flex items-center justify-center mb-2 md:mb-3 group-hover:border-cyan-500/50 group-hover:bg-cyan-500/20 transition-all duration-500 shadow-inner">
                                    <span class="font-geely text-sm md:text-base text-white group-hover:text-cyan-400 transition-colors drop-shadow-lg">ACC</span>
                                </div>
                                <span class="text-white text-[9px] md:text-[10px] font-bold tracking-[0.05em] uppercase leading-tight group-hover:text-cyan-300 transition-colors">Adaptive<br>Cruise Control</span>
                            </div>

                            <!-- Feature 2 -->
                            <div class="glass-panel w-[120px] md:w-[150px] p-3 md:p-4 rounded-3xl border border-white/10 hover:border-cyan-500/50 hover:bg-cyan-500/10 hover:shadow-[0_10px_30px_rgba(34,211,238,0.15)] transition-all duration-500 group flex flex-col items-center text-center cursor-default shrink-0">
                                <div class="w-10 h-10 md:w-12 md:h-12 rounded-2xl bg-white/5 border border-white/10 flex items-center justify-center mb-2 md:mb-3 group-hover:border-cyan-500/50 group-hover:bg-cyan-500/20 transition-all duration-500 shadow-inner">
                                    <span class="font-geely text-sm md:text-base text-white group-hover:text-cyan-400 transition-colors drop-shadow-lg">AEB</span>
                                </div>
                                <span class="text-white text-[9px] md:text-[10px] font-bold tracking-[0.05em] uppercase leading-tight group-hover:text-cyan-300 transition-colors">Auto Emergency<br>Braking</span>
                            </div>

                            <!-- Feature 3 -->
                            <div class="glass-panel w-[120px] md:w-[150px] p-3 md:p-4 rounded-3xl border border-white/10 hover:border-cyan-500/50 hover:bg-cyan-500/10 hover:shadow-[0_10px_30px_rgba(34,211,238,0.15)] transition-all duration-500 group flex flex-col items-center text-center cursor-default shrink-0">
                                <div class="w-10 h-10 md:w-12 md:h-12 rounded-2xl bg-white/5 border border-white/10 flex items-center justify-center mb-2 md:mb-3 group-hover:border-cyan-500/50 group-hover:bg-cyan-500/20 transition-all duration-500 shadow-inner">
                                    <span class="font-geely text-sm md:text-base text-white group-hover:text-cyan-400 transition-colors drop-shadow-lg">LDW</span>
                                </div>
                                <span class="text-white text-[9px] md:text-[10px] font-bold tracking-[0.05em] uppercase leading-tight group-hover:text-cyan-300 transition-colors">Lane Departure<br>Warning</span>
                            </div>

                            <!-- Feature 4 -->
                            <div class="glass-panel w-[120px] md:w-[150px] p-3 md:p-4 rounded-3xl border border-white/10 hover:border-cyan-500/50 hover:bg-cyan-500/10 hover:shadow-[0_10px_30px_rgba(34,211,238,0.15)] transition-all duration-500 group flex flex-col items-center text-center cursor-default shrink-0">
                                <div class="w-10 h-10 md:w-12 md:h-12 rounded-2xl bg-white/5 border border-white/10 flex items-center justify-center mb-2 md:mb-3 group-hover:border-cyan-500/50 group-hover:bg-cyan-500/20 transition-all duration-500 shadow-inner">
                                    <span class="font-geely text-sm md:text-base text-white group-hover:text-cyan-400 transition-colors drop-shadow-lg">FCW</span>
                                </div>
                                <span class="text-white text-[9px] md:text-[10px] font-bold tracking-[0.05em] uppercase leading-tight group-hover:text-cyan-300 transition-colors">Forward Collision<br>Warning</span>
                            </div>

                            <!-- Feature 5 -->
                            <div class="glass-panel w-[120px] md:w-[150px] p-3 md:p-4 rounded-3xl border border-white/10 hover:border-cyan-500/50 hover:bg-cyan-500/10 hover:shadow-[0_10px_30px_rgba(34,211,238,0.15)] transition-all duration-500 group flex flex-col items-center text-center cursor-default shrink-0">
                                <div class="w-10 h-10 md:w-12 md:h-12 rounded-2xl bg-white/5 border border-white/10 flex items-center justify-center mb-2 md:mb-3 group-hover:border-cyan-500/50 group-hover:bg-cyan-500/20 transition-all duration-500 shadow-inner">
                                    <span class="font-geely text-sm md:text-base text-white group-hover:text-cyan-400 transition-colors drop-shadow-lg">LCA</span>
                                </div>
                                <span class="text-white text-[9px] md:text-[10px] font-bold tracking-[0.05em] uppercase leading-tight group-hover:text-cyan-300 transition-colors">Lane Change<br>Assist</span>
                            </div>

                            <!-- Feature 6 -->
                            <div class="glass-panel w-[120px] md:w-[150px] p-3 md:p-4 rounded-3xl border border-white/10 hover:border-cyan-500/50 hover:bg-cyan-500/10 hover:shadow-[0_10px_30px_rgba(34,211,238,0.15)] transition-all duration-500 group flex flex-col items-center text-center cursor-default shrink-0">
                                <div class="w-10 h-10 md:w-12 md:h-12 rounded-2xl bg-white/5 border border-white/10 flex items-center justify-center mb-2 md:mb-3 group-hover:border-cyan-500/50 group-hover:bg-cyan-500/20 transition-all duration-500 shadow-inner">
                                    <span class="font-geely text-sm md:text-base text-white group-hover:text-cyan-400 transition-colors drop-shadow-lg">DOW</span>
                                </div>
                                <span class="text-white text-[9px] md:text-[10px] font-bold tracking-[0.05em] uppercase leading-tight group-hover:text-cyan-300 transition-colors">Door Open<br>Warning</span>
                            </div>

                        </div>

                        <!-- ROW 2 (5 Items) -->
                        <div class="flex flex-nowrap gap-3 md:gap-4 lg:justify-center">
                            
                            <!-- Feature 7 -->
                            <div class="glass-panel w-[120px] md:w-[150px] p-3 md:p-4 rounded-3xl border border-white/10 hover:border-cyan-500/50 hover:bg-cyan-500/10 hover:shadow-[0_10px_30px_rgba(34,211,238,0.15)] transition-all duration-500 group flex flex-col items-center text-center cursor-default shrink-0">
                                <div class="w-10 h-10 md:w-12 md:h-12 rounded-2xl bg-white/5 border border-white/10 flex items-center justify-center mb-2 md:mb-3 group-hover:border-cyan-500/50 group-hover:bg-cyan-500/20 transition-all duration-500 shadow-inner">
                                    <span class="font-geely text-sm md:text-base text-white group-hover:text-cyan-400 transition-colors drop-shadow-lg">ROW</span>
                                </div>
                                <span class="text-white text-[9px] md:text-[10px] font-bold tracking-[0.05em] uppercase leading-tight group-hover:text-cyan-300 transition-colors">Rear Collision<br>Warning</span>
                            </div>

                            <!-- Feature 8 -->
                            <div class="glass-panel w-[120px] md:w-[150px] p-3 md:p-4 rounded-3xl border border-white/10 hover:border-cyan-500/50 hover:bg-cyan-500/10 hover:shadow-[0_10px_30px_rgba(34,211,238,0.15)] transition-all duration-500 group flex flex-col items-center text-center cursor-default shrink-0">
                                <div class="w-10 h-10 md:w-12 md:h-12 rounded-2xl bg-white/5 border border-white/10 flex items-center justify-center mb-2 md:mb-3 group-hover:border-cyan-500/50 group-hover:bg-cyan-500/20 transition-all duration-500 shadow-inner">
                                    <span class="font-geely text-sm md:text-base text-white group-hover:text-cyan-400 transition-colors drop-shadow-lg">IHBC</span>
                                </div>
                                <span class="text-white text-[9px] md:text-[10px] font-bold tracking-[0.05em] uppercase leading-tight group-hover:text-cyan-300 transition-colors">Intelligent High<br>Beam Control</span>
                            </div>

                            <!-- Feature 9 -->
                            <div class="glass-panel w-[120px] md:w-[150px] p-3 md:p-4 rounded-3xl border border-white/10 hover:border-cyan-500/50 hover:bg-cyan-500/10 hover:shadow-[0_10px_30px_rgba(34,211,238,0.15)] transition-all duration-500 group flex flex-col items-center text-center cursor-default shrink-0">
                                <div class="w-10 h-10 md:w-12 md:h-12 rounded-2xl bg-white/5 border border-white/10 flex items-center justify-center mb-2 md:mb-3 group-hover:border-cyan-500/50 group-hover:bg-cyan-500/20 transition-all duration-500 shadow-inner">
                                    <span class="font-geely text-sm md:text-base text-white group-hover:text-cyan-400 transition-colors drop-shadow-lg">RCTA</span>
                                </div>
                                <span class="text-white text-[9px] md:text-[10px] font-bold tracking-[0.05em] uppercase leading-tight group-hover:text-cyan-300 transition-colors">Rear Cross<br>Traffic Alert</span>
                            </div>

                            <!-- Feature 10 -->
                            <div class="glass-panel w-[120px] md:w-[150px] p-3 md:p-4 rounded-3xl border border-white/10 hover:border-cyan-500/50 hover:bg-cyan-500/10 hover:shadow-[0_10px_30px_rgba(34,211,238,0.15)] transition-all duration-500 group flex flex-col items-center text-center cursor-default shrink-0">
                                <div class="w-10 h-10 md:w-12 md:h-12 rounded-2xl bg-white/5 border border-white/10 flex items-center justify-center mb-2 md:mb-3 group-hover:border-cyan-500/50 group-hover:bg-cyan-500/20 transition-all duration-500 shadow-inner">
                                    <span class="font-geely text-sm md:text-base text-white group-hover:text-cyan-400 transition-colors drop-shadow-lg">BSD</span>
                                </div>
                                <span class="text-white text-[9px] md:text-[10px] font-bold tracking-[0.05em] uppercase leading-tight group-hover:text-cyan-300 transition-colors">Blind Spot<br>Detection</span>
                            </div>

                            <!-- Feature 11 -->
                            <div class="glass-panel w-[120px] md:w-[150px] p-3 md:p-4 rounded-3xl border border-white/10 hover:border-cyan-500/50 hover:bg-cyan-500/10 hover:shadow-[0_10px_30px_rgba(34,211,238,0.15)] transition-all duration-500 group flex flex-col items-center text-center cursor-default shrink-0">
                                <div class="w-10 h-10 md:w-12 md:h-12 rounded-2xl bg-white/5 border border-white/10 flex items-center justify-center mb-2 md:mb-3 group-hover:border-cyan-500/50 group-hover:bg-cyan-500/20 transition-all duration-500 shadow-inner">
                                    <span class="font-geely text-sm md:text-base text-white group-hover:text-cyan-400 transition-colors drop-shadow-lg">FVDW</span>
                                </div>
                                <span class="text-white text-[9px] md:text-[10px] font-bold tracking-[0.05em] uppercase leading-tight group-hover:text-cyan-300 transition-colors">Front Vehicle<br>Departure Warning</span>
                            </div>

                        </div>

                    </div>
                </div>
                
            </div>
        </section>

        <!-- ==========================================
             SECTION 8: ADAS VIDEO SHOWCASE (REVISED: SLIDER PADA MOBILE)
        =========================================== -->
        <section id="adas-videos" class="pb-20 md:pb-32 lg:pb-48 bg-[#050505] relative overflow-hidden">
            <div class="max-w-7xl mx-auto px-0 md:px-6 relative z-10">
                
                <!-- Diubah menjadi flex horizontal scroll di mobile, grid 2 kolom di desktop -->
                <div class="flex overflow-x-auto overscroll-x-contain no-scrollbar snap-x-mandatory gap-4 md:grid md:grid-cols-2 md:gap-8 pb-6 md:pb-0 px-4 md:px-0 reveal-up delay-100">
                    
                    <!-- Video Card 1: ACC -->
                    <div class="flex-shrink-0 w-[85vw] snap-center md:w-auto glass-panel p-3 md:p-6 rounded-[24px] md:rounded-[32px] overflow-hidden group border border-white/10 hover:border-cyan-500/40 transition-all duration-500 shadow-xl flex flex-col">
                        <div class="w-full aspect-video relative overflow-hidden bg-black rounded-[16px] md:rounded-[24px] border border-white/5">
                            <video autoplay muted loop playsinline class="w-full h-full object-cover">
                                <source src="https://assets.zyrosite.com/Yle46KEPN6IkVONg/video_features-acc-ex2-AsXAhAeM51UzCbPR.mp4" type="video/mp4">
                            </video>
                            <div class="absolute inset-0 bg-gradient-to-t from-[#050505]/60 via-transparent to-transparent"></div>
                        </div>
                        <div class="pt-4 md:pt-6 flex-grow flex flex-col justify-start">
                            <div class="flex flex-row items-center gap-2 md:gap-3 mb-2 md:mb-3">
                                <span class="inline-block w-max px-2 py-1 md:px-3 md:py-1.5 rounded-md md:rounded-lg bg-cyan-500/20 border border-cyan-500/30 text-cyan-400 font-geely text-xs md:text-sm tracking-wider">ACC</span>
                                <h3 class="font-geely text-sm sm:text-base md:text-xl lg:text-2xl text-white uppercase tracking-tight leading-tight">Adaptive Cruise Control</h3>
                            </div>
                            <p class="text-gray-300 text-[11px] sm:text-xs md:text-base font-light leading-relaxed">
                                Secara otomatis menyesuaikan kecepatan kendaraan Anda untuk menjaga jarak aman dengan kendaraan di depan.
                            </p>
                        </div>
                    </div>

                    <!-- Video Card 2: AEB -->
                    <div class="flex-shrink-0 w-[85vw] snap-center md:w-auto glass-panel p-3 md:p-6 rounded-[24px] md:rounded-[32px] overflow-hidden group border border-white/10 hover:border-cyan-500/40 transition-all duration-500 shadow-xl flex flex-col delay-100">
                        <div class="w-full aspect-video relative overflow-hidden bg-black rounded-[16px] md:rounded-[24px] border border-white/5">
                            <video autoplay muted loop playsinline class="w-full h-full object-cover">
                                <source src="https://assets.zyrosite.com/Yle46KEPN6IkVONg/video_features-aeb-ex2-00pnCbyVC5q4A00o.mp4" type="video/mp4">
                            </video>
                            <div class="absolute inset-0 bg-gradient-to-t from-[#050505]/60 via-transparent to-transparent"></div>
                        </div>
                        <div class="pt-4 md:pt-6 flex-grow flex flex-col justify-start">
                            <div class="flex flex-row items-center gap-2 md:gap-3 mb-2 md:mb-3">
                                <span class="inline-block w-max px-2 py-1 md:px-3 md:py-1.5 rounded-md md:rounded-lg bg-cyan-500/20 border border-cyan-500/30 text-cyan-400 font-geely text-xs md:text-sm tracking-wider">AEB</span>
                                <h3 class="font-geely text-sm sm:text-base md:text-xl lg:text-2xl text-white uppercase tracking-tight leading-tight">Auto Emergency Braking</h3>
                            </div>
                            <p class="text-gray-300 text-[11px] sm:text-xs md:text-base font-light leading-relaxed">
                                Mendeteksi bahaya tabrakan dan melakukan pengereman darurat otomatis untuk mencegah atau mengurangi benturan.
                            </p>
                        </div>
                    </div>

                    <!-- Video Card 3: LDW -->
                    <div class="flex-shrink-0 w-[85vw] snap-center md:w-auto glass-panel p-3 md:p-6 rounded-[24px] md:rounded-[32px] overflow-hidden group border border-white/10 hover:border-cyan-500/40 transition-all duration-500 shadow-xl flex flex-col delay-200">
                        <div class="w-full aspect-video relative overflow-hidden bg-black rounded-[16px] md:rounded-[24px] border border-white/5">
                            <video autoplay muted loop playsinline class="w-full h-full object-cover">
                                <source src="https://assets.zyrosite.com/Yle46KEPN6IkVONg/video_features-ldw-ex2-2hiq85UigiqvwEgI.mp4" type="video/mp4">
                            </video>
                            <div class="absolute inset-0 bg-gradient-to-t from-[#050505]/60 via-transparent to-transparent"></div>
                        </div>
                        <div class="pt-4 md:pt-6 flex-grow flex flex-col justify-start">
                            <div class="flex flex-row items-center gap-2 md:gap-3 mb-2 md:mb-3">
                                <span class="inline-block w-max px-2 py-1 md:px-3 md:py-1.5 rounded-md md:rounded-lg bg-cyan-500/20 border border-cyan-500/30 text-cyan-400 font-geely text-xs md:text-sm tracking-wider">LDW</span>
                                <h3 class="font-geely text-sm sm:text-base md:text-xl lg:text-2xl text-white uppercase tracking-tight leading-tight">Lane Departure Warning</h3>
                            </div>
                            <p class="text-gray-300 text-[11px] sm:text-xs md:text-base font-light leading-relaxed">
                                Membaca marka jalan dan memberi peringatan jika mobil tidak sengaja keluar jalur agar Anda kembali fokus.
                            </p>
                        </div>
                    </div>

                    <!-- Video Card 4: TSI -->
                    <div class="flex-shrink-0 w-[85vw] snap-center md:w-auto glass-panel p-3 md:p-6 rounded-[24px] md:rounded-[32px] overflow-hidden group border border-white/10 hover:border-cyan-500/40 transition-all duration-500 shadow-xl flex flex-col delay-300">
                        <div class="w-full aspect-video relative overflow-hidden bg-black rounded-[16px] md:rounded-[24px] border border-white/5">
                            <video autoplay muted loop playsinline class="w-full h-full object-cover">
                                <source src="https://assets.zyrosite.com/Yle46KEPN6IkVONg/video_features-tsi-ex2-mTv85dTi03WBvOsf.mp4" type="video/mp4">
                            </video>
                            <div class="absolute inset-0 bg-gradient-to-t from-[#050505]/60 via-transparent to-transparent"></div>
                        </div>
                        <div class="pt-4 md:pt-6 flex-grow flex flex-col justify-start">
                            <div class="flex flex-row items-center gap-2 md:gap-3 mb-2 md:mb-3">
                                <span class="inline-block w-max px-2 py-1 md:px-3 md:py-1.5 rounded-md md:rounded-lg bg-cyan-500/20 border border-cyan-500/30 text-cyan-400 font-geely text-xs md:text-sm tracking-wider">TSI</span>
                                <h3 class="font-geely text-sm sm:text-base md:text-xl lg:text-2xl text-white uppercase tracking-tight leading-tight">Traffic Sign Identify</h3>
                            </div>
                            <p class="text-gray-300 text-[11px] sm:text-xs md:text-base font-light leading-relaxed">
                                Mengenali rambu batas kecepatan secara real-time untuk membantu Anda mematuhi peraturan lalu lintas dengan mudah.
                            </p>
                        </div>
                    </div>

                </div>

                <!-- Swipe indicator for mobile -->
                <div class="text-center mt-2 flex md:hidden justify-center items-center gap-2 text-cyan-400 text-[9px] font-bold uppercase tracking-widest animate-pulse reveal-up delay-400">
                    <svg class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path></svg>
                    Swipe to explore
                </div>
            </div>
        </section>

        <!-- ==========================================
             SECTION 9: SIX AIRBAGS
        =========================================== -->
        <section id="airbags" class="relative py-24 lg:py-48 bg-[#050505] overflow-hidden flex items-center min-h-[60vh] md:min-h-[70vh]">
            <div class="absolute inset-0 z-0">
                <img src="https://assets.zyrosite.com/Yle46KEPN6IkVONg/airbags-ex2-SGRbNrAPL4garbQk.jpg" alt="Six Airbags Protection" class="w-full h-full object-cover object-center transform scale-105">
                
                <div class="absolute inset-0 vignette-overlay z-10"></div>
                <div class="absolute inset-x-0 top-0 h-32 md:h-64 bg-gradient-to-b from-[#050505] via-[#050505]/80 to-transparent z-10"></div>
                <div class="absolute inset-x-0 bottom-0 h-32 md:h-64 bg-gradient-to-t from-[#050505] via-[#050505]/80 to-transparent z-10"></div>
                <div class="absolute inset-0 bg-gradient-to-r from-[#050505] via-[#050505]/80 to-transparent z-10"></div>
            </div>

            <div class="max-w-7xl mx-auto px-6 relative z-20 w-full">
                <div class="max-w-xl reveal-left">
                    <div class="inline-flex items-center gap-2 mb-4 md:mb-6 px-4 py-2 rounded-full border border-cyan-500/20 bg-cyan-500/5 text-cyan-400 backdrop-blur-md">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20.618 5.984A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016zM12 9v2m0 4h.01"></path></svg>
                        <span class="text-[9px] md:text-[10px] font-bold tracking-[0.3em] uppercase">Passive Safety</span>
                    </div>
                    
                    <h2 class="font-geely text-4xl sm:text-5xl md:text-7xl text-white uppercase tracking-tighter leading-tight mb-4 md:mb-6">
                        SIX <span class="text-liquid">AIRBAGS</span>
                    </h2>
                    
                    <p class="text-white text-sm md:text-lg font-normal leading-relaxed mb-6 md:mb-8 drop-shadow-[0_4px_12px_rgba(0,0,0,1)]" style="text-shadow: 0 2px 10px rgba(0,0,0,0.8);">
                        Larger in size, inflate faster, and provide maximum protection, ensuring your driving safety to the greatest extent possible.
                    </p>

                    <div class="glass-panel p-4 px-6 md:px-8 rounded-2xl inline-flex items-center gap-4 md:gap-6 border-white/10">
                        <div class="flex flex-col">
                            <span class="text-cyan-400 font-geely text-xl md:text-3xl">360°</span>
                            <span class="text-gray-400 text-[8px] md:text-[9px] uppercase tracking-widest font-bold mt-1">Protection</span>
                        </div>
                        <div class="w-[1px] h-8 md:h-10 bg-white/20"></div>
                        <div class="flex flex-col">
                            <span class="text-white font-geely text-xl md:text-3xl">0.03s</span>
                            <span class="text-gray-400 text-[8px] md:text-[9px] uppercase tracking-widest font-bold mt-1">Deployment</span>
                        </div>
                    </div>
                </div>
            </div>
        </section>

<!-- ==========================================
SECTION 10: DIVE INTO THE DETAILS
=========================================== -->

<section id="details" class="py-16 md:py-24 lg:py-32 relative z-30 bg-white overflow-hidden border-t border-gray-100">
<!-- Subtle Light Background Elements -->
<div class="absolute top-0 right-0 w-[500px] h-[500px] bg-cyan-100/50 rounded-full blur-[150px] pointer-events-none z-0"></div>

<div class="max-w-[1600px] w-full mx-auto px-4 sm:px-8 md:px-12 lg:px-16 relative z-10">
    <!-- Header -->
    <div class="text-center mb-12 md:mb-20 max-w-4xl mx-auto px-4 reveal-up">
        <h3 class="text-cyan-600 text-[10px] md:text-sm font-bold tracking-[0.3em] uppercase mb-4">
            The Blueprint
        </h3>
        <h2 class="font-geely text-3xl sm:text-4xl md:text-5xl lg:text-7xl uppercase tracking-tighter text-gray-900 mb-6 leading-tight">
            Dive Into <span class="text-gradient-cyan">The Details</span>
        </h2>
        <p class="text-gray-600 text-xs sm:text-sm md:text-base lg:text-lg font-light leading-relaxed">
            Get a look at the Geely EX2’s advanced features and specifications, designed to set a new standard for EV.
        </p>
    </div>

    <div class="grid grid-cols-1 lg:grid-cols-12 gap-10 lg:gap-16 items-start">
        
        <!-- Left: Navigation Link Cards -->
        <div class="order-2 lg:order-1 lg:col-span-7 flex flex-col gap-4 reveal-left w-full">
            
            <!-- Exterior Link Card -->
            <a href="{{ route('models.ex2.exterior') }}" class="relative w-full h-[120px] sm:h-[160px] lg:h-[200px] rounded-[1.5rem] overflow-hidden group block shadow-md hover:shadow-xl transition-shadow duration-500 border border-gray-200">
                <img src="https://assets.zyrosite.com/Yle46KEPN6IkVONg/banner_ex2b-Rcl937dqFR7EP4xN.jpg" alt="Exterior" class="absolute inset-0 w-full h-full object-cover transform group-hover:scale-105 transition-transform duration-700 ease-out">
                <div class="absolute inset-0 bg-gradient-to-r from-black/80 via-black/40 to-transparent"></div>
                
                <div class="absolute inset-0 p-6 md:p-8 flex items-end justify-between">
                    <div>
                        <p class="text-cyan-400 text-[10px] uppercase font-bold tracking-widest mb-1 group-hover:text-cyan-300 transition-colors">Explore</p>
                        <h3 class="text-white font-geely text-2xl md:text-4xl uppercase tracking-tighter drop-shadow-md">Exterior</h3>
                    </div>
                    <div class="w-10 h-10 md:w-12 md:h-12 rounded-full bg-white/20 backdrop-blur-md flex items-center justify-center text-white group-hover:bg-cyan-600 transition-colors duration-300 border border-white/30">
                        <svg class="w-5 h-5 transform group-hover:translate-x-1 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
                    </div>
                </div>
            </a>

            <!-- Interior Link Card -->
            <a href="{{ route('models.ex2.interior') }}" class="relative w-full h-[120px] sm:h-[160px] lg:h-[200px] rounded-[1.5rem] overflow-hidden group block shadow-md hover:shadow-xl transition-shadow duration-500 border border-gray-200">
                <img src="https://assets.zyrosite.com/Yle46KEPN6IkVONg/skyline-white-YQe9py6QFEDr79dt.webp" alt="Interior" class="absolute inset-0 w-full h-full object-cover transform group-hover:scale-105 transition-transform duration-700 ease-out">
                <div class="absolute inset-0 bg-gradient-to-r from-black/80 via-black/40 to-transparent"></div>
                
                <div class="absolute inset-0 p-6 md:p-8 flex items-end justify-between">
                    <div>
                        <p class="text-cyan-400 text-[10px] uppercase font-bold tracking-widest mb-1 group-hover:text-cyan-300 transition-colors">Discover</p>
                        <h3 class="text-white font-geely text-2xl md:text-4xl uppercase tracking-tighter drop-shadow-md">Interior</h3>
                    </div>
                    <div class="w-10 h-10 md:w-12 md:h-12 rounded-full bg-white/20 backdrop-blur-md flex items-center justify-center text-white group-hover:bg-cyan-600 transition-colors duration-300 border border-white/30">
                        <svg class="w-5 h-5 transform group-hover:translate-x-1 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
                    </div>
                </div>
            </a>

            <!-- Specification Link Card -->
            <a href="{{ route('models.ex2.specification') }}" class="relative w-full h-[120px] sm:h-[160px] lg:h-[200px] rounded-[1.5rem] overflow-hidden group block shadow-md hover:shadow-xl transition-shadow duration-500 border border-gray-200">
                <img src="https://assets.zyrosite.com/Yle46KEPN6IkVONg/gambar-9-driving-pleasure-geely-ex2-mrThxF1DGtduy9Ih.webp" alt="Specification" class="absolute inset-0 w-full h-full object-cover transform group-hover:scale-105 transition-transform duration-700 ease-out">
                <div class="absolute inset-0 bg-gradient-to-r from-black/80 via-black/40 to-transparent"></div>
                
                <div class="absolute inset-0 p-6 md:p-8 flex items-end justify-between">
                    <div>
                        <p class="text-cyan-400 text-[10px] uppercase font-bold tracking-widest mb-1 group-hover:text-cyan-300 transition-colors">Learn More</p>
                        <h3 class="text-white font-geely text-2xl md:text-4xl uppercase tracking-tighter drop-shadow-md">Specification</h3>
                    </div>
                    <div class="w-10 h-10 md:w-12 md:h-12 rounded-full bg-white/20 backdrop-blur-md flex items-center justify-center text-white group-hover:bg-cyan-600 transition-colors duration-300 border border-white/30">
                        <svg class="w-5 h-5 transform group-hover:translate-x-1 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
                    </div>
                </div>
            </a>
        </div>

        <!-- Right: Dimensions & Actions -->
        <div class="order-1 lg:order-2 lg:col-span-5 flex flex-col gap-8 reveal-right delay-200 w-full">
            
            <div class="bg-gray-50 border border-gray-200 p-6 md:p-8 rounded-[1.5rem] md:rounded-[2rem] flex flex-col shadow-sm relative overflow-hidden group">
                <h4 class="text-gray-900 font-geely text-2xl mb-1">Dimensions</h4>
                <p class="text-gray-500 text-[10px] md:text-xs font-bold tracking-widest uppercase mb-6">(in milimeters)</p>
                
                <div class="grid grid-cols-2 gap-4 md:gap-6 relative z-10">
                    <div class="border-l-2 border-cyan-500 pl-3">
                        <p class="text-gray-500 text-[10px] uppercase tracking-wider mb-1">Length</p>
                        <p class="font-geely text-3xl text-gray-900">4135</p>
                    </div>
                    <div class="border-l-2 border-cyan-500 pl-3">
                        <p class="text-gray-500 text-[10px] uppercase tracking-wider mb-1">Width</p>
                        <p class="font-geely text-3xl text-gray-900">1805</p>
                    </div>
                    <div class="border-l-2 border-cyan-500 pl-3">
                        <p class="text-gray-500 text-[10px] uppercase tracking-wider mb-1">Height</p>
                        <p class="font-geely text-3xl text-gray-900">1580</p>
                    </div>
                    <div class="border-l-2 border-cyan-500 pl-3">
                        <p class="text-gray-500 text-[10px] uppercase tracking-wider mb-1">Wheelbase</p>
                        <p class="font-geely text-3xl text-gray-900">2650</p>
                    </div>
                </div>

                <div class="w-full relative mt-8 mix-blend-multiply opacity-80 group-hover:opacity-100 transition-opacity duration-500">
                    <img src="https://assets.zyrosite.com/Yle46KEPN6IkVONg/sketch-ex2-9YIJTReOoLDy0jje.webp" alt="Geely EX2 Sketch" loading="lazy" class="w-full h-auto object-contain">
                </div>
            </div>

            <!-- Action Buttons -->
            <div class="flex flex-col gap-3 w-full">
                <!-- Button Show Full Specs diarahkan ke Specification -->
                <a href="{{ route('models.ex2.specification') }}" class="w-full py-4 md:py-5 rounded-full bg-gray-900 text-white font-bold text-[10px] md:text-xs tracking-[0.2em] uppercase text-center hover:bg-cyan-600 transition-colors duration-300 shadow-md">
                    Show Full Specs
                </a>
                <div class="flex flex-col sm:flex-row gap-3 w-full">
                    <a href="#" class="w-full sm:w-1/2 py-3 md:py-4 rounded-full border border-gray-300 text-gray-700 font-bold text-[9px] md:text-[10px] tracking-widest uppercase text-center hover:bg-gray-100 transition-colors duration-300 flex items-center justify-center gap-2">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4"></path></svg>
                        Brochure
                    </a>
                    <a href="#" class="w-full sm:w-1/2 py-3 md:py-4 rounded-full border border-gray-300 text-gray-700 font-bold text-[9px] md:text-[10px] tracking-widest uppercase text-center hover:bg-gray-100 transition-colors duration-300 flex items-center justify-center gap-2">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path></svg>
                        Owner's Manual
                    </a>
                </div>
            </div>

        </div>
    </div>

</div>

</section>


    <!-- ==========================================
         SCRIPTS 
    =========================================== -->
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            
            /* --- 1. INTERSECTION OBSERVER (Scroll Reveals) --- */
            const observerOptions = { root: null, rootMargin: '0px', threshold: 0.15 };
            const revealObserver = new IntersectionObserver((entries, observer) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.classList.add('is-revealed');
                        observer.unobserve(entry.target);
                    }
                });
            }, observerOptions);
            document.querySelectorAll('.reveal-up, .reveal-left, .reveal-right').forEach(el => revealObserver.observe(el));


            /* --- 2. LOGIKA CUSTOMIZER (DYNAMIC SOURCE SWAPPING) --- */
            const btnExt = document.getElementById('btn-tab-exterior');
            const btnInt = document.getElementById('btn-tab-interior');
            const wrapExt = document.getElementById('wrapper-exterior');
            const frameExt = document.getElementById('iframe-exterior');
            const wrapInt = document.getElementById('wrapper-interior');
            const frameInt = document.getElementById('iframe-interior');
            const swatchesExtGroup = document.getElementById('swatches-exterior');
            const swatchesIntGroup = document.getElementById('swatches-interior');
            const colorNameDisplay = document.getElementById('active-color-name');

            btnExt.addEventListener('click', () => {
                btnExt.classList.add('bg-white/10', 'text-white', 'shadow-[0_0_20px_rgba(255,255,255,0.05)]');
                btnExt.classList.remove('text-gray-500');
                btnInt.classList.remove('bg-white/10', 'text-white', 'shadow-[0_0_20px_rgba(255,255,255,0.05)]');
                btnInt.classList.add('text-gray-500');
                wrapExt.style.opacity = '1';
                wrapExt.style.pointerEvents = 'auto';
                wrapExt.style.zIndex = '10';
                wrapInt.style.opacity = '0';
                wrapInt.style.pointerEvents = 'none';
                wrapInt.style.zIndex = '0';
                swatchesIntGroup.classList.add('hidden', 'opacity-0', 'pointer-events-none');
                swatchesExtGroup.classList.remove('hidden');
                setTimeout(() => swatchesExtGroup.classList.remove('opacity-0', 'pointer-events-none'), 50);
                const activeExt = document.querySelector('.swatch-ext.active');
                if(activeExt) {
                    colorNameDisplay.textContent = activeExt.getAttribute('data-name');
                    colorNameDisplay.style.color = activeExt.getAttribute('data-text-color');
                }
            });

            btnInt.addEventListener('click', () => {
                btnInt.classList.add('bg-white/10', 'text-white', 'shadow-[0_0_20px_rgba(255,255,255,0.05)]');
                btnInt.classList.remove('text-gray-500');
                btnExt.classList.remove('bg-white/10', 'text-white', 'shadow-[0_0_20px_rgba(255,255,255,0.05)]');
                btnExt.classList.add('text-gray-500');
                wrapExt.style.opacity = '0';
                wrapExt.style.pointerEvents = 'none';
                wrapExt.style.zIndex = '0';
                wrapInt.style.opacity = '1';
                wrapInt.style.pointerEvents = 'auto';
                wrapInt.style.zIndex = '10';
                swatchesExtGroup.classList.add('hidden', 'opacity-0', 'pointer-events-none');
                swatchesIntGroup.classList.remove('hidden');
                setTimeout(() => swatchesIntGroup.classList.remove('opacity-0', 'pointer-events-none'), 50);
                const activeInt = document.querySelector('.swatch-int.active');
                if(activeInt) {
                    colorNameDisplay.textContent = activeInt.getAttribute('data-name');
                    colorNameDisplay.style.color = activeInt.getAttribute('data-text-color') || '#cbd5e1';
                }
            });

            const swatchesExt = document.querySelectorAll('.swatch-ext');
            swatchesExt.forEach(swatch => {
                swatch.addEventListener('click', () => {
                    swatchesExt.forEach(s => {
                        s.classList.remove('active', 'border-white', 'ring-2', 'ring-transparent', 'ring-offset-4', 'ring-offset-[#050505]');
                        s.classList.add('border-white/20');
                    });
                    swatch.classList.add('active', 'border-white', 'ring-2', 'ring-transparent', 'ring-offset-4', 'ring-offset-[#050505]');
                    swatch.classList.remove('border-white/20');
                    colorNameDisplay.style.opacity = 0;
                    setTimeout(() => {
                        colorNameDisplay.textContent = swatch.getAttribute('data-name');
                        colorNameDisplay.style.color = swatch.getAttribute('data-text-color');
                        document.getElementById('360-bg-container').style.backgroundColor = swatch.getAttribute('data-bg-color');
                        colorNameDisplay.style.opacity = 1;
                    }, 150);
                    frameExt.src = swatch.getAttribute('data-src');
                });
            });

            const swatchesInt = document.querySelectorAll('.swatch-int');
            swatchesInt.forEach(swatch => {
                swatch.addEventListener('click', () => {
                    swatchesInt.forEach(s => {
                        s.classList.remove('active', 'border-white', 'ring-2', 'ring-transparent', 'ring-offset-4', 'ring-offset-[#050505]');
                        s.classList.add('border-white/20');
                    });
                    swatch.classList.add('active', 'border-white', 'ring-2', 'ring-transparent', 'ring-offset-4', 'ring-offset-[#050505]');
                    swatch.classList.remove('border-white/20');
                    colorNameDisplay.style.opacity = 0;
                    setTimeout(() => {
                        colorNameDisplay.textContent = swatch.getAttribute('data-name');
                        colorNameDisplay.style.color = swatch.getAttribute('data-text-color');
                        colorNameDisplay.style.opacity = 1;
                    }, 150);
                    const panoramaUrl = swatch.getAttribute('data-src');
                    frameInt.src = `https://cdn.pannellum.org/2.5/pannellum.htm?t=${new Date().getTime()}#panorama=${panoramaUrl}&autoLoad=true&autoRotate=-2`;
                });
            });

            /* --- 3. LOGIKA SLIDER (THE SPACE) --- */
            const slider = document.getElementById('space-slider');
            const btnLeft = document.getElementById('slide-left');
            const btnRight = document.getElementById('slide-right');
            const dotsContainer = document.getElementById('slider-dots');

            const updateDots = () => {
                const index = Math.round(slider.scrollLeft / slider.offsetWidth);
                const dots = dotsContainer.children;
                for (let i = 0; i < dots.length; i++) {
                    if (i === index) {
                        dots[i].classList.replace('w-2', 'w-6');
                        if(window.innerWidth >= 768) {
                            dots[i].classList.replace('w-6', 'w-8');
                        }
                        dots[i].classList.replace('bg-white/20', 'bg-cyan-500');
                    } else {
                        dots[i].classList.replace('w-6', 'w-2');
                        dots[i].classList.replace('w-8', 'w-2');
                        dots[i].classList.replace('bg-cyan-500', 'bg-white/20');
                    }
                }
            };

            if(btnRight) {
                btnRight.addEventListener('click', () => {
                    slider.scrollBy({ left: slider.offsetWidth / 1.5, behavior: 'smooth' });
                });
            }
            if(btnLeft) {
                btnLeft.addEventListener('click', () => {
                    slider.scrollBy({ left: -slider.offsetWidth / 1.5, behavior: 'smooth' });
                });
            }
            if(slider) {
                slider.addEventListener('scroll', updateDots);
            }

        });
    </script>

        <!-- ==========================================
         ADVANCED SEO SCHEMA FOR GEELY EX2
    =========================================== -->
    <script type="application/ld+json">
    {
      "@@context": "https://schema.org/",
      "@@type": "Product",
      "name": "Geely EX2 Indonesia",
      "image": [
        "https://assets.zyrosite.com/Yle46KEPN6IkVONg/banner_ex2b-Rcl937dqFR7EP4xN.jpg",
        "https://assets.zyrosite.com/Yle46KEPN6IkVONg/ambient-lighting-1-YCHFgHZwRQjP7gVB.webp"
      ],
      "description": "Mobil Listrik Urban Geely EX2. Jarak tempuh 395km NEDC, fitur ADAS lengkap, dan pemenang European Product Design Award.",
      "brand": {
        "@@type": "Brand",
        "name": "Geely"
      },
      "offers": {
        "@@type": "AggregateOffer",
        "url": "https://geelybsd.id/models/ex2",
        "priceCurrency": "IDR",
        "lowPrice": "229900000",
        "highPrice": "259900000",
        "offerCount": "2"
      },
      "additionalProperty": [
        {
          "@@type": "PropertyValue",
          "name": "Range",
          "value": "395 km"
        },
        {
          "@@type": "PropertyValue",
          "name": "Body Type",
          "value": "Crossover"
        }
      ]
    }
    </script>
</x-layouts.app>