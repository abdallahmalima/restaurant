<?php

namespace App\Http\Controllers;

use App\Models\Ssection;
use App\Models\SsectionItem;
use Illuminate\Http\Request;

class SsectionItemController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('ssection_items.index',['ssection_items'=>SsectionItem::paginate(3)]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $ssections=Ssection::all();
        return view('ssection_items.create',compact('ssections'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
     // dd($request->all());
        $request->validate([
            'title' => ['required', 'string', 'max:255'],
            'ssection_id'=>['required', 'integer','exists:ssections,id']
        ]);
        $ssection_item=SsectionItem::create($request->only('title','ssection_id'));
        if($request->hasFile('image')){
            $ssection_item->image()->create(['url'=>$request->file('image')->store('images','public')]);
         }
         return redirect()->route('ssection_items.create')->withSuccess('Created Successfuly');
        
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\SsectionItem $ssection
     * @return \Illuminate\Http\Response
     */
    public function show(SsectionItem $ssection)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\SsectionItem $ssection
     * @return \Illuminate\Http\Response
     */
    public function edit(SsectionItem $ssection_item)
    {
        //
        $ssections=Ssection::all();
        return view('ssection_items.edit',compact('ssections'))->with(['ssection_item'=>$ssection_item]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\SsectionItem $ssection
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, SsectionItem $ssection_item)
    {
        //
        $request->validate([
            'title' => ['required', 'string', 'max:255'],
            'ssection_id'=>['required', 'integer','exists:ssections,id'],
           
        ]);
      
        $inputs=$request->only('title','ssection_id');
        $ssection_item->update($inputs);
        
        if($request->hasFile('image')){
            $this->deleteFile($ssection_item->image->url??null);
           $ssection_item->image()->update(['url'=>$request->file('image')->store('images','public')]);
           
           
        }
       
        return redirect()->route('ssection_items.edit',$ssection_item)->with('ssection_item',$ssection_item)->withSuccess('Updated Successfuly');
 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\SsectionItem $ssection
     * @return \Illuminate\Http\Response
     */
    public function destroy(SsectionItem $ssection_item)
    {
        //
        $this->deleteFile($ssection_item->image->url??null);
        $ssection_item->delete();
        return redirect()->route('ssection_items.index')->withSuccess('Deleted Successfuly');
    }
}
