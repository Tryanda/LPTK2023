<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{
    public function register(){
        return view('user.register.index');
    }
    // public function prosesForm(Request $request){

    //     $validateData = $request->validate([
    //         'nik'               => 'required|min:3|max:16',
    //         'nama'              => 'required|min:3|max:50',
    //         'ttl'               => 'required',
    //         'nidn'              => 'required',
    //         'jenis_kelamin'     => 'required|in:P,L',
    //         'kampus'            => 'required'
    //     ]);

    //     dump ($validateData);

    //     echo $validateData['nik'];  echo "<br>";
    //     echo $validateData['nama'];  echo "<br>";
    //     echo $validateData['ttl'];  echo "<br>";
    //     echo $validateData['nidn'];  echo "<br>";
    //     echo $validateData['jenis_kelamin'];  echo "<br>";
    //     echo $validateData['kampus'];  echo "<br>";
    // }

    public function prosesForm(Request $request){

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
            echo $request->skFile;                echo"<br>";
            echo $request->jenis_kelamin;       echo"<br>";
            echo $request->kampus;       echo"<br>";
        }

        dump ($validator);
    }


    // Login=======================================================
    function login(){
        return view ('user.register.login');
    }
}
