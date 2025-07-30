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
        $orders = collect(); // Kosongkan defaultnya
        $search = $request->game_id;

        if ($request->filled('game_id')) {
            $orders = Order::where('game_id', 'like', '%' . $search . '%')->get();
        }

        return view('pages.riwayat-pembelian', [
            'orders' => $orders,
            'search' => $search,
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

        $metode = strtolower($order->metode);
        $ewallet = Ewalet::whereRaw('LOWER(nama) = ?', [$metode])->first();

        $payment = null;
        if (!$ewallet) {
            $payment = Payment::whereRaw('LOWER(method) = ?', [$metode])->first();
        }

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

    // Menambahkan fungsi untuk verifikasi dan mengubah status menjadi 'Berhasil'
    public function verify($id)
    {
        // Mencari order berdasarkan ID
        $order = Order::findOrFail($id);

        // Mengubah status menjadi 'Berhasil'
        $order->status = 'Berhasil';

        // Menyimpan perubahan ke database
        $order->save();

        // Mengarahkan kembali ke halaman daftar order dengan pesan sukses
        return redirect()->route('admin.orders.index')->with('success', 'Order berhasil diverifikasi dan status menjadi Berhasil!');
    }
}
