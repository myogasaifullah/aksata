<?php

namespace App\Http\Controllers;

use App\Models\Payment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PaymentsController extends Controller
{
    public function index()
    {
        $payments = Payment::all();
        return view('admin.pembayaran', compact('payments'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'image' => 'required|image|max:2048',
            'method' => 'required|string|max:255',
            'account_number' => 'required|string|max:255',
        ]);

        $imagePath = $request->file('image')->store('payments', 'public');

        Payment::create([
            'image' => $imagePath,
            'method' => $request->method,
            'account_number' => $request->account_number,
        ]);

        return redirect()->route('admin.pembayaran.index')->with('success', 'Payment created successfully.');
    }

    public function edit($id)
    {
        $payment = Payment::findOrFail($id);
        return response()->json($payment);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'image' => 'nullable|image|max:2048',
            'method' => 'required|string|max:255',
            'account_number' => 'required|string|max:255',
        ]);

        $payment = Payment::findOrFail($id);

        if ($request->hasFile('image')) {
            // Delete old image
            Storage::disk('public')->delete($payment->image);
            // Store new image
            $imagePath = $request->file('image')->store('payments', 'public');
            $payment->image = $imagePath;
        }

        $payment->method = $request->method;
        $payment->account_number = $request->account_number;
        $payment->save();

        return redirect()->route('admin.pembayaran.index')->with('success', 'Payment updated successfully.');
    }

    public function destroy($id)
    {
        $payment = Payment::findOrFail($id);
        Storage::disk('public')->delete($payment->image);
        $payment->delete();

        return redirect()->route('admin.pembayaran.index')->with('success', 'Payment deleted successfully.');
    }
}
