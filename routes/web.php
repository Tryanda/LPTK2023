<?php

use App\Http\Controllers\BadmintonController;
use App\Http\Controllers\TenisLapanganController;
use App\Http\Controllers\TenisMejaController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\UserDashboardController;

// register & login user
Route::get('/',[UserController::class,'register']);
Route::post('/proses-form',[UserController::class,'prosesForm']);
Route::get('/login',[UserController::class,'login']);

// dashboard user (manager)
Route::get('badminton',[BadmintonController::class,'index']);
Route::get('tenis-meja',[TenisMejaController::class,'index']);
Route::get('tenis-lapangan',[TenisLapanganController::class,'index']);