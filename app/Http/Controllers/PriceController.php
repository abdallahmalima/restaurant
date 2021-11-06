<?php

namespace App\Http\Controllers;

use App\Models\Price;
use Illuminate\Http\Request;

class PriceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('prices.index',['prices'=>Price::paginate(3)]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
       return view('prices.create');

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
            'number' => ['required', 'integer'],
            'emails' => ['required', 'string', 'max:255'],
            'disk' => ['required', 'string', 'max:255'],
            'bandwith' => ['required', 'string', 'max:255'],
            'sub_domains' => ['required', 'string', 'max:255'],
            'domains' => ['required', 'string', 'max:255'],
            'image'=>['required','image']
           
        ]);

       $inputs=$request->only('name','number','emails','disk','bandwith','sub_domains','domains');
       $price=Price::create($inputs);
        if($request->hasFile('image')){
          $this->storeImage($price);
        }
       // User::find(1)->notify(new DataStoredNotification());

        return redirect()->route('prices.create')->with('price',$price)->withSuccess('Created Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Price $price
     * @return \Illuminate\Http\Response
     */
    public function show(Price $price)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Price $price
     * @return \Illuminate\Http\Response
     */
    public function edit(Price $price)
    {
        //
        return view('prices.edit',compact('price'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Price $price
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Price $price)
    {
        //validate inputs
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'number' => ['required', 'integer'],
            'emails' => ['required', 'string', 'max:255'],
            'disk' => ['required', 'string', 'max:255'],
            'bandwith' => ['required', 'string', 'max:255'],
            'sub_domains' => ['required', 'string', 'max:255'],
            'domains' => ['required', 'string', 'max:255'],
            'image'=>['image']
           
        ]);
      //store inputs
        $inputs=$request->only('name','number','emails','disk','bandwith','sub_domains','domains');
        $price->update($inputs);
        //store image if exists
        if($request->hasFile('image')){
         $this->updateImage($price);
        }
       //redirect back to edit form with success message
        return redirect()->route('prices.edit',$price)->with('price',$price)->withSuccess('Updated Successfully');
 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Price $price
     * @return \Illuminate\Http\Response
     */
    public function destroy(Price $price)
    {
        //
        $this->deleteWithImage($price);
        return redirect()->route('prices.index')->withSuccess('Deleted Successfuly');
    }
}
