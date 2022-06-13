<!DOCTYPE html>
<html lang="en">


<meta name="keywords" content="">
<meta name="description" content="">
<meta name="author" content="">

<!-- Site Icons -->
<link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon"/>
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
        <span class="loading" data-name="Loading">Beauty Center Loading</span>
    </div>
</div><!-- end loader -->
<!-- END LOADER -->

<div class="top-add alert alert-light alert-dismissible">
    <button type="button" class="close" data-dismiss="alert">&times;</button>
    <strong>Success!</strong> This alert box could indicate a successful or positive action.
</div>
<!-- Start header -->
@include('home.header')
<!-- End header -->

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
                            <h1>Appointment</h1>
                        </div>
                        <div class="clearfix"></div>

                        <ol class="breadcrumb">
                            <li><a href="index-3.html">Home</a></li>
                            <li class="active">Appointment</li>
                        </ol>
                    </div>
                    <!-- .title end -->
                </div>
            </div>
        </div>
    </div><!-- end all-page-bar -->

    <div id="appointment" class="section wb">
        <div class="container">
            <div class="section-title row text-center">
                <div class="col-md-8 offset-md-2">
                    <small>LET'S MAKE AN APPOINTMENT FOR YOUR LIFE</small>
                    <h3>Book now</h3>
                </div>
            </div><!-- end title -->

            <div class="row">
                <div class="col-lg-12">
                    <div class="contact_form">
                        <h3>@include('home.message')</h3>
                        <div id="message"></div>
                        <form action="{{route('apointments.store')}}" method="post">
                            @csrf
                            <input type="hidden" name="id" value="{{$data->id}}">
                            <fieldset class="row row-fluid">

                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    <input type="text" name="first_name" id="first_name" class="form-control"
                                           placeholder="First Name">
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    <input type="text" name="last_name" id="last_name" class="form-control"
                                           placeholder="Last Name">
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    <input type="email" name="email" id="email" class="form-control"
                                           placeholder="Your Email">
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    <input type="text" name="yourphone" id="phone" class="form-control"
                                           placeholder="Your Phone">
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    <input type="hidden" name="quantity" id="phone" value="1" class="form-control"
                                           placeholder="quantity">
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <select id="basic" name="date" class="form-control">
                                        <option value="selecttime">Select Time</option>
                                        <option value="Weekdays">Weekdays</option>
                                        <option value="Weekend">Weekend</option>
                                    </select>
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <textarea class="form-control" name="aptmessage" id="comments" rows="6"
                                              placeholder="Give us more details.."></textarea>
                                </div>
                                <div class="form-btn text-center">
                                    @auth


                                        <input type="submit" value="get apointment"
                                               class="btn btn-light btn-radius btn-brd grd1 btn-block subt">



                                    @endauth
                                    {{--                    //if we are log in we can log out,we are already a register--}}

                                    @guest()
                                        <a href="/register" class="nav-item nav-link">Please register first then
                                            send</a>
                                        @endguest
                                </div>
                            </fieldset>
                        </form>
                    </div>
                </div><!-- end col -->
            </div><!-- end row -->
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
                                <img src="{{asset('assets')}}/uploads/testi_01.png" alt=""
                                     class="img-responsive alignright">
                                <h4>James Fernando <small>- Manager of Racer</small></h4>
                            </div>
                            <div class="desc">
                                <h3>Wonderful Support!</h3>
                                <p class="lead">They have got my project on time with the competition with a sed highly
                                    skilled, and experienced & professional team.</p>
                            </div>
                            <!-- end testi-meta -->
                        </div>
                        <!-- end testimonial -->
                        <div class="testimonial clearfix">
                            <div class="testi-meta">
                                <i class="fa fa-quote-right"></i>
                                <img src="{{asset('assets')}}/uploads/testi_02.png" alt=""
                                     class="img-responsive alignright">
                                <h4>Jacques Philips <small>- Designer</small></h4>
                            </div>
                            <div class="desc">
                                <h3>Awesome Services!</h3>
                                <p class="lead">Explain to you how all this mistaken idea of denouncing pleasure and
                                    praising pain was born and I will give you completed.</p>
                            </div>
                            <!-- end testi-meta -->
                        </div>
                        <!-- end testimonial -->
                        <div class="testimonial clearfix">
                            <div class="testi-meta">
                                <i class="fa fa-quote-right"></i>
                                <img src="{{asset('assets')}}/uploads/testi_03.png" alt=""
                                     class="img-responsive alignright">
                                <h4>Venanda Mercy <small>- Newyork City</small></h4>
                            </div>
                            <div class="desc">
                                <h3>Great & Talented Team!</h3>
                                <p class="lead">The master-builder of human happines no one rejects, dislikes avoids
                                    pleasure itself, because it is very pursue pleasure. </p>
                            </div>
                            <!-- end testi-meta -->
                        </div>
                        <!-- end testimonial -->
                        <div class="testimonial clearfix">
                            <div class="testi-meta">
                                <i class="fa fa-quote-right"></i>
                                <img src="{{asset('assets')}}/uploads/testi_03.png" alt=""
                                     class="img-responsive alignright">
                                <h4>Venanda Mercy <small>- Newyork City</small></h4>
                            </div>
                            <div class="desc">
                                <h3> Great & Talented Team!</h3>
                                <p class="lead">The master-builder of human happines no one rejects, dislikes avoids
                                    pleasure itself, because it is very pursue pleasure. </p>
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
                        <a href="#">Home</a>
                        <a href="#">Blog</a>
                        <a href="#">Pricing</a>
                        <a href="#">About</a>
                        <a href="#">Faq</a>
                        <a href="#">Contact</a>
                    </p>
                    <p class="footer-company-name">All Rights Reserved. &copy; 2018 <a href="#">StyleBarber</a> Design
                        By : <a href="https://html.design/">html design</a></p>
                </div>
            </div>
        </div><!-- end container -->
    </div><!-- end copyrights -->
</div>


@include('home.footer')
</body>
</html>
