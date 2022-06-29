<header class="top-navbar">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <a class="navbar-brand" href="index.html">
                <img src="{{asset('assets')}}/images/logo.png" alt=""/>
            </a>
            <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbars-rs-food"
                    aria-controls="navbars-rs-food" aria-expanded="false" aria-label="Toggle navigation">
                <span class="icon-bar top-bar"></span>
                <span class="icon-bar middle-bar"></span>
                <span class="icon-bar bottom-bar"></span>
            </button>
            {{--            {{ Request::routeIs('home') ? 'current' : '' }}--}}
            <div class="collapse navbar-collapse" id="navbars-rs-food">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active" style="background-color: hotpink;"><a class="nav-link"
                                                                                      href="{{route('home')}}">Home</a>
                    </li>

                    {{--                    <li class="nav-item">@include('home.sidebar')</li>--}}
                    <li class="nav-item"><a class="nav-link" href="{{route('about')}}">About Us</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{route('references')}}">References</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{route('faq')}}">Faq</a></li>
                    {{--                    @auth--}}
                    {{--                        --}}{{--                    : {{Auth::user()->name}}--}}
                    {{--                        <a href="/logoutuser" class="nav-item nav-link">log-out</a>--}}

                    {{--                    @endauth--}}
                    {{--                    --}}{{--                    //if we are log in we can log out,we are already a register--}}

                    {{--                    @guest()--}}
                    {{--                        <a href="/loginuser" class="nav-item nav-link">Login</a>--}}
                    {{--                    @endguest--}}
                    {{--                    //else it will be the section of a guest--}}
                    {{--                    <li class="nav-item"><a class="nav-link" href="/appointment/1">Appointment</a></li>--}}
                    <li class="nav-item"><a class="nav-link" href="{{route('contact')}}">Contact</a></li>
                    <li class="nav-item"><a class="nav-link" href="/userpanel"><i class="fas fas-user"
                                                                                  aria-hidden="true"></i>dashboard</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>
<!-- End header -->
