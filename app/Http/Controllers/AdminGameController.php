<?php

namespace App\Http\Controllers;

use App\Models\Game;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AdminGameController extends Controller
{
    public function index()
    {
        // Load games with their harga relationship
        $games = Game::all();

        return view('admin.games', compact('games'));
    }

    public function create()
    {
        return view('admin.games.create'); // Add the view for creating a game
    }

    public function store(Request $request)
    {
        // Validate input
        $request->validate([
            'nama' => 'required|string|max:255',
            'gambar' => 'required|image|max:2048',
        ]);

        // Ensure the directory exists
        if (!Storage::exists('public/games')) {
            Storage::makeDirectory('public/games');
        }

        // Store image in the public storage folder using 'public' disk
        $path = $request->file('gambar')->store('games', 'public');

        // Create a new game entry
        Game::create([
            'nama' => $request->nama,
            'gambar' => Storage::url($path),
        ]);

        // Redirect back to the games index with a success message
        return redirect()->route('admin.games.index')->with('success', 'Game created successfully.');
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
        ]);

        if ($request->hasFile('gambar')) {
            // Delete old image
            if ($game->gambar) {
                $oldPath = str_replace('/storage', 'public', $game->gambar);
                Storage::delete($oldPath);
            }

            // Ensure the directory exists
            if (!Storage::exists('public/games')) {
                Storage::makeDirectory('public/games');
            }

            $path = $request->file('gambar')->store('games', 'public');
            $game->gambar = Storage::url($path);
        }

        $game->nama = $request->nama;
        $game->save();

        return redirect()->route('admin.games.index')->with('success', 'Game updated successfully.');
    }

    public function destroy(Game $game)
    {
        // Delete the game image
        if ($game->gambar) {
            $oldPath = str_replace('/storage', 'public', $game->gambar);
            Storage::delete($oldPath);
        }

        // Delete the game entry
        $game->delete();

        return redirect()->route('admin.games.index')->with('success', 'Game deleted successfully.');
    }
}
