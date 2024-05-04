@extends('layouts.inc.master')
@section('title', 'Admin Panel')
@section('content')
<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
    <!--begin::Toolbar-->
    <div class="toolbar" id="kt_toolbar">
        <!--begin::Container-->
        <div id="kt_toolbar_container" class="container-fluid d-flex flex-stack">
            <h1>this is admin panel </h1>
        </div>
        <!--end::Container-->
    </div>
    <!--end::Toolbar-->
    <!--begin::Post-->
    <div class="post d-flex flex-column-fluid" id="kt_post">
        <!--begin::Container-->
        <div id="kt_content_container" class="container-xxl">
            <!--begin::Row-->
            <div class="row">
                <div class="col-md-6 mx-auto">
                    <form action="{{url('user.update/'.$user->id)}}" method="post">
                        @csrf
                        <div class="form-group mb-3">
                          <label for="">User Name</label>
                          <input type="text" value="{{$user->name}}"  name="name" class="form-control" placeholder="Enter Name">
                        </div>
                        <div class="form-group mb-3">
                          <label for="exampleInputPassword1">Email</label>
                          <input type="email" value="{{$user->email}}" class="form-control" readonly>
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                      </form>

                </div>
            </div>

            <!--end::Row-->
        </div>
        <!--end::Container-->
    </div>
    <!--end::Post-->
</div>s
@endsection
