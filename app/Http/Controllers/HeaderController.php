<?php

namespace App\Http\Controllers;

use App\Models\Header;
use Illuminate\Http\Request;

class HeaderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('headers.index',['headers'=>Header::paginate(3)]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
       return view('headers.create');

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
            'title' => ['required', 'string', 'max:255'],
            'description' => ['required', 'string', 'max:255'],
            'image' => ['required','image'],
        ]);

        $inputs=$request->only('title','description');
        $header=Header::create($inputs);
        if($request->hasFile('image')){
            $header->image()->create(['url'=>$request->file('image')->store('images','public')]);
        }
        return redirect()->route('headers.create')->with('header',$header)->withSuccess('Created Successfuly');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Header  $header
     * @return \Illuminate\Http\Response
     */
    public function show(Header $header)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Header  $header
     * @return \Illuminate\Http\Response
     */
    public function edit(Header $header)
    {
        //
        return view('headers.edit',compact('header'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Header  $header
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Header $header)
    {
        //
        $request->validate([
            'title' => ['required', 'string', 'max:255'],
            'description' => ['required', 'string', 'max:255'],
            'image' => [ 'image'],
        ]);
      
        $inputs=$request->only('title','description');
        $header->update($inputs);
        
        if($request->hasFile('image')){
            if($header->image){
                $this->deleteFile($header->image->url??null);
                $header->image()->update(['url'=>$request->file('image')->store('images','public')]);
            }else{
                $header->image()->create(['url'=>$request->file('image')->store('images','public')]);
            }
           
           
           
        }
       
        return redirect()->route('headers.edit',$header)->with('header',$header)->withSuccess('Updated Successfuly');
 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Header  $header
     * @return \Illuminate\Http\Response
     */
    public function destroy(Header $header)
    {
        //
        $this->deleteFile($header->image->url??null);
         $header->delete();
        return redirect()->route('headers.index')->withSuccess('Deleted Successfuly');
    }
}
