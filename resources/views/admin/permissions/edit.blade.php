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
                            <form action="{{url('permissions.update/'.$permission->id)}}" method="POST">
                                @csrf
                                <div class="mb-3">
                                    <label for="">Name</label>
                                    <input type="text" name="name" class="form-control" value="{{$permission->name}}" placeholder="Enter Permission Here">
                                    @error('name')<span class="text-danger my-2">{{$message}}</span>@enderror
                                </div>
                                <button type="submit" class="btn btn-success px-5">Update</button>
                            </form>
                        </div>







                        <div class="col-md-12 py-4">
                            <div class="col-md-5 pt-4">
                                <h2>Roles</h2>
                                @if ($permission->roles)
                                    @foreach ($permission->roles as $permission_role)
                                        <form action="{{ route('permissions.roles.remove', [$permission->id, $permission_role->id]) }}"
                                            method="post">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger mb-3">{{ $permission_role->name }}</button>
                                        </form>
                                    @endforeach
                                @endif
                            </div>
                        </div>
                        <div class="col-md-5">
                            @include('layouts.inc.flashmesseges')
                            <form action="{{url('permissions.roles/'.$permission->id) }}" method="POST">
                                @csrf
                                <div class="mb-3">
                                    <label for="">Roles</label>
                                    <select class="form-select" name="role">
                                        @foreach ($roles as $role)
                                            <option value="{{ $role->name }}">{{ $role->name }}</option>
                                        @endforeach
                                    </select>
                                    @error('role')
                                        <span class="text-danger my-2">{{ $message }}</span>
                                    @enderror
                                </div>
                                <button type="submit" class="btn btn-success px-5">Assign</button>
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
