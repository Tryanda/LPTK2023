<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function __construct(){
        $this->view = "auth.register.";
    }

    public function index(){
        return view($this->view."index");
    }

    public function post(Request $request){

        $validator = Validator::make($request->all(),[
            'nik'               => 'required|min:3|max:16',
            'nama'              => 'required|min:3|max:50',
            'ttl'               => 'required',
            'status'            => 'required',
            'nidn'              => 'required',
            'skFile'            => 'required',
            'jenis_kelamin'     => 'required|in:P,L',
            'kampus'            => 'required'
        ],[
            'required'          => 'atribut wajib diisi',
            'min'               => 'atribut minimal berisi :min karakter',
            'max'               => 'atribut max berisi :max karakter',
        ]);

        if ($validator->fails()){
            return redirect('/')->withErrors($validator)->withInput();
        }else{
            echo $request->nik;                 echo"<br>";
            echo $request->nama;                echo"<br>";
            echo $request->ttl;                 echo"<br>";
            echo $request->status;              echo"<br>";
            echo $request->nidn;                echo"<br>";
            echo $request->skFile;              echo"<br>";
            echo $request->jenis_kelamin;       echo"<br>";
            echo $request->kampus;              echo"<br>";
        }

        dump ($validator);
    }
}
