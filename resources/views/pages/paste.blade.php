@extends('includesFiles.main')
@section('mainBody')
<div id="carouselExampleControls" class="carsoule slide" data-ride="carousel"style="margin-top: 50px">
<div class="carousel-inner">
 <div class="carousel-item active">
     <img src="{{asset('assets/images/Pastes/NutsHeader.jpg')}}" class="d-block w-100" alt="...">
    </div>
</div>
</div>
<div class="container pb-top">
    <section class="text-center">
        <div class="row">
            <div class="col-sm-6 col-md-6">
<img class="img-fluid" src="{{asset('assets/images/Pastes/paste-2.jpg')}}" alt="">
            </div>
            <div class="col-sm-6 col-md-6" style="margin-top: 200px">
<figure class="figure">
 <figcaption class="figure-caption text-center">
     <p class="header-text-product mt-4"> HAZELNUT 100% PASTE </p>
     <div class="astrodivider">
            <div class="astrodividermask"></div><span><i>&#10038;</i></span>
        </div>
        <div class="prodDesc">
            <p class="product-desc">Product Code - 3380</p>
        <p class="product-desc">Shelf life 18 months</p>
        <p class="product-desc">Net Weight - 1kg</p>
        </div>

    </figcaption>
</figure>
            </div>
        </div>
    </section>
</div>
<div class="container">
    <section class="text-center">
        <div class="row">
            <div class="col-sm-6 col-md-6" style="margin-top: 200px">
                <figure class="figure">
 <figcaption class="figure-caption text-center">
     <p class="header-text-product mt-4"> PISTACHIO PASTE </p>
     <div class="astrodivider">
            <div class="astrodividermask"></div><span><i>&#10038;</i></span>
        </div>
        <div class="prodDesc">
            <p class="product-desc">Product Code - 6737</p>
        <p class="product-desc">Shelf life 18 months</p>
        <p class="product-desc">Net Weight - 1kg</p>
        </div>

    </figcaption>
</figure>

            </div>
            <div class="col-sm-6 col-md-6">
<img class="img-fluid" src="{{asset('assets/images/Pastes/paste-1.jpg')}}" alt="">
            </div>
        </div>
    </section>
</div>
@endsection
