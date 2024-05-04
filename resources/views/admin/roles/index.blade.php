@extends('layouts.inc.master')
@section('title', 'Admin Panel')
@section('content')
<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
    <!--begin::Toolbar-->
    <div class="toolbar" id="kt_toolbar">
        <!--begin::Container-->
        <div id="kt_toolbar_container" class="container-fluid d-flex flex-stack">
            <h1>Admin Roles </h1>
        </div>
        <!--end::Container-->
    </div>
    <!--end::Toolbar-->
    <!--begin::Post-->
    <div class="post d-flex flex-column-fluid" id="kt_post">
        <!--begin::Container-->
        <div id="kt_content_container" class="container-xxl ">
            <!--begin::content begin-->
                    <h1>Admin Roles</h1>
                    @include('layouts.inc.flashmesseges')
                    <div class="d-flex justify-content-end me-5 ">
                        <a href="{{ url('roles.create') }}" class="btn btn-info">Add Roles</a>
                    </div>
                    <div class="row">
                        <div class="col-md-8 mx-auto">
                            <table class="table table-striped">
                                <thead>
                                    <th>Name</th>
                                    <th>Edit</th>
                                    <th>Delete</th>
                                </thead>
                                <tbody>
                                    @foreach ($roles as $role)
                                        <tr>
                                            <td>{{$role->name}}</td>
                                            <td><a class="btn btn-outline-success" href="{{url('roles.edit/'.$role->id)}}">Edit</a></td>
                                            <td><a class="btn btn-outline-danger" href="{{url('roles.destroy/'.$role->id)}}" onclick="return confirm('Are you sure?')">Delete</a></td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>

            <!--end::content end-->
        </div>
        <!--end::Container-->
    </div>
    <!--end::Post-->
</div>
@endsection

