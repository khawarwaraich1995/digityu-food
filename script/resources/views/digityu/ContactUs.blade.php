@extends('layouts.digityu.app')
@section('title','Contact Us')
@section('content')
<!-- header area start -->
@include('layouts.digityu.partials.header')
<!-- header area end -->
<section class="digityu-contact" style="background-image: url({{ asset(config('constants.DIGITYU_IMAGES_PATH').'bg12.svg') }});">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <h1>Feel free to contact us to learn more.</h1>
                <div class="mt-5 pb-3 d-flex align-items-center">
                    <span class="btn btn-contact">
                        <img src="{{ asset(config('constants.DIGITYU_IMAGES_PATH').'icon43.svg') }}" alt="" srcset="">
                    </span>
                    <div class="ms-3 contact-num">
                        <h4 class="mb-1 contact-num">Contact us</h4>
                        <span>+92 306 6425006</span>
                    </div>
                </div>
                <div class="mt-2 pb-3 d-flex align-items-center">
                    <span class="btn btn-contact-email">
                        <img src="{{ asset(config('constants.DIGITYU_IMAGES_PATH').'iconoutlineglobe.svg') }}" alt="" srcset="">
                    </span>
                    <div class="ms-3 contact-num">
                        <h4 class="mb-1 contact-num">Email</h4>
                        <span>info@digityu.com</span>
                    </div>
                </div>
                <h6>“We are always ready to help you with any mortgage issue. We
                    provide the only loan you need at low interest rates. You can
                    safely make a mortgage agreement with us.”
                </h6>
                <div class="mt-2 pb-3 d-flex align-items-center">
                    <span class="btn btn-contact-image">
                        <img src="{{ asset(config('constants.DIGITYU_IMAGES_PATH').'ellipse-14@2x.png') }}" width="50px" height="50px" alt="" srcset="">
                    </span>
                    <div class="ms-3 contact-title">
                        <h4 class="mb-1 contact-title fw-bold">Jenny Wilson</h4>
                        <span>Director @Company</span>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="digityu-form">
                    <div class="card">
                        <div class="card-body">
                            <h5>Contact With Us</h5>
                            <form action="" class="p-2 mt-5">
                                <div class="row">
                                    <div class="col-lg-6 form-group">
                                        <label for="" class="mb-2 contact-form-lable">Name*</label>
                                        <input type="text" name="" id="" class="form-control contact-form-input mb-3">
                                    </div>
                                    <div class="col-lg-6 form-group">
                                        <label for="" class="contact-form-lable mb-2">Number*</label>
                                        <input type="text" name="" id="" class="form-control contact-form-input mb-3">
                                    </div>
                                    <div class="col-lg-6 form-group">
                                        <label for="" class="contact-form-lable mb-2">Email*</label>
                                        <input type="text" name="" id="" class="form-control contact-form-input mb-3">
                                    </div>
                                    <div class="col-lg-6 form-group">
                                        <label for="" class="contact-form-lable mb-2">Subject*</label>
                                        <input type="text" name="" id="" class="form-control contact-form-input mb-3">
                                    </div>
                                    <div class="col-lg-12 form-group">
                                        <label for="" class="contact-form-lable mb-2">Your Message*</label>
                                        <textarea class="form-control contact-form-input" rows="3"></textarea>
                                    </div>
                                    <div class="col-lg-12 form-group mt-4">
                                        <button class="contact-form-btn">Send Message</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="digityu-map mt-3">
    <div style="width: 100%"><iframe width="100%" height="600" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?width=100%25&amp;height=600&amp;hl=en&amp;q=1%20Grafton%20Street,%20Dublin,%20Ireland+(My%20Business%20Name)&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"><a href="https://www.maps.ie/distance-area-calculator.html">measure area map</a></iframe></div>
</section>
<!-- footer area start -->
@include('layouts.digityu.partials.footer')
<!-- footer area end -->
@endsection