<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DataContactsController extends Controller
{
    public function index(){
        $contacts = json_decode(file_get_contents(storage_path() . "/app/data.json"), true);
        echo "<pre>";
        print_r($contacts);
    }


}
