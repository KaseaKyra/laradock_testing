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
<!-- Scroll to Top Button-->
<a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
</a>
<!-- Logout Modal-->
<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
     aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
            <div class="modal-footer">
                <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                <a class="btn btn-primary" href="login.html">Logout</a>
            </div>
        </div>
    </div>
</div>
<script
    src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
    integrity="sha256-pasqAKBDmFT4eHoN2ndd6lN370kFiGUFyTiUHWhU7k8="
    crossorigin="anonymous"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="{{ asset('/themes/sb-admin-2/vendor/jquery/jquery.min.js') }}" defer></script>
<script src="{{ asset('/themes/sb-admin-2/vendor/bootstrap/js/bootstrap.bundle.min.js') }}" defer></script>
<script src="{{ asset('/themes/sb-admin-2/vendor/jquery-easing/jquery.easing.min.js') }}" defer></script>
<script src="{{ asset('/themes/sb-admin-2/js/sb-admin-2.min.js') }}" defer></script>
{{--<script src="{{ asset('/themes/sb-admin-2/vendor/chart.js/Chart.min.js') }}" defer></script>--}}
{{--<script src="{{ asset('/themes/sb-admin-2/js/demo/chart-area-demo.js') }}" defer></script>--}}
{{--<script src="{{ asset('/themes/sb-admin-2/js/demo/chart-pie-demo.js') }}" defer></script>--}}
</body>
</html>

@push('js-stack')
    <script type="text/javascript">
        $(document).ready(function () {
            $('.collapse-item').click(function (event) {
                // Avoid the link click from loading a new page
                event.preventDefault();
                // Load the content from the link's href attribute
                $('#main-content').load($(this).attr('href'));
            });
        });
    </script>
@endpush

