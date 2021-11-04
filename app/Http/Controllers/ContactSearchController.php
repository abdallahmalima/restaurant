<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactSearchController extends Controller
{
    public function index(){
        $keyword=request('keyword');
        $contacts=Contact::where('name','like',"%{$keyword}%")->orWhere('email','like',"%{$keyword}%")->orWhere('message','like',"%{$keyword}%")->paginate(3);
        return view('contacts.index',compact('contacts'));
    }
}
