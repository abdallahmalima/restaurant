<?php

namespace App\Http\Controllers;

use App\Models\Header;
use Illuminate\Http\Request;

class HeaderSearchController extends Controller
{
    public function index(){
        $keyword=request('keyword');
        $headers=Header::where('title','like',"%{$keyword}%")->orWhere('description','like',"%{$keyword}%")->paginate(3);
        return view('headers.index',compact('headers'));
    }
}
