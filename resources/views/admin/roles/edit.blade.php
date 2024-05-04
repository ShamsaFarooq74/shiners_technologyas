@extends('layouts.inc.master')
@section('title', 'Admin Panel')
@section('content')
    <div class="content d-flex flex-column flex-column-fluid" id="kt_content">
        <!--begin::Toolbar-->
        <div class="toolbar" id="kt_toolbar">
            <!--begin::Container-->
            <div id="kt_toolbar_container" class="container-fluid d-flex flex-stack">
                <h1>Create Admin Roles </h1>
            </div>
            <!--end::Container-->
        </div>
        <!--end::Toolbar-->
        <!--begin::Post-->
        <div class="post d-flex flex-column-fluid" id="kt_post">
            <!--begin::Container-->
            <div id="kt_content_container" class="container-xxl">
                <!--begin::content begin-->

                <div class="d-flex justify-content-end my-5">
                    <a href="{{ url('roles') }}" class="btn btn-info">View All Roles</a>
                </div>
                <div class="row">
                    <div class="col-md-5">
                        <form action="{{ url('roles.update/' . $role->id) }}" method="POST">
                            @csrf
                            <div class="mb-3">
                                <label for="">Role Name</label>
                                <input type="text" name="name" class="form-control" value="{{ $role->name }}"
                                    placeholder="Enter Role Here">
                                @error('name')
                                    <span class="text-danger my-2">{{ $message }}</span>
                                @enderror
                            </div>
                            <button type="submit" class="btn btn-success px-5">Update</button>
                        </form>
                    </div>
                    <div class="col-md-12 py-4">
                        <div class="col-md-5 pt-4">
                            <h2>Role Permissions</h2>
                            @if ($role->permissions)
                                @foreach ($role->permissions as $role_permission)
                                    <form action="{{ route('roles.permissions.revoke', [$role->id, $role_permission->id]) }}"
                                        method="post">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger mb-3">{{ $role_permission->name }}</button>
                                    </form>
                                @endforeach
                            @endif
                        </div>
                    </div>
                    <div class="col-md-5">
                        @include('layouts.inc.flashmesseges')
                        <form action="{{ url('roles.permissions/' . $role->id) }}" method="POST">
                            @csrf
                            <div class="mb-3">
                                <label for="">Permission</label>
                                <select class="form-select" name="permission">
                                    @foreach ($permissions as $permission)
                                        <option value="{{ $permission->name }}">{{ $permission->name }}</option>
                                    @endforeach
                                </select>
                                @error('name')
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
