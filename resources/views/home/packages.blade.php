@extends('layouts.front-base')

@section('title',)

@section('content')
    {{--    @include('home.header')--}}
    <!--==============================header=================================-->
    <header>
        <div class="clear"></div>
        {{--        <div class="container_12">--}}
        {{--            <div class="grid_12">--}}
        {{--                <h1>--}}
        {{--                    <a href="index.html">--}}
        {{--                        <img src="{{asset('assets')}}/images/logo.png" alt="Your Happy Family">--}}
        {{--                    </a>--}}
        {{--                </h1>--}}
        {{--            </div>--}}
        {{--        </div>--}}
        <div class="clear"></div>
        <div class="menu_block">
            <div class="container_12">
                <div class="grid_12">
                    <nav class="horizontal-nav full-width horizontalNav-notprocessed">
                        <ul class="sf-menu">
                            <li class="current"><a href="index.html">Home</a></li>
                            <li><a href="index-1.html">Services</a></li>
                            <li><a href="index-2.html">Staff</a></li>
                            <li><a href="index-3.html">Prices</a></li>
                            <li><a href="index-4.html">Contacts</a></li>
                        </ul>
                    </nav>
                    <div class="clear"></div>
                </div>
                <div class="clear"></div>
            </div>
        </div>
    </header>
    <div class="slider_wrapper" style="height: 256px !important;">
        <div id="camera_wrap" class="camera_wrap" style="display: block; margin-bottom: 16px; height: 531px;">
            <div class="camera_fakehover">
                <div class="camera_src camerastarted paused hovered">

                </div>
                <div class="camera_target">
                    <div class="cameraCont">
                        <div class="cameraSlide cameraSlide_0 cameracurrent"
                             style="visibility: visible; display: block; z-index: 999;"><img
                                src="{{Storage::url($data->image)}}" class="imgLoaded"
                                style="visibility: visible; height: 1561.79px; margin-left: 0px; margin-top: 0px; position: absolute; width: 1519px;"
                                data-alignment="" data-portrait="" width="71" height="73">
                            <div class="camerarelative" style="width: 1519px; height: 531px;"></div>
                        </div>
                        <div class="cameraSlide cameraSlide_1 cameranext" style="display: none;"><img
                                src="images/spacer.png?1654618550492" class="imgLoaded" data-alignment=""
                                data-portrait="" width="71" height="73"
                                style="visibility: visible; height: 1561.79px; margin-left: 0px; margin-top: 0px; position: absolute; width: 1519px;">
                            <div class="camerarelative" style="width: 1519px; height: 531px;"></div>
                        </div>
                        <div class="cameraSlide cameraSlide_2">
                            <div class="camerarelative" style="width: 1519px; height: 531px;"></div>
                        </div>
                        <div class="cameraSlide cameraSlide_3" style="z-index: 1; display: none;">
                            <div class="camerarelative" style="width: 1519px; height: 531px;"></div>
                        </div>
                    </div>
                </div>
                <div class="camera_overlayer"></div>
                <div class="camera_target_content">
                    <div class="cameraContents">
                        <div class="cameraContent cameracurrent" style="display: block;">
                            <div class="caption fadeIn" style="visibility: visible; opacity: 1;">
                                <h2 style="color: white"><br>{{$data->type}}</h2>
                            </div>
                        </div>
                        <div class="cameraContent"></div>
                        <div class="cameraContent"></div>
                    </div>
                </div>
                <div class="camera_bar" style="display: none; top: auto; height: 7px;"><span class="camera_bar_cont"
                                                                                             style="opacity: 0.8; position: absolute; inset: 0px; background-color: rgb(34, 34, 34);"><span
                            id="pie_0"
                            style="opacity: 0.8; position: absolute; background-color: rgb(238, 238, 238); inset: 2px 0px; display: none;"></span></span>
                </div>
                <div class="camera_commands">
                    <div class="camera_play" style="display: block;"></div>
                    <div class="camera_stop" style="display: none;"></div>
                </div>
            </div>
            <div class="camera_thumbs_cont" style="visibility: visible;"></div>
            <div class="camera_pag">

            </div>
            <div class="camera_loader" style="display: none;"></div>
        </div>
    </div>

    {{--details info--}}
    <div class="cont_wrapper">
        <div class="content" style="background-color: white !important;">
            <div class="ic">More Website Templates @ TemplateMonster.com - January 13, 2014!</div>
            <div class="container_12" style="background-color: white !important;">
                <div class="grid_12" style="background-color: white !important;">
                    <h3>Package Details</h3>
                    <div class="text2" style="color:white!important;">
                        {{$data->detail}}
                    </div>
                </div>
            </div>
            <div class="clear"></div>
        </div>
    </div>
    {{--    <div class="slider_wrapper">--}}
    {{--        <div id="camera_wrap" class="camera_wrap" style="display: block; margin-bottom: 16px; height: 531px;"><div class="camera_fakehover"><div class="camera_src camerastarted hovered">--}}
    {{--                    <div data-src="images/spacer.png">--}}

    {{--                    </div>--}}
    {{--                    <div data-src="images/spacer.png">--}}

    {{--                    </div>--}}
    {{--                    <div data-src="images/spacer.png">--}}

    {{--                    </div>--}}
    {{--                </div><div class="camera_target"><div class="cameraCont"><div class="cameraSlide cameraSlide_0" style="visibility: visible; display: none; z-index: 1;"><img src="images/spacer.png?1654617662171" class="imgLoaded" style="visibility: visible; height: 1561.79px; margin-left: 0px; margin-top: 0px; position: absolute; width: 1519px;" data-alignment="" data-portrait="" width="71" height="73"><div class="camerarelative" style="width: 1519px; height: 531px;"></div></div><div class="cameraSlide cameraSlide_1 cameracurrent" style="display: block; z-index: 999;"><img src="images/spacer.png?1654617662216" class="imgLoaded" data-alignment="" data-portrait="" width="71" height="73" style="visibility: visible; height: 1561.79px; margin-left: 0px; margin-top: 0px; position: absolute; width: 1519px;"><div class="camerarelative" style="width: 1519px; height: 531px;"></div></div><div class="cameraSlide cameraSlide_2 cameranext" style="display: none; z-index: 1;"><img src="images/spacer.png?1654617673439" class="imgLoaded" data-alignment="" data-portrait="" width="71" height="73" style="visibility: visible; height: 1561.79px; margin-left: 0px; margin-top: 0px; position: absolute; width: 1519px;"><div class="camerarelative" style="width: 1519px; height: 531px;"></div></div><div class="cameraSlide cameraSlide_3 cameranext" style="z-index: 1; display: none;"><div class="camerarelative" style="width: 1519px; height: 531px;"></div></div></div></div><div class="camera_overlayer"></div><div class="camera_target_content"><div class="cameraContents"><div class="cameraContent" style="display: none;"><div class="caption fadeIn" style="visibility: hidden; opacity: 1;">--}}
    {{--                                <h2>It’s Time to Relax &amp; Take <br> Care of Yourself</h2>--}}
    {{--                            </div></div><div class="cameraContent cameracurrent" style="display: block;"><div class="caption fadeIn" style="visibility: visible; opacity: 1;">--}}
    {{--                                <h2>We Serve You for <br>--}}
    {{--                                    All Your Beauty Needs</h2>--}}
    {{--                            </div></div><div class="cameraContent" style="display: none;"><div class="caption fadeIn" style="visibility: hidden; opacity: 1;">--}}
    {{--                                <h2>Your Beauty Starts Here</h2>--}}
    {{--                            </div></div></div></div><div class="camera_bar" style="display: none; top: auto; height: 7px;"><span class="camera_bar_cont" style="opacity: 0.8; position: absolute; inset: 0px; background-color: rgb(34, 34, 34);"><span id="pie_0" style="opacity: 0.8; position: absolute; background-color: rgb(238, 238, 238); inset: 2px 0px; display: block;"></span></span></div><div class="camera_commands"><div class="camera_play" style="display: none;"></div><div class="camera_stop" style="display: block;"></div></div></div><div class="camera_thumbs_cont" style="visibility: visible;"></div><div class="camera_pag"><ul class="camera_pag_ul"><li class="pag_nav_0" style="position:relative; z-index:1002"><span><span>0</span></span><img src="undefined" class="camera_thumb" style="position: absolute; opacity: 0;"><div class="thumb_arrow" style="opacity: 0;"></div></li><li class="pag_nav_1 cameracurrent" style="position:relative; z-index:1002"><span><span>1</span></span><img src="undefined" class="camera_thumb" style="position: absolute; opacity: 0;"><div class="thumb_arrow" style="opacity: 0;"></div></li><li class="pag_nav_2" style="position:relative; z-index:1002"><span><span>2</span></span><img src="undefined" class="camera_thumb" style="position: absolute; opacity: 0;"><div class="thumb_arrow" style="opacity: 0;"></div></li></ul></div><div class="camera_loader" style="display: none; visibility: visible;"></div></div>--}}
    {{--    </div>--}}

    {{--    ek olarak--}}

    {{--    <div class="cont_wrapper">--}}
    {{--        <div class="content">--}}
    {{--            oljkfakljdkfajdfklj--}}
    {{--        </div>--}}
    {{--    </div>--}}
@endsection
