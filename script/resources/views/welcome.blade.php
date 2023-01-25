@extends('layouts.digityu.app')

@section('title','HomePage')

@section('content')
<!-- header area start -->
@include('layouts.digityu.partials.header')
<!-- header area end -->

<section class="main-header">
    <div class="digityu-bg-main">
        <div class="bg-div">
            <div class="rectangle-div"></div>
            <img src="{{ asset(config('constants.DIGITYU_IMAGES_PATH').'ellipse-19.svg') }}" class="ellipse-icon" alt="">
                <img src="{{ asset(config('constants.DIGITYU_IMAGES_PATH').'ellipse-20.svg') }}" class="ellipse-icon" alt="">
                <img src="{{ asset(config('constants.DIGITYU_IMAGES_PATH').'ellipse-21.svg') }}" class="ellipse-icon1" alt="">

                <div class=" digityu-main">
                    <div class="row">
                        <div class="col-lg-6 col-md-12">
                            <h1>Start your online</h1>
                            <h1>store today!</h1>
                            <p>Lorem ipsum is a placeholder text commonly</p>
                            <p class="p1">Lorem ipsum is a placeholder text</p>
                            <button class="start-your-online-store">Start your online store</button>
                        </div>

                        <div class="col-lg-6 col-md-12 cart-block">
                            <div class="row">
                                <div class="col-lg-6 col-md-6 ">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="digityu-main-div1 d-flex mt-3">
                                                <div class="digityu-main-div1-style">
                                                    <i class="fa fa-chevron-left"></i>
                                                </div>
                                                <h5>My Cart</h5>
                                            </div>

                                            <div class="digityu-main-div2 p-2 mt-3">
                                                <div class="d-flex">
                                                    <div class="digityu-main-div2-style">
                                                        <img src="{{ asset(config('constants.DIGITYU_IMAGES_PATH').'rectangle-4617@2x.png') }}" width="35px" height="50px" alt="">
        </div>
        <h6 class="mx-2">1Nike Men’s JoyrideRun Flyknit shoes</h6>
    </div>
    </div>
    <div class="digityu-main-div3 d-flex mt-3 p-2">
        <h6>Offers</h6>
        <h6 class="ms-auto">Add Code</h6>
    </div>

    <div class="digityu-main-div3 mt-2 p-2">
        <h6>Order Summary</h6>
        <div class="d-flex">
            <h6>Order</h6>
            <h6 class="ms-auto">$681</h6>
        </div>
        <div class="d-flex">
            <h6>Delivery</h6>
            <h6 class="ms-auto">$6</h6>
        </div>
        <div class="d-flex">
            <h6>Total</h6>
            <h6 class="ms-auto">$687</h6>
        </div>
    </div>

    <div class="digityu-main-div3 d-flex mt-3 p-2">
        <h6>Address</h6>
        <h6 class="ms-auto">TD53, Kaya...</h6>
    </div>
    <div class="mt-4">
        <button class="btn-check-out">Check Out</button>
    </div>
    </div>
    </div>
    </div>
    <div class="col-lg-6 col-md-6 mt-5">
        <div class="card mt-5">
            <div class="card-body">
                <div class="digityu-main-div5 d-flex mt-3">
                    <div class="digityu-main-div5-style">
                        <i class="fa fa-chevron-left"></i>
                    </div>
                    <h5>Payment Methods</h5>
                </div>
                <div class="digityu-main-div3 d-flex mt-3 p-2">
                    <h6>Payment</h6>
                    <h6 class="ms-auto"> <i class="fa fa-chevron-right"></i></h6>
                </div>

                <div class="digityu-main-div3 d-flex mt-3 p-2">
                    <h6>Debit Cards</h6>
                    <h6 class="ms-auto"><i class="fa fa-chevron-right"></i></h6>
                </div>

                <div class="digityu-main-div3 mt-3 p-2">
                    <div class="d-flex">
                        <h6>Debit Cards</h6><span class="ms-auto"><i class="fa fa-chevron-down"></i></span>
                    </div>
                    <hr class="text-muted">
                    <div class="digityu-main-div3 d-flex p-2">
                        <img src="{{ asset(config('constants.DIGITYU_IMAGES_PATH').'rectangle-9@2x.png') }}" width="25px" alt="">
                        <h6 class="mx-1">Axis Bank xxxx68</h6>
                        <h6 class="ms-auto"><i class="fa fa-circle text-dark"></i></h6>
                    </div>
                    <div class="digityu-main-div3 d-flex p-2 mt-2">
                        <img src="{{ asset(config('constants.DIGITYU_IMAGES_PATH').'rectangle-9@2x.png') }}" width="25px" alt="">
                        <h6 class="mx-1">VYX Bank xxxx54</h6>
                        <h6 class="ms-auto"><i class="fa fa-circle text-muted"></i></h6>
                    </div>
                </div>
                <div class="mt-4">
                    <button class="btn-check-out">Pay Now</button>
                </div>
            </div>
        </div>
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>

    </div>
</section>

<section class="digityu-project">
    <div class="container">
        <div class="row">
            <div class="col-lg-5">
                <h2>Get detailed time and data for every project</h2>
                <p>App landing pages are web pages designed to promote your mobile application & drive downloads.
                    With Sark your leads will land to get more information about your app and to download it.</p>
                <hr>
                <div class="d-flex digityu-project-demo">
                    <h1>2.4x</h1>
                    <span class="mx-3 mt-2">Mobile apps convert 3.5x higher than mobile websites</span>
                </div>
                <button class="digityu-project-btn" type="button">Explore Now</button>
            </div>

            <div class="col-lg-7">
                <img src="{{ asset(config('constants.DIGITYU_IMAGES_PATH').'Image5].png') }}" width="100%" alt="">
            </div>
        </div>
    </div>
</section>

<section class="digityu-home-chart">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h6>130+ Handcoded Blocks</h6>
                <h2>Mixland helps you build beautiful website</h2>
            </div>
            <div class="col-lg-4 mt-5">
                <div class="demo-shadows">
                    <div class="crad-body">
                        <div class="pb-3 d-flex align-items-center">
                            <span class="btn btn-home-chart">
                                <img src="{{ asset(config('constants.DIGITYU_IMAGES_PATH').'icon20.svg') }}" alt="" width="50px" srcset="">
                            </span>
                            <div class="home-chart-one ms-4">
                                <h4 class="home-chart-one fw-bold mb-2">Simply Copy & Paste</h4>
                                <span class="text-muted">Many desktop publishing packages and web page editors now
                                    use for them.</span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="demo-shadows mt-3">
                    <div class="crad-body">
                        <div class="pb-3 d-flex align-items-center">
                            <span class="btn btn-home-chart">
                                <img src="{{ asset(config('constants.DIGITYU_IMAGES_PATH').'icon21.svg') }}" alt="" width="50px" srcset="">
                            </span>
                            <div class="home-chart-one ms-4">
                                <h4 class="home-chart-one fw-bold mb-2">Simply Copy & Paste</h4>
                                <span class="text-muted">Many desktop publishing packages and web page editors now
                                    use for them.</span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="demo-shadows mt-3">
                    <div class="crad-body">
                        <div class="pb-3 d-flex align-items-center">
                            <span class="btn btn-home-chart">
                                <img src="{{ asset(config('constants.DIGITYU_IMAGES_PATH').'icon22.svg') }}" alt="" width="50px" srcset="">
                            </span>
                            <div class="home-chart-one ms-4">
                                <h4 class="home-chart-one fw-bold mb-2">Simply Copy & Paste</h4>
                                <span class="text-muted">Many desktop publishing packages and web page editors now
                                    use for them.</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-8">
                <img src="{{ asset(config('constants.DIGITYU_IMAGES_PATH').'Image7.png') }}" width="100%" alt="">
            </div>
        </div>
    </div>
</section>

<section class="digityu-standard-process">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h2>We always follow the standard work process</h2>
                <p>We solve clients' projects in a simple & efficient way</p>
            </div>

            <div class="col-lg-12">
                <div class="row">
                    <div class="col-lg-12 col-md-12 mt-4 mb-4">

                        <div class="digityu-standard-process-design">
                            <div class="digit-circles">
                                <b>1</b>
                            </div>
                            <h6 class="mt-2">Research</h6>
                            <h6>We do research before we start any projects</h6>
                        </div>
                        <div class="digityu-standard-process-design">

                            <img src="{{ asset(config('constants.DIGITYU_IMAGES_PATH').'vector-32.svg') }}" width="145px" class="digram-800 digityu-none" alt="">
                        </div>
                        <div class="digityu-standard-process-design">
                            <div class="digit-circles">
                                <b>1</b>
                            </div>

                            <h6 class="mt-2">Research</h6>
                            <h6>We do research before we start any projects</h6>
                        </div>
                        <div class="digityu-standard-process-design">

                            <img src="{{ asset(config('constants.DIGITYU_IMAGES_PATH').'vector-33.svg') }}" width="145px" class="digram-800 digityu-none" alt="">
                        </div>
                        <div class="digityu-standard-process-design">
                            <div class="digit-circles">
                                <b>1</b>
                            </div>
                            <h6 class="mt-2">Research</h6>
                            <h6>We do research before we start any projects</h6>
                        </div>
                        <div class="digityu-standard-process-design">

                            <img src="{{ asset(config('constants.DIGITYU_IMAGES_PATH').'vector-32.svg') }}" width="145px" class="digram-800 digityu-none" alt="">
                        </div>
                        <div class="digityu-standard-process-design">
                            <div class="digit-circles">
                                <b>1</b>
                            </div>
                            <h6 class="mt-2">Research</h6>
                            <h6>We do research before we start any projects</h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="digityu-three-images">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h1>Be Inspired. Start today!</h1>
                <h2>Checkout the top performing stores built with webx Ecomerce</h2>
            </div>
            <div class="col-lg-3 mt-5">
                <img src="{{ asset(config('constants.DIGITYU_IMAGES_PATH').'3629 1.png') }}" alt="" width="100%">
            </div>

            <div class="col-lg-3 mt-5">
                <img src="{{ asset(config('constants.DIGITYU_IMAGES_PATH').'3639733 1.png') }}" alt="" width="100%">
            </div>

            <div class="col-lg-3 mt-5">
                <img src="{{ asset(config('constants.DIGITYU_IMAGES_PATH').'3591916 1.png') }}" alt="" width="100%">
            </div>

            <div class="col-lg-3 mt-5">
                <img src="{{ asset(config('constants.DIGITYU_IMAGES_PATH').'3629 1.png') }}" alt="" width="100%">
            </div>
        </div>
    </div>
</section>

<section class="digityu-price-plans">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h2>We offer great price plans for the application</h2>
                <p>Objectively market-driven intellectual capital rather than covalent best practices facilitate
                    strategic information before innovation.</p>
            </div>
            <div class="row digityu-plans-margin">
                <div class="col-lg-3 col-md-6">
                    <div class="card digityu-plans-card">
                        <div class="card-body">
                            <h6>Starter Plan</h6>
                            <div class="d-flex">
                                <h1>$5</h1>
                                <span class="digityu-plans-style">/Per Month</span>
                            </div>
                            <p>This package is suitable for teams 1-15 people</p>
                            <hr class="mt-4">
                            <div class="digityu-plans-shedule">
                                <img src="{{ asset(config('constants.DIGITYU_IMAGES_PATH').'icon23.svg') }}" width="17px" alt="">
                                <span class="mx-1">10 GB Disk Space</span>
                            </div>

                            <div class="digityu-plans-shedule">
                                <img src="{{ asset(config('constants.DIGITYU_IMAGES_PATH').'icon23.svg') }}" width="17px" alt="">
                                <span class="mx-1">1 Year Support</span>
                            </div>

                            <div class="digityu-plans-shedule">
                                <img src="{{ asset(config('constants.DIGITYU_IMAGES_PATH').'icon23.svg') }}" width="17px" alt="">
                                <span class="mx-1">500 Queries</span>
                            </div>

                            <div class="digityu-plans-shedule">
                                <img src="{{ asset(config('constants.DIGITYU_IMAGES_PATH').'icon23.svg') }}" width="17px" alt="">
                                <span class="mx-1">Basic Statistics</span>
                            </div>

                            <div class="digityu-plans-shedule">
                                <img src="{{ asset(config('constants.DIGITYU_IMAGES_PATH').'icon23.svg') }}" width="17px" alt="">
                                <span class="mx-1">Free Custom Domain</span>
                            </div>

                            <div class="text-center">
                                <button class="digityu-plans-btn">Purchase Now</button>
                            </div>

                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="card digityu-plans-card">
                        <div class="card-body">
                            <h6>Basic Plan</h6>
                            <div class="d-flex">
                                <h1>$20</h1>
                                <span class="digityu-plans-style">/Per Month</span>
                            </div>
                            <p>This package is suitable for teams 1-15 people</p>
                            <hr class="mt-4">
                            <div class="digityu-plans-shedule">
                                <img src="{{ asset(config('constants.DIGITYU_IMAGES_PATH').'icon23.svg') }}" width="17px" alt="">
                                <span class="mx-1">500 GB Disk Space</span>
                            </div>

                            <div class="digityu-plans-shedule">
                                <img src="{{ asset(config('constants.DIGITYU_IMAGES_PATH').'icon23.svg') }}" width="17px" alt="">
                                <span class="mx-1">5 Year Support</span>
                            </div>

                            <div class="digityu-plans-shedule">
                                <img src="{{ asset(config('constants.DIGITYU_IMAGES_PATH').'icon23.svg') }}" width="17px" alt="">
                                <span class="mx-1">600 Queries</span>
                            </div>

                            <div class="digityu-plans-shedule">
                                <img src="{{ asset(config('constants.DIGITYU_IMAGES_PATH').'icon23.svg') }}" width="17px" alt="">
                                <span class="mx-1">Basic Statistics</span>
                            </div>

                            <div class="digityu-plans-shedule">
                                <img src="{{ asset(config('constants.DIGITYU_IMAGES_PATH').'icon23.svg') }}" width="17px" alt="">
                                <span class="mx-1">Free Custom Domain</span>
                            </div>

                            <div class="text-center">
                                <button class="digityu-plans-btn">Purchase Now</button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="card digityu-plans-card">
                        <div class="card-body">
                            <h6>Popular Plan</h6>
                            <div class="d-flex">
                                <h1>$46</h1>
                                <span class="digityu-plans-style">/Per Month</span>
                            </div>
                            <p>This package is suitable for teams 1-15 people</p>
                            <hr class="mt-4">
                            <div class="digityu-plans-shedule">
                                <img src="{{ asset(config('constants.DIGITYU_IMAGES_PATH').'icon23.svg') }}" width="17px" alt="">
                                <span class="mx-1">800 GB Disk Space</span>
                            </div>

                            <div class="digityu-plans-shedule">
                                <img src="{{ asset(config('constants.DIGITYU_IMAGES_PATH').'icon23.svg') }}" width="17px" alt="">
                                <span class="mx-1">10 Year Support</span>
                            </div>

                            <div class="digityu-plans-shedule">
                                <img src="{{ asset(config('constants.DIGITYU_IMAGES_PATH').'icon23.svg') }}" width="17px" alt="">
                                <span class="mx-1">800 Queries</span>
                            </div>

                            <div class="digityu-plans-shedule">
                                <img src="{{ asset(config('constants.DIGITYU_IMAGES_PATH').'icon23.svg') }}" width="17px" alt="">
                                <span class="mx-1">Fully Statistics</span>
                            </div>

                            <div class="digityu-plans-shedule">
                                <img src="{{ asset(config('constants.DIGITYU_IMAGES_PATH').'icon23.svg') }}" width="17px" alt="">
                                <span class="mx-1">Free Custom Domain</span>
                            </div>

                            <div class="text-center">
                                <button class="digityu-plans-btn">Purchase Now</button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="card digityu-plans-card">
                        <div class="card-body">
                            <h6>Premium Plan</h6>
                            <div class="d-flex">
                                <h1>$90</h1>
                                <span class="digityu-plans-style">/Per Month</span>
                            </div>
                            <p>This package is suitable for teams 1-15 people</p>
                            <hr class="mt-4">
                            <div class="digityu-plans-shedule">
                                <img src="{{ asset(config('constants.DIGITYU_IMAGES_PATH').'icon23.svg') }}" width="17px" alt="">
                                <span class="mx-1">1000 GB Disk Space</span>
                            </div>

                            <div class="digityu-plans-shedule">
                                <img src="{{ asset(config('constants.DIGITYU_IMAGES_PATH').'icon23.svg') }}" width="17px" alt="">
                                <span class="mx-1">Unlimited Support</span>
                            </div>

                            <div class="digityu-plans-shedule">
                                <img src="{{ asset(config('constants.DIGITYU_IMAGES_PATH').'icon23.svg') }}" width="17px" alt="">
                                <span class="mx-1">Unlimited Queries</span>
                            </div>

                            <div class="digityu-plans-shedule">
                                <img src="{{ asset(config('constants.DIGITYU_IMAGES_PATH').'icon23.svg') }}" width="17px" alt="">
                                <span class="mx-1">Fully Statistics</span>
                            </div>

                            <div class="digityu-plans-shedule">
                                <img src="{{ asset(config('constants.DIGITYU_IMAGES_PATH').'icon23.svg') }}" width="17px" alt="">
                                <span class="mx-1">Free Custom Domain</span>
                            </div>

                            <div class="text-center">
                                <button class="digityu-plans-btn">Purchase Now</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="digityu-clints">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h2>What our satisfied clients say about Sark</h2>
                <p>Landing is a network of fully furnished apartments across the whole country, so no matter where
                    you land, it'll always feel like home.</p>
            </div>

            <div class="col-lg-12">
                <div class="owl-carousel featured-carousel owl-theme mt-4">
                    <div class="item">
                        <div class="card rounded p-3">
                            <img src="{{ asset(config('constants.DIGITYU_IMAGES_PATH').'favourite31.svg') }}" class="digityu-clint-images mt-4" alt="">
                            <div class="card-body">
                                <h5>“I’m enjoying it!! I like working for Landing. I’ve been cleaning for a while so
                                    the work is easy and straightforward imo. I really don’t have any issues with
                                    SARK.</h5>

                                <div class="pb-3 d-flex align-items-center">
                                    <span class="btn btn-home-chart">
                                        <img src="{{ asset(config('constants.DIGITYU_IMAGES_PATH').'oval@2x.png') }}" alt="" class="clints-images">
                                    </span>
                                    <div class="home-chart-one ms-4">
                                        <h4 class="home-chart-one fw-bold mb-2">Leslie Alexander</h4>
                                        <span class="text-muted">Founder</span>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>

                    <div class="item">
                        <div class="card rounded p-3">
                            <img src="{{ asset(config('constants.DIGITYU_IMAGES_PATH').'favourite31.svg') }}" class="digityu-clint-images mt-4" alt="">
                            <div class="card-body">
                                <h5>“Great flexibility! I really like the flexibility of the Apps. The higher the
                                    ratings we have the better chance. It’s a good work environment they answer in a
                                    timely.”</h5>

                                <div class="pb-3 d-flex align-items-center">
                                    <span class="btn btn-home-chart">
                                        <img src="{{ asset(config('constants.DIGITYU_IMAGES_PATH').'oval1@2x.png') }}" alt="" class="clints-images">
                                    </span>
                                    <div class="home-chart-one ms-4">
                                        <h4 class="home-chart-one fw-bold mb-2">Leslie Alexander</h4>
                                        <span class="text-muted">Founder</span>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>

                    <div class="item">
                        <div class="card rounded p-3">
                            <img src="{{ asset(config('constants.DIGITYU_IMAGES_PATH').'favourite31.svg') }}" class="digityu-clint-images mt-4" alt="">
                            <div class="card-body">
                                <h5>I love SARK. The market is slow in some locations and booming in the big
                                    cities.It is very professional and made you feel appreciated for the work you
                                    were doing.</h5>

                                <div class="pb-3 d-flex align-items-center">
                                    <span class="btn btn-home-chart">
                                        <img src="{{ asset(config('constants.DIGITYU_IMAGES_PATH').'oval2@2x.png') }}" alt="" class="clints-images">
                                    </span>
                                    <div class="home-chart-one ms-4">
                                        <h4 class="home-chart-one fw-bold mb-2">Leslie Alexander</h4>
                                        <span class="text-muted">Founder</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="digityu-orbit">
    <div class="container">
        <div class="row">
            <div class="col-lg-5">
                <h1>Trusted by more than 50k companies</h1>
                <p>We are trusted by more than 50 thousand companies worldwide. We provide the best support desk
                    service ever.</p>
            </div>

            <div class="col-lg-7">
                <img src="{{ asset(config('constants.DIGITYU_IMAGES_PATH').'logos.svg') }}" width="100%" height="450px" alt="">
            </div>
        </div>
    </div>
</section>
<!-- footer area start -->
@include('layouts.digityu.partials.footer')
<!-- footer area end -->
@endsection