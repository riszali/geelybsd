<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login CRM Portal | Geely BSD</title>
    
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
            font-family: 'Inter', sans-serif;
            background-color: #03060a;
            color: #ffffff;
        }

        .font-geely {
            font-family: 'Geely', sans-serif;
        }

        .crm-card {
            background: #0d131a;
            border: 1px solid rgba(255, 255, 255, 0.08);
            border-radius: 42px;
            box-shadow: 0 40px 100px -20px rgba(0, 0, 0, 0.9), 0 0 50px -10px rgba(0, 180, 216, 0.08);
        }

        .input-pill {
            background-color: #edf2f9;
            color: #0d131a;
            border-radius: 20px;
            transition: all 0.2s ease;
        }

        .input-pill:focus-within {
            box-shadow: 0 0 0 3px rgba(0, 180, 216, 0.4);
            background-color: #ffffff;
        }

        .input-pill input {
            background: transparent;
            color: #0f172a;
            font-weight: 500;
        }

        .input-pill input::placeholder {
            color: #94a3b8;
        }

        .btn-cyan-action {
            background: #00b4d8;
            color: #000000;
            border-radius: 18px;
            font-weight: 800;
            letter-spacing: 0.15em;
            transition: all 0.25s ease;
            box-shadow: 0 10px 25px -5px rgba(0, 180, 216, 0.5);
        }

        .btn-cyan-action:hover {
            background: #00c4e8;
            box-shadow: 0 15px 35px -5px rgba(0, 180, 216, 0.7);
            transform: translateY(-1px);
        }

        .btn-cyan-action:active {
            transform: translateY(1px);
            box-shadow: 0 5px 15px -3px rgba(0, 180, 216, 0.4);
        }

        .custom-checkbox {
            appearance: none;
            -webkit-appearance: none;
            width: 17px;
            height: 17px;
            border-radius: 4px;
            background-color: #ffffff;
            display: inline-grid;
            place-content: center;
            cursor: pointer;
            margin: 0;
        }

        .custom-checkbox:checked {
            background-color: #00b4d8;
        }

        .custom-checkbox:checked::before {
            content: "";
            width: 9px;
            height: 9px;
            clip-path: polygon(14% 44%, 0 65%, 50% 100%, 100% 16%, 80% 0%, 43% 62%);
            transform: scale(1);
            background-color: #000000;
        }
    </style>
</head>
<body class="min-h-screen flex items-center justify-center p-4 selection:bg-[#00b4d8] selection:text-black">

    <div class="w-full max-w-[490px] crm-card px-8 sm:px-12 py-12 relative overflow-hidden">
        
        <!-- Subtle Glow Effect -->
        <div class="absolute -top-24 -left-24 w-56 h-56 bg-cyan-500/10 rounded-full blur-[70px] pointer-events-none"></div>

        <!-- Geely Brand Logo -->
        <div class="flex justify-center mb-8">
            <img 
                src="{{ asset('assets/footer-logos-geely.png') }}" 
                alt="Geely Logo" 
                class="h-16 sm:h-20 w-auto object-contain drop-shadow-[0_0_20px_rgba(255,255,255,0.15)]"
            >
        </div>

        <!-- Headline & Subtitle -->
        <div class="text-center mb-8">
            <h1 class="font-geely text-2xl sm:text-3xl font-extrabold tracking-normal uppercase text-white leading-tight">
                Geely BSD <span class="text-[#00b4d8]">CRM Portal</span>
            </h1>
            <p class="text-[13px] text-gray-400 mt-2 font-normal leading-relaxed">
                Masuk untuk mengelola prospek, follow-up leads, & pipeline penjualan.
            </p>
        </div>

        <!-- Alert Notification -->
        @if(session('error'))
            <div class="mb-6 p-3.5 rounded-2xl bg-red-500/10 border border-red-500/30 text-red-400 text-xs flex items-center gap-3">
                <svg class="w-4 h-4 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z"/></svg>
                <span>{{ session('error') }}</span>
            </div>
        @endif

        @if($errors->any())
            <div class="mb-6 p-3.5 rounded-2xl bg-red-500/10 border border-red-500/30 text-red-400 text-xs">
                <ul class="list-disc list-inside space-y-1">
                    @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <!-- Form Login -->
        <form action="{{ route('admin.login.post') }}" method="POST" class="space-y-6">
            @csrf

            <!-- Alamat Email -->
            <div class="space-y-2.5">
                <label class="block text-[11px] font-bold tracking-[0.2em] uppercase text-gray-400 pl-1">
                    Alamat Email
                </label>
                <div class="input-pill flex items-center px-4 py-3.5 gap-3">
                    <span class="text-gray-500 font-semibold text-base select-none pl-1">@</span>
                    <input 
                        type="email" 
                        name="email" 
                        value="{{ old('email') }}" 
                        required 
                        autofocus 
                        placeholder="nama@email.com" 
                        class="w-full text-sm outline-none border-none ring-0 focus:ring-0"
                    >
                </div>
            </div>

            <!-- Kata Sandi -->
            <div class="space-y-2.5">
                <label class="block text-[11px] font-bold tracking-[0.2em] uppercase text-gray-400 pl-1">
                    Kata Sandi
                </label>
                <div class="input-pill flex items-center px-4 py-3.5 gap-3">
                    <svg class="w-4 h-4 text-gray-500 shrink-0 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"/>
                    </svg>
                    <input 
                        type="password" 
                        name="password" 
                        required 
                        placeholder="••••••••••••" 
                        class="w-full text-sm outline-none border-none ring-0 focus:ring-0"
                    >
                </div>
            </div>

            <!-- Remember Me -->
            <div class="flex items-center gap-3 pt-1 pl-1">
                <input type="checkbox" name="remember" id="remember" class="custom-checkbox">
                <label for="remember" class="text-xs text-gray-400 select-none cursor-pointer font-normal">
                    Ingat perangkat ini
                </label>
            </div>

            <!-- Action Button -->
            <div class="pt-3">
                <button type="submit" class="btn-cyan-action w-full py-4 text-xs uppercase flex items-center justify-center gap-2">
                    <span>Akses Dashboard CRM</span>
                    <svg class="w-4 h-4 stroke-[3]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M14 5l7 7m0 0l-7 7m7-7H3"/>
                    </svg>
                </button>
            </div>
        </form>

        <!-- Footer Back Link -->
        <div class="mt-8 text-center border-t border-white/5 pt-6">
            <a href="/" class="text-xs text-gray-500 hover:text-gray-300 transition-colors inline-flex items-center gap-2">
                <span>&larr;</span> Kembali ke Website Geely BSD
            </a>
        </div>

    </div>

</body>
</html>