<?php

namespace App\Http\Controllers;

use App\Models\Fsection;
use Illuminate\Http\Request;

class FsectionSearchController extends Controller
{
    //
    public function index(){
        $keyword=request('keyword');
        $fsections=Fsection::where('title','like',"%{$keyword}%")->orWhere('number','like',"%{$keyword}%")->paginate(3);
        return view('fsections.index',compact('fsections'));
    }
}
