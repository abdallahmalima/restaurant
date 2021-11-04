<?php

namespace App\Http\Controllers;

use App\Models\FooterContact;
use Illuminate\Http\Request;

class FooterContactController extends Controller
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
     * @param  \App\Models\FooterContact  $footerContact
     * @return \Illuminate\Http\Response
     */
    public function show(FooterContact $footerContact)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\FooterContact  $footerContact
     * @return \Illuminate\Http\Response
     */
    public function edit()
    {
        $footer_contact=FooterContact::first();
        return view('footer_contacts.edit',compact('footer_contact'));
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
      $datas= $request->validate([
            'address' => ['required', 'string', 'max:255'],
            'phone1' => ['required', 'string', 'max:255'],
            'phone2' => ['required', 'string', 'max:255'],
            'email1' => ['required', 'string', 'max:255'],
            'email2' => ['required', 'string', 'max:255'],
        ]);
        $footer_contact=FooterContact::first();
        if($footer_contact){
            $footer_contact->update($datas);
        }else{
            FooterContact::create($datas);
        }

        return redirect()->route('footer_contacts.edit')->withSuccess('Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\FooterContact  $footerContact
     * @return \Illuminate\Http\Response
     */
    public function destroy(FooterContact $footerContact)
    {
        //
    }
}
