<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Users;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index(){
        return view('login');
    }

    public function register(){
        return view('register');
    }

    public function daftar(Request $request){
        $isidata =[
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'phone' => $request->phone,
            'alamat' => $request->alamat
        ];
        User::create($isidata);
        return redirect()->intended('/')->with('success', 'Register sukses!');
    }

    public function login(Request $request){
        $cek = [
            'email' => $request->email,
            'password' => $request->password
        ];
        if(Auth::attempt($cek)){
            $request->session()->regenerate();
            return redirect()->intended('/dashboard')->with('success', 'Selamat datang');
        }else{
            return back()->with('informasi', 'Login gagal!');
            
        }
    }

    public function logout(Request $request){
        $request->session()->invalidate();
        $request->session()->regenerate();
        return redirect('/');
    }
    
}
