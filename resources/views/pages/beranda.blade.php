@extends('layouts.app')

@section('title', 'Beranda')

@section('content')
<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8">
    <!-- Hero Banner Slider with Promo -->
    <div class="relative rounded-2xl overflow-hidden mb-16 h-96 sm:h-72 md:h-80 lg:h-96">
        <!-- Slider Track -->
        <div class="slider-track flex w-400 h-full transition-transform duration-800 ease-out" id="sliderTrack">
            <!-- Slide 1 - Main Top Up -->
            <div class="slide w-1/4 h-full relative flex-shrink-0">
                <div class="absolute inset-0 bg-gradient-to-r from-purple-900/80 to-indigo-900/80 z-10"></div>
                <img src="{{ asset('https://images.unsplash.com/photo-1534423861386-85a16f5d13fd?w=600&auto=format&fit=crop&q=60&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxzZWFyY2h8Nnx8Z2FtaW5nfGVufDB8fDB8fHww') }}" alt="Game Collection" class="w-full h-full object-cover">
                
                <!-- Floating Particles -->
                <div class="absolute inset-0 z-5 opacity-30">
                    <div class="particle absolute w-1 h-1 bg-white rounded-full animate-pulse" style="top: 20%; left: 10%; animation-delay: 0s;"></div>
                    <div class="particle absolute w-1 h-1 bg-white rounded-full animate-pulse" style="top: 40%; left: 80%; animation-delay: 1s;"></div>
                    <div class="particle absolute w-1 h-1 bg-white rounded-full animate-pulse" style="top: 60%; left: 30%; animation-delay: 2s;"></div>
                    <div class="particle absolute w-1 h-1 bg-white rounded-full animate-pulse" style="top: 80%; left: 70%; animation-delay: 3s;"></div>
                    <div class="particle absolute w-1 h-1 bg-white rounded-full animate-pulse" style="top: 30%; left: 60%; animation-delay: 4s;"></div>
                </div>

                <!-- Content -->
                <div class="absolute inset-0 z-20 flex items-center px-6 sm:px-8 md:px-16">
                    <div class="max-w-2xl text-center sm:text-left">
                        <h1 class="text-3xl sm:text-4xl md:text-5xl font-bold text-white mb-4 bg-gradient-to-r from-white to-purple-200 bg-clip-text text-transparent">
                            Top Up Game Favoritmu Sekarang!
                        </h1>
                        <p class="text-lg sm:text-xl md:text-2xl text-white/90 mb-6">
                            Proses cepat, aman, dan harga terbaik hanya di AKSATA
                        </p>
                        <div class="flex flex-col sm:flex-row gap-4 justify-center sm:justify-start">
                            <a href="#popular-games" class="px-6 py-3 bg-gradient-to-r from-purple-600 to-indigo-600 text-white font-medium rounded-full shadow-lg hover:shadow-xl hover:scale-105 transition-all text-sm sm:text-base relative overflow-hidden group">
                                <span class="relative z-10">🎮 Lihat Game</span>
                                <div class="absolute inset-0 bg-gradient-to-r from-white/20 to-transparent opacity-0 group-hover:opacity-100 transition-opacity"></div>
                            </a>
                            <a href="{{ route('riwayat-pembelian') }}" class="px-6 py-3 border-2 border-white text-white font-medium rounded-full hover:bg-white/10 backdrop-blur-sm transition-all text-sm sm:text-base">
                                📊 Cek Riwayat
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Slide 2 - Bonus Promo -->
            <div class="slide w-1/4 h-full relative flex-shrink-0">
                <div class="absolute inset-0 bg-gradient-to-r from-purple-900/80 to-indigo-900/80 z-10"></div>
                <img src="{{ asset('https://plus.unsplash.com/premium_photo-1674374443275-20dae04975ac?w=600&auto=format&fit=crop&q=60&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxzZWFyY2h8NXx8Z2FtaW5nfGVufDB8fDB8fHww') }}" alt="Game Collection" class="w-full h-full object-cover">
                
                <!-- Floating Particles -->
                <div class="absolute inset-0 z-5 opacity-30">
                    <div class="particle absolute w-1 h-1 bg-white rounded-full animate-pulse" style="top: 20%; left: 10%; animation-delay: 0s;"></div>
                    <div class="particle absolute w-1 h-1 bg-white rounded-full animate-pulse" style="top: 40%; left: 80%; animation-delay: 1s;"></div>
                    <div class="particle absolute w-1 h-1 bg-white rounded-full animate-pulse" style="top: 60%; left: 30%; animation-delay: 2s;"></div>
                    <div class="particle absolute w-1 h-1 bg-white rounded-full animate-pulse" style="top: 80%; left: 70%; animation-delay: 3s;"></div>
                    <div class="particle absolute w-1 h-1 bg-white rounded-full animate-pulse" style="top: 30%; left: 60%; animation-delay: 4s;"></div>
                </div>

                <!-- Content -->
                <div class="absolute inset-0 z-20 flex items-center px-6 sm:px-8 md:px-16">
                    <div class="max-w-2xl text-center sm:text-left">
                        <h1 class="text-3xl sm:text-4xl md:text-5xl font-bold text-white mb-4 bg-gradient-to-r from-white to-purple-200 bg-clip-text text-transparent">
                            Top Up Game Favoritmu Sekarang!
                        </h1>
                        <p class="text-lg sm:text-xl md:text-2xl text-white/90 mb-6">
                            Proses cepat, aman, dan harga terbaik hanya di AKSATA
                        </p>
                        <div class="flex flex-col sm:flex-row gap-4 justify-center sm:justify-start">
                            <a href="#popular-games" class="px-6 py-3 bg-gradient-to-r from-purple-600 to-indigo-600 text-white font-medium rounded-full shadow-lg hover:shadow-xl hover:scale-105 transition-all text-sm sm:text-base relative overflow-hidden group">
                                <span class="relative z-10">🎮 Lihat Game</span>
                                <div class="absolute inset-0 bg-gradient-to-r from-white/20 to-transparent opacity-0 group-hover:opacity-100 transition-opacity"></div>
                            </a>
                            <a href="{{ route('riwayat-pembelian') }}" class="px-6 py-3 border-2 border-white text-white font-medium rounded-full hover:bg-white/10 backdrop-blur-sm transition-all text-sm sm:text-base">
                                📊 Cek Riwayat
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Slide 3 - Bonus Promo -->
            <div class="slide w-1/4 h-full relative flex-shrink-0">
                <div class="absolute inset-0 bg-gradient-to-r from-purple-900/80 to-indigo-900/80 z-10"></div>
                <img src="{{ asset('https://images.unsplash.com/photo-1534423861386-85a16f5d13fd?w=600&auto=format&fit=crop&q=60&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxzZWFyY2h8Nnx8Z2FtaW5nfGVufDB8fDB8fHww') }}" alt="Game Collection" class="w-full h-full object-cover">
                
                <!-- Floating Particles -->
                <div class="absolute inset-0 z-5 opacity-30">
                    <div class="particle absolute w-1 h-1 bg-white rounded-full animate-pulse" style="top: 20%; left: 10%; animation-delay: 0s;"></div>
                    <div class="particle absolute w-1 h-1 bg-white rounded-full animate-pulse" style="top: 40%; left: 80%; animation-delay: 1s;"></div>
                    <div class="particle absolute w-1 h-1 bg-white rounded-full animate-pulse" style="top: 60%; left: 30%; animation-delay: 2s;"></div>
                    <div class="particle absolute w-1 h-1 bg-white rounded-full animate-pulse" style="top: 80%; left: 70%; animation-delay: 3s;"></div>
                    <div class="particle absolute w-1 h-1 bg-white rounded-full animate-pulse" style="top: 30%; left: 60%; animation-delay: 4s;"></div>
                </div>

                <!-- Content -->
                <div class="absolute inset-0 z-20 flex items-center px-6 sm:px-8 md:px-16">
                    <div class="max-w-2xl text-center sm:text-left">
                        <h1 class="text-3xl sm:text-4xl md:text-5xl font-bold text-white mb-4 bg-gradient-to-r from-white to-purple-200 bg-clip-text text-transparent">
                            Top Up Game Favoritmu Sekarang!
                        </h1>
                        <p class="text-lg sm:text-xl md:text-2xl text-white/90 mb-6">
                            Proses cepat, aman, dan harga terbaik hanya di AKSATA
                        </p>
                        <div class="flex flex-col sm:flex-row gap-4 justify-center sm:justify-start">
                            <a href="#popular-games" class="px-6 py-3 bg-gradient-to-r from-purple-600 to-indigo-600 text-white font-medium rounded-full shadow-lg hover:shadow-xl hover:scale-105 transition-all text-sm sm:text-base relative overflow-hidden group">
                                <span class="relative z-10">🎮 Lihat Game</span>
                                <div class="absolute inset-0 bg-gradient-to-r from-white/20 to-transparent opacity-0 group-hover:opacity-100 transition-opacity"></div>
                            </a>
                            <a href="{{ route('riwayat-pembelian') }}" class="px-6 py-3 border-2 border-white text-white font-medium rounded-full hover:bg-white/10 backdrop-blur-sm transition-all text-sm sm:text-base">
                                📊 Cek Riwayat
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Slide 4 - Bonus Promo -->
            <div class="slide w-1/4 h-full relative flex-shrink-0">
                <div class="absolute inset-0 bg-gradient-to-r from-purple-900/80 to-indigo-900/80 z-10"></div>
                <img src="{{ asset('https://images.unsplash.com/photo-1534423861386-85a16f5d13fd?w=600&auto=format&fit=crop&q=60&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxzZWFyY2h8Nnx8Z2FtaW5nfGVufDB8fDB8fHww') }}" alt="Game Collection" class="w-full h-full object-cover">
                
                <!-- Floating Particles -->
                <div class="absolute inset-0 z-5 opacity-30">
                    <div class="particle absolute w-1 h-1 bg-white rounded-full animate-pulse" style="top: 20%; left: 10%; animation-delay: 0s;"></div>
                    <div class="particle absolute w-1 h-1 bg-white rounded-full animate-pulse" style="top: 40%; left: 80%; animation-delay: 1s;"></div>
                    <div class="particle absolute w-1 h-1 bg-white rounded-full animate-pulse" style="top: 60%; left: 30%; animation-delay: 2s;"></div>
                    <div class="particle absolute w-1 h-1 bg-white rounded-full animate-pulse" style="top: 80%; left: 70%; animation-delay: 3s;"></div>
                    <div class="particle absolute w-1 h-1 bg-white rounded-full animate-pulse" style="top: 30%; left: 60%; animation-delay: 4s;"></div>
                </div>

                <!-- Content -->
                <div class="absolute inset-0 z-20 flex items-center px-6 sm:px-8 md:px-16">
                    <div class="max-w-2xl text-center sm:text-left">
                        <h1 class="text-3xl sm:text-4xl md:text-5xl font-bold text-white mb-4 bg-gradient-to-r from-white to-purple-200 bg-clip-text text-transparent">
                            Top Up Game Favoritmu Sekarang!
                        </h1>
                        <p class="text-lg sm:text-xl md:text-2xl text-white/90 mb-6">
                            Proses cepat, aman, dan harga terbaik hanya di AKSATA
                        </p>
                        <div class="flex flex-col sm:flex-row gap-4 justify-center sm:justify-start">
                            <a href="#popular-games" class="px-6 py-3 bg-gradient-to-r from-purple-600 to-indigo-600 text-white font-medium rounded-full shadow-lg hover:shadow-xl hover:scale-105 transition-all text-sm sm:text-base relative overflow-hidden group">
                                <span class="relative z-10">🎮 Lihat Game</span>
                                <div class="absolute inset-0 bg-gradient-to-r from-white/20 to-transparent opacity-0 group-hover:opacity-100 transition-opacity"></div>
                            </a>
                            <a href="{{ route('riwayat-pembelian') }}" class="px-6 py-3 border-2 border-white text-white font-medium rounded-full hover:bg-white/10 backdrop-blur-sm transition-all text-sm sm:text-base">
                                📊 Cek Riwayat
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Progress Bar -->
        <div class="absolute bottom-0 left-0 h-1 bg-gradient-to-r from-purple-600 via-pink-600 to-blue-600 transform-origin-left progress-bar z-25"></div>

        <!-- Navigation Dots -->
        <div class="absolute bottom-4 left-1/2 transform -translate-x-1/2 flex gap-3 z-30">
            <div class="nav-dot w-3 h-3 rounded-full bg-white cursor-pointer transition-all hover:scale-110 shadow-lg" onclick="goToSlide(0)"></div>
            <div class="nav-dot w-3 h-3 rounded-full bg-white/40 cursor-pointer transition-all hover:scale-110 hover:bg-white/70" onclick="goToSlide(1)"></div>
            <div class="nav-dot w-3 h-3 rounded-full bg-white/40 cursor-pointer transition-all hover:scale-110 hover:bg-white/70" onclick="goToSlide(2)"></div>
            <div class="nav-dot w-3 h-3 rounded-full bg-white/40 cursor-pointer transition-all hover:scale-110 hover:bg-white/70" onclick="goToSlide(3)"></div>
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
    <div id="popular-games" class="mb-16 px-6">
        <div class="flex justify-between items-center mb-8">
            <h2 class="text-2xl md:text-3xl font-bold text-gray-900">🎮 Game Populer</h2>
        </div>

        <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-5 gap-4 md:gap-6">
            @foreach($games as $game)
                <a href="{{ route('game.show', $game->id) }}" class="group block">
                    <div class="relative overflow-hidden rounded-xl aspect-[3/4] shadow-sm hover:shadow-md transition-shadow">
                        <img
                            src="{{ $game->gambar ?? asset('images/default-game.png') }}"
                            alt="{{ $game->nama }}"
                            class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105">

                        <div class="absolute inset-0 bg-gradient-to-t from-black/60 via-transparent to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex flex-col justify-end p-4">
                            @if($game->deskripsi)
                                <span class="text-xs text-white bg-purple-600 px-2 py-1 rounded-full self-start mb-2">
                                    {{ $game->deskripsi }}
                                </span>
                            @endif
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
    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6 mb-12">
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
    <div class="bg-white p-6 md:p-8 rounded-xl shadow-sm w-full mx-auto">
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

<style>
    /* Slider Styles */
    .slider-track {
        width: 400%;
    }
    
    .progress-bar {
        animation: progress 4s linear infinite;
    }
    
    @keyframes progress {
        0% { transform: scaleX(0); }
        100% { transform: scaleX(1); }
    }
    
    /* Particle Animations */
    @keyframes float {
        0%, 100% { transform: translateY(0px) rotate(0deg); opacity: 0.3; }
        50% { transform: translateY(-20px) rotate(180deg); opacity: 0.8; }
    }
    
    .particle {
        animation: float 6s ease-in-out infinite;
    }
    
    /* Rating Stars */
    .rating-star {
        transition: all 0.2s ease;
    }
    .rating-star:hover {
        transform: scale(1.2);
    }
    
    /* Button Hover Effects */
    .btn-gradient:hover {
        box-shadow: 0 20px 25px -5px rgba(0, 0, 0, 0.1), 0 10px 10px -5px rgba(0, 0, 0, 0.04);
    }
</style>

<script>
    let currentSlide = 0;
    const totalSlides = 4;
    const sliderTrack = document.getElementById('sliderTrack');
    const navDots = document.querySelectorAll('.nav-dot');
    let autoSlideInterval;

    function updateSlider() {
        const translateX = -currentSlide * 25;
        sliderTrack.style.transform = `translateX(${translateX}%)`;
        
        // Update navigation dots
        navDots.forEach((dot, index) => {
            if (index === currentSlide) {
                dot.classList.remove('bg-white/40');
                dot.classList.add('bg-white');
            } else {
                dot.classList.remove('bg-white');
                dot.classList.add('bg-white/40');
            }
        });
    }

    function nextSlide() {
        currentSlide = (currentSlide + 1) % totalSlides;
        updateSlider();
        resetAutoSlide();
    }

    function prevSlide() {
        currentSlide = (currentSlide - 1 + totalSlides) % totalSlides;
        updateSlider();
        resetAutoSlide();
    }

    function goToSlide(slideIndex) {
        currentSlide = slideIndex;
        updateSlider();
        resetAutoSlide();
    }

    function startAutoSlide() {
        autoSlideInterval = setInterval(nextSlide, 4000);
    }

    function resetAutoSlide() {
        clearInterval(autoSlideInterval);
        startAutoSlide();
    }

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

    // Start auto-slide when page loads
    document.addEventListener('DOMContentLoaded', () => {
        startAutoSlide();
    });

    // Pause auto-slide on hover
    const slider = document.querySelector('.relative.rounded-2xl');
    if (slider) {
        slider.addEventListener('mouseenter', () => {
            clearInterval(autoSlideInterval);
        });

        slider.addEventListener('mouseleave', () => {
            startAutoSlide();
        });

        // Touch/Swipe support for mobile
        let startX = 0;
        let endX = 0;

        slider.addEventListener('touchstart', (e) => {
            startX = e.touches[0].clientX;
        });

        slider.addEventListener('touchend', (e) => {
            endX = e.changedTouches[0].clientX;
            handleSwipe();
        });

        function handleSwipe() {
            const swipeThreshold = 50;
            const diff = startX - endX;

            if (Math.abs(diff) > swipeThreshold) {
                if (diff > 0) {
                    nextSlide();
                } else {
                    prevSlide();
                }
            }
        }
    }

    // Keyboard navigation
    document.addEventListener('keydown', (e) => {
        if (e.key === 'ArrowLeft') {
            prevSlide();
        } else if (e.key === 'ArrowRight') {
            nextSlide();
        }
    });
</script>
@endsection

    