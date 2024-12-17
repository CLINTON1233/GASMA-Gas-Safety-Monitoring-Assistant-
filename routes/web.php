<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PemantauanGasController;
use App\Http\Controllers\PemantauanSuhuController;
use App\Http\Controllers\PemantauanCahayaController;
use App\Http\Controllers\NotifikasiInsidenController;
use App\Http\Controllers\RiwayatPemantauanController;
use App\Http\Controllers\PenggunaController;
use App\Http\Controllers\PengaturanSistemController;

Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
Route::get('/pemantauan_gas', [PemantauanGasController::class, 'index'])->name('pemantauan_gas');
Route::get('/pemantauan_suhu', [PemantauanSuhuController::class, 'index'])->name('pemantauan_suhu');
Route::get('/pemantauan_cahaya', [PemantauanCahayaController::class, 'index'])->name('pemantauan_cahaya');
Route::get('/notifikasi_insiden', [NotifikasiInsidenController::class, 'index'])->name('notifikasi_insiden');
Route::get('/riwayat_pemantauan', [RiwayatPemantauanController::class, 'index'])->name('riwayat_pemantauan');
Route::get('/pengguna', [PenggunaController::class, 'index'])->name('pengguna');
Route::get('/pengaturan_sistem', [PengaturanSistemController::class, 'index'])->name('pengaturan_sistem');
