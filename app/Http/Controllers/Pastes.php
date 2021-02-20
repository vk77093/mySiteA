<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Pastes extends Controller
{
    public function pastes()
    {
        $title = "Pastes";
        return view('pastes.paste', compact('title'));
    }

    public function dec3380()
    {
        $title = "3380-HAZELNUT 100% PASTE";
        return view('pastes.dec-3380', compact('title'));
    }
    public function tech3380()
    {
        $title = "Technical-specification-3380";
        return view('pastes.spec-3380', compact('title'));
    }
    public function dec6737()
    {
        $title = "6737-PISTACHIO PASTE";
        return view('pastes.dec-6737', compact('title'));
    }
    public function tech6737()
    {
        $title = "Technical-specification-6737";
        return view('pastes.spec-6737', compact('title'));
    }
}
