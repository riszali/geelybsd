<?php

use App\Http\Middleware\TrackVisitor;
use Illuminate\Auth\AuthenticationException;
use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;
use Illuminate\Http\Request;
use Illuminate\Session\TokenMismatchException;

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__.'/../routes/web.php',
        commands: __DIR__.'/../routes/console.php',
        health: '/up',
    )
    ->withMiddleware(function (Middleware $middleware) {
        // 1. Arahkan pengguna yang belum login atau sesinya habis langsung ke form login admin
        $middleware->redirectGuestsTo('/admin/login');

        // 2. Arahkan user yang sudah terautentikasi langsung ke dashboard leads jika membuka login
        $middleware->redirectUsersTo('/admin/leads');

        // 3. Daftarkan middleware pelacak pengunjung web otomatis ke web group
        $middleware->web(append: [
            TrackVisitor::class,
        ]);

        // 4. Mendaftarkan alias middleware eksplisit agar kompatibel dengan seluruh deklarasi rute
        $middleware->alias([
            'auth'          => \Illuminate\Auth\Middleware\Authenticate::class,
            'guest'         => \Illuminate\Auth\Middleware\RedirectIfAuthenticated::class,
            'track.visitor' => TrackVisitor::class,
        ]);

        // 5. Konfigurasi Trust Proxies agar IP pengunjung terdeteksi akurat di hosting/cPanel/Cloudflare
        $middleware->trustProxies(at: '*');
    })
    ->withExceptions(function (Exceptions $exceptions) {
        // Tangani jika sesi kadaluarsa (TokenMismatchException / Error 419) agar diarahkan rapi
        $exceptions->render(function (TokenMismatchException $e, Request $request) {
            if ($request->is('admin*')) {
                return redirect()->route('admin.login')->with('error', 'Sesi login Anda telah berakhir. Silakan masuk kembali.');
            }
            return redirect()->back()->with('error', 'Halaman telah kadaluarsa, silakan muat ulang halaman.');
        });

        // Tangani AuthenticationException agar selalu mengarah ke halaman login admin Geely BSD
        $exceptions->render(function (AuthenticationException $e, Request $request) {
            if ($request->expectsJson()) {
                return response()->json(['message' => 'Unauthenticated.'], 401);
            }
            return redirect()->guest('/admin/login');
        });
    })->create();