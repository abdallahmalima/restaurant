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
        //
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'image' => ['required','image'],
        ]);
         $gallery=$category->galleries()->create($request->only('name'));
        if($request->hasFile('image')){
            $gallery->image()->create(['url'=>$request->file('image')->store('images','public')]);
         }
         return redirect()->route('galleries.create',$gallery)->withSuccess('Created Successfuly');
    }
}
