<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produk extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'nama',
        'harga',
        'deskripsi',
        'id_kategori',
        'id_merk',
        'kondisi',
        'berat',
        'stok',
    ];
}
