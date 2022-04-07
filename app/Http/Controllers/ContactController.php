<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Country;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Notification;
use App\Mail\ContactTrip;
use App\Notifications\NewContact;
use Illuminate\Support\Facades\Storage;

class ContactController extends Controller
{
    public function viewForm($slug,$subregion_id,$country_id){
        $post = Post::where('slug',$slug)->get();
        $countries = Country::where('subregion_id',$subregion_id)->get();
        $items = Post::where('country_id',$country_id)->get();
        
        return view('forms.contact',compact('post','countries','items'));
    }
    public function sendForm(Request $request){
        $toEmail    =   $request->email;
        $data       =   array(
            "postname" => $request->postname,
            "subregion" => $request->subregion,
            "countryname" => $request->countryname,
            "code"        => $request->code,
            "trait"     =>    $request->trait,
            "name"       =>   $request->name,
            "surname"       =>   $request->surname,
            "phone"       =>   $request->phone,
            "city"       =>   $request->city,
            "state"       =>   $request->state,
            "zipcode"       =>   $request->zipcode,
            "duration"       =>   $request->duration,
            "season"       =>   $request->season,
            "travellers"       =>   $request->travellers,
            "children"       =>   $request->children,
            "triptype"       =>   $request->triptype,
            "specifications"       =>   $request->specifications,
            "countries"       =>   $request->countries,
            "message"       =>   $request->message,
        );
        $contactInfo = Storage::disk('local')->exists('data.json') ? json_decode(Storage::disk('local')->get('data.json')) : [];

        $inputData = $request->all();

        $inputData['datetime_submitted'] = date('Y-m-d H:i:s');

        array_push($contactInfo,$inputData);

        Storage::disk('local')->put('data.json', json_encode($contactInfo));

        // return $inputData;
        Mail::to($toEmail)->send(new ContactTrip($data));
        $note = "New Contact";
        Notification::route('mail', 'g.sans.real@gmail.com')
                ->notify(new NewContact($note));

        $country = Country::where('name',$data['countryname'])->get();
        return view('forms.sended',compact('country','data'));


    }
}
