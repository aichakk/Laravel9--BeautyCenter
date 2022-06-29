@extends('layouts.front-base')

<style>
    .main {
        width: 55vw;
        background: inherit;
        margin: auto;
        position: relative;
        top: 8vh;
        height: auto;
        padding: 2vw;
        padding-top: 5vw;
        padding-bottom: 10vw;
    }

    body {
        background-color: grey;
        font-family: 'Titillium Web', sans-serif;
    }

    .sec {
        font-size: 1.5vw;
        width: 60%;
        background-color: orange;
        padding: 1.5vw;
        height: 20%;
        cursor: pointer;
        margin-top: 0.5vw;
        background-color: #eeeeee;
        text-align: left;
        color: black;
    }

    .sec:hover {
        width: 100%;
        padding: 2vw;
        animation-name: rotate;
        animation-duration: 1s;
        animation-fill-mode: forwards;
        animation-iteration-count: 1;
    }


    .fa {
        float: right;
    }

    .collapsable {
        width: 100%;
        background-color: pink;
        padding: 2vw;
        font-size: 1.2vw;
        display: none;
        color: #757575;
        background-color: white;
    }

    .sec i {
        font-size: 2vw;
        color: #616161;
    }

    @media only screen and (max-width: 425px) {
        .main {
            width: 90vw;
        }

        .sec {
            font-size: 4.5vw;
            width: 100%;
            padding: 4.5vw;
            margin-top: 1.5vw;
        }

        .sec:hover {
            width: 110%;
            padding: 6vw;
        }

        .collapsable {
            width: 100%;
            padding: 6vw;
            font-size: 3.6vw;
            display: none;
        }

        .sec i {
            font-size: 6vw;
        }
    }
</style>
@section('title', 'BeautyCenter')
@section('head')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script>
        $(document).ready(function () {
            $(".sec").click(function () {
                $(this).next(".collapsable").slideToggle();


            });

            $(".sec").mouseenter(function () {
                $(this).addClass("z-depth-4");
                $(this).next(".collapsable").css({"width": "110%"});
            });
            $(".sec").mouseleave(function () {
                $(this).removeClass("z-depth-4");
                $(this).next(".collapsable").css({"width": "100%"});
            });

        });
    </script>

@endsection
@include('home.header')
@section('content')
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        </ol>
        <div class="carousel-inner">
            @foreach($sliderData as $key => $slider)
                <div class="carousel-item {{$key == 0 ? 'active' : '' }}">
                    <img src="{{Storage::url($slider->image)}}" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                    <h3 class="text-primary text-capitalize m-0">Beauty Center</h3>
                    <h2 class="display-2 m-0 mt-2 mt-md-4 text-white font-weight-bold text-capitalize">Be Happy With
                        Us</h2>
                    <a href="/register" class="btn btn-lg btn-outline-light mt-3 mt-md-5 py-md-3 px-md-5">Register
                        Now</a>
                </div>
            @endforeach
        </div>
        <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true">     </span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
    </div>
    <!-- Carousel End -->
    {{--<div id="home" class="parallax">--}}
    {{--    <div id="full-width" class="owl-carousel owl-theme home-hero">--}}
    {{--        <div class="text-center item slider-01 display-table overlay">--}}
    {{--            <div class="display-table-cell">--}}
    {{--                <div class="big-tagline text-center">--}}
    {{--                    <h2><strong>The Beauty center Shop</strong><br>--}}
    {{--                        in New York</h2>--}}
    {{--                    <p class="lead">With SMbeauty center responsive landing page template, <br>you can showcase your next beauty center shop websites!</p>--}}
    {{--                    <a href="#" class="btn btn-light btn-radius btn-brd grd1 effect-1 butn">Contact US</a>--}}
    {{--                </div>--}}
    {{--            </div>--}}
    {{--        </div>--}}
    {{--        <div class="text-center item slider-02 display-table overlay">--}}
    {{--            <div class="display-table-cell">--}}
    {{--                <div class="big-tagline text-center">--}}
    {{--                    <h2><strong>The beauty center Shop</strong><br>--}}
    {{--                        in New York</h2>--}}
    {{--                    <p class="lead">With SMbeauty center responsive landing page template, <br>you can showcase your next beauty center shop websites!</p>--}}
    {{--                    <a href="#" class="btn btn-light btn-radius btn-brd grd1 effect-1 butn">Contact US</a>--}}
    {{--                </div>--}}
    {{--            </div>--}}
    {{--        </div>--}}
    {{--        <div class="text-center item slider-03 display-table overlay">--}}
    {{--            <div class="display-table-cell">--}}
    {{--                <div class="big-tagline text-center">--}}
    {{--                    <h2><strong>The beauty center Shop</strong><br>--}}
    {{--                        in New York</h2>--}}
    {{--                    <p class="lead">With SMbeauty center responsive landing page template, <br>you can showcase your next beauty center shop websites!</p>--}}
    {{--                    <a href="#" class="btn btn-light btn-radius btn-brd grd1 effect-1 butn">Contact US</a>--}}
    {{--                </div>--}}
    {{--            </div>--}}
    {{--        </div>--}}
    {{--    </div>--}}
    {{--</div><!-- end section -->--}}

    <!-- Page Content -->
    <div id="page-content-wrapper" class="container">
        <h1 style="background-color: hotpink">
            Our services
        </h1>

        <div class="row">
            @foreach($packagesData as $pd)

                <div class="col-lg-3 col-md-6 mb-5">

                    <div class="service-wrap text-center clearfix">
                        <div class="uptop">
                            <img src="{{Storage::url($pd->image)}}" alt=""
                                 class="img-responsive img-rounded alignleft">
                        </div>
                        <h4>{{$pd->type}}</h4>
                        <h4>{{$pd->price}}</h4>
                        <a href="{{route('package',['id'=>$pd->id])}}">
                            <p>MORE DETAILS</p>
                        </a>
                        <a href="{{route('appointment',['id'=>$pd->id])}}">
                            <p>MAKE AN APPOINTMENT</p>
                        </a>
                    </div><!-- end issue -->

                </div><!-- end col -->
            @endforeach
        </div>
        <div class="section wb">
            <div class="container">
                <div class="row align-items-center">


                </div><!-- end row -->


            </div><!-- end container -->
        </div><!-- end section -->

        <div class="team">
            <div class="container">
                <div class="section-header text-center">
                    <h1 style="background-color: hotpink">Frequently Asked Questions</h1>
                </div>
                <div class="accordian">
                    @foreach($datalist as $rs)
                        <div class="sec">
                            <span class="section">{{$rs->question}}</span>
                        </div>
                        <div id="colp1" class="collapsable">
                            {!! $rs->answer !!}
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>

    <div class="copyrights">
        <div class="container">
            <div class="footer-distributed">
                <div class="footer-left">
                    <p class="footer-links">
                        <a href="{{route('home')}}">Home</a>
                        <a href="{{route('about')}}">About us</a>
                        <a href="{{route('contact')}}">Contact</a>
                        <a href="{{route('references')}}">References</a>
                    </p>
                    <p class="footer-company-name">All Rights Reserved. &copy; 2018 <a href="#">StyleBarber</a>
                        Design By : <a href="https://html.design/">html design</a></p>
                </div>
            </div>
        </div><!-- end container -->
    </div><!-- end copyrights -->
    </div>
@endsection
