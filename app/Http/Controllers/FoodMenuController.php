<?php

namespace App\Http\Controllers;

use App\Models\FoodMenu;
use Illuminate\Http\Request;

class FoodMenuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $food_menus=FoodMenu::query()
                  ->paginate(5);
        return view('food_menus.index',[
            'food_menus'=>$food_menus
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('food_menus.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data=$request->validate([
            'name'=>['required','max:50'],
            'description'=>['required','max:550'],
            'price'=>['required','numeric'],
            'image'=>['required','image'],
        ]);
        $food_menu=FoodMenu::create($this->arr_except( $data,['image']));
        $this->storeImage($food_menu);
        return redirect()->route('food_menus.create')->withSuccess('Created Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\FoodMenu  $foodMenu
     * @return \Illuminate\Http\Response
     */
    public function show(FoodMenu $foodMenu)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\FoodMenu  $foodMenu
     * @return \Illuminate\Http\Response
     */
    public function edit(FoodMenu $foodMenu)
    {
        //
        return view('food_menus.edit',[
            'foodMenu'=>$foodMenu
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\FoodMenu  $foodMenu
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, FoodMenu $foodMenu)
    {
        //
        $data=$request->validate([
            'name'=>['required','max:50'],
            'description'=>['required','max:550'],
            'price'=>['required','numeric'],
            'image'=>['image'],
        ]);
        $foodMenu->update($this->arr_except( $data,['image']));
        $this->updateImage($foodMenu);
        return redirect()->route('food_menus.edit', $foodMenu)->withSuccess('Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\FoodMenu  $foodMenu
     * @return \Illuminate\Http\Response
     */
    public function destroy(FoodMenu $foodMenu)
    {
        //
        $this->deleteWithImage( $foodMenu);
        return redirect()->route('food_menus.index')->withSuccess('Deleted Successfully');
    }
}
