<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pembayaran extends Model
{
    use HasFactory;
    public function pesanan()
    {
        return $this->belongsTo(Pesanan::class);
    }
    public function barang()
    {
        return $this->belongsTo(Barang::class);
    }
    protected $fillable = ['pesanan_id','jumlah','harga','url_foto'];
}