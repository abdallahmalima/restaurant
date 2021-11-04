<?php

namespace App\Http\Controllers;

use App\Models\Ssection;
use App\Models\SsectionItem;
use Illuminate\Http\Request;

class SsectionItemSearchController extends Controller
{
    //
    public function index(){
        $keyword=request('keyword');
        $ssection_items=SsectionItem::where('title','like',"%{$keyword}%")->paginate(3);
        return view('ssection_items.index',compact('ssection_items'));
    }
}
