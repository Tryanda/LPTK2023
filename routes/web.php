<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\UserDashboardController;

// register & login user
Route::get('/',[UserController::class,'register']);
Route::post('/proses-form',[UserController::class,'prosesForm']);
Route::get('/login',[UserController::class,'login']);

// dashboard user (manager)
Route::get('dashboard',[UserDashboardController::class,'index']);