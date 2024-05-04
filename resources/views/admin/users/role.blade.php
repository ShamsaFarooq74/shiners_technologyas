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
                @include('layouts.inc.flashmesseges')
                <div class="d-flex justify-content-end my-5">
                    <a href="{{ url('roles') }}" class="btn btn-info">View All Roles</a>
                </div>
                <div class="row">

                    <div class="col-md-6 py-4">
                        <div class="form-group">
                            <label for="">User Name</label>
                            <p >{{ $user->name }}</p>
                            <label for="">User Email</label>
                            <p >{{ $user->email }}</p>
                        </div>

                    </div>
                    <div class="col-md-12 py-4">
                        <div class="col-md-6">
                            @if ($user->roles)
                            @foreach ($user->roles as $user_role)
                                <form action="{{ url('user.remove.role', [$user->id, $user_role->id]) }}" method="post">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger mb-5">{{ $user_role->name }}</button>
                                </form>
                            @endforeach
                            @endif

                        </div>
                        <div class="col-md-6">
                            <form action="{{ url('user.role.assign/' . $user->id) }}" method="POST">
                                @csrf
                                <div class="mb-3">
                                    <label for="">Available Roles</label>
                                    <select class="form-select" name="role">
                                        @foreach ($roles as $role)
                                            <option value="{{ $role->name }}">{{ $role->name }}</option>
                                        @endforeach
                                    </select>
                                    @error('name')
                                        <span class="text-danger my-2">{{ $message }}</span>
                                    @enderror
                                </div>
                                <button type="submit" class="btn btn-success px-5">Assign Role</button>
                            </form>

                        </div>


                    </div>

                    <div class="col-md-12 py-4">
                        <div class="col-md-6">
                            @if ($user->permissions)
                            @foreach ($user->permissions as $user_permission)
                                <form action="{{ url('user.remove.permission', [$user->id, $user_permission->id]) }}"
                                    method="post">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger mb-3">{{ $user_permission->name }}</button>
                                </form>
                            @endforeach
                        @endif
                        </div>
                        <div class="col-md-6">
                            <form action="{{ url('user.permission.assign/' . $user->id) }}" method="POST">
                                @csrf
                                <div class="mb-3">
                                    <label for="">Available Permissions</label>
                                    <select class="form-select" name="permission">
                                        @foreach ($permissions as $permission)
                                            <option value="{{ $permission->name }}">{{ $permission->name }}</option>
                                        @endforeach
                                    </select>
                                    @error('name')
                                        <span class="text-danger my-2">{{ $message }}</span>
                                    @enderror
                                </div>
                                <button type="submit" class="btn btn-success px-5">Assign Permissions</button>
                            </form>
                        </div>
                    </div>
                </div>
                <!--end::content end-->
            </div>
            <!--end::Container-->
        </div>
        <!--end::Post-->
    </div>
@endsection
