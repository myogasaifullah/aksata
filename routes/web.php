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

Route::get('/order', function () {
    return view('admin/order');
});

Route::middleware(['auth'])->group(function () {
    Route::get('/pembayaran', [\App\Http\Controllers\PaymentsController::class, 'index'])->name('admin.pembayaran.index');

    Route::post('/pembayaran', [\App\Http\Controllers\PaymentsController::class, 'store'])->name('admin.pembayaran.store');
    Route::get('/pembayaran/{id}/edit', [\App\Http\Controllers\PaymentsController::class, 'edit'])->name('admin.pembayaran.edit');
    Route::put('/pembayaran/{id}', [\App\Http\Controllers\PaymentsController::class, 'update'])->name('admin.pembayaran.update');
    Route::delete('/pembayaran/{id}', [\App\Http\Controllers\PaymentsController::class, 'destroy'])->name('admin.pembayaran.destroy');

    Route::get('/games', [\App\Http\Controllers\AdminGameController::class, 'index'])->name('admin.games.index');
    Route::post('/games', [\App\Http\Controllers\AdminGameController::class, 'store'])->name('admin.games.store');
    Route::get('/games/{game}/edit', [\App\Http\Controllers\AdminGameController::class, 'edit'])->name('admin.games.edit');
    Route::put('/games/{game}', [\App\Http\Controllers\AdminGameController::class, 'update'])->name('admin.games.update');
    Route::delete('/games/{game}', [\App\Http\Controllers\AdminGameController::class, 'destroy'])->name('admin.games.destroy');

    Route::get('/harga', [\App\Http\Controllers\AdminHargaController::class, 'index'])->name('admin.harga.index');
    Route::post('/harga', [\App\Http\Controllers\AdminHargaController::class, 'store'])->name('admin.harga.store');
    Route::put('/harga/{harga}', [\App\Http\Controllers\AdminHargaController::class, 'update'])->name('admin.harga.update');
    Route::delete('/harga/{harga}', [\App\Http\Controllers\AdminHargaController::class, 'destroy'])->name('admin.harga.destroy');

     // 🔸 ✅ QR Upload (tambahan dari ChatGPT)
    Route::get('/qr', [AdminQrController::class, 'index'])->name('admin.qr.index');
    Route::post('/qr', [AdminQrController::class, 'store'])->name('admin.qr.store');
    Route::put('/qr/{qr}', [AdminQrController::class, 'update'])->name('admin.qr.update');
    Route::delete('/qr/{qr}', [AdminQrController::class, 'destroy'])->name('admin.qr.destroy');
});


Route::middleware(['auth'])->group(function () {
    Route::get('/users', [UsersController::class, 'index'])->name('admin.users.index');
    Route::post('/users', [UsersController::class, 'store'])->name('admin.users.store');
    Route::put('/users/{id}', [UsersController::class, 'update'])->name('admin.users.update');
    Route::delete('/users/{id}', [UsersController::class, 'destroy'])->name('admin.users.destroy');
});

