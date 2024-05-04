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
                    <a href="{{ route('posts.index') }}" class="btn btn-success">View All Posts</a>
                </div>
                @include('layouts.inc.flashmesseges')
                <form action="{{ route('posts.update', $post->id) }}" method="POST" enctype="multipart/form-data"
                    class="border shadow">
                    @csrf
                    @method('PUT')
                    <div class="row" class="border">
                        <div class="col-md-8 mx-auto py-4">
                            <div class="form-group mb-3">
                                <label for=""class="mb-3">Post Title</label>
                                <input type="" class="form-control" name="title" value="{{ $post->title }}"
                                    placeholder="Enter Post Title">
                            </div>
                            <div class="form-group mb-3">
                                <label for="" class="mb-3">Post Slug</label>
                                <input type="text" class="form-control" name="slug" value="{{ $post->slug }}"
                                    placeholder="Enter Post Searching tags for SEO">
                            </div>

                            <div class="form-group mt-4">
                                <label for="">Image</label>
                                <input type="file" class="form-control-file" name="image">
                            </div>
                            @if ($post->image)
                                <div class="form-group mt-4">
                                    <img src="{{ asset('assets/uploads/posts/' . $post->image) }}" width="200">
                                </div>
                            @endif
                            <div class="form-group mt-4">
                                <label for="">status</label>
                                <input type="checkbox" name="status" {{ $post->status == '1' ? 'checked' : '' }}>
                            </div>
                            <div class="form-group mt-4">
                                <label for="">Trending</label>
                                <input type="checkbox" name="trending" {{ $post->trending == '1' ? 'checked' : '' }}>
                            </div>
                        </div>
                        <div class="container">
                            <div class="form-group">
                                <label for="" class="mb-3">Content</label>
                                <textarea class="form-control your_summernote"name="content" rows="20">{{ $post->content }}</textarea>
                            </div>
                        </div>
                        <div class="form-group mt-4">
                            <label for="">Select Tags </label>
                            <select class="tags-multiple-limitation form-control" name="tags[]" multiple>
                                @foreach ($tags as $key => $tag)
                                    <option value="{{ $tag->id }}"
                                        {{ $post->Post_tag->contains($tag->id) ? 'selected' : '' }}>
                                        {{ $tag->title }}</option>
                                    {{-- <option value="{{ $tag->id }}"
                                      {{$post->Post_tag . '' .contain($tag->id.) ? 'selected' }}>{{ $tag->title }}</option> --}}
                                @endforeach
                            </select>
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
@section('scripts')
    <script>
        $(".tags-multiple-limitation").select2({
            maximumSelectionLength: 30,
            placeholder: 'Select Tags for Post ',
        });
    </script>
@endsection


@endsection
