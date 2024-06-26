<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{
    use HasFactory;
    protected $fillable = ['nama', 'deskripsi', 'harga', 'stock'];
    public function pesanans()
    {
        return $this->hasMany(Pesanan::class);
    }
}
