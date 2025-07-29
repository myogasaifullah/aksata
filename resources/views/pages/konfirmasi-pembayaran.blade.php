@extends('layouts.app')

@section('content')
<div class="max-w-3xl mx-auto py-10 px-4">
    
    <!-- Header with Progress Steps -->
    <div class="mb-10 text-center">
        <div class="flex justify-center mb-6">
            <div class="flex items-center">
                <!-- Step 1 -->
                <div class="flex flex-col items-center">
                    <div class="w-10 h-10 rounded-full bg-purple-600 flex items-center justify-center text-white font-bold mb-2">
                        1
                    </div>
                    <span class="text-xs text-gray-600">Pemesanan</span>
                </div>
                
                <!-- Connector -->
                <div class="w-16 h-1 bg-purple-200 mx-2"></div>
                
                <!-- Step 2 -->
                <div class="flex flex-col items-center">
                    <div class="w-10 h-10 rounded-full bg-purple-600 flex items-center justify-center text-white font-bold mb-2">
                        2
                    </div>
                    <span class="text-xs text-gray-600">Pembayaran</span>
                </div>
                
                <!-- Connector -->
                <div class="w-16 h-1 bg-purple-200 mx-2"></div>
                
                <!-- Step 3 -->
                <div class="flex flex-col items-center">
                    <div class="w-10 h-10 rounded-full bg-gray-200 flex items-center justify-center text-gray-600 font-bold mb-2">
                        3
                    </div>
                    <span class="text-xs text-gray-600">Selesai</span>
                </div>
            </div>
        </div>
        
        <h1 class="text-2xl md:text-3xl font-bold text-gray-800 mb-2">Konfirmasi Pembayaran</h1>
        <p class="text-gray-600">Pastikan semua data sudah benar sebelum melanjutkan pembayaran</p>
    </div>

    <!-- Order Summary Card -->
    <div class="bg-white rounded-2xl shadow-md overflow-hidden mb-6 border border-gray-100">
        <div class="bg-gradient-to-r from-purple-50 to-indigo-50 px-6 py-4 border-b border-gray-100">
            <h2 class="text-lg font-semibold text-gray-800 flex items-center gap-2">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-purple-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z" />
                </svg>
                Ringkasan Pesanan
            </h2>
        </div>
        <div class="p-6">
            <div class="space-y-4">
                <div class="flex justify-between items-center">
                    <div class="text-gray-600">User ID</div>
                    <div class="font-medium text-gray-900">{{ $order->game_id }}</div>
                </div>
                <div class="flex justify-between items-center">
                    <div class="text-gray-600">No. HP</div>
                    <div class="font-medium text-gray-900">{{ $order->no_telp }}</div>
                </div>
                <div class="flex justify-between items-center">
                    <div class="text-gray-600">Paket Dipilih</div>
                    <div class="font-medium text-gray-900">{{ $order->produk }}</div>
                </div>
                <div class="flex justify-between items-center pt-4 border-t border-gray-100">
                    <div class="text-gray-600 font-medium">Total Pembayaran</div>
                    <div class="text-xl font-bold text-purple-600">Rp {{ number_format($order->total, 0, ',', '.') }}</div>
                </div>
            </div>
        </div>
    </div>

    <!-- Payment Method Card -->
<div class="bg-white rounded-2xl shadow-md overflow-hidden mb-6 border border-gray-100">
    <div class="bg-gradient-to-r from-purple-50 to-indigo-50 px-6 py-4 border-b border-gray-100">
        <h2 class="text-lg font-semibold text-gray-800 flex items-center gap-2">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-purple-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 10h18M7 15h1m4 0h1m-7 4h12a3 3 0 003-3V8a3 3 0 00-3-3H6a3 3 0 00-3 3v8a3 3 0 003 3z" />
            </svg>
            Metode Pembayaran
        </h2>
    </div>
    <div class="p-6 space-y-4">
        @if ($ewallet)
            <div class="text-gray-600">Metode: <strong>{{ $ewallet->nama }}</strong></div>
            <div class="text-gray-600">Silakan scan QR berikut:</div>
            <img src="{{ asset('storage/' . $ewallet->gambar) }}" alt="QR Code" class="w-48 h-48 object-contain">
        @elseif ($payment)
            <div class="text-gray-600">Metode: <strong>{{ $payment->method }}</strong></div>
            <div class="text-gray-600">Silakan transfer ke rekening berikut:</div>
            <img src="{{ asset('storage/' . $payment->image) }}" alt="Bukti Transfer" class="w-64 mb-2">
            <p>No. Rekening: <strong>{{ $payment->account_number }}</strong></p>
        @else
            <p class="text-red-500">Metode pembayaran <strong>{{ $order->metode }}</strong> tidak ditemukan.</p>
        @endif
    </div>
</div>


    <!-- Important Note -->
    <div class="bg-yellow-50 border-l-4 border-yellow-400 p-4 rounded-lg mb-6">
        <div class="flex items-start gap-3">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-yellow-600 mt-0.5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z" />
            </svg>
            <div>
                <h3 class="font-medium text-yellow-800 mb-1">Penting!</h3>
                <p class="text-sm text-yellow-800">Pastikan transfer sesuai dengan nominal dan metode pembayaran yang dipilih. Konfirmasi akan dilakukan secara manual oleh admin dalam waktu maksimal 30 menit.</p>
            </div>
        </div>
    </div>

    <!-- Action Buttons -->
    <div class="flex flex-col sm:flex-row gap-3">
        <a href="{{ url()->previous() }}" class="flex-1 bg-gray-100 hover:bg-gray-200 text-gray-800 font-medium px-6 py-3 rounded-lg transition duration-300 ease-in-out flex items-center justify-center gap-2">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 15l-3-3m0 0l3-3m-3 3h8M3 12a9 9 0 1118 0 9 9 0 01-18 0z" />
            </svg>
            Kembali
        </a>
        <a href="{{ route('riwayat-pembelian') }}" class="flex-1 bg-purple-600 hover:bg-purple-700 text-white font-semibold px-6 py-3 rounded-lg shadow transition duration-300 ease-in-out flex items-center justify-center gap-2">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
            </svg>
            Konfirmasi Pembayaran
        </a>
    </div>
</div>
@endsection