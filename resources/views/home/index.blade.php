@extends('layouts.front-base')

@section('title', 'BeautyCenter')

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


        <div class="copyrights">
            <div class="container">
                <div class="footer-distributed">
                    <div class="footer-left">
                        <p class="footer-links">
                            <a href="{{route('home')}}">Home</a>
                            <a href="{{route('services')}}">Our services</a>
                            <a href="{{route('about')}}">About us</a>
                            <a href="{{route('about')}}">Appointment</a>
                            <a href="#">About</a>
                            <a href="#">Faq</a>
                            <a href="#">Contact</a>
                        </p>
                        <p class="footer-company-name">All Rights Reserved. &copy; 2018 <a href="#">StyleBarber</a>
                            Design By : <a href="https://html.design/">html design</a></p>
                    </div>
                </div>
            </div><!-- end container -->
        </div><!-- end copyrights -->
    </div>
@endsection
