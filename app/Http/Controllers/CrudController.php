<?php

namespace App\Http\Controllers;

use App\Jobs\ProssessApp;
use App\Models\Crud;
use Illuminate\Http\Request;
use PDF;

class CrudController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('cruds.index',['datas'=>Crud::paginate(3)]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       
        return view('cruds.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //validate inputs
        $request->validate([
          'title'=>'required|string|max:255',
          'description'=>'required|string|max:255'
        ]);
        //store inputs
        $data=Crud::create($request->only('title','description'));
        //redirect back to create form with success message
        return redirect()->route('cruds.create')->with('data',$data)->withSuccess('Created Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Crud $crud)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Crud $crud)
    {
        //
        $data=$crud;
       return view('cruds.edit',compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Crud $crud)
    {
     
        //validate inputs
        $request->validate([
            'title'=>'required|string|max:255',
            'description'=>'required|string|max:255'
          ]);
        //store inputs
        $data=$crud->update($request->only('title','description'));


        ProssessApp::dispatch();
        //redirect back to edit form with success message
        return redirect()->route('cruds.edit',$crud)->with('crud',$data)->withSuccess('Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Crud $crud)
    {
       $crud->delete();
       return redirect()->route('cruds.index')->with('crud',$crud)->withSuccess('Deleted Successfully');
    }
}
