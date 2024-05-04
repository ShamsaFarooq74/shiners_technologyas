@extends('layouts.inc.master')
@section('title', 'Admin Panel')
@section('content')
    <style>
        .preview-img {
            max-width: 200px;
            max-height: 200px;
            margin: 10px;
        }
    </style>
    <div class="content d-flex flex-column flex-column-fluid" id="kt_content">
        <!--begin::Toolbar-->
        <div class="toolbar" id="kt_toolbar">
            <!--begin::Container-->
            <div id="kt_toolbar_container" class="container-fluid d-flex flex-stack">
                <h1>{{ Auth::user()->name }}</h1>

            </div>
            <!--end::Container-->
        </div>
        <!--end::Toolbar-->
        <!--begin::Post-->
        <div class="post d-flex flex-column-fluid" id="kt_post">
            <!--begin::Container-->
            <div id="kt_content_container" class="container-xxl">
                <!--begin::Row-->
                <div class="d-flex justify-content-end mb-4">
                    <a href="{{ route('posts.index') }}" class="btn btn-success">View All Posts</a>
                </div>
                @include('layouts.inc.flashmesseges')
                <form action="{{ route('user.store') }}" method="POST" enctype="multipart/form-data"
                    class="border shadow">
                    @csrf
                    <div class="row" class="border">
                        <div class="col-md-8 mx-auto py-4">
                            <div class="form-group mb-3">
                                <label for=""class="mb-3">User Name</label>
                                <input type="" class="form-control" name="name"
                                    value="{{ old('name') }}"placeholder="Enter User Name">
                            </div>
                            <div class="form-group mb-3">
                                <label for=""class="mb-3">User Email</label>
                                <input type="" class="form-control" name="email"
                                    value="{{ old('email') }}"placeholder="Enter User Email">
                            </div>
                            <div class="form-group mb-3">
                                <label for=""class="mb-3">User password</label>
                                <input type="" class="form-control" name="password"
                                    value="{{ old('password') }}"placeholder="Enter user password">
                            </div>
                        </div>
                    </div>
                    <div class="d-flex justify-content-center py-4">
                        <button type="submit" class="btn btn-primary px-4">Submit</button>
                    </div>
            </div>
            </form>
        </div>
        <!--end::Row-->
    </div>
    <!--end::Container-->
    </div>
    <!--end::Post-->
    </div>

@endsection
