@extends('includesFiles.main')
@section('mainBody')
<div id="carouselExampleControls" class="carsoule slide" data-ride="carousel"style="margin-top: 50px">
<div class="carousel-inner">
 <div class="carousel-item active">
     <img src="{{asset('assets/images/Fillings/RoseFilling4854.jpg')}}" class="d-block w-100" alt="rose fillings by aariafoods">
    </div>
</div>
</div>
<div class="container mt-2 mb-2">
    <div data-aos="fade-right" data-aos-offset="300" data-aos-easing="ease-in-sine">
        <div class="mr-5 ml-5 mt-4">
    <h6 class="about-us"> 4854-ROSE FILLING </h6>
</div>
    </div>
<div class="row product-top">
    <div class="col-sm-6 col-md-6 text-center product-top">
<p class="comp">Composition</p>
<span class="comp">INGREDIENTS:</span> <span class="compDesc">Vegetable Palm Oil, Sugar, Whey Powder, Lactose, Skimmed MilkPowder, Permitted Emulsifier (INS322)</span><br>
<p class="compDesc">Contains Permitted Synthetic Food Color (INS129) & Added Flavour (Nature -Identical)</p>
<span class="compDesc">Contains Allergen</span><span class="compDesc">Milk Solids</span> <br>
<span class="comp ml-2">Allergen Warning : </span>
<span class="compDesc">Contains Milk & Soy Lecithin, May Contains Traces of  other Nuts.</span><br>
                   <span class="comp">*The Product Doesn’t Contain Gluten*</span>
                   <section class="mt-3">
                      <a href="/fillings/dec-4854/technical-specification-4854"><button class="btn btn-myInfo btn-lg">Click For technical specs..</button></a>
                   </section>
    </div>
    <div class="col-sm-6 col-md-6 text-center mb-1 mt-1">
<table class="table tableCol">
<tr>
    <td colspan="2" class="comp">NUTRITIONAL  INFORMATION</td>
  </tr>
  <tr>
    <td colspan="2" class="comp">Average Quantity Per 100g*</td>
  </tr>
  <tr>
      <td class="compDesc">Energy (kcal)</td>
      <td class="compDesc">597.00</td>
  </tr>
  <tr>
      <td class="compDesc">Total Fat (g)</td>
       <td class="compDesc">38.00</td>
  </tr>
  <tr>
      <td class="compDesc">Saturated Fat (g)</td>
       <td class="compDesc">22.00</td>
  </tr>
  <tr>
      <td class="compDesc">Carbohydrates (g)</td>
       <td class="compDesc">54.00</td>
  </tr>
  <tr>
      <td class="compDesc">Sugar (g)</td>
       <td class="compDesc">54.00</td>
  </tr>
  <tr>
      <td class="compDesc">Protein (g)</td>
       <td class="compDesc">5.00</td>
  </tr>
  <tr>
      <td class="compDesc">Dietary Fiber (g)</td>
       <td class="compDesc">3.90</td>
  </tr>
  <tr>
      <td class="compDesc">Sodium (mg)</td>
       <td class="compDesc">122.00</td>
  </tr>
  <tr>
      <td class="compDesc">Cholesterol (mg)</td>
       <td class="compDesc">2.00</td>
  </tr>
</table>
    </div>
</div>
</div>

<div class="container mt-2">
<div data-aos="fade-right" data-aos-duration="3000" data-aos-easing="ease-in-sine">
<div class="text-center mr-5 ml-5">
    <h6 class="about-us">EXPLORE OUR RANGE</h6>
</div>
</div>
<div class="container w-50 mt-5">
    <div class="row justify-content-md-center">
<div class="col-sm-4">
    <div class="img hvr-float-shadow"><a href="/fillings/dec-4856"><img src="{{asset('assets/images/Fillings/saffron-filling-Bot.jpg')}}" class="img-fluid center-block lazy" loading="lazy" alt="saffron fillings"></a></div>
    <p class="text-center recip mt-2">RECIPE NO° 4856</p>
</div>
<div class="col-sm-4">
<div class="img hvr-float-shadow"><a href="/fillings/dec-4858"><img src="{{asset('assets/images/Fillings/Nut-ciock-bot.jpg')}}" class="img-fluid center-block lazy" loading="lazy" alt="nut ciock fillings"></a></div>
<p class="text-center recip mt-2">RECIPE NO° 4858</p>
</div>
<div class="col-sm-4">
    <div class="img hvr-float-shadow"><a href="/fillings/dec-4862"><img src="{{asset('assets/images/Fillings/cardamom-Bot.jpg')}}" class="img-fluid center-block lazy" loading="lazy" alt="cardamom fillings"></a></div>
    <p class="text-center recip mt-2">RECIPE NO° 4862</p>
</div>
    </div>
</div>
</div>
@endsection
