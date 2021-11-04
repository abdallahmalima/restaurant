<?php

namespace App\Http\Controllers;

use App\Models\FooterLink;
use Illuminate\Http\Request;

class FooterLinkSearchController extends Controller
{
    public function index(){
        $keyword=request('keyword');
        $footer_links=FooterLink::where('name','like',"%{$keyword}%")->orWhere('url','like',"%{$keyword}%")->paginate(3);
        return view('footer_links.index',compact('footer_links'));
    }
}
