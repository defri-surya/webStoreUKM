<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Ashion Template">
    <meta name="keywords" content="Ashion, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Cookie&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700;800;900&display=swap"
        rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="{{ asset('asset') }}/css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="{{ asset('asset') }}/css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="{{ asset('asset') }}/css/elegant-icons.css" type="text/css">
    <link rel="stylesheet" href="{{ asset('asset') }}/css/jquery-ui.min.css" type="text/css">
    <link rel="stylesheet" href="{{ asset('asset') }}/css/magnific-popup.css" type="text/css">
    <link rel="stylesheet" href="{{ asset('asset') }}/css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="{{ asset('asset') }}/css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="{{ asset('asset') }}/css/style.css" type="text/css">
    @yield('css')
</head>

<body>
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>

    @include('layouts.navbar')

    @yield('content')

    @include('layouts.footer')

    <!-- Search Begin -->
    <div class="search-model">
        <div class="h-100 d-flex align-items-center justify-content-center">
            <div class="search-close-switch">+</div>
            <form class="search-model-form">
                <input type="text" id="search-input" placeholder="Search here.....">
            </form>
        </div>
    </div>
    <!-- Search End -->

    <!-- Js Plugins -->
    <script src="{{ asset('asset') }}/js/jquery-3.3.1.min.js"></script>
    <script src="{{ asset('asset') }}/js/bootstrap.min.js"></script>
    <script src="{{ asset('asset') }}/js/jquery.magnific-popup.min.js"></script>
    <script src="{{ asset('asset') }}/js/jquery-ui.min.js"></script>
    <script src="{{ asset('asset') }}/js/mixitup.min.js"></script>
    <script src="{{ asset('asset') }}/js/jquery.countdown.min.js"></script>
    <script src="{{ asset('asset') }}/js/jquery.slicknav.js"></script>
    <script src="{{ asset('asset') }}/js/owl.carousel.min.js"></script>
    <script src="{{ asset('asset') }}/js/jquery.nicescroll.min.js"></script>
    <script src="{{ asset('asset') }}/js/main.js"></script>
    @stack('javascript')
</body>

</html>
