@extends('layouts.front-base')

@section('title', $setting->title )
@section('description', $setting->description)
@section('keywords', $setting->keywords)
@section('icon', 'Beuaty-Center icon')
@include('home.header')
@section('content')

    <!-- Page Content -->
    <div id="page-content-wrapper">


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

        <div class="copyrights">
            <div class="container">
                <div class="footer-distributed">
                    <div class="footer-left">
                        <p class="footer-links">
                            <a href="{{route('home')}}">Home</a>
                            <a href="{{route('contact')}}">Contact</a>
                            <a href="{{route('faq')}}">Faq</a>
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
