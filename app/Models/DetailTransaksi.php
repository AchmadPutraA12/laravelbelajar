<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DetailTransaksi extends Model
{
    use HasFactory;

    protected $table = 'detail';

    protected $fillable = [
        'transaksi_id', 'produk_id', 'quantity', 'harga',
    ];

    public function transaksi()
    {
        return $this->belongsTo(Transaksi::class);
    }
}
