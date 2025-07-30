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
        // Aggregate monthly total amounts from orders table
        $monthlyPayments = Order::selectRaw('YEAR(tanggal) as year, MONTH(tanggal) as month, SUM(total) as total_amount')
            ->groupBy('year', 'month')
            ->orderBy('year')
            ->orderBy('month')
            ->get();

        // Prepare monthly labels as "YYYY-MM"
        $monthlyLabels = $monthlyPayments->map(function ($item) {
            return $item->year . '-' . str_pad($item->month, 2, '0', STR_PAD_LEFT);
        })->toArray();

        // Aggregate daily orders count for last 30 days using 'tanggal' column
        $dailyOrders = Order::selectRaw('tanggal as date, COUNT(*) as count')
            ->where('tanggal', '>=', now()->subDays(30)->toDateString())
            ->groupBy('date')
            ->orderBy('date')
            ->get();

        // Aggregate order counts grouped by trimmed and lowercased status
        $orderStatusCounts = Order::selectRaw('TRIM(LOWER(status)) as status, COUNT(*) as count')
            ->groupBy('status')
            ->get();

        $games = Game::all();
        $hargas = Harga::all();
        $qrs = Qr::all();
        $rates = Rate::all();
        $ewalets = Ewalet::all();

        return view('admin.dashboard', compact(
            'monthlyPayments',
            'monthlyLabels',
            'dailyOrders',
            'orderStatusCounts',
            'games',
            'hargas',
            'qrs',
            'rates',
            'ewalets'
        ));
    }
}
