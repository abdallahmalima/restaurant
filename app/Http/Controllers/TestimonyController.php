<?php

namespace App\Http\Controllers;

use App\Models\Testimony;
use Illuminate\Http\Request;

class TestimonyController extends Controller
{
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('testimonies.index',['testimonies'=>Testimony::paginate(3)]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
       return view('testimonies.create');

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
            'title' => ['required', 'string', 'max:255'],
            'description' => ['required', 'string', 'max:255'],
            'image' => ['required','image'],
        ]);

        $inputs=$request->only('name','title','description');
        $testimony=Testimony::create($inputs);
        if($request->hasFile('image')){
            $testimony->image()->create(['url'=>$request->file('image')->store('images','public')]);
        }
        return redirect()->route('testimonies.create')->with('testimony',$testimony)->withSuccess('Created Successfuly');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Testimony  $testimony
     * @return \Illuminate\Http\Response
     */
    public function show(Testimony $testimony)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Testimony  $testimony
     * @return \Illuminate\Http\Response
     */
    public function edit(Testimony $testimony)
    {
        //
        return view('testimonies.edit',compact('testimony'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Testimony  $testimony
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Testimony $testimony)
    {
        //
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'title' => ['required', 'string', 'max:255'],
            'description' => ['required', 'string', 'max:255'],
            'image' => [ 'image'],
        ]);
      
        $inputs=$request->only('name','title','description');
        $testimony->update($inputs);
        
        if($request->hasFile('image')){
            if($testimony->image){
                $this->deleteFile($testimony->image->url??null);
                $testimony->image()->update(['url'=>$request->file('image')->store('images','public')]);
            }else{
                $testimony->image()->create(['url'=>$request->file('image')->store('images','public')]);  
            }
           
        }
       
        return redirect()->route('testimonies.edit',$testimony)->with('testimony',$testimony)->withSuccess('Updated Successfuly');
 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Testimony  $testimony
     * @return \Illuminate\Http\Response
     */
    public function destroy(Testimony $testimony)
    {
        //
        $this->deleteFile($testimony->image->url??null);
         $testimony->delete();
        return redirect()->route('testimonies.index')->withSuccess('Deleted Successfuly');
    }
}
