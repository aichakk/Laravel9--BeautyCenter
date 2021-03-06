@extends('layouts.adminhome')

@section('title', '
sList')

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
                                    name
                                </th>
                                <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                    email
                                </th>
                                <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                    phone
                                </th>
                                <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                    subject
                                </th>
                                <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                    message
                                </th>
                                <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                    status
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
                                        <span
                                            class="text-secondary text-xs font-weight-normal">{{ $rs->name}}</span>
                                    </td>
                                    <td class="align-middle text-center">
                                          <span
                                              class="text-secondary text-xs font-weight-normal">{{ $rs->email}}</span>
                                    </td>
                                    <td class="align-middle text-center">
                                       <span
                                           class="text-secondary text-xs font-weight-normal">{{ $rs->phone}}</span>
                                    </td>
                                    <td class="align-middle text-center">
                                        <span
                                            class="text-secondary text-xs font-weight-normal">{{$rs->subject}}</span>
                                    </td>
                                    <td class="align-middle text-center">
                                        <span class="text-secondary text-xs font-weight-normal">{{$rs->message}}</span>
                                    </td>
                                    <td class="align-middle text-center">
                                        <span class="text-secondary text-xs font-weight-normal">{{$rs->status}}</span>
                                    </td>

                                    <td class="align-middle">
                                        <a href="{{route('admin.message.destroy',['id'=>$rs->id])}}"
                                           class="btn bg-gradient-danger font-weight-normal text-xs"
                                           data-toggle="tooltip" data-original-title="Edit user">
                                            destroy
                                        </a>
                                    </td>
                                    <td class="align-middle">
                                        <a href="{{route('admin.message.show',['id'=>$rs->id])}}"
                                           onclick="return  !window.open(this.href,'','_self')"
                                           class="font-weight-bold text-xs btn btn-info" data-toggle="tooltip"
                                           data-original-title="Edit user">
                                            show
                                        </a>
                                    </td>
                                    <td class="align-middle">
                                        <a href="{{route('admin.message.edit',['id'=>$rs->id])}}"
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
            <a href="/admin/message/create/"
               style="text-decoration: none;color: white">
                <div type="submit" class="btn btn-primary btn-lg w-100">Add
                    messages
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


