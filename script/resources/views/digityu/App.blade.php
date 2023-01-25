@extends('layouts.digityu.app')
@section('title','App')
@section('content')
<!-- header area start -->
@include('layouts.digityu.partials.header')
<!-- header area end -->
<section class="digityu-app">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <img src="{{asset(config('constants.DIGITYU_IMAGES_PATH').'mobile-image-1@2x.png') }}" width=" 450.92px;" height="740.88px" alt="">
            </div>
            <div class="col-lg-6 mt-5">
                <div class="mobile-app-one">
                    <h1>Trouble-free new webinar software</h1>
                    <p>Choosing the right webinar software is vitally important to your business. From marketing product launches to with community, these software can help you meet your goals.</p>
                    <div class="mobile-app-one-emo">
                        <img src="{{asset(config('constants.DIGITYU_IMAGES_PATH').'image-28@2x.png') }}" width="47.07px" alt="">
                        <span>Suitable for use on any device</span>
                        <p>A social media strategy is a summary of everything you plan to do and hope to achieve on social media.</p>
                    </div>
                </div>
            </div>

            <div class="col-lg-6 mt-5">
                <img src="{{asset(config('constants.DIGITYU_IMAGES_PATH').'star.svg') }}" width="80px" alt="">
                <div class="mobile-app-two">
                    <h1>Engaging meetings and webinars plan</h1>
                    <p>The biggest benefits of attending webinars are gaining knowledge & upskilling. Webinars are great resources of information. As career counsellors, you can understand.</p>
                    <div class="mobile-app-two-emo">
                        <img src="{{asset(config('constants.DIGITYU_IMAGES_PATH').'image-29@2x.png') }}" width="47.07px" alt="">
                        <span>Meetings can be started freely</span>
                        <p>his one may seem simple, but inviting attendees to ask questions during your webinar interaction with your audience.</p>
                    </div>
                </div>
            </div>

            <div class="col-lg-6">
                <img src="{{asset(config('constants.DIGITYU_IMAGES_PATH').'mobile-image-2@2x.png') }}" width=" 450.92px;" height="740.88px" alt="">
            </div>

        </div>
    </div>
</section>
<!-- footer area start -->
@include('layouts.digityu.partials.footer')
<!-- footer area end -->
@endsection