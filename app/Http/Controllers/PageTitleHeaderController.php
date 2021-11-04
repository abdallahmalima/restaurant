<?php

namespace App\Http\Controllers;

use App\Models\PageTitle;
use App\Models\PageTitleHeader;
use Illuminate\Http\Request;

class PageTitleHeaderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('page_titles.index',[
          'page_titles'=>PageTitleHeader::paginate(3)
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
        return view('page_titles.create',[
            'page_names'=>PageTitle::all()
        ]);
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
            'title' => ['required', 'string', 'max:255'],
            'description' => ['required', 'string', 'max:255'],
            'page_title_id' => ['required', 'integer'],
        ]);
        $page=PageTitle::findOrFail($request->page_title_id);
        $page->pageTitleHeaders()->create($request->only('title','description'));

        return redirect()->route('page_titles.index')->withSuccess('Created Successfully');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\PageTitleHeader  $pageTitleHeader
     * @return \Illuminate\Http\Response
     */
    public function show(PageTitleHeader $pageTitleHeader)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\PageTitleHeader  $pageTitleHeader
     * @return \Illuminate\Http\Response
     */
    public function edit(PageTitleHeader $page_title)
    {
        return view('page_titles.edit',[
            'page_names'=>PageTitle::all(),
            'page_title'=>$page_title,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\PageTitleHeader  $pageTitleHeader
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, PageTitleHeader $page_title)
    {
        $request->validate([
            'title' => ['required', 'string', 'max:255'],
            'description' => ['required', 'string', 'max:255'],
            'page_title_id' => ['required', 'integer'],
        ]);
        $page=PageTitle::findOrFail($request->page_title_id);
        $page->pageTitleHeaders()->update($request->only('title','description'));

        return redirect()->route('page_titles.edit',$page_title)->withSuccess('Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\PageTitleHeader  $pageTitleHeader
     * @return \Illuminate\Http\Response
     */
    public function destroy(PageTitleHeader $pageTitleHeader)
    {
        //
        $pageTitleHeader->delete();

        return redirect()->route('page_titles.index')->withSuccess('Deleted Successfully');
    }
}
