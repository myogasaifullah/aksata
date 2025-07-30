<?php

namespace App\Http\Controllers;

use App\Models\Payment;
use App\Models\Game;
use App\Models\Harga;
use App\Models\Qr;
use App\Models\Order;
use App\Models\Rate;
use App\Models\Ewalet;

class AdminDashboardController extends Controller
{
    public function index()
    {
        $payments = Payment::all();
        $games = Game::all();
        $hargas = Harga::all();
        $qrs = Qr::all();
        $orders = Order::all();
        $rates = Rate::all();
        $ewalets = Ewalet::all();

        return view('admin.dashboard', compact(
            'payments',
            'games',
            'hargas',
            'qrs',
            'orders',
            'rates',
            'ewalets'
        ));
    }
}
