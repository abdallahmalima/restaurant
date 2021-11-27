<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MyLoginController extends Controller
{
    //
    public function index(){
        return view('auth.login');
    }

    public function authenticate(Request $request){

        $credentials=$request->validate([
            'email'=>['required','email'],
            'password'=>['required','min:8']
        ]);

        if(Auth::attempt($credentials,(Boolean)$request->remember)){
    
            $request->session()->regenerate();
            return redirect()->intended('cruds');
          
        }

        return redirect()->route('login')->withErrors(['credentials'=>'Invalid Username or Password']);
    }


    public function logout(){
        Auth::logout();
      return  redirect()->route('login');
    }
}
