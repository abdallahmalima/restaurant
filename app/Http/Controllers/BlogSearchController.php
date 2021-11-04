<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;

class BlogSearchController extends Controller
{
    public function __invoke()
    {
        $keyword=request('keyword');
        $blogs=Blog::where('title','like',"%{$keyword}%")->orWhere('description','like',"%{$keyword}%")->paginate(3);
        return view('blogs.index',compact('blogs'));
    }
}
