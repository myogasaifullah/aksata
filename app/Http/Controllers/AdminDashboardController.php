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

        // ➤ Agregasi jumlah order per bulan
        $monthlyOrders = Order::selectRaw('YEAR(tanggal) as year, MONTH(tanggal) as month, COUNT(*) as total')
            ->groupBy('year', 'month')
            ->orderBy('year')
            ->orderBy('month')
            ->get();

        $monthlyLabels = $monthlyOrders->map(function ($item) {
            return $item->year . '-' . str_pad($item->month, 2, '0', STR_PAD_LEFT);
        });

        $monthlyCounts = $monthlyOrders->pluck('total');

        // ➤ Agregasi distribusi status
        $statusCounts = Order::selectRaw('LOWER(TRIM(status)) as status, COUNT(*) as count')
            ->groupBy('status')
            ->get();

        // ➤ Agregasi pembayaran per bulan (Monthly Payments)
        $monthlyPayments = Order::selectRaw('YEAR(tanggal) as year, MONTH(tanggal) as month, SUM(total) as total')
            ->groupBy('year', 'month')
            ->orderBy('year')
            ->orderBy('month')
            ->get();

        $monthlyPaymentLabels = $monthlyPayments->map(function ($item) {
            return $item->year . '-' . str_pad($item->month, 2, '0', STR_PAD_LEFT);
        });

        $monthlyPaymentTotals = $monthlyPayments->pluck('total');

        // ➤ Agregasi jumlah order per hari (Daily Orders)
        $dailyOrders = Order::selectRaw('tanggal as date, COUNT(*) as total')
            ->groupBy('date')
            ->orderBy('date')
            ->get();

        $dailyOrderLabels = $dailyOrders->pluck('date')->map(function ($date) {
            return \Carbon\Carbon::parse($date)->format('Y-m-d');
        });

        $dailyOrderCounts = $dailyOrders->pluck('total');

        return view('admin.dashboard', compact(
            'payments',
            'games',
            'hargas',
            'qrs',
            'orders',
            'rates',
            'ewalets',
            'monthlyLabels',     // ← ini WAJIB ada
            'monthlyCounts',     // ← ini juga WAJIB
            'statusCounts',      // ← ini juga WAJIB
            'monthlyPaymentLabels',
            'monthlyPaymentTotals',
            'dailyOrderLabels',
            'dailyOrderCounts'
        ));
    }
}
