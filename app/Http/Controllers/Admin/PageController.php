<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Page;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class PageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pages = Page::all();
        return view('admin.pages.index',compact('pages'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();
        return view('admin.pages.create',compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->image->store('pages', 'public');
        $page = new Page([
            "title" => $request->get('title'),
            "slug" =>Str::slug($request->title),
            "body" => $request->get('body'),
            "date" =>$request->get('date'),
            "image" => $request->image->hashName(),
            "caption" =>$request->get('caption'),
            "category_id"=>$request->get('category_id')
        ]);
        $page->save(); // Finally, save the record.
        return redirect()->route('admin.pages.index')->with('info','Page Created') ;

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Page $page)
    {
        return view('admin.pages.show');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Page $page)
    {
        $categories = Category::all();
        return view('admin.pages.edit',compact('page','categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Page $page)
    {
        $request->image->store('pages', 'public');
        $page->title = $request->title;
        $page->slug = Str::slug($request->title);

        $page->category_id = $request->category_id;
        $page->image=$request->image->hashName();
        $page->body = $request->body;
        $page->date = $request->date;

        $page->update(); // Finally, save the record.
        return redirect()->route('admin.pages.index')->with('info','Page Updated') ;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Page $page)
    {
        $page->delete();
        return redirect()->route('admin.pages.index')->with('info','Page Deleted');
    }
}
