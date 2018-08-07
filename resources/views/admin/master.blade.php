<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>@yield('title')</title>

    <!-- Favicon -->
    <link rel="apple-touch-icon" href="{{ asset('images/logo/apple-touch-icon.html') }}">
    <link rel="shortcut icon" href="{{ asset('images/logo/favicon.png') }}">

    <!-- core dependcies css -->
    <link rel="stylesheet" href="{{ asset('vendor/bootstrap/dist/css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('vendor/PACE/themes/blue/pace-theme-minimal.css') }}">
    <link rel="stylesheet" href="{{ asset('vendor/perfect-scrollbar/css/perfect-scrollbar.min.css') }}">

    <!-- page css -->
    <link rel="stylesheet" href="{{ asset('vendor/datatables/media/css/dataTables.bootstrap4.min.css') }}">
    <link href="{{ asset('vendor/selectize/dist/css/selectize.default.css') }}" rel="stylesheet">
    <link href="{{ asset('vendor/summernote/dist/summernote-bs4.css') }}" rel="stylesheet">
    <link href="{{ asset('vendor/bootstrap-datepicker/dist/css/bootstrap-datepicker3.css') }}" rel="stylesheet">
    <!-- core css -->
    <link href="{{ asset('css/font-awesome.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/themify-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('css/materialdesignicons.min.css')}}" rel="stylesheet">
    <link href="{{ asset('css/animate.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/app.css')}}" rel="stylesheet">
    <link href="{{ asset('css/mystyle.css') }}" rel="stylesheet" >
</head>

<body class="  pace-done">
    <div class="pace  pace-inactive">
        <div class="pace-progress" data-progress-text="100%" data-progress="99">
            <div class="pace-progress-inner"></div>
        </div>
        <div class="pace-activity"></div>
    </div>
    @section('app')
    <div class="app header-default side-nav-dark">
        <div class="layout">
            <!-- Header START -->
            <div class="header navbar">
                @include('admin.elements.header')
            </div>
            <!-- Header END -->

            <!-- Side Nav START -->
            <div class="side-nav expand-lg">
                @include('admin.elements.sideNav')
            </div>
            <!-- Side Nav END -->

            <!-- Page Container START -->
            <div class="page-container">
                <!-- Content Wrapper START -->
                <div class="main-content">
                    <div class="container-fluid">
                        @yield('content')
                    </div>
                </div>
                <!-- Content Wrapper END -->

                <!-- Footer START -->
                <footer class="content-footer">
                    <div class="footer">
                        @include('admin.elements.footer')
                    </div>
                </footer>
            </div>
        </div>
    </div>
@show
<script src="{{ asset('js/vendor.js') }}"></script>
<script src="{{ asset('js/app.min.js') }}"></script>

<!-- page js -->
<script src="{{ asset('vendor/chart.js/dist/Chart.min.js')}}"></script>
<script src="{{ asset('vendor/jquery.sparkline/jquery.sparkline.min.js')}}"></script>
<script src="{{ asset('js/dashboard/default.js')}}"></script>
<script src="{{ asset('vendor/datatables/media/js/jquery.dataTables.js') }} "></script>
<script src="{{ asset('vendor/datatables/media/js/dataTables.bootstrap4.min.js') }} "></script>
<script src="{{ asset('vendor/moment/min/moment.min.js') }}"></script>
<script src="{{ asset('vendor/selectize/dist/js/standalone/selectize.min.js') }}"></script>
<script src="{{ asset('vendor/summernote/dist/summernote-bs4.min.js') }}"></script>
<script src="{{ asset('vendor/bootstrap-datepicker/dist/js/bootstrap-datepicker.js') }}"></script>
<script src="{{ asset('js/forms/form-elements.js') }}"></script>
<script src="{{ asset('js/myjs.js') }}"></script>

</body>
</html>
