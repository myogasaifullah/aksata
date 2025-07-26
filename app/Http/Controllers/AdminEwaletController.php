<?php 

namespace App\Http\Controllers;

use App\Models\Ewalet;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AdminEwaletController extends Controller
{
    public function index()
    {
        $ewalets = Ewalet::all();
        return view('admin.ewalet', compact('ewalets'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'deskripsi' => 'required|string',
            'gambar' => 'required|image|mimes:jpeg,png,jpg|max:2048',
        ]);

        $path = $request->file('gambar')->store('ewalet', 'public');

        Ewalet::create([
            'nama' => $request->nama,
            'deskripsi' => $request->deskripsi,
            'gambar' => $path,
        ]);

        return redirect()->back()->with('success', 'Data berhasil ditambahkan');
    }

    public function update(Request $request, Ewalet $ewalet)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'deskripsi' => 'required|string',
            'gambar' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
        ]);

        $data = $request->only('nama', 'deskripsi');

        if ($request->hasFile('gambar')) {
            Storage::disk('public')->delete($ewalet->gambar);
            $data['gambar'] = $request->file('gambar')->store('ewalet', 'public');
        }

        $ewalet->update($data);

        return redirect()->back()->with('success', 'Data berhasil diupdate');
    }

    public function destroy(Ewalet $ewalet)
    {
        Storage::disk('public')->delete($ewalet->gambar);
        $ewalet->delete();
        return redirect()->back()->with('success', 'Data berhasil dihapus');
    }
}
