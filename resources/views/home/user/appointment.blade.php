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
                            Appointment</h5>
                        <hr>
                        <div class="card-body px-0 pt-0 pb-2">
                            <div class="table-responsive p-0">
                                <table class="table align-items-center mb-0">
                                    <thead>
                                    <tr>

                                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            apointment id
                                        </th>
                                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            apointment message
                                        </th>

                                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            apointment-day
                                        </th>
                                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            apointment-price
                                        </th>


                                        <th class="text-secondary opacity-7"></th>
                                        <th class="text-secondary opacity-7"></th>
                                        <th class="text-secondary opacity-7"></th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($appointData as $rs)
                                        <tr>

                                            <td class="align-middle text-center">
                                                <span class="text-secondary text-xs font-weight-bold">{{$rs->id}}</span>
                                            </td>

                                            <td class="align-middle text-center">
                                                <span
                                                    class="text-secondary text-xs font-weight-bold">{{$rs->aptmessage}}</span>
                                            </td>
                                            <td class="align-middle text-center">
                                                <span
                                                    class="text-secondary text-xs font-weight-bold">{{$rs->date}}</span>
                                            </td>
                                            <td class="align-middle text-center">
                                                <span
                                                    class="text-secondary text-xs font-weight-bold">{{$rs->service->price}}</span>
                                            </td>
                                            <td><a href="{{route('apointments.destroy',['id'=>$rs->id])}}"
                                                   onclick="return confirm('Deleting! are you sure?')"
                                                   class="btn btn-block btn-danger btn-sm"> Delete </a></td>



                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>

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
