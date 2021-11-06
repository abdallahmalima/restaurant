<?php

namespace App\Http\Controllers;

use App\Models\FooterDesc;
use Illuminate\Http\Request;

class FooterDescController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\FooterDesc  $footerDesc
     * @return \Illuminate\Http\Response
     */
    public function show(FooterDesc $footerDesc)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\FooterDesc  $footerDesc
     * @return \Illuminate\Http\Response
     */
    public function edit()
    {
        $footer_desc=FooterDesc::first();
        return view('footer_descs.edit',compact('footer_desc'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\FooterDesc  $footerDesc
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        //
       $data=$request->validate([
            'description' => ['required', 'string', 'max:255']
        ]);
        
        $this->firstUpdateOrCreate(FooterDesc::class,$data);

        return redirect()->route('footer_descs.edit')->withSuccess('Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\FooterDesc  $footerDesc
     * @return \Illuminate\Http\Response
     */
    public function destroy(FooterDesc $footerDesc)
    {
        //
    }
}
