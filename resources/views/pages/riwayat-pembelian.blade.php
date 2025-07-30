    @extends('layouts.app')

    @section('content')
    <div class="max-w-6xl mx-auto py-8 px-4">
        <!-- Header Section -->
        <div class="mb-6">
            <h1 class="text-2xl md:text-3xl font-bold text-gray-800">Cari Riwayat Pembelian Anda</h1>
            <p class="text-gray-600 mt-1">Masukkan Game ID untuk melihat detail pembelian Anda</p>
        </div>

        <!-- Search Form -->
        <div class="mb-10">
            <form action="{{ route('riwayat-pembelian') }}" method="GET" class="flex flex-col sm:flex-row gap-3">
                <input
                    type="text"
                    name="game_id"
                    placeholder="Masukkan ID Game Anda"
                    value="{{ old('game_id', $search) }}"
                    class="w-full sm:w-1/3 px-4 py-2 border border-gray-300 rounded-lg text-sm focus:ring-purple-500 focus:border-purple-500"
                >
                <button type="submit" class="px-4 py-2 bg-purple-600 text-white rounded-lg text-sm hover:bg-purple-700">
                    Cari
                </button>
            </form>
        </div>

        <!-- Conditional Display -->
        @if(request()->has('game_id'))
            @if($orders->isEmpty())
                <!-- No result -->
                <div class="bg-white p-6 rounded-lg shadow-md text-center text-gray-500">
                    Tidak ada transaksi dengan ID <strong>{{ $search }}</strong>.
                </div>
            @else
                <!-- Table only shown if data found -->
                <div class="bg-white shadow-md rounded-2xl overflow-hidden">
                    <!-- Table Header -->
                    <div class="hidden md:grid grid-cols-12 bg-gray-50 px-6 py-3 border-b border-gray-200">
                        <div class="col-span-2 font-medium text-gray-700 text-sm">ID Transaksi</div>
                        <div class="col-span-2 font-medium text-gray-700 text-sm">Game ID</div>
                        <div class="col-span-3 font-medium text-gray-700 text-sm">Produk</div>
                        <div class="col-span-2 font-medium text-gray-700 text-sm">Tanggal</div>
                        <div class="col-span-2 font-medium text-gray-700 text-sm">Metode</div>
                        <div class="col-span-1 font-medium text-gray-700 text-sm">Total</div>
                        <div class="col-span-2 font-medium text-gray-700 text-sm">Status</div>
                    </div>

                    <!-- Transaction Item -->
                    @foreach($orders as $order)
                    <div class="grid grid-cols-1 md:grid-cols-12 gap-4 px-6 py-4 border-b border-gray-200 hover:bg-gray-50 transition-colors">
                        <div class="hidden md:block col-span-2 text-sm text-gray-900">{{ $order->id_transaksi }}</div>
                        <div class="hidden md:block col-span-2 text-sm text-gray-900">{{ $order->game_id }}</div>
                        <div class="hidden md:block col-span-3 text-sm text-gray-900">{{ $order->produk }}</div>
                        <div class="hidden md:block col-span-2 text-sm text-gray-500">
                            {{ \Carbon\Carbon::parse($order->tanggal)->format('d M Y, H:i') }}
                        </div>
                        <div class="hidden md:block col-span-2 text-sm text-gray-500">{{ $order->metode }}</div>
                        <div class="hidden md:block col-span-1 text-sm font-medium text-gray-900">
                            Rp {{ number_format($order->total, 0, ',', '.') }}
                        </div>
                        <div class="hidden md:block col-span-2">    
                            <span class="px-3 py-1 rounded-full text-xs font-medium 
                                @if($order->status === 'Berhasil' || $order->status === 'success') bg-green-100 text-green-800
                                @elseif($order->status === 'Pending' || $order->status === 'pending') bg-yellow-100 text-yellow-800
                                @elseif($order->status === 'Gagal' || $order->status === 'failed') bg-red-100 text-red-800
                                @else bg-gray-100 text-gray-800 @endif">
                                @if($order->status === 'Berhasil' || $order->status === 'success') Berhasil
                                @elseif($order->status === 'Pending' || $order->status === 'pending') Pending
                                @elseif($order->status === 'Gagal' || $order->status === 'failed') Gagal
                                @else {{ $order->status }} @endif
                            </span>
                        </div>
                    </div>
                    @endforeach
                </div>
            @endif
        @endif
    </div>
    @endsection
