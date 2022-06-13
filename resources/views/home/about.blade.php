@extends('layouts.front-base')

@section('title', $setting->title )
@section('description', $setting->description)
@section('keywords', $setting->keywords)
@section('icon', 'Beuaty-Center icon')
@include('home.header')
@section('content')

    <!-- Page Content -->
    <div id="page-content-wrapper">
        <div class="all-page-bar">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="title title-1 text-center">
                            <div class="much">
                                <img src="{{asset('assets')}}/uploads/mustache.png" alt=""/>
                            </div>

                            <div class="title--heading">
                                <h1>About</h1>
                            </div>
                            <div class="clearfix"></div>

                            <ol class="breadcrumb">
                                <li><a href="{{route('home')}}">Home</a></li>
                                <li class="active">About</li>
                            </ol>
                        </div>
                        <!-- .title end -->
                    </div>
                </div>
            </div>
        </div><!-- end all-page-bar -->

        <div class="section wb">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-6 text-left">
                        <div class="message-box">
                            {!! $setting->aboutus !!}
                        </div><!-- end messagebox -->
                    </div><!-- end col -->

                </div><!-- end row -->

                <hr class="hr1">

                <hr class="hr1">

                <div class="row text-center">

                </div><!-- end row -->
            </div><!-- end container -->
        </div><!-- end section -->

        <div id="testimonials" class="parallax section db parallax-inner-bg">
            <div class="container">
                <div class="section-title row text-center">

                </div><!-- end title -->

                <div class="row">

                </div><!-- end row -->
            </div><!-- end container -->
        </div><!-- end section -->

        <div class="copyrights">
            <div class="container">
                <div class="footer-distributed">
                    <div class="footer-left">
                        <p class="footer-links">
                            <a href="{{route('home')}}">Home</a>
                            <a href="#">Blog</a>
                            <a href="#">Pricing</a>
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
