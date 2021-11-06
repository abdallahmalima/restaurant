<?php

namespace App\Http\Controllers;

use App\Models\Ssection;
use Illuminate\Http\Request;

class SsectionController extends Controller
{
   
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('ssections.index',['ssections'=>Ssection::paginate(3)]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
       return view('ssections.create');

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
            'description' => ['required', 'string', 'max:555'],
            'image' => ['required','image'],
        ]);

        $inputs=$request->only('title','description');
        $ssection=Ssection::create($inputs);
        if($request->hasFile('image')){
         $this->storeImage($ssection);
        }
        return redirect()->route('ssections.create')->with('ssection',$ssection)->withSuccess('Created Successfuly');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Ssection $ssection
     * @return \Illuminate\Http\Response
     */
    public function show(Ssection $ssection)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Ssection $ssection
     * @return \Illuminate\Http\Response
     */
    public function edit(Ssection $ssection)
    {
        //
        return view('ssections.edit',compact('ssection'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Ssection $ssection
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Ssection $ssection)
    {
        //validate inputs
        $request->validate([
            'title' => ['required', 'string', 'max:255'],
            'description' => ['required', 'string', 'max:555'],
            'image' => [ 'image'],
        ]);
      
        //store inputs
         $ssection->update($request->only('title','description'));
        //store image if exists
        if($request->hasFile('image')){
            $this->updateImage($ssection);
        }
       //redirect back to redit form with success message
        return redirect()->route('ssections.edit',$ssection)->with('ssection',$ssection)->withSuccess('Updated Successfuly');
 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Ssection $ssection
     * @return \Illuminate\Http\Response
     */
    public function destroy(Ssection $ssection)
    {
        //
        $this->deleteWithImage($ssection);
        return redirect()->route('ssections.index')->withSuccess('Deleted Successfuly');
    }
}
