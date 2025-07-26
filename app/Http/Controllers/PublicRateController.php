<?php

namespace App\Http\Controllers;

use App\Models\Rate;
use Illuminate\Http\Request;

class PublicRateController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'stars' => 'required|integer|min:1|max:5',
            'name' => 'required|string|max:255',
            'transaction_id' => [
                'required',
                'string',
                'max:255',
                'exists:orders,id_transaksi'
            ],
            'description' => 'nullable|string',
        ], [
            'transaction_id.exists' => 'Kode transaksi tidak valid atau tidak ditemukan.'
        ]);

        Rate::create($request->all());

        return redirect()->back()->with('success', 'Testimoni berhasil ditambahkan!');
    }
}
