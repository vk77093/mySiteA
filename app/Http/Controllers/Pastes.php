<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Pastes extends Controller
{
    public function pastes()
    {
        $title = "Pastes";
        $title_content= "aariafoods range of Paste, paste are available in variety of flavours just so you can pick your favourite";
        $descriptionTag= "Get your hands on the amazing flavouring aariafoods paste to add more deliciousness then ever The flavours are also concentrated so a little goes a long way";
        $keywords= "aaria, aria , aariafoods paste, pure paste,paste for ice cream, redaymade paste, chocolate paste, ready to use paste, healthy foods products, paste manufacture
        and exportor in india";
        return view('pastes.paste', compact('title', 'title_content', 'descriptionTag', 'keywords'));
    }

    public function dec3380()
    {
        $title = "3380-HAZELNUT 100% PASTE";
        $title_content= "aariafoods HAZELNUT 100% pure PASTE";
        $descriptionTag= "100% fresh hazelnuts gently roasted to release their exceptional flavour. With nothing but natural sweetness, this subtly, gold tinted paste is ideal for your pastry and confectionery creations.";
        $keywords = "aaria, aria ,HAZELNUT 100% PASTE, pure hazelnuts paste, aariafoods paste, pure paste, redaymade paste, chocolate paste, ready to use paste, healthy foods products, paste manufacture
        and exportor in india";
        return view('pastes.dec-3380', compact('title', 'title_content', 'descriptionTag', 'keywords'));
    }
    public function tech3380()
    {
        $title = "Technical-specification-3380";
        $title_content = "Deatil technical specification for aaria hazelnuts paste";
        $descriptionTag = "selects the finest hazelnuts from orchards in Spain, Italy and Turkey. Picked when they're fully sunripe, the hazelnuts are stored under the best conditions –
        away from light, temperature changes or air for max. 12 months.";
        $keywords = "aaria, aria ,HAZELNUT 100% PASTE, pure hazelnuts paste,
        hazelnuts ingredients, aariafoods paste, pure paste, redaymade paste, chocolate paste, ready to use paste, healthy foods products, paste manufacture
        and exportor in india";
        return view('pastes.spec-3380', compact('title', 'title_content', 'descriptionTag', 'keywords'));
    }
    public function dec6737()
    {
        $title = "6737-PISTACHIO PASTE";
        $title_content = "aariafoods pure pistachio paste";
        $descriptionTag = "If you're wondering what Pistachio paste tastes like when it mixed with
        your dish, rest assured that it's sweet and creamy like pistachio should be,
        with subtle hints of savory nuttiness from the pistachios";
        $keywords = "aaria, aria ,pistachio PASTE,pistachio paste for ice cream, pure pistachio paste,
        pistachio ingredients, aariafoods paste, pure paste, redaymade paste, chocolate paste, ready to use paste, healthy foods products, paste manufacture
        and exportor in india";
        return view('pastes.dec-6737', compact('title', 'title_content', 'descriptionTag', 'keywords'));
    }
    public function tech6737()
    {
        $title = "Technical-specification-6737";
        $title_content = "Deatil technical specification for aaria pistachio paste";
        $descriptionTag = "If you're wondering what Pistachio paste tastes like when it mixed with
        your dish, rest assured that it's sweet and creamy like pistachio should be,
        with subtle hints of savory nuttiness from the pistachios";
        $keywords = "aaria, aria ,pistachio PASTE, pure pistachio paste,
        pistachio ingredients, aariafoods paste, pure paste, redaymade paste, chocolate paste, ready to use paste, healthy foods products, paste manufacture
        and exportor in india";
        return view('pastes.spec-6737', compact('title', 'title_content', 'descriptionTag', 'keywords'));
    }
}
