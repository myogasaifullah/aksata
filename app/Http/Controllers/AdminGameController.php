<?php

namespace App\Http\Controllers;

use App\Models\Game;
use App\Models\Rate;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AdminGameController extends Controller
{
    public function beranda()
    {
        $games = Game::all();
        $rates = Rate::all(); // Optional
        return view('pages.beranda', compact('games', 'rates'));
    }

    public function index()
    {
        $games = Game::all();
        return view('admin.games', compact('games'));
    }

    public function create()
    {
        return view('admin.games.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'gambar' => 'required|image|max:2048',
            'deskripsi' => 'nullable|string',
            'cara_bermain' => 'nullable|string',
        ]);

        if (!Storage::exists('public/games')) {
            Storage::makeDirectory('public/games');
        }

        $path = $request->file('gambar')->store('games', 'public');

        Game::create([
            'nama' => $request->nama,
            'gambar' => Storage::url($path),
            'deskripsi' => $request->deskripsi,
            'cara_bermain' => $request->cara_bermain,
        ]);

        return redirect()->route('admin.games.index')->with('success', 'Game berhasil ditambahkan.');
    }

    public function edit(Game $game)
    {
        return view('admin.games.edit', compact('game'));
    }

    public function update(Request $request, Game $game)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'gambar' => 'nullable|image|max:2048',
            'deskripsi' => 'nullable|string',
            'cara_bermain' => 'nullable|string',
        ]);

        if ($request->hasFile('gambar')) {
            // Delete old image if exists
            if ($game->gambar) {
                $oldPath = str_replace('/storage', 'public', $game->gambar);
                Storage::delete($oldPath);
            }

            if (!Storage::exists('public/games')) {
                Storage::makeDirectory('public/games');
            }

            $path = $request->file('gambar')->store('games', 'public');
            $game->gambar = Storage::url($path);
        }

        $game->nama = $request->nama;
        $game->deskripsi = $request->deskripsi;
        $game->cara_bermain = $request->cara_bermain;
        $game->save();

        return redirect()->route('admin.games.index')->with('success', 'Game berhasil diupdate.');
    }

    public function destroy(Game $game)
    {
        // Delete image file if exists
        if ($game->gambar) {
            $oldPath = str_replace('/storage', 'public', $game->gambar);
            Storage::delete($oldPath);
        }

        $game->delete();

        return redirect()->route('admin.games.index')->with('success', 'Game berhasil dihapus.');
    }

    public function show($id)
    {
        $game = Game::findOrFail($id);
        $hargas = \App\Models\Harga::where('game_id', $id)->get();
        $payments = \App\Models\Payment::all();
        $qrs = \App\Models\Qr::all();
        $ewalets = \App\Models\Ewalet::all();
        return view('pages.game-detail', compact('game', 'hargas', 'payments', 'qrs', 'ewalets'));
    }
}