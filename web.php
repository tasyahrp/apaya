<?php

use App\Http\Controllers\PegawaiController;
use illuminate\Support\Facades\Route;

Route::get('/', [PegawaiController::class,'index']);
Route::get('/pegawai/{id}', [PegawaiController::class,'edit']);
Route::post('/pegawai/{id}', [PegawaiController::class,'update']);