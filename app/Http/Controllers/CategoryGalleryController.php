<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;

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
        $data=$request->validate([
            'name' => ['required', 'string', 'max:255'],
            'image' => ['required','image'],
        ]);
        //store inputs
         $gallery=$category->galleries()->create($this->arr_except($data,['image']));
         //store image if exists
        if($request->hasFile('image')){
            $this->storeImage($gallery);
         }
         //redirect back to create form with success message
         return redirect()->route('galleries.create',$gallery)->withSuccess('Created Successfully');
    }
}
