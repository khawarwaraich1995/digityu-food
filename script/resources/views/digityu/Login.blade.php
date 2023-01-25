@extends('layouts.digityu.app')

@section('title','Login')

@section('content')
<!-- header area start -->
@include('layouts.digityu.partials.header')
<!-- header area end -->

<section class="digityu-login">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 mt-5 mb-3">
                    <h2>Login</h2>
                    <p>Don't have an account? <span class="login-up1"><a href="{{ route('home-signup') }}">Sign up</a></span></p>
                    <div class="form-group col-lg-10 mt-2">
                        <label class="col-lg-6 control-label fw-bold mb-3">Email address</label>
                        <div class="col-lg-12">
                            <input type="text" placeholder="Robertmartine@gmail.com" class="form-control input-lg">
                        </div>
                    </div>

                    <div class="form-group col-lg-10 mt-2">
                        <label class="col-lg-6 control-label fw-bold mb-3">Password</label>
                        <div class="col-lg-12">
                            <input type="text" placeholder="*************" class="form-control input-lg">
                        </div>
                    </div>

                    <div class="col-lg-10 mt-3">
                        <div class="form-group mb-3">
                            <input type="checkbox" name="Remember me" class="mx-2 checkbox-size">
                            <span><label for="" class="text-muted">Remember me</label></span>
                            <span class="pull-right text-muted">Forget Password?</span>
                        </div>
                    </div>

                    <div class="form-group col-lg-10 mt-0">
                        <label class="col-lg-6 control-label fw-bold mb-0"></label>
                        <div class="col-lg-12">
                            <button class="btn-login">Login</button>
                        </div>
                    </div>

                    <div class="form-group col-lg-10 mt-0">
                        <label class="col-lg-6 control-label fw-bold mb-3"></label>
                        <div class="col-lg-12">
                            <button class="btn-google"><img src="{{ asset(config('constants.DIGITYU_IMAGES_PATH').'google-11@2x.png') }}" width="30px" class="mx-2"> Log
                                in with google</button>
                        </div>
                    </div>
                </div>

                <div class="col-lg-7">
                    <img src="{{ asset(config('constants.DIGITYU_IMAGES_PATH').'login1@2x.png') }}" width="100%" alt="">
                </div>
            </div>
        </div>
    </section>
<!-- footer area start -->
@include('layouts.digityu.partials.footer')
<!-- footer area end -->
@endsection

