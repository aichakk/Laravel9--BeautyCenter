@extends('layouts.front-base')

@section('title', 'services')

@section('content')
    <!-- Page Content -->

    <div id="page-content-wrapper">
        <div class="all-page-bar">
            <div class="container"          style="background:linear-gradient(rgba(0,0,0,0),rgba(0,0,0,0)),url({{Storage::url($data->image)}});">
                >
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="title title-1 text-center">
                            <div class="much">
                                <img src="{{asset('assets')}}/uploads/mustache.png" alt=""/>
                            </div>

                            <div class="title--heading">
                                <h1>{{$data->type}}</h1>
                            </div>
                            <div class="clearfix"></div>

                            <ol class="breadcrumb">
                                <li><a href="{{route('home')}}">Home</a></li>
                                <li class="active">package</li>
                            </ol>
                        </div>
                        <!-- .title end -->
                    </div>
                </div>
            </div>
        </div><!-- end all-page-bar -->

        <div class="section wb">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-6 text-left">
                        <div class="message-box">
                            {!! $data->detail !!}
                            <a href="#services" data-scroll class="btn btn-light btn-radius btn-brd grd1 effect-1">Learn More</a>
                        </div><!-- end messagebox -->
                    </div><!-- end col -->
                    <div class="col-md-6">
                        <div class="contact_form">
                            <h2>Leave a review</h2>

                            <div id="message"></div>
                            <h2>@include('home.message')</h2>
                            <form  class="row" action="{{route('storecomment')}}"  enctype="multipart/form-data" method="post">
                                @csrf
                                <input type="hidden" class="form-control" name="product_id" id="name" value="{{$data->id}}">
                                <fieldset class="row row-fluid">
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                        <input type="text"  id="first_name" name="subject" class="form-control" placeholder="subject">
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                        <input type="text" name="rate" id="last_name" class="form-control" placeholder="enter rating">
                                    </div>
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <textarea class="form-control " name="review" id="comments"  rows="6" placeholder="Give us more details.."></textarea>
                                    </div>
                                    @auth()
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center">
                                            <button type="submit" value="SEND" id="submit" class="btn btn-light btn-radius btn-brd grd1 btn-block subt">Submit</button>
                                        </div>
                                    @else
                                        <a href="/login" class="primary-btn" role="button">To submit Your Review,Please login</a>
                                    @endauth

                                </fieldset>
                            </form>
                        </div>
                    </div><!-- end col -->

                </div><!-- end row -->
            </div><!-- end container -->
        </div><!-- end section -->



@endsection

