<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Darkchocolates extends Controller
{
    public function dark(){
        $title="Dark Chocolates";
        return view ('pages.dark',compact('title'));
    }
}
