@extends('includesFiles.main')
@section('mainBody')
<div id="carouselExampleControls" class="carsoule slide" data-ride="carousel"style="margin-top: 50px">
<div class="carousel-inner">
 <div class="carousel-item active">
     <img src="{{asset('assets/images/Pastes/contactUsHeader.jpg')}}" class="d-block w-100" alt="...">
    </div>
</div>
</div>
<div class="container-fluid mt-4" id="contactsParallax">
    <div class="row">
<section class="text-center contact">
    <div data-aos="zoom-in" data-aos-duration="3000">
    <div class="col-sm-8 col-md-12 mt-4">
            <h1 class="text-center mt-3">
           CONTACT US
            <div class="astrodivider">
            <div class="astrodividermask"></div><span><i>&#10038;</i></span>
        </div>
        <p class="product-desc">Need help with your order?</p>
        <p class="product-desc">Our customer service is happy to help!</p>
        </h1>

        <section class="conatctIcon mt-4">
            <h1 class="mt-4 mb-4">CONTACT US AT :</h1>
            <table>
                <tr><td><i class="fa fa-map-marker fa-3x" aria-hidden="true"><span class="nobreak ml-4">A-23/A, Focal Point Ext</span>.</i></td></tr>
                <tr><td><p class="mt-2 ml-4">Jalandhar, Punjab India 144004</p></td></tr>
<tr><td class="mt-2"><i class="fa fa-phone fa-3x" aria-hidden="true"><span class="nobreak mt-2 ml-4">91-181-50777-71</span></i></td></tr>
<tr><td class="mt-2"><i class="fa fa-envelope fa-3x" aria-hidden="true"><span class="nobreak  ml-4">info@aariafoods.com</span></i></td></tr>
<tr><td class="mt-2"><i class="fa fa-crosshairs fa-3x" aria-hidden="true"><span class="nobreak mt-2 ml-4">www.aariafoods.com</span></i></td></tr>
            </table>
        </section>
        </div>
</div>
</section>
    </div>
</div>
<div class="container pb-top">
<div class="row">
   <section class="text-center contact">
       <div data-aos="flip-left"  data-aos-easing="ease-out-cubic" data-aos-duration="3000">
           <div class="col-sm-12 col-md-12">
<h2>come or leave a note</h2>
<h3>WE ARE SOCIAL</h3>
<div class="astrodivider">
            <div class="astrodividermask"></div><span><i>&#10038;</i></span>
        </div>
        <p class="">DROP YOUR QUERY BELOW</p>
        <div class="card-body">

                        @if(Session::has('success'))
                        <div class="alert alert-success">
                            {{ Session::get('success') }}
                            @php
                                Session::forget('success');
                            @endphp
                        </div>
                        @endif
        <form href="{{route('contact-us.store')}}" method="POST" class="text-center">
            @csrf
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" name="name" id="name" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" name="email" id="email" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="phone">Contact Number</label>
                <input type="number" name="phone" id="phone" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="subject">Subject</label>
                <input type="text" name="subject" id="subject" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="message">Your Message</label>
                <textarea name="message" id="message" class="form-control" required></textarea>
            </div>
<div class="form-group">
    <button type="submit" class="btn btn-primary btn-lg">Submit</button>
</div>
        </form>
         </div>
       </div>

   </section>
</div>
</div>
<div class="container pb-top">
    <div class="col-sm-12 col-md-12 text-center">
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d212.9201308783319!2d75.57459525892354!3d31.36664724825991!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x391a5105a7f07d31%3A0x7c19f16df461ca68!2sAARIA!5e0!3m2!1sen!2sin!4v1593058568947!5m2!1sen!2sin"
width="550" height="450" frameborder="0" style="border:0;"
allowfullscreen="" aria-hidden="false" tabindex="0" class="hvr-grow"></iframe>
    </div>
</div>
@endsection
