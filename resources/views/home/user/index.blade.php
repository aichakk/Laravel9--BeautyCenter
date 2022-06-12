@extends('layouts.front-base')

@section('title', 'user panel' )
@include('home.header')
@section('content')

    <!-- Page Content -->
    <div id="page-content-wrapper">
        <div class="all-page-bar">
            <div class="container">

            </div>
            <!-- About Start -->
            <div class="container py-5">
                <div class="row">
                    <div class="col-md-6">
                        <h4 class="display-4 mb-3 mt-0 mt-lg-5 text-black text-uppercase font-weight-bold">My
                            Dashboard</h4>
                        <hr style="color: black">
                        @include('home.user.menu')

                    </div>
                    <div class="col-md-6">
                        <h4 class="display-4 mb-3 mt-0 mt-lg-5 text-black-50 text-uppercase font-weight-bold">My
                            info</h4>
                        <hr>
                        @include('profile.show')

                    </div>
                </div>
            </div>
            <!-- About End -->


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
