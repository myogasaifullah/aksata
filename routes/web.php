<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

use App\Http\Controllers\Auth\AdminQrController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\Auth\AdminOrderController;
use App\Http\Controllers\PaymentsController;
use App\Http\Controllers\AdminGameController;
use App\Http\Controllers\AdminHargaController;
use App\Http\Controllers\Auth\AdminRateController;
use App\Http\Controllers\auth\AdminDeskripsiController;
use App\Http\Controllers\AdminEwaletController;

use App\Models\Ewalet;
use App\Models\Game;
use App\Models\Rate;
use App\Models\Payment;
use App\Models\Qr;

// ==============================
// Halaman Publik
// ==============================

Route::get('/', function () {
    $games = Game::all();
    $rates = Rate::all();
    return view('pages.beranda', compact('games', 'rates'));
})->name('beranda');

Route::get('/syarat-ketentuan', fn() => view('pages.syarat-ketentuan'))->name('syarat-ketentuan');
Route::get('/riwayat-pembelian', fn() => view('pages.riwayat-pembelian'))->name('riwayat-pembelian');
Route::get('/register', fn() => 'Halaman Daftar')->name('register');

// ✅ Menampilkan halaman detail game berdasarkan ID
Route::get('/game/{id}', function ($id) {
    $game = Game::findOrFail($id);
    $payments = Payment::all();
    $qrs = Qr::all();
    $ewalets = Ewalet::all();
    return view('pages.game-detail', compact('game', 'payments', 'qrs', 'ewalets'));
})->name('game.show');

// ✅ Konfirmasi Pembayaran
Route::get('/konfirmasi-pembayaran', function () {
    $qrs = Qr::all();
    return view('pages.konfirmasi-pembayaran', compact('qrs'));
})->name('konfirmasi-pembayaran');

// ==============================
// Autentikasi
// ==============================

Route::get('/login', fn() => view('auth/login'));
Route::post('logout', function () {
    Auth::logout();
    return redirect('/');
})->name('logout');

// ==============================
// Dashboard & Admin Area
// ==============================

Route::get('/dashboard', fn() => view('admin/dashboard'))
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::middleware(['auth'])->group(function () {

    // Profil
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    // Users
    Route::get('/users', [UsersController::class, 'index'])->name('admin.users.index');
    Route::post('/users', [UsersController::class, 'store'])->name('admin.users.store');
    Route::put('/users/{id}', [UsersController::class, 'update'])->name('admin.users.update');
    Route::delete('/users/{id}', [UsersController::class, 'destroy'])->name('admin.users.destroy');

    // QR Code
    Route::get('/qr', [AdminQrController::class, 'index'])->name('admin.qr.index');
    Route::post('/qr', [AdminQrController::class, 'store'])->name('admin.qr.store');
    Route::put('/qr/{qr}', [AdminQrController::class, 'update'])->name('admin.qr.update');
    Route::delete('/qr/{qr}', [AdminQrController::class, 'destroy'])->name('admin.qr.destroy');

    // Harga
    Route::get('/harga', [AdminHargaController::class, 'index'])->name('admin.harga.index');
    Route::post('/harga', [AdminHargaController::class, 'store'])->name('admin.harga.store');
    Route::put('/harga/{harga}', [AdminHargaController::class, 'update'])->name('admin.harga.update');
    Route::delete('/harga/{harga}', [AdminHargaController::class, 'destroy'])->name('admin.harga.destroy');

    // Game
    Route::get('/games', [AdminGameController::class, 'index'])->name('admin.games.index');
    Route::post('/games', [AdminGameController::class, 'store'])->name('admin.games.store');
    Route::get('/games/{game}/edit', [AdminGameController::class, 'edit'])->name('admin.games.edit');
    Route::put('/games/{game}', [AdminGameController::class, 'update'])->name('admin.games.update');
    Route::delete('/games/{game}', [AdminGameController::class, 'destroy'])->name('admin.games.destroy');

    // Pembayaran
    Route::get('/pembayaran', [PaymentsController::class, 'index'])->name('admin.pembayaran.index');
    Route::post('/pembayaran', [PaymentsController::class, 'store'])->name('admin.pembayaran.store');
    Route::get('/pembayaran/{id}/edit', [PaymentsController::class, 'edit'])->name('admin.pembayaran.edit');
    Route::put('/pembayaran/{id}', [PaymentsController::class, 'update'])->name('admin.pembayaran.update');
    Route::delete('/pembayaran/{id}', [PaymentsController::class, 'destroy'])->name('admin.pembayaran.destroy');

    // Order
    Route::get('/orders', [AdminOrderController::class, 'index'])->name('admin.orders.index');
    Route::post('/orders', [AdminOrderController::class, 'store'])->name('admin.orders.store');
    Route::put('/orders/{id}', [AdminOrderController::class, 'update'])->name('admin.orders.update');
    Route::delete('/orders/{id}', [AdminOrderController::class, 'destroy'])->name('admin.orders.destroy');

    // Rate
    Route::get('/rate', [AdminRateController::class, 'index'])->name('admin.rate.index');
    Route::post('/rate', [AdminRateController::class, 'store'])->name('admin.rate.store');
    Route::put('/rate/{id}', [AdminRateController::class, 'update'])->name('admin.rate.update');
    Route::delete('/rate/{id}', [AdminRateController::class, 'destroy'])->name('admin.rate.destroy');

    // Ewalet
    Route::get('/ewalet', [AdminEwaletController::class, 'index'])->name('admin.ewalet.index');
    Route::post('/ewalet', [AdminEwaletController::class, 'store'])->name('admin.ewalet.store');
    Route::put('/ewalet/{ewalet}', [AdminEwaletController::class, 'update'])->name('admin.ewalet.update');
    Route::delete('/ewalet/{ewalet}', [AdminEwaletController::class, 'destroy'])->name('admin.ewalet.destroy');
});

require __DIR__ . '/auth.php';
