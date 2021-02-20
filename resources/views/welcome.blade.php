@extends('includesFiles.main')
@section('mainBody')
<!-- For demo purpose -->
<div id="carouselExampleControls" class="carousel slide" data-ride="carousel" style="margin-top: 50px">
  <div class="carousel-inner">
    <div class="carousel-item active">
     <img src="{{asset('assets/images/FirstPage/cocoHeaderCarsolse.jpg')}}" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="{{asset('assets/images/FirstPage/CarsolehandImage.jpg')}}" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="{{asset('assets/images/FirstPage/CarsoleSpoonIamge.jpg')}}" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="{{asset('assets/images/FirstPage/pasteImage.jpg')}}" class="d-block w-100" alt="...">
    </div>
  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
<!-- End -->
<div class="container" style="margin-top: 50px">
    <section>
<blockquote class="blockquote">
  <p class="mb-0 quote text-center">“Chocolate knows no boundaries; speaks all languages; comes in all sizes; is woven through many cultures and disciplines… <br>

It impacts mood, health and economics and it is a part of our lives from early childhood through elderly years.”

 </p>
  <p class="blockquote-footer font-weight-bold footText" style="text-align: right;">Herman A. Berliner</p>
</blockquote>
</section>
</div>
<div class="container">
    <section class="quick-ref">
<div class="row text-center">
    <div class="col-sm-3 mt-2">
        <figure class="figure">
 <a href=""><img src="{{asset('assets/images/FirstPage/DCIOCN.jpg')}}" class="figure-img img-fluid rounded" alt=""></a>
  <a href="" class="links"><h4 class="text-center mt-2 mb-2 header-text-product">
      DARK CHOCOLATE
  </h4></a>
  <figcaption class="figure-caption text-center compDesc">An exquisite selection of luxuriously rich Dark & Single Origin chocolates</figcaption>
</figure>
    </div>
    <div class="col-sm-3 mt-2">
        <figure class="figure">
 <a href=""><img src="{{asset('assets/images/FirstPage/mcicon.jpg')}}" class="figure-img img-fluid rounded" alt=""></a>
  <a href="" class="links"><h4 class="text-center mt-2 mb-2 header-text-product">
     MILK CHOCOLATE
  </h4></a>
  <figcaption class="figure-caption text-center compDesc">Rich & mellow Milk chocolate with the sweet indulgence of buttery cocoa</figcaption>
</figure>
    </div>
    <div class="col-sm-3 mt-2">
        <figure class="figure">
 <a href=""><img src="{{asset('assets/images/FirstPage/wcicon.jpg')}}" class="figure-img img-fluid rounded" alt=""></a>
  <a href="" class="links"><h4 class="text-center mt-2 mb-2 header-text-product">
      WHITE CHOCOLATE
  </h4></a>
  <figcaption class="figure-caption text-center compDesc">Luxuriously silky White chocolate with subtle notes of natural vanilla</figcaption>
</figure>
    </div>
    <div class="col-sm-3 mt-2">
       <figure class="figure">
 <a href=""><img src="{{asset('assets/images/FirstPage/fillings.jpg')}}" class="figure-img img-fluid rounded" alt=""></a>
  <a href="" class="links"><h4 class="text-center mt-2 mb-2 header-text-product">
     FILLINGS & PASTES
  </h4></a>
  <figcaption class="figure-caption text-center compDesc">Bold, yet smooth textured Fillings & Pastes, seamlessly fused with exotic flavours</figcaption>
</figure>
    </div>
</div>
    </section>
</div>
<!--- Video ----->
<div class="contain">
   <video autoplay muted loop id="myVideo" >
  <source src="{{asset('assets/images/FirstPage/VideoPlay.mp4')}}" type="video/mp4">
</video>
</div>
<!--End of Video---->
<!--Some Recipe Section---->
<div class="container-fluid" id="parallax">
<div class="row">
    <div class="col-sm-6 mt-4 ml-4">
        <h4 class="text-center mt-3 recHead">
            MILK CHOCOLATE MOUSSE
            <div class="astrodivider">
            <div class="astrodividermask"></div><span><i>&#10038;</i></span>
        </div>
        </h4>
        <div data-aos="fade-up-right">
<table class="table table-bordered mt-4 text-center compstd">
    <thead>
        <th class="compst">S.No.</th>
        <th class="compst">INGREDIENTS</th>
        <th class="compst">QUANTITY</th>
    </thead>
    <tbody>
        <tr>
            <td>1</td>
            <td>Aaria Milk Chocolate</td>
            <td>1000 g</td>
        </tr>
        <tr>
            <td>2</td>
            <td>Full fat crème 35%</td>
            <td>500 g</td>
        </tr>
        <tr>
            <td>3</td>
            <td>Date Paste</td>
            <td>250 g</td>
        </tr>
        <tr>
            <td>4</td>
            <td>Salted Butter</td>
            <td>200 g</td>
        </tr>
        <tr>
            <td>4</td>
            <td>Liquid Glucose</td>
            <td>75 g</td>
        </tr>
    </tbody>
</table>
</div>
<div class="text-center mt-4 mb-4">
    <a href="/milk-chocolates/dec-1506"><button class="btn btn-myInfo btn-lg" style="background-color:#d2ae6d ">SEE MORE</button></a>
</div>
    </div>
    <div class="col-sm-6">

    </div>
</div>
</div>
<!--second Recipe---->
<div class="container-fluid" id="parallaxSec">
    <div class="d-flex justify-content-end">
    <div class="col-sm-6 mt-4 ml-4">
        <h4 class="text-center mt-3 recHead mb-2">
            DECADENT CHOCONUT   ROULADE
            <div class="astrodivider">
            <div class="astrodividermask"></div><span><i>&#10038;</i></span>
        </div>
        </h4>
      <div data-aos="flip-up">
<table class="table table-bordered mt-4 text-center compstds">
    <thead>
        <th class="compst">S.No.</th>
        <th class="compst">INGREDIENTS</th>
        <th class="compst">QUANTITY</th>
    </thead>
    <tbody>
        <tr>
            <td>1</td>
            <td>All-purpose flour</td>
            <td>500 g</td>
        </tr>
        <tr>
            <td>2</td>
            <td>Aaria Hazelnut 100% Paste</td>
            <td>200 g</td>
        </tr>
        <tr>
            <td>3</td>
            <td>Combination of chopped nuts & raisins</td>
            <td>200 g</td>
        </tr>
        <tr>
            <td>4</td>
            <td>Choco-eclair cream</td>
            <td>100 g</td>
        </tr>
        <tr>
            <td>4</td>
            <td>Butter</td>
            <td>50 g</td>
        </tr>
    </tbody>
</table>
</div>
<div class="text-center mt-4 mb-4">
    <a href="/dark-chocolates/dec-1407"><button class="btn btn-myInfo btn-lg" style="background-color:#451c1c ">SEE MORE</button></a>
</div>
    </div>
    </div>
</div>
<!--end of second--->
<!--End of Recipe Section--->
<div class="container-fluid">

<div class="row no-gutters">
    <div class="col-sm-4 col-md-4 mt-2">
<img src="{{asset('assets/images/FirstPage/DCcarsoule1.jpg')}}" class="img-fluid hvr-shrink">
    </div>
    <div class="col-sm-4 col-md-4 mt-2">
<img src="{{asset('assets/images/FirstPage/Milkcarsoule2.jpg')}}" class="img-fluid hvr-shrink">
    </div>
    <div class="col-sm-4 col-md-4 mt-2">
<img src="{{asset('assets/images/FirstPage/whiteCarsoule3.jpg')}}" class="img-fluid hvr-shrink">
    </div>
</div>

</div>
<div class="container mt-4 mb-4 text-center">
   <img src="{{asset('assets/images/FirstPage/Header-Slogennew.jpg')}}" class="img-fluid">
</div>
<!--Customer Logo---->
<div class="container-fluid mt-4 mb-4">
 <div class="text-center mr-5 ml-5">
    <h6 class="text-bold about-us">OUR CERTIFICATIONS</h6>
</div>
   <section class="customer-logos slider">
      <div class="slide"><img src="{{asset('assets/images/FirstPage/koshar_Upadte.png')}}" class="hvr-grow"></div>
      <div class="slide"><img src="{{asset('assets/images/FirstPage/KosharJ.png')}}" class="hvr-grow"></div>
      <div class="slide"><img src="{{asset('assets/images/FirstPage/natureicon.png')}}" class="hvr-grow"></div>
      <div class="slide"><img src="{{asset('assets/images/FirstPage/utzicon.png')}}" class="hvr-grow"></div>
      <div class="slide"><img src="{{asset('assets/images/FirstPage/ifsicon.png')}}" class="hvr-grow"></div>
      <div class="slide"><img src="{{asset('assets/images/FirstPage/hallaItaliaicon.png')}}" class="hvr-grow"></div>
      <div class="slide"><img src="{{asset('assets/images/FirstPage/fairTradeicon.png')}}" class="hvr-grow"></div>
      <div class="slide"><img src="{{asset('assets/images/FirstPage/brcicon.png')}}" class="hvr-grow"></div>
      <div class="slide"><img src="{{asset('assets/images/FirstPage/koshar_Upadte.png')}}" class="hvr-grow"></div>
   </section>
</div>
<!--end of Customer Logo----->
@endsection
