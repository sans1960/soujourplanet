<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Country;

class ContactController extends Controller
{
    public function viewForm($slug,$subregion_id){
        $post = Post::where('slug',$slug)->get();
        $countries = Country::where('subregion_id',$subregion_id)->get();





        return view('forms.contact',compact('post','countries'));
    }
    public function sendForm(Request $request){
        dd($request->all());
    }
}
