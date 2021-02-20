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
public function dec1608(){
$title="desc-1608";
return view('pages.dec-1608',compact('title'));
}
public function tech1608(){
        $title = "Techincal Spec-1608";
        return view('pages.spec-1608', compact('title'));
}
public function milkChocolates(){
    $title="Milk Chocolates";
    return view('pages.milk',compact('title'));
}
    public function dec1506()
    {
        $title = "1506-MILK CHOCOLATE COUVERTURE";
        return view('pages.dec-1506', compact('title'));
    }
    public function tech1506(){
        $title="Techincal Spec-1506";
        return view('pages.spec-1506',compact('title'));
    }

public function contact(){
    $title="Contact Us";
    return view('pages.contact',compact('title'));
}
}
