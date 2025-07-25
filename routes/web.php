<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UsersController;
use Illuminate\Support\Facades\Route;
// routes/web.php
use Illuminate\Support\Facades\Auth;

Route::post('logout', function () {
    Auth::logout();
    return redirect('/'); // Redirect after logout
})->name('logout');

Route::get('/', function () {
    return view('auth/login');
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


});


Route::middleware(['auth'])->group(function () {
    Route::get('/users', [UsersController::class, 'index'])->name('admin.users.index');
    Route::post('/users', [UsersController::class, 'store'])->name('admin.users.store');
    Route::put('/users/{id}', [UsersController::class, 'update'])->name('admin.users.update');
    Route::delete('/users/{id}', [UsersController::class, 'destroy'])->name('admin.users.destroy');
});

Route::get('/dashboard', function () {
    return view('admin/dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
