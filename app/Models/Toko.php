<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Toko extends Model
{
    use HasFactory;

    protected $fillable = [
        'idUser',
        'nama_toko',
        'nama_pemilik',
        'alamat',
        'kecamatan',
        'kota',
        'kode_post',
    ];
}
