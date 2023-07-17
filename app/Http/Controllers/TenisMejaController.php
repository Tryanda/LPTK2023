<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TenisMejaController extends Controller
{
    function index(){
        return view('user.dashboard.tenisMeja.index');
    }
}
