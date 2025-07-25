<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Harga extends Model
{
    use HasFactory;

    protected $fillable = ['game_id', 'jumlah', 'harga'];

    public function game()
    {
        return $this->belongsTo(Game::class);
    }
}
