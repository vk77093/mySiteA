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
public function whiteChocolates(){
    $title="White Chocolates";
    return view('pages.white',compact('title'));
}
public function milkChocolates(){
    $title="Milk Chocolates";
    return view('pages.milk',compact('title'));
}
public function pastes(){
    $title="Pastes";
    return view('pages.paste',compact('title'));
}
public function contact(){
    $title="Contact Us";
    return view('pages.contact',compact('title'));
}
}
