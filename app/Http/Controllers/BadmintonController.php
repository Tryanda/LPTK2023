<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BadmintonController extends Controller
{
    function index(){
        return view('user.dashboard.badminton.index');
    }
}
