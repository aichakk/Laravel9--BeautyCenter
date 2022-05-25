<!DOCTYPE html>
<html lang="en">
<head>
    <title>@yield('title')</title>
    <meta charset="utf-8">
    <meta name="format-detection" content="telephone=no"/>
    <link rel="icon" href="images/favicon.ico">
    <link rel="shortcut icon" href="images/favicon.ico"/>
    <link rel="stylesheet" href="{{asset('assets')}}/css/camera.css">
    <link rel="stylesheet" href="{{asset('assets')}}/css/style.css">
    <link href='/fonts.googleapis.com/css?family=Economica' rel='stylesheet' type='text/css'>
    <script src="{{asset('assets')}}/js/jquery.js"></script>
    <script src="{{asset('assets')}}/js/jquery-migrate-1.1.1.js"></script>
    <script src="{{asset('assets')}}/js/script.js"></script>
    <script src="{{asset('assets')}}/js/jquery.ui.totop.js"></script>
    <script src="{{asset('assets')}}/js/superfish.js"></script>
    <script src="{{asset('assets')}}/js/jquery.equalheights.js"></script>
    <script src="{{asset('assets')}}/js/jquery.mobilemenu.js"></script>
    <script src="{{asset('assets')}}/js/jquery.easing.1.3.js"></script>
    <script src="{{asset('assets')}}/js/camera.js"></script>
    <!--[if (gt IE 9)|!(IE)]><!-->
    <script src="{{asset('assets')}}/js/jquery.mobile.customized.min.js"></script>
    <!--<![endif]-->

    {{--    additional js files--}}

    <script src="{{asset('couresel')}}/js/jquery-3.3.1.min.js"></script>
    <script src="{{asset('couresel')}}/js/popper.min.js"></script>
    <script src="{{asset('couresel')}}/js/bootstrap.min.js"></script>
    <script src="{{asset('couresel')}}/js/owl.carousel.min.js"></script>
    <script src="{{asset('couresel')}}/js/main.js"></script>
    <script>
        $(document).ready(function () {
            jQuery('#camera_wrap').camera({
                loader: false,
                pagination: true,
                minHeight: '250',
                thumbnails: true,
                height: '34.94791666666667%',
                caption: true,
                navigation: false,
                fx: 'mosaic'
            });
            $().UItoTop({easingType: 'easeOutQuart'});
        })
    </script>
    <!--[if lt IE 8]>
    <div style=' clear: both; text-align:center; position: relative;'>
        <a href="http:/windows.microsoft.com/en-US/internet-explorer/products/ie/home?ocid=ie6_countdown_bannercode">
            <img src="http:/storage.ie6countdown.com/assets/100/images/banners/warning_bar_0000_us.jpg" border="0"
                 height="42" width="820"
                 alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today."/>
        </a>
    </div>
    <![endif]-->
<!--[if lt IE 9]>
    <script src="{{asset('assets')}}/js/html5shiv.js"></script>
    <link rel="stylesheet" media="screen" href="{{asset('assets')}}/css/ie.css">
    <![endif]-->

    {{--        some additional styles   --}}
    <link rel="stylesheet" href="{{asset('couresel')}}/css/style.css">

    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400&display=swap" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500&display=swap" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css?family=Arbutus+Slab&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="{{asset('couresel')}}/fonts/icomoon/style.css">

    <link rel="stylesheet" href="{{asset('couresel')}}/css/owl.carousel.min.css">

    <link rel="stylesheet" href="{{asset('couresel')}}/css/animate.css">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{asset('couresel')}}/css/bootstrap.min.css">

    @yield('head')
</head>
<body class="page1" id="top">
@include('home.header')


<div class="container">
    @yield('content')
</div>

@include('home.footer')
@yield('foot')
</body>
</html>
