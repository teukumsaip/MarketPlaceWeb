<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Pengguna;

class AuthController extends Controller
{
    public function login(Request $request){

        if(!$request->email){
            return 'Email tidak boleh kosong';
        }
        $pengguna = Pengguna::where('email', $request->email)->first();
        if($pengguna){
            return "selamat datang ".$pengguna->nama;
        }
        return "User tidak ditemukan";
    }
}
