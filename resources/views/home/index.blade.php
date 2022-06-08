@extends('layouts.front-base')

@section('title', 'BeautyCenter')
{{--//bjhgj--}}
@section('sidebar')
    @@parent

    <p>This is appended to the master sidebar.</p>
@stop
@include('home.header')
@section('content')

    <!--==============================Content=================================-->
    <div class="links">
        <div class="container_12">
            <div class="container">
                <h1 style="text-align: center;font-family: Roboto, Helvetica, Arial, sans-serif;font-size: 2em;">
                    Our Services
                </h1>
            </div>

            @foreach($packagesData as $pd)

                <div class="grid_4"><a href="{{route('package',['id'=>$pd->id])}}"><strong>{{$pd->type}}</strong></a>
                </div>

                {{--                <div class="col-lg-3 col-md-6 mb-5">--}}

                {{--                        <div class="card border-0 bg-secondary text-center text-white">--}}
                {{--                            <img class="card-img-top" src="{{Storage::url($pd->image)}}" alt="">--}}
                {{--                            <div class="card-body bg-secondary">--}}
                {{--                                <h4 class="card-title text-primary">{{$pd->title}}</h4>--}}
                {{--                                <p class="card-text">Trainer</p>--}}
                {{--                            </div>--}}
                {{--                        </div>--}}
                {{--                    </a>--}}
                {{--                </div>--}}

            @endforeach
        </div>
        <div class="clear"></div>
    </div>
    <div class="slogan">
        We are the Beauty &amp; Spa Salon based in New York <br>
        We Want to Make Your Life Beautiful
    </div>
    <div class="content">
        <div class="ic">More Website Templates @ TemplateMonster.com - January 13, 2014!</div>
        <div class="container_12">
            <div class="grid_4">
                <div class="banner b1"><a href="#" class="maxheight">Skin Therapy</a><img
                        src="{{asset('assets')}}/images/page1_img1.jpg" alt=""></div>
            </div>
            <div class="grid_4">
                <div class="banner b2"><img src="{{asset('assets')}}/images/page1_img2.jpg" alt=""><a href="#"
                                                                                                      class="maxheight">Spa
                        Rest</a></div>
            </div>
            <div class="grid_4">
                <div class="banner b3"><a href="#" class="maxheight">Massage</a><img
                        src="{{asset('assets')}}/images/page1_img3.jpg" alt=""></div>
            </div>
        </div>
        <div class="clear"></div>
    </div>
@endsection
