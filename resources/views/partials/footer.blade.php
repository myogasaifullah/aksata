<footer class="bg-gradient-to-b from-white to-gray-50 text-gray-800 py-12 font-sans">
    <div class="max-w-6xl mx-auto px-6 grid grid-cols-1 md:grid-cols-4 gap-8 md:gap-12 items-start">
        <!-- Logo and Social -->
        <div class="md:col-span-2">
            <div class="flex flex-col items-center md:items-start">
                <img src="{{ asset('assets/images/logofooter.png') }}" alt="Logo Aksata" class="w-48 mb-4">
                <p class="text-sm text-gray-600 mb-6 text-center md:text-left">Platform top up game terpercaya dengan layanan 24 jam</p>
                
                <div class="flex gap-5 text-2xl mb-6">
                    <a href="#" class="text-purple-600 hover:text-purple-800 transition-colors duration-300">
                        <i class="fab fa-facebook"></i>
                    </a>
                    <a href="#" class="text-purple-600 hover:text-purple-800 transition-colors duration-300">
                        <i class="fab fa-instagram"></i>
                    </a>
                    <a href="#" class="text-purple-600 hover:text-purple-800 transition-colors duration-300">
                        <i class="fab fa-tiktok"></i>
                    </a>
                    <a href="#" class="text-purple-600 hover:text-purple-800 transition-colors duration-300">
                        <i class="fab fa-youtube"></i>
                    </a>
                    <a href="#" class="text-purple-600 hover:text-purple-800 transition-colors duration-300">
                        <i class="fab fa-twitter"></i>
                    </a>
                </div>
            </div>
        </div>

        <!-- Site Map -->
        <div>
            <h3 class="text-lg font-bold text-gray-900 mb-4 pb-2 border-b border-purple-200">Navigasi</h3>
            <ul class="space-y-3">
                <li>
                    <a href="{{ route('jual') }}" class="flex items-center text-gray-700 hover:text-purple-600 transition-colors duration-200 group">
                        <span class="w-1 h-1 bg-purple-600 rounded-full mr-2 opacity-0 group-hover:opacity-100 transition-opacity"></span>
                        Jual Chip
                    </a>
                </li>
                <li>
                    <a href="{{ route('syarat-ketentuan') }}" class="flex items-center text-gray-700 hover:text-purple-600 transition-colors duration-200 group">
                        <span class="w-1 h-1 bg-purple-600 rounded-full mr-2 opacity-0 group-hover:opacity-100 transition-opacity"></span>
                        Syarat & Ketentuan
                    </a>
                </li>
                <li>
                    <a href="{{ route('riwayat-pembelian') }}" class="flex items-center text-gray-700 hover:text-purple-600 transition-colors duration-200 group">
                        <span class="w-1 h-1 bg-purple-600 rounded-full mr-2 opacity-0 group-hover:opacity-100 transition-opacity"></span>
                        Riwayat Pembelian
                    </a>
                </li>
            </ul>
        </div>

        <!-- Contact -->
        <div>
            <h3 class="text-lg font-bold text-gray-900 mb-4 pb-2 border-b border-purple-200">Kontak Kami</h3>
            <div class="space-y-4">
                <div class="flex items-start gap-3">
                    <div class="mt-1 text-purple-600">
                        <i class="fas fa-envelope"></i>
                    </div>
                    <div>
                        <p class="font-medium">Email</p>
                        <p class="text-sm text-gray-600">aksata@gmail.com</p>
                    </div>
                </div>
                <div class="flex items-start gap-3">
                    <div class="mt-1 text-purple-600">
                        <i class="fas fa-globe"></i>
                    </div>
                    <div>
                        <p class="font-medium">Website</p>
                        <p class="text-sm text-gray-600">www.aksata.com</p>
                    </div>
                </div>
            </div>
            
            <h3 class="text-lg font-bold text-gray-900 mt-6 mb-4 pb-2 border-b border-purple-200">Region</h3>
            <div class="flex items-center gap-3">
                <div class="relative w-6 h-4 overflow-hidden rounded-sm shadow">
                    <div class="absolute top-0 left-0 w-full h-1/2 bg-red-600"></div>
                    <div class="absolute bottom-0 left-0 w-full h-1/2 bg-white"></div>
                </div>
                <div>
                    <p class="font-medium">Indonesia</p>
                    <p class="text-sm text-gray-500">(Rp)</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Copyright -->
    <div class="max-w-6xl mx-auto px-6 pt-8 mt-8 border-t border-gray-200">
        <div class="flex flex-col md:flex-row justify-between items-center gap-4">
            <p class="text-xs text-gray-500">Copyright © 2025 Aksata. All Rights Reserved</p>
            <div class="flex gap-4">
                <a href="#" class="text-xs text-gray-500 hover:text-purple-600 hover:underline">Kebijakan Privasi</a>
                <a href="#" class="text-xs text-gray-500 hover:text-purple-600 hover:underline">Syarat Layanan</a>
            </div>
        </div>
    </div>
</footer>