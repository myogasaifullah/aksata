@extends('layouts.app')

@section('content')
<div class="min-h-screen bg-gradient-to-br from-purple-50 via-blue-50 to-indigo-100">
    <!-- Header Background -->
    <div class="bg-gradient-to-r from-purple-900 via-blue-900 to-indigo-900 text-white py-16">
        <div class="max-w-6xl mx-auto px-4">
            <div class="text-center">
                <!-- Icon -->
                <div class="inline-block p-4 bg-white/10 backdrop-blur-sm rounded-2xl mb-6">
                    <div class="w-16 h-16 bg-gradient-to-br from-blue-400 to-purple-500 rounded-xl flex items-center justify-center text-2xl font-bold text-white shadow-lg">
                        📋
                    </div>
                </div>
                
                <!-- Title -->
                <h1 class="text-4xl md:text-5xl font-bold mb-4 bg-gradient-to-r from-white via-blue-100 to-purple-200 bg-clip-text text-transparent">
                    Riwayat Pembelian
                </h1>
                <p class="text-xl text-white/80 mb-6">Cari dan lihat detail transaksi pembelian Anda</p>
                
                <!-- Stats Badge -->
                <div class="inline-flex items-center gap-2 bg-blue-500/20 backdrop-blur-sm px-6 py-3 rounded-full border border-blue-400/30">
                    <span class="w-3 h-3 bg-blue-400 rounded-full animate-pulse"></span>
                    <span class="text-blue-100 font-medium">🔍 Sistem Pencarian Aktif</span>
                </div>
            </div>
        </div>
        
        <!-- Wave Separator -->
        <div class="absolute bottom-0 left-0 w-full overflow-hidden">
            <svg class="relative block w-full h-12" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
                <path d="M985.66,92.83C906.67,72,823.78,31,743.84,14.19c-82.26-17.34-168.06-16.33-250.45.39-57.84,11.73-114,31.07-172,41.86A600.21,600.21,0,0,1,0,27.35V120H1200V95.8C1132.19,118.92,1055.71,111.31,985.66,92.83Z" class="fill-current text-purple-50"></path>
            </svg>
        </div>
    </div>

    <!-- Main Content -->
    <div class="max-w-6xl mx-auto py-12 px-4 relative">
        <!-- Search Section -->
        <div class="bg-white rounded-2xl shadow-lg p-8 mb-8 border border-gray-100 transform hover:shadow-xl transition-shadow duration-300">
            <div class="text-center mb-6">
                <h2 class="text-2xl font-bold text-gray-900 mb-2 flex items-center justify-center gap-3">
                    <span class="text-3xl">🔍</span>
                    <span>Cari Transaksi Anda</span>
                </h2>
                <p class="text-gray-600">Masukkan Game ID untuk melihat semua riwayat pembelian Anda</p>
            </div>

            <!-- Search Form -->
            <form action="{{ route('riwayat-pembelian') }}" method="GET" class="max-w-2xl mx-auto">
                <div class="flex flex-col sm:flex-row gap-4">
                    <div class="flex-1 relative">
                        <div class="absolute inset-y-0 left-0 pl-4 flex items-center pointer-events-none">
                            <span class="text-gray-400 text-lg">🎮</span>
                        </div>
                        <input
                            type="text"
                            name="game_id"
                            placeholder="Masukkan ID Game Anda (contoh: 123456789)"
                            value="{{ old('game_id', $search) }}"
                            class="w-full pl-12 pr-4 py-4 border-2 border-gray-200 rounded-xl text-sm focus:ring-2 focus:ring-purple-500 focus:border-purple-500 transition-all duration-300 bg-gray-50 focus:bg-white"
                            required
                        >
                    </div>
                    <button type="submit" class="px-8 py-4 bg-gradient-to-r from-purple-600 to-blue-600 hover:from-purple-700 hover:to-blue-700 text-white rounded-xl font-medium transition-all duration-300 transform hover:scale-105 shadow-lg hover:shadow-xl flex items-center justify-center gap-2 min-w-[140px]">
                        <span class="text-lg">🔍</span>
                        <span>Cari Transaksi</span>
                    </button>
                </div>
                
                <!-- Search Tips -->
                <div class="mt-4 p-4 bg-blue-50 rounded-lg border border-blue-200">
                    <div class="flex items-start gap-3">
                        <span class="text-blue-500 text-lg mt-0.5">💡</span>
                        <div>
                            <h4 class="font-medium text-blue-900 mb-1">Tips Pencarian:</h4>
                            <ul class="text-sm text-blue-700 space-y-1">
                                <li>• Gunakan ID Game yang sama dengan saat melakukan pembelian</li>
                                <li>• Pastikan tidak ada spasi di awal atau akhir ID</li>
                                <li>• ID Game biasanya berupa angka atau kombinasi huruf-angka</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </form>
        </div>

        <!-- Results Section -->
        @if(request()->has('game_id'))
            @if($orders->isEmpty())
                <!-- No Result Found -->
                <div class="bg-white rounded-2xl shadow-lg p-12 text-center border border-gray-100">
                    <div class="max-w-md mx-auto">
                        <!-- Icon -->
                        <div class="inline-block p-6 bg-gray-100 rounded-full mb-6">
                            <span class="text-5xl">😔</span>
                        </div>
                        
                        <!-- Message -->
                        <h3 class="text-2xl font-bold text-gray-900 mb-4">Transaksi Tidak Ditemukan</h3>
                        <div class="bg-red-50 border border-red-200 rounded-lg p-4 mb-6">
                            <p class="text-red-700">
                                Tidak ada transaksi yang ditemukan dengan ID Game: 
                                <span class="font-bold text-red-900">{{ $search }}</span>
                            </p>
                        </div>
                        
                        <!-- Suggestions -->
                        <div class="text-left bg-gray-50 rounded-lg p-6">
                            <h4 class="font-medium text-gray-900 mb-3 flex items-center gap-2">
                                <span>🤔</span>
                                <span>Kemungkinan Penyebab:</span>
                            </h4>
                            <ul class="text-sm text-gray-600 space-y-2">
                                <li class="flex items-start gap-2">
                                    <span class="text-yellow-500 font-bold">•</span>
                                    <span>ID Game yang dimasukkan salah atau belum pernah melakukan transaksi</span>
                                </li>
                                <li class="flex items-start gap-2">
                                    <span class="text-yellow-500 font-bold">•</span>
                                    <span>Transaksi masih dalam proses dan belum tercatat dalam sistem</span>
                                </li>
                                <li class="flex items-start gap-2">
                                    <span class="text-yellow-500 font-bold">•</span>
                                    <span>Periksa kembali ID Game yang digunakan saat pembelian</span>
                                </li>
                            </ul>
                        </div>
                        
                        <!-- Action Buttons -->
                        <div class="mt-8 flex flex-col sm:flex-row gap-4 justify-center">
                            <button onclick="document.querySelector('input[name=game_id]').focus()" class="px-6 py-3 bg-purple-600 text-white rounded-lg hover:bg-purple-700 transition-colors flex items-center justify-center gap-2">
                                <span>🔄</span>
                                <span>Coba Lagi</span>
                            </button>
                            <a href="https://wa.me/6281234567890?text=Halo,%20saya%20tidak%20dapat%20menemukan%20riwayat%20transaksi%20saya" target="_blank" class="px-6 py-3 bg-green-600 text-white rounded-lg hover:bg-green-700 transition-colors flex items-center justify-center gap-2">
                                <span>💬</span>
                                <span>Hubungi CS</span>
                            </a>
                        </div>
                    </div>
                </div>
            @else
                <!-- Results Found -->
                <div class="bg-white shadow-lg rounded-2xl overflow-hidden border border-gray-100">
                    <!-- Results Header -->
                    <div class="bg-gradient-to-r from-green-50 to-emerald-50 px-6 py-4 border-b border-gray-200">
                        <div class="flex items-center justify-between">
                            <div class="flex items-center gap-3">
                                <span class="text-2xl">✅</span>
                                <div>
                                    <h3 class="text-lg font-bold text-gray-900">Transaksi Ditemukan!</h3>
                                    <p class="text-sm text-gray-600">ID Game: <span class="font-medium text-green-700">{{ $search }}</span></p>
                                </div>
                            </div>
                            <div class="text-right">
                                <div class="bg-green-100 text-green-800 px-3 py-1 rounded-full text-sm font-medium">
                                    {{ $orders->count() }} Transaksi
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Desktop Table Header -->
                    <div class="hidden lg:grid grid-cols-12 bg-gray-50 px-6 py-4 border-b border-gray-200 font-medium text-gray-700 text-sm">
                        <div class="col-span-2">ID Transaksi</div>
                        <div class="col-span-2">Game ID</div>
                        <div class="col-span-3">Produk</div>
                        <div class="col-span-2">Tanggal</div>
                        <div class="col-span-1">Total</div>
                        <div class="col-span-1">Metode</div>
                        <div class="col-span-1">Status</div>
                    </div>

                    <!-- Transaction Items -->
                    @foreach($orders as $index => $order)
                    <div class="transaction-item border-b border-gray-100 hover:bg-gray-50 transition-colors duration-200">
                        <!-- Desktop Layout -->
                        <div class="hidden lg:grid grid-cols-12 px-6 py-4 items-center">
                            <div class="col-span-2">
                                <div class="font-medium text-gray-900 text-sm">{{ $order->id_transaksi }}</div>
                                <div class="text-xs text-gray-500">#{{ str_pad($index + 1, 3, '0', STR_PAD_LEFT) }}</div>
                            </div>
                            <div class="col-span-2">
                                <div class="flex items-center gap-2">
                                    <span class="text-lg">🎮</span>
                                    <span class="font-medium text-gray-900 text-sm">{{ $order->game_id }}</span>
                                </div>
                            </div>
                            <div class="col-span-3">
                                <div class="font-medium text-gray-900 text-sm">{{ $order->produk }}</div>
                                <div class="text-xs text-gray-500">Game Item</div>
                            </div>
                            <div class="col-span-2">
                                <div class="text-sm text-gray-900">
                                    {{ \Carbon\Carbon::parse($order->tanggal)->format('d M Y') }}
                                </div>
                                <div class="text-xs text-gray-500">
                                    {{ \Carbon\Carbon::parse($order->tanggal)->format('H:i') }} WIB
                                </div>
                            </div>
                            <div class="col-span-1">
                                <div class="font-bold text-green-600 text-sm">
                                    Rp {{ number_format($order->total, 0, ',', '.') }}
                                </div>
                            </div>
                            <div class="col-span-1">
                                <div class="text-xs text-gray-600 bg-gray-100 px-2 py-1 rounded">
                                    {{ $order->metode }}
                                </div>
                            </div>
                            <div class="col-span-1">    
                                <span class="px-3 py-1 rounded-full text-xs font-medium 
                                    @if($order->status === 'Berhasil' || $order->status === 'success') text-green-800
                                    @elseif($order->status === 'Pending' || $order->status === 'pending') text-yellow-800
                                    @elseif($order->status === 'Gagal' || $order->status === 'failed') text-red-800
                                    @else bg-gray-100 text-gray-800 @endif">
                                    @if($order->status === 'Berhasil' || $order->status === 'success') 
                                        <span class="flex items-center gap-1">
                                            <span>✅</span>
                                            <span>Berhasil</span>
                                        </span>
                                    @elseif($order->status === 'Pending' || $order->status === 'pending') 
                                        <span class="flex items-center gap-1">
                                            <span>⏳</span>
                                            <span>Pending</span>
                                        </span>
                                    @elseif($order->status === 'Gagal' || $order->status === 'failed') 
                                        <span class="flex items-center gap-1">
                                            <span>❌</span>
                                            <span>Gagal</span>
                                        </span>
                                    @else {{ $order->status }} @endif
                                </span>
                            </div>
                        </div>

                        <!-- Mobile Layout -->
                        <div class="lg:hidden p-6">
                            <div class="space-y-4">
                                <!-- Header -->
                                <div class="flex items-start justify-between">
                                    <div>
                                        <div class="font-bold text-gray-900">{{ $order->id_transaksi }}</div>
                                        <div class="text-sm text-gray-500">Transaksi #{{ str_pad($index + 1, 3, '0', STR_PAD_LEFT) }}</div>
                                    </div>
                                    <span class="px-3 py-1 rounded-full text-xs font-medium 
                                        @if($order->status === 'Berhasil' || $order->status === 'success') bg-green-100 text-green-800
                                        @elseif($order->status === 'Pending' || $order->status === 'pending') bg-yellow-100 text-yellow-800
                                        @elseif($order->status === 'Gagal' || $order->status === 'failed') bg-red-100 text-red-800
                                        @else bg-gray-100 text-gray-800 @endif">
                                        @if($order->status === 'Berhasil' || $order->status === 'success') 
                                            <span class="flex items-center gap-1">
                                                <span>✅</span>
                                                <span>Berhasil</span>
                                            </span>
                                        @elseif($order->status === 'Pending' || $order->status === 'pending') 
                                            <span class="flex items-center gap-1">
                                                <span>⏳</span>
                                                <span>Pending</span>
                                            </span>
                                        @elseif($order->status === 'Gagal' || $order->status === 'failed') 
                                            <span class="flex items-center gap-1">
                                                <span>❌</span>
                                                <span>Gagal</span>
                                            </span>
                                        @else {{ $order->status }} @endif
                                    </span>
                                </div>

                                <!-- Product Info -->
                                <div class="bg-gray-50 rounded-lg p-4">
                                    <div class="flex items-center gap-3 mb-2">
                                        <span class="text-xl">🎮</span>
                                        <div>
                                            <div class="font-medium text-gray-900">{{ $order->produk }}</div>
                                            <div class="text-sm text-gray-500">Game ID: {{ $order->game_id }}</div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Transaction Details -->
                                <div class="grid grid-cols-2 gap-4 text-sm">
                                    <div>
                                        <div class="text-gray-500 mb-1">💰 Total</div>
                                        <div class="font-bold text-green-600">Rp {{ number_format($order->total, 0, ',', '.') }}</div>
                                    </div>
                                    <div>
                                        <div class="text-gray-500 mb-1">💳 Metode</div>
                                        <div class="text-gray-900">{{ $order->metode }}</div>
                                    </div>
                                    <div class="col-span-2">
                                        <div class="text-gray-500 mb-1">📅 Tanggal</div>
                                        <div class="text-gray-900">{{ \Carbon\Carbon::parse($order->tanggal)->format('d M Y, H:i') }} WIB</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            @endif
        @else
            <!-- Welcome State -->
            <div class="bg-white rounded-2xl shadow-lg p-12 text-center border border-gray-100">
                <div class="max-w-md mx-auto">
                    <!-- Icon -->
                    <div class="inline-block p-6 bg-gradient-to-br from-purple-100 to-blue-100 rounded-full mb-6">
                        <span class="text-5xl">🎮</span>
                    </div>
                    
                    <!-- Message -->
                    <h3 class="text-2xl font-bold text-gray-900 mb-4">Selamat Datang!</h3>
                    <p class="text-gray-600 mb-6">
                        Masukkan ID Game Anda di form pencarian di atas untuk melihat riwayat transaksi pembelian.
                    </p>
                    
                    <!-- Features -->
                    <div class="text-left bg-gray-50 rounded-lg p-6">
                        <h4 class="font-medium text-gray-900 mb-3 text-center">Fitur Riwayat Pembelian:</h4>
                        <ul class="text-sm text-gray-600 space-y-2">
                            <li class="flex items-center gap-2">
                                <span class="text-green-500">✅</span>
                                <span>Lihat semua transaksi berdasarkan Game ID</span>
                            </li>
                            <li class="flex items-center gap-2">
                                <span class="text-green-500">✅</span>
                                <span>Detail lengkap setiap pembelian</span>
                            </li>
                            <li class="flex items-center gap-2">
                                <span class="text-green-500">✅</span>
                                <span>Status transaksi real-time</span>
                            </li>
                            <li class="flex items-center gap-2">
                                <span class="text-green-500">✅</span>
                                <span>Tampilan responsif untuk mobile & desktop</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        @endif
        </div>
    </div>
</div>

<style>
    /* Smooth animations */
    .transaction-item {
        transition: all 0.2s ease-in-out;
    }
    
    .transaction-item:hover {
        transform: translateX(4px);
        box-shadow: 0 4px 12px rgba(147, 51, 234, 0.15);
    }
    
    /* Pulse animation */
    @keyframes pulse {
        0%, 100% {
            opacity: 1;
        }
        50% {
            opacity: .5;
        }
    }
    
    .animate-pulse {
        animation: pulse 2s cubic-bezier(0.4, 0, 0.6, 1) infinite;
    }
    
    /* Loading states */
    .loading {
        position: relative;
        overflow: hidden;
    }
    
    .loading::after {
        content: '';
        position: absolute;
        top: 0;
        right: 0;
        bottom: 0;
        left: 0;
        background: linear-gradient(90deg, transparent, rgba(255,255,255,0.4), transparent);
        animation: shimmer 1.5s infinite;
    }
    
    @keyframes shimmer {
        0% { transform: translateX(-100%); }
        100% { transform: translateX(100%); }
    }
    
    /* Focus states */
    input:focus {
        box-shadow: 0 0 0 3px rgba(147, 51, 234, 0.1);
    }
    
    /* Status indicators */
    .status-success {
        background: linear-gradient(135deg, #10b981, #065f46);
    }
    
    .status-pending {
        background: linear-gradient(135deg, #f59e0b, #92400e);
    }
    
    .status-failed {
        background: linear-gradient(135deg, #ef4444, #991b1b);
    }
</style>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Auto focus on search input if no results
        const searchInput = document.querySelector('input[name="game_id"]');
        if (searchInput && !searchInput.value) {
            setTimeout(() => {
                searchInput.focus();
            }, 500);
        }
        
        // Add loading state to search button
        const searchForm = document.querySelector('form');
        const searchButton = document.querySelector('button[type="submit"]');
        
        if (searchForm && searchButton) {
            searchForm.addEventListener('submit', function() {
                searchButton.innerHTML = `
                    <span class="text-lg">⏳</span>
                    <span>Mencari...</span>
                `;
                searchButton.disabled = true;
            });
        }
        
        // Smooth scroll for any anchor links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    target.scrollIntoView({
                        behavior: 'smooth'
                    });
                }
            });
        });
        
        // Add copy functionality for transaction ID
        document.querySelectorAll('.transaction-item').forEach(item => {
            const transactionId = item.querySelector('.font-medium');
            if (transactionId) {
                transactionId.style.cursor = 'pointer';
                transactionId.title = 'Klik untuk copy ID Transaksi';
                
                transactionId.addEventListener('click', function() {
                    navigator.clipboard.writeText(this.textContent).then(() => {
                        // Show temporary success message
                        const originalText = this.textContent;
                        this.textContent = '✅ Tersalin!';
                        setTimeout(() => {
                            this.textContent = originalText;
                        }, 1500);
                    });
                });
            }
        });
    });
</script>
@endsection