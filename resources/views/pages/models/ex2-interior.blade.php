<x-layouts.app>
    <!-- ==========================================
         ULTRA-PREMIUM INTERIOR THEME STYLES
    =========================================== -->
    <style>
        /* Dasar & Navigasi Mulus */
        html, body { 
            scroll-behavior: smooth; 
            background-color: #050505; 
            color: #ffffff;
            overflow-x: hidden; 
            max-width: 100vw; 
            font-family: 'Inter', sans-serif;
        }

        /* Responsif Kontainer Viewer */
        .viewer-container { aspect-ratio: 16 / 9; height: auto; width: 100%; }
        @media (min-width: 768px) {
            .viewer-container { aspect-ratio: auto; height: 60vh; min-height: 500px; }
        }
        
        .interior-viewer-container { aspect-ratio: 4 / 3; height: auto; width: 100%; }
        @media (min-width: 768px) {
            .interior-viewer-container { aspect-ratio: 16 / 9; height: 75vh; min-height: 600px; }
        }

        /* Cinematic Noise Background */
        .bg-noise::before {
            content: "";
            position: absolute;
            inset: 0;
            background-image: url("data:image/svg+xml,%3Csvg viewBox='0 0 200 200' xmlns='http://www.w3.org/2000/svg'%3E%3Cfilter id='noiseFilter'%3E%3CfeTurbulence type='fractalNoise' baseFrequency='0.8' numOctaves='3' stitchTiles='stitch'/%3E%3C/filter%3E%3Crect width='100%25' height='100%25' filter='url(%23noiseFilter)' opacity='0.05'/%3E%3C/svg%3E");
            pointer-events: none;
            z-index: 1;
            mix-blend-mode: overlay;
        }

        /* Enhanced Glass Panels */
        .glass-panel {
            background: linear-gradient(135deg, rgba(30, 30, 35, 0.7) 0%, rgba(15, 15, 20, 0.4) 100%);
            backdrop-filter: blur(24px) saturate(180%);
            -webkit-backdrop-filter: blur(24px) saturate(180%);
            border: 1px solid rgba(255, 255, 255, 0.08);
            border-top: 1px solid rgba(255, 255, 255, 0.15);
            box-shadow: 0 30px 60px rgba(0, 0, 0, 0.4), inset 0 1px 0 rgba(255, 255, 255, 0.05);
            position: relative;
            overflow: hidden;
            transition: all 0.4s cubic-bezier(0.25, 1, 0.5, 1);
        }

        .glass-panel:hover {
            border-color: rgba(34, 211, 238, 0.4);
            box-shadow: 0 40px 80px rgba(0, 0, 0, 0.6), 0 0 40px rgba(34, 211, 238, 0.1);
        }

        .glass-panel-light {
            background: rgba(255, 255, 255, 0.75);
            backdrop-filter: blur(24px) saturate(180%);
            -webkit-backdrop-filter: blur(24px) saturate(180%);
            border: 1px solid rgba(255, 255, 255, 0.8);
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.04);
            color: #1d1d1f;
        }

        /* Teks Gradasi */
        .text-liquid {
            background: linear-gradient(270deg, #22d3ee, #818cf8, #f472b6, #22d3ee);
            background-size: 300% 300%;
            -webkit-background-clip: text;
            background-clip: text;
            -webkit-text-fill-color: transparent;
            animation: liquidText 8s ease infinite;
        }
        @keyframes liquidText {
            0% { background-position: 0% 50%; }
            50% { background-position: 100% 50%; }
            100% { background-position: 0% 50%; }
        }
        
        .text-gradient-cyan {
            background: linear-gradient(to right, #22d3ee, #3b82f6);
            -webkit-background-clip: text;
            background-clip: text;
            -webkit-text-fill-color: transparent;
        }

        /* Animasi Reveal */
        .reveal-up { opacity: 0; transform: translateY(40px); transition: all 1s cubic-bezier(0.25, 1, 0.5, 1); }
        .reveal-left { opacity: 0; transform: translateX(-40px); transition: all 1s cubic-bezier(0.25, 1, 0.5, 1); }
        .reveal-right { opacity: 0; transform: translateX(40px); transition: all 1s cubic-bezier(0.25, 1, 0.5, 1); }
        .is-revealed { opacity: 1 !important; transform: translate(0) !important; }
        
        .delay-100 { transition-delay: 100ms; }
        .delay-200 { transition-delay: 200ms; }

        /* Tombol Swatch */
        .swatch-btn-int {
            border: 2px solid rgba(255, 255, 255, 0.2) !important;
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1) !important;
            cursor: pointer;
            transform: scale(0.9);
        }
        .swatch-btn-int.active {
            transform: scale(1.2) !important;
            border-color: #fff !important;
            box-shadow: 0 0 20px rgba(34, 211, 238, 0.6);
        }

        @keyframes bounce-slow {
            0%, 100% { transform: translateY(0); }
            50% { transform: translateY(-10px); }
        }
        .animate-bounce-slow { animation: bounce-slow 3s ease-in-out infinite; }
    </style>

    <div class="w-full overflow-x-hidden bg-[#050505]">

        <!-- ==========================================
             SECTION 1: HERO (FULL BACKGROUND)
        =========================================== -->
        <section class="relative min-h-[100svh] w-full flex flex-col justify-end lg:justify-center items-center overflow-hidden pb-24 lg:py-32">
            <div class="absolute inset-0 z-0 bg-[#050505] overflow-hidden">
                <img src="https://assets.zyrosite.com/Yle46KEPN6IkVONg/interior_ex2_01-mjE49a4pNXu7kyQv.jpg" alt="Interior EX2" class="w-full h-full object-cover object-center blur-xl opacity-70" style="transform: scaleX(-1.1) scaleY(1.1);">
                <div class="absolute inset-0 bg-black/20"></div>
                <div class="absolute inset-x-0 bottom-0 h-2/3 bg-gradient-to-t from-[#050505] via-[#050505]/80 to-transparent"></div>
                <div class="absolute inset-x-0 top-0 h-1/4 bg-gradient-to-b from-[#050505]/80 to-transparent"></div>
            </div>

            <div class="relative z-20 w-full max-w-7xl mx-auto px-6 text-center mt-20">
                <div class="inline-flex items-center gap-3 mb-6 px-5 py-2.5 rounded-full border border-cyan-500/30 bg-[#050505]/60 backdrop-blur-xl reveal-up shadow-[0_10px_30px_rgba(0,0,0,0.5)]">
                    <span class="text-cyan-300 text-[8px] md:text-[10px] tracking-[0.4em] font-bold uppercase">Intelligent Cabin</span>
                </div>

                <h1 class="font-geely text-3xl sm:text-5xl md:text-6xl lg:text-7xl text-white uppercase leading-[1.1] tracking-tighter mb-6 reveal-up delay-100 max-w-5xl mx-auto drop-shadow-[0_10px_30px_rgba(0,0,0,0.9)]">
                    SMART SANCTUARY FOR <br> <span class="text-liquid">MODERN LIVING</span>
                </h1>
                
                <p class="text-gray-300 text-xs md:text-base font-light tracking-wide uppercase reveal-up delay-200 max-w-2xl mx-auto drop-shadow-[0_4px_10px_rgba(0,0,0,0.8)]">
                    Rasakan kenyamanan premium yang terintegrasi dengan ekosistem digital Flyme Auto.
                </p>
            </div>
        </section>

        <!-- ==========================================
             SECTION 2: 360 INTERIOR VIEWER
        =========================================== -->
        <section id="interior-viewer" class="py-24 md:py-32 bg-[#050505] relative z-30 overflow-hidden border-t border-white/5 bg-noise">
            <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-[600px] h-[600px] bg-cyan-600/10 rounded-full blur-[150px] pointer-events-none z-0"></div>

            <div class="max-w-[1600px] mx-auto px-4 md:px-8 relative z-10 text-center">
                <div class="reveal-up mb-12">
                    <h2 class="font-geely text-3xl sm:text-5xl md:text-6xl lg:text-7xl uppercase tracking-tighter text-white mb-4">
                        INSIDE THE <span class="text-gradient-cyan">EX2</span>
                    </h2>
                    <p class="text-gray-400 text-xs sm:text-sm md:text-base font-light tracking-wide max-w-2xl mx-auto leading-relaxed">
                        Jelajahi setiap sudut interior secara interaktif. Seret untuk memutar pandangan 360 derajat.
                    </p>
                </div>
                
                <div class="flex flex-col items-center justify-center gap-4 reveal-up delay-100 mb-8">
                    <div class="h-6">
                        <p id="active-interior-name" class="text-cyan-400 text-[10px] md:text-xs font-bold tracking-[0.3em] uppercase transition-opacity duration-300">Skyline White</p>
                    </div>
                    
                    <div class="flex flex-wrap justify-center gap-4 md:gap-6 glass-panel p-3 rounded-full border-white/10">
                        <button class="swatch-btn-int active w-10 h-10 md:w-12 md:h-12 rounded-full border border-white ring-2 ring-transparent ring-offset-4 ring-offset-[#050505]" style="background-color: #e5e5e5;" data-src="https://assets.zyrosite.com/Yle46KEPN6IkVONg/skyline-white-YQe9py6QFEDr79dt.webp" data-name="Skyline White"></button>
                        <button class="swatch-btn-int w-10 h-10 md:w-12 md:h-12 rounded-full border border-white/20" style="background-color: #3b3b3b;" data-src="https://assets.zyrosite.com/Yle46KEPN6IkVONg/horizon-gray-7NhbdLeYf8TcgE58.webp" data-name="Horizon Gray"></button>
                    </div>
                </div>

                <div class="glass-panel p-2 md:p-3 rounded-[2.5rem] md:rounded-[3rem] reveal-up delay-200 w-full relative z-10 interior-viewer-container border-white/20 shadow-[0_30px_60px_rgba(0,0,0,0.8)] h-[50vh] min-h-[350px] md:h-[75vh] md:min-h-[600px]">
                    <div class="relative w-full h-full rounded-[1.5rem] md:rounded-[2rem] overflow-hidden bg-[#0A0A0A] flex items-center justify-center cursor-grab active:cursor-grabbing">
                        <iframe id="iframe-interior" src="https://cdn.pannellum.org/2.5/pannellum.htm#panorama=https://assets.zyrosite.com/Yle46KEPN6IkVONg/skyline-white-YQe9py6QFEDr79dt.webp&autoLoad=true&autoRotate=-2" class="w-full h-full border-0" allowfullscreen></iframe>
                        
                        <div class="absolute bottom-8 left-1/2 -translate-x-1/2 z-30 pointer-events-none drop-shadow-2xl">
                            <div class="px-5 py-2.5 rounded-full flex items-center gap-3 border border-white/40 bg-[#050505]/80 backdrop-blur-xl shadow-lg">
                                <svg class="w-5 h-5 text-cyan-400 animate-[spin_4s_linear_infinite]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15"></path>
                                </svg>
                                <span class="text-[10px] md:text-xs text-white uppercase tracking-[0.2em] font-bold">Drag to explore <span class="text-cyan-400">360°</span></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- ==========================================
             SECTION 3: FLYME AUTO
        =========================================== -->
        <section class="py-24 bg-[#08080a] relative z-20 overflow-hidden border-t border-white/5">
            <div class="max-w-[1400px] mx-auto px-6 relative z-10">
                <div class="flex flex-col lg:flex-row items-center gap-12 lg:gap-16">
                    <div class="w-full lg:w-5/12 reveal-left">
                        <div class="inline-flex items-center gap-2 mb-6 px-4 py-2 rounded-full border border-blue-500/20 bg-blue-500/5 text-blue-400">
                            <span class="text-[9px] md:text-[10px] font-bold tracking-[0.3em] uppercase">Technology</span>
                        </div>
                        <h2 class="font-geely text-3xl sm:text-4xl md:text-6xl text-white uppercase tracking-tighter leading-tight mb-6">
                            <span class="text-gradient-cyan">FLYME</span> AUTO <br> SYSTEM
                        </h2>
                        <p class="text-gray-400 text-sm md:text-lg leading-relaxed font-light mb-8">
                            Interaksi mulus melalui layar sentuh 14.6" resolusi tinggi, memberikan kontrol penuh atas kendaraan Anda secepat smartphone premium.
                        </p>
                        
                        <div class="grid grid-cols-2 gap-4">
                            <div class="glass-panel p-6 rounded-2xl border-white/5 text-center">
                                <p class="text-white font-geely text-3xl mb-1">14.6"</p>
                                <p class="text-gray-500 text-[10px] uppercase font-bold tracking-widest">Center Screen</p>
                            </div>
                            <div class="glass-panel p-6 rounded-2xl border-white/5 text-center">
                                <p class="text-white font-geely text-3xl mb-1">8.8"</p>
                                <p class="text-gray-500 text-[10px] uppercase font-bold tracking-widest">Instrument</p>
                            </div>
                        </div>
                    </div>

                    <div class="w-full lg:w-7/12 reveal-right delay-100">
                        <div class="glass-panel p-2 rounded-[2.5rem] border-blue-500/20 overflow-hidden group">
                            <div class="relative w-full aspect-video rounded-[2rem] overflow-hidden">
                                <video autoplay muted loop playsinline class="w-full h-full object-cover transform group-hover:scale-105 transition-transform duration-[3s]">
                                    <source src="https://assets.zyrosite.com/Yle46KEPN6IkVONg/video_flyme-auto-ex2-IlRhJbwXW5P5Ic9q.mp4" type="video/mp4">
                                </video>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- ==========================================
             SECTION 4: MAXIMUM SPACE (UPDATED DESIGN)
        =========================================== -->
        <section class="py-24 md:py-32 bg-[#F8F9FA] relative z-20 overflow-hidden border-t border-gray-200">
            <!-- Decorative Subtle Shapes -->
            <div class="absolute top-0 right-0 w-[800px] h-[800px] bg-gradient-to-bl from-cyan-100/40 to-transparent rounded-full blur-[120px] pointer-events-none"></div>
            <div class="absolute -bottom-40 -left-40 w-[600px] h-[600px] bg-indigo-50/50 rounded-full blur-[100px] pointer-events-none"></div>

            <div class="max-w-[1440px] mx-auto px-6 relative z-10">
                <div class="flex flex-col lg:flex-row items-center gap-16 lg:gap-24">
                    
                    <!-- Content Side -->
                    <div class="w-full lg:w-1/2 order-2 lg:order-1 reveal-left">
                        <div class="inline-flex items-center gap-3 mb-6 px-4 py-2 rounded-full border border-indigo-100 bg-white/80 text-indigo-600 shadow-sm backdrop-blur-md">
                            <span class="w-2 h-2 rounded-full bg-indigo-500 animate-pulse"></span>
                            <span class="text-[10px] tracking-[0.3em] font-bold uppercase">Space Optimization</span>
                        </div>
                        
                        <h2 class="font-geely text-4xl sm:text-5xl md:text-6xl tracking-tighter text-[#1d1d1f] leading-[0.95] uppercase mb-8">
                            Maximum Space <br> <span class="text-liquid">Utilization</span>
                        </h2>
                        
                        <p class="text-gray-600 text-base md:text-xl font-light leading-relaxed mb-12 max-w-xl">
                            Arsitektur kabin Geely EX2 dirancang untuk beradaptasi dengan gaya hidup aktif Anda, menawarkan fleksibilitas luar biasa tanpa mengorbankan estetika.
                        </p>

                        <div class="space-y-6">
                            <!-- Detail Row 1 -->
                            <div class="group p-6 rounded-[2rem] bg-white border border-gray-100 shadow-[0_10px_30px_rgba(0,0,0,0.03)] hover:shadow-[0_20px_40px_rgba(0,0,0,0.06)] transition-all duration-500 flex items-start gap-6">
                                <div class="w-16 h-16 rounded-2xl bg-indigo-50 flex-shrink-0 flex items-center justify-center text-indigo-600 group-hover:bg-indigo-600 group-hover:text-white transition-colors duration-500">
                                    <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"></path></svg>
                                </div>
                                <div>
                                    <div class="flex items-baseline gap-2 mb-1">
                                        <span class="font-geely text-4xl text-[#1d1d1f]">1320L</span>
                                        <span class="text-gray-400 text-xs font-bold uppercase tracking-widest">Trunk</span>
                                    </div>
                                    <p class="text-gray-500 text-sm leading-relaxed">Kapasitas maksimal dengan kursi belakang terlipat rata 60:40, ideal untuk peralatan olahraga atau perjalanan jauh.</p>
                                </div>
                            </div>

                            <!-- Detail Row 2 -->
                            <div class="group p-6 rounded-[2rem] bg-white border border-gray-100 shadow-[0_10px_30px_rgba(0,0,0,0.03)] hover:shadow-[0_20px_40px_rgba(0,0,0,0.06)] transition-all duration-500 flex items-start gap-6">
                                <div class="w-16 h-16 rounded-2xl bg-cyan-50 flex-shrink-0 flex items-center justify-center text-cyan-600 group-hover:bg-cyan-600 group-hover:text-white transition-colors duration-500">
                                    <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4"></path></svg>
                                </div>
                                <div>
                                    <div class="flex items-baseline gap-2 mb-1">
                                        <span class="font-geely text-4xl text-[#1d1d1f]">70L</span>
                                        <span class="text-gray-400 text-xs font-bold uppercase tracking-widest">Frunk</span>
                                    </div>
                                    <p class="text-gray-500 text-sm leading-relaxed">Ruang penyimpanan depan kedap air untuk barang kecil yang sering digunakan seperti kabel pengisi daya atau tas kecil.</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Image Side -->
                    <div class="w-full lg:w-1/2 order-1 lg:order-2 reveal-right delay-200">
                        <div class="relative group">
                            <!-- Floating Tag -->
                            <div class="absolute -top-6 -right-6 z-30 bg-white/90 backdrop-blur-xl p-6 rounded-[2rem] shadow-xl border border-white hidden md:block animate-bounce-slow">
                                <p class="text-[#1d1d1f] font-geely text-3xl leading-none">Smart</p>
                                <p class="text-indigo-600 text-[10px] font-bold uppercase tracking-[0.2em]">Flat-fold seats</p>
                            </div>

                            <!-- Main Image Container -->
                            <div class="relative rounded-[3rem] overflow-hidden shadow-[0_50px_100px_-20px_rgba(0,0,0,0.15)] bg-white p-2 border border-white">
                                <div class="aspect-[4/5] sm:aspect-square overflow-hidden rounded-[2.5rem]">
                                    <img src="https://assets.zyrosite.com/Yle46KEPN6IkVONg/space-2-m-mExBnw2wvEFt7MRV.webp" alt="Interior Space" class="w-full h-full object-cover transform group-hover:scale-105 transition-transform duration-[3s]">
                                </div>
                                
                                <!-- Internal Overlay Info -->
                                <div class="absolute inset-x-0 bottom-0 p-8 bg-gradient-to-t from-black/60 via-black/20 to-transparent">
                                    <div class="flex items-center gap-4 text-white">
                                        <div class="h-px flex-1 bg-white/30"></div>
                                        <span class="text-[10px] uppercase tracking-[0.4em] font-medium opacity-80">Expandable Storage</span>
                                        <div class="h-px flex-1 bg-white/30"></div>
                                    </div>
                                </div>
                            </div>

                            <!-- Background Accent -->
                            <div class="absolute -z-10 -bottom-10 -right-10 w-full h-full border-2 border-dashed border-gray-200 rounded-[3rem]"></div>
                        </div>
                    </div>

                </div>
            </div>
        </section>

        <!-- ==========================================
             SECTION 5: AMBIENT LIGHTING (DARK)
        =========================================== -->
        <section class="py-24 md:py-32 bg-[#050505] relative z-20 overflow-hidden border-t border-white/5 bg-noise">
            <div class="absolute bottom-0 left-0 w-[400px] h-[400px] bg-purple-600/10 rounded-full blur-[120px] pointer-events-none z-0"></div>

            <div class="max-w-7xl mx-auto px-6 relative z-10">
                <div class="flex flex-col lg:flex-row items-center gap-12 lg:gap-20">
                    <div class="w-full lg:w-5/12 reveal-left">
                        <div class="inline-flex items-center gap-2 mb-6 px-4 py-2 rounded-full border border-purple-500/20 bg-purple-500/5 text-purple-400">
                            <span class="text-[9px] md:text-[10px] font-bold tracking-[0.3em] uppercase">Sensory Experience</span>
                        </div>
                        <h2 class="font-geely text-3xl sm:text-4xl md:text-5xl text-white uppercase tracking-tighter leading-tight mb-6">
                            STARLIGHT <br> <span class="text-gradient-cyan">AMBIENT LIGHTING</span>
                        </h2>
                        <div class="w-12 h-1 bg-gradient-to-r from-purple-500 to-cyan-600 mb-6 rounded-full"></div>
                        <p class="text-gray-400 text-sm md:text-lg leading-relaxed font-light">
                            Ciptakan suasana yang Anda inginkan melalui pencahayaan interaktif yang mengikuti alur desain kabin, menciptakan atmosfer futuristik yang menenangkan.
                        </p>
                    </div>

                    <div class="w-full lg:w-7/12 reveal-right">
                        <div class="glass-panel p-2 rounded-[2.5rem] border-purple-500/20 shadow-2xl group overflow-hidden">
                            <img src="https://assets.zyrosite.com/Yle46KEPN6IkVONg/ambient-lighting-1-YCHFgHZwRQjP7gVB.webp" alt="Ambient Lighting" class="w-full h-auto rounded-[2rem] mix-blend-lighten transform group-hover:scale-105 transition-transform duration-[2s]">
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- ==========================================
             SECTION 6: PREMIUM SOFA (LIGHT)
        =========================================== -->
        <section class="py-24 md:py-32 lg:py-48 bg-[#f5f5f7] relative z-20 overflow-hidden border-t border-gray-200 bg-noise">
            <div class="absolute top-1/2 right-0 -translate-y-1/2 w-[600px] h-[600px] bg-blue-100/60 rounded-full blur-[150px] pointer-events-none z-0"></div>

            <div class="max-w-7xl mx-auto px-6 relative z-10">
                <div class="flex flex-col lg:flex-row-reverse items-center gap-12 lg:gap-20">
                    <!-- Text Side -->
                    <div class="w-full lg:w-5/12 reveal-right">
                        <div class="inline-flex items-center gap-2 mb-6 px-4 py-2 rounded-full border border-blue-200 bg-white/50 text-blue-600 shadow-sm">
                            <span class="text-[9px] md:text-[10px] font-bold tracking-[0.3em] uppercase">Seating Comfort</span>
                        </div>
                        <h2 class="font-geely text-3xl sm:text-4xl md:text-5xl text-[#1d1d1f] uppercase tracking-tighter leading-tight mb-6">
                            CLOUD-LIKE COMFORT <br> <span class="text-gradient-cyan">PREMIUM SOFA</span>
                        </h2>
                        <div class="w-12 h-1 bg-gradient-to-r from-blue-400 to-cyan-600 mb-6 rounded-full"></div>
                        <p class="text-gray-500 text-sm md:text-lg leading-relaxed font-light">
                            The deep-reclining seats provide sofa-level comfort, so every ride feels calm, relaxed, and cared for.
                        </p>
                    </div>

                    <!-- Image Side -->
                    <div class="w-full lg:w-7/12 reveal-left delay-100">
                        <div class="glass-panel-light p-2 rounded-[2.5rem] border border-white shadow-xl group overflow-hidden">
                            <img src="https://assets.zyrosite.com/Yle46KEPN6IkVONg/interior_ex2_02-mv0P76PpwgiMvkgX.jpg" alt="Sofa Comfort" class="w-full h-auto rounded-[2rem] transform group-hover:scale-105 transition-transform duration-[2s]">
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- ==========================================
             SECTION 7: VISUAL SHOWCASE (BENTO GALLERY - DARK)
        =========================================== -->
        <section class="py-24 md:py-32 bg-[#050505] relative z-20 overflow-hidden border-t border-white/5 bg-noise">
            <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-[800px] h-[800px] bg-cyan-600/10 rounded-full blur-[150px] pointer-events-none z-0"></div>

            <div class="max-w-[1400px] mx-auto px-6 relative z-10">
                <div class="text-center mb-16 reveal-up">
                    <div class="inline-flex items-center gap-2 mb-6 px-4 py-2 rounded-full border border-cyan-500/20 bg-cyan-500/5 text-cyan-400 shadow-sm">
                        <span class="text-[9px] md:text-[10px] font-bold tracking-[0.3em] uppercase">Visual Showcase</span>
                    </div>
                    <h2 class="font-geely text-3xl sm:text-6xl text-white uppercase tracking-tighter leading-tight mb-4">
                        CRAFTED TO <span class="text-gradient-cyan">PERFECTION</span>
                    </h2>
                    <p class="text-gray-400 text-sm md:text-lg font-light max-w-2xl mx-auto">
                        Detail material premium yang menyelimuti setiap sudut kabin.
                    </p>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-12 gap-6">
                    <!-- Row 1 -->
                    <div class="md:col-span-7 glass-panel p-2 rounded-[2.5rem] border-white/10 reveal-up overflow-hidden group">
                        <img src="https://assets.zyrosite.com/Yle46KEPN6IkVONg/interior_ex2_01-mjE49a4pNXu7kyQv.jpg" alt="Interior Details" class="w-full h-[400px] object-cover rounded-[2rem] transform -scale-x-100 group-hover:scale-[-1.05] transition-transform duration-[2s]">
                    </div>
                    <div class="md:col-span-5 glass-panel p-2 rounded-[2.5rem] border-white/10 reveal-up delay-100 overflow-hidden group">
                        <img src="https://assets.zyrosite.com/Yle46KEPN6IkVONg/interior_ex2_04-d95Zg0ZwBZh2a2w5.jpg" alt="Interior Materials" class="w-full h-[400px] object-cover rounded-[2rem] group-hover:scale-105 transition-transform duration-[2s]">
                    </div>
                    <!-- Row 2 -->
                    <div class="md:col-span-5 glass-panel p-2 rounded-[2.5rem] border-white/10 reveal-up overflow-hidden group">
                        <img src="https://assets.zyrosite.com/Yle46KEPN6IkVONg/interior_ex2_05-YrD4Nv4pv6HBBQ9j.jpg" alt="Interior Texture" class="w-full h-[400px] object-cover rounded-[2rem] group-hover:scale-105 transition-transform duration-[2s]">
                    </div>
                    <div class="md:col-span-7 glass-panel p-2 rounded-[2.5rem] border-white/10 reveal-up delay-100 overflow-hidden group">
                        <img src="https://assets.zyrosite.com/Yle46KEPN6IkVONg/interior_ex2_03-mePgnZgp7DfLnz3z.jpg" alt="Interior Space" class="w-full h-[400px] object-cover rounded-[2rem] group-hover:scale-105 transition-transform duration-[2s]">
                    </div>
                </div>
            </div>
        </section>

        <!-- ==========================================
             SECTION 8: DIVE INTO THE DETAILS
        =========================================== -->
        <section id="details" class="py-24 bg-white relative z-30 border-t border-gray-200">
            <div class="absolute top-1/2 right-0 -translate-y-1/2 w-[500px] h-[500px] bg-blue-50 rounded-full blur-[150px] pointer-events-none z-0"></div>

            <div class="max-w-[1600px] w-full mx-auto px-4 sm:px-8 md:px-12 lg:px-16 relative z-10">
                <!-- Header -->
                <div class="text-center mb-12 md:mb-20 max-w-4xl mx-auto px-4 reveal-up">
                    <div class="inline-flex items-center gap-3 mb-4 px-4 py-2 rounded-full border border-gray-200 bg-gray-50 text-gray-600 shadow-sm">
                        <span class="text-[10px] tracking-[0.3em] font-bold uppercase">The Blueprint</span>
                    </div>
                    <h2 class="font-geely text-3xl sm:text-4xl md:text-5xl lg:text-7xl uppercase tracking-tighter text-gray-900 mb-6 leading-tight drop-shadow-sm">
                        Dive Into <span class="text-gradient-cyan">The Details</span>
                    </h2>
                    <p class="text-gray-500 text-xs sm:text-sm md:text-base lg:text-lg font-light leading-relaxed">
                        Lanjutkan eksplorasi Anda pada desain luar yang menawan atau telusuri lembar spesifikasi teknis lengkap dari Geely EX2.
                    </p>
                </div>

                <div class="grid grid-cols-1 lg:grid-cols-12 gap-10 lg:gap-16 items-start">
                    
                    <!-- Left: Navigation Link Cards -->
                    <div class="order-2 lg:order-1 lg:col-span-7 flex flex-col gap-4 reveal-left w-full">
                        
                        <!-- Interior Link Card -->
                        <div class="relative w-full h-[120px] sm:h-[160px] lg:h-[200px] rounded-[1.5rem] overflow-hidden group shadow-md border border-cyan-500">
                            <img src="https://assets.zyrosite.com/Yle46KEPN6IkVONg/skyline-white-YQe9py6QFEDr79dt.webp" alt="Interior" class="absolute inset-0 w-full h-full object-cover transform group-hover:scale-105 transition-transform duration-700 ease-out">
                            <div class="absolute inset-0 bg-gradient-to-r from-black/80 via-black/30 to-transparent"></div>
                            
                            <div class="absolute inset-0 p-6 md:p-8 flex items-end justify-between">
                                <div>
                                    <p class="text-cyan-400 text-[10px] uppercase font-bold tracking-widest mb-1 drop-shadow-md">Currently Viewing</p>
                                    <h3 class="text-white font-geely text-2xl md:text-4xl uppercase tracking-tighter drop-shadow-md">Interior</h3>
                                </div>
                                <div class="w-10 h-10 md:w-12 md:h-12 rounded-full bg-cyan-600 backdrop-blur-md flex items-center justify-center text-white shadow-lg">
                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                                </div>
                            </div>
                        </div>

                        <!-- Exterior Link Card -->
                        <a href="{{ route('models.ex2.exterior') }}" class="relative w-full h-[120px] sm:h-[160px] lg:h-[200px] rounded-[1.5rem] overflow-hidden group block shadow-md hover:shadow-xl transition-shadow duration-500 border border-gray-200">
                            <img src="https://assets.zyrosite.com/Yle46KEPN6IkVONg/banner_ex2b-Rcl937dqFR7EP4xN.jpg" alt="Exterior" class="absolute inset-0 w-full h-full object-cover transform group-hover:scale-105 transition-transform duration-700 ease-out">
                            <div class="absolute inset-0 bg-gradient-to-r from-black/80 via-black/30 to-transparent"></div>
                            
                            <div class="absolute inset-0 p-6 md:p-8 flex items-end justify-between">
                                <div>
                                    <p class="text-gray-300 text-[10px] uppercase font-bold tracking-widest mb-1 group-hover:text-cyan-400 transition-colors">Discover</p>
                                    <h3 class="text-white font-geely text-2xl md:text-4xl uppercase tracking-tighter drop-shadow-md">Exterior</h3>
                                </div>
                                <div class="w-10 h-10 md:w-12 md:h-12 rounded-full bg-white/20 backdrop-blur-md flex items-center justify-center text-white group-hover:bg-cyan-600 transition-colors duration-300">
                                    <svg class="w-5 h-5 transform group-hover:translate-x-1 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
                                </div>
                            </div>
                        </a>

                        <!-- Specification Link Card -->
                        <a href="{{ route('models.ex2.specification') }}" class="relative w-full h-[120px] sm:h-[160px] lg:h-[200px] rounded-[1.5rem] overflow-hidden group block shadow-md hover:shadow-xl transition-shadow duration-500 border border-gray-200">
                            <img src="https://assets.zyrosite.com/Yle46KEPN6IkVONg/gambar-9-driving-pleasure-geely-ex2-mrThxF1DGtduy9Ih.webp" alt="Specification" class="absolute inset-0 w-full h-full object-cover transform group-hover:scale-105 transition-transform duration-700 ease-out">
                            <div class="absolute inset-0 bg-gradient-to-r from-black/80 via-black/30 to-transparent"></div>
                            
                            <div class="absolute inset-0 p-6 md:p-8 flex items-end justify-between">
                                <div>
                                    <p class="text-gray-300 text-[10px] uppercase font-bold tracking-widest mb-1 group-hover:text-cyan-400 transition-colors">Learn More</p>
                                    <h3 class="text-white font-geely text-2xl md:text-4xl uppercase tracking-tighter drop-shadow-md">Specification</h3>
                                </div>
                                <div class="w-10 h-10 md:w-12 md:h-12 rounded-full bg-white/20 backdrop-blur-md flex items-center justify-center text-white group-hover:bg-cyan-600 transition-colors duration-300">
                                    <svg class="w-5 h-5 transform group-hover:translate-x-1 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
                                </div>
                            </div>
                        </a>

                    </div>

                    <!-- Right: Dimensions Box & Actions -->
                    <div class="order-1 lg:order-2 lg:col-span-5 flex flex-col gap-8 reveal-right delay-200 w-full">
                        
                        <!-- Dimensions Box -->
                        <div class="bg-gray-50 border border-gray-200 p-6 md:p-8 rounded-[1.5rem] md:rounded-[2rem] flex flex-col shadow-sm relative overflow-hidden group hover:border-gray-300 transition-colors duration-500">
                            <h4 class="text-gray-900 font-geely text-2xl md:text-3xl mb-1 relative z-10 drop-shadow-sm">Dimensions</h4>
                            <p class="text-gray-500 text-[10px] md:text-xs font-bold tracking-widest uppercase mb-8 relative z-10">(in milimeters)</p>
                            
                            <div class="grid grid-cols-2 gap-6 md:gap-8 relative z-10 mb-4">
                                <div class="border-l-2 border-cyan-500 pl-4">
                                    <p class="text-gray-500 text-[10px] uppercase tracking-wider mb-1">Length</p>
                                    <p class="font-geely text-3xl md:text-4xl text-gray-900 drop-shadow-sm">4135</p>
                                </div>
                                <div class="border-l-2 border-cyan-500 pl-4">
                                    <p class="text-gray-500 text-[10px] uppercase tracking-wider mb-1">Width</p>
                                    <p class="font-geely text-3xl md:text-4xl text-gray-900 drop-shadow-sm">1805</p>
                                </div>
                                <div class="border-l-2 border-cyan-500 pl-4">
                                    <p class="text-gray-500 text-[10px] uppercase tracking-wider mb-1">Height</p>
                                    <p class="font-geely text-3xl md:text-4xl text-gray-900 drop-shadow-sm">1580</p>
                                </div>
                                <div class="border-l-2 border-cyan-500 pl-4">
                                    <p class="text-gray-500 text-[10px] uppercase tracking-wider mb-1">Wheelbase</p>
                                    <p class="font-geely text-3xl md:text-4xl text-gray-900 drop-shadow-sm">2650</p>
                                </div>
                            </div>

                            <div class="w-full relative mt-8 mix-blend-multiply opacity-60 group-hover:opacity-80 transition-opacity duration-500">
                                <img src="https://assets.zyrosite.com/Yle46KEPN6IkVONg/sketch-ex2-9YIJTReOoLDy0jje.webp" alt="EX2 Sketch" loading="lazy" class="w-full h-auto object-contain">
                            </div>
                        </div>

                        <!-- Action Buttons -->
                        <div class="flex flex-col gap-3 w-full">
                            <a href="{{ route('models.ex2.specification') }}" class="w-full py-4 md:py-5 rounded-full bg-gray-900 text-white font-bold text-[10px] md:text-xs tracking-[0.2em] uppercase text-center hover:bg-cyan-600 transition-colors duration-300 shadow-md">
                                Show Full Specs
                            </a>
                            <div class="flex flex-col sm:flex-row gap-3 w-full">
                                <a href="#" class="w-full sm:w-1/2 py-3 md:py-4 rounded-full border border-gray-300 text-gray-700 font-bold text-[9px] md:text-[10px] tracking-widest uppercase text-center hover:bg-gray-100 transition-colors duration-300 flex items-center justify-center gap-2">
                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4"></path></svg>
                                    Brochure
                                </a>
                                <a href="{{ route('test-drive') }}" class="w-full sm:w-1/2 py-3 md:py-4 rounded-full border border-gray-300 text-gray-700 font-bold text-[9px] md:text-[10px] tracking-widest uppercase text-center hover:bg-gray-100 transition-colors duration-300 flex items-center justify-center gap-2">
                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path></svg>
                                    Book Test Drive
                                </a>
                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </section>

    </div>

    <!-- SCRIPTS -->
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const observerOptions = { threshold: 0.15 };
            const revealObserver = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.classList.add('is-revealed');
                    }
                });
            }, observerOptions);
            document.querySelectorAll('.reveal-up, .reveal-left, .reveal-right').forEach(el => revealObserver.observe(el));

            const frameInt = document.getElementById('iframe-interior');
            const nameDisplay = document.getElementById('active-interior-name');
            const swatches = document.querySelectorAll('.swatch-btn-int');

            swatches.forEach(swatch => {
                swatch.addEventListener('click', () => {
                    swatches.forEach(s => {
                        s.classList.remove('active', 'border-white', 'ring-2', 'ring-transparent', 'ring-offset-4', 'ring-offset-[#050505]');
                        s.classList.add('border-white/20');
                    });
                    swatch.classList.add('active', 'border-white', 'ring-2', 'ring-transparent', 'ring-offset-4', 'ring-offset-[#050505]');
                    swatch.classList.remove('border-white/20');
                    
                    nameDisplay.style.opacity = 0;
                    setTimeout(() => {
                        nameDisplay.textContent = swatch.getAttribute('data-name');
                        nameDisplay.style.opacity = 1;
                    }, 150);
                    
                    const panoramaUrl = swatch.getAttribute('data-src');
                    frameInt.src = `https://cdn.pannellum.org/2.5/pannellum.htm#panorama=${panoramaUrl}&autoLoad=true&autoRotate=-2`;
                });
            });
        });
    </script>
</x-layouts.app>