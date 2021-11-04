<?php

namespace App\Http\Controllers;

use App\Models\Ssection;
use Illuminate\Http\Request;

class SsectionSearchController extends Controller
{
    public function index(){
        $keyword=request('keyword');
        $ssections=Ssection::where('title','like',"%{$keyword}%")->orWhere('description','like',"%{$keyword}%")->paginate(3);
        return view('ssections.index',compact('ssections'));
    }
}
