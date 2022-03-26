<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Country;

class ContactController extends Controller
{
    public function viewForm($slug,$destination_id){
        $post = Post::where('slug',$slug)->get();
        $countries = Country::where('destination_id',$destination_id)->get();





        return view('forms.contact',compact('post','countries'));
    }
}
