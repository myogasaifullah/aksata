<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\Jual;
use App\Models\Game;
use Illuminate\Http\Request;

class AdminJualController extends Controller
{
    public function index()
    {
        // Ambil semua data jual beserta relasi game-nya
        $juals = Jual::with('game')->get();

        // Kelompokkan berdasarkan nama game
        $jualsGrouped = $juals->groupBy(fn($jual) => $jual->game->nama);

        $games = Game::all();

        return view('admin.jual', compact('jualsGrouped', 'games'));
    }

    public function jual()
    {
        // Ambil semua data jual beserta relasi game-nya
        $juals = Jual::with('game')->get();

        // Kelompokkan berdasarkan nama game
        $jualsGrouped = $juals->groupBy(fn($jual) => $jual->game->nama);

        $games = Game::all();

        return view('pages.jual', compact('jualsGrouped', 'games'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'game_id' => 'required|exists:games,id',
            'jumlah' => 'required|string',
            'harga' => 'required|string',
        ]);

        Jual::create($validated);

        return redirect()->route('admin.jual.index')
                         ->with('success', 'Data jual berhasil ditambahkan.');
    }

    public function update(Request $request, Jual $jual)
    {
        $validated = $request->validate([
            'game_id' => 'required|exists:games,id',
            'jumlah' => 'required|string',
            'harga' => 'required|string',
        ]);

        $jual->update($validated);

        return redirect()->route('admin.jual.index')
                         ->with('success', 'Data jual berhasil diperbarui.');
    }

    public function destroy(Jual $jual)
    {
        $jual->delete();

        return redirect()->route('admin.jual.index')
                         ->with('success', 'Data jual berhasil dihapus.');
    }
}
