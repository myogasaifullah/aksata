<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Game extends Model
{
    use HasFactory;

    // Tambahkan 'deskripsi' ke fillable agar bisa diisi saat create/update
    protected $fillable = ['gambar', 'nama', 'deskripsi'];

    public function hargas()
    {
        return $this->hasMany(Harga::class);
    }
}
