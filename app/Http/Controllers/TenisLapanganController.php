<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TenisLapanganController extends Controller
{
    function index(){
        return view('user.dashboard.tenisLapangan.index');
    }
}
