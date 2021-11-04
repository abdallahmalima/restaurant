<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserSearchController extends Controller
{
    //
    public function index(){
        $keyword=request('keyword');
        $users=User::where('name','like',"%{$keyword}%")->orWhere('email','like',"%{$keyword}%")->paginate(3);
        return view('users.index',compact('users'));
    }
}
