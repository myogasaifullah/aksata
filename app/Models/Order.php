<?php


namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $table = 'orders';

    protected $fillable = [
        'id_transaksi',
        'no_telp',
        'produk',
        'tanggal',
        'metode',
        'total',
        'status',
        'game_id',
    ];

    public $timestamps = false;
}
