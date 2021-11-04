<?php

namespace App\Http\Controllers;

use App\Models\MenuItem;
use Illuminate\Http\Request;

class MenuItemSearchController extends Controller
{
    //
    public function index(){
        $keyword=request('keyword');
        $menu_items=MenuItem::where('name','like',"%{$keyword}%")->orWhere('price','like',"%{$keyword}%")->paginate(3);
        return view('menu_items.index',compact('menu_items'));
    }
}
