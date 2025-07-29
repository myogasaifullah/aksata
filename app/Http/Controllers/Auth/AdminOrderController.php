<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\Ewalet;
use App\Models\Order;
use App\Models\Game;
use App\Models\Payment;
use Illuminate\Http\Request;

class AdminOrderController extends Controller
{
    public function index() {
        $orders = Order::all();
        $games = Game::all();
        return view('admin.order', compact('orders', 'games'));
    }

    public function history(Request $request)
{
    $query = Order::query();

    if ($request->filled('id_transaksi')) {
        $query->where('id_transaksi', $request->id_transaksi);
    }

    $orders = $query->get();

    return view('pages.riwayat-pembelian', [
        'orders' => $orders,
        'search' => $request->id_transaksi,
    ]);
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

public function bayar(Request $request) {
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

        $order = Order::create($data);
        return redirect()->route('konfirmasi.pembayaran', ['id' => $order->id]);
    }
    
public function show($id)
{
    $order = Order::findOrFail($id);

    // Ambil nama metode dari order
    $metode = strtolower($order->metode);

    // Coba cari di ewallet
    $ewallet = Ewalet::whereRaw('LOWER(nama) = ?', [$metode])->first();

    // Jika tidak ditemukan di ewallet, cari di payment
    $payment = null;
    if (!$ewallet) {
        $payment = Payment::whereRaw('LOWER(method) = ?', [$metode])->first();
    }

    // QR khusus qris (jika kamu butuh)
    $qrs = Ewalet::where('nama', 'qris')->get();

    return view('pembayaran.show', compact('order', 'ewallet', 'payment', 'qrs'));
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