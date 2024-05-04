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
            <div class="d-flex justify-content-end me-5">
              <a href="{{ url('user.create') }}" class="btn btn-info">Add User</a>
          </div>
                    @include('layouts.inc.flashmesseges')
                    {{-- <div class="d-flex justify-content-end me-5 ">
                        <a href="{{ url('users.create') }}" class="btn btn-info">Add User</a>
                    </div> --}}
                    <div class="row">
                        <div class="col-md-8 mx-auto">
                            <table class="table table-striped">
                                <thead>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Edit</th>
                                    <th>Delete</th>
                                </thead>
                                <tbody>
                                    @foreach ($users as $user)
                                        <tr>
                                            <td><p>{{$user->name}}</p></td>
                                            <td><p>{{$user->email}}</p></td>
                                            <td><a class="btn btn-info" href="{{url('users.roles/'.$user->id)}}">Roles</a></td>
                                            <td><a class="btn btn-success" href="{{url('user.edit/'.$user->id)}}">Edit</a></td>
                                            <td><a class="btn btn-danger" href="{{url('user.destroy/'.$user->id)}}" onclick="return confirm('Are you sure?')">Delete</a></td>
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

