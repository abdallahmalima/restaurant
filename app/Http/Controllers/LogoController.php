<?php

namespace App\Http\Controllers;

use App\Models\Logo;
use App\Models\User;
use App\Notifications\DataStoredNotification;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LogoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Logo  $logo
     * @return \Illuminate\Http\Response
     */
    public function show(Logo $logo)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Logo  $logo
     * @return \Illuminate\Http\Response
     */
    public function edit()
    {
        //
        $logo=Logo::first();
        return view('logos.edit',compact('logo'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Logo  $logo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        //
        $logo=Logo::first();

        if(!$logo){
            $image_validation_array=['required'];
        }
        $image_validation_array[]=['image'];
        $request->validate([
            'text'=>'required|string|max:30',
            'image'=>$image_validation_array,
        ]);
      
       
        if($logo){
            $logo->update($request->except('image'));
            if($request->hasFile('image')){
                $this->deleteFile($logo->image->url??null);
                $logo->image()->update(['url'=>$request->file('image')->store('images','public')]);
            }
        }else{
          
            $logo=Logo::create($request->except('image'));
            if($request->hasFile('image')){
                $logo->image()->create(['url'=>$request->file('image')->store('images','public')]);
            }
        }
       
      
      
      return redirect()->route('logos.edit',$logo)->with('logo',$logo)->withSuccess('Updated Successfuly');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Logo  $logo
     * @return \Illuminate\Http\Response
     */
    public function destroy(Logo $logo)
    {
        //
    }
}
