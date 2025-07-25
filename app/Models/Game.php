<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Game extends Model
{
    use HasFactory;

    protected $fillable = ['gambar', 'nama'];

    public function hargas()
    {
        return $this->hasMany(Harga::class);
    }
}
