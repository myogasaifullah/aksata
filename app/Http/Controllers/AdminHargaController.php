<?php

namespace App\Http\Controllers;

use App\Models\Harga;
use Illuminate\Http\Request;

use App\Models\Game;

class AdminHargaController extends Controller
{
    public function index()
    {
        // Fetch harga data with related game data
        $hargas = Harga::with('game')->get();

        // Group harga by game name
        $hargasGrouped = $hargas->groupBy(function ($harga) {
            return $harga->game->nama; // Kelompokkan berdasarkan nama game
        });

        $games = Game::all();

        // Return the harga view with the grouped data
        return view('admin.harga', compact('hargasGrouped', 'games'));
    }


    public function store(Request $request)
    {
        $request->validate([
            'game_id' => 'required|exists:games,id',
            'jumlah' => 'required|integer|min:1',
            'harga' => 'required|integer|min:0',
        ]);

        Harga::create([
            'game_id' => $request->game_id,
            'jumlah' => $request->jumlah,
            'harga' => $request->harga,
        ]);

        return redirect()->route('admin.harga.index')->with('success', 'Harga berhasil ditambahkan.');
    }

    public function update(Request $request, Harga $harga)
    {
        $request->validate([
            'game_id' => 'required|exists:games,id',
            'jumlah' => 'required|integer|min:1',
            'harga' => 'required|integer|min:0',
        ]);

        $harga->update([
            'game_id' => $request->game_id,
            'jumlah' => $request->jumlah,
            'harga' => $request->harga,
        ]);

        return redirect()->route('admin.harga.index')->with('success', 'Harga berhasil diperbarui.');
    }

    public function destroy(Harga $harga)
    {
        $harga->delete();
        return redirect()->route('admin.harga.index')->with('success', 'Harga berhasil dihapus.');
    }
}
