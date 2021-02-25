<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contacts;
use Illuminate\Support\Facades\Mail;

class Webpage extends Controller
{
    public function aboutUs(){
        $title="About Us";
        $title_content= " A joint venture that brought together the expertise of Crea and the passion of Foodcoast International was thus, ‘a marriage made in heaven’ – giving birth to the Aaria – Premium line of chocolates.";
        $descriptionTag= "Aaria is all about delightful chocolate experiences. We combine a strong cultural heritage with fearless creativity and bold innovations to offer wonderful tastes and memorable moments of joy.
        A pioneer in the Indian Premium Contemporary Chocolate Industry, Aaria is committed to craft the richest, most flavourful chocolates. Aaria was started by entrepreneur, foodie & chocolate connoisseur Sushant Sharma";
        $keywords= "Aariafoods, aaria,aariafoods chocolate associate with Crea chocolates, Top Exportor of Premium Quality of Chocolates associate with Crea Brands, aaria the brand of premium chocolates and pastes,Best Chocolates brand in India, Chocolates company near me, premium chocolates manufacture in india, exportor of chocolates brands in India,
     white chocolates, dark chocolate, fillings and paste manufacture and exportor from real coca beans";
        return view('pages.about',compact('title','title_content','descriptionTag','keywords'));
    }
    public function ourProcess(){
        $title="Our Process";
        $title_content= "Our complete process of making coca-beans to chocolates";
        $descriptionTag= "At Aaria, our quest to make truly amazing chocolate is driven by passion – the passion to inspire greater appreciation among customers for the taste of premium crafted chocolates. This passion, in turn, is manifested in the desire to exercise the kind of influence over our chocolate as is enjoyed by a wine maker or artisan baker, thereby driving us to go through the more complex and painstaking bean-to-chocolate process.";
        $keywords= "chocolate process ,The production of chocolate, how the chocolate is made, cocoa beans to chocolate, premium chocolates, fillings and pastes,
        chocolate manufacturing process, How is chocolate made step by step ,What are the ingredients used in making chocolate, chocolate manufacturing companies in india";
        return view('pages.ourProcess', compact('title', 'title_content', 'descriptionTag', 'keywords'));
    }
public function whiteChocolates(){
    $title="White Chocolates";
    $title_content= "WHITE CHOCOLATE COUVERTURE WITH CREAM";
    $descriptionTag="At aariafoods we provide the best in class white chocolates because White chocolate is a chocolate confection, pale ivory in color, made from cocoa butter, sugar, milk solids and sometimes vanilla. ... It is solid at room temperature 25 °C (77 °F) because the melting point of cocoa butter,
    the only cocoa bean component of white chocolate";
    $keywords= "aaria, aariafoods, white chocolate brands ,the best white chocolate, white chocolate brands in india, affordable white chocolates from aariafoods";

    return view('pages.white', compact('title', 'title_content', 'descriptionTag', 'keywords'));
}
public function dec1608(){
$title="desc-1608";
$title_content= "WHITE CHOCOLATE COUVERTURE WITH CREAM";
$descriptionTag= "At aariafoods we provide the best in class white chocolates because White chocolate is a chocolate confection,
pale ivory in color, made from cocoa butter, sugar, milk solids and sometimes vanilla. ...
It is solid at room temperature 25 °C (77 °F) because the melting point of cocoa butter,
    the only cocoa bean component of white chocolate, WHITE CHOCOLATE AND MANGO MINT GANACHE";
        $keywords = "aaria, aariafoods, white chocolate brands ,the best white chocolate,
        white chocolate brands in india, affordable white chocolates from aariafoods, WHITE CHOCOLATE AND MANGO MINT GANACHE";
return view('pages.dec-1608', compact('title', 'title_content', 'descriptionTag', 'keywords'));
}
public function tech1608(){
        $title = "Techincal Spec-1608";
        $title_content= "Complete technical specification for aaria white chcoclates";
        $descriptionTag= "ee the Complete Technical specification for our premium aariafoods white-chocolates,
        here you will find the ingredients and their details of our white chcoclates";
        $keywords = "aaria, aariafoods, white chocolate brands ,the best white chocolate, white chocolate brands in india, affordable white chocolates from aariafoods";
        return view('pages.spec-1608', compact('title', 'title_content', 'descriptionTag', 'keywords'));
}
public function milkChocolates(){
    $title="Milk Chocolates";
    $title_content= "MILK CHOCOLATE COUVERTURE";
    $descriptionTag= "A perfect blend of rich cocoa with aaria milk chocolate it made with finest ingredients and finest cocoa beans, Milk chocolate is a solid chocolate confectionery containing cocoa, sugar and milk.";
    $keywords= "aaria, aariafoods, milk chocolate brands ,the best milk chocolate, chocolate for cake making, aaria the pure and premimum milk chocolate brands";
    return view('pages.milk', compact('title', 'title_content', 'descriptionTag', 'keywords'));
}
    public function dec1506()
    {
        $title = "1506-MILK CHOCOLATE COUVERTURE";
        $title_content= "MILK CHOCOLATE COUVERTURE";
        $descriptionTag= "Finest Italian chocolate,A perfect blend of rich cocoa with aaria milk chocolate";
        $keywords= "Milk chocolate reciep, MILK CHOCOLATE MOUSSE, Aaria Milk Chocolate, milk chocolate brands ,the best milk chocolate, chocolate for cake making, aaria the pure and premimum milk chocolate brands ";

        return view('pages.dec-1506', compact('title', 'title_content', 'descriptionTag', 'keywords'));
    }
    public function tech1506(){
        $title="Techincal Spec-1506";
        $title_content="Complete technical specification for aaria milk chcoclates";
        $descriptionTag="see the Complete Technical specification for our premium aariafoods milk-chocolates,
        here you will find the ingredients and their details of our milk chcoclates";
        $keywords = "Milk chocolate reciep, MILK CHOCOLATE MOUSSE, Aaria Milk Chocolate, milk chocolate brands ,the best milk chocolate, chocolate for cake making, aaria the pure and premimum milk chocolate brands ";
        return view('pages.spec-1506', compact('title', 'title_content', 'descriptionTag', 'keywords'));
    }

public function contact(){
    $title="Contact Us";
    $title_content="Contact us for become bussiness";
    $descriptionTag= "Contact Us. A-23/A, Focal Point Ext., Jalandhar – 144004, Punjab, India. mail: info@aariafoods.com. Phone: +91-181-50777-71/72. Exquisite & Exclusive.";
        $keywords = "Aariafoods, aaria, contact page for aaria, how to connect with aaria foods, aaria the brand of premium chocolates and pastes,Best Chocolates brand in India, Chocolates company near me, premium chocolates manufacture in india, exportor of chocolates brands in India,
     white chocolates, dark chocolate, fillings and paste manufacture and exportor from real coca beans";

    return view('pages.contact', compact('title', 'title_content', 'descriptionTag', 'keywords'));
}
public function saveContact(Request $request){
       $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'phone' => 'required|digits:10|numeric',
            'subject' => 'required',
            'message' => 'required',
        ]);

        $input = $request->all();

        Contacts::create($input);

        //  Send mail to admin
        Mail::send('pages.contactMail', array(
            'name' => $input['name'],
            'email' => $input['email'],
            'phone' => $input['phone'],
            'subject' => $input['subject'],
            'message' => $input['message'],
        ), function($message) use ($request){
            $message->from($request->email);
            $message->to('info@aariafoods.com', 'Aaria Web page')->subject($request->get('subject'));
        });

        return redirect()->back()->with(['success' => 'Thank you for submitting the detail, we got
         your details and shortly we will going to contact with you.']);
    }
}
