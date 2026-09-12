<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;
use Illuminate\View\View;

class AdminAuthController extends Controller
{
    /**
     * Menampilkan Halaman Formulir Login Administrator
     */
    public function showLoginForm(): View|RedirectResponse
    {
        if (Auth::check()) {
            return redirect()->route('admin.leads.index');
        }

        return view('admin.auth.login');
    }

    /**
     * Memproses Verifikasi Kredensial Login
     */
    public function login(Request $request): RedirectResponse
    {
        $credentials = $request->validate([
            'email' => ['required', 'string', 'email'],
            'password' => ['required', 'string'],
        ], [
            'email.required' => 'Email administrator wajib diisi.',
            'email.email' => 'Format alamat email tidak valid.',
            'password.required' => 'Kata sandi wajib diisi.',
        ]);

        $remember = $request->boolean('remember');

        if (Auth::attempt($credentials, $remember)) {
            $request->session()->regenerate();

            return redirect()->intended(route('admin.leads.index'))
                ->with('success', 'Autentikasi berhasil. Selamat datang di Panel CRM Geely BSD.');
        }

        throw ValidationException::withMessages([
            'email' => 'Email atau kata sandi yang Anda masukkan tidak sesuai.',
        ]);
    }

    /**
     * Mengakhiri Sesi Login Administrator
     */
    public function logout(Request $request): RedirectResponse
    {
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('admin.login')
            ->with('success', 'Sesi administrator berhasil diakhiri.');
    }
}