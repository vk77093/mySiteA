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
    public function dec1407()
    {
        $title = "Desc-1407";
        return view('dark.dec1407', compact('title'));
    }
    public function dec1413()
    {
        $title = "Desc-1413";
        return view('dark.dec1413', compact('title'));
    }
    public function dec1388()
    {
        $title = "Desc-1388";
        return view('dark.dec1388', compact('title'));
    }
    public function dec1406()
    {
        $title = "Desc-1406";
        return view('dark.dec1406', compact('title'));
    }
    public function dec1427()
    {
        $title = "Desc-1427";
        return view('dark.dec1427', compact('title'));
    }
    public function dec1440()
    {
        $title = "Desc-1440";
        return view('dark.dec1440', compact('title'));
    }
    public function dec1441()
    {
        $title = "Desc-1441";
        return view('dark.dec1441', compact('title'));
    }
    public function dec1442()
    {
        $title = "Desc-1442";
        return view('dark.dec1442', compact('title'));
    }
}
