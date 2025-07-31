<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jual extends Model
{
    use HasFactory;

    // Kolom yang bisa diisi massal
    protected $fillable = ['game_id', 'jumlah', 'harga'];

    // Relasi: Jual milik satu Game
    public function game()
    {
        return $this->belongsTo(Game::class);
    }
}