<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Webpage extends Controller
{
    public function aboutUs(){
        $title="About Us";
        return view('pages.about',compact('title'));
    }
    public function ourProcess(){
        $title="Our Process";
        return view('pages.ourProcess',compact('title'));
    }
}
