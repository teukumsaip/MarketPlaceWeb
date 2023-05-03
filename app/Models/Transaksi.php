<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaksi extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'idPengguna',
        'tanggal_transaksi',
        'total_harga',
        'metode_pembayaran',
        'status',
    ];
}
