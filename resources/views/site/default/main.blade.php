<!DOCTYPE html>
<html lang="en">
    <head>
    <meta charset="UTF-8">
    <meta name="description" content="Aler Template">
    <meta name="keywords" content="Aler, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Aler | Template</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600,700,800,900&display=swap"
          rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700,900&display=swap" rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="{{asset('assets/css/front/bootstrap.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('assets/css/front/font-awesome.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('assets/css/front/elegant-icons.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('assets/css/front/jquery-ui.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('assets/css/front/nice-select.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('assets/css/front/owl.carousel.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('assets/css/front/magnific-popup.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('assets/css/front/slicknav.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('assets/css/front/style.css')}}" type="text/css">
</head>
    <body>

    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>

    <!-- Offcanvas Menu Wrapper Begin -->
    <div class="offcanvas-menu-overlay"></div>
    <div class="offcanvas-menu-wrapper">
        <div class="canvas-close">
            <span class="icon_close"></span>
        </div>
        <div class="logo">
{{--            {{route('./index.html')}}--}}
            <a href="">
                <img src="{{asset('assets/img/front/logo.png')}}" alt="logo">
            </a>
        </div>
        <div id="mobile-menu-wrap"></div>
        <div class="om-widget">
            <ul>
                <li><i class="icon_mail_alt"></i> Aler.support@gmail.com</li>
                <li><i class="fa fa-mobile-phone"></i> 125-711-811 <span>125-668-886</span></li>
            </ul>
            <a href="#" class="hw-btn">Submit property</a>
        </div>
        <div class="om-social">
            <a href="#"><i class="fa fa-facebook"></i></a>
            <a href="#"><i class="fa fa-twitter"></i></a>
            <a href="#"><i class="fa fa-youtube-play"></i></a>
            <a href="#"><i class="fa fa-instagram"></i></a>
            <a href="#"><i class="fa fa-pinterest-p"></i></a>
        </div>
    </div>
    <!-- Offcanvas Menu Wrapper End -->



        @include('site.default.header')

        @yield('content')

        @include('site.default.footer')

        <!-- Js Plugins -->
        <script src="{{asset('assets/js/front/jquery-3.3.1.min.js')}}"></script>
        <script src="{{asset('assets/js/front/bootstrap.min.js')}}"></script>
        <script src="{{asset('assets/js/front/jquery.magnific-popup.min.js')}}"></script>
        <script src="{{asset('assets/js/front/mixitup.min.js')}}"></script>
        <script src="{{asset('assets/js/front/jquery-ui.min.js')}}"></script>
        <script src="{{asset('assets/js/front/jquery.nice-select.min.js')}}"></script>
        <script src="{{asset('assets/js/front/jquery.slicknav.js')}}"></script>
        <script src="{{asset('assets/js/front/owl.carousel.min.js')}}"></script>
        <script src="{{asset('assets/js/front/jquery.richtext.min.js')}}"></script>
        <script src="{{asset('assets/js/front/image-uploader.min.js')}}"></script>
        <script src="{{asset('assets/js/front/main.js')}}"></script>
    </body>
</html>
