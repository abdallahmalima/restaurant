<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Gallery;
use Illuminate\Http\Request;

class GalleryController extends Controller
{
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('galleries.index',['galleries'=>Gallery::paginate(3)]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $categories=Category::all();
        return view('galleries.create',compact('categories'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       $data= $request->validate([
            'name' => ['required', 'string', 'max:255','unique:galleries,name'],
            'category_id'=>['required', 'integer','exists:categories,id'],
            'image' => ['required','image'],
        ]);
        $gallery=Gallery::create($this->arr_except($data,['image']));
        if($request->hasFile('image')){
            $gallery->image()->create(['url'=>$request->file('image')->store('images','public')]);
         }
         return redirect()->route('galleries.create')->withSuccess('Created Successfuly');
        
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Gallery $gallery
     * @return \Illuminate\Http\Response
     */
    public function show(Gallery $gallery)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Gallery $gallery
     * @return \Illuminate\Http\Response
     */
    public function edit(Gallery $gallery)
    {
        //
        $categories=Category::all();
        return view('galleries.edit',compact('gallery'))->with(['categories'=>$categories]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Gallery $gallery
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Gallery $gallery)
    {
        //
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'category_id'=>['required', 'integer','exists:categories,id'],
            'image' => [ 'image'],
        ]);
      
        $inputs=$request->only('name');
        $gallery->update($inputs);
        
        if($request->hasFile('image')){
            if($gallery->image){
                $this->deleteFile($gallery->image->url??null);
                $gallery->image()->update(['url'=>$request->file('image')->store('images','public')]);
            }else{
                $gallery->image()->create(['url'=>$request->file('image')->store('images','public')]); 
            }
           
        }
       
        return redirect()->route('galleries.edit',$gallery)->with('gallery',$gallery)->withSuccess('Updated Successfuly');
 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Gallery $gallery
     * @return \Illuminate\Http\Response
     */
    public function destroy(Gallery $gallery)
    {
        //
        $this->deleteFile($gallery->image->url??null);
        $gallery->delete();
        return redirect()->route('galleries.index')->withSuccess('Deleted Successfuly');
    }
}
