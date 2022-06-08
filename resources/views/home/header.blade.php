<!--==============================header=================================-->
<header>
    <div class="clear"></div>
    <div class="container_12">
        <div class="grid_12">
            <h1>
                <a href="index.html">
                    <img src="{{asset('assets')}}/images/logo.png" alt="Your Happy Family">
                </a>
            </h1>
        </div>
    </div>
    <div class="clear"></div>
    <div class="menu_block">
        <div class="container_12">
            <div class="grid_12">
                <nav class="horizontal-nav full-width horizontalNav-notprocessed">
                    <ul class="sf-menu">
                        <li class="{{ Request::routeIs('home') ? 'current' : '' }}"><a href="{{route('home')}}">Home</a>
                        </li>
                        <li class="{{ Request::routeIs('references') ? 'current' : '' }}"><a
                                href="{{route('references')}}">Services</a></li>
                        <li class="{{ Request::routeIs('references') ? 'current' : '' }}"><a href="{{route('home')}}">Staff</a>
                        </li>
                        <li class="{{ Request::routeIs('references') ? 'current' : '' }}"><a href="{{route('home')}}">Prices</a>
                        </li>
                        <li class="{{ Request::routeIs('contact') ? 'current' : '' }}"><a href="{{route('contact')}}">Contacts</a>
                        </li>
                    </ul>
                </nav>
                <div class="clear"></div>
            </div>
            <div class="clear"></div>
        </div>
    </div>
</header>
{{--<div class="content">--}}

{{--    <div class="container">--}}
{{--        <h2 class="my-5 text-center text-white">Carousel #10</h2>--}}
{{--    </div>--}}

{{--    <div class="site-blocks-cover">--}}
{{--        <div class="img-wrap">--}}
{{--            <div class="owl-carousel slide-one-item hero-slider">--}}
{{--                <div class="slide">--}}
{{--                    <img src="{{asset('couresel')}}/images/frontpage1.jpg" alt="1111111">--}}

{{--                </div>--}}
{{--                <div class="slide">--}}
{{--                    <img src="{{asset('couresel')}}/images/frontpage2.jpg" alt="222222">--}}
{{--                </div>--}}
{{--                <div class="slide">--}}
{{--                    <img src="{{asset('couresel')}}/images/frontpage3.jpg"--}}
{{--                         alt="Free Website Template by Free-Template.co">--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--        <div class="container">--}}
{{--            <div class="row">--}}
{{--                <div class="col-md-6 ml-auto align-self-center">--}}
{{--                    <div class="intro">--}}
{{--                        <div class="heading">--}}
{{--                            <h1 class="text-white font-weight-bold">BEAUTY CENTRE</h1>--}}
{{--                        </div>--}}
{{--                        <div class="text sub-text">--}}
{{--                            <p>Welcome To Aicha's Beauty Salon Centre, We Offer The Best Services Available</p>--}}
{{--                            <p><a href="https://free-template.co/" target="_blank"--}}
{{--                                  class="btn btn-outline-primary btn-md btn-pill">Start a project</a></p>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div> <!-- END .site-blocks-cover -->--}}
{{--</div>--}}


{{--<div class="slider_wrapper">--}}
{{--    <div id="camera_wrap">--}}
{{--        <div data-src="{{asset('assets')}}/images/spacer.png">--}}
{{--            <div class="caption fadeIn">--}}
{{--                <h2>It’s Time to Relax &amp; Take <br> Care of Yourself</h2>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--        <div data-src="{{asset('assets')}}/images/spacer.png">--}}
{{--            <div class="caption fadeIn">--}}
{{--                <h2>We Serve You for <br>--}}
{{--                    All Your Beauty Needs</h2>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--        <div data-src="{{asset('assets')}}/images/spacer.png">--}}
{{--            <div class="caption fadeIn">--}}
{{--                <h2>Your Beauty Starts Here</h2>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</div>--}}
<!-- Carousel Start -->
<div class="container-fluid p-0">
    {{--    <div id="blog-carousel" class="carousel slide" data-ride="carousel">--}}
    {{--        <div class="carousel-inner">--}}
    {{--            <div class="carousel-item active">--}}
    {{--                <img class="w-100" src="{{asset('assets')}}/img/carousel-1.jpg" alt="Image">--}}
    {{--                <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">--}}
    {{--                    <h3 class="text-primary text-capitalize m-0">Gym & Fitness Center</h3>--}}
    {{--                    <h2 class="display-2 m-0 mt-2 mt-md-4 text-white font-weight-bold text-capitalize">Best Gym In--}}
    {{--                        Town</h2>--}}
    {{--                    <a href="" class="btn btn-lg btn-outline-light mt-3 mt-md-5 py-md-3 px-md-5">Join Us Now</a>--}}
    {{--                </div>--}}
    {{--            </div>--}}

    {{--        </div>--}}
    {{--        <a class="carousel-control-prev" href="#blog-carousel" data-slide="prev">--}}
    {{--            <span class="carousel-control-prev-icon"></span>--}}
    {{--        </a>--}}
    {{--        <a class="carousel-control-next" href="#blog-carousel" data-slide="next">--}}
    {{--            <span class="carousel-control-next-icon"></span>--}}
    {{--        </a>--}}
    {{--    </div>--}}
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
                    <h2 class="display-2 m-0 mt-2 mt-md-4 text-white font-weight-bold text-capitalize">Beauty
                        Center</h2>
                    <a href="#" class="btn btn-lg btn-outline-light mt-3 mt-md-5 py-md-3 px-md-5">Welcome there</a>
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
