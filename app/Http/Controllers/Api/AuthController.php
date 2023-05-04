<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Pengguna;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller {
    public function login(Request $request) {
        $validasi = Validator::make($request->all(), [
            'email' => 'required',
            'password' => 'required|min:6',
        ]);

        if ($validasi->fails()) {
            return $this->error($validasi->errors()->first());
        }

        $pengguna = Pengguna::where('email', $request->email)->first();
        if($pengguna){
            if(password_verify($request->password, $pengguna->password)){
                return $this->success($pengguna,"Selamat datang ".$pengguna->nama);
            }else{
                return $this->error("Password salah");
            }
        }
        return $this->error("User tidak ditemukan");
    }

    public function register(Request $request){
        $validasi = Validator::make($request->all(),[
            'nama' => 'required',
            'email' => 'required|unique:penggunas',
            'no_telp' => 'required|unique:penggunas',
            'password' => 'required|min:8',
        ]);

        if ($validasi->fails()){
            return $this->error($validasi->errors()->first());
        }

        $pengguna = Pengguna::create(array_merge($request->all(), [
            'password' => bcrypt($request->password)
        ]));

        if ($pengguna){
            return $this->success($pengguna,"Selamat datang ".$pengguna->nama);
        }else {
            return $this->error("Terjadi Kesalahan");
        }
    }

    public function success($data, $message = "Success"){
        return response()->json([
            'code' => 200,
            'message' => $message,
            'data' => $data
        ]);
    }

    public function error($message){
        return response()->json([
            'code' => 400,
            'message' => $message
        ], 400);
    }
}
