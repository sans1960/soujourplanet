<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Page;
use App\Models\Article;

class PageArticleController extends Controller
{
    public function index(){
        $pages = Page::all();
        return view('pages.index',compact('pages'));
    }
    public function pageArticles( $slug){

        $pag = Page::where('slug',$slug)->get();
        return view('pages.articles',compact('pag'));


    }
}
