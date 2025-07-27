<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Game extends Model
{
    use HasFactory;

    // Tambahkan semua kolom yang dapat diisi (fillable)
    protected $fillable = ['gambar', 'nama', 'deskripsi', 'cara_bermain'];

    // Relasi ke model Harga (jika ada)
    public function hargas()
    {
        return $this->hasMany(Harga::class);
    }
}
