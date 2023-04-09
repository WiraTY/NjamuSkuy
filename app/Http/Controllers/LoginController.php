<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\UserAdmin;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use App\Http\Requests\JamuRequest;
use App\Http\Requests\registerRequest;


class LoginController extends Controller
{
    public function login(){
        return view('masuk.login');
    }
    public function postLogin(Request $request){
        $data =User::where('email', $request->email)->firstOrFail();
        if($request->email == $data->email and $request->password == $data->password and $data->status == 1){
            session(['berhasil_login' => true]);
            Session::put('id',$data->id);
            Session::put('nama',$data->nama);
            Session::put('email',$data->email);
            Session::put('login',TRUE);
            return redirect('home-admins');
        }elseif($request->email == $data->email and $request->password == $data->password and $data->status == 2){
            session(['berhasil_login' => true]);
            Session::put('id',$data->id);
            Session::put('nama',$data->nama);
            Session::put('email',$data->email);
            Session::put('login',TRUE);
            return redirect('home-user'); 
        }elseif(($request->email != $request->password) == true){
            return redirect('login')->with('gagal', 'Email atau Password Salalh !!');    
        }elseif(($request->email == $request->password) == false){
            return redirect('login')->with('gagal', 'Email atau Password Salalh !!');    
        }else{
            return redirect('login')->with('gagal', 'Email atau Password Salalh !!');
        }
        return redirect('login')->with('gagal', 'Email atau Password Salalh !!');
    }
    public function logout(Request $request){
        $request->session()->flush();
        return redirect('login');
    }
    public function register(){
        return view('masuk.register');
    }
    public function postRegister(registerRequest $request){
        $validateData = $request->validated();
        UserAdmin::create([
            'nama' => $request->nama,
            'email' => $request->email,
            'password' => $request->password,
            'status' => 2
        ]);
        $request->session()->flash('tambah', "Penambahan Data {$validateData['nama']} Berhasil");
        return redirect('login');
    }
    
}
