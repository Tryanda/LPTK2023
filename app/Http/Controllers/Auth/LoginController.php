<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use App\Http\Requests\Auth\LoginRequest;
use RealRashid\SweetAlert\Facades\Alert;
use App\Enums\RoleEnum;
use Auth;
use Error;

class LoginController extends Controller
{
    public function __construct() {
        $this->view = "auth.login.";
    }

    public function index(){
        return view($this->view."index");
        if(Auth::check()){
            return redirect()->route('dashboard.dashboard.index');
        }
        return view($this->view."index");
    }

    public function post(LoginRequest $request)
    {
        try {

            $email = (empty($request->input("email"))) ? null : trim(htmlentities($request->input("email")));
            $password = (empty($request->input("password"))) ? null : trim(htmlentities($request->input("password")));

            $fieldType = filter_var($email, FILTER_VALIDATE_EMAIL) ? 'email' : 'email';
            $rememberme = (empty($request->input('rememberme'))) ? false : true;

            $field = [
                $fieldType => $email,
                'password' => $password
            ];

            if(Auth::attempt($field,$rememberme)){
                if(!Auth::user()->hasRole([
                    RoleEnum::ADMINISTRATOR,
                    RoleEnum::VERIFIKATOR,
                    RoleEnum::MANAGER,
                ])){
                    Auth::logout();
                    throw new Error("Anda tidak diperbolehkan mengakses menu ini");
                }
            }
            else{
                throw new Error("Email / password tidak sesuai");
            }

            alert()->html('Berhasil','Login berhasil','success'); 
            return redirect()->intended(route('dashboard.dashboard.index'));

        } catch (\Throwable $e) {
            Log::emergency($e->getMessage());

            alert()->html('Gagal',$e->getMessage(),'error');
            return redirect()->back()->withInput();
        }
    }
    
}
