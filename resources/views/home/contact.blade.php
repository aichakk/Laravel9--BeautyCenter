@extends('layouts.front-base')

@section('title', 'contact '.$setting->title )
@section('description', $setting->description)
@section('keywords', $setting->keywords)
@section('icon', 'BeautyCenter-icon')
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
                                <h1>Contact</h1>
                            </div>
                            <div class="clearfix"></div>

                            <ol class="breadcrumb">
                                <li><a href="{{route('home')}}">Home</a></li>
                                <li class="active">Contact</li>
                            </ol>
                        </div>
                        <!-- .title end -->
                    </div>
                </div>
            </div>
        </div><!-- end all-page-bar -->

        <div id="contact" class="section wb">
            <div class="container">
                <div class="section-title row text-center">
                    <div class="col-md-8 offset-md-2">
                        <small>LET'S GET IN TOUCH</small>
                        <h3>Contact</h3>
                    </div>
                </div><!-- end title -->

                <div class="row">
                    <div class="col-md-8 offset-md-2">
                        <div class="contact_form">
                            <div id="message"></div>
                            <h2>@include('home.message')</h2>
                            <form class="row" action="{{route('storemessage')}}" enctype="multipart/form-data"
                                  method="post">
                                @csrf

                                <fieldset class="row row-fluid">

                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                        <input type="text" id="first_name" name="name" class="form-control"
                                               placeholder="First Name">
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                        <input type="text" name="last_name" id="last_name" class="form-control"
                                               placeholder="Last Name">
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                        <input type="email" name="email" id="email" name="email" class="form-control"
                                               placeholder="Your Email">
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                        <input type="text" name="phone" id="phone" name="phone" class="form-control"
                                               placeholder="Your Phone">
                                    </div>
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <textarea class="form-control " name="comments" id="comments" name="message"
                                                  rows="6" placeholder="Give us more details.."></textarea>
                                    </div>
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center">

                                        @auth
                                            <button type="submit" value="SEND" id="submit"
                                                    class="btn btn-light btn-radius btn-brd grd1 btn-block subt">Submit
                                            </button>
                                        @endauth
                                        {{--                    //if we are log in we can log out,we are already a register--}}

                                        @guest()
                                            <a href="/register" class="nav-item nav-link">Please login then send</a>
                                        @endguest
                                    </div>
                        </div>
                        </fieldset>
                        </form>
                    </div>
                </div><!-- end col -->
            </div><!-- end row -->
        </div><!-- end container -->
    </div><!-- end section -->

    <div class="map-box">
        <div class="container-fluid">
            <div id="map"></div>
        </div><!-- end container -->
    </div><!-- end section -->

    <div class="copyrights">
        <div class="container">
            <div class="footer-distributed">
                <div class="footer-left">
                    <p class="footer-links">
                        <a href="#">Home</a>
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
