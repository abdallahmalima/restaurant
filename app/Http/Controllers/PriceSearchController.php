<?php

namespace App\Http\Controllers;

use App\Models\Price;
use Illuminate\Http\Request;

class PriceSearchController extends Controller
{
    //
    public function index(){
        $keyword=request('keyword');
        $prices=Price::where('name','like',"%{$keyword}%")
                    ->orwhere('disk','like',"%{$keyword}%")
                    ->orwhere('emails','like',"%{$keyword}%")
                    ->orWhere('number','like',"%{$keyword}%")->paginate(3);
        return view('prices.index',compact('prices'));
    }
}
