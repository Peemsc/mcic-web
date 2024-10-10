<!DOCTYPE html>
<html lang="th">

<head>
    <meta charset="utf-8">
    <!--meta http-equiv="X-UA-Compatible" content="IE=edge, chrome=1" /-->
    <!--meta name="viewport" content="width=device-width, initial-scale=1.0"-->
    <meta name="viewport" content="width=device-width, initial-scale = 1.0, maximum-scale=1.0, user-scalable=no" />
    <meta name="apple-mobile-web-app-capable" content="yes" />

    <title>@yield('title') MCIC </title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Kanit:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">

    <link rel="shortcut icon" href="{{ asset('favicon.ico') }}" type="image/x-icon">
    <link rel="icon" href="{{ asset('assets/img/favicon.ico') }}" type="image/x-icon">

    <link href="{{ asset('assets/css/bootstrap/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/animate.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/swiper.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/jquery.fancybox.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/global.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/jquery.nstSlider.css') }}" rel="stylesheet">
</head>

<body class="@yield('body-class')" style="background-image: url(@yield('body-style'));">
    <div class="preload">
        <span class="loader"></span>
    </div>
    <div class="page" id="app">
        @yield('header')
        <header class="header">
            <header-customer></header-customer>
        </header>
        @yield('content')
        <div class="navbar-sidebar">
            <div class="navbar-inner"></div>
        </div>
        @yield('footer')
        <footer class="footer">
            @include('layouts.footers.footer-cart')
        </footer>
        @include('layouts.cookie')
    </div>
    {{-- {!! RecaptchaV3::initJs() !!} --}}
    <script src="{{ asset('assets/js/jquery-3.4.1.min.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap/popper.min.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/js/wow.js') }}"></script>
    <script src="{{ asset('assets/js/swiper.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.fancybox.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.validate.js') }}"></script>
    <script src="{{ asset('assets/js/custom.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.nstSlider.js') }}"></script>


    <script src="{{ asset('js/app.js') }}"></script>
    <script>
        /*var myModal = new bootstrap.Modal(document.getElementById('productCouponInfoModal1'))
            myModal.show()*/

        var $couponModal = new bootstrap.Modal('#couponModal');

        $(".nav-pretty .nav-discount a").click(function() {
            $couponModal.show();
            $('.modal .nav-pretty a[href="#tab_coupon_1"]').tab('show');

        });
        $(".modal .nav-product a").click(function() {
            $couponModal.show();
            $('.modal .nav-pretty a[href="#tab_coupon_2"]').tab('show');
        });
    </script>
    @yield('page_script')
</body>

</html>
