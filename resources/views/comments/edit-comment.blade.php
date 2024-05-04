@extends('layouts.inc.master')
@section('title', 'Admin Panel')
@section('content')
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
                    <a href="{{ route('comments.index') }}" class="btn btn-success">View All Comments</a>
                </div>
                @include('layouts.inc.flashmesseges')
                <form action="{{ route('comments.update', $comment->id) }}" method="POST" enctype="multipart/form-data"
                    class="border shadow">
                    @csrf
                    @method('PUT')
                    <div class="row" class="border">
                        <div class="col-md-8 mx-auto py-4">
                          <textarea name="comment" class="form-control py-3 px-4  smallfont rounded-3" cols="30" rows="10"
                          placeholder="Edit User Comment">{{$comment->comment}}</textarea>
                        </div>
                    </div>
                    <div class="d-flex justify-content-center py-4">
                        <button type="submit" class="btn btn-primary px-4">Update</button>
                    </div>
            </div>
            </form>

        </div>

        <!--end::Row-->
    </div>
    <!--end::Container-->
    </div>
    <!--end::Post-->
    </div>s
@endsection
