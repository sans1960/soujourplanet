<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Page;
use App\Models\Tag;
use App\Models\Article;
use Illuminate\Support\Facades\DB;

class PageArticleController extends Controller
{
    public function allPages(){
        $tags = Tag::all();
        $pages = Page::all();
        return view('sites.pages',compact('pages','tags'));
    }
    public function pageArticles($slug){
        $tags = Tag::all();
        $pag = Page::where('slug',$slug)->get();
        return view('sites.articles',compact('pag','tags'));
    }
    public function pagesTag(Tag $tag){
        $tags = Tag::all();
       $pages = Page::where('tag_id',$tag->id)->get();
       return view('sites.tags',compact('pages','tag','tags'));


    }

}
