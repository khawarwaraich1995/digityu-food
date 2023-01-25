@extends('layouts.digityu.app')

@section('title','Pricing')

@section('content')
<!-- header area start -->
@include('layouts.digityu.partials.header')
<!-- header area end -->

<section class="container table-main mt-5 mb-5">
    <div class="row mb-5">
        <div class="col-md-12 col-sm-12 mb-2">
            <div class=" ">
                <div class="intro-text">
                    <h2 class="fw-bold">Pricing & Plans</h2>
                    <h2 class="text-muted">Start your 14-day free trial. No credit card, no payment required</h2>
                </div>
                <div class="switch-wrapper">
                    <input id="monthly" type="radio" name="switch" checked>
                    <input id="yearly" type="radio" name="switch">
                    <label for="monthly">Monthly</label>
                    <label for="yearly">Yearly</label> <span class="highlighter"></span>
                </div> <span class="saves-btn mx-3">Save %</span>
                <div class="table-wrapper">
                    <table class="border-rounded table-bordered shadow">
                        <thead>
                            <tr>
                                <th>
                                    <div class="price monthly">
                                        <h3 class="heading-tag ">Monthly Offers</h3>
                                        <p class="description-change">Get 15% off when you subscribe monthly</p>
                                    </div>
                                    <div class="price yearly hide">
                                        <h3 class="heading-tag ">Annual Offers</h3>
                                        <p class="description-change">Get 25% off when you subscribe yearly</p>
                                    </div>
                                </th>
                                <th>
                                    <div class=" py-3 bg-transparent text-dark">
                                        <h3 class="heading-tag ">Basic</h3>
                                        <div class="price monthly">
                                            <p class=" description-change">Get 15% off when you subscribe monthly
                                            </p>
                                        </div>
                                        <div class="price yearly hide">
                                            <p class="description-change ">Get 25% off when you subscribe yearly</p>
                                        </div>
                                    </div>
                                    <div class="price monthly">

                                        <h3 class="fonts">Rs1950 <span class="">/month</span></h3>
                                    </div>
                </div>
                <div class="price yearly hide">

                    <h3 class="fonts">Rs2550 <span class="">/year</span></h3>
                </div>

                </th>

                <th>
                    <button class="most-popular-btn">Most Popular</button>
                    <div class=" bg-transparent text-dark">
                        <h3 class="heading-tag ">Business</h3>
                        <div class="price monthly">
                            <p class="description-change">Get 25% off when you subscribe monthly</p>
                        </div>
                        <div class="price yearly hide">
                            <p class="description-change">Get 25% off when you subscribe yearly</p>
                        </div>
                    </div>
                    <div class="price monthly">

                        <h3 class="fonts">Rs1950 <span class="">/month</span></h3>
                    </div>
            </div>
            <div class="price yearly hide">

                <h3 class="fonts">Rs2550 <span class="">/year</span></h3>
            </div>
            </th>
            <th>
                <div class=" py-3 bg-transparent text-dark">
                    <h3 class="heading-tag ">Ultimate</h3>

                    <div class="price monthly">
                        <p class=" description-change ">Get 15% off when you subscribe monthly</p>
                    </div>
                    <div class="price yearly hide">
                        <p class="description-change ">Get 25% off when you subscribe yearly</p>
                    </div>
                </div>

                <div class="price monthly">

                    <h3 class="fonts">Rs1950 <span class="">/month</span></h3>
                </div>
        </div>
        <div class="price yearly hide">

            <h3 class="fonts">Rs2550 <span class="">/year</span></h3>
        </div>
        </th>
        </tr>
        </thead>
        <tbody>
            <tr>
                <td>
                    <h5 class="td-heading">Secure Web Hosting</h5>
                </td>
                <td> <span>100</span> </td>
                <td> <span>1000</span> </td>
                <td> <span>
                        10,000
                    </span> </td>
            </tr>
            <tr>
                <td>
                    <h5 class="td-heading">Secure Web Hosting</h5>
                </td>
                <td>
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M23.6581 2.04548L22.5468 0.482806C22.0889 -0.160935 21.3415 -0.160935 20.8797 0.482806L9.22631 16.8744L3.12177 8.2907C2.66395 7.64689 1.91651 7.64689 1.45475 8.2907L0.343362 9.85338C-0.114454 10.4972 -0.114454 11.5481 0.343362 12.1974L8.3889 23.5103C8.6198 23.8349 8.91715 24 9.21849 24C9.51983 24 9.82112 23.8349 10.0481 23.5103L23.6463 4.38956C24.1159 3.73481 24.1159 2.68936 23.6581 2.04548Z" fill="#10EE76" />
                    </svg>
                </td>
                <td> </td>
                <td>
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M23.6581 2.04548L22.5468 0.482806C22.0889 -0.160935 21.3415 -0.160935 20.8797 0.482806L9.22631 16.8744L3.12177 8.2907C2.66395 7.64689 1.91651 7.64689 1.45475 8.2907L0.343362 9.85338C-0.114454 10.4972 -0.114454 11.5481 0.343362 12.1974L8.3889 23.5103C8.6198 23.8349 8.91715 24 9.21849 24C9.51983 24 9.82112 23.8349 10.0481 23.5103L23.6463 4.38956C24.1159 3.73481 24.1159 2.68936 23.6581 2.04548Z" fill="#10EE76" />
                    </svg>
                </td>
            </tr>
            <tr>
                <td>
                    <h5 class="td-heading">Secure Web Hosting</h5>
                </td>
                <td>
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M23.6581 2.04548L22.5468 0.482806C22.0889 -0.160935 21.3415 -0.160935 20.8797 0.482806L9.22631 16.8744L3.12177 8.2907C2.66395 7.64689 1.91651 7.64689 1.45475 8.2907L0.343362 9.85338C-0.114454 10.4972 -0.114454 11.5481 0.343362 12.1974L8.3889 23.5103C8.6198 23.8349 8.91715 24 9.21849 24C9.51983 24 9.82112 23.8349 10.0481 23.5103L23.6463 4.38956C24.1159 3.73481 24.1159 2.68936 23.6581 2.04548Z" fill="#10EE76" />
                    </svg>
                </td>
                <td>
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M23.6581 2.04548L22.5468 0.482806C22.0889 -0.160935 21.3415 -0.160935 20.8797 0.482806L9.22631 16.8744L3.12177 8.2907C2.66395 7.64689 1.91651 7.64689 1.45475 8.2907L0.343362 9.85338C-0.114454 10.4972 -0.114454 11.5481 0.343362 12.1974L8.3889 23.5103C8.6198 23.8349 8.91715 24 9.21849 24C9.51983 24 9.82112 23.8349 10.0481 23.5103L23.6463 4.38956C24.1159 3.73481 24.1159 2.68936 23.6581 2.04548Z" fill="#10EE76" />
                    </svg>
                </td>
                <td>
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M23.6581 2.04548L22.5468 0.482806C22.0889 -0.160935 21.3415 -0.160935 20.8797 0.482806L9.22631 16.8744L3.12177 8.2907C2.66395 7.64689 1.91651 7.64689 1.45475 8.2907L0.343362 9.85338C-0.114454 10.4972 -0.114454 11.5481 0.343362 12.1974L8.3889 23.5103C8.6198 23.8349 8.91715 24 9.21849 24C9.51983 24 9.82112 23.8349 10.0481 23.5103L23.6463 4.38956C24.1159 3.73481 24.1159 2.68936 23.6581 2.04548Z" fill="#10EE76" />
                    </svg>
                </td>
            </tr>
            <tr>
                <td>
                    <h5 class="td-heading">Secure Web Hosting</h5>
                </td>
                <td> </td>
                <td>
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M23.6581 2.04548L22.5468 0.482806C22.0889 -0.160935 21.3415 -0.160935 20.8797 0.482806L9.22631 16.8744L3.12177 8.2907C2.66395 7.64689 1.91651 7.64689 1.45475 8.2907L0.343362 9.85338C-0.114454 10.4972 -0.114454 11.5481 0.343362 12.1974L8.3889 23.5103C8.6198 23.8349 8.91715 24 9.21849 24C9.51983 24 9.82112 23.8349 10.0481 23.5103L23.6463 4.38956C24.1159 3.73481 24.1159 2.68936 23.6581 2.04548Z" fill="#10EE76" />
                    </svg>
                </td>
                <td>
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M23.6581 2.04548L22.5468 0.482806C22.0889 -0.160935 21.3415 -0.160935 20.8797 0.482806L9.22631 16.8744L3.12177 8.2907C2.66395 7.64689 1.91651 7.64689 1.45475 8.2907L0.343362 9.85338C-0.114454 10.4972 -0.114454 11.5481 0.343362 12.1974L8.3889 23.5103C8.6198 23.8349 8.91715 24 9.21849 24C9.51983 24 9.82112 23.8349 10.0481 23.5103L23.6463 4.38956C24.1159 3.73481 24.1159 2.68936 23.6581 2.04548Z" fill="#10EE76" />
                    </svg>
                </td>
            </tr>
            <tr>
                <td>
                    <h5 class="td-heading">Secure Web Hosting</h5>
                </td>
                <td>
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M23.6581 2.04548L22.5468 0.482806C22.0889 -0.160935 21.3415 -0.160935 20.8797 0.482806L9.22631 16.8744L3.12177 8.2907C2.66395 7.64689 1.91651 7.64689 1.45475 8.2907L0.343362 9.85338C-0.114454 10.4972 -0.114454 11.5481 0.343362 12.1974L8.3889 23.5103C8.6198 23.8349 8.91715 24 9.21849 24C9.51983 24 9.82112 23.8349 10.0481 23.5103L23.6463 4.38956C24.1159 3.73481 24.1159 2.68936 23.6581 2.04548Z" fill="#10EE76" />
                    </svg>
                </td>
                <td>
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M23.6581 2.04548L22.5468 0.482806C22.0889 -0.160935 21.3415 -0.160935 20.8797 0.482806L9.22631 16.8744L3.12177 8.2907C2.66395 7.64689 1.91651 7.64689 1.45475 8.2907L0.343362 9.85338C-0.114454 10.4972 -0.114454 11.5481 0.343362 12.1974L8.3889 23.5103C8.6198 23.8349 8.91715 24 9.21849 24C9.51983 24 9.82112 23.8349 10.0481 23.5103L23.6463 4.38956C24.1159 3.73481 24.1159 2.68936 23.6581 2.04548Z" fill="#10EE76" />
                    </svg>
                </td>
                <td>
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M23.6581 2.04548L22.5468 0.482806C22.0889 -0.160935 21.3415 -0.160935 20.8797 0.482806L9.22631 16.8744L3.12177 8.2907C2.66395 7.64689 1.91651 7.64689 1.45475 8.2907L0.343362 9.85338C-0.114454 10.4972 -0.114454 11.5481 0.343362 12.1974L8.3889 23.5103C8.6198 23.8349 8.91715 24 9.21849 24C9.51983 24 9.82112 23.8349 10.0481 23.5103L23.6463 4.38956C24.1159 3.73481 24.1159 2.68936 23.6581 2.04548Z" fill="#10EE76" />
                    </svg>
                </td>
            </tr>
        </tbody>
        </table>
    </div>
    </div>
    </div>
    </div>
</section><!-- footer area start -->
@include('layouts.digityu.partials.footer')
<!-- footer area end -->
@endsection