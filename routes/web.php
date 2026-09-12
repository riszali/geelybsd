<?php

use App\Http\Controllers\AdminAuthController;
use App\Http\Controllers\AdminLeadController;
use App\Http\Controllers\LeadController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\SitemapController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Geely Indonesia - Web Routes (Full Version)
|--------------------------------------------------------------------------
| Seluruh rute publik, eksplorasi detail kendaraan (EX2, EX5, Starray, Coolray),
| API leads, autentikasi admin CRM, dan sitemap XML lengkap.
*/

// =============================================================
// 1. HALAMAN UTAMA & BRAND DISCOVERY
// =============================================================

Route::get('/', [PageController::class, 'index'])->name('home');
Route::get('/discover', [PageController::class, 'discover'])->name('discover');


// =============================================================
// 2. GRUP MODEL KENDARAAN (EX2, EX5, STARRAY EM-I, COOLRAY)
// =============================================================

Route::prefix('models')->name('models.')->group(function () {
    
    // --- GEELY EX2 ---
    Route::get('/ex2', [PageController::class, 'ex2'])->name('ex2');
    Route::get('/ex2-exterior/detail', [PageController::class, 'ex2Exterior'])->name('ex2.exterior');
    Route::get('/ex2-interior/detail', [PageController::class, 'ex2Interior'])->name('ex2.interior');
    Route::get('/ex2-specification/detail', [PageController::class, 'ex2Specification'])->name('ex2.specification');

    // --- GEELY EX5 ---
    Route::get('/ex5', [PageController::class, 'ex5'])->name('ex5');
    Route::get('/ex5-exterior/detail', [PageController::class, 'ex5Exterior'])->name('ex5.exterior');
    Route::get('/ex5-interior/detail', [PageController::class, 'ex5Interior'])->name('ex5.interior');
    Route::get('/ex5-specification/detail', [PageController::class, 'ex5Specification'])->name('ex5.specification');

    // --- GEELY STARRAY EM-I ---
    Route::get('/starray-em-i', [PageController::class, 'starray'])->name('starray');
    Route::get('/starray-exterior/detail', [PageController::class, 'starrayExterior'])->name('starray.exterior');
    Route::get('/starray-interior/detail', [PageController::class, 'starrayInterior'])->name('starray.interior');
    Route::get('/starray-specification/detail', [PageController::class, 'starraySpecification'])->name('starray.specification');

    // --- GEELY COOLRAY ---
    Route::get('/coolray', [PageController::class, 'coolray'])->name('coolray');
    Route::get('/coolray-exterior/detail', [PageController::class, 'coolrayExterior'])->name('coolray.exterior');
    Route::get('/coolray-interior/detail', [PageController::class, 'coolrayInterior'])->name('coolray.interior');
    Route::get('/coolray-specification/detail', [PageController::class, 'coolraySpecification'])->name('coolray.specification');
});


// =============================================================
// 3. FITUR INTERAKTIF & LAYANAN PELANGGAN
// =============================================================

Route::get('/test-drive', [PageController::class, 'testDrive'])->name('test-drive');
Route::get('/contact', [PageController::class, 'contact'])->name('contact');
Route::get('/credit-simulation', [PageController::class, 'creditSimulation'])->name('credit-simulation');


// =============================================================
// 4. API PENERIMA LEADS & SIMULASI
// =============================================================

Route::post('/api/leads/test-drive', [LeadController::class, 'storeTestDrive'])->name('leads.store-test-drive');
Route::post('/api/leads/credit', [LeadController::class, 'storeCreditLead'])->name('leads.store-credit');
Route::post('/api/leads', [LeadController::class, 'storeTestDrive'])->name('leads.store');


// =============================================================
// 5. ADMIN AUTENTIKASI & PORTAL CRM
// =============================================================

Route::prefix('admin')->name('admin.')->group(function () {
    
    // Auth Routes (Guest Only)
    Route::middleware('guest')->group(function () {
        Route::get('/login', [AdminAuthController::class, 'showLoginForm'])->name('login');
        Route::post('/login', [AdminAuthController::class, 'login'])->name('login.post');
    });

    // CRM Dashboard Routes (Protected by Auth)
    Route::middleware('auth')->group(function () {
        Route::post('/logout', [AdminAuthController::class, 'logout'])->name('logout');
        
        // Dashboard Leads & Live Analytics
        Route::get('/leads', [AdminLeadController::class, 'index'])->name('leads.index');
        
        // Update Pipeline Status (Mendukung kedua alias nama rute)
        Route::patch('/leads/{lead}/status', [AdminLeadController::class, 'updateStatus'])->name('leads.updateStatus');
        Route::patch('/leads/{lead}/update-status', [AdminLeadController::class, 'updateStatus'])->name('leads.update-status');
        
        // Export CSV (Mendukung kedua format rute)
        Route::get('/leads/export', [AdminLeadController::class, 'exportCsv'])->name('leads.export');
        Route::get('/leads/export/csv', [AdminLeadController::class, 'exportCsv'])->name('leads.export.csv');
    });
});


// =============================================================
// 6. SEO & XML SITEMAP
// =============================================================

Route::get('/sitemap.xml', [SitemapController::class, 'index'])->name('sitemap');