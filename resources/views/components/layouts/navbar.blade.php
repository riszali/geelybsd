<nav class="fixed top-0 left-0 w-full z-50 transition-all duration-500 bg-white/40 backdrop-blur-2xl backdrop-saturate-[1.5] border-b border-white/60 shadow-[0_8px_32px_rgba(0,0,0,0.06)]">
    <div class="absolute inset-0 bg-gradient-to-b from-white/60 to-transparent pointer-events-none"></div>
    
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-50">
        <div class="flex justify-end lg:justify-between items-center h-20 relative">
            <div class="absolute left-1/2 top-1/2 -translate-x-1/2 -translate-y-1/2 lg:static lg:translate-x-0 lg:translate-y-0 flex-shrink-0 z-50">
                <a href="{{ route('home') }}" class="group block relative">
                    <div class="absolute -inset-2 bg-white/40 rounded-full blur-md opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
                    <img class="h-10 md:h-12 w-auto relative z-10 transition-transform duration-500 group-hover:scale-105" 
                         src="https://assets.zyrosite.com/Yle46KEPN6IkVONg/geely-2023-logo-png_seeklogo-466890-vE98MawSY4Jx911O.png" 
                         alt="Geely Logo">
                </a>
            </div>

            <!-- Menu Desktop -->
            <div class="hidden lg:flex space-x-10 items-center">
                <a href="{{ route('home') }}" class="font-geely text-[11px] font-bold tracking-[0.2em] text-gray-800 hover:text-blue-600 transition-colors uppercase relative group">
                    Discover
                    <span class="absolute -bottom-2 left-1/2 w-0 h-[2px] bg-blue-600 group-hover:w-full group-hover:left-0 transition-all duration-300"></span>
                </a>
                
                @php
                    $models = [
                        [
                            'name' => 'EX2', 
                            'url' => route('models.ex2'),
                            'exterior_url' => route('models.ex2.exterior'),
                            'interior_url' => route('models.ex2.interior'),
                            'specs_url' => route('models.ex2.specification'),
                        ],
                        [
                            'name' => 'EX5', 
                            'url' => route('models.ex5'),
                            'exterior_url' => route('models.ex5.exterior'),
                            'interior_url' => route('models.ex5.interior'),
                            'specs_url' => route('models.ex5.specification'),
                        ],
                        [
                            'name' => 'STARRAY EM-i', 
                            'url' => route('models.starray'),
                            'exterior_url' => route('models.starray.exterior'),
                            'interior_url' => route('models.starray.interior'),
                            'specs_url' => route('models.starray.specification'),
                        ]
                    ];
                @endphp

                @foreach($models as $model)
                <div class="relative group cursor-pointer py-6">
                    <a href="{{ $model['url'] }}" class="flex items-center font-geely text-[11px] font-bold tracking-[0.2em] text-gray-800 group-hover:text-blue-600 transition-colors uppercase relative">
                        {{ $model['name'] }}
                        <svg class="ml-1 w-4 h-4 transform group-hover:-rotate-180 transition-transform duration-500 text-gray-400 group-hover:text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                        <span class="absolute -bottom-2 left-1/2 w-0 h-[2px] bg-blue-600 group-hover:w-full group-hover:left-0 transition-all duration-300"></span>
                    </a>
                    
                    <div class="absolute left-1/2 -translate-x-1/2 top-full mt-0 w-56 bg-white/70 backdrop-blur-3xl shadow-[0_20px_50px_rgba(0,0,0,0.15)] opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-500 border border-white/60 rounded-2xl overflow-hidden transform translate-y-4 group-hover:translate-y-0">
                        <div class="relative z-10 py-3">
                            <a href="{{ $model['exterior_url'] }}" class="block px-6 py-3 text-[10px] font-bold text-gray-600 hover:bg-white/80 hover:text-blue-600 uppercase tracking-[0.2em] transition-all duration-300 hover:pl-8">Exterior</a>
                            <a href="{{ $model['interior_url'] }}" class="block px-6 py-3 text-[10px] font-bold text-gray-600 hover:bg-white/80 hover:text-blue-600 uppercase tracking-[0.2em] transition-all duration-300 hover:pl-8">Interior</a>
                            <a href="{{ $model['specs_url'] }}" class="block px-6 py-3 text-[10px] font-bold text-gray-600 hover:bg-white/80 hover:text-blue-600 uppercase tracking-[0.2em] transition-all duration-300 hover:pl-8">Specification</a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>

            <div class="hidden lg:flex items-center space-x-8">
                <a href="{{ route('test-drive') }}" class="font-geely text-[11px] font-bold tracking-[0.2em] text-gray-800 hover:text-blue-600 transition-colors uppercase relative group">
                    Test Drive
                    <span class="absolute -bottom-2 left-1/2 w-0 h-[2px] bg-blue-600 group-hover:w-full group-hover:left-0 transition-all duration-300"></span>
                </a>
                <a href="{{ route('credit-simulation') }}" class="relative overflow-hidden group font-geely bg-blue-600 text-white px-8 py-3.5 rounded-full text-[10px] font-bold tracking-[0.2em] transition-all duration-500 shadow-[0_10px_20px_rgba(37,99,235,0.3)] hover:shadow-[0_15px_30px_rgba(37,99,235,0.5)] hover:-translate-y-1 uppercase">
                    <span class="relative z-10 flex items-center gap-2">
                        Credit Simulations
                        <svg class="w-3.5 h-3.5 transform group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path></svg>
                    </span>
                </a>
            </div>

            <!-- Mobile Menu Button (Glassmorphism Style) -->
            <div class="flex items-center lg:hidden relative z-50">
                <button id="mobile-menu-btn" class="relative w-11 h-11 flex items-center justify-center focus:outline-none text-gray-800 z-50 bg-white/40 backdrop-blur-xl border border-white/60 rounded-full shadow-[0_8px_32px_rgba(0,0,0,0.08)] hover:bg-white/60 transition-all duration-300">
                    <svg id="icon-menu" class="w-5 h-5 absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 transition-all duration-300 opacity-100" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                    </svg>
                    <svg id="icon-close" class="w-5 h-5 absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 transition-all duration-300 opacity-0 scale-50" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <div id="mobile-menu" class="fixed inset-0 h-[100svh] w-full bg-white/90 backdrop-blur-3xl z-40 opacity-0 pointer-events-none transition-all duration-700 ease-[cubic-bezier(0.7,0,0.3,1)] flex flex-col justify-between pt-24 pb-8 lg:hidden overflow-y-auto">
        
        <div id="mobile-menu-content" class="px-6 flex flex-col space-y-6 transform translate-y-10 transition-transform duration-700 ease-out delay-100">
            <a href="{{ route('home') }}" class="font-geely text-3xl font-bold tracking-tighter text-gray-900 uppercase pb-4 border-b border-gray-200/80">Home</a>
            
            <div class="space-y-4 pt-2">
                <p class="text-[10px] font-bold tracking-widest text-blue-600 uppercase mb-4">Our Lineup</p>
                
                @foreach($models as $model)
                <div class="bg-gray-50/80 border border-gray-200/60 rounded-[1.5rem] p-5 transition-all shadow-sm">
                    <a href="{{ $model['url'] }}" class="flex justify-between items-center group">
                        <span class="font-geely text-xl font-bold tracking-tight text-gray-900 uppercase">{{ $model['name'] }}</span>
                        <div class="w-8 h-8 rounded-full bg-white shadow-sm flex items-center justify-center text-blue-600 border border-gray-100 group-hover:scale-110 transition-transform">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
                        </div>
                    </a>
                    
                    <div class="flex gap-2 mt-5 pt-4 border-t border-gray-200/60">
                        <a href="{{ $model['exterior_url'] }}" class="px-2 py-2.5 rounded-full bg-white border border-gray-200/80 text-[9px] font-bold text-gray-600 hover:text-blue-600 hover:border-blue-200 uppercase tracking-widest flex-1 text-center shadow-[0_2px_10px_rgba(0,0,0,0.02)] transition-colors">Exterior</a>
                        <a href="{{ $model['interior_url'] }}" class="px-2 py-2.5 rounded-full bg-white border border-gray-200/80 text-[9px] font-bold text-gray-600 hover:text-blue-600 hover:border-blue-200 uppercase tracking-widest flex-1 text-center shadow-[0_2px_10px_rgba(0,0,0,0.02)] transition-colors">Interior</a>
                        <a href="{{ $model['specs_url'] }}" class="px-2 py-2.5 rounded-full bg-white border border-gray-200/80 text-[9px] font-bold text-gray-600 hover:text-blue-600 hover:border-blue-200 uppercase tracking-widest flex-1 text-center shadow-[0_2px_10px_rgba(0,0,0,0.02)] transition-colors">Specs</a>
                    </div>
                </div>
                @endforeach
            </div>
            
            <a href="{{ route('test-drive') }}" class="font-geely text-2xl font-bold tracking-tighter text-gray-900 uppercase pt-4 border-t border-gray-200/80">Test Drive</a>
        </div>

        <div id="mobile-menu-footer" class="px-6 mt-8 transform translate-y-10 transition-transform duration-700 ease-out delay-200">
            <a href="{{ route('credit-simulation') }}" class="w-full flex items-center justify-center gap-3 bg-gray-900 text-white py-4 md:py-5 rounded-2xl font-geely text-xs font-bold tracking-widest uppercase shadow-[0_10px_30px_rgba(0,0,0,0.2)] active:scale-95 transition-transform">
                Credit Simulation 
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path></svg>
            </a>
        </div>
    </div>
</nav>

<script>
    document.addEventListener('DOMContentLoaded', () => {
        const btn = document.getElementById('mobile-menu-btn');
        const menu = document.getElementById('mobile-menu');
        const iconMenu = document.getElementById('icon-menu');
        const iconClose = document.getElementById('icon-close');

        const menuContent = document.getElementById('mobile-menu-content');
        const menuFooter = document.getElementById('mobile-menu-footer');

        btn.addEventListener('click', () => {
            const isOpen = menu.classList.contains('opacity-100');
            
            if (isOpen) {
                menu.classList.replace('opacity-100', 'opacity-0');
                menu.classList.add('pointer-events-none');
                
                iconMenu.classList.remove('opacity-0', 'scale-50');
                iconMenu.classList.add('opacity-100');
                iconClose.classList.remove('opacity-100');
                iconClose.classList.add('opacity-0', 'scale-50');
                
                document.body.style.overflow = '';
                
                if (menuContent) {
                    menuContent.classList.add('translate-y-10');
                    menuContent.classList.remove('translate-y-0');
                }
                if (menuFooter) {
                    menuFooter.classList.add('translate-y-10');
                    menuFooter.classList.remove('translate-y-0');
                }
            } else {
                menu.classList.replace('opacity-0', 'opacity-100');
                menu.classList.remove('pointer-events-none');
                
                iconMenu.classList.remove('opacity-100');
                iconMenu.classList.add('opacity-0', 'scale-50');
                iconClose.classList.remove('opacity-0', 'scale-50');
                iconClose.classList.add('opacity-100');
                
                document.body.style.overflow = 'hidden';
                
                if (menuContent) {
                    menuContent.classList.remove('translate-y-10');
                    menuContent.classList.add('translate-y-0');
                }
                if (menuFooter) {
                    menuFooter.classList.remove('translate-y-10');
                    menuFooter.classList.add('translate-y-0');
                }
            }
        });
    });
</script>