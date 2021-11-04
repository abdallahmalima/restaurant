<?php

namespace App\Http\Controllers;

use App\Models\FooterLink;
use Illuminate\Http\Request;

class FooterLinkController extends Controller
{
   
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('footer_links.index',['footer_links'=>FooterLink::paginate(3)]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       
        return view('footer_links.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $request->validate([
          'name'=>'required|string|max:255',
          'url'=>'required|string|max:255',
        ]);

        FooterLink::create($request->only('name','url'));
        return redirect()->route('footer_links.create')->withSuccess('Created Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(FooterLink $footer_link)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(FooterLink $footer_link)
    {
        //
       return view('footer_links.edit',compact('footer_link'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, FooterLink $footer_link)
    {
        //
        
        $request->validate([
            'name'=>'required|string|max:255',
            'url'=>'required|string|max:255',
          ]);

        $footer_link->update($request->only('name','url'));
        return redirect()->route('footer_links.edit',$footer_link)->with('footer_link',$footer_link)->withSuccess('Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(FooterLink $footer_link)
    {
       $footer_link->delete();
       return redirect()->route('footer_links.index')->withSuccess('Deleted Successfully');
    }
}
