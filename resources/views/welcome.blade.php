{{--

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

&lt;!&ndash;        &lt;!&ndash; Fonts &ndash;&gt;&ndash;&gt;
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">

&lt;!&ndash;        &lt;!&ndash; Styles &ndash;&gt;&ndash;&gt;
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                    Laravel
                </div>

                <div class="links">
                    <a href="https://laravel.com/docs">Docs</a>
                    <a href="https://laracasts.com">Laracasts</a>
                    <a href="https://laravel-news.com">News</a>
                    <a href="https://blog.laravel.com">Blog</a>
                    <a href="https://nova.laravel.com">Nova</a>
                    <a href="https://forge.laravel.com">Forge</a>
                    <a href="https://vapor.laravel.com">Vapor</a>
                    <a href="https://github.com/laravel/laravel">GitHub</a>
                </div>
            </div>
        </div>
    </body>
</html>
--}}



<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">


    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="description" content="">

    <link rel="manifest" href=" {{ asset('site.webmanifest') }}">
    <link rel="shortcut icon" type="image/x-icon" href=" {{ asset('img/favicon.ico') }}">

    <!-- CSS here -->
    <link rel="stylesheet" href=" {{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href=" {{ asset('css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href=" {{ asset('css/flaticon.css') }}">
    <link rel="stylesheet" href=" {{ asset('css/slicknav.css') }}">
    <link rel="stylesheet" href=" {{ asset('css/animate.min.css') }}">
    <link rel="stylesheet" href=" {{ asset('css/magnific-popup.css') }}">
    <link rel="stylesheet" href=" {{ asset('css/fontawesome-all.min.css') }}">
    <link rel="stylesheet" href=" {{ asset('css/themify-icons.css') }}">
    <link rel="stylesheet" href=" {{ asset('css/slick.css') }}">
    <link rel="stylesheet" href=" {{ asset('css/nice-select.css') }}">
    <link rel="stylesheet" href=" {{ asset('css/style.css') }}">


</head>
<body>

<div class="header-area">
    <div class="main-header header-sticky">
        <div class="container">
            <div class="row align-items-center">
                <!-- Logo -->
                <div class="col-xl-2 col-lg-2 col-md-2">
                    <div class="logo">
                        <a href="{{ url('/') }}"><img src="{{ asset('img/logo/logo.png') }}" alt=""></a>
                        {{ config('app.name', 'Laravel') }}
                    </div>
                </div>
                <div class="col-xl-10 col-lg-10 col-md-10">
                    <!-- Main-menu -->
                    <div class="main-menu f-right d-none d-lg-block">
                        <nav>
                            <ul id="navigation">


                                    <li><a href="contact.html">contact</a></li>


                                @if (Route::has('login'))

                                        @auth
                                           <li> <a href="{{ url('/home') }}">Home</a></li>
                                        @else
                                            <li><a href="{{ route('login') }}">Login</a></li>

                                            @if (Route::has('register'))
                                               <li> <a href="{{ route('register') }}">Register</a></li>
                                            @endif
                                        @endauth

                                @endif
                                <li><a href="#" style="color: #800098"> Broker?</a>
                                    <ul class="submenu ">
                                        <li><a href="{{ route('broker.register') }} ">Register</a></li>
                                        <li><a href="{{ route('broker.login') }}">Login</a></li>
                                    </ul>

                                </li>



                            </ul>
                        </nav>
                    </div>
                </div>
                <!-- Mobile Menu -->
                <div class="col-12">
                    <div class="mobile_menu d-block d-lg-none"></div>
                </div>
            </div>
        </div>
    </div>
</div>




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


@include('partials.footer')

<!-- All JS Custom Plugins Link Here here -->
<script src="{{ asset('js/vendor/modernizr-3.5.0.min.js') }}"></script>
<!-- Jquery, Popper, Bootstrap -->
<script src="{{ asset('js/vendor/jquery-1.12.4.min.js') }}"></script>
<script src="{{ asset('js/popper.min.js') }}"></script>
<script src="{{ asset('js/bootstrap.min.js') }}"></script>
<!-- Jquery Mobile Menu -->
<script src="{{ asset('js/jquery.slicknav.min.js') }}"></script>

<!-- Jquery Slick , Owl-Carousel Plugins -->
<script src="{{ asset('js/owl.carousel.min.js') }}"></script>
<script src="{{ asset('js/slick.min.js') }}"></script>
<!-- Date Picker -->
<script src="{{ asset('js/gijgo.min.js') }}"></script>
<!-- One Page, Animated-HeadLin -->
<script src="{{ asset('js/wow.min.js') }}"></script>
<script src="{{ asset('js/animated.headline.js') }}"></script>
<script src="{{ asset('js/jquery.magnific-popup.js') }}"></script>

<!-- Scrollup, nice-select, sticky -->
<script src="{{ asset('js/jquery.scrollUp.min.js') }}"></script>
<script src="{{ asset('js/jquery.nice-select.min.js') }}"></script>
<script src="{{ asset('js/jquery.sticky.js') }}"></script>

<!-- contact js -->
<script src="{{ asset('js/contact.js') }}"></script>
<script src="{{ asset('js/jquery.form.js') }}"></script>
<script src="{{ asset('js/jquery.validate.min.js') }}"></script>
<script src="{{ asset('js/mail-script.js') }}"></script>
<script src="{{ asset('js/jquery.ajaxchimp.min.js') }}"></script>

<!-- Jquery Plugins, main Jquery -->
<script src="{{ asset('js/plugins.js') }}"></script>
<script src="{{ asset('js/main.js') }}"></script>
</body>
</html>



