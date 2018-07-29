<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title> @yield('title') </title>
<link rel="icon" href="images/favicon.ico" type="image/x-icon" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<link rel="stylesheet"  href="{!! asset('css/styles.css') !!}" media="all">
</head>

<body class="cms-index-index cms-home-page">
    <div id="page">
        @include('share.header')


        @yield('content')

        <!-- Footer -->
        @include('share.footer')
    </div>

<!-- JavaScript -->

<script src="{!! asset('js/jquery.min.js') !!}"></script>
<script src="{!! asset('js/bootstrap.min.js') !!}"></script>
<script src="{!! asset('js/revslider.js') !!}"></script>
<script src="{!! asset('js/main.js') !!}"></script>
<script src="{!! asset('js/owl.carousel.min.js') !!}"></script>
<script src="{!! asset('js/mob-menu.js') !!}"></script>
<script src="{!! asset('js/countdown.js') !!}"></script>
</body>
</html>
