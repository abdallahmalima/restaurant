<?php

namespace App\Http\Controllers;

use App\Models\Team;
use Illuminate\Http\Request;

class TeamController extends Controller
{
   
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('teams.index',['teams'=>Team::paginate(3)]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
       return view('teams.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'occupation' => ['required', 'string', 'max:255'],
            'image' => ['required','image'],
        ]);

       $inputs=$request->only('name','occupation');
       $team=Team::create($inputs);
        if($request->hasFile('image')){
           $team->image()->create(['url'=>$request->file('image')->store('images','public')]);
        }
        return redirect()->route('teams.create')->with('team',$team)->withSuccess('Created Successfuly');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Team $team
     * @return \Illuminate\Http\Response
     */
    public function show(Team $team)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Team $team
     * @return \Illuminate\Http\Response
     */
    public function edit(Team $team)
    {
        //
        return view('teams.edit',compact('team'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Team $team
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Team $team)
    {
        //
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'occupation' => ['required', 'string', 'max:255'],
            'image' => ['image'],
        ]);
      
        $inputs=$request->only('name','occupation');
        $team->update($inputs);
        
        if($request->hasFile('image')){
            if($team->image){
               $this->deleteFile($team->image->url??null);
               $team->image()->update(['url'=>$request->file('image')->store('images','public')]);
            }else{
                $team->image()->create(['url'=>$request->file('image')->store('images','public')]);  
            }
           
        }
       
        return redirect()->route('teams.edit',$team)->with('team',$team)->withSuccess('Updated Successfuly');
 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Team $team
     * @return \Illuminate\Http\Response
     */
    public function destroy(Team $team)
    {
        //
        $this->deleteFile($team->image->url??null);
        $team->delete();
        return redirect()->route('teams.index')->withSuccess('Deleted Successfuly');
    }
}
