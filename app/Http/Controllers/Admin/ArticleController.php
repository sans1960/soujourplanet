<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Page;
use Illuminate\Support\Str;
use App\Models\Article;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $articles = Article::paginate(10);

        return view('admin.articles.index',compact('articles'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $pages = Page::all();
        return view('admin.articles.create',compact('pages'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

            $request->image->store('articles', 'public');
            $article = new Article([
                "title" => $request->get('title'),
                "slug" =>Str::slug($request->title),
                "body" => $request->get('body'),
                "caption" =>$request->get('caption'),
                "image" => $request->image->hashName(),
                "page_id"=>$request->get('page_id')
            ]);
            $article->save(); // Finally, save the record.
            return redirect()->route('admin.articles.index')->with('info','Article Created') ;

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Article $article)
    {
        return view('admin.articles.show');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Article $article)
    {
        $pages = Page::all();
        return view('admin.articles.edit',compact('article','pages'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Article $article)
    {
        $request->image->store('articles', 'public');
        $article->title = $request->title;
        $article->slug = Str::slug($request->title);

        $article->page_id = $request->page_id;
        $article->image=$request->image->hashName();
        $article->body = $request->body;
        $article->caption = $request->caption;

        $article->update(); // Finally, save the record.
        return redirect()->route('admin.articles.index')->with('info','Article Updated') ;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Article $article)
    {
        $article->delete();
        return redirect()->route('admin.articles.index')->with('info','Article Deleted');


    }
}
