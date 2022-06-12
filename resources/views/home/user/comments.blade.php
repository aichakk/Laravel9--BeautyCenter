@extends('layouts.front-base')

@section('title', 'user panel' )
@include('home.header')
@section('content')

    <!-- Page Content -->
    <div id="page-content-wrapper">
        <div class="all-page-bar">
            <div class="container">

            </div>
            <!-- About Start -->
            <div class="container py-5">
                <div class="row">
                    <div class="col-md-6">
                        <h4 class="display-4 mb-3 mt-0 mt-lg-5 text-black text-uppercase font-weight-bold">My
                            Dashboard</h4>
                        <hr style="color: black">
                        @include('home.user.menu')

                    </div>
                    <div class="col-md-6">
                        <h5 class="display-4 mb-3 mt-0 mt-lg-5 text-black-50 text-uppercase font-weight-bold">My
                            revies</h5>
                        <hr>
                        <tbody>
                        @foreach($comments as $rs)
                            <tr>

                                <td class="align-middle text-center">
                                    <span class="text-secondary text-xs font-weight-bold">{{$rs->id}}</span>
                                </td>

                                <td class="align-middle text-center">
                                                <span
                                                    class="text-secondary text-xs font-weight-bold">{{$rs->subject}}</span>
                                </td>

                                <td class="align-middle text-center">
                                                <span
                                                    class="text-secondary text-xs font-weight-bold">{{$rs->review}}</span>
                                </td>
                                <td class="align-middle text-center">
                                                <span
                                                    class="text-secondary text-xs font-weight-bold">{{$rs->rate}}</span>
                                </td>

                                <td class="align-middle">
                                    {{--                                                <a href="{{route('userpanel.reviewdestroy',['id'=>$rs->id])}}"--}}
                                    {{--                                                   class="font-weight-bold text-xs btn btn-danger" data-toggle="tooltip"--}}
                                    {{--                                                   data-original-title="Edit user">--}}
                                    {{--                                                    Delete--}}
                                    {{--                                                </a>--}}
                                </td>
                                {{--                                            <td class="align-middle">--}}
                                {{--                                                <a href="{{route('service.show',['id'=>$rs->id])}}"--}}
                                {{--                                                   class="font-weight-bold text-xs btn btn-info" data-toggle="tooltip"--}}
                                {{--                                                   data-original-title="Edit user">--}}
                                {{--                                                    show--}}
                                {{--                                                </a>--}}
                                {{--                                            </td>--}}
                            </tr>
                        @endforeach
                        </tbody>
                        </table>

                    </div>
                </div>
            </div>
            <!-- About End -->


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
                            <p class="footer-company-name">All Rights Reserved. &copy; 2018 <a href="#">StyleBarber</a>
                                Design By : <a href="https://html.design/">html design</a></p>
                        </div>
                    </div>
                </div><!-- end container -->
            </div><!-- end copyrights -->
        </div>








@endsection
