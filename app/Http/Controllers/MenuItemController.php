<?php

namespace App\Http\Controllers;

use App\Models\MenuItem;
use Illuminate\Http\Request;

class MenuItemController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('menu_items.index',['menu_items'=>MenuItem::paginate(3)]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
       return view('menu_items.create');

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
            'price' => ['required', 'integer'],
            'image' => ['required','image'],
        ]);

        $inputs=$request->only('name','price');
        $menu_item=MenuItem::create($inputs);
        if($request->hasFile('image')){
            $menu_item->image()->create(['url'=>$request->file('image')->store('images','public')]);
        }
        return redirect()->route('menu_items.create')->with('menu_item',$menu_item)->withSuccess('Created Successfuly');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\MenuItem  $menu_item
     * @return \Illuminate\Http\Response
     */
    public function show(MenuItem $menu_item)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\MenuItem  $menu_item
     * @return \Illuminate\Http\Response
     */
    public function edit(MenuItem $menu_item)
    {
        //
        return view('menu_items.edit',compact('menu_item'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\MenuItem  $menu_item
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, MenuItem $menu_item)
    {
        //
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'price' => ['required', 'integer'],
            'image' => ['image'],
        ]);
      
        $inputs=$request->only('name','price');
        $menu_item->update($inputs);
        
        if($request->hasFile('image')){
            if($menu_item->image){
                $this->deleteFile($menu_item->image->url??null);
                $menu_item->image()->update(['url'=>$request->file('image')->store('images','public')]);
                }else{
                $menu_item->image()->create(['url'=>$request->file('image')->store('images','public')]);  
            }
           
        }
       
        return redirect()->route('menu_items.edit',$menu_item)->with('menu_item',$menu_item)->withSuccess('Updated Successfuly');
 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\MenuItem  $menu_item
     * @return \Illuminate\Http\Response
     */
    public function destroy(MenuItem $menu_item)
    {
        //
        $this->deleteFile($menu_item->image->url??null);
         $menu_item->delete();
        return redirect()->route('menu_items.index')->withSuccess('Deleted Successfuly');
    }
}
