<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UlasanProduk extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'idProduk',
        'idPengguna',
        'tanggal_ulasan',
        'rating',
        'komentar',
    ];
}
