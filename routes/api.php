<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\AuthController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/pengguna', function (Request $request) {
    return $request->user();
});

route::post('login', [AuthController::class,'login']);
route::post('register', [AuthController::class,'register']);
Route::put('update-user/{id}', [AuthController::class, 'update']);
Route::post('upload-user/{id}', [AuthController::class, 'upload']);
Route::resource('toko', \App\Http\Controllers\Api\TokoController::class);

