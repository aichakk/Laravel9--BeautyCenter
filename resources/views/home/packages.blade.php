@extends('layouts.front-base')

@section('title', 'services')
@include('home.header')
@section('content')
    <!-- Page Content -->
    <h1 style="background-color: hotpink">
        Service Details
    </h1>

    <div id="page-content-wrapper">
        <div class="section wb">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-6 text-left">
                        <div class="message-box">
                            {!! $data->detail !!}
                            <a href="#services" data-scroll class="btn btn-light btn-radius btn-brd grd1 effect-1">Learn
                                More</a>
                        </div><!-- end messagebox -->
                    </div><!-- end col -->


                </div><!-- end row -->
                <div class="col-md-6">
                    <div class="contact_form">
                        <h2>Leave a review</h2>

                        <div id="message"></div>
                        <h2>@include('home.message')</h2>
                        <form class="row" action="{{route('storecomment')}}" enctype="multipart/form-data"
                              method="post">
                            @csrf
                            <input type="hidden" class="form-control" name="product_id" id="name" value="{{$data->id}}">
                            <fieldset class="row row-fluid">
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    <input type="text" id="first_name" name="subject" class="form-control"
                                           placeholder="subject">
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    <input type="text" name="rate" id="last_name" class="form-control"
                                           placeholder="enter rating">
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <textarea class="form-control " name="review" id="comments" rows="6"
                                              placeholder="Give us more details.."></textarea>
                                </div>
                                @auth()
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center">
                                        <button type="submit" value="SEND" id="submit"
                                                class="btn btn-light btn-radius btn-brd grd1 btn-block subt">Submit
                                        </button>
                                    </div>
                                @else
                                    <a href="/login" class="primary-btn" role="button">To submit Your Review,Please
                                        login</a>
                                @endauth

                            </fieldset>
                        </form>
                    </div>
                </div><!-- end col -->
            </div><!-- end container -->
        </div><!-- end section -->



@endsection

