<?php

namespace App\Http\Controllers;

use App\Models\Testimony;
use Illuminate\Http\Request;

class TestimonySearchController extends Controller
{
    public function index(){
        $keyword=request('keyword');
        $testimonies=Testimony::where('name','like',"%{$keyword}%")->orWhere('title','like',"%{$keyword}%")->orWhere('description','like',"%{$keyword}%")->paginate(3);
        return view('testimonies.index',compact('testimonies'));
    }
}
