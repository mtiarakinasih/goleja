<?php

use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

// Halaman utama (welcome)
Route::get('/', function () {
    if (auth()->check()) {
        $user = auth()->user();

        if ($user->role === 'pelamar') {
            return redirect()->route('cari-kerja');
        } elseif ($user->role === 'perusahaan') {
            return redirect()->route('detail-perusahaan');
        }
    }

    return Inertia::render('Welcome');
})->name('home');

// Semua route hanya untuk user yang sudah login & status 'approved'
Route::middleware(['auth', 'check.status'])->group(function () {

    // ✅ Dashboard akan redirect ke halaman sesuai role
    Route::get('/dashboard', function () {
        $user = auth()->user();

        if ($user->role === 'pelamar') {
            return redirect()->route('cari-kerja');
        } elseif ($user->role === 'perusahaan') {
            return redirect()->route('detail-perusahaan');
        }

        // Kalau admin atau lainnya, tampilkan dashboard default
        return Inertia::render('Dashboard');
    })->name('dashboard');

    // 🔽 Route untuk pelamar
    Route::get('/cari-kerja', fn () => Inertia::render('CariKerja'))->name('cari-kerja');
    Route::get('/artikel', fn () => Inertia::render('Artikel'))->name('artikel');
    Route::get('/artikel/detail', fn () => Inertia::render('DetailArtikel'))->name('detail-artikel');
    Route::get('/detail-lowongan', fn () => Inertia::render('DetailLowongan'))->name('detail-lowongan');
    Route::get('/rating-perusahaan', fn () => Inertia::render('ReviewPerusahaan'))->name('rating-perusahaan');
    Route::get('/lamar-pekerjaan', fn () => Inertia::render('LamarKerja'))->name('lamar-pekerjaan');

    // 🔽 Route untuk perusahaan
    Route::get('/detail-perusahaan', fn () => Inertia::render('DetailPerusahaan'))->name('detail-perusahaan');
    Route::get('/lowongan-perusahaan', fn () => Inertia::render('LowonganPerusahaan'))->name('lowongan-perusahaan');

    // 🔽 Umum (jika dipakai oleh semua)
    Route::get('/perusahaan', fn () => Inertia::render('Perusahaan'))->name('perusahaan');
});

// Sertakan file tambahan
require __DIR__.'/settings.php';
require __DIR__.'/auth.php';
