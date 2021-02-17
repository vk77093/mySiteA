<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Fillings extends Controller
{
    public function fillings(){
        $title="Fillings";
        return view('pages.filling',compact('title'));
    }
}
