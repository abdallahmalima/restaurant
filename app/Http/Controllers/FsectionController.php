<?php

namespace App\Http\Controllers;

use App\Models\Fsection;
use Illuminate\Http\Request;

class FsectionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('fsections.index',['fsections'=>Fsection::paginate(3)]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
       return view('fsections.create');

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
            'number' => ['required', 'integer'],
            'image' => ['required','image'],
        ]);

        $inputs=$request->only('title','number');
        $fsection=Fsection::create($inputs);
        if($request->hasFile('image')){
            $fsection->image()->create(['url'=>$request->file('image')->store('images','public')]);
        }
        return redirect()->route('fsections.create')->with('fsection',$fsection)->withSuccess('Created Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Fsection  $fsection
     * @return \Illuminate\Http\Response
     */
    public function show(Fsection $fsection)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Fsection  $fsection
     * @return \Illuminate\Http\Response
     */
    public function edit(Fsection $fsection)
    {
        //
        return view('fsections.edit',compact('fsection'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Fsection  $fsection
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Fsection $fsection)
    {
        //
        $request->validate([
            'title' => ['required', 'string', 'max:255'],
            'number' => ['required', 'integer'],
            'image' => [ 'image'],
        ]);
      
        $inputs=$request->only('title','number');
        $fsection->update($inputs);
        
        if($request->hasFile('image')){
            if($fsection->image){
                $this->deleteFile($fsection->image->url??null);
                $fsection->image()->update(['url'=>$request->file('image')->store('images','public')]);
            }else{
                $fsection->image()->create(['url'=>$request->file('image')->store('images','public')]); 
            }
        }
       
        return redirect()->route('fsections.edit',$fsection)->with('fsection',$fsection)->withSuccess('Updated Successfully');
 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Fsection  $fsection
     * @return \Illuminate\Http\Response
     */
    public function destroy(Fsection $fsection)
    {
        //
        $this->deleteFile($fsection->image->url??null);
         $fsection->delete();
        return redirect()->route('fsections.index')->withSuccess('Deleted Successfully');
    }
}
