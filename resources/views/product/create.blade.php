@extends('layouts.adminhome')

@section('title', 'ServicesList')

@section('sidebar')
    @@parent

@stop


@section('content')
    <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
        @include('homeAdminP.header')

        <div class="container-fluid py-4">
            <div class="col-lg-8 col-md-6 mb-md-0 mb-4">
                <div class="card">
                    <div class="card-header pb-0">
                        <div class="row">
                            <div class="col-lg-6 col-7">
                                <h6>Create a category</h6>
                                <p class="text-sm mb-0">
                                    <i class="fa fa-check text-info" aria-hidden="true"></i>
                                    <span class="font-weight-bold ms-1">Our Best </span>Beauty services available
                                </p>
                            </div>
                            <form action="/admin/product/store" method="post" enctype="multipart/form-data">
                                @csrf
                                <select name="parent_id" class="btn select2 bg-secondary" style="color:black  ">
                                    <option value="0" selected="selected">Main Category</option>
                                    @foreach($data as $rs)
                                        <option style="color:black!important;"
                                                value="{{ $rs->id }}">{{\App\Http\Controllers\AdminPanel\CategoryController::getParentsTree($rs, $rs->type)}}</option>
                                    @endforeach
                                </select>
                                <div class="input-group input-group-outline my-3">
                                    <label class="form-label">Service-Price</label>
                                    <input type="text" name="price" class="form-control">
                                </div>
                                <div class="input-group input-group-outline my-3">
                                    <label class="form-label">Service-type</label>
                                    <input type="text" name="type" class="form-control">
                                </div>
                                <div class="input-group input-group-outline my-3">
                                    <label class="form-label">Service-description</label>
                                    <input type="text" name="description" class="form-control">
                                </div>
                                <div class="input-group input-group-outline my-3">
                                    <label class="form-label"></label>
                                    <input type="file" name="image" class="form-control">
                                </div>
                                <button type="submit" class="btn btn-primary btn-lg w-100">Create</button>
                            </form>

                        </div>
                    </div>
                    <div class="card-body px-0 pb-2">

                    </div>
                </div>
            </div>
        </div>
        @include('homeAdminP.footer')
        </div>
    </main>
@endsection
@include('homeAdminP.fixed-plugins')

