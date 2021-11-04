<?php

namespace App\Http\Controllers;

use App\Models\Team;
use Illuminate\Http\Request;

class TeamSearchController extends Controller
{
    public function index(){
        $keyword=request('keyword');
        $teams=Team::where('name','like',"%{$keyword}%")->orWhere('occupation','like',"%{$keyword}%")->paginate(3);
        return view('teams.index',compact('teams'));
    }
}
