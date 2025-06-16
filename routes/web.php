<?php

use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::get('/', function () {
    return Inertia::render('Welcome');
})->name('home');

Route::get('dashboard', function () {
    return redirect()->route('cari-kerja');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/cari-kerja', function () {
    return Inertia::render('CariKerja');
})->middleware(['auth', 'verified'])->name('cari-kerja');

Route::get('/artikel', function () {
    return Inertia::render('Artikel');
})->middleware(['auth', 'verified'])->name('artikel');

Route::get('/perusahaan', function () {
    return Inertia::render('Perusahaan');
})->middleware(['auth', 'verified'])->name('perusahaan');

Route::get('/artikel/detail', function () {
    return Inertia::render('DetailArtikel');
})->middleware(['auth', 'verified'])->name('detail-artikel');

require __DIR__.'/settings.php';
require __DIR__.'/auth.php';
