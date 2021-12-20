<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LaravelTutsController extends Controller
{

    public function start(){

        // echo "<h1>hello world</h1>";

        return view("start",[
            "name" => "chiazam udekwe",
            "email" => "jochalazacub@gmail.com"
        ]);

    }

}
