@extends('layouts.app')

@section('content')
<div class="min-h-screen bg-gradient-to-br from-purple-50 via-blue-50 to-indigo-100">
    <!-- Header Section -->
    <div class="bg-gradient-to-r from-purple-900 via-blue-900 to-indigo-900 text-white py-16">
        <div class="max-w-6xl mx-auto px-4 text-center">
            <!-- Main Icon -->
            <div class="inline-block p-4 bg-white/10 backdrop-blur-sm rounded-2xl mb-6">
                <div class="w-16 h-16 bg-gradient-to-br from-yellow-400 to-orange-500 rounded-xl flex items-center justify-center text-2xl font-bold text-white shadow-lg">
                    🎮
                </div>
            </div>
            
            <!-- Main Title -->
            <h1 class="text-4xl md:text-5xl font-bold mb-4 bg-gradient-to-r from-white via-blue-100 to-purple-200 bg-clip-text text-transparent">
                Jual Chip Game Anda
            </h1>
            
            <p class="text-xl text-white/80 mb-6">Kami membeli chip game Anda dengan harga terbaik!</p>
            
            <!-- Status Badge -->
            <div class="inline-flex items-center gap-2 bg-green-500/20 backdrop-blur-sm px-6 py-3 rounded-full border border-green-400/30">
                <span class="w-3 h-3 bg-green-400 rounded-full animate-pulse"></span>
                <span class="text-green-100 font-medium">🟢 Sedang Membeli Chip</span>
            </div>
        </div>
    </div>

    <!-- Main Content -->
    <div class="max-w-6xl mx-auto py-12 px-4">
        
        <!-- Game Selection Tabs -->
        <div class="bg-white rounded-2xl shadow-lg overflow-hidden border border-gray-100 mb-8">
            <!-- Tab Headers -->
            <div class="flex bg-gray-50 border-b border-gray-200">
                <button class="game-tab flex-1 px-6 py-4 text-center font-medium transition-all duration-300 bg-gradient-to-r from-purple-600 to-blue-600 text-white" data-game="game1">
                    <div class="flex items-center justify-center gap-3">
                        <div class="w-8 h-8 bg-white/20 rounded-lg flex items-center justify-center">
                            <span class="text-lg">🏆</span>
                        </div>
                        <div>
                            <div class="font-bold">Mobile Legends</div>
                            <div class="text-xs opacity-80">Bang Bang</div>
                        </div>
                    </div>
                </button>
                <button class="game-tab flex-1 px-6 py-4 text-center font-medium transition-all duration-300 bg-gray-100 text-gray-600 hover:bg-gray-200" data-game="game2">
                    <div class="flex items-center justify-center gap-3">
                        <div class="w-8 h-8 bg-gray-300 rounded-lg flex items-center justify-center">
                            <span class="text-lg">🔫</span>
                        </div>
                        <div>
                            <div class="font-bold">Free Fire</div>
                            <div class="text-xs opacity-80">Battlegrounds</div>
                        </div>
                    </div>
                </button>
            </div>

            <!-- Tab Content -->
            <div class="p-6">
                <!-- Game 1: Mobile Legends Content -->
                <div id="game1-content" class="game-content">
                    <!-- Game Info Header -->
                    <div class="flex items-center gap-4 mb-6 p-4 bg-gradient-to-r from-purple-50 to-blue-50 rounded-xl">
                        <div class="w-16 h-16 bg-gradient-to-br from-purple-500 to-blue-600 rounded-xl flex items-center justify-center text-2xl">
                            🏆
                        </div>
                        <div>
                            <h2 class="text-2xl font-bold text-gray-900">Mobile Legends: Bang Bang</h2>
                            <p class="text-gray-600">Diamonds & Battle Points</p>
                            <div class="flex gap-2 mt-2">
                                <span class="bg-purple-100 text-purple-700 text-xs px-2 py-1 rounded-full font-medium">💎 Diamonds</span>
                                <span class="bg-blue-100 text-blue-700 text-xs px-2 py-1 rounded-full font-medium">⚡ Battle Points</span>
                            </div>
                        </div>
                        <div class="ml-auto text-right">
                            <div class="text-sm text-gray-500">📅 Update terakhir:</div>
                            <div class="text-sm font-medium text-gray-900">{{ date('d M Y') }}</div>
                        </div>
                    </div>

                    <!-- Price List -->
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                        <!-- ML Item 1 -->
                        <div class="flex items-center justify-between p-4 bg-gray-50 hover:bg-purple-50 rounded-xl transition-colors border hover:border-purple-200">
                            <div class="flex items-center gap-3">
                                <div class="w-12 h-12 bg-gradient-to-br from-purple-400 to-blue-500 rounded-lg flex items-center justify-center">
                                    <span class="text-white font-bold">💎</span>
                                </div>
                                <div>
                                    <h4 class="font-semibold text-gray-900">100 Diamonds</h4>
                                    <p class="text-sm text-gray-500">Mobile Legends</p>
                                </div>
                            </div>
                            <div class="text-right">
                                <div class="text-lg font-bold text-green-600">Rp 15.000</div>
                                <div class="text-xs text-gray-500">Kami Beli</div>
                            </div>
                        </div>

                        <!-- ML Item 2 -->
                        <div class="flex items-center justify-between p-4 bg-gray-50 hover:bg-purple-50 rounded-xl transition-colors border hover:border-purple-200">
                            <div class="flex items-center gap-3">
                                <div class="w-12 h-12 bg-gradient-to-br from-purple-400 to-blue-500 rounded-lg flex items-center justify-center">
                                    <span class="text-white font-bold">💎</span>
                                </div>
                                <div>
                                    <h4 class="font-semibold text-gray-900">250 Diamonds</h4>
                                    <p class="text-sm text-gray-500">Mobile Legends</p>
                                </div>
                            </div>
                            <div class="text-right">
                                <div class="text-lg font-bold text-green-600">Rp 35.000</div>
                                <div class="text-xs text-gray-500">Kami Beli</div>
                            </div>
                        </div>

                        <!-- ML Item 3 -->
                        <div class="flex items-center justify-between p-4 bg-gray-50 hover:bg-purple-50 rounded-xl transition-colors border hover:border-purple-200">
                            <div class="flex items-center gap-3">
                                <div class="w-12 h-12 bg-gradient-to-br from-purple-400 to-blue-500 rounded-lg flex items-center justify-center">
                                    <span class="text-white font-bold">💎</span>
                                </div>
                                <div>
                                    <h4 class="font-semibold text-gray-900">500 Diamonds</h4>
                                    <p class="text-sm text-gray-500">Mobile Legends</p>
                                </div>
                            </div>
                            <div class="text-right">
                                <div class="text-lg font-bold text-green-600">Rp 70.000</div>
                                <div class="text-xs text-gray-500">Kami Beli</div>
                            </div>
                        </div>

                        <!-- ML Item 4 -->
                        <div class="flex items-center justify-between p-4 bg-gray-50 hover:bg-purple-50 rounded-xl transition-colors border hover:border-purple-200">
                            <div class="flex items-center gap-3">
                                <div class="w-12 h-12 bg-gradient-to-br from-purple-400 to-blue-500 rounded-lg flex items-center justify-center">
                                    <span class="text-white font-bold">💎</span>
                                </div>
                                <div>
                                    <h4 class="font-semibold text-gray-900">1000 Diamonds</h4>
                                    <p class="text-sm text-gray-500">Mobile Legends</p>
                                </div>
                            </div>
                            <div class="text-right">
                                <div class="text-lg font-bold text-green-600">Rp 140.000</div>
                                <div class="text-xs text-gray-500">Kami Beli</div>
                            </div>
                        </div>

                        <!-- ML Item 5 -->
                        <div class="flex items-center justify-between p-4 bg-gray-50 hover:bg-purple-50 rounded-xl transition-colors border hover:border-purple-200">
                            <div class="flex items-center gap-3">
                                <div class="w-12 h-12 bg-gradient-to-br from-blue-400 to-indigo-500 rounded-lg flex items-center justify-center">
                                    <span class="text-white font-bold">⚡</span>
                                </div>
                                <div>
                                    <h4 class="font-semibold text-gray-900">10,000 Battle Points</h4>
                                    <p class="text-sm text-gray-500">Mobile Legends</p>
                                </div>
                            </div>
                            <div class="text-right">
                                <div class="text-lg font-bold text-green-600">Rp 8.000</div>
                                <div class="text-xs text-gray-500">Kami Beli</div>
                            </div>
                        </div>

                        <!-- ML Item 6 -->
                        <div class="flex items-center justify-between p-4 bg-gray-50 hover:bg-purple-50 rounded-xl transition-colors border hover:border-purple-200">
                            <div class="flex items-center gap-3">
                                <div class="w-12 h-12 bg-gradient-to-br from-blue-400 to-indigo-500 rounded-lg flex items-center justify-center">
                                    <span class="text-white font-bold">⚡</span>
                                </div>
                                <div>
                                    <h4 class="font-semibold text-gray-900">50,000 Battle Points</h4>
                                    <p class="text-sm text-gray-500">Mobile Legends</p>
                                </div>
                            </div>
                            <div class="text-right">
                                <div class="text-lg font-bold text-green-600">Rp 35.000</div>
                                <div class="text-xs text-gray-500">Kami Beli</div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Game 2: Free Fire Content (Hidden by default) -->
                <div id="game2-content" class="game-content hidden">
                    <!-- Game Info Header -->
                    <div class="flex items-center gap-4 mb-6 p-4 bg-gradient-to-r from-orange-50 to-red-50 rounded-xl">
                        <div class="w-16 h-16 bg-gradient-to-br from-orange-500 to-red-600 rounded-xl flex items-center justify-center text-2xl">
                            🔫
                        </div>
                        <div>
                            <h2 class="text-2xl font-bold text-gray-900">Free Fire: Battlegrounds</h2>
                            <p class="text-gray-600">Diamonds & Gold</p>
                            <div class="flex gap-2 mt-2">
                                <span class="bg-orange-100 text-orange-700 text-xs px-2 py-1 rounded-full font-medium">💎 Diamonds</span>
                                <span class="bg-yellow-100 text-yellow-700 text-xs px-2 py-1 rounded-full font-medium">🪙 Gold</span>
                            </div>
                        </div>
                        <div class="ml-auto text-right">
                            <div class="text-sm text-gray-500">📅 Update terakhir:</div>
                            <div class="text-sm font-medium text-gray-900">{{ date('d M Y') }}</div>
                        </div>
                    </div>

                    <!-- Price List -->
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                        <!-- FF Item 1 -->
                        <div class="flex items-center justify-between p-4 bg-gray-50 hover:bg-orange-50 rounded-xl transition-colors border hover:border-orange-200">
                            <div class="flex items-center gap-3">
                                <div class="w-12 h-12 bg-gradient-to-br from-orange-400 to-red-500 rounded-lg flex items-center justify-center">
                                    <span class="text-white font-bold">💎</span>
                                </div>
                                <div>
                                    <h4 class="font-semibold text-gray-900">100 Diamonds</h4>
                                    <p class="text-sm text-gray-500">Free Fire</p>
                                </div>
                            </div>
                            <div class="text-right">
                                <div class="text-lg font-bold text-green-600">Rp 12.000</div>
                                <div class="text-xs text-gray-500">Kami Beli</div>
                            </div>
                        </div>

                        <!-- FF Item 2 -->
                        <div class="flex items-center justify-between p-4 bg-gray-50 hover:bg-orange-50 rounded-xl transition-colors border hover:border-orange-200">
                            <div class="flex items-center gap-3">
                                <div class="w-12 h-12 bg-gradient-to-br from-orange-400 to-red-500 rounded-lg flex items-center justify-center">
                                    <span class="text-white font-bold">💎</span>
                                </div>
                                <div>
                                    <h4 class="font-semibold text-gray-900">310 Diamonds</h4>
                                    <p class="text-sm text-gray-500">Free Fire</p>
                                </div>
                            </div>
                            <div class="text-right">
                                <div class="text-lg font-bold text-green-600">Rp 35.000</div>
                                <div class="text-xs text-gray-500">Kami Beli</div>
                            </div>
                        </div>

                        <!-- FF Item 3 -->
                        <div class="flex items-center justify-between p-4 bg-gray-50 hover:bg-orange-50 rounded-xl transition-colors border hover:border-orange-200">
                            <div class="flex items-center gap-3">
                                <div class="w-12 h-12 bg-gradient-to-br from-orange-400 to-red-500 rounded-lg flex items-center justify-center">
                                    <span class="text-white font-bold">💎</span>
                                </div>
                                <div>
                                    <h4 class="font-semibold text-gray-900">520 Diamonds</h4>
                                    <p class="text-sm text-gray-500">Free Fire</p>
                                </div>
                            </div>
                            <div class="text-right">
                                <div class="text-lg font-bold text-green-600">Rp 60.000</div>
                                <div class="text-xs text-gray-500">Kami Beli</div>
                            </div>
                        </div>

                        <!-- FF Item 4 -->
                        <div class="flex items-center justify-between p-4 bg-gray-50 hover:bg-orange-50 rounded-xl transition-colors border hover:border-orange-200">
                            <div class="flex items-center gap-3">
                                <div class="w-12 h-12 bg-gradient-to-br from-orange-400 to-red-500 rounded-lg flex items-center justify-center">
                                    <span class="text-white font-bold">💎</span>
                                </div>
                                <div>
                                    <h4 class="font-semibold text-gray-900">1060 Diamonds</h4>
                                    <p class="text-sm text-gray-500">Free Fire</p>
                                </div>
                            </div>
                            <div class="text-right">
                                <div class="text-lg font-bold text-green-600">Rp 120.000</div>
                                <div class="text-xs text-gray-500">Kami Beli</div>
                            </div>
                        </div>

                        <!-- FF Item 5 -->
                        <div class="flex items-center justify-between p-4 bg-gray-50 hover:bg-orange-50 rounded-xl transition-colors border hover:border-orange-200">
                            <div class="flex items-center gap-3">
                                <div class="w-12 h-12 bg-gradient-to-br from-yellow-400 to-orange-500 rounded-lg flex items-center justify-center">
                                    <span class="text-white font-bold">🪙</span>
                                </div>
                                <div>
                                    <h4 class="font-semibold text-gray-900">50,000 Gold</h4>
                                    <p class="text-sm text-gray-500">Free Fire</p>
                                </div>
                            </div>
                            <div class="text-right">
                                <div class="text-lg font-bold text-green-600">Rp 5.000</div>
                                <div class="text-xs text-gray-500">Kami Beli</div>
                            </div>
                        </div>

                        <!-- FF Item 6 -->
                        <div class="flex items-center justify-between p-4 bg-gray-50 hover:bg-orange-50 rounded-xl transition-colors border hover:border-orange-200">
                            <div class="flex items-center gap-3">
                                <div class="w-12 h-12 bg-gradient-to-br from-yellow-400 to-orange-500 rounded-lg flex items-center justify-center">
                                    <span class="text-white font-bold">🪙</span>
                                </div>
                                <div>
                                    <h4 class="font-semibold text-gray-900">200,000 Gold</h4>
                                    <p class="text-sm text-gray-500">Free Fire</p>
                                </div>
                            </div>
                            <div class="text-right">
                                <div class="text-lg font-bold text-green-600">Rp 18.000</div>
                                <div class="text-xs text-gray-500">Kami Beli</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Call to Action Section -->
        <div class="bg-gradient-to-r from-green-600 via-emerald-600 to-teal-600 rounded-2xl shadow-xl p-8 text-white text-center">
            <div class="max-w-3xl mx-auto">
                <!-- Icon -->
                <div class="inline-block p-4 bg-white/10 backdrop-blur-sm rounded-2xl mb-6">
                    <span class="text-4xl">💰</span>
                </div>
                
                <!-- Main Text -->
                <h2 class="text-3xl font-bold mb-4">Mau Jual <span id="selected-game-name">Mobile Legends</span> Anda?</h2>
                <p class="text-xl text-green-100 mb-2">Jika Anda memiliki <span id="selected-game-currency">diamonds/battle points</span> dan ingin menjualnya kepada kami,</p>
                <p class="text-lg text-green-200 mb-8">silahkan hubungi kami melalui WhatsApp untuk proses yang cepat dan mudah!</p>
                
                <!-- Features -->
                <div class="grid grid-cols-1 md:grid-cols-3 gap-4 mb-8">
                    <div class="bg-white/10 backdrop-blur-sm rounded-xl p-4">
                        <div class="text-2xl mb-2">⚡</div>
                        <div class="font-semibold text-sm">Proses Cepat</div>
                        <div class="text-xs text-green-200">Transfer langsung</div>
                    </div>
                    <div class="bg-white/10 backdrop-blur-sm rounded-xl p-4">
                        <div class="text-2xl mb-2">🔒</div>
                        <div class="font-semibold text-sm">100% Aman</div>
                        <div class="text-xs text-green-200">Transaksi terpercaya</div>
                    </div>
                    <div class="bg-white/10 backdrop-blur-sm rounded-xl p-4">
                        <div class="text-2xl mb-2">💵</div>
                        <div class="font-semibold text-sm">Harga Fair</div>
                        <div class="text-xs text-green-200">Sesuai market rate</div>
                    </div>
                </div>
                
                <!-- Dynamic WhatsApp Button -->
                <a href="https://wa.me/6281234567890?text=Halo,%20saya%20ingin%20menjual%20diamonds%20Mobile%20Legends%20saya" 
                   id="whatsapp-link"
                   target="_blank" 
                   class="inline-flex items-center gap-3 bg-white text-green-600 font-bold py-4 px-8 rounded-2xl hover:bg-gray-100 transition-all transform hover:scale-105 shadow-lg hover:shadow-xl">
                    <span class="text-2xl">📱</span>
                    <span class="text-lg">Hubungi via WhatsApp</span>
                </a>
                
                <!-- Additional Info -->
                <div class="mt-6 text-sm text-green-200">
                    <p>💬 Response time: < 5 menit | 🕒 Online: 24/7</p>
                </div>
            </div>
        </div>

        <!-- Additional Info -->
        <div class="mt-8 bg-white rounded-2xl shadow-lg p-6 border border-gray-100">
            <h3 class="text-lg font-bold text-gray-900 mb-4 flex items-center gap-2">
                <span>ℹ️</span>
                <span>Informasi Penting</span>
            </h3>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4 text-sm text-gray-600">
                <div class="flex items-start gap-2">
                    <span class="text-blue-500 font-bold">•</span>
                    <span>Harga dapat berubah sewaktu-waktu mengikuti kondisi pasar</span>
                </div>
                <div class="flex items-start gap-2">
                    <span class="text-blue-500 font-bold">•</span>
                    <span>Pembayaran dilakukan melalui transfer bank atau e-wallet</span>
                </div>
                <div class="flex items-start gap-2">
                    <span class="text-blue-500 font-bold">•</span>
                    <span>Verifikasi akun game diperlukan sebelum transaksi</span>
                </div>
                <div class="flex items-start gap-2">
                    <span class="text-blue-500 font-bold">•</span>
                    <span>Proses transfer dalam game memakan waktu 5-15 menit</span>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
    /* Tab Animations */
    .game-tab {
        position: relative;
        overflow: hidden;
    }
    
    .game-tab.active {
        background: linear-gradient(135deg, #7c3aed 0%, #3b82f6 100%);
        color: white;
    }
    
    .game-tab:not(.active):hover {
        background-color: #f3f4f6;
    }
    
    /* Smooth transitions */
    .game-content {
        animation: fadeIn 0.3s ease-in-out;
    }
    
    @keyframes fadeIn {
        from {
            opacity: 0;
            transform: translateY(10px);
        }
        to {
            opacity: 1;
            transform: translateY(0);
        }
    }
    
    /* Hover effects */
    .transition-colors {
        transition-property: background-color, border-color, color, fill, stroke;
        transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1);
        transition-duration: 300ms;
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
</style>

<script>
    // Tab switching functionality
    document.addEventListener('DOMContentLoaded', function() {
        const tabs = document.querySelectorAll('.game-tab');
        const contents = document.querySelectorAll('.game-content');
        const selectedGameName = document.getElementById('selected-game-name');
        const selectedGameCurrency = document.getElementById('selected-game-currency');
        const whatsappLink = document.getElementById('whatsapp-link');
        
        // Game data
        const gameData = {
            'game1': {
                name: 'Mobile Legends',
                currency: 'diamonds/battle points',
                whatsappText: 'Halo,%20saya%20ingin%20menjual%20diamonds%20Mobile%20Legends%20saya'
            },
            'game2': {
                name: 'Free Fire',
                currency: 'diamonds/gold',
                whatsappText: 'Halo,%20saya%20ingin%20menjual%20diamonds%20Free%20Fire%20saya'
            }
        };
        
        tabs.forEach(tab => {
            tab.addEventListener('click', function() {
                const gameId = this.getAttribute('data-game');
                
                // Remove active class from all tabs
                tabs.forEach(t => {
                    t.classList.remove('bg-gradient-to-r', 'from-purple-600', 'to-blue-600', 'text-white');
                    t.classList.add('bg-gray-100', 'text-gray-600', 'hover:bg-gray-200');
                });
                
                // Add active class to clicked tab
                this.classList.remove('bg-gray-100', 'text-gray-600', 'hover:bg-gray-200');
                this.classList.add('bg-gradient-to-r', 'from-purple-600', 'to-blue-600', 'text-white');
                
                // Hide all content
                contents.forEach(content => {
                    content.classList.add('hidden');
                });
                
                // Show selected content
                document.getElementById(gameId + '-content').classList.remove('hidden');
                
                // Update CTA section
                const game = gameData[gameId];
                selectedGameName.textContent = game.name;
                selectedGameCurrency.textContent = game.currency;
                whatsappLink.href = `https://wa.me/6281234567890?text=${game.whatsappText}`;
            });
        });
    });
    
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
</script>
@endsection