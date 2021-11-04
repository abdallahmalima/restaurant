<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\User;
use Illuminate\Http\Request;

class BlogController extends Controller
{
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      
        return view('blogs.index',['blogs'=>Blog::paginate(3)]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
       return view('blogs.create');

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
        $blog=Blog::create($inputs);
        if($request->hasFile('image')){
           $blog->image()->create(['url'=>$request->file('image')->store('images','public')]);
        }
        return redirect()->route('blogs.create')->withSuccess('Created Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Blog $blog
     * @return \Illuminate\Http\Response
     */
    public function show(Blog $blog)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Blog $blog
     * @return \Illuminate\Http\Response
     */
    public function edit(Blog  $blog)
    {
        //
        return view('blogs.edit',compact('blog'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Blog $blog
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Blog $blog)
    {
        //
        $request->validate([
            'title' => ['required', 'string', 'max:255'],
            'description' => ['required', 'string', 'max:255'],
            'image' => [ 'image'],
        ]);
      
        $inputs=$request->only('title','description');
        $blog->update($inputs);
        
        if($request->hasFile('image')){
            if($blog->image){
                $this->deleteFile($blog->image->url??null);
                $blog->image()->update(['url'=>$request->file('image')->store('images','public')]);
            }else{
                $blog->image()->create(['url'=>$request->file('image')->store('images','public')]); 
            }
           
        }
       
        return redirect()->route('blogs.edit',$blog)->with('blog',$blog)->withSuccess('Updated Successfully');
 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Blog $blog
     * @return \Illuminate\Http\Response
     */
    public function destroy(Blog $blog)
    {
        //
        $this->deleteFile($blog->image->url??null);
        $blog->delete();
        return redirect()->route('blogs.index')->withSuccess('Deleted Successfully');
    }
}
