@extends('layouts.front-base')

@section('title', 'services')

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
                            <h1>Our Services</h1>
                        </div>
                        <div class="clearfix"></div>

                        <ol class="breadcrumb">
                            <li><a href="{{route('home')}}">Home</a></li>
                            <li class="active">Our Services</li>
                        </ol>
                    </div>
                    <!-- .title end -->
                </div>
            </div>
        </div>
    </div><!-- end all-page-bar -->

    <div id="services" class="section lb">
        <div class="container">
            <div class="section-title row text-center">
                <div class="col-md-8 offset-md-2">
                    <small>WELCOME TO THE OUR AVAILABLE SERVICES</small>
                    <h3>OUR SERVICES</h3>
                    <hr class="grd1">
                    <p class="lead">get the best deals with our awsome avialable beauty center services...</p>
                </div>
            </div><!-- end title -->

            <div class="row">
                @foreach($packagesData as $pd)

                    <div class="col-lg-3 col-md-6 mb-5">
                        <a href="{{route('package',['id'=>$pd->id])}}">
                             <div class="service-wrap text-center clearfix">
                            <div class="uptop">
                                <img src="{{Storage::url($pd->image)}}" alt="" class="img-responsive img-rounded alignleft">
                            </div>
                            <h4>{{$pd->type}}</h4>
                            <p>lick for more details...</p>
                        </div><!-- end issue -->
                        </a>
                    </div><!-- end col -->
                @endforeach
            </div>
        </div><!-- end container -->
    </div><!-- end section -->

    <div id="testimonials" class="parallax section db parallax-inner-bg">
        <div class="container">
            <div class="section-title row text-center">
                <div class="col-md-8 offset-md-2">
                    <small>LET'S SEE OUR TESTIMONIALS</small>
                    <h3>HAPPY TESTIMONIALS</h3>
                </div>
            </div><!-- end title -->

            <div class="row">
                <div class="col-md-12 col-sm-12">
                    <div class="testi-carousel owl-carousel owl-theme">
                        <div class="testimonial clearfix">
                            <div class="testi-meta">
                                <i class="fa fa-quote-right"></i>
                                <img src="{{asset('assets')}}/uploads/testi_01.png" alt="" class="img-responsive alignright">
                                <h4>James Fernando <small>- Manager of Racer</small></h4>
                            </div>
                            <div class="desc">
                                <h3>Wonderful Support!</h3>
                                <p class="lead">They have got my project on time with the competition with a sed highly skilled, and experienced & professional team.</p>
                            </div>
                            <!-- end testi-meta -->
                        </div>
                        <!-- end testimonial -->
                        <div class="testimonial clearfix">
                            <div class="testi-meta">
                                <i class="fa fa-quote-right"></i>
                                <img src="{{asset('assets')}}/uploads/testi_02.png" alt="" class="img-responsive alignright">
                                <h4>Jacques Philips <small>- Designer</small></h4>
                            </div>
                            <div class="desc">
                                <h3>Awesome Services!</h3>
                                <p class="lead">Explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you completed.</p>
                            </div>
                            <!-- end testi-meta -->
                        </div>
                        <!-- end testimonial -->
                        <div class="testimonial clearfix">
                            <div class="testi-meta">
                                <i class="fa fa-quote-right"></i>
                                <img src="{{asset('assets')}}/uploads/testi_03.png" alt="" class="img-responsive alignright">
                                <h4>Venanda Mercy <small>- Newyork City</small></h4>
                            </div>
                            <div class="desc">
                                <h3>Great & Talented Team!</h3>
                                <p class="lead">The master-builder of human happines no one rejects, dislikes avoids pleasure itself, because it is very pursue pleasure. </p>
                            </div>
                            <!-- end testi-meta -->
                        </div>
                        <!-- end testimonial -->
                        <div class="testimonial clearfix">
                            <div class="testi-meta">
                                <i class="fa fa-quote-right"></i>
                                <img src="{{asset('assets')}}/uploads/testi_03.png" alt="" class="img-responsive alignright">
                                <h4>Venanda Mercy <small>- Newyork City</small></h4>
                            </div>
                            <div class="desc">
                                <h3> Great & Talented Team!</h3>
                                <p class="lead">The master-builder of human happines no one rejects, dislikes avoids pleasure itself, because it is very pursue pleasure. </p>
                            </div>
                            <!-- end testi-meta -->
                        </div>
                        <!-- end testimonial -->
                    </div><!-- end carousel -->
                </div><!-- end col -->
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
                    <p class="footer-company-name">All Rights Reserved. &copy; 2018 <a href="#">StyleBarber</a> Design By : <a href="https://html.design/">html design</a></p>
                </div>
            </div>
        </div><!-- end container -->
    </div><!-- end copyrights -->
</div>

@endsection
