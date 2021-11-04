<?php

namespace App\Http\Controllers;

use App\Models\Gallery;
use Illuminate\Http\Request;

class GallerySearchController extends Controller
{
    public function index(){
        $keyword=request('keyword');
        $galleries=Gallery::where('name','like',"%{$keyword}%")->paginate(3);
        return view('galleries.index',compact('galleries'));
    }
}
