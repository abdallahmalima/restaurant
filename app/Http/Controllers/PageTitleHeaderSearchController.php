<?php

namespace App\Http\Controllers;

use App\Models\PageTitleHeader;
use Illuminate\Http\Request;

class PageTitleHeaderSearchController extends Controller
{
    public function index() {
        $keyword=request('keyword');
        $page_titles=PageTitleHeader::where('title','like',"%{$keyword}%")->orWhere('description','like',"%{$keyword}%")->paginate(3);
        return view('page_titles.index',compact('page_titles'));
    }
    
   
}
