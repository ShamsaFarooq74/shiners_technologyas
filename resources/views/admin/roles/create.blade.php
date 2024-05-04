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
                <!--begin::content begin-->
                <h1>Create Admin Roles</h1>
                <div class="d-flex my-5">
                    <a href="{{ url('roles') }}" class="btn btn-info">View All Roles</a>
                </div>
                    <div class="row">
                        <div class="col-md-5">
                            <form action="{{url('roles.store')}}" method="POST">
                                @csrf
                                <div class="mb-3">
                                    <label for="">Role Name</label>
                                    <input type="text" name="name" class="form-control" placeholder="Enter Role Here">
                                    @error('name')<span class="text-danger my-2">{{$message}}</span>@enderror
                                </div>
                                <button type="submit" class="btn btn-success px-5">Create</button>
                            </form>
                        </div>
                    </div>

                <!--end::content end-->
            </div>
            <!--end::Container-->
        </div>
        <!--end::Post-->
    </div>
@endsection
