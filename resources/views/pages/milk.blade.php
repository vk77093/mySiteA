@extends('includesFiles.main')
@section('mainBody')
<div id="carouselExampleControls" class="carsoule slide" data-ride="carousel"style="margin-top: 50px">
<div class="carousel-inner">
 <div class="carousel-item active">
     <img src="{{asset('assets/images/MilkChocolates/Milk-Chocolate-Drop.jpg')}}" class="d-block w-100" alt="...">
    </div>
</div>
</div>
<div class="conatiner mt-2 mb-2">
    <section class="text-center">
        <div class="row">
            <div class="col-md-6 col-sm-6">
 <figure class="figure">
 <a href="/milk-chocolates/dec-1506"><img src="{{asset('assets/images/MilkChocolates/Milk.jpg')}}" alt="" class="figure-img img-fluid bordered hvr-float-shadow lazy" loading="lazy"></a>
 <figcaption class="figure-caption text-center">
     <p class="header-text-product">MILK CHOCOLATE COUVERTURE</p>
     <div class="astrodivider">
            <div class="astrodividermask"></div><span><i>&#10038;</i></span>
        </div>
        <div class="prodDesc">
            <p class="product-desc">Product Code - 1506</p>
        <p class="product-desc">Min. cocoa 33.00%</p>
        <p class="product-desc">Shelf life 24 months</p>
        </div>

    </figcaption>
</figure>
    </div>

                <div class="col-md-6 col-sm-6 text-center" style="margin-top: 150px">
                    <div data-aos="fade-right" data-aos-duration="3000" data-aos-easing="ease-in-sine">
                    <img src="{{asset('assets/images/MilkChocolates/milkdec.jpg')}}" class="img-fluid hvr-bounce-in img-thumbnail" alt="...">
                </div>
            </div>
        </div>
    </section>
</div>
@endsection
