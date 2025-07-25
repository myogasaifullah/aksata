<?php 

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\Rate;
use Illuminate\Http\Request;

class AdminRateController extends Controller
{
    public function index()
    {
        $rates = Rate::latest()->get();
        return view('admin.rate', compact('rates'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'stars' => 'required|integer|min:1|max:5',
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
        ]);

        Rate::create($request->all());

        return redirect()->back()->with('success', 'Data berhasil ditambahkan!');
    }

    public function update(Request $request, $id)
    {
        $rate = Rate::findOrFail($id);

        $request->validate([
            'stars' => 'required|integer|min:1|max:5',
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
        ]);

        $rate->update($request->all());

        return redirect()->back()->with('success', 'Data berhasil diperbarui!');
    }

    public function destroy($id)
    {
        Rate::findOrFail($id)->delete();
        return redirect()->back()->with('success', 'Data berhasil dihapus!');
    }
}
