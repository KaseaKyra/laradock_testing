<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>SB Admin 2 - Dashboard</title>
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">
    <link href="{{ asset('/themes/sb-admin-2/css/sb-admin-2.min.css') }}" rel="stylesheet">
    <link href="{{ asset('/themes/sb-admin-2/vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"
          integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
</head>
<body id="page-top">
<!-- Page Wrapper -->
<div id="wrapper">
    @include('admin.partials.sidebar-nav')
    <div id="content-wrapper" class="d-flex flex-column">
        <div id="content">
            @include('admin.partials.top-nav')
            <div id="main-content">
                @yield('content')
            </div>
        </div>
        @include('admin.partials.footer')
    </div>
</div>
<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
{{--<script--}}
{{--    src="https://code.jquery.com/jquery-3.4.1.slim.min.js"--}}
{{--    integrity="sha256-pasqAKBDmFT4eHoN2ndd6lN370kFiGUFyTiUHWhU7k8="--}}
{{--    crossorigin="anonymous"></script>--}}
{{--<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>--}}
<script src="{{ asset('/themes/sb-admin-2/vendor/jquery/jquery.min.js') }}" defer></script>
<script src="{{ asset('/themes/sb-admin-2/vendor/bootstrap/js/bootstrap.bundle.min.js') }}" defer></script>
<script src="{{ asset('/themes/sb-admin-2/vendor/jquery-easing/jquery.easing.min.js') }}" defer></script>
<script src="{{ asset('/themes/sb-admin-2/js/sb-admin-2.min.js') }}" defer></script>
{{--<script src="{{ asset('/themes/sb-admin-2/vendor/chart.js/Chart.min.js') }}" defer></script>--}}
{{--<script src="{{ asset('/themes/sb-admin-2/js/demo/chart-area-demo.js') }}" defer></script>--}}
{{--<script src="{{ asset('/themes/sb-admin-2/js/demo/chart-pie-demo.js') }}" defer></script>--}}
@stack('custom-scripts')
</body>
</html>
