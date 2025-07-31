<header class="bg-white shadow-sm sticky top-0 z-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    <div class="flex justify-between items-center h-16">
        <!-- Logo with hover effect -->
        <div class="flex-shrink-0">
            <a href="{{ url('/') }}" class="flex items-center group">
                <span class="text-2xl font-bold bg-gradient-to-r from-purple-600 to-indigo-600 bg-clip-text text-transparent transition-all duration-300 group-hover:from-purple-700 group-hover:to-indigo-700">
                    AKSATA
                </span>
            </a>
        </div>



            <!-- Desktop Navigation -->
            <nav class="hidden md:flex space-x-8 items-center">
                <a href="{{ route('beranda') }}"
                   class="relative px-3 py-2 text-sm font-medium transition-colors duration-200 group
                   {{ request()->routeIs('beranda') ? 'text-purple-600' : 'text-gray-700 hover:text-purple-600' }}">
                    Game
                    <span class="absolute bottom-0 left-0 h-0.5 bg-purple-600 transition-all duration-300
                          {{ request()->routeIs('beranda') ? 'w-full' : 'w-0 group-hover:w-full' }}"></span>
                </a>

                <a href="{{ route('jual') }}"
                   class="relative px-3 py-2 text-sm font-medium transition-colors duration-200 group
                   {{ request()->routeIs('jual') ? 'text-purple-600' : 'text-gray-700 hover:text-purple-600' }}">
                    Jual Chip
                    <span class="absolute bottom-0 left-0 h-0.5 bg-purple-600 transition-all duration-300
                          {{ request()->routeIs('jual') ? 'w-full' : 'w-0 group-hover:w-full' }}"></span>
                </a>

                <a href="{{ route('syarat-ketentuan') }}"
                   class="relative px-3 py-2 text-sm font-medium transition-colors duration-200 group
                   {{ request()->routeIs('syarat-ketentuan') ? 'text-purple-600' : 'text-gray-700 hover:text-purple-600' }}">
                    Syarat & Ketentuan
                    <span class="absolute bottom-0 left-0 h-0.5 bg-purple-600 transition-all duration-300
                          {{ request()->routeIs('syarat-ketentuan') ? 'w-full' : 'w-0 group-hover:w-full' }}"></span>
                </a>

                <a href="{{ route('riwayat-pembelian') }}"
                   class="relative px-3 py-2 text-sm font-medium transition-colors duration-200 group
                   {{ request()->routeIs('riwayat-pembelian') ? 'text-purple-600' : 'text-gray-700 hover:text-purple-600' }}">
                    Riwayat Pembelian
                    <span class="absolute bottom-0 left-0 h-0.5 bg-purple-600 transition-all duration-300
                          {{ request()->routeIs('riwayat-pembelian') ? 'w-full' : 'w-0 group-hover:w-full' }}"></span>
                </a>

                <!-- WhatsApp Customer Service Button -->
                <a href="https://wa.me/6282276993219" target="_blank"
                   class="ml-4 flex items-center px-3 py-2 bg-green-500 hover:bg-green-600 text-white text-sm font-medium rounded-full shadow-md transition-all duration-300">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-1" viewBox="0 0 24 24" fill="currentColor">
                        <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347"/>
                    </svg>
                    Layanan Pelanggan
                </a>
            </nav>

            <!-- Search Section -->
            <div class="flex items-center space-x-4">
                <!-- Enhanced Search Bar -->
                
                <!-- Mobile menu button -->
                <div class="-mr-2 flex md:hidden">
                    <button type="button" class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-purple-500" id="mobile-menu-button">
                        <span class="sr-only">Open main menu</span>
                        <svg class="block h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                        </svg>
                        <svg class="hidden h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </button>
                </div>
            </div>
        </div>
    </div>

    <!-- Mobile menu (hidden by default) -->
    <div class="hidden md:hidden bg-white border-t border-gray-200" id="mobile-menu">
        <div class="pt-2 pb-3 space-y-1 px-4">
            <a href="{{ route('beranda') }}"
               class="block px-3 py-2 rounded-md text-base font-medium
               {{ request()->routeIs('beranda') ? 'text-purple-600 bg-purple-50' : 'text-gray-700 hover:text-purple-600 hover:bg-purple-50' }}">
                Game
            </a>

            <a href="{{ route('jual') }}"
               class="block px-3 py-2 rounded-md text-base font-medium
               {{ request()->routeIs('jual') ? 'text-purple-600 bg-purple-50' : 'text-gray-700 hover:text-purple-600 hover:bg-purple-50' }}">
                Jual Chip
            </a>

            <a href="{{ route('syarat-ketentuan') }}"
               class="block px-3 py-2 rounded-md text-base font-medium
               {{ request()->routeIs('syarat-ketentuan') ? 'text-purple-600 bg-purple-50' : 'text-gray-700 hover:text-purple-600 hover:bg-purple-50' }}">
                Syarat & Ketentuan
            </a>

            <a href="{{ route('riwayat-pembelian') }}"
               class="block px-3 py-2 rounded-md text-base font-medium
               {{ request()->routeIs('riwayat-pembelian') ? 'text-purple-600 bg-purple-50' : 'text-gray-700 hover:text-purple-600 hover:bg-purple-50' }}">
                Riwayat Pembelian
            </a>

            <!-- WhatsApp Button for Mobile -->
            <a href="https://wa.me/6282276993219" target="_blank"
               class="block px-3 py-2 rounded-md text-base font-medium text-white bg-green-500 hover:bg-green-600 mt-2 text-center">
                <div class="flex items-center justify-center">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" viewBox="0 0 24 24" fill="currentColor">
                        <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347"/>
                    </svg>
                    Layanan Pelanggan
                </div>
            </a>
        </div>
    </div>
</header>

<script>
    // Mobile menu toggle functionality
    document.getElementById('mobile-menu-button').addEventListener('click', function() {
        const menu = document.getElementById('mobile-menu');
        const openIcon = this.querySelector('svg:first-child');
        const closeIcon = this.querySelector('svg:last-child');

        menu.classList.toggle('hidden');
        openIcon.classList.toggle('hidden');
        closeIcon.classList.toggle('hidden');
    });
</script>
