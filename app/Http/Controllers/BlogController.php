<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;

class BlogController extends Controller
{
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      
        //return response()->json(Blog::paginate(3),200);
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

        //validate inputs
       $data= $request->validate([
            'title' => ['required', 'string', 'max:255'],
            'description' => ['required', 'string', 'max:555'],
            'image' => ['required','image'],
        ]);
        
       //store input without image
        $blog=Blog::create($this->arr_except($data,['image']));

        //store image if input has image file
        if($request->hasFile('image')){
           $this->storeImage($blog);
        }
        //redirect back to create form with success message
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
        //validate inputs
        $data=$request->validate([
            'title' => ['required', 'string', 'max:255'],
            'description' => ['required', 'string', 'max:255'],
            'image' => [ 'image'],
        ]);
      
      //update inputs without image
        $blog->update($this->arr_except($data,['image']));
        
        //update image if exists
        if($request->hasFile('image')){
           $this->updateImage($blog);
           
        }
       
        //redirect back to edit form with success message
        return redirect()->route('blogs.edit',$blog)->with(compact('blog'))->withSuccess('Updated Successfully');
 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Blog $blog
     * @return \Illuminate\Http\Response
     */
    public function destroy(Blog $blog)
    {
        //delete model with Image
        $this->deleteWithImage($blog);
        //redirect back to blog list with success message
        return redirect()->route('blogs.index')->withSuccess('Deleted Successfully');
    }
}
