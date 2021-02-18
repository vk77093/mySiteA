<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Darkchocolates extends Controller
{
    public function dark(){
        $title="Dark Chocolates";
        return view ('pages.dark',compact('title'));
    }
    public function dec1401(){
        $title="Desc-1401";
        return view('dark.dec1401',compact('title'));
    }
}
