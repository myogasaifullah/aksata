<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Models\Game;
use Illuminate\Http\Request;

class AdminOrderController extends Controller
{
    public function index() {
        $orders = Order::all();
        $games = Game::all();
        return view('admin.order', compact('orders', 'games'));
    }

    public function history() {
        $orders = Order::all();
        return view('pages.riwayat-pembelian', compact('orders'));
    }

    public function store(Request $request) {
        $request->validate([
            'no_telp' => 'required',
            'produk' => 'required',
            'tanggal' => 'required|date',
            'metode' => 'required',
            'total' => 'required|numeric',
            'status' => 'required',
            'game_id' => 'required|string',
        ]);

        $data = $request->all();
        $data['id_transaksi'] = uniqid('TRX-');

        Order::create($data);
        return redirect()->back()->with('success', 'Order berhasil ditambahkan.');
    }

    public function update(Request $request, $id) {
        $order = Order::findOrFail($id);

        $request->validate([
            'id_transaksi' => 'required|unique:orders,id_transaksi,' . $order->id,
            'no_telp' => 'required',
            'produk' => 'required',
            'tanggal' => 'required|date',
            'metode' => 'required',
            'total' => 'required|numeric',
            'status' => 'required',
            'game_id' => 'required|string',
        ]);

        $order->update($request->all());
        return redirect()->back()->with('success', 'Order berhasil diperbarui.');
    }

    public function destroy($id) {
        $order = Order::findOrFail($id);
        $order->delete();
        return redirect()->back()->with('success', 'Order berhasil dihapus.');
    }
}