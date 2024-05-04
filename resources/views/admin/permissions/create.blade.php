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
                <h1>Create Admin Permissions</h1>
                <div class="d-flex my-5">
                    <a href="{{ url('permissions') }}" class="btn btn-info">View All Permissions</a>
                </div>
                    <div class="row">
                        <div class="col-md-5">
                            @if (session('status'))
                            <div class="alert alert-success">
                              <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a> {{ session('status') }}
                            </div>
                            @endif
                            <form action="{{url('permissions.store')}}" method="POST">
                                @csrf
                                <div class="mb-3">
                                    <label for="">Permission Name</label>
                                    <input type="text" name="name" class="form-control" placeholder="Enter Permissions Here">
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
