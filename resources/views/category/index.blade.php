@extends('layouts.adminhome')

@section('title', 'ServicesList')



@section('content')
    <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
        @include('homeAdminP.header')

        <div class="container-fluid py-4">

            <div class="col-lg-12 col-md-6 mb-md-0 mb-4">
                <div class="card">
                    <div class="table-responsive">
                        <table class="table align-items-center mb-0">
                            <thead>
                            <tr>
                                <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                    Id
                                </th>
                                <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                    Service-Type
                                </th>
                                <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                    Image
                                </th>
                                <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                    Parent_id
                                </th>
                                <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                    Price
                                </th>
                                <th class="text-secondary opacity-7"></th>
                                <th class="text-secondary opacity-7"></th>
                                <th class="text-secondary opacity-7"></th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($data as $rs)
                                <tr>

                                    <td class="align-middle text-center">
                                        <span class="text-secondary text-xs font-weight-normal">{{$rs->id}}</span>
                                    </td>
                                    <td class="align-middle text-center">
                                        <span class="text-secondary text-xs font-weight-normal">{{$rs->type}}</span>
                                    </td>
                                    <td class="align-middle text-center">
                                        @if($rs->image)
                                            <img src="{{Storage::url($rs->image)}}" class="avatar avatar-sm me-3">
                                        @endif
                                    </td>
                                    <td class="align-middle text-center">
                                        <span
                                            class="text-secondary text-xs font-weight-normal">{{$rs->parent_id}}</span>
                                    </td>
                                    <td class="align-middle text-center">
                                        <span class="text-secondary text-xs font-weight-normal">{{$rs->price}}</span>
                                    </td>
                                    <td class="align-middle">
                                        <a href="{{route('admin.category.destroy',['id'=>$rs->id])}}"
                                           class="btn bg-gradient-danger font-weight-normal text-xs"
                                           data-toggle="tooltip" data-original-title="Edit user">
                                            destroy
                                        </a>
                                    </td>
                                    <td class="align-middle">
                                        <a href="{{route('admin.category.show',['id'=>$rs->id])}}"
                                           class="btn bg-gradient-info font-weight-normal text-xs" data-toggle="tooltip"
                                           data-original-title="Edit user">
                                            Show
                                        </a>
                                    </td>
                                    <td class="align-middle">
                                        <a href="{{route('admin.category.edit',['id'=>$rs->id])}}"
                                           class="btn bg-gradient-success font-weight-normal text-xs"
                                           data-toggle="tooltip" data-original-title="Edit user">
                                            Edit
                                        </a>
                                    </td>

                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <a href="/admin/category/create/"
               style="text-decoration: none;color: white">
                <div type="submit" class="btn btn-primary btn-lg w-100">Add
                    Services
                </div>
            </a>

            <div class="col-lg-4 col-md-6">

            </div>
        </div>
        @include('homeAdminP.footer')
        </div>
    </main>
@endsection
@include('homeAdminP.fixed-plugins')

