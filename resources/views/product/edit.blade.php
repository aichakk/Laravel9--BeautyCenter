@extends('layouts.adminhome')

@section('title','Editing :'. $data->type)
@section('sidebar')
    @@parent

@stop



@section('content')
    <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
        @include('homeAdminP.header')

        <div class="container-fluid py-4">

            <div class="col-lg-8 col-md-6 mb-md-0 mb-4">
                <div class="card">
                    <div class="card-header pb-0">$
                        <div class="row">
                            <div class="col-lg-6 col-7">
                                <h6>Editing: {{$data->type}}</h6>
                                <p class="text-sm mb-0">
                                    <i class="fa fa-check text-info" aria-hidden="true"></i>

                                </p>
                            </div>
                            <form action="{{route('admin.product.update',['id'=>$data->id])}}" method="post"
                                  enctype="multipart/form-data">
                                @csrf
                                <select class="btn dropdown select2 bg-gradient-secondary" name="parent_id"
                                        style="color:black  ">
                                    <option value="0" selected="selected">Main Category</option>
                                    @foreach($dataList as $rs)
                                        <option
                                            value="{{ $rs->id }}"> {{ \App\Http\Controllers\AdminPanel\CategoryController::getParentsTree($rs, $rs->type)}}</option>
                                    @endforeach
                                </select>

                                <div class="input-group input-group-outline my-3">
                                    <label class="form-label"></label>
                                    <input type="text" name="price" value="{{$data->price}}" class="form-control">
                                </div>
                                <div class="input-group input-group-outline my-3">
                                    <label class="form-label"></label>
                                    <input type="text" name="type" value="{{$data->type}}" class="form-control">
                                </div>
                                <div class="input-group input-group-outline my-3">
                                    <label class="form-label"></label>
                                    <input type="text" name="description" value="{{$data->discription}}"
                                           class="form-control">
                                </div>
                                <div class="input-group input-group-outline my-3">
                                    <label class="form-label"></label>
                                    <input type="file" name="image" value="{{$data->image}}" class="form-control">
                                </div>
                                <button type="submit" class="btn btn-primary btn-lg w-100">Update</button>
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

