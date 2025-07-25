<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\PaymentsController;
use App\Http\Controllers\AdminGameController;
use App\Http\Controllers\AdminHargaController;
use App\Http\Controllers\Auth\AdminQrController;

// ✅ Logout
Route::post('logout', function () {
    Auth::logout();
    return redirect('/');
})->name('logout');

// ✅ Login Page
Route::get('/', function () {
    return view('auth/login');
});

// ✅ Dashboard
Route::get('/dashboard', function () {
    return view('admin/dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

// ✅ Grup: Semua yang butuh login
Route::middleware(['auth'])->group(function () {

    // 🔸 Pembayaran
    Route::get('/pembayaran', [PaymentsController::class, 'index'])->name('admin.pembayaran.index');
    Route::post('/pembayaran', [PaymentsController::class, 'store'])->name('admin.pembayaran.store');
    Route::get('/pembayaran/{id}/edit', [PaymentsController::class, 'edit'])->name('admin.pembayaran.edit');
    Route::put('/pembayaran/{id}', [PaymentsController::class, 'update'])->name('admin.pembayaran.update');
    Route::delete('/pembayaran/{id}', [PaymentsController::class, 'destroy'])->name('admin.pembayaran.destroy');

    // 🔸 Games
    Route::get('/games', [AdminGameController::class, 'index'])->name('admin.games.index');
    Route::post('/games', [AdminGameController::class, 'store'])->name('admin.games.store');
    Route::get('/games/{game}/edit', [AdminGameController::class, 'edit'])->name('admin.games.edit');
    Route::put('/games/{game}', [AdminGameController::class, 'update'])->name('admin.games.update');
    Route::delete('/games/{game}', [AdminGameController::class, 'destroy'])->name('admin.games.destroy');

    // 🔸 Harga
    Route::get('/harga', [AdminHargaController::class, 'index'])->name('admin.harga.index');
    Route::post('/harga', [AdminHargaController::class, 'store'])->name('admin.harga.store');
    Route::put('/harga/{harga}', [AdminHargaController::class, 'update'])->name('admin.harga.update');

    // 🔸 Users
    Route::get('/users', [UsersController::class, 'index'])->name('admin.users.index');
    Route::post('/users', [UsersController::class, 'store'])->name('admin.users.store');
    Route::put('/users/{id}', [UsersController::class, 'update'])->name('admin.users.update');
    Route::delete('/users/{id}', [UsersController::class, 'destroy'])->name('admin.users.destroy');

    // 🔸 Profile
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    // 🔸 ✅ QR Upload (tambahan dari ChatGPT)
    Route::get('/qr', [AdminQrController::class, 'index'])->name('admin.qr.index');
    Route::post('/qr', [AdminQrController::class, 'store'])->name('admin.qr.store');
    Route::put('/qr/{qr}', [AdminQrController::class, 'update'])->name('admin.qr.update');
    Route::delete('/qr/{qr}', [AdminQrController::class, 'destroy'])->name('admin.qr.destroy');
});

// ✅ Auth routes (login, register, etc.)
require __DIR__ . '/auth.php';
