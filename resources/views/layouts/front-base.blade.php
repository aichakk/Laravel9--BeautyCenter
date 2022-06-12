<!DOCTYPE html>
<html lang="en">
<head>
    <title>@yield('title')</title>

    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Site Icons -->
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon" />
    <link rel="apple-touch-icon" href="images/apple-touch-icon.png">

<!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{asset('assets')}}/css/bootstrap.min.css">
    <!-- Site CSS -->
    <link rel="stylesheet" href="{{asset('assets')}}/css/style.css">
    <!-- ALL VERSION CSS -->
    <link rel="stylesheet" href="{{asset('assets')}}/css/versions.css">
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="{{asset('assets')}}/css/responsive.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{asset('assets')}}/css/custom.css">
    <!-- owl CSS -->
    <link rel="stylesheet" href="{{asset('assets')}}/css/owl.carousel.css">
    <!-- loading CSS -->
    <link rel="stylesheet" href="{{asset('assets')}}/css/loading.css">
    <!-- pretty CSS -->
    <link rel="stylesheet" href="{{asset('assets')}}/css/prettyPhoto.css">
    <!-- flaticon CSS -->
    <link rel="stylesheet" href="{{asset('assets')}}/css/flaticon.css">
    <!-- flaticon CSS -->
    <link rel="stylesheet" href="{{asset('assets')}}/css/animate.css">

        {{--    these are additional if scripts--}}


    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

{{--    <link rel="stylesheet" href="{{asset('assets')}}/css/camera.css">--}}
{{--    <link rel="stylesheet" href="{{asset('assets')}}/css/style.css">--}}
{{--    <link href='/fonts.googleapis.com/css?family=Economica' rel='stylesheet' type='text/css'>--}}
{{--    <script src="{{asset('assets')}}/js/jquery.js"></script>--}}
{{--    <script src="{{asset('assets')}}/js/jquery-migrate-1.1.1.js"></script>--}}
{{--    <script src="{{asset('assets')}}/js/script.js"></script>--}}
{{--    <script src="{{asset('assets')}}/js/jquery.ui.totop.js"></script>--}}
{{--    <script src="{{asset('assets')}}/js/superfish.js"></script>--}}
{{--    <script src="{{asset('assets')}}/js/jquery.equalheights.js"></script>--}}
{{--    <script src="{{asset('assets')}}/js/jquery.mobilemenu.js"></script>--}}
{{--    <script src="{{asset('assets')}}/js/jquery.easing.1.3.js"></script>--}}
{{--    <script src="{{asset('assets')}}/js/camera.js"></script>--}}
{{--    <!--[if (gt IE 9)|!(IE)]><!-->--}}
{{--    <script src="{{asset('assets')}}/js/jquery.mobile.customized.min.js"></script>--}}
{{--    <!--<![endif]-->--}}

    {{--    additional js files--}}

{{--    <script src="{{asset('couresel')}}/js/jquery-3.3.1.min.js"></script>--}}
{{--    <script src="{{asset('couresel')}}/js/popper.min.js"></script>--}}
{{--    <script src="{{asset('couresel')}}/js/bootstrap.min.js"></script>--}}
{{--    <script src="{{asset('couresel')}}/js/owl.carousel.min.js"></script>--}}
{{--    <script src="{{asset('couresel')}}/js/main.js"></script>--}}
{{--    <script>--}}
{{--        $(document).ready(function () {--}}
{{--            jQuery('#camera_wrap').camera({--}}
{{--                loader: false,--}}
{{--                pagination: true,--}}
{{--                minHeight: '250',--}}
{{--                thumbnails: true,--}}
{{--                height: '34.94791666666667%',--}}
{{--                caption: true,--}}
{{--                navigation: false,--}}
{{--                fx: 'mosaic'--}}
{{--            });--}}
{{--            $().UItoTop({easingType: 'easeOutQuart'});--}}
{{--        })--}}
{{--    </script>--}}
{{--    <!--[if lt IE 8]>--}}
{{--    <div style=' clear: both; text-align:center; position: relative;'>--}}
{{--        <a href="http:/windows.microsoft.com/en-US/internet-explorer/products/ie/home?ocid=ie6_countdown_bannercode">--}}
{{--            <img src="http:/storage.ie6countdown.com/assets/100/images/banners/warning_bar_0000_us.jpg" border="0"--}}
{{--                 height="42" width="820"--}}
{{--                 alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today."/>--}}
{{--        </a>--}}
{{--    </div>--}}
{{--    <![endif]-->--}}
{{--<!--[if lt IE 9]>--}}
{{--    <script src="{{asset('assets')}}/js/html5shiv.js"></script>--}}
{{--    <link rel="stylesheet" media="screen" href="{{asset('assets')}}/css/ie.css">--}}
{{--    <![endif]-->--}}

{{--    --}}{{--        some additional styles   --}}
{{--    <link rel="stylesheet" href="{{asset('couresel')}}/css/style.css">--}}

{{--    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400&display=swap" rel="stylesheet">--}}

{{--    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500&display=swap" rel="stylesheet">--}}

{{--    <link href="https://fonts.googleapis.com/css?family=Arbutus+Slab&display=swap" rel="stylesheet">--}}

{{--    <link rel="stylesheet" href="{{asset('couresel')}}/fonts/icomoon/style.css">--}}

{{--    <link rel="stylesheet" href="{{asset('couresel')}}/css/owl.carousel.min.css">--}}

{{--    <link rel="stylesheet" href="{{asset('couresel')}}/css/animate.css">--}}

{{--    <!-- Bootstrap CSS -->--}}
{{--    <link rel="stylesheet" href="{{asset('couresel')}}/css/bootstrap.min.css">--}}

    @yield('head')
</head>
<body class="barber_version">
<!-- LOADER -->
<div id="preloader">
    <div class="cube-wrapper">
        <div class="cube-folding">
            <span class="leaf1"></span>
            <span class="leaf2"></span>
            <span class="leaf3"></span>
            <span class="leaf4"></span>
        </div>
        <div class="mus">
            <img src="images/lode-img.png" alt=""/>
        </div>
        <span class="loading" data-name="Loading">BeautyCenter Loading</span>
    </div>
</div><!-- end loader -->
<!-- END LOADER -->


<!-- Start header -->
<!-- End header -->

@yield('content')

<a href="#" id="scroll-to-top" class="dmtop global-radius"><i class="fa fa-angle-up"></i></a>
@include('home.footer')
@yield('foot')
</body>
</html>
