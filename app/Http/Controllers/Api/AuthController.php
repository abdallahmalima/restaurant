<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    //
    public function register(Request $request){
        $datas=$request->validate([
         'name'=>'required|string',
         'email'=>'required|email|unique:users',
         'password'=>'required|confirmed',
        ]);
        $user=User::create($datas);
        $token=$user->createToken('myAppToken')->plainTextToken;
        $response=['token'=>$token,'user'=>$user];
        return response($response,201);
    }
    public function login(Request $request){
        $datas=$request->validate([
         'email'=>'required|email',
         'password'=>'required',
        ]);
        $user=User::where('email',$datas['email'])->first();
         if(!$user || !Hash::check($user->password,Hash::make($datas['password']))){
               return response(['message'=>'unauthenticated'],401);
         }
        $token=$user->createToken('myAppToken')->plainTextToken;
        $response=['token'=>$token,'user'=>$user];
        return response($response,201);
    }

    public function logout(){
        auth()->user()->tokens()->delete();
        return response(['message'=>'logged out'],200);
    }
}
