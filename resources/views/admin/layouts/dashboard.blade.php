<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="noindex,nofollow">
    <title>Matrix Admin Lite Free Versions Template by WrapPixel</title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href=" {{ asset('dashboard/assets/images/favicon.png') }}">
    <!-- Custom CSS -->
    <link href="{{ asset('dashboard/assets/libs/datatables.net-bs4/css/dataTables.bootstrap4.css') }}" rel="stylesheet">
    <!-- Custom CSS -->
    <link href=" {{ asset('dashboard/dist/css/style.min.css') }}" rel="stylesheet">
</head>
<body>

<div class="preloader">
    <div class="lds-ripple">
        <div class="lds-pos"></div>
        <div class="lds-pos"></div>
    </div>
</div>

<div id="main-wrapper"
     data-layout="vertical"
     data-navbarbg="skin5"
     data-sidebartype="full"
     data-sidebar-position="absolute"
     data-header-position="absolute"
     data-boxed-layout="full"
>

   @include('admin.partials.header')

    @include('admin.partials.sidebar')

    <div class="page-wrapper">
        @yield('content')
    </div>
</div>

<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>

<script src=" {{ asset('dashboard/assets/libs/jquery/dist/jquery.min.js') }}"></script>
<!-- Bootstrap tether Core JavaScript -->
<script src=" {{ asset('dashboard/assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>
<script src=" {{ asset('dashboard/assets/libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js') }}"></script>
<script src=" {{ asset('dashboard/assets/extra-libs/sparkline/sparkline.js') }}"></script>
<!--Wave Effects -->
<script src=" {{ asset('dashboard/dist/js/waves.js') }}"></script>
<!--Menu sidebar -->
<script src=" {{ asset('dashboard/dist/js/sidebarmenu.js') }}"></script>
<!--Custom JavaScript -->
<script src=" {{ asset('dashboard/dist/js/custom.min.js') }}"></script>
<script src="{{ asset('dashboard/assets/extra-libs/DataTables/datatables.min.js') }}"></script>
<script>
    $('#zero_config').DataTable();
</script>
</body>
</html>
