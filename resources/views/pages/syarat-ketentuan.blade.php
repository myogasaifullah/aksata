@extends('layouts.app')

@section('content')
<div class="max-w-4xl mx-auto py-10 px-4">
    <!-- Header Section -->
    <div class="text-center mb-10">
        <h1 class="text-3xl md:text-4xl font-bold text-gray-800 mb-3">Syarat & Ketentuan</h1>
        <div class="w-20 h-1 bg-purple-600 mx-auto"></div>
    </div>

    <!-- Last Updated -->
    <div class="bg-purple-50 border-l-4 border-purple-500 p-4 rounded-r-lg mb-8">
        <p class="text-purple-800 font-medium flex items-center gap-2">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
            </svg>
            Terakhir diperbarui: 1 Januari 2023
        </p>
    </div>

    <!-- Terms Content -->
    <div class="bg-white shadow-md rounded-2xl p-6 md:p-8">
        <!-- Introduction -->
        <div class="mb-8">
            <p class="text-gray-700 leading-relaxed">
                Selamat datang di Aksata Store. Dengan mengakses atau menggunakan layanan kami, Anda setuju untuk terikat oleh syarat dan ketentuan berikut. Harap baca dengan seksama sebelum menggunakan layanan kami.
            </p>
        </div>

        <!-- Terms Sections -->
        <div class="space-y-8">
            <!-- Section 1 -->
            <div>
                <h2 class="text-xl font-semibold text-gray-800 mb-3 flex items-center gap-2">
                    <span class="bg-purple-100 text-purple-800 w-8 h-8 rounded-full flex items-center justify-center text-sm">1</span>
                    Definisi
                </h2>
                <ul class="list-disc pl-6 space-y-2 text-gray-700">
                    <li><strong>Platform</strong> merujuk pada aplikasi atau website Royal Play Coins</li>
                    <li><strong>Pengguna</strong> adalah individu yang mengakses atau menggunakan Platform</li>
                    <li><strong>Layanan</strong> mencakup semua produk dan layanan yang ditawarkan melalui Platform</li>
                    <li><strong>Akun</strong> adalah profil pengguna yang terdaftar di Platform</li>
                </ul>
            </div>

            <!-- Section 2 -->
            <div>
                <h2 class="text-xl font-semibold text-gray-800 mb-3 flex items-center gap-2">
                    <span class="bg-purple-100 text-purple-800 w-8 h-8 rounded-full flex items-center justify-center text-sm">2</span>
                    Penggunaan Layanan
                </h2>
                <div class="space-y-3 text-gray-700">
                    <p>2.1. Dengan menggunakan Layanan kami, Anda menyatakan dan menjamin bahwa:</p>
                    <ul class="list-disc pl-8 space-y-2">
                        <li>Anda berusia minimal 18 tahun</li>
                        <li>Anda memiliki kapasitas hukum untuk menyetujui Syarat & Ketentuan ini</li>
                        <li>Semua informasi yang Anda berikan adalah akurat dan lengkap</li>
                    </ul>
                    
                    <p>2.2. Anda setuju untuk tidak:</p>
                    <ul class="list-disc pl-8 space-y-2">
                        <li>Menggunakan Platform untuk aktivitas ilegal atau melanggar hukum</li>
                        <li>Melakukan tindakan yang dapat mengganggu operasional Platform</li>
                        <li>Mencoba mendapatkan akses tidak sah ke sistem atau data kami</li>
                        <li>Menggunakan akun orang lain tanpa izin</li>
                    </ul>
                </div>
            </div>

            <!-- Section 3 -->
            <div>
                <h2 class="text-xl font-semibold text-gray-800 mb-3 flex items-center gap-2">
                    <span class="bg-purple-100 text-purple-800 w-8 h-8 rounded-full flex items-center justify-center text-sm">3</span>
                    Pembayaran dan Transaksi
                </h2>
                <div class="space-y-3 text-gray-700">
                    <p>3.1. Semua transaksi pembelian koin bersifat final dan tidak dapat dibatalkan.</p>
                    <p>3.2. Harga yang tertera sudah termasuk pajak yang berlaku.</p>
                    <p>3.3. Kami menerima berbagai metode pembayaran yang tersedia di Platform.</p>
                    <p>3.4. Proses verifikasi pembayaran dapat memakan waktu hingga 1x24 jam.</p>
                    <p>3.5. Jika terjadi masalah dengan transaksi, harap segera hubungi tim dukungan kami.</p>
                </div>
            </div>

            <!-- Section 4 -->
            <div>
                <h2 class="text-xl font-semibold text-gray-800 mb-3 flex items-center gap-2">
                    <span class="bg-purple-100 text-purple-800 w-8 h-8 rounded-full flex items-center justify-center text-sm">4</span>
                    Kebijakan Pengembalian
                </h2>
                <div class="space-y-3 text-gray-700">
                    <p>4.1. Semua pembelian koin bersifat non-refundable (tidak dapat dikembalikan).</p>
                    <p>4.2. Pengembalian dana hanya dapat dipertimbangkan dalam kasus:</p>
                    <ul class="list-disc pl-8 space-y-2">
                        <li>Kesalahan sistem yang dapat diverifikasi</li>
                        <li>Transaksi ganda karena kesalahan teknis</li>
                    </ul>
                    <p>4.3. Semua permintaan pengembalian dana harus diajukan dalam waktu 7 hari setelah transaksi.</p>
                </div>
            </div>

            <!-- Section 5 -->
            <div>
                <h2 class="text-xl font-semibold text-gray-800 mb-3 flex items-center gap-2">
                    <span class="bg-purple-100 text-purple-800 w-8 h-8 rounded-full flex items-center justify-center text-sm">5</span>
                    Pembatasan Tanggung Jawab
                </h2>
                <div class="space-y-3 text-gray-700">
                    <p>5.1. Kami tidak bertanggung jawab atas:</p>
                    <ul class="list-disc pl-8 space-y-2">
                        <li>Kerugian tidak langsung atau konsekuensial</li>
                        <li>Kehilangan keuntungan, pendapatan, atau data</li>
                        <li>Kerusakan yang disebabkan oleh penggunaan yang tidak sah atau penyalahgunaan Platform</li>
                    </ul>
                    <p>5.2. Kami berhak mengubah, menangguhkan, atau menghentikan Layanan kapan saja tanpa pemberitahuan sebelumnya.</p>
                </div>
            </div>

            <!-- Section 6 -->
            <div>
                <h2 class="text-xl font-semibold text-gray-800 mb-3 flex items-center gap-2">
                    <span class="bg-purple-100 text-purple-800 w-8 h-8 rounded-full flex items-center justify-center text-sm">6</span>
                    Perubahan Syarat & Ketentuan
                </h2>
                <div class="space-y-3 text-gray-700">
                    <p>6.1. Kami dapat memperbarui Syarat & Ketentuan ini dari waktu ke waktu.</p>
                    <p>6.2. Perubahan akan diberitahukan melalui Platform atau email.</p>
                    <p>6.3. Penggunaan berkelanjutan setelah perubahan berarti Anda menerima syarat yang diperbarui.</p>
                </div>
            </div>

            <!-- Section 7 -->
            <div>
                <h2 class="text-xl font-semibold text-gray-800 mb-3 flex items-center gap-2">
                    <span class="bg-purple-100 text-purple-800 w-8 h-8 rounded-full flex items-center justify-center text-sm">7</span>
                    Kontak Kami
                </h2>
                <div class="space-y-3 text-gray-700">
                    <p>Jika Anda memiliki pertanyaan tentang Syarat & Ketentuan ini, silakan hubungi:</p>
                    <ul class="list-disc pl-8 space-y-2">
                        <li>Email: aksatastore@gmail.com</li>
                        <li>WhatsApp: +62 822-7699-3219</li>
                    </ul>
                </div>
            </div>
        </div>

        <!-- Acceptance Section -->
        <div class="mt-10 p-6 bg-gray-50 rounded-lg border border-gray-200">
            <h3 class="text-lg font-semibold text-gray-800 mb-3">Persetujuan</h3>
            <p class="text-gray-700">Dengan menggunakan Platform kami, Anda menyatakan bahwa Anda telah membaca, memahami, dan menyetujui semua syarat dan ketentuan yang tercantum di atas.</p>
        </div>
    </div>

   
</div>
@endsection