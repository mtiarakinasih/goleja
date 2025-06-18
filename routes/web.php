<?php

use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::get('/', function () {
    return Inertia::render('Welcome');
})->name('home');

// ✅ Semua route setelah login dan hanya untuk user dengan status 'approved'
Route::middleware(['auth', 'check.status'])->group(function () {
    Route::get('/dashboard', function () {
        return Inertia::render('Dashboard');
    })->name('dashboard');

    Route::get('/cari-kerja', function () {
        return Inertia::render('CariKerja');
    })->name('cari-kerja');

    Route::get('/artikel', function () {
        return Inertia::render('Artikel');
    })->name('artikel');

    Route::get('/perusahaan', function () {
        return Inertia::render('Perusahaan');
    })->name('perusahaan');

    Route::get('/artikel/detail', function () {
        return Inertia::render('DetailArtikel');
    })->name('detail-artikel');

    Route::get('/detail-lowongan', function () {
        return Inertia::render('DetailLowongan');
    })->name('detail-lowongan');

    Route::get('/rating-perusahaan', function () {
        return Inertia::render('ReviewPerusahaan');
    })->name('rating-perusahaan');
});

// ✅ Pastikan semua route tambahan tetap di-include
require __DIR__.'/settings.php';
require __DIR__.'/auth.php';
