<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryGalleryController extends Controller
{
    public function create(Category $category)
    {
        //
        return view('galleries.create',compact('category'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request,Category $category)
    {
        //validate inputs
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'image' => ['required','image'],
        ]);
        //store inputs
         $gallery=$category->galleries()->create($request->only('name'));
         //store image if exists
        if($request->hasFile('image')){
            $this->storeImage($gallery);
         }
         //redirect back to create form with success message
         return redirect()->route('galleries.create',$gallery)->withSuccess('Created Successfully');
    }
}
