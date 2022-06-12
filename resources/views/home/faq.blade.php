@extends('layouts.front-base')

@section('title', $setting->title )
@section('description', $setting->description)
@section('keywords', $setting->keywords)
@section('icon', 'Beuaty-Center icon')

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
                                <h1>About</h1>
                            </div>
                            <div class="clearfix"></div>

                            <ol class="breadcrumb">
                                <li><a href="{{route('home')}}">faq</a></li>
                                <li class="active">faq</li>
                            </ol>
                        </div>
                        <!-- .title end -->
                    </div>
                </div>
            </div>
        </div><!-- end all-page-bar -->
    </div>

    {{--    <div class="container-fluid page-header mb-5">--}}
    {{--        <div class="d-flex flex-column align-items-center justify-content-center pt-0 pt-lg-5"--}}
    {{--             style="min-height: 400px">--}}
    {{--            <h4 class="display-4 mb-3 mt-0 mt-lg-5 text-white text-uppercase font-weight-bold">faq</h4>--}}
    {{--            <div class="d-inline-flex">--}}
    {{--                <p class="m-0 text-white"><a class="text-white" href="">Home</a></p>--}}
    {{--                <p class="m-0 text-white px-2">/</p>--}}
    {{--                <p class="m-0 text-white">faq</p>--}}
    {{--            </div>--}}
    {{--        </div>--}}
    {{--    </div>--}}

    {{--    <!-- faq Start -->--}}
    {{--    <div class="container py-5">--}}
    {{--        <div class="row align-items-center">--}}
    {{--            {!! $setting->faq !!}--}}
    {{--        </div>--}}
    {{--    </div>--}}
    {{--    <!-- faq End -->--}}




@endsection
