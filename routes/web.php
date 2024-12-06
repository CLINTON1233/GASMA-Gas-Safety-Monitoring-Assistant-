<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;

Route::get('/', [DashboardController::class, 'index'])->name('dashboard');

// Rute tambahan untuk halaman lain
Route::get('/monitoring', function () {
    return view('monitoring');
})->name('monitoring');

Route::get('/settings', function () {
    return view('settings');
})->name('settings');
