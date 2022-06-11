<header class="top-navbar">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <a class="navbar-brand" href="index.html">
                <img src="{{asset('assets')}}/images/logo.png" alt="" />
            </a>
            <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbars-rs-food" aria-controls="navbars-rs-food" aria-expanded="false" aria-label="Toggle navigation">
                <span class="icon-bar top-bar"></span>
                <span class="icon-bar middle-bar"></span>
                <span class="icon-bar bottom-bar"></span>
            </button>
{{--            {{ Request::routeIs('home') ? 'current' : '' }}--}}
            <div class="collapse navbar-collapse" id="navbars-rs-food">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active"><a class="nav-link" href="index.html">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{route('services')}}">Our Services</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{route('about')}}">About Us</a></li>
                    @auth
                        {{--                    : {{Auth::user()->name}}--}}
                        <a href="/logoutuser" class="nav-item nav-link">log-out</a>

                    @endauth
{{--                    //if we are log in we can log out,we are already a register--}}

                    @guest()
                        <a href="/loginuser" class="nav-item nav-link">Login</a>
                    @endguest
{{--                    //else it will be the section of a guest--}}
                    <li class="nav-item"><a class="nav-link" href="appointment.html">Appointment</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{route('contact')}}">Contact</a></li>
                </ul>
            </div>
        </div>
    </nav>
</header>
<!-- End header -->
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
                <h2 class="display-2 m-0 mt-2 mt-md-4 text-white font-weight-bold text-capitalize">Be Happy With Us</h2>
                <a href="/registeruser" class="btn btn-lg btn-outline-light mt-3 mt-md-5 py-md-3 px-md-5">Join Us
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
