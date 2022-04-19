@extends('layouts.adminhome')

@section('title', 'ServicesList')

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
                        <a href="{{route('admin.product.edit',['id'=>$data->id])}}"
                           style="text-decoration: none;color: white">
                            <div type="submit" class="btn btn-secondary btn-lg w-25">Edit</div>
                        </a>
                        <a href="{{route('admin.product.destroy',['id'=>$data->id])}}"
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
                                    Service-Type
                                </th>
                                <td class="align-middle">
                                    {{$data->type}}
                                </td>
                            </tr>
                            <tr>
                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                    Service-Description
                                </th>
                                <td class="align-dle">
                                    {{$data->discription}}
                                </td>
                            </tr>
                            <tr>
                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                    Service-Price
                                </th>
                                <td class="align-mide">
                                    {{$data->price}}
                                </td>
                            </tr>
                            <tr>
                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                    Service-image
                                </th>
                                <td class="aligniddle">
                                    @if($data->image)
                                        <img src="{{Storage::url($data->image)}}" class="avatar avatar-lg me-3">
                                    @endif
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


