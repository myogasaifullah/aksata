@extends('layouts.app')

@section('content')
<div class="max-w-6xl mx-auto py-8 px-4">
    <!-- Header Section -->
    <div class="flex flex-col md:flex-row justify-between items-start md:items-center mb-8">
        <div>
            <h1 class="text-2xl md:text-3xl font-bold text-gray-800">Riwayat Pembelian</h1>
            <p class="text-gray-600 mt-1">Daftar transaksi yang telah Anda lakukan</p>
        </div>
        
        <!-- Filter Section -->
        <div class="mt-4 md:mt-0 flex flex-col sm:flex-row gap-3">
            <div class="relative">
                <select class="appearance-none bg-white border border-gray-300 rounded-lg pl-4 pr-8 py-2 text-sm focus:outline-none focus:ring-2 focus:ring-purple-500 focus:border-transparent">
                    <option>Semua Status</option>
                    <option>Berhasil</option>
                    <option>Pending</option>
                    <option>Gagal</option>
                </select>
                <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                    <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                        <path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/>
                    </svg>
                </div>
            </div>
            
            <div class="relative">
                <select class="appearance-none bg-white border border-gray-300 rounded-lg pl-4 pr-8 py-2 text-sm focus:outline-none focus:ring-2 focus:ring-purple-500 focus:border-transparent">
                    <option>30 Hari Terakhir</option>
                    <option>7 Hari Terakhir</option>
                    <option>Bulan Ini</option>
                    <option>Bulan Lalu</option>
                    <option>Semua</option>
                </select>
                <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                    <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                        <path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/>
                    </svg>
                </div>
            </div>
        </div>
    </div>

    <!-- Transaction List -->
    <div class="bg-white shadow-md rounded-2xl overflow-hidden">
        <!-- Table Header -->
        <div class="hidden md:grid grid-cols-12 bg-gray-50 px-6 py-3 border-b border-gray-200">
            <div class="col-span-2 font-medium text-gray-700 text-sm">ID Transaksi</div>
            <div class="col-span-3 font-medium text-gray-700 text-sm">Produk</div>
            <div class="col-span-2 font-medium text-gray-700 text-sm">Tanggal</div>
            <div class="col-span-2 font-medium text-gray-700 text-sm">Metode</div>
            <div class="col-span-1 font-medium text-gray-700 text-sm">Total</div>
            <div class="col-span-2 font-medium text-gray-700 text-sm">Status</div>
        </div>

        <!-- Transaction Items -->
        @foreach([
            [
                'id' => 'RP-789012',
                'product' => 'Royal Play Coins 120M',
                'date' => '12 Jan 2023, 14:30',
                'method' => 'QRIS',
                'amount' => 'Rp 10.000',
                'status' => 'success',
                'status_text' => 'Berhasil'
            ],
            [
                'id' => 'RP-789011',
                'product' => 'Royal Play Coins 250M',
                'date' => '10 Jan 2023, 09:15',
                'method' => 'Bank BRI',
                'amount' => 'Rp 21.000',
                'status' => 'success',
                'status_text' => 'Berhasil'
            ],
            [
                'id' => 'RP-789010',
                'product' => 'Royal Play Coins 500M',
                'date' => '5 Jan 2023, 18:45',
                'method' => 'ShopeePay',
                'amount' => 'Rp 35.000',
                'status' => 'success',
                'status_text' => 'Berhasil'
            ],
            [
                'id' => 'RP-789009',
                'product' => 'Royal Play Coins 1B',
                'date' => '2 Jan 2023, 11:20',
                'method' => 'Bank BNI',
                'amount' => 'Rp 70.000',
                'status' => 'failed',
                'status_text' => 'Gagal'
            ],
            [
                'id' => 'RP-789008',
                'product' => 'Royal Play Coins 2B',
                'date' => '28 Des 2022, 16:10',
                'method' => 'DANA',
                'amount' => 'Rp 141.000',
                'status' => 'pending',
                'status_text' => 'Pending'
            ]
        ] as $transaction)
        <div class="grid grid-cols-1 md:grid-cols-12 gap-4 px-6 py-4 border-b border-gray-200 hover:bg-gray-50 transition-colors">
            <!-- Mobile View -->
            <div class="md:hidden flex justify-between items-start">
                <div>
                    <div class="font-medium text-gray-900">{{ $transaction['product'] }}</div>
                    <div class="text-sm text-gray-500 mt-1">{{ $transaction['date'] }}</div>
                </div>
                <span class="px-2 py-1 rounded-full text-xs font-medium 
                    {{ $transaction['status'] === 'success' ? 'bg-green-100 text-green-800' : '' }}
                    {{ $transaction['status'] === 'pending' ? 'bg-yellow-100 text-yellow-800' : '' }}
                    {{ $transaction['status'] === 'failed' ? 'bg-red-100 text-red-800' : '' }}">
                    {{ $transaction['status_text'] }}
                </span>
            </div>
            
            <!-- Desktop View -->
            <div class="hidden md:block col-span-2 text-sm text-gray-900">
                {{ $transaction['id'] }}
            </div>
            <div class="hidden md:block col-span-3 text-sm text-gray-900">
                {{ $transaction['product'] }}
            </div>
            <div class="hidden md:block col-span-2 text-sm text-gray-500">
                {{ $transaction['date'] }}
            </div>
            <div class="hidden md:block col-span-2 text-sm text-gray-500">
                {{ $transaction['method'] }}
            </div>
            <div class="hidden md:block col-span-1 text-sm font-medium text-gray-900">
                {{ $transaction['amount'] }}
            </div>
            <div class="hidden md:block col-span-2">
                <span class="px-3 py-1 rounded-full text-xs font-medium 
                    {{ $transaction['status'] === 'success' ? 'bg-green-100 text-green-800' : '' }}
                    {{ $transaction['status'] === 'pending' ? 'bg-yellow-100 text-yellow-800' : '' }}
                    {{ $transaction['status'] === 'failed' ? 'bg-red-100 text-red-800' : '' }}">
                    {{ $transaction['status_text'] }}
                </span>
            </div>
            
            <!-- Mobile View Amount -->
            <div class="md:hidden flex justify-between items-center">
                <div class="text-sm text-gray-500">{{ $transaction['method'] }}</div>
                <div class="text-sm font-medium text-gray-900">{{ $transaction['amount'] }}</div>
            </div>
            
            <!-- Mobile View Details Button -->
            <div class="md:hidden">
                <button class="text-purple-600 text-sm font-medium flex items-center gap-1">
                    Detail
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                    </svg>
                </button>
            </div>
        </div>
        @endforeach

        <!-- Pagination -->
        <div class="px-6 py-4 flex items-center justify-between border-t border-gray-200">
            <div class="text-sm text-gray-700">
                Menampilkan <span class="font-medium">1</span> sampai <span class="font-medium">5</span> dari <span class="font-medium">12</span> transaksi
            </div>
            <div class="flex space-x-2">
                <button class="px-3 py-1 border border-gray-300 rounded-md text-sm font-medium text-gray-700 bg-white hover:bg-gray-50">
                    Sebelumnya
                </button>
                <button class="px-3 py-1 border border-purple-500 rounded-md text-sm font-medium text-white bg-purple-600 hover:bg-purple-700">
                    1
                </button>
                <button class="px-3 py-1 border border-gray-300 rounded-md text-sm font-medium text-gray-700 bg-white hover:bg-gray-50">
                    2
                </button>
                <button class="px-3 py-1 border border-gray-300 rounded-md text-sm font-medium text-gray-700 bg-white hover:bg-gray-50">
                    Selanjutnya
                </button>
            </div>
        </div>
    </div>

    <!-- Empty State (Hidden) -->
    <div class="hidden bg-white shadow-md rounded-2xl p-8 text-center">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-16 w-16 mx-auto text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2" />
        </svg>
        <h3 class="mt-4 text-lg font-medium text-gray-900">Belum ada riwayat transaksi</h3>
        <p class="mt-1 text-gray-500">Transaksi yang Anda lakukan akan muncul di sini.</p>
        <div class="mt-6">
            <a href= class="inline-flex items-center px-4 py-2 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-purple-600 hover:bg-purple-700">
                <svg xmlns="http://www.w3.org/2000/svg" class="-ml-1 mr-2 h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6" />
                </svg>
                Top Up Sekarang
            </a>
        </div>
    </div>
</div>
@endsection