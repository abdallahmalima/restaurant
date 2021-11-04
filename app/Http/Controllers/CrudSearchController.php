<?php

namespace App\Http\Controllers;

use App\Models\Crud;
use Illuminate\Http\Request;

class CrudSearchController extends Controller
{
    //

    public function index(){
    
        $keyword=request('keyword');
        $datas=Crud::where('title','like',"%{$keyword}%")->orWhere('description','like',"%{$keyword}%")->paginate(3);
        return view('cruds.index',compact('datas'));
    }
}
