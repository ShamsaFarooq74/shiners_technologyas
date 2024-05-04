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
                    <a href="{{ route('service.index') }}" class="btn btn-success">View All Service</a>
                </div>
                @include('layouts.inc.flashmesseges')
                <form action="{{ route('service.update',$service->id) }}" method="POST" enctype="multipart/form-data"
                    class="border shadow">
                    @csrf
                    @method('PUT')
                    <div class="row" class="border">
                        <div class="col-md-8 mx-auto py-4">
                            <div class="form-group mb-3">
                                <label for=""class="mb-3">Service Title</label>
                                <input type="" class="form-control" name="title"
                                    value="{{ $service->title }}"placeholder="Enter Service Title">
                            </div>
                            <div class="form-group mb-3">
                                <label for=""class="mb-3">Enter Description</label>
                                <textarea type="" class="form-control" rows="6" name="description"
                                    placeholder="Enter Service Description">{{ $service->description }}</textarea>
                            </div>
                            <div class="form-group mb-3">
                              <label for=""class="mb-3">Enter Long Description</label>
                              <textarea type="" class="form-control your_summernote"  rows="20" name="long_description"
                             placeholder="Enter Service Description" >{{$service->long_description}}</textarea>
                          </div>
                            <div class="form-group mb-3">
                                <label for=""class="mb-3">Select Image</label>
                                <input type="file" class="form-control" name="image" value="{{ old('image') }}">
                                @if ($service->image)
                                    <img src="{{ asset('assets/uploads/services/' . $service->image) }}" alt="">
                                @endif
                                <div id="img-holder"></div>
                            </div>
                            <div class="py-5 mb-3">
                              <label for="">Select Tags</label>
                              @php

                                  $collection = collect();
                                  foreach (json_decode($service->tags) as $key => $ctag) {
                                      $collection->push($ctag);
                                  }

                              @endphp

                              <select class="tags-multiple-limit form-control" name="tags[]" multiple>
                                  @foreach ($tags as $key => $tag)
                                      @if ($collection->contains($tag->title))
                                          <option value="{{ $tag->title }}" selected>{{ $tag->title}}
                                          </option>
                                      @else
                                          <option value="{{ $tag->title}}">{{ $tag->title }}</option>
                                      @endif
                                  @endforeach
                              </select>
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
@section('scripts')

    <script>
        //project image preview
        $('input[type="file"][name="image"]').on('change', function() {
            var img_path = $(this)[0].value;
            var img_holder = $('.img-holder');
            var extension = img_path.substring(img_path.lastIndexOf('.') + 1).toLowerCase();
            img_holder.empty();
            var reader = new FileReader();
            reader.onload = function(e) {
                $('<img/>', {
                    'src': e.target.result,
                    'class': 'img-fluid',
                    'style': ' max-width: 200px; max-height: 200px;margin: 10px;'
                }).appendTo(img_holder);
            }
            img_holder.show();
            reader.readAsDataURL($(this)[0].files[0]);
        });


        $(".tags-multiple-limit").select2({
            maximumSelectionLength: 30,
            placeholder: 'Select Tags for Service ',
        });
    </script>
@endsection
