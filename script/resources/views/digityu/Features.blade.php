@extends('layouts.digityu.app')
@section('title','Features')
@section('content')
<!-- header area start -->
@include('layouts.digityu.partials.header')
<!-- header area end -->
<section class="digityu-features-heading">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h6>130+ Handcoded Blocks</h6>
                    <h2>Mixland helps you build beautiful website</h2>
                </div>
            </div>
        </div>
    </section>

    <section class="digityu-customer">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <img src="{{ asset(config('constants.DIGITYU_IMAGES_PATH').'image.png') }}" width="100%" alt="">
                </div>

                <div class="col-lg-6">
                    <h2>Customers can easily receive new updatess</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipis elit. Sit enim nec, proin faucibus nibh et sagittis a. Lacinia purus ac amet pellentesque aliquam enim.</p>

                    <button class="digityu-customer-btn">Get our 14 days free trial</button>
                </div>
            </div>
        </div>
    </section>


    <section class="digityu-customer-chart">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <h2>Increase your sales via email marketing</h2>

                    <div class="mt-3 pb-3 d-flex align-items-center">
                        <span class="btn btn-customer-chart">
                            <img src="{{ asset(config('constants.DIGITYU_IMAGES_PATH').'icon6.svg') }}" alt="" srcset="">
                        </span>
                        <div class="customer-chart ms-4">
                            <h4 class="customer-chart fw-bold mb-2">Simply Copy & Paste</h4>
                            <span class="text-muted">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Tincidunt elementum feugiat interdum tortor, porttitor morbi sed facilisis</span>
                        </div>
                    </div>

                    <div class="mt-3 pb-3 d-flex align-items-center">
                        <span class="btn btn-customer-chart">
                            <img src="{{ asset(config('constants.DIGITYU_IMAGES_PATH').'icon7.svg') }}" alt="" srcset="">
                        </span>
                        <div class="customer-chart ms-4">
                            <h4 class="customer-chart fw-bold mb-2">Easy to Customize</h4>
                            <span class="text-muted">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Tincidunt elementum feugiat interdum tortor, porttitor morbi sed facilisis</span>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <img src="{{ asset(config('constants.DIGITYU_IMAGES_PATH').'image1.png') }}" class="digityu-chart-img" alt="">
                </div>
            </div>
        </div>
    </section>

    <section class="digityu-customer">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <img src="{{ asset(config('constants.DIGITYU_IMAGES_PATH').'image.png') }}" width="100%" alt="">
                </div>

                <div class="col-lg-6">
                    <h2>Customers can easily receive new updatess</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipis elit. Sit enim nec, proin faucibus nibh et sagittis a. Lacinia purus ac amet pellentesque aliquam enim.</p>

                    <button class="digityu-customer-btn">Get our 14 days free trial</button>
                </div>
            </div>
        </div>
    </section>

    <section class="digityu-customer-chart">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <h2>Increase your sales via email marketing</h2>

                    <div class="mt-3 pb-3 d-flex align-items-center">
                        <span class="btn btn-customer-chart">
                            <img src="{{ asset(config('constants.DIGITYU_IMAGES_PATH').'icon6.svg') }}" alt="" srcset="">
                        </span>
                        <div class="customer-chart ms-4">
                            <h4 class="customer-chart fw-bold mb-2">Simply Copy & Paste</h4>
                            <span class="text-muted">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Tincidunt elementum feugiat interdum tortor, porttitor morbi sed facilisis</span>
                        </div>
                    </div>

                    <div class="mt-3 pb-3 d-flex align-items-center">
                        <span class="btn btn-customer-chart">
                            <img src="{{ asset(config('constants.DIGITYU_IMAGES_PATH').'icon7.svg') }}" alt="" srcset="">
                        </span>
                        <div class="customer-chart ms-4">
                            <h4 class="customer-chart fw-bold mb-2">Easy to Customize</h4>
                            <span class="text-muted">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Tincidunt elementum feugiat interdum tortor, porttitor morbi sed facilisis</span>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <img src="{{ asset(config('constants.DIGITYU_IMAGES_PATH').'image1.png') }}" class="digityu-chart-img" alt="">
                </div>
            </div>
        </div>
    </section>
<!-- footer area start -->
@include('layouts.digityu.partials.footer')
<!-- footer area end -->
@endsection