@extends('includesFiles.main')
@section('mainBody')
 <div id="carouselExampleControls" class="carsoule slide" data-ride="carousel"style="margin-top: 50px">
<div class="carousel-inner">
 <div class="carousel-item active">
     <img src="{{asset('assets/images/DarkChocolates/dark.jpg')}}" class="d-block w-100" alt="dark chocolate header for aarifoods">
    </div>
</div>
</div>
<div class="container mt-3 w-80">
    <div data-aos="fade-right" data-aos-duration="3000" data-aos-easing="ease-in-sine">
<div class="text-center mr-5 ml-5 mt-3">
    <h6 class="about-us">TECHNICAL SPECIFICATION FOR DC-1407</h6>
</div>
</div>
<div class="row">
    <div class="col-sm-12 col-md-12 mt-2">
<p class="comp">General Description</p>
<div data-aos="flip-up">
    <table class="table tableCol mt-2 text-center">
<tr>
    <td class="compDesc">Product Code</td>
    <td class="compDesc">1407</td>
</tr>
<tr>
    <td class="compDesc">Product Name</td>
    <td class="compDesc">Dark Chocolate Couverture</td>
</tr>
<tr>
    <td class="compDesc">Category</td>
    <td class="compDesc">Dark Chocolate</td>
</tr>
<tr>
    <td class="compDesc">HSN Code</td>
    <td class="compDesc">18069039</td>
</tr>
<tr>
    <td class="compDesc">Country of Origin</td>
    <td class="compDesc">Italy</td>
</tr>
</table>
</div>
<div data-aos="flip-down">
    <p class="comp">Composition</p>
    <table class="table tableCol mt-2 text-center">
<tr>
    <td class="compDesc">Ingredients</td>
    <td class="compDesc">Cocoa Mass, Sugar, Cocoa Butter, Emulsifier (INS322). <br>
Contains Added Natural Flavour (Vanilla Extract)</td>
</tr>
<tr>
    <td class="compDesc">Allergen</td>
    <td class="compDesc">Soy Lecithin, Milk Solids and May Contain Traces of Nuts <br>
*The Product Doesn’t Contain Gluten.</td>
</tr>
    </table>
</div>
<div data-aos="flip-right">
    <p class="comp">Physical Characteristics</p>
    <table class="table tableCol mt-2 text-center">
<tr>
    <td class="compDesc">Colour</td>
    <td class="compDesc">Dark brown, typical of dark chocolate</td>
</tr>
<tr>
    <td class="compDesc">Odour</td>
    <td class="compDesc">Typical of dark chocolate</td>
</tr>
<tr>
    <td class="compDesc">Flavour</td>
    <td class="compDesc">Typical of dark chocolate</td>
</tr>
<tr>
    <td class="compDesc">Appearance</td>
    <td class="compDesc">Compact, in drops or pods</td>
</tr>
<tr>
    <td class="compDesc">Fineness</td>
    <td class="compDesc">Approx. 18-22 mm</td>
</tr>
    </table>
</div>

<div data-aos="flip-left">
    <p class="comp">Chemical Characteristics</p>
    <table class="table tableCol mt-2 text-center">
<tr>
    <td class="compDesc">Cocoa content</td>
    <td class="compDesc">Min 60%</td>
</tr>
<tr>
    <td class="compDesc">Fat content</td>
    <td class="compDesc">Min 36%</td>
</tr>
<tr>
    <td class="compDesc">Water content</td>
    <td class="compDesc">Max 2%</td>
</tr>
<tr>
    <td class="compDesc">Melting temperature</td>
    <td class="compDesc">45°C – 50°C</td>
</tr>
<tr>
    <td class="compDesc">Cooling temperature</td>
    <td class="compDesc">29°C – 31°C</td>
</tr>
<tr>
    <td class="compDesc">Tempering temperature</td>
    <td class="compDesc">31C – 33°C</td>
</tr>
<tr>
    <td class="compDesc">Working temperature</td>
    <td class="compDesc">29.5°C – 31.5°C</td>
</tr>

    </table>
</div>
<div data-aos="zoom-in">
    <p class="comp">Microbiological Characteristics</p>
    <table class="table tableCol mt-2 text-center">
        <tr>
            <td class="compDesc">Total bacteria count</td>
            <td class="compDesc">< 10.000 cfu/g</td>
        </tr>
        <tr>
            <td class="compDesc">Yeasts</td>
            <td class="compDesc">< 100 cfu/g</td>
        </tr>
        <tr>
            <td class="compDesc">Moulds</td>
            <td class="compDesc">< 100 cfu/g</td>
        </tr>
        <tr>
            <td class="compDesc">Enterobacteria</td>
            <td class="compDesc">< 100 cfu/ g</td>
        </tr>
        <tr>
            <td class="compDesc">Salmonella spp</td>
            <td class="compDesc">Absent / 25g</td>
        </tr>
        <tr>
            <td class="compDesc">E.Coli</td>
            <td class="compDesc">< 10 cfu/g</td>
        </tr>
        <tr>
            <td class="compDesc">S.aureus</td>
            <td class="compDesc">< 10 cfu/g</td>
        </tr>
        <tr>
            <td class="compDesc">Total Coliforms</td>
            <td class="compDesc">< 100 cfu /g</td>
        </tr>
    </table>
</div>

<div data-aos="zoom-in-up">
<p class="comp">Nutritional information per 100 g</p>
    <table class="table tableCol mt-2 text-center">
        <tr>
            <td class="compDesc">Energy</td>
            <td class="compDesc">549.00 Kcal</td>
        </tr>
        <tr>
            <td class="compDesc">Proteins</td>
            <td class="compDesc">6.40 g</td>
        </tr>
        <tr>
            <td class="compDesc">Carbohydrates</td>
            <td class="compDesc">42.70 g</td>
        </tr>
        <tr>
            <td class="compDesc">Sugar</td>
            <td class="compDesc">40.00 g</td>
        </tr>
        <tr>
            <td class="compDesc">Saturated fatty acids</td>
            <td class="compDesc">23.40 g</td>
        </tr>
        <tr>
            <td class="compDesc">Fat</td>
            <td class="compDesc">37.40 g</td>
        </tr>
        <tr>
            <td class="compDesc">Fiber</td>
            <td class="compDesc">8.00 g</td>
        </tr>
        <tr>
            <td class="compDesc">Sodium*</td>
            <td class="compDesc">4.00 mg</td>
        </tr>
    </table>
    <p class="nuts">(The nutritional characteristics are indicative and subject to changes)</p>
</div>
    </div>

    <div class="col-sm-12 col-md-12 mt-2">
<p class="comp">Storage Conditions</p>
<p class="compDesc">Keep the product in cool and dry place in temperature within (14-20ºC) and Humidity < 60%. Store away from sunlight and strong odours.</p>
<p class="comp">Shelf Life</p>
<p class="compDesc">24 months from the date of packaging.</p>
<p class="comp">Safety Data Sheet</p>
<p class="compDesc">Product not dangerous in normal conditions of use.</p>
<p class="comp">Packaging</p>
<p class="compDesc">Packed in plastic primary packaging conforming to the food contract.</p>
    </div>

    <div class="col-sm-12 col-md-12 mt-2">
<div data-aos="zoom-in-left">
    <table class="table tableCol mt-2 text-center">
<tr>
    <td class="comp">The product complies with the following standard National and Community.</td>
</tr>
<tr>
    <td class="nuts">Decree 12/06/2003 n. 178- Implementation of Dir. 2000/36 / EC relating to cocoa and chocolate products intended for human consumption.</td>
</tr>
<tr>
    <td class="nuts">Reg. EC 1881/2006 On maximum levels for certain contaminants in food stuffs</td>
</tr>
<tr>
    <td class="nuts">Reg. EC 1829/2003 on genetically modified food and feed.</td>
</tr>
<tr>
    <td class="comp">Produced in a plant that operates in compliance with the following national and EU legislation.</td>
</tr>
<tr>
    <td class="nuts">Reg. EC 852/2004 on the hygiene of alimentary products.</td>
</tr>
<tr>
    <td class="nuts">Reg. EC 178/2002 On general principles and requirements of food law.</td>
</tr>
</table>
</div>
    </div>
</div>
</div>
@endsection
