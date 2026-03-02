<x-layouts.app>
    <!-- ==========================================
         ULTRA-PREMIUM MIXED THEME STYLES
    =========================================== -->
    <style>
        /* Base Resets & Smooth Scrolling - Default Dark */
        html, body { 
            scroll-behavior: smooth; 
            background-color: #050505; 
            color: #ffffff;
            overflow-x: clip; 
            max-width: 100vw; 
            font-family: 'Inter', sans-serif;
        }

        /* Safe Responsive Heights */
        .viewer-container { aspect-ratio: 16 / 9; height: auto; width: 100%; }
        @media (min-width: 768px) {
            .viewer-container { aspect-ratio: auto; height: 60vh; min-height: 500px; }
        }

        /* Advanced Cinematic Noise */
        .bg-noise::before {
            content: "";
            position: absolute;
            inset: 0;
            background-image: url("data:image/svg+xml,%3Csvg viewBox='0 0 200 200' xmlns='http://www.w3.org/2000/svg'%3E%3Cfilter id='noiseFilter'%3E%3CfeTurbulence type='fractalNoise' baseFrequency='0.8' numOctaves='3' stitchTiles='stitch'/%3E%3C/filter%3E%3Crect width='100%25' height='100%25' filter='url(%23noiseFilter)' opacity='0.05'/%3E%3C/svg%3E");
            pointer-events: none;
            z-index: 1;
            mix-blend-mode: overlay;
        }

        /* Default Dark Glass Panel */
        .glass-panel {
            background: linear-gradient(135deg, rgba(25, 25, 30, 0.4) 0%, rgba(25, 25, 30, 0.1) 100%);
            backdrop-filter: blur(24px) saturate(150%);
            -webkit-backdrop-filter: blur(24px) saturate(150%);
            border: 1px solid rgba(255, 255, 255, 0.1);
            border-top: 1px solid rgba(255, 255, 255, 0.2);
            box-shadow: 0 30px 60px rgba(0, 0, 0, 0.6), inset 0 1px 0 rgba(255, 255, 255, 0.1);
            position: relative;
            overflow: hidden;
            transition: all 0.5s ease;
        }

        .glass-panel:hover {
            border-color: rgba(34, 211, 238, 0.4);
            box-shadow: 0 30px 60px rgba(0, 0, 0, 0.6), 0 0 40px rgba(34, 211, 238, 0.15), inset 0 1px 0 rgba(255, 255, 255, 0.2);
        }

        /* Light Glass Panel for Design Section */
        .glass-panel-light {
            background: rgba(255, 255, 255, 0.5);
            backdrop-filter: blur(24px) saturate(180%);
            -webkit-backdrop-filter: blur(24px) saturate(180%);
            border: 1px solid rgba(0, 0, 0, 0.05);
            border-top: 1px solid rgba(255, 255, 255, 0.8);
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.04);
            color: #1d1d1f;
        }

        /* Liquid Text Gradient */
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

        /* Scroll Reveals */
        .reveal-up { opacity: 0; transform: translateY(40px); transition: all 1s cubic-bezier(0.25, 1, 0.5, 1); }
        .reveal-left { opacity: 0; transform: translateX(-40px); transition: all 1s cubic-bezier(0.25, 1, 0.5, 1); }
        .reveal-right { opacity: 0; transform: translateX(40px); transition: all 1s cubic-bezier(0.25, 1, 0.5, 1); }
        .is-revealed { opacity: 1 !important; transform: translate(0) !important; }
        
        .delay-100 { transition-delay: 100ms; }
        .delay-200 { transition-delay: 200ms; }

        /* Swatch Buttons */
        .swatch-btn {
            border: 2px solid rgba(255, 255, 255, 0.2) !important;
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1) !important;
            cursor: pointer;
            transform: scale(0.9);
        }
        .swatch-btn.active {
            transform: scale(1.2) !important;
            border-color: #fff !important;
            box-shadow: 0 0 20px rgba(34, 211, 238, 0.6);
        }

        .btn-shimmer {
            background: #ffffff;
            color: #000000;
            position: relative;
            overflow: hidden;
        }
        .btn-shimmer::after {
            content: '';
            position: absolute;
            top: -50%; left: -50%;
            width: 200%; height: 200%;
            background: linear-gradient(to right, transparent, rgba(255,255,255,0.8), transparent);
            transform: rotate(45deg) translateX(-100%);
            animation: shimmer 3s infinite;
        }
        @keyframes shimmer { 100% { transform: rotate(45deg) translateX(100%); } }
    </style>

    <div class="w-full overflow-x-clip bg-[#050505]">

        <!-- ==========================================
             SECTION 1: HERO (DARK AMBIENT - SMALLER TEXT)
        =========================================== -->
        <section class="relative min-h-[100svh] w-full flex flex-col justify-center items-center overflow-hidden py-24 lg:py-32 bg-noise">
            <div class="absolute inset-0 z-0 bg-[#050505]">
                <img src="https://assets.zyrosite.com/Yle46KEPN6IkVONg/banner_ex2b-Rcl937dqFR7EP4xN.jpg" alt="Ambient Blur" class="absolute inset-0 w-full h-full object-cover opacity-60 blur-[80px] transform scale-125">
                <div class="absolute top-0 left-0 w-[500px] h-[500px] bg-pink-600/20 rounded-full blur-[120px]"></div>
                <div class="absolute bottom-0 right-0 w-[600px] h-[600px] bg-cyan-600/20 rounded-full blur-[150px]"></div>
            </div>

            <div class="relative z-20 w-full max-w-7xl mx-auto px-6 text-center mb-8 md:mb-12">
                <div class="inline-flex items-center gap-3 mb-6 px-5 py-2.5 rounded-full border border-pink-500/30 bg-pink-500/10 backdrop-blur-xl reveal-up">
                    <span class="text-pink-300 text-[8px] md:text-[10px] tracking-[0.4em] font-bold uppercase">Dynamic Exterior</span>
                </div>

                <h1 class="font-geely text-2xl sm:text-3xl md:text-4xl lg:text-5xl text-white uppercase leading-[1.1] tracking-tighter mb-6 reveal-up delay-100 max-w-5xl mx-auto">
                    A SYMPHONY OF <span class="text-liquid">COLOR</span> <br> AND FUTURISTIC FORM
                </h1>
                
                <p class="text-gray-400 text-xs md:text-base font-light tracking-wide uppercase reveal-up delay-200 max-w-2xl mx-auto">
                    Keseimbangan sempurna antara gaya urban yang ceria dan teknologi pencahayaan yang canggih.
                </p>
            </div>

            <div class="relative z-20 w-full max-w-5xl mx-auto px-4 sm:px-6 reveal-up delay-300">
                <div class="glass-panel p-2 md:p-3 rounded-[2rem] md:rounded-[2.5rem] border border-white/20">
                    <div class="relative w-full aspect-video md:aspect-[21/9] rounded-[1.5rem] md:rounded-[2rem] overflow-hidden">
                        <img src="https://assets.zyrosite.com/Yle46KEPN6IkVONg/banner_ex2b-Rcl937dqFR7EP4xN.jpg" alt="EX2 Exterior" class="w-full h-full object-cover">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/60 via-transparent to-transparent"></div>
                    </div>
                </div>
            </div>
        </section>

        <!-- ==========================================
             SECTION 2: 360 EXTERIOR VIEWER (DARK MODE)
        =========================================== -->
        <section class="py-20 md:py-32 bg-[#050505] relative z-30 overflow-hidden border-t border-white/10 bg-noise">
            <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-[800px] h-[400px] bg-cyan-600/10 rounded-full blur-[150px]"></div>

            <div class="max-w-7xl mx-auto px-4 md:px-6 relative z-10 text-center">
                <div class="reveal-up mb-12 md:mb-16">
                    <h2 class="font-geely text-3xl sm:text-5xl md:text-6xl lg:text-7xl uppercase tracking-tighter text-white mb-4">
                        CHOOSE YOUR <span class="text-gradient-cyan">EX2</span>
                    </h2>
                    <p class="text-gray-400 text-xs sm:text-sm md:text-base font-light tracking-wide max-w-2xl mx-auto leading-relaxed">
                        Tersedia dalam berbagai pilihan warna yang mencerminkan kepribadian dinamis Anda.
                    </p>
                </div>
                
                <div class="flex flex-col items-center justify-center gap-4 reveal-up delay-100 mb-8">
                    <div class="h-6">
                        <p id="active-color-name" class="text-cyan-400 text-[10px] md:text-xs font-bold tracking-[0.3em] uppercase transition-opacity duration-300">Pearl White</p>
                    </div>
                    
                    <div id="swatches-exterior" class="flex flex-wrap justify-center gap-4 md:gap-6 glass-panel p-3 rounded-full border-white/10">
                        <button class="swatch-btn active w-10 h-10 md:w-12 md:h-12 rounded-full" style="background-color: #f8f9fa;" data-src="https://riszali.sirv.com/Spins/ex2/White.spin" data-name="Pearl White"></button>
                        <button class="swatch-btn w-10 h-10 md:w-12 md:h-12 rounded-full" style="background-color: #ffd1dc;" data-src="https://riszali.sirv.com/Spins/ex2/IceBerryPink.spin" data-name="Ice Berry Pink"></button>
                        <button class="swatch-btn w-10 h-10 md:w-12 md:h-12 rounded-full" style="background-color: #e3dac9;" data-src="https://riszali.sirv.com/Spins/ex2/NebullaBeigi.spin" data-name="Nebulla Beige"></button>
                        <button class="swatch-btn w-10 h-10 md:w-12 md:h-12 rounded-full" style="background-color: #9cd1e8;" data-src="https://riszali.sirv.com/Spins/ex2/SeaSaltBlue%20().spin" data-name="Sea Salt Blue"></button>
                        <button class="swatch-btn w-10 h-10 md:w-12 md:h-12 rounded-full" style="background-color: #7b8084;" data-src="https://riszali.sirv.com/Spins/ex2/Comet%20grey%20().spin" data-name="Comet Grey"></button>
                        <button class="swatch-btn w-10 h-10 md:w-12 md:h-12 rounded-full" style="background-color: #c0c0c0;" data-src="https://riszali.sirv.com/Spins/ex2/Starsilver.spin" data-name="Star Silver"></button>
                    </div>
                </div>

                <div class="glass-panel p-2 md:p-4 rounded-[2.5rem] md:rounded-[3rem] reveal-up delay-200 w-full relative z-10 viewer-container border-white/20 shadow-2xl">
                    <div class="relative w-full h-full rounded-[2rem] overflow-hidden bg-black/40">
                        <iframe id="iframe-exterior" src="https://riszali.sirv.com/Spins/ex2/White.spin" class="absolute top-1/2 left-1/2 w-[110%] h-[110%] -translate-x-1/2 -translate-y-1/2 border-0 z-10" allowfullscreen></iframe>
                    </div>
                </div>
            </div>
        </section>

        <!-- ==========================================
             SECTION 3: STICKY BLUEPRINT DESIGN (DARK)
        =========================================== -->
        <section class="relative w-full bg-[#050505] bg-noise">
            <div class="sticky top-0 w-full h-[100vh] z-0 overflow-hidden">
                <img src="https://assets.zyrosite.com/Yle46KEPN6IkVONg/sketch-ex2-9YIJTReOoLDy0jje.webp" alt="Design Architecture" class="w-full h-full object-contain opacity-30 invert">
                <div class="absolute inset-0 bg-gradient-to-t from-[#050505] via-transparent to-[#050505]"></div>
            </div>

            <div class="relative z-10 w-full">
                <div class="h-[80vh] md:h-[100vh]"></div>
                <div class="w-full max-w-7xl mx-auto px-6 pb-[30vh]">
                    <div class="glass-panel p-8 md:p-12 lg:p-16 rounded-[2.5rem] max-w-3xl ml-auto reveal-up border border-pink-400/30">
                        <div class="inline-flex items-center gap-3 mb-6 px-4 py-2 rounded-full border border-pink-400/50 bg-pink-500/10 text-pink-300">
                            <span class="text-[10px] tracking-[0.3em] font-bold uppercase">Award Winning Design</span>
                        </div>
                        <h2 class="font-geely text-2xl sm:text-4xl md:text-5xl text-white uppercase tracking-tighter mb-6 leading-tight">
                            PLAYFUL <br> <span class="text-gradient-cyan">URBAN AESTHETICS</span>
                        </h2>
                        <p class="text-gray-400 text-sm md:text-lg leading-relaxed font-light">
                            Geely EX2 memadukan gaya hidup modern dengan fungsionalitas cerdas. Pemenang European Product Design Award ini membuktikan bahwa kendaraan elektrik bisa tampil berani, ekspresif, dan tetap efisien.
                        </p>
                    </div>
                </div>
            </div>
        </section>

        <!-- ==========================================
             SECTION 4: DESIGN PHILOSOPHY (LIGHT)
        =========================================== -->
        <section class="py-24 md:py-32 lg:py-48 bg-[#f5f5f7] relative z-20 overflow-hidden border-t border-gray-200 bg-noise">
            <!-- Soft pastel glows for light theme -->
            <div class="absolute top-1/2 left-0 -translate-y-1/2 w-[600px] h-[600px] bg-blue-100/50 rounded-full blur-[150px] pointer-events-none z-0"></div>
            <div class="absolute bottom-0 right-0 w-[500px] h-[500px] bg-rose-100/50 rounded-full blur-[150px] pointer-events-none z-0"></div>

            <div class="max-w-7xl mx-auto px-6 relative z-10">
                <div class="text-center mb-16 md:mb-24 reveal-up">
                    <div class="inline-flex items-center gap-3 mb-4 px-4 py-2 rounded-full border border-blue-200 bg-white/50 text-blue-600 shadow-sm">
                        <span class="text-[10px] tracking-[0.3em] font-bold uppercase">Philosophy</span>
                    </div>
                    <h2 class="font-geely text-3xl sm:text-5xl md:text-6xl lg:text-7xl tracking-tighter text-[#1d1d1f] leading-tight uppercase mb-6">
                        DESIGN THAT <br class="hidden md:block"> DEFINES <span class="text-liquid">EVERY DETAIL</span>
                    </h2>
                    <p class="text-gray-500 text-xs sm:text-sm md:text-base lg:text-lg font-light leading-relaxed max-w-3xl mx-auto">
                        Geely EX2 menggabungkan proporsi klasik, garis dinamis, dan pencahayaan khas untuk menciptakan tampilan yang berani dan seimbang yang terasa abadi sekaligus baru.
                    </p>
                </div>

                <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 items-stretch">
                    <div class="lg:col-span-8 reveal-left">
                        <div class="glass-panel p-2 rounded-[2.5rem] border-white overflow-hidden group shadow-lg">
                            <div class="relative aspect-[16/9] lg:aspect-[21/9] rounded-[2rem] overflow-hidden">
                                <img src="https://assets.zyrosite.com/Yle46KEPN6IkVONg/lp_ex2_01_new-1-q13wSwvb7HLpOlq9.jpg" alt="Geely EX2 Design Highlight" class="w-full h-full object-cover transition-transform duration-[2000ms] group-hover:scale-105">
                                <div class="absolute inset-0 bg-gradient-to-t from-white/20 via-transparent to-transparent"></div>
                            </div>
                        </div>
                    </div>

                    <div class="lg:col-span-4 flex flex-col justify-center reveal-right delay-200">
                        <div class="glass-panel-light p-8 md:p-10 rounded-[2.5rem] border-blue-100 bg-white/80 relative overflow-hidden h-full flex flex-col justify-center shadow-md">
                            <div class="absolute -top-20 -right-20 w-40 h-40 bg-blue-100/50 rounded-full blur-[60px]"></div>
                            <span class="text-blue-600 font-geely text-4xl md:text-5xl mb-4 block">0.618</span>
                            <h3 class="font-geely text-2xl md:text-3xl text-[#1d1d1f] uppercase tracking-tighter mb-4 leading-tight">
                                GOLDEN <br> <span class="text-gradient-cyan">RATIO</span>
                            </h3>
                            <div class="w-12 h-1 bg-gradient-to-r from-blue-400 to-cyan-600 mb-6 rounded-full"></div>
                            <p class="text-gray-500 text-sm md:text-base leading-relaxed font-light">
                                The 0.618 Golden Ratio shapes a visually balanced stance and a smoother aerodynamic profile that elevates both style and performance.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- ==========================================
             SECTION 5: LED HEADLIGHTS (DARK)
        =========================================== -->
        <section class="py-24 md:py-32 bg-[#050505] relative z-20 overflow-hidden border-t border-white/5">
            <div class="max-w-7xl mx-auto px-6">
                <div class="flex flex-col lg:flex-row-reverse items-center gap-12 lg:gap-20">
                    <div class="w-full lg:w-1/2 reveal-right">
                        <div class="inline-flex items-center gap-2 mb-6 px-4 py-2 rounded-full border border-blue-500/20 bg-blue-500/5 text-blue-300">
                            <span class="text-[9px] md:text-[10px] font-bold tracking-[0.3em] uppercase">Intelligence Lighting</span>
                        </div>
                        <h2 class="font-geely text-3xl sm:text-4xl md:text-5xl text-white uppercase tracking-tighter leading-tight mb-6">
                            FEATHER-INSPIRED <br> <span class="text-gradient-cyan">LED HEADLIGHTS</span>
                        </h2>
                        <p class="text-gray-400 text-sm md:text-lg leading-relaxed font-light mb-10">
                            Lampu depan LED dengan teknologi lampu jauh adaptif menerangi jalan hingga 170 meter ke depan dan selebar 22 meter.
                        </p>
                        
                        <div class="grid grid-cols-2 gap-6 opacity-80">
                            <div class="p-5 rounded-2xl glass-panel border-white/5">
                                <p class="text-cyan-400 font-geely text-3xl mb-1">170m</p>
                                <p class="text-gray-500 text-[9px] uppercase tracking-widest font-bold">Far Range</p>
                            </div>
                            <div class="p-5 rounded-2xl glass-panel border-white/5">
                                <p class="text-white font-geely text-3xl mb-1">22m</p>
                                <p class="text-gray-500 text-[9px] uppercase tracking-widest font-bold">Wide Beam</p>
                            </div>
                        </div>
                    </div>

                    <div class="w-full lg:w-1/2 reveal-left">
                        <div class="glass-panel p-2 rounded-[2.5rem] border-white/10 overflow-hidden group shadow-2xl">
                            <img src="https://assets.zyrosite.com/Yle46KEPN6IkVONg/lp_ex2_02_indo-1jQVDabXPa2GTqAg.jpg" alt="EX2 LED Headlights" class="w-full h-auto rounded-[2rem] transition-transform duration-[2000ms] group-hover:scale-105">
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- ==========================================
             SECTION 6: WHEELS (LIGHT SECTION)
        =========================================== -->
        <section class="py-24 md:py-32 bg-[#f5f5f7] relative z-20 overflow-hidden border-t border-gray-200 bg-noise">
            <!-- Subtle blue glow for light theme -->
            <div class="absolute top-1/2 right-0 -translate-y-1/2 w-[500px] h-[500px] bg-blue-100/50 rounded-full blur-[150px] pointer-events-none z-0"></div>

            <div class="max-w-7xl mx-auto px-6 relative z-10">
                <div class="flex flex-col lg:flex-row items-center gap-12 lg:gap-20">
                    <!-- Text Side (Left) -->
                    <div class="w-full lg:w-1/2 reveal-left">
                        <div class="inline-flex items-center gap-2 mb-6 px-4 py-2 rounded-full border border-blue-200 bg-white/50 text-blue-600 shadow-sm">
                            <span class="text-[9px] md:text-[10px] font-bold tracking-[0.3em] uppercase">Dynamic Stance</span>
                        </div>
                        <h2 class="font-geely text-3xl sm:text-4xl md:text-5xl text-[#1d1d1f] uppercase tracking-tighter leading-tight mb-6">
                            16 INCH <br> <span class="text-gradient-cyan">CLOVERLEAF-INSPIRED WHEELS</span>
                        </h2>
                        <p class="text-gray-500 text-sm md:text-lg leading-relaxed font-light mb-10">
                            Terinspirasi oleh simetri organik bentuk daun semanggi, roda berukuran 16 inci ini mewujudkan keseimbangan, energi, dan gaya abadi di setiap belokan.
                        </p>
                    </div>

                    <!-- Image Side (Right) -->
                    <div class="w-full lg:w-1/2 reveal-right delay-100">
                        <div class="glass-panel-light p-2 rounded-[2.5rem] border border-white overflow-hidden group shadow-lg">
                            <img src="https://assets.zyrosite.com/Yle46KEPN6IkVONg/geely-ex2-wheels-TAYE4pXuR33qQUOu.jpg" alt="16 Inch Cloverleaf Wheels" class="w-full h-auto rounded-[2rem] transition-transform duration-[2000ms] group-hover:scale-105">
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- ==========================================
             SECTION 7: CAGE BODY (CINEMATIC FULL CARD)
        =========================================== -->
        <section class="py-24 md:py-32 bg-[#050505] relative z-20 overflow-hidden border-t border-white/5">
            <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-[600px] h-[600px] bg-orange-600/10 rounded-full blur-[150px] pointer-events-none z-0"></div>

            <div class="max-w-[1400px] mx-auto px-4 md:px-6 relative z-10">
                <!-- Panoramic Cinematic Card -->
                <div class="relative w-full rounded-[2.5rem] md:rounded-[3rem] overflow-hidden border border-orange-500/20 shadow-[0_0_50px_rgba(234,88,12,0.05)] group">
                    
                    <!-- Background Image Cover -->
                    <div class="absolute inset-0 bg-[#08080a]"></div>
                    <img src="https://assets.zyrosite.com/Yle46KEPN6IkVONg/geely-ex2---vehicle-architecture-2DbmJoNAygKH9Fo7.jpg" 
                         alt="Cage Body Structure" 
                         class="w-full h-[550px] md:h-[650px] lg:h-[750px] object-cover object-center opacity-60 group-hover:opacity-80 transition-all duration-[2000ms] mix-blend-lighten scale-105 group-hover:scale-100">
                    
                    <!-- Depth Gradients for Readability -->
                    <div class="absolute inset-0 bg-gradient-to-r from-[#050505]/90 via-[#050505]/60 to-transparent"></div>
                    <div class="absolute inset-0 bg-gradient-to-t from-[#050505]/80 via-transparent to-transparent"></div>

                    <!-- Floating Content -->
                    <div class="absolute inset-0 p-8 md:p-12 lg:p-20 flex flex-col justify-end lg:justify-center w-full lg:w-1/2 z-10">
                        <div class="reveal-left">
                            <div class="inline-flex items-center gap-2 mb-6 px-4 py-2 rounded-full border border-orange-500/30 bg-orange-500/10 text-orange-400 backdrop-blur-md">
                                <span class="text-[9px] md:text-[10px] font-bold tracking-[0.3em] uppercase">Core Safety</span>
                            </div>
                            <h2 class="font-geely text-4xl sm:text-5xl md:text-7xl text-white uppercase tracking-tighter leading-tight mb-6 drop-shadow-2xl">
                                <span class="text-orange-400">CAGE</span> <br> BODY
                            </h2>
                            <div class="w-16 h-1 bg-gradient-to-r from-orange-500 to-red-600 mb-6 rounded-full shadow-[0_0_15px_rgba(234,88,12,0.5)]"></div>
                            <p class="text-gray-300 text-sm md:text-lg leading-relaxed font-light drop-shadow-md max-w-md">
                                Rangka bodi berkekuatan tinggi meningkatkan kekakuan dan mendistribusikan gaya benturan secara merata, menjaga keselamatan penumpang dalam setiap situasi.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- ==========================================
             SECTION 8: HIGH-STRENGTH FRAME (ASYMMETRICAL OVERLAP)
        =========================================== -->
        <section class="py-24 md:py-32 bg-[#08080a] relative z-20 overflow-hidden border-t border-white/5">
            <div class="absolute top-0 right-0 w-[600px] h-[600px] bg-cyan-600/10 rounded-full blur-[150px] pointer-events-none z-0"></div>

            <div class="max-w-[1500px] mx-auto relative z-10">
                <div class="relative flex flex-col lg:flex-row items-center justify-end min-h-[500px] lg:min-h-[600px]">
                    
                    <!-- Image Wrapper (Left side, bleeds to edge) -->
                    <div class="lg:absolute lg:left-0 lg:top-0 w-full lg:w-[65%] h-[350px] lg:h-full z-0 reveal-left">
                        <div class="w-full h-full relative lg:rounded-r-[3rem] overflow-hidden glass-panel border-l-0 border-y-0 border-r border-cyan-500/20 shadow-2xl">
                            <div class="absolute inset-0 bg-cyan-500/10 mix-blend-overlay z-10 pointer-events-none"></div>
                            <img src="https://assets.zyrosite.com/Yle46KEPN6IkVONg/geely-ex2---tri-directional-structure-eJ1ix5FWjzTtiNMR.jpg" 
                                 alt="High-Strength Frame" 
                                 class="w-full h-full object-cover transition-transform duration-[3000ms] hover:scale-105 opacity-80 mix-blend-lighten">
                            <!-- Right-to-left gradient to blend image smoothly -->
                            <div class="absolute inset-0 bg-gradient-to-t lg:bg-gradient-to-l from-[#08080a] via-[#08080a]/40 to-transparent z-10 pointer-events-none"></div>
                        </div>
                    </div>

                    <!-- Text Card (Overlapping on Right) -->
                    <div class="w-full lg:w-1/2 px-6 lg:px-12 relative z-10 -mt-16 lg:mt-0 reveal-right delay-100">
                        <div class="glass-panel p-8 md:p-12 lg:p-14 rounded-[2.5rem] border-cyan-400/30 bg-[#08080a]/80 backdrop-blur-2xl shadow-[0_30px_80px_rgba(8,145,178,0.15)] relative overflow-hidden">
                            <!-- Internal glow -->
                            <div class="absolute -top-20 -left-20 w-40 h-40 bg-cyan-500/20 rounded-full blur-[60px] pointer-events-none"></div>
                            
                            <div class="inline-flex items-center gap-2 mb-6 px-4 py-2 rounded-full border border-cyan-500/30 bg-cyan-500/10 text-cyan-400">
                                <span class="text-[9px] md:text-[10px] font-bold tracking-[0.3em] uppercase">Structural Integrity</span>
                            </div>
                            <h2 class="font-geely text-2xl sm:text-3xl md:text-4xl lg:text-5xl text-white uppercase tracking-tighter leading-tight mb-6 drop-shadow-lg">
                                HIGH-STRENGTH <br> <span class="text-gradient-cyan">FRAME</span>
                            </h2>
                            <div class="w-12 h-1 bg-gradient-to-r from-cyan-400 to-blue-600 mb-6 rounded-full shadow-[0_0_15px_rgba(34,211,238,0.5)]"></div>
                            <p class="text-gray-400 text-sm md:text-base lg:text-lg leading-relaxed font-light">
                                Rangka berkekuatan tinggi meningkatkan kekakuan dan stabilitas keseluruhan, memberikan perlindungan yang kokoh dan penanganan yang presisi.
                            </p>
                        </div>
                    </div>

                </div>
            </div>
        </section>

        <!-- ==========================================
             SECTION 9: REAR SUB-FRAME PROTECTION (DARK - INDIGO ACCENT)
        =========================================== -->
        <section class="py-24 md:py-32 bg-[#050505] relative z-20 overflow-hidden border-t border-white/5">
            <div class="absolute bottom-0 right-0 w-[400px] h-[400px] bg-indigo-600/10 rounded-full blur-[120px] pointer-events-none z-0"></div>

            <div class="max-w-7xl mx-auto px-6 relative z-10">
                <div class="flex flex-col lg:flex-row-reverse items-center gap-12 lg:gap-20">
                    <!-- Text Side (Right) -->
                    <div class="w-full lg:w-5/12 reveal-right">
                        <div class="inline-flex items-center gap-2 mb-6 px-4 py-2 rounded-full border border-indigo-500/20 bg-indigo-500/5 text-indigo-400">
                            <span class="text-[9px] md:text-[10px] font-bold tracking-[0.3em] uppercase">Impact Absorption</span>
                        </div>
                        <h2 class="font-geely text-3xl sm:text-4xl md:text-5xl text-white uppercase tracking-tighter leading-tight mb-6">
                            REAR <span class="text-indigo-400">SUB-FRAME</span> <br> PROTECTION
                        </h2>
                        <div class="w-12 h-1 bg-gradient-to-r from-indigo-500 to-purple-600 mb-6 rounded-full"></div>
                        <p class="text-gray-400 text-sm md:text-lg leading-relaxed font-light">
                            Rangka bawah belakang yang diperkuat menambahkan lapisan perlindungan ekstra, membantu menyerap benturan dan melindungi komponen-komponen penting dalam tabrakan.
                        </p>
                    </div>

                    <!-- Image Side (Left) -->
                    <div class="w-full lg:w-7/12 reveal-left delay-100">
                        <div class="glass-panel p-2 rounded-[2.5rem] border-indigo-500/20 overflow-hidden group shadow-[0_20px_50px_rgba(79,70,229,0.05)]">
                            <img src="https://assets.zyrosite.com/Yle46KEPN6IkVONg/geely-ex2---rear-subprotection-frame-MlES29BzY3UTLzl8.jpg" alt="Rear Sub-Frame Protection" class="w-full h-auto rounded-[2rem] transition-transform duration-[2000ms] group-hover:scale-105 opacity-90 group-hover:opacity-100 mix-blend-lighten">
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- ==========================================
             SECTION 10: DIVE INTO THE DETAILS (ORIGINAL EX2 STYLE)
        =========================================== -->
        <section id="details" class="py-16 md:py-24 lg:py-32 relative z-30 bg-white overflow-hidden border-t border-gray-200">
            <!-- Optional subtle glow for light theme -->
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
                        Dapatkan pandangan lebih dekat pada fitur-fitur canggih dan spesifikasi Geely EX2, yang dirancang untuk menetapkan standar baru kendaraan elektrik urban.
                    </p>
                </div>

                <div class="grid grid-cols-1 lg:grid-cols-12 gap-10 lg:gap-16 items-start">
                    
                    <!-- Left: Navigation Link Cards -->
                    <div class="order-2 lg:order-1 lg:col-span-7 flex flex-col gap-4 reveal-left w-full">
                        
                        <!-- Exterior Link Card (Active/Current) -->
                        <div class="relative w-full h-[120px] sm:h-[160px] lg:h-[200px] rounded-[1.5rem] overflow-hidden group shadow-md border border-cyan-500">
                            <img src="https://assets.zyrosite.com/Yle46KEPN6IkVONg/banner_ex2b-Rcl937dqFR7EP4xN.jpg" alt="Exterior" class="absolute inset-0 w-full h-full object-cover transform group-hover:scale-105 transition-transform duration-700 ease-out">
                            <div class="absolute inset-0 bg-gradient-to-r from-black/80 via-black/30 to-transparent"></div>
                            
                            <div class="absolute inset-0 p-6 md:p-8 flex items-end justify-between">
                                <div>
                                    <p class="text-cyan-400 text-[10px] uppercase font-bold tracking-widest mb-1 drop-shadow-md">Currently Viewing</p>
                                    <h3 class="text-white font-geely text-2xl md:text-4xl uppercase tracking-tighter drop-shadow-md">Exterior</h3>
                                </div>
                                <div class="w-10 h-10 md:w-12 md:h-12 rounded-full bg-cyan-600 backdrop-blur-md flex items-center justify-center text-white shadow-lg">
                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                                </div>
                            </div>
                        </div>

                        <!-- Interior Link Card -->
                        <a href="{{ route('models.ex2') }}#discover" class="relative w-full h-[120px] sm:h-[160px] lg:h-[200px] rounded-[1.5rem] overflow-hidden group block shadow-md hover:shadow-xl transition-shadow duration-500 border border-gray-200">
                            <img src="https://assets.zyrosite.com/Yle46KEPN6IkVONg/skyline-white-YQe9py6QFEDr79dt.webp" alt="Interior" class="absolute inset-0 w-full h-full object-cover transform group-hover:scale-105 transition-transform duration-700 ease-out">
                            <div class="absolute inset-0 bg-gradient-to-r from-black/80 via-black/30 to-transparent"></div>
                            
                            <div class="absolute inset-0 p-6 md:p-8 flex items-end justify-between">
                                <div>
                                    <p class="text-gray-300 text-[10px] uppercase font-bold tracking-widest mb-1 group-hover:text-cyan-400 transition-colors">Discover</p>
                                    <h3 class="text-white font-geely text-2xl md:text-4xl uppercase tracking-tighter drop-shadow-md">Interior</h3>
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
                        
                        <!-- Dimensions Box (Light Mode Style) -->
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

                        <!-- Action Buttons (Original EX2 Style) -->
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

            const frameExt = document.getElementById('iframe-exterior');
            const colorNameDisplay = document.getElementById('active-color-name');
            const swatches = document.querySelectorAll('.swatch-btn');

            swatches.forEach(swatch => {
                swatch.addEventListener('click', () => {
                    swatches.forEach(s => s.classList.remove('active'));
                    swatch.classList.add('active');
                    colorNameDisplay.style.opacity = 0;
                    setTimeout(() => {
                        colorNameDisplay.textContent = swatch.getAttribute('data-name');
                        colorNameDisplay.style.opacity = 1;
                    }, 150);
                    frameExt.src = swatch.getAttribute('data-src');
                });
            });
        });
    </script>
</x-layouts.app>