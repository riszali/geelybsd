<x-layouts.app>
    @push('head')
        <title>Geely Coolray | Dynamic Sport SUV - Dealer Resmi Geely BSD</title>
        <meta name="description" content="Eksplorasi Geely Coolray di Dealer Resmi Geely BSD Tangerang. SUV sport dinamis bertenaga 174 PS, torsi 290 Nm, mulai IDR 333 Mio OTR Jakarta.">
        <meta name="keywords" content="Geely Coolray, Coolray BSD, Dealer Geely BSD, Geely Coolray Indonesia, Spesifikasi Coolray, Harga Geely Coolray, Test Drive Coolray Tangerang">
        <link rel="canonical" href="https://geelybsd.id/models/coolray">

        <meta property="og:type" content="website">
        <meta property="og:url" content="https://geelybsd.id/models/coolray">
        <meta property="og:title" content="Geely Coolray | Dynamic Sport SUV - Dealer Resmi Geely BSD">
        <meta property="og:description" content="SUV sporty bertenaga 1.5L Turbo 172 HP dan transmisi 7-Speed DCT siap menaklukkan jalanan. Booking test drive hari ini di Geely BSD!">
        <meta property="og:image" content="{{ asset('assets/coolray/1782976852-2artboard-2-jpg.avif') }}">

        <meta property="twitter:card" content="summary_large_image">
        <meta property="twitter:url" content="https://geelybsd.id/models/coolray">
        <meta property="twitter:title" content="Geely Coolray | Dynamic Sport SUV - Geely BSD">
        <meta property="twitter:description" content="Rasakan sensasi berkendara bertenaga turbo bersama Geely Coolray di Dealer Resmi Geely BSD.">
        <meta property="twitter:image" content="{{ asset('assets/coolray/1782976852-2artboard-2-jpg.avif') }}">
    @endpush

    <style>
        html { scroll-behavior: smooth; }

        .glass-panel-dark {
            background: rgba(18, 18, 24, 0.65);
            backdrop-filter: blur(28px);
            -webkit-backdrop-filter: blur(28px);
            border: 1px solid rgba(255, 255, 255, 0.08);
            border-top: 1px solid rgba(255, 255, 255, 0.16);
            box-shadow: 0 30px 60px rgba(0, 0, 0, 0.5), inset 0 1px 0 rgba(255, 255, 255, 0.08);
        }

        .glass-badge {
            background: rgba(255, 255, 255, 0.06);
            backdrop-filter: blur(16px);
            border: 1px solid rgba(255, 255, 255, 0.12);
        }

        .btn-shimmer-red {
            position: relative;
            overflow: hidden;
        }
        .btn-shimmer-red::after {
            content: '';
            position: absolute;
            top: -50%;
            left: -50%;
            width: 200%;
            height: 200%;
            background: linear-gradient(to right, transparent, rgba(255,255,255,0.35), transparent);
            transform: rotate(45deg) translateX(-100%);
            animation: shimmer 3s infinite cubic-bezier(0.19, 1, 0.22, 1);
        }
        @keyframes shimmer {
            100% { transform: rotate(45deg) translateX(100%); }
        }

        .reveal-up { opacity: 0; transform: translateY(50px) scale(0.98); transition: all 1s cubic-bezier(0.22, 1, 0.36, 1); }
        .reveal-left { opacity: 0; transform: translateX(-50px); transition: all 1s cubic-bezier(0.22, 1, 0.36, 1); }
        .reveal-right { opacity: 0; transform: translateX(50px); transition: all 1s cubic-bezier(0.22, 1, 0.36, 1); }
        .is-revealed { opacity: 1 !important; transform: translate(0) scale(1) !important; }

        .text-gradient-fire {
            background: linear-gradient(135deg, #f97316, #ef4444, #f43f5e);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }

        .text-gradient-cyan {
            background: linear-gradient(135deg, #06b6d4, #3b82f6);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }
    </style>

    <header class="relative min-h-[100svh] w-full flex flex-col justify-end overflow-hidden bg-[#050508] text-white pt-28 pb-12 md:pb-16">
        <!-- Background YouTube Cinematic Video Loop sebagai Latar Belakang Section -->
        <div class="absolute inset-0 z-0 overflow-hidden pointer-events-none">
            <iframe 
                id="coolray-yt-bg"
                class="absolute top-1/2 left-1/2 w-[100vw] min-w-[177.77vh] h-[56.25vw] min-h-[100vh] -translate-x-1/2 -translate-y-1/2 scale-125 md:scale-110 pointer-events-none select-none opacity-40 md:opacity-45"
                src="https://www.youtube-nocookie.com/embed/NvV7ltl8EOA?autoplay=1&mute=1&controls=0&loop=1&playlist=NvV7ltl8EOA&playsinline=1&rel=0&showinfo=0&iv_load_policy=3&disablekb=1&modestbranding=1&enablejsapi=1" 
                title="Geely Coolray Background Video"
                frameborder="0" 
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" 
                allowfullscreen>
            </iframe>
            
            <!-- Vignette & Dark Overlay agar Konten Depan Tetap Kontras dan Jelas -->
            <div class="absolute inset-0 bg-black/60"></div>
            <div class="absolute inset-0 bg-gradient-to-t from-[#050508] via-transparent to-[#050508]/80"></div>
            <div class="absolute top-1/4 left-1/2 -translate-x-1/2 -translate-y-1/2 w-[60vw] h-[60vw] bg-red-600/10 rounded-full blur-[160px]"></div>
        </div>

        <!-- Audio Sound Toggle Button -->
        <div class="absolute top-24 right-6 md:right-12 z-30">
            <button id="coolray-sound-btn" type="button" aria-label="Toggle Sound" class="glass-panel-dark px-4 py-2.5 rounded-full flex items-center gap-2 text-xs font-mono tracking-wider uppercase text-gray-300 hover:text-white hover:border-red-500/50 transition-all cursor-pointer shadow-lg group">
                <svg id="sound-off-icon" class="w-4 h-4 text-gray-400 group-hover:text-red-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5.586 15H4a1 1 0 01-1-1v-4a1 1 0 011-1h1.586l4.707-4.707C10.923 3.663 12 4.109 12 5v14c0 .891-1.077 1.337-1.707.707L5.586 15z" stroke-dasharray="2 2"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2"></path></svg>
                <svg id="sound-on-icon" class="w-4 h-4 text-red-400 hidden animate-pulse" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.536 8.464a5 5 0 010 7.072m2.828-9.9a9 9 0 010 12.728M5.586 15H4a1 1 0 01-1-1v-4a1 1 0 011-1h1.586l4.707-4.707C10.923 3.663 12 4.109 12 5v14c0 .891-1.077 1.337-1.707.707L5.586 15z"></path></svg>
                <span class="text-[10px] tracking-widest hidden sm:inline">Audio</span>
            </button>
        </div>

        <div class="relative z-10 max-w-[1600px] w-full mx-auto px-6 md:px-12 lg:px-16 flex flex-col items-center">
            
            <!-- Foto Mobil Coolray (Responsive Desktop & Mobile) dengan Judul Menempel di Dalam Foto -->
            <div class="relative w-full max-w-6xl rounded-[24px] md:rounded-[36px] overflow-hidden shadow-2xl mb-8 md:mb-10 group reveal-up border border-white/10 bg-black/40 backdrop-blur-sm">
                <picture class="w-full h-full block">
                    <source media="(max-width: 639px)" srcset="{{ asset('assets/coolray/1783072220-3_780x1688-jpg.avif') }}">
                    <source media="(min-width: 640px)" srcset="{{ asset('assets/coolray/1782976852-2artboard-2-jpg.avif') }}">
                    <img 
                        src="{{ asset('assets/coolray/1782976852-2artboard-2-jpg.avif') }}" 
                        alt="Geely Coolray Dynamic Sport SUV - Dealer Resmi Geely BSD" 
                        class="w-full h-auto aspect-[4/5] sm:aspect-[16/9] lg:aspect-[21/9] object-cover object-center transform group-hover:scale-102 transition-transform duration-[2s] ease-out"
                    >
                </picture>

                <div class="absolute inset-0 bg-gradient-to-t from-black/85 via-black/15 to-transparent pointer-events-none"></div>

                <!-- Judul Menempel Langsung di Atas Foto Mobil -->
                <div class="absolute bottom-5 left-5 right-5 sm:bottom-7 sm:left-8 md:bottom-8 md:left-10 z-10 max-w-4xl text-left pointer-events-none">
                    <span class="font-geely text-[10px] sm:text-xs md:text-sm font-bold tracking-[0.25em] text-white/90 uppercase block mb-1 drop-shadow-[0_2px_8px_rgba(0,0,0,0.9)]">
                        GEELY COOLRAY
                    </span>
                    <h1 class="font-geely text-lg sm:text-2xl md:text-3xl lg:text-4xl font-bold uppercase tracking-tight text-white leading-tight drop-shadow-[0_4px_16px_rgba(0,0,0,0.95)]">
                        DRIVE AHEAD, FEEL ALIVE
                    </h1>
                </div>
            </div>

            <!-- Stats & Pricing Strip (174ps, 290Nm, Standard IDR 333 Mio, Flagship IDR 377 Mio) -->
            <div class="w-full max-w-6xl text-left mb-8 md:mb-10 reveal-up">
                <div class="grid grid-cols-2 lg:grid-cols-4 gap-6 sm:gap-8 pt-6 border-t border-white/20">
                    
                    <!-- Column 1: Max Power -->
                    <div class="flex flex-col justify-end">
                        <div class="font-geely text-3xl sm:text-4xl md:text-5xl font-bold tracking-tight text-white leading-none mb-1.5 drop-shadow-[0_2px_10px_rgba(0,0,0,0.8)]">
                            174<span class="text-xl sm:text-2xl font-sans font-medium text-gray-200">ps</span>
                        </div>
                        <span class="text-gray-300 text-xs sm:text-sm font-normal drop-shadow-sm">Max Power</span>
                    </div>

                    <!-- Column 2: Max Torque -->
                    <div class="flex flex-col justify-end">
                        <div class="font-geely text-3xl sm:text-4xl md:text-5xl font-bold tracking-tight text-white leading-none mb-1.5 drop-shadow-[0_2px_10px_rgba(0,0,0,0.8)]">
                            290<span class="text-xl sm:text-2xl font-sans font-medium text-gray-200">Nm</span>
                        </div>
                        <span class="text-gray-300 text-xs sm:text-sm font-normal drop-shadow-sm">Max torque</span>
                    </div>

                    <!-- Column 3: Standard Variant Price -->
                    <div class="flex flex-col justify-end">
                        <span class="text-gray-300 text-xs sm:text-sm font-normal mb-1 drop-shadow-sm">Standard</span>
                        <div class="font-geely text-2xl sm:text-3xl md:text-[34px] lg:text-[38px] font-bold tracking-tight text-white leading-none mb-1.5 whitespace-nowrap drop-shadow-[0_2px_10px_rgba(0,0,0,0.8)]">
                            IDR 333 Mio
                        </div>
                        <span class="text-gray-400 text-[11px] sm:text-xs font-normal drop-shadow-sm">OTR Jakarta</span>
                    </div>

                    <!-- Column 4: Flagship Variant Price -->
                    <div class="flex flex-col justify-end">
                        <span class="text-gray-300 text-xs sm:text-sm font-normal mb-1 drop-shadow-sm">Flagship</span>
                        <div class="font-geely text-2xl sm:text-3xl md:text-[34px] lg:text-[38px] font-bold tracking-tight text-white leading-none mb-1.5 whitespace-nowrap drop-shadow-[0_2px_10px_rgba(0,0,0,0.8)]">
                            IDR 377 Mio
                        </div>
                        <span class="text-gray-400 text-[11px] sm:text-xs font-normal drop-shadow-sm">OTR Jakarta</span>
                    </div>

                </div>
            </div>

            <!-- Call-to-Action Action Buttons -->
            <div class="w-full max-w-6xl flex flex-col sm:flex-row items-start sm:items-center gap-4 md:gap-6 reveal-up">
                <a href="{{ route('test-drive') }}" title="Booking Test Drive Geely Coolray" class="btn-shimmer-red flex items-center justify-center gap-3 bg-gradient-to-r from-red-600 via-red-500 to-orange-500 text-white px-10 py-4 md:py-5 rounded-full font-bold text-[10px] md:text-[11px] tracking-[0.2em] uppercase transition-all duration-500 hover:scale-105 shadow-[0_10px_35px_rgba(239,68,68,0.5)] w-full sm:w-auto">
                    <span>Book Test Drive</span>
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path></svg>
                </a>
                <a href="{{ route('credit-simulation') }}" title="Simulasi Kredit Geely Coolray" class="glass-panel-dark flex items-center justify-center gap-3 text-white hover:text-red-400 px-10 py-4 md:py-5 rounded-full font-bold text-[10px] md:text-[11px] tracking-[0.2em] uppercase transition-all duration-300 hover:border-red-500/40 w-full sm:w-auto">
                    <span>Simulasi Kredit</span>
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
                </a>
            </div>

        </div>
    </header>

    <section class="py-24 lg:py-36 bg-[#060609] relative overflow-hidden">
        <div class="absolute top-1/2 right-0 w-[500px] h-[500px] bg-red-600/10 rounded-full blur-[140px] pointer-events-none"></div>

        <div class="max-w-[1600px] mx-auto px-6 md:px-12 lg:px-16 relative z-10">
            
            <div class="flex flex-col md:flex-row justify-between items-start md:items-end mb-16 gap-6 reveal-up">
                <div>
                    <div class="inline-flex items-center gap-3 mb-4">
                        <div class="w-10 h-[2px] bg-red-500"></div>
                        <span class="text-red-400 text-[10px] font-bold tracking-[0.4em] uppercase">Innovation & Engineering</span>
                    </div>
                    <h2 class="font-geely text-4xl sm:text-5xl md:text-6xl uppercase tracking-tighter text-white leading-[0.9]">
                        BUILT TO <br>
                        <span class="text-gradient-fire">THRILL EVERY TURN</span>
                    </h2>
                </div>
                <p class="text-gray-400 text-sm md:text-base font-light max-w-md">
                    Setiap lekukan bodi Geely Coolray diciptakan untuk membelah angin dengan koefisien aerodinamis optimal, dipadu dengan platform BMA modular berstandar global.
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                
                <!-- Feature 1: BMA Platform -->
                <div class="glass-panel-dark rounded-[24px] md:rounded-[32px] p-8 md:p-10 flex flex-col justify-between reveal-up group hover:border-red-500/30 transition-all duration-500">
                    <div>
                        <div class="flex items-center justify-between mb-8 pb-4 border-b border-white/10">
                            <span class="font-mono text-3xl md:text-4xl font-extrabold tracking-tighter text-white/20 group-hover:text-red-500 transition-colors">01</span>
                            <span class="px-3 py-1 rounded-full bg-white/5 border border-white/10 text-[9px] font-mono tracking-[0.25em] text-red-400 uppercase">Architecture</span>
                        </div>
                        <h3 class="font-geely text-2xl text-white uppercase mb-3">BMA Modular Platform</h3>
                        <p class="text-gray-400 text-sm leading-relaxed font-light">
                            Arsitektur sasis modular kelas dunia yang menyatukan kekakuan torsional tinggi dengan bobot yang ringan untuk pengendalian lincah dan presisi tinggi di setiap tikungan.
                        </p>
                    </div>
                    <div class="mt-8 pt-6 border-t border-white/10 flex items-center justify-between text-gray-400 text-xs">
                        <span>Chassis Rigidity</span>
                        <span class="text-red-400 font-mono font-bold">+20% Stiffer</span>
                    </div>
                </div>

                <!-- Feature 2: Quad Exhaust & Aerodynamic Spoiler -->
                <div class="glass-panel-dark rounded-[24px] md:rounded-[32px] p-8 md:p-10 flex flex-col justify-between reveal-up delay-100 group hover:border-orange-500/30 transition-all duration-500">
                    <div>
                        <div class="flex items-center justify-between mb-8 pb-4 border-b border-white/10">
                            <span class="font-mono text-3xl md:text-4xl font-extrabold tracking-tighter text-white/20 group-hover:text-orange-500 transition-colors">02</span>
                            <span class="px-3 py-1 rounded-full bg-white/5 border border-white/10 text-[9px] font-mono tracking-[0.25em] text-orange-400 uppercase">Aerodynamics</span>
                        </div>
                        <h3 class="font-geely text-2xl text-white uppercase mb-3">Sport Quad Exhaust</h3>
                        <p class="text-gray-400 text-sm leading-relaxed font-light">
                            Ujung knalpot ganda empat lubang asli dipadu dengan carbon-fiber style diffuser dan rear spoiler aerodinamis yang menegaskan aura balap sejati.
                        </p>
                    </div>
                    <div class="mt-8 pt-6 border-t border-white/10 flex items-center justify-between text-gray-400 text-xs">
                        <span>Aero Downforce</span>
                        <span class="text-orange-400 font-mono font-bold">Optimized Stance</span>
                    </div>
                </div>

                <!-- Feature 3: Smart Cockpit -->
                <div class="glass-panel-dark rounded-[24px] md:rounded-[32px] p-8 md:p-10 flex flex-col justify-between reveal-up delay-200 group hover:border-cyan-500/30 transition-all duration-500">
                    <div>
                        <div class="flex items-center justify-between mb-8 pb-4 border-b border-white/10">
                            <span class="font-mono text-3xl md:text-4xl font-extrabold tracking-tighter text-white/20 group-hover:text-cyan-400 transition-colors">03</span>
                            <span class="px-3 py-1 rounded-full bg-white/5 border border-white/10 text-[9px] font-mono tracking-[0.25em] text-cyan-400 uppercase">Intelligence</span>
                        </div>
                        <h3 class="font-geely text-2xl text-white uppercase mb-3">Dual Screen Cockpit</h3>
                        <p class="text-gray-400 text-sm leading-relaxed font-light">
                            Layar panel instrumen digital 10.25 inci terintegrasi dengan layar sentuh infotainment 12.3 inci beresolusi tinggi, mendukung konektivitas mulus dan kamera 540° transparan.
                        </p>
                    </div>
                    <div class="mt-8 pt-6 border-t border-white/10 flex items-center justify-between text-gray-400 text-xs">
                        <span>Camera View</span>
                        <span class="text-cyan-400 font-mono font-bold">540° Panoramic</span>
                    </div>
                </div>

            </div>

        </div>
    </section>

    <section class="py-24 lg:py-36 bg-[#040406] text-white relative">
        <div class="max-w-[1600px] mx-auto px-6 md:px-12 lg:px-16">
            
            <div class="glass-panel-dark rounded-[28px] md:rounded-[44px] p-8 md:p-16 lg:p-20 relative overflow-hidden reveal-up">
                <div class="absolute -top-24 -left-24 w-96 h-96 bg-red-600/15 rounded-full blur-[100px] pointer-events-none"></div>

                <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 items-center">
                    
                    <div class="lg:col-span-6 space-y-6">
                        <div class="inline-flex items-center gap-3 px-3.5 py-1.5 rounded-full border border-white/10 bg-white/5 text-[9px] tracking-widest uppercase font-mono text-gray-300">
                            Driving Dynamics
                        </div>
                        <h2 class="font-geely text-3xl sm:text-4xl md:text-5xl uppercase tracking-tighter leading-tight text-white">
                            Empat Mode Berkendara <br>
                            <span class="text-gradient-fire">Sesuai Kepribadian Anda</span>
                        </h2>
                        <p class="text-gray-400 text-sm md:text-base leading-relaxed font-light">
                            Ubah karakteristik respon pedal gas, berat kemudi, dan pergantian gigi dalam sekejap melalui tombol rotary drive-mode konsol tengah:
                        </p>

                        <div class="grid grid-cols-2 gap-4 pt-2">
                            <div class="p-4 rounded-2xl bg-white/5 border border-white/5">
                                <h4 class="font-geely text-lg text-white mb-1">SPORT</h4>
                                <p class="text-gray-400 text-xs">Respon throttle instan dan bobot kemudi lebih mantap.</p>
                            </div>
                            <div class="p-4 rounded-2xl bg-white/5 border border-white/5">
                                <h4 class="font-geely text-lg text-white mb-1">COMFORT</h4>
                                <p class="text-gray-400 text-xs">Penyaluran tenaga lembut ideal untuk jalanan kota harian.</p>
                            </div>
                            <div class="p-4 rounded-2xl bg-white/5 border border-white/5">
                                <h4 class="font-geely text-lg text-white mb-1">ECO</h4>
                                <p class="text-gray-400 text-xs">Efisiensi konsumsi bahan bakar maksimal jarak jauh.</p>
                            </div>
                            <div class="p-4 rounded-2xl bg-white/5 border border-white/5">
                                <h4 class="font-geely text-lg text-white mb-1">ADAPTIVE</h4>
                                <p class="text-gray-400 text-xs">Kecerdasan buatan membaca gaya berkendara otomatis.</p>
                            </div>
                        </div>
                    </div>

                    <div class="lg:col-span-6 flex flex-col justify-center items-center text-center p-8 rounded-[24px] bg-gradient-to-b from-white/5 to-transparent border border-white/10">
                        <span class="text-red-400 text-[10px] font-mono tracking-widest uppercase mb-2">Exclusive Dealer Showroom</span>
                        <h3 class="font-geely text-2xl sm:text-3xl uppercase text-white mb-4">Siap Mencoba Geely Coolray?</h3>
                        <p class="text-gray-400 text-xs md:text-sm font-light max-w-md mb-8">
                            Dapatkan kesempatan merasakan langsung sensasi tenaga 1.5 Turbo Geely Coolray di rute test drive khusus Dealer Geely BSD City, Tangerang Selatan.
                        </p>
                        
                        <div class="flex flex-col sm:flex-row gap-4 w-full sm:w-auto">
                            <a href="{{ route('test-drive') }}" class="btn-shimmer-red px-8 py-4 rounded-full bg-red-600 hover:bg-red-500 text-white font-bold text-[10px] tracking-[0.2em] uppercase transition-all shadow-lg">
                                Jadwalkan Test Drive
                            </a>
                            <a href="https://wa.me/628111234567?text=Halo%20Geely%20BSD,%20saya%20tertarik%20dengan%20Geely%20Coolray" target="_blank" rel="noopener noreferrer" class="px-8 py-4 rounded-full border border-white/20 hover:border-white/40 text-white font-bold text-[10px] tracking-[0.2em] uppercase transition-all">
                                Chat via WhatsApp
                            </a>
                        </div>
                    </div>

                </div>

            </div>

        </div>
    </section>

    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const observer = new IntersectionObserver((entries, obs) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.classList.add('is-revealed');
                        obs.unobserve(entry.target);
                    }
                });
            }, { threshold: 0.15 });

            document.querySelectorAll('.reveal-up, .reveal-left, .reveal-right').forEach(el => observer.observe(el));

            // YouTube Audio Sound Toggle
            const soundBtn = document.getElementById('coolray-sound-btn');
            const soundOffIcon = document.getElementById('sound-off-icon');
            const soundOnIcon = document.getElementById('sound-on-icon');
            const ytBg = document.getElementById('coolray-yt-bg');
            let isMuted = true;

            if (soundBtn && ytBg) {
                soundBtn.addEventListener('click', () => {
                    isMuted = !isMuted;
                    const funcName = isMuted ? 'mute' : 'unMute';
                    ytBg.contentWindow.postMessage(JSON.stringify({ event: 'command', func: funcName }), '*');
                    
                    if (isMuted) {
                        soundOnIcon.classList.add('hidden');
                        soundOffIcon.classList.remove('hidden');
                    } else {
                        soundOffIcon.classList.add('hidden');
                        soundOnIcon.classList.remove('hidden');
                    }
                });
            }
        });
    </script>

    <script type="application/ld+json">
    {
      "@@context": "https://schema.org",
      "@@type": "Car",
      "name": "Geely Coolray",
      "manufacturer": {
        "@@type": "Organization",
        "name": "Geely Auto"
      },
      "model": "Coolray",
      "bodyType": "SUV",
      "vehicleTransmission": "7-Speed Wet Dual Clutch Transmission (DCT)",
      "vehicleEngine": {
        "@@type": "EngineSpecification",
        "name": "1.5L Turbocharged Direct Injection",
        "enginePower": "172 HP"
      },
      "image": "{{ asset('assets/coolray/1782976852-2artboard-2-jpg.avif') }}",
      "url": "https://geelybsd.id/models/coolray"
    }
    </script>
</x-layouts.app>