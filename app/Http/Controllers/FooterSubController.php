<?php

namespace App\Http\Controllers;

use App\Models\FooterSub;
use Illuminate\Http\Request;

class FooterSubController extends Controller
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
     * @param  \App\Models\FooterSub  $footerSub
     * @return \Illuminate\Http\Response
     */
    public function show(FooterSub $footerSub)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\FooterSub  $footerSub
     * @return \Illuminate\Http\Response
     */
    public function edit()
    {
        $footer_sub=FooterSub::first();
        return view('footer_subs.edit',compact('footer_sub'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\FooterSub  $footerSub
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        //
        $request->validate([
            'description' => ['required', 'string', 'max:255']
        ]);
        $footer_sub=FooterSub::first();
        if($footer_sub){
            $footer_sub->update(['description'=>$request->input('description')]);
        }else{
            FooterSub::create(['description'=>$request->input('description')]);
        }

        return redirect()->route('footer_subs.edit')->withSuccess('Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\FooterSub  $footerSub
     * @return \Illuminate\Http\Response
     */
    public function destroy(FooterSub $footerSub)
    {
        //
    }
}
