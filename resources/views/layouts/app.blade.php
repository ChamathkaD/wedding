<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Laravel') }}</title>
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
    <link rel="stylesheet" href=" {{ asset('fontawesome/css/all.min.css') }}">
    <link rel="stylesheet" href=" {{ asset('css/slick.css') }}">
    <link rel="stylesheet" href=" {{ asset('css/nice-select.css') }}">
    <link rel="stylesheet" href=" {{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{asset('css/responsive.css')}}">
    <style>
        .genric-btn.purple {
            color:#fff;background:#a903c8;
            border:1px solid transparent
        }

        .genric-btn.purple:hover {
            color:#a903c8;
            border:1px solid #a903c8;
            background:#fff
        }

        .genric-btn.purple-border{
            color:#a903c8;border:1px solid #a903c8;
            background:#fff
        }

        .genric-btn.purple-border:hover {
            color:#fff;
            background:#a903c8;
            border:1px solid transparent
        }
    </style>
    @stack('css')
    @livewireStyles
</head>
<body>

@include('partials.header')
@yield('content')
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
@stack('js')
@livewireScripts
<script>
    window.addEventListener('closeGalleryModal', event => {
        $("#modalGalleryForm").modal('hide');
    });

    window.addEventListener('closeSchoolModal', event => {
        $("#modalSchoolForm").modal('hide');
    });

    window.addEventListener('closeUniversityModal', event => {
        $("#modalUniversityForm").modal('hide');
    });
</script>
</body>
</html>
