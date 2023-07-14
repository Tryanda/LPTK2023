<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserDashboardController extends Controller
{
    function index(){
        return view('user.dashboard.index');
    }
}
