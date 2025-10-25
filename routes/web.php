<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PengajuanController;
use App\Http\Controllers\Admin\PersyaratanController;
use App\Http\Controllers\Admin\ReviewController;

// Redirect root ke dashboard
Route::get('/', fn() => redirect()->route('dashboard'));

// Dashboard
Route::get('/dashboard', function () {
    $role = Auth::user()->role ?? 'desa';
    return match ($role) {
        'kabupaten' => view('dashboard.kabupaten'),
        'kecamatan' => view('dashboard.kecamatan'),
        default => view('dashboard.desa'),
    };
})->middleware(['auth'])->name('dashboard');

// Profil routes
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::put('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::put('/profile/password', [ProfileController::class, 'updatePassword'])->name('profile.password.update');
    Route::view('/profile/show', 'profile.show')->name('profile.show');
});

// Pengajuan (Desa)
Route::middleware(['auth'])->group(function () {
    Route::resource('pengajuan', PengajuanController::class);
    Route::post('pengajuan/{id}/submit', [PengajuanController::class, 'submit'])->name('pengajuan.submit');
});

// Kabupaten (Admin)
Route::prefix('admin')->name('admin.')->middleware(['auth'])->group(function () {
    Route::resource('persyaratan', PersyaratanController::class);
    Route::resource('review', ReviewController::class)->only(['index', 'show', 'update']);
});

// Kecamatan
Route::prefix('kecamatan')->name('kecamatan.')->middleware(['auth'])->group(function () {
    Route::get('/pengajuan', [PengajuanController::class, 'index'])->name('pengajuan.index');
    Route::get('/pengajuan/{id}', [PengajuanController::class, 'show'])->name('pengajuan.show');
});

// Auth routes
require __DIR__.'/auth.php';
