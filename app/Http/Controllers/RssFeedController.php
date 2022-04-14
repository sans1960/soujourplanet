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
    public function rssCaribbean(){
        $posts = Post::where('destination_id',2)->orderBy('date','ASC')->get();
        return response()->view('feed.caribbean',compact('posts'))->header('Content-Type','application/xml');
    }
    public function rssOceania(){
        $posts = Post::where('destination_id',3)->orderBy('date','ASC')->get();
        return response()->view('feed.oceania',compact('posts'))->header('Content-Type','application/xml');
    }
    public function rssSouthAsia(){
        $posts = Post::where('destination_id',4)->orderBy('date','ASC')->get();
        return response()->view('feed.southasia',compact('posts'))->header('Content-Type','application/xml');
    }
}
