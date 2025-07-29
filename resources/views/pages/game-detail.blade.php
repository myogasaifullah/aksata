@extends('layouts.app')

@section('content')
<div class="max-w-5xl mx-auto py-10 px-4">



    <!-- Game Detail Header -->
    <!-- Game Detail Header - Improved Version -->
    <div class="container mx-auto px-4 py-8">
        <h1 class="text-3xl font-bold mb-6 text-purple-700">Detail Game</h1>

        <div class="bg-gradient-to-r from-purple-50 to-indigo-50 shadow-lg rounded-2xl p-6 md:flex md:items-center md:gap-6 transition-all duration-300 hover:shadow-xl border border-purple-100 mb-6 hover:scale-[1.01]">

            <!-- Game Icon -->
            <div class="flex-shrink-0 mb-4 md:mb-0 relative group">
                <div class="absolute inset-0 bg-purple-200 opacity-0 group-hover:opacity-20 rounded-xl transition-opacity duration-300"></div>
                <img src="{{ $game->gambar }}"
                    alt="{{ $game->nama }}"
                    class="w-28 h-28 md:w-32 md:h-32 rounded-xl object-cover ring-2 ring-purple-500/30 shadow-md transition-all duration-300 group-hover:ring-purple-500/60 group-hover:scale-[1.03]">
            </div>


            <!-- Game Info -->
            <div class="flex-1 space-y-3">
                <div class="flex flex-col sm:flex-row sm:items-center justify-between gap-2">
                    <h2 class="text-2xl md:text-3xl font-bold text-gray-900 tracking-tight">
                        {{ $game->nama }}
                    </h2>
                    <span class="bg-gradient-to-r from-purple-500 to-indigo-500 text-white text-xs font-medium px-3 py-1 rounded-full shadow-sm w-fit">
                        Domino Game
                    </span>
                </div>

                <p class="text-sm text-gray-600 flex items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-1 text-purple-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13.828 10.172a4 4 0 00-5.656 0l-4 4a4 4 0 105.656 5.656l1.102-1.101m-.758-4.899a4 4 0 005.656 0l4-4a4 4 0 00-5.656-5.656l-1.1 1.1" />
                    </svg>
                    <span class="font-semibold text-purple-600">HIGOGAME</span>
                </p>



                <div class="flex flex-wrap gap-4 text-sm mt-3">
                    <div class="flex items-center gap-2 bg-white px-3 py-1 rounded-full shadow-inner border border-purple-100">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-purple-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                        <span class="text-gray-700">15-30 Menit</span>
                    </div>
                    <div class="flex items-center gap-2 bg-white px-3 py-1 rounded-full shadow-inner border border-purple-100">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-purple-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 8h14M5 8a2 2 0 110-4h14a2 2 0 110 4M5 8v10a2 2 0 002 2h10a2 2 0 002-2V8m-9 4h4" />
                        </svg>
                        <span class="text-gray-700">Buka 24 Jam</span>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- Deskripsi Game - Improved Version -->
    <div class="mt-10 bg-white/80 backdrop-blur-sm p-6 rounded-2xl shadow-sm border border-gray-100">
        <h2 class="text-xl font-semibold text-gray-800 mb-4 flex items-center gap-2">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-purple-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
            </svg>
            Top Up Royal Play Domino Chip Murah
        </h2>
        <div class="text-gray-700 leading-relaxed space-y-3 text-justify">
            <p>{{ $game->deskripsi }}</p>
            <div class="bg-purple-50 border-l-4 border-purple-500 p-3 rounded-r">
                <p class="font-medium text-purple-800">Cara Bermain:</p>
                <p>{{ $game->cara_bermain }}</p>

            </div>
            <!-- Header with Progress Steps -->
            <div class="mb-10 mt-10 text-center">
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
                            <div class="w-10 h-10 rounded-full bg-gray-200 flex items-center justify-center text-gray-600 font-bold mb-2">
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

                <h1 class="text-2xl md:text-3xl font-bold text-gray-800 mb-2">Pemesanan</h1>
                <p class="text-gray-600">Pastikan semua data sudah benar sebelum melanjutkan pembayaran</p>
            </div>

            <!-- Improved Input Sections -->
            <form action="{{ route('order.store') }}" method="POST" class="mt-6" onsubmit="return validateForm();">
                @csrf

                <!-- Hidden Fields -->
                <input type="hidden" name="tanggal" value="{{ now()->toDateString() }}">
                <input type="hidden" name="produk" value="{{ $game->nama }}">
                <input type="hidden" name="total" value="0">
                <input type="hidden" name="status" value="pending">
                <input type="hidden" name="game_id" value="{{ $game->id }}">


                @php
                $steps = [
                ['1', 'Cari Akun Anda', 'Masukkan User ID (Bukan Higgs)', '?', 'game_id'], // <- ubah dari 'user_id' jadi 'game_id'
                    ['2', 'Cara Menghubungi Anda' , 'Masukan Nomor Telp' , '' , 'no_telp' ]
                    ];
                    @endphp

                    @foreach ($steps as [$num, $title, $placeholder, $hint, $field])
                    <div class="bg-white shadow-sm p-6 rounded-2xl mt-6 border border-gray-100 hover:border-purple-200 transition-all duration-200">
                    <div class="flex items-center mb-4">
                        <div class="bg-gradient-to-br from-purple-500 to-indigo-500 text-white font-bold w-7 h-7 flex items-center justify-center rounded-full mr-3 text-sm shadow-sm">
                            {{ $num }}
                        </div>
                        <h3 class="text-lg font-semibold text-gray-800">{{ $title }}</h3>
                    </div>
                    <div class="relative">
                        <input
                            type="text"
                            name="{{ $field }}" {{-- game_id dan no_telp --}}
                            placeholder="{{ $placeholder }}"
                            required
                            class="w-full border border-gray-200 rounded-lg px-4 py-3 text-sm placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-purple-500/50 focus:border-purple-300 transition pl-10 bg-gray-50" />
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-gray-400 absolute left-3 top-1/2 transform -translate-y-1/2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                        </svg>
                    </div>
                    @if($hint)
                    <div class="flex items-center mt-3 text-sm text-gray-600">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-1 text-purple-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                        <span class="text-purple-600 font-medium cursor-pointer hover:underline">Petunjuk</span>
                    </div>
                    @endif
        </div>
        @endforeach


        <!-- Step 3: Package Selection -->
        <div class="bg-white shadow-sm p-6 rounded-2xl mt-6 border border-gray-200" x-data="{ 
        open: null,
        selectedPackage: null 
    }">
            <div class="flex items-center mb-4">
                <div class="bg-gradient-to-br from-purple-500 to-indigo-500 text-white font-bold w-7 h-7 flex items-center justify-center rounded-full mr-3 text-sm shadow-sm">3</div>
                <h3 class="text-lg font-semibold text-gray-800">Pilih Paket</h3>
            </div>

            <!-- Input hidden untuk produk -->
            <input type="hidden" name="produk" x-model="selectedPackage ? selectedPackage.label : ''">
<!-- Input hidden untuk total harga -->
<input type="hidden" name="total" x-model="selectedPackage ? selectedPackage.price : ''">

            <div class="space-y-3">
                <!-- Package Type -->
                <div x-data="{ open: false }" class="border border-gray-200 rounded-xl overflow-hidden transition-all duration-300 hover:border-purple-300"
                    :class="{ 'border-purple-500': open }">
                    <button @click="open = !open"
                        type="button"
                        class="w-full text-left px-5 py-4 bg-white flex justify-between items-center transition-all"
                        :class="{ 'bg-gray-50': open }">
                        <div class="flex items-center gap-3">
                            <span class="bg-yellow-100 p-2 rounded-lg border border-yellow-200">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-yellow-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                            </span>
                            <div>
                                <h4 class="font-medium text-gray-800">Top Up Koin Emas</h4>
                                <p class="text-xs text-gray-500 mt-1">Pilih nominal yang diinginkan</p>
                            </div>
                        </div>
                        <svg :class="{ 'rotate-180 text-purple-600': open }"
                            class="w-5 h-5 text-gray-500 transition-transform duration-300"
                            fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                        </svg>
                    </button>

                    <div x-show="open" x-collapse class="bg-white border-t border-gray-200 p-4">
                        <div class="grid grid-cols-2 md:grid-cols-3 gap-3">
                            @if(isset($hargas) && $hargas->count() > 0)
                            @foreach ($hargas as $harga)
                            <div @click="selectedPackage = { label: '{{ $harga->jumlah }} Chip', price: '{{ $harga->harga }}' }"
                                class="border border-gray-200 rounded-lg p-3 cursor-pointer transition-all duration-200 hover:border-purple-300 hover:bg-purple-50"
                                :class="{ 'border-purple-500 bg-purple-50': selectedPackage && selectedPackage.label === '{{ $harga->jumlah }} Chip' }">
                                <div class="font-semibold text-gray-800">{{ $harga->jumlah }} Chip</div>
                                <div class="text-sm text-gray-600 mt-1">Rp {{ number_format($harga->harga, 0, ',', '.') }}</div>
                                <div x-show="selectedPackage && selectedPackage.label === '{{ $harga->jumlah }} Chip'"
                                    class="flex justify-end mt-1">
                                    <span class="text-xs bg-purple-500 text-white px-2 py-1 rounded-full">Dipilih</span>
                                </div>
                            </div>
                            @endforeach
                            @else
                            <div class="text-gray-500">Harga paket tidak tersedia.</div>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="bg-white shadow-sm p-6 rounded-2xl mt-6 border border-gray-200" x-data="{ openPayment: null, selectedPayment: null }">
            <div class="flex items-center mb-4">
                <div class="bg-gradient-to-br from-purple-500 to-indigo-500 text-white font-bold w-7 h-7 flex items-center justify-center rounded-full mr-3 text-sm shadow-sm">4</div>
                <h3 class="text-lg font-semibold text-gray-800">Pilih Pembayaran</h3>
            </div>

            <input type="hidden" name="metode" x-model="selectedPayment ? selectedPayment.method : ''" />

            <div class="space-y-3">
                <!-- BANK -->
                <div class="border border-gray-200 rounded-xl overflow-hidden transition-all duration-300 hover:border-purple-300" :class="{ 'border-purple-500': openPayment === 'bank' }">
                    <button type="button" @click="openPayment = openPayment === 'bank' ? null : 'bank'" class="w-full text-left px-5 py-4 bg-white flex justify-between items-center transition-all" :class="{ 'bg-gray-50': openPayment === 'bank' }">
                        <div class="flex items-center gap-3">
                            <span class="bg-green-100 p-2 rounded-lg border border-green-200">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-green-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 10h18M7 15h1m4 0h1m-7 4h12a3 3 0 003-3V8a3 3 0 00-3-3H6a3 3 0 00-3 3v8a3 3 0 003 3z" />
                                </svg>
                            </span>
                            <div>
                                <h4 class="font-medium text-gray-800">Transfer Bank</h4>
                                <p class="text-xs text-gray-500 mt-1">BRI, BNI, Mandiri, CIMB</p>
                            </div>
                        </div>
                        <svg :class="{ 'rotate-180 text-purple-600': openPayment === 'bank' }" class="w-5 h-5 text-gray-500 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                        </svg>
                    </button>

                    <div x-show="openPayment === 'bank'" x-collapse class="bg-white border-t border-gray-200">
                        @foreach ($payments as $payment)
                        <button type="button" @click="selectedPayment = { type: 'bank', method: '{{ $payment->method }}', value: '{{ $payment->account_number }}' }"
                            class="w-full flex justify-between items-center p-4 border-b border-gray-100 cursor-pointer transition-all duration-200 hover:bg-purple-50 text-left"
                            :class="{ 'bg-purple-50': selectedPayment && selectedPayment.method === '{{ $payment->method }}' }">
                            <div class="flex items-center gap-4">
                                <img src="{{ asset('storage/' . $payment->image) }}" alt="{{ $payment->method }}" class="h-8 object-contain border border-gray-200 rounded-md p-1 bg-white">
                                <span class="font-medium text-gray-800">{{ $payment->method }}</span>
                            </div>
                            <div class="flex items-center gap-2">
                                <span class="font-semibold text-gray-700">{{ $payment->account_number }}</span>
                                <div x-show="selectedPayment && selectedPayment.method === '{{ $payment->method }}'" class="w-5 h-5 flex items-center justify-center bg-purple-500 text-white rounded-full">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3" viewBox="0 0 20 20" fill="currentColor">
                                        <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                                    </svg>
                                </div>
                            </div>
                        </button>
                        @endforeach
                    </div>
                </div>

                <!-- EWALLET -->
                <div class="border border-gray-200 rounded-xl overflow-hidden transition-all duration-300 hover:border-purple-300" :class="{ 'border-purple-500': openPayment === 'ewallet' }">
                    <button type="button" @click="openPayment = openPayment === 'ewallet' ? null : 'ewallet'" class="w-full text-left px-5 py-4 bg-white flex justify-between items-center transition-all" :class="{ 'bg-gray-50': openPayment === 'ewallet' }">
                        <div class="flex items-center gap-3">
                            <span class="bg-blue-100 p-2 rounded-lg border border-blue-200">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-blue-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 10h18M7 15h1m4 0h1m-7 4h12a3 3 0 003-3V8a3 3 0 00-3-3H6a3 3 0 00-3 3v8a3 3 0 003 3z" />
                                </svg>
                            </span>
                            <div>
                                <h4 class="font-medium text-gray-800">E-Wallet</h4>
                                <p class="text-xs text-gray-500 mt-1">QRIS, ShopeePay, OVO, Dana</p>
                            </div>
                        </div>
                        <svg :class="{ 'rotate-180 text-purple-600': openPayment === 'ewallet' }" class="w-5 h-5 text-gray-500 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                        </svg>
                    </button>

                    <div x-show="openPayment === 'ewallet'" x-collapse class="bg-white border-t border-gray-200">
                        @foreach ($qrs as $qr)
                        <button type="button" @click="selectedPayment = { type: 'ewallet', method: 'QR Code', value: '{{ $qr->id }}' }"
                            class="w-full flex justify-between items-center p-4 border-b border-gray-100 cursor-pointer transition-all duration-200 hover:bg-purple-50 text-left"
                            :class="{ 'bg-purple-50': selectedPayment && selectedPayment.method === 'QR Code' && selectedPayment.value == '{{ $qr->id }}' }">
                            <div class="flex items-center gap-4">
                                <img src="{{ asset('storage/' . $qr->gambar) }}" alt="QR Code" class="h-8 object-contain border border-gray-200 rounded-md p-1 bg-white">
                                <span class="font-medium text-gray-800">QR Code</span>
                            </div>
                            <div class="flex items-center gap-2">
                                <div x-show="selectedPayment && selectedPayment.method === 'QR Code' && selectedPayment.value == '{{ $qr->id }}'" class="w-5 h-5 flex items-center justify-center bg-purple-500 text-white rounded-full">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3" viewBox="0 0 20 20" fill="currentColor">
                                        <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                                    </svg>
                                </div>
                            </div>
                        </button>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>


        <!-- Tombol Submit -->
        <div class="mt-6 text-right">
            <button type="submit" class="bg-purple-600 hover:bg-purple-700 text-white font-semibold px-6 py-2 rounded-lg shadow">
                Lanjutkan
            </button>
        </div>
        </form>


        <!-- Step 4: Payment Selection with Consistent Borders -->


    </div>
</div>
</div>
<!-- Tombol Lanjutkan ke Pembayaran sebagai link -->
<div class="mt-8 text-center animate-fade-in">
    <a href="{{ route('konfirmasi-pembayaran') }}" class="bg-purple-600 hover:bg-purple-700 text-white font-semibold px-10 py-3 rounded-lg shadow transition duration-300 ease-in-out inline-block">
        Lanjutkan ke Pembayaran
    </a>
</div>

</div>
@endsection

<script>
    function validateForm() {
        const metode = document.querySelector('input[name="metode"]').value;
        if (!metode) {
            alert("Silakan pilih metode pembayaran terlebih dahulu.");
            return false;
        }
        return true;
    }
</script>