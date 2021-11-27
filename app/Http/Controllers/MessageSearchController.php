<?php

namespace App\Http\Controllers;

use App\Models\Message;
use Illuminate\Http\Request;

class MessageSearchController extends Controller
{
    //
    public function index() {
        $keyword=request('keyword');
        $messages=Message::where('name','like',"%{$keyword}%")
                           ->orWhere('email','like',"%{$keyword}%")
                           ->orWhere('body','like',"%{$keyword}%")
                           ->paginate(3);
        return view('messages.index',compact('messages'));
    }
}
