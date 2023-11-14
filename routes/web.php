<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PelangganController;
use App\Http\Controllers\PesananController;

Route::get('/', function () {
    return redirect('/pelanggan');
});


Route::get('/pelanggan', [PelangganController::class,'index']);

Route::get('/pelanggan/{id}', [PelangganController::class,'detail']);


Route::get('/pesanan', [PesananController::class,'index']);

Route::get('/pesanan/{id}', [PesananController::class,'detail']);