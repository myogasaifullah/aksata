@extends('layouts.app')

@section('title', 'Beranda')

@section('content')
<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8">
    <!-- Hero Banner with Promo -->
    <div class="relative rounded-2xl overflow-hidden mb-16 h-64 sm:h-72 md:h-80 lg:h-96">
        <div class="absolute inset-0 bg-gradient-to-r from-purple-900/80 to-indigo-900/80 z-10"></div>
        <img src="{{ asset('storage/images/gaming-banner.jpg') }}" alt="Game Collection" class="w-full h-full object-cover">

        <!-- Content -->
        <div class="absolute inset-0 z-20 flex items-center px-6 sm:px-8 md:px-16">
            <div class="max-w-2xl text-center sm:text-left">
                <!-- Heading -->
                <h1 class="text-3xl sm:text-4xl md:text-5xl font-bold text-white mb-4">
                    Top Up Game Favoritmu Sekarang!
                </h1>
                <p class="text-lg sm:text-xl md:text-2xl text-white/90 mb-6">
                    Proses cepat, aman, dan harga terbaik hanya di AKSATA
                </p>

                <!-- Button Group -->
                <div class="flex flex-col sm:flex-row gap-4 justify-center sm:justify-start">
                    <a href="#popular-games" class="px-6 py-3 bg-white text-purple-700 font-medium rounded-full shadow-lg hover:bg-gray-100 transition-all text-sm sm:text-base">
                        Lihat Game
                    </a>
                    <a href="{{ route('riwayat-pembelian') }}" class="px-6 py-3 border-2 border-white text-white font-medium rounded-full hover:bg-white/10 transition-all text-sm sm:text-base">
                        Cek Riwayat
                    </a>
                </div>
            </div>
        </div>
    </div>


    <!-- Features Section -->
    <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-16">
        <div class="bg-white p-6 rounded-xl shadow-sm border border-gray-100 hover:shadow-md transition-shadow">
            <div class="flex items-center mb-4">
                <div class="bg-purple-100 p-3 rounded-lg mr-4">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-purple-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                </div>
                <h3 class="font-bold text-lg">Proses Instan</h3>
            </div>
            <p class="text-gray-600">Item game langsung masuk ke akun Anda dalam hitungan menit setelah pembayaran berhasil.</p>
        </div>

        <div class="bg-white p-6 rounded-xl shadow-sm border border-gray-100 hover:shadow-md transition-shadow">
            <div class="flex items-center mb-4">
                <div class="bg-purple-100 p-3 rounded-lg mr-4">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-purple-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
                    </svg>
                </div>
                <h3 class="font-bold text-lg">100% Aman</h3>
            </div>
            <p class="text-gray-600">Transaksi terjamin keamanannya dengan sistem pembayaran terenkripsi.</p>
        </div>

        <div class="bg-white p-6 rounded-xl shadow-sm border border-gray-100 hover:shadow-md transition-shadow">
            <div class="flex items-center mb-4">
                <div class="bg-purple-100 p-3 rounded-lg mr-4">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-purple-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 10h18M7 15h1m4 0h1m-7 4h12a3 3 0 003-3V8a3 3 0 00-3-3H6a3 3 0 00-3 3v8a3 3 0 003 3z" />
                    </svg>
                </div>
                <h3 class="font-bold text-lg">Beragam Pembayaran</h3>
            </div>
            <p class="text-gray-600">Dukung berbagai metode pembayaran mulai dari transfer bank hingga e-wallet.</p>
        </div>
    </div>

    <!-- Popular Games Section -->
    <div id="popular-games" class="mb-16">
        <div class="flex justify-between items-center mb-8">
            <h2 class="text-2xl md:text-3xl font-bold text-gray-900">🎮 Game Populer</h2>

        </div>

        <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-5 gap-4 md:gap-6">
            @foreach($games as $game)
            <a href="{{ route('show') }}" class="group block">
                <div class="relative overflow-hidden rounded-xl aspect-[3/4] shadow-sm hover:shadow-md transition-shadow">
                    <img
                        src="{{ $game->gambar }}"
                        alt="{{ $game->nama }}"
                        class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/60 via-transparent to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex flex-col justify-end p-4">
                        <span class="text-xs text-white bg-purple-600 px-2 py-1 rounded-full self-start mb-2">{{ $game->deskripsi }}</span>
                        <h3 class="text-white font-semibold">{{ $game->nama }}</h3>
                    </div>
                </div>
            </a>
            @endforeach
        </div>
    </div>



    <!-- Testimonials Section -->
<div class="bg-gradient-to-br from-purple-50 to-indigo-50 rounded-2xl p-8 md:p-12 mb-16">
    <h2 class="text-2xl md:text-3xl font-bold text-gray-900 mb-8 text-center">Apa Kata Pelanggan Kami?</h2>
    
    <!-- Testimonials Grid -->
    <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-12">
        @foreach($rates as $rate)
        <div class="bg-white p-6 rounded-xl shadow-sm hover:shadow-md transition-shadow duration-300">
            <div class="flex items-center mb-4">
                <div class="text-yellow-400 mr-2 text-lg">
                    @for ($i = 0; $i < $rate->stars; $i++)
                        ★
                    @endfor
                    @for ($i = $rate->stars; $i < 5; $i++)
                        ☆
                    @endfor
                </div>
                <span class="text-sm text-gray-500">({{ $rate->stars }}/5)</span>
            </div>
            <p class="text-gray-600 italic mb-4">"{{ $rate->description }}"</p>
            <div class="flex items-center">
                <div class="bg-purple-100 text-purple-800 w-10 h-10 rounded-full flex items-center justify-center font-bold mr-3">
                    {{ substr($rate->name, 0, 1) }}
                </div>
                <div>
                    <h4 class="font-medium text-gray-900">{{ $rate->name }}</h4>
                    <p class="text-sm text-gray-500">{{ $rate->created_at->format('d M Y') }}</p>
                </div>
            </div>
        </div>
        @endforeach
    </div>

    <!-- Customer Input Form -->
    <div class="bg-white p-6 md:p-8 rounded-xl shadow-sm max-w-3xl mx-auto">
        <h3 class="text-xl font-semibold text-gray-900 mb-6 text-center">Bagikan Pengalaman Anda</h3>
        
        <form method="POST" action="{{ route('public.rate.store') }}" class="space-y-4">
            @csrf
            
            <!-- Name Input -->
            <div>
                <label for="name" class="block text-sm font-medium text-gray-700 mb-1">Nama Anda</label>
                <input type="text" id="name" name="name" required
                       class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-purple-500 focus:border-transparent transition-all"
                       placeholder="Masukkan nama Anda">
            </div>

            <!-- Kode Transaksi Input -->
            <div>
                <label for="transaction_id" class="block text-sm font-medium text-gray-700 mb-1">Kode Transaksi</label>
            <input type="text" id="transaction_id" name="transaction_id" required
                   class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-purple-500 focus:border-transparent transition-all @error('transaction_id') border-red-500 @enderror"
                   placeholder="Masukkan Kode Transaksi Anda" value="{{ old('transaction_id') }}">
            @error('transaction_id')
                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
            @enderror
            </div>
            
            <!-- Rating Input -->
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-2">Rating</label>
                <div class="flex space-x-2">
                    @for($i = 1; $i <= 5; $i++)
                        <button type="button" onclick="setRating({{ $i }})" 
                                class="text-2xl focus:outline-none rating-star"
                                data-rating="{{ $i }}">
                            ☆
                        </button>
                    @endfor
                </div>
                <input type="hidden" id="stars" name="stars" value="0" required>
            </div>
            
            <!-- Testimonial Input -->
            <div>
                <label for="description" class="block text-sm font-medium text-gray-700 mb-1">Testimonial</label>
                <textarea id="description" name="description" rows="4" required
                          class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-purple-500 focus:border-transparent transition-all"
                          placeholder="Bagikan pengalaman Anda..."></textarea>
            </div>
            
            <!-- Submit Button -->
            <div class="pt-2">
                <button type="submit" 
                        class="w-full bg-purple-600 hover:bg-purple-700 text-white font-medium py-3 px-6 rounded-lg transition-colors duration-300 shadow-md hover:shadow-lg">
                    Kirim Testimonial
                </button>
            </div>
        </form>
    </div>
</div>

<script>
    // Rating star selection
    function setRating(rating) {
        // Update hidden input value
        document.getElementById('stars').value = rating;
        
        // Update star display
        const stars = document.querySelectorAll('.rating-star');
        stars.forEach((star, index) => {
            if (index < rating) {
                star.textContent = '★';
                star.classList.add('text-yellow-400');
            } else {
                star.textContent = '☆';
                star.classList.remove('text-yellow-400');
            }
        });
    }
</script>

<style>
    .rating-star {
        transition: all 0.2s ease;
    }
    .rating-star:hover {
        transform: scale(1.2);
    }
</style>

    <!-- CTA Section -->
    <div class="text-center bg-gradient-to-r from-purple-600 to-indigo-600 rounded-2xl p-8 md:p-12 text-white">
        <h2 class="text-2xl md:text-3xl font-bold mb-4">Siap Top Up Game Favoritmu?</h2>
        <p class="text-lg mb-6 max-w-2xl mx-auto">Bergabung dengan ribuan gamers lainnya yang sudah mempercayakan top up game mereka di AKSATA</p>
        <div class="flex flex-col sm:flex-row gap-4 justify-center">
            <a href="#popular-games" class="px-8 py-3 bg-white text-purple-700 font-bold rounded-full shadow-lg hover:bg-gray-100 transition-all">
                Lihat Game
            </a>
            <a href="{{ route('syarat-ketentuan') }}" class="px-8 py-3 border-2 border-white text-white font-bold rounded-full hover:bg-white/10 transition-all">
                Syarat & Ketentuan
            </a>
        </div>
    </div>
</div>
@endsection