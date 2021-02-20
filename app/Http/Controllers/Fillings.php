<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Fillings extends Controller
{
    public function fillings(){
        $title="Fillings";
        return view('filling.filling',compact('title'));
    }
    public function dec4832()
    {
        $title = "4832-COFFEE FILLING";
        return view('filling.dec-4832', compact('title'));
    }
        public function tech4832(){
        $title= "TECHNICAL SPECIFICATION FOR-4832 COFFEE FILLING";
        return view('filling.spec.spec-4832',compact('title'));
        }
    public function dec4836()
    {
        $title = "4836-HAZELNUT 20% FILLING";
        return view('filling.dec-4836', compact('title'));
    }
    public function tech4836()
    {
        $title = "TECHNICAL SPECIFICATION FOR-4836-HAZELNUT 20% FILLING";
        return view('filling.spec.spec-4836', compact('title'));
    }
    public function dec4839()
    {
        $title = "4839-STRAWBERRY YOGURT FILLING";
        return view('filling.dec-4839', compact('title'));
    }
    public function tech4839()
    {
        $title = "TECHNICAL SPECIFICATION FOR-4839-STRAWBERRY YOGURT FILLING";
        return view('filling.spec.spec-4839', compact('title'));
    }
    public function dec4840()
    {
        $title = "4840-STRAWBERRY FILLING";
        return view('filling.dec-4840', compact('title'));
    }
    public function tech4840()
    {
        $title = "TECHNICAL SPECIFICATION FOR-4840-STRAWBERRY FILLING";
        return view('filling.spec.spec-4840', compact('title'));
    }
    public function dec4841()
    {
        $title = "4841-CARAMEL FILLING";
        return view('filling.dec-4841', compact('title'));
    }
    public function tech4841()
    {
        $title = "TECHNICAL SPECIFICATION FOR-4841-CARAMEL FILLING";
        return view('filling.spec.spec-4841', compact('title'));
    }
    public function dec4847()
    {
        $title = "4847-CHOCO-MINT FILLING";
        return view('filling.dec-4847', compact('title'));
    }
    public function tech4847()
    {
        $title = "TECHNICAL SPECIFICATION FOR-4847-CHOCO-MINT FILLING";
        return view('filling.spec.spec-4847', compact('title'));
    }
    public function dec4854()
    {
        $title = "4854-ROSE FILLING";
        return view('filling.dec-4854', compact('title'));
    }
    public function tech4854()
    {
        $title = "TECHNICAL SPECIFICATION FOR-4854-ROSE FILLING";
        return view('filling.spec.spec-4854', compact('title'));
    }
    public function dec4856()
    {
        $title = "4856-SAFFRON FILLING";
        return view('filling.dec-4856', compact('title'));
    }
    public function tech4856()
    {
        $title = "TECHNICAL SPECIFICATION FOR-4856-SAFFRON FILLING";
        return view('filling.spec.spec-4856', compact('title'));
    }
    public function dec4858()
    {
        $title = "4858-NUT CIOCK";
        return view('filling.dec-4858', compact('title'));
    }
    public function tech4858()
    {
        $title = "TECHNICAL SPECIFICATION FOR-4858-NUT CIOCK";
        return view('filling.spec.spec-4858', compact('title'));
    }
    public function dec4862()
    {
        $title = "4862-CARDAMOM FILLING";
        return view('filling.dec-4862', compact('title'));
    }
    public function tech4862()
    {
        $title = "TECHNICAL SPECIFICATION FOR-4862-CARDAMOM FILLING";
        return view('filling.spec.spec-4862', compact('title'));
    }
    public function dec4864()
    {
        $title = "4832-COFFEE FILLING";
        return view('filling.dec-4864', compact('title'));
    }
    public function tech4864()
    {
        $title = "TECHNICAL SPECIFICATION FOR-4832 COFFEE FILLING";
        return view('filling.spec.spec-4864', compact('title'));
    }
}
