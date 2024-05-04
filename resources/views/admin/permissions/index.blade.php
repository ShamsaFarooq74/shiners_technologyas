@extends('layouts.inc.master')
@section('title', 'Admin Panel')
@section('content')
<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
    <!--begin::Toolbar-->
    <div class="toolbar" id="kt_toolbar">
        <!--begin::Container-->
        <div id="kt_toolbar_container" class="container-fluid d-flex flex-stack">
            <h1>Admin Permissions </h1>
        </div>
        <!--end::Container-->
    </div>
    <!--end::Toolbar-->
    <!--begin::Post-->
    <div class="post d-flex flex-column-fluid" id="kt_post">
        <!--begin::Container-->
        <div id="kt_content_container" class="container-xxl">
            <!--begin::content begin-->
                    <h1>Admin Permissions</h1>
                    @include('layouts.inc.flashmesseges')
                    <div class="d-flex justify-content-end me-5">
                        <a href="{{ url('permissions.create') }}" class="btn btn-info">Add Permission</a>
                    </div>
                    <table class="table table-striped">
                        <thead>
                            <th>Name</th>
                            <th>Edit</th>
                            <th>Delete</th>
                        </thead>
                        <tbody>
                            @foreach ($permissions as $permission)
                                <tr>
                                    <td>{{$permission->name}}</td>
                                    <td><a class="btn btn-outline-success" href="{{url('permissions.edit/'.$permission->id)}}">Edit</a></td>
                                    <td><a class="btn btn-outline-danger" href="{{url('permissions.destroy/'.$permission->id)}}" onclick="return confirm('Are you sure?')">Delete</a></td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
            <!--end::content end-->
        </div>
        <!--end::Container-->
    </div>
    <!--end::Post-->
</div>
@endsection

