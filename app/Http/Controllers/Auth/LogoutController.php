<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;


class LogoutController extends Controller
{
    public function logout(){
        if(Auth::check()){
            Auth::logout();
            alert()->html('Berhasil','Logout Berhasil','success');
        }
        return redirect()->route('index');
    }
}
