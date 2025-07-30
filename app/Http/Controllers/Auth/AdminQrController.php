<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Qr;
use Illuminate\Support\Facades\Storage;

class AdminQrController extends Controller
{
    public function index()
    {
        $qr = Qr::latest()->get();
        return view('admin.qr.qr', compact('qr'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'gambar' => 'required|image|mimes:jpg,jpeg,png|max:2048',
            'atasnama' => 'required|string|max:255',
        ]);

        $path = $request->file('gambar')->store('qr_images', 'public');

        Qr::create([
            'gambar' => $path,
            'atasnama' => $request->atasnama,
        ]);

        return redirect()->back()->with('success', 'QR berhasil diupload.');
    }

    public function update(Request $request, Qr $qr)
    {
        $request->validate([
            'gambar' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
            'atasnama' => 'required|string|max:255',
        ]);

        $data = ['atasnama' => $request->atasnama];

        if ($request->hasFile('gambar')) {
            if (Storage::disk('public')->exists($qr->gambar)) {
                Storage::disk('public')->delete($qr->gambar);
            }

            $path = $request->file('gambar')->store('qr_images', 'public');
            $data['gambar'] = $path;
        }

        $qr->update($data);

        return redirect()->back()->with('success', 'QR berhasil diperbarui.');
    }

    public function destroy(Qr $qr)
    {
        if (Storage::disk('public')->exists($qr->gambar)) {
            Storage::disk('public')->delete($qr->gambar);
        }

        $qr->delete();

        return redirect()->back()->with('success', 'QR berhasil dihapus.');
    }
}
