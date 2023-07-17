<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function __construct() {
        $this->view = "auth.login.";
    }

    public function index(){
        return view($this->view."index");
    }
}
