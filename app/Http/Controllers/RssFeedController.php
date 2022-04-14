<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class RssFeedController extends Controller
{
    public function rssEurope(){
        $posts = Post::where('destination_id',1)->orderBy('date','ASC')->get();
        return response()->view('feed.europe',compact('posts'))->header('Content-Type','application/xml');
    }
}
