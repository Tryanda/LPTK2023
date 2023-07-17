<?php

use App\Http\Controllers\BadmintonController;
use App\Http\Controllers\TenisLapanganController;
use App\Http\Controllers\TenisMejaController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\UserDashboardController;

// Route for auth
Route::group(["namespace"=>"App\Http\Controllers\Auth"], function(){
    Route::get('/', 'LoginController@index')->name('index');
    Route::post('/', 'LoginController@post')->name('post');
	

    Route::group(["as"=>"register.", "prefix"=>"register"], function(){
        Route::get("/", "RegisterController@index")->name('register.index');
        Route::post("/", "RegisterController@post")->name('register.post');
    });

    Route::group(["as" => "logout.","prefix" => "logout"], function () {
        Route::get("/", "LogoutController@index")->name('logout.index');
    });
});

// Route::get('/',[UserController::class,'register']);
// Route::post('/proses-form',[UserController::class,'prosesForm']);
// Route::get('/login',[UserController::class,'login']);

// Route Manager
Route::get('badminton',[BadmintonController::class,'index']);
Route::get('tenis-meja',[TenisMejaController::class,'index']);
Route::get('tenis-lapangan',[TenisLapanganController::class,'index']);

// Route Administrator
Route::group(["namespace"=>"App\Http\Controllers\Dashboard", "as"=>"dashboard.", "prefix"=>"dashboard"], function(){
    Route::get("/", "DashboardController@index")->name("dashboard.index");

    // Route hasRole Admin n Manager
    Route::group(["as"=>"", "prefix"=>""], function(){

    });

    // Route hasRole Admin n Verifikator

    // Route hasRole Admin only
});