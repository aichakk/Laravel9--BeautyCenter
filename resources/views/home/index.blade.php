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
    <div id="page-content-wrapper">
        <div class="section wb">
            <div class="container">
                <div class="row align-items-center">


                </div><!-- end row -->

                <hr class="hr1">

                <div class="row">
                    <div class="col-md-12">
                        <div class="about-tab">
                            <ul class="nav nav-pills nav-justified" id="myTab" role="tablist">
                                <li class="nav-item"><a class="nav-link active" href="#tab_a" data-toggle="tab">Our Mission</a></li>
                                <li class="nav-item"><a class="nav-link" href="#tab_b" data-toggle="tab">Why Us?</a></li>
                                <li class="nav-item"><a class="nav-link" href="#tab_c" data-toggle="tab">About Us</a></li>
                            </ul>
                            <div class="tab-content">
                                <div class="tab-pane fade show active" id="tab_a">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi scelerisque tortor mi, eget mattis velit sagittis id. Duis ornare mauris eu eros interdum, vitae finibus arcu ultricies. Donec vitae felis eleifend, dignissim erat a, pretium diam. Donec eu massa odio. Suspendisse et ornare lacus, pharetra imperdiet ligula.</p>
                                    <p>Vestibulum ac quam id lorem semper condimentum. Nulla vel ligula turpis. Nullam luctus, mi nec rhoncus gravida, tortor est semper purus, a feugiat sapien odio non urna. Fusce pellentesque neque ut nisi rhoncus imperdiet. Sed eu purus vel turpis consectetur convallis. Donec a dolor tellus. Phasellus dignissim erat nec ipsum condimentum sollicitudin. </p>
                                </div>
                                <div class="tab-pane fade" id="tab_b">
                                    <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text.</p>
                                    <ul>
                                        <li><i class="fa fa-circle-o" aria-hidden="true"></i>User Experince</li>
                                        <li><i class="fa fa-circle-o" aria-hidden="true"></i>Full Devices</li>
                                        <li><i class="fa fa-circle-o" aria-hidden="true"></i>Awesome Design</li>
                                        <li><i class="fa fa-circle-o" aria-hidden="true"></i>Visual Impact</li>
                                        <li><i class="fa fa-circle-o" aria-hidden="true"></i>100% Sincronized</li>
                                        <li><i class="fa fa-circle-o" aria-hidden="true"></i>Custom Support</li>
                                    </ul>
                                </div>
                                <div class="tab-pane fade" id="tab_c">
                                    <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text.</p>
                                </div>
                            </div><!-- tab content -->
                        </div>
                    </div><!-- end col -->
                </div><!-- end row -->

                <hr class="hr1">


            </div><!-- end container -->
        </div><!-- end section -->

        <div id="pricing" class="section lb">
            <div class="container">
                <div class="section-title row text-center">

                </div><!-- end title -->
                <div class="row flex-items-xs-middle flex-items-xs-center">

                    <!-- Table #1  -->
                    <div class="col-xs-12 col-lg-4">
                        <div class="card text-center">
                            <div class="card-block">
                                <h4 class="card-title pricing-ti">
                                    Shaving
                                </h4>
                                <div class="line-pricing">
                                    <h5>Lorem ipsum dolor</h5>
                                    <p>Donec eu diam ante. Nam non porta ipsum, nec tristique odio. Etiam vel libero non massa rutrum molestie non non ipsum.</p>
                                    <a href="#">$ 5</a>
                                </div>
                                <div class="line-pricing">
                                    <h5>Lorem ipsum dolor</h5>
                                    <p>Donec eu diam ante. Nam non porta ipsum, nec tristique odio. Etiam vel libero non massa rutrum molestie non non ipsum.</p>
                                    <a href="#">$ 10</a>
                                </div>
                                <div class="line-pricing">
                                    <h5>Lorem ipsum dolor</h5>
                                    <p>Donec eu diam ante. Nam non porta ipsum, nec tristique odio. Etiam vel libero non massa rutrum molestie non non ipsum.</p>
                                    <a href="#">$ 15</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Table #1  -->
                    <div class="col-xs-12 col-lg-4">
                        <div class="card text-center">
                            <div class="card-block">
                                <h4 class="card-title pricing-ti">
                                    Face Masking
                                </h4>
                                <div class="line-pricing">
                                    <h5>Lorem ipsum dolor</h5>
                                    <p>Donec eu diam ante. Nam non porta ipsum, nec tristique odio. Etiam vel libero non massa rutrum molestie non non ipsum.</p>
                                    <a href="#">$ 5</a>
                                </div>
                                <div class="line-pricing">
                                    <h5>Lorem ipsum dolor</h5>
                                    <p>Donec eu diam ante. Nam non porta ipsum, nec tristique odio. Etiam vel libero non massa rutrum molestie non non ipsum.</p>
                                    <a href="#">$ 10</a>
                                </div>
                                <div class="line-pricing">
                                    <h5>Lorem ipsum dolor</h5>
                                    <p>Donec eu diam ante. Nam non porta ipsum, nec tristique odio. Etiam vel libero non massa rutrum molestie non non ipsum.</p>
                                    <a href="#">$ 15</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Table #1  -->
                    <div class="col-xs-12 col-lg-4">
                        <div class="card text-center">
                            <div class="card-block">
                                <h4 class="card-title pricing-ti">
                                    Hair Styling
                                </h4>
                                <div class="line-pricing">
                                    <h5>Lorem ipsum dolor</h5>
                                    <p>Donec eu diam ante. Nam non porta ipsum, nec tristique odio. Etiam vel libero non massa rutrum molestie non non ipsum.</p>
                                    <a href="#">$ 5</a>
                                </div>
                                <div class="line-pricing">
                                    <h5>Lorem ipsum dolor</h5>
                                    <p>Donec eu diam ante. Nam non porta ipsum, nec tristique odio. Etiam vel libero non massa rutrum molestie non non ipsum.</p>
                                    <a href="#">$ 10</a>
                                </div>
                                <div class="line-pricing">
                                    <h5>Lorem ipsum dolor</h5>
                                    <p>Donec eu diam ante. Nam non porta ipsum, nec tristique odio. Etiam vel libero non massa rutrum molestie non non ipsum.</p>
                                    <a href="#">$ 15</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div id="barbers" class="section lb">
            <div class="container">
                <div class="section-title row text-center">
                    <div class="col-md-8 offset-md-2">
                        <small>K</small>
                        <h3>OUR BARBERS</h3>
                    </div>
                </div><!-- end title -->

                <div class="row dev-list text-center">
                    <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 wow fadeIn" data-wow-duration="1s" data-wow-delay="0.2s">
                        <div class="widget our-inner-taem clearfix">
                            <div class="t-top"></div>
                            <div class="hover-br">
                                <img src="{{asset('assets')}}/uploads/barber_team_01.jpg" alt="" class="img-responsive">
                                <div class="social-up-hover">
                                    <div class="footer-social">
                                        <a href="#" class="btn grd1"><i class="fa fa-facebook"></i></a>
                                        <a href="#" class="btn grd1"><i class="fa fa-github"></i></a>
                                        <a href="#" class="btn grd1"><i class="fa fa-twitter"></i></a>
                                        <a href="#" class="btn grd1"><i class="fa fa-linkedin"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="team-box">
                                <div class="widget-title">
                                    <h3>Soren Bo Bostian</h3>
                                    <small>The Founder</small>
                                </div>
                                <!-- end title -->
                                <p>Hello guys, I am Soren from Sirbistana. I am senior art director and founder of The Barber Shop Company.</p>
                            </div>
                            <div class="t-bottom"></div>
                        </div><!--widget -->
                    </div><!-- end col -->

                    <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 wow fadeIn" data-wow-duration="1s" data-wow-delay="0.4s">
                        <div class="widget our-inner-taem clearfix">
                            <div class="t-top"></div>
                            <div class="hover-br">
                                <img src="{{asset('assets')}}/uploads/barber_team_03.jpg" alt="" class="img-responsive">
                                <div class="social-up-hover">
                                    <div class="footer-social">
                                        <a href="#" class="btn grd1"><i class="fa fa-facebook"></i></a>
                                        <a href="#" class="btn grd1"><i class="fa fa-github"></i></a>
                                        <a href="#" class="btn grd1"><i class="fa fa-twitter"></i></a>
                                        <a href="#" class="btn grd1"><i class="fa fa-linkedin"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="team-box">
                                <div class="widget-title">
                                    <h3>Bryan Saftler</h3>
                                    <small>The Barber</small>
                                </div>
                                <!-- end title -->
                                <p>Hello guys, I am Soren from Sirbistana. I am senior art director and barber of the Barber Shop Market.</p>
                            </div>
                            <div class="t-bottom"></div>
                        </div><!--widget -->
                    </div><!-- end col -->

                    <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 wow fadeIn" data-wow-duration="1s" data-wow-delay="0.6s">
                        <div class="widget our-inner-taem clearfix">
                            <div class="t-top"></div>
                            <div class="hover-br">
                                <img src="{{asset('assets')}}/uploads/barber_team_02.jpg" alt="" class="img-responsive">
                                <div class="social-up-hover">
                                    <div class="footer-social">
                                        <a href="#" class="btn grd1"><i class="fa fa-facebook"></i></a>
                                        <a href="#" class="btn grd1"><i class="fa fa-github"></i></a>
                                        <a href="#" class="btn grd1"><i class="fa fa-twitter"></i></a>
                                        <a href="#" class="btn grd1"><i class="fa fa-linkedin"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="team-box">
                                <div class="widget-title">
                                    <h3>Matthew Bayliss</h3>
                                    <small>The Barber</small>
                                </div>
                                <!-- end title -->
                                <p>Hello guys, I am Soren from Sirbistana. I am senior art director and barber of the
                                    Barber Shop Website.</p>
                            </div>
                            <div class="t-bottom"></div>
                        </div><!--widget -->
                    </div><!-- end col -->
                </div><!-- end row -->
            </div><!-- end container -->
        </div><!-- end section -->

        {{--        <div id="testimonials" class="parallax section db parallax-inner-bg"   style=" background: url('{{asset('assets')}}/uploads/parallax_20.jpg') no-repeat top center;  background-size: cover;     background-attachment: fixed;">--}}
        {{--            <div class="container">--}}
        {{--                <div class="section-title row text-center">--}}
        {{--                    <div class="col-md-8 offset-md-2">--}}
        {{--                        <small>LET'S SEE OUR TESTIMONIALS</small>--}}
        {{--                        <h3>HAPPY TESTIMONIALS</h3>--}}
        {{--                    </div>--}}
        {{--                </div><!-- end title -->--}}

        {{--                <div class="row">--}}
        {{--                    <div class="col-md-12 col-sm-12">--}}
        {{--                        <div class="testi-carousel owl-carousel owl-theme">--}}
        {{--                            <div class="testimonial clearfix">--}}
        {{--                                <div class="testi-meta">--}}
        {{--                                    <i class="fa fa-quote-right"></i>--}}
        {{--                                    <img src="{{asset('assets')}}/uploads/testi_01.png" alt="" class="img-responsive alignright">--}}
        {{--                                    <h4>James Fernando <small>- Manager of Racer</small></h4>--}}
        {{--                                </div>--}}
        {{--                                <div class="desc">--}}
        {{--                                    <h3>Wonderful Support!</h3>--}}
        {{--                                    <p class="lead">They have got my project on time with the competition with a sed highly skilled, and experienced & professional team.</p>--}}
        {{--                                </div>--}}
        {{--                                <!-- end testi-meta -->--}}
        {{--                            </div>--}}
        {{--                            <!-- end testimonial -->--}}
        {{--                            <div class="testimonial clearfix">--}}
        {{--                                <div class="testi-meta">--}}
        {{--                                    <i class="fa fa-quote-right"></i>--}}
        {{--                                    <img src="{{asset('assets')}}/uploads/testi_02.png" alt="" class="img-responsive alignright">--}}
        {{--                                    <h4>Jacques Philips <small>- Designer</small></h4>--}}
        {{--                                </div>--}}
        {{--                                <div class="desc">--}}
        {{--                                    <h3>Awesome Services!</h3>--}}
        {{--                                    <p class="lead">Explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you completed.</p>--}}
        {{--                                </div>--}}
        {{--                                <!-- end testi-meta -->--}}
        {{--                            </div>--}}
        {{--                            <!-- end testimonial -->--}}
        {{--                            <div class="testimonial clearfix">--}}
        {{--                                <div class="testi-meta">--}}
        {{--                                    <i class="fa fa-quote-right"></i>--}}
        {{--                                    <img src="{{asset('assets')}}/uploads/testi_03.png" alt="" class="img-responsive alignright">--}}
        {{--                                    <h4>Venanda Mercy <small>- Newyork City</small></h4>--}}
        {{--                                </div>--}}
        {{--                                <div class="desc">--}}
        {{--                                    <h3>Great & Talented Team!</h3>--}}
        {{--                                    <p class="lead">The master-builder of human happines no one rejects, dislikes avoids pleasure itself, because it is very pursue pleasure. </p>--}}
        {{--                                </div>--}}
        {{--                                <!-- end testi-meta -->--}}
        {{--                            </div>--}}
        {{--                            <!-- end testimonial -->--}}
        {{--                            <div class="testimonial clearfix">--}}
        {{--                                <div class="testi-meta">--}}
        {{--                                    <i class="fa fa-quote-right"></i>--}}
        {{--                                    <img src="{{asset('assets')}}/uploads/testi_03.png" alt="" class="img-responsive alignright">--}}
        {{--                                    <h4>Venanda Mercy <small>- Newyork City</small></h4>--}}
        {{--                                </div>--}}
        {{--                                <div class="desc">--}}
        {{--                                    <h3> Great & Talented Team!</h3>--}}
        {{--                                    <p class="lead">The master-builder of human happines no one rejects, dislikes avoids pleasure itself, because it is very pursue pleasure. </p>--}}
        {{--                                </div>--}}
        {{--                                <!-- end testi-meta -->--}}
        {{--                            </div>--}}
        {{--                            <!-- end testimonial -->--}}
        {{--                        </div><!-- end carousel -->--}}
        {{--                    </div><!-- end col -->--}}
        {{--                </div><!-- end row -->--}}
        {{--            </div><!-- end container -->--}}
        {{--        </div><!-- end section -->--}}

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
                        <p class="footer-company-name">All Rights Reserved. &copy; 2018 <a href="#">StyleBarber</a> Design By : <a href="https://html.design/">html design</a></p>
                    </div>
                </div>
            </div><!-- end container -->
        </div><!-- end copyrights -->
    </div>
@endsection
