<?php 

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->string('id_transaksi')->unique();
            $table->string('no_telp');
            $table->string('produk');
            $table->date('tanggal');
            $table->string('metode');
            $table->integer('total');
            $table->string('status');
        });
    }

    public function down(): void {
        Schema::dropIfExists('orders');
    }
};
