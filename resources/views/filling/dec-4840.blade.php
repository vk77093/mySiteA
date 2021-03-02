@extends('includesFiles.main')
@section('mainBody')
<div id="carouselExampleControls" class="carsoule slide" data-ride="carousel"style="margin-top: 50px">
<div class="carousel-inner">
 <div class="carousel-item active">
     <img src="{{asset('assets/images/Fillings/Coffee-Filling-4832Header.jpg')}}" class="d-block w-100" alt="coffee fillings header by aariafoods">
    </div>
</div>
</div>
<div class="container mt-2 mb-2">
    <div data-aos="fade-right" data-aos-offset="300" data-aos-easing="ease-in-sine">
        <div class="mr-5 ml-5 mt-4">
    <h6 class="about-us"> 4840-STRAWBERRY FILLING </h6>
</div>
    </div>
<div class="row product-top">
    <div class="col-sm-6 col-md-6 text-center product-top">
<p class="comp">Composition</p>
<span class="comp">INGREDIENTS:</span> <span class="compDesc">Vegetable Palm Oil, Sugar, Whey Powder, Lactose, Skimmed Milk Powder, Permitted Emulsifier (INS322), Contains Permitted Synthetic Food Colour (INS 120)</span><br>
<p class="compDesc">Contains Added Flavour (Nature Identical)</p>
<span class="compDesc">Contains Allergen</span><span class="compDesc">Milk Solids</span> <br>
<span class="comp ml-2">Allergen Warning : </span>
<span class="compDesc">Contains Milk & Soy Lecithin, May Contains Traces of  other Nuts.</span><br>
                   <span class="comp">*The Product Doesn’t Contain Gluten*</span>
                   <section class="mt-3">
                      <a href="/fillings/dec-4840/technical-specification-4840"><button class="btn btn-myInfo btn-lg">Click For technical specs..</button></a>
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
      <td class="compDesc">612.00</td>
  </tr>
  <tr>
      <td class="compDesc">Total Fat (g)</td>
       <td class="compDesc">44.00</td>
  </tr>
  <tr>
      <td class="compDesc">Saturated Fat (g)</td>
       <td class="compDesc">44.00</td>
  </tr>
  <tr>
      <td class="compDesc">Carbohydrates (g)</td>
       <td class="compDesc">46.00</td>
  </tr>
  <tr>
      <td class="compDesc">Sugar (g)</td>
       <td class="compDesc">44.00</td>
  </tr>
  <tr>
      <td class="compDesc">Protein (g)</td>
       <td class="compDesc">7.00</td>
  </tr>
  <tr>
      <td class="compDesc">Dietary Fiber (g)</td>
       <td class="compDesc">2.00</td>
  </tr>
  <tr>
      <td class="compDesc">Sodium (mg)</td>
       <td class="compDesc">94.00</td>
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
    <div class="img hvr-float-shadow"><a href="/fillings/dec-4841"><img src="{{asset('assets/images/Fillings/caramel-fillingBot.jpg')}}" class="img-fluid center-block lazy" loading="lazy" alt="caramel fillings"></a></div>
    <p class="text-center recip mt-2">RECIPE NO° 4841</p>
</div>
<div class="col-sm-4">
<div class="img hvr-float-shadow"><a href="/fillings/dec-4847"><img src="{{asset('assets/images/Fillings/Chocomint-fillinh-Bot.jpg')}}" class="img-fluid center-block lazy" loading="lazy" alt="choco mint fillings"></a></div>
<p class="text-center recip mt-2">RECIPE NO° 4847</p>
</div>
<div class="col-sm-4">
    <div class="img hvr-float-shadow"><a href="/fillings/dec-4854"><img src="{{asset('assets/images/Fillings/Rose-filling-bot.jpg')}}" class="img-fluid center-block lazy" loading="lazy" alt="rose fillings"></a></div>
    <p class="text-center recip mt-2">RECIPE NO° 4854</p>
</div>
    </div>
</div>
</div>
@endsection
