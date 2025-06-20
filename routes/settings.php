<?php

use App\Http\Controllers\Settings\PasswordController;
use App\Http\Controllers\Settings\ProfileController;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::middleware('auth')->group(function () {
    Route::redirect('settings', '/settings/profile');

    Route::get('settings/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('settings/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('settings/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::get('settings/password', [PasswordController::class, 'edit'])->name('password.edit');
    Route::put('settings/password', [PasswordController::class, 'update'])->name('password.update');

    Route::get('settings/appearance', function () {
        return Inertia::render('settings/Appearance');
    })->name('appearance');

    Route::get('settings/rating', function () {
        return Inertia::render('settings/RatingUser');
    })->name('rating');

    Route::get('settings/artikel', function () {
        return Inertia::render('settings/artikel/Index');
    })->name('artikel.index');
    
    Route::get('settings/artikel/create', function () {
        return Inertia::render('settings/artikel/Create');
    })->name('artikel.create');
    
    Route::get('settings/artikel/edit', function () {
        return Inertia::render('settings/artikel/Edit');
    })->name('artikel.edit');
    
    Route::get('settings/artikel/show', function () {
        return Inertia::render('settings/artikel/Show');
    })->name('artikel.show');


});
