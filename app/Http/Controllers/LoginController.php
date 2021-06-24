<?php

namespace App\Http\Controllers;
use Auth;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function login(){
      return view('autentikasi.login');
    }

    public function savelogin(Request $request){
      if (Auth::attempt($request->only('email','password'))) {
        return redirect('/dashboard');
      }
      return redirect('/login');
    }

    public function logout(){
      
      Auth::logout();
      return redirect('/login');
    }

    public function create(){
      return view('autentikasi.registrasi');
    }

    public function savecreate(Request $request){
      return redirect('autentikasi.login');
    }
}
