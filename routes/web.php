<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PelangganController;
use App\Http\Controllers\PesananController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return redirect('/pelanggan');
});


Route::get('/pelanggan', [PelangganController::class,'index']);

Route::get('/pelanggan/{id}', [PelangganController::class,'detail']);


Route::get('/pesanan', [PesananController::class,'index']);

Route::get('/pesanan/{id}', [PesananController::class,'detail']);