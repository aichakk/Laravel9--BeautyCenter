@extends('layouts.adminhome')

@section('title', 'Message')

@section('sidebar')
    @@parent

@stop
@section('content')
    <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
        @include('homeAdminP.header')

        <div class="container-fluid py-4">

            <div class="col-lg-12 col-md-6 mb-md-0 mb-4">
                <div class="card">


                    <div class="table-responsive">
                        <div class="card-header pb-0">
                            <h6>showing: {{$data->type}}</h6>
                        </div>
                        <a href="{{route('admin.service.edit',['id'=>$data->id])}}"
                           style="text-decoration: none;color: white">
                            <div type="submit" class="btn btn-secondary btn-lg w-25">Edit</div>
                        </a>
                        <a href="{{route('admin.service.destroy',['id'=>$data->id])}}"
                           style="text-decoration: none;color: white">
                            <div type="submit" class="btn btn-primary btn-lg w-25">Destroy</div>
                        </a>
                        <table class="table align-items-center mb-0">
                            <tr>
                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                    Id
                                </th>
                                <td class="align-middle">
                                    {{$data->id}}
                                </td>
                            </tr>
                            <tr>
                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                    Email
                                </th>
                                <td class="align-middle">
                                    {{$data->email}}
                                </td>
                            </tr>
                            <tr>
                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                    Phone
                                </th>
                                <td class="align-dle">
                                    {{$data->phone}}
                                </td>
                            </tr>
                            <tr>
                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                    Subject
                                </th>
                                <td class="align-dle">
                                    {{$data->subject}}
                                </td>
                            </tr>
                            <tr>
                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                    Message
                                </th>
                                <td class="align-mide">
                                    {{$data->mesage}}
                                </td>
                            </tr>

                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                Status
                            </th>
                            <td class="align-mide">
                                {{$data->status}}
                            </td>
                            </tr>

                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                IP
                            </th>
                            <td class="align-mide">
                                {{$data->ip}}
                            </td>
                            </tr>
                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                Created_at
                            </th>
                            <td class="align-mide">
                                {{$data->created_at}}
                            </td>
                            </tr>
                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                Updated_at
                            </th>
                            <td class="align-mide">
                                {{$data->updated_at}}
                            </td>
                            </tr>

                        </table>
                    </div>
                </div>
            </div>

        </div>
        @include('homeAdminP.footer')
        </div>
    </main>
@endsection


