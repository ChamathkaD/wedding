@extends('layouts.app')

@section('content')

    <div class="slider-area ">
        <div class="slider-active">
            <div class="single-slider slider-height hero-overly d-flex align-items-center" data-background="{{ asset('img/hero/homeHero_1.jpg') }}">
                <div class="container">
                    <div class="row d-flex align-items-center">
                        <div class="col-lg-7 col-md-9 ">
                            <div class="hero__caption text-center d-flex align-items-center caption-bg">
                                <div class="circle-caption">
                                    <span  data-animation="fadeInUp" data-delay=".3s">Feb 14 2020</span>
                                    <h1  data-animation="fadeInUp" data-delay=".5s">Julia & Jakson</h1>
                                    <p  data-animation="fadeInUp" data-delay=".9s">We are getting married</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="single-slider slider-height hero-overly d-flex align-items-center" data-background="{{ asset('img/hero/homeHero_2.jpg') }}">
                <div class="container">
                    <div class="row d-flex align-items-center">
                        <div class="col-lg-7 col-md-9 ">
                            <div class="hero__caption text-center d-flex align-items-center caption-bg">
                                <div class="circle-caption">
                                    <span  data-animation="fadeInUp" data-delay=".3s">Feb 14 2020</span>
                                    <h1  data-animation="fadeInUp" data-delay=".5s">Julia & Jakson</h1>
                                    <p  data-animation="fadeInUp" data-delay=".9s">We are getting married</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @include('partials.user-area')

    @include('partials.broker-area')


@endsection
