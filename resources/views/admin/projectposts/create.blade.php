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
                <form action="{{ route('projectPost.store') }}" method="POST" enctype="multipart/form-data"
                    class="border shadow">
                    @csrf
                    <div class="row" class="border">
                        <div class="col-md-8 mx-auto py-4">
                            <div class="form-group mb-3">
                                <label for=""class="mb-3">Project Title</label>
                                <input type="" class="form-control" name="project_title"
                                    value="{{ old('project_title') }}"placeholder="Enter Project tile">
                            </div>
                            <div class="form-group mb-3">
                                <label for=""class="mb-3">Company Name</label>
                                <input type="" class="form-control" name="client_company_name"
                                    value="{{ old('client_company_name') }}"placeholder="Enter Company Name">
                            </div>
                            <div class="form-group mb-3">
                              <label for="" class="mb-3">Client Name</label>
                              <input type="text" class="form-control" name="client_name" value="{{ old('client_name') }}"
                                  placeholder="Enter Team Mates Names">
                          </div>
                          <div class="form-group mb-3">
                            <label for="" class="mb-3">Client Role or Position</label>
                            <input type="text" class="form-control" name="client_role" value="{{ old('team') }}"
                                placeholder="Enter Team Mates Names">
                        </div>
                            <div class="form-group my-4">
                                <label for="">Project Image</label>
                                <input type="file" class="form-control-file " id="project_image" name="project_image"
                                    value="{{ old('project_image') }}">
                                <div id="img-holder"></div>
                            </div>
                            <div class="img-holder">
                            </div>
                            <div class="form-group my-4">
                                <label for="">Our Challenges Image</label>
                                <input type="file" class="form-control-file " id="our-challenge-img-select"
                                    name="our_challenge_images[]" value="{{ old('our_challenge_images') }}" multiple>
                                <div id="our-challenge-img-preview-container"></div>
                            </div>
                            <div class="py-5 mb-3">
                              <label for="">Team </label>
                                <select class="team-multiple-limit form-control" name="teamMembers[]"
                                    multiple>
                                    @foreach($teamMembers as $key => $member)
                                    <option  value="{{$member->User->id}}">{{$member->User->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="py-5 mb-3">
                              <label for="">Components</label>
                                <select class="compnent-multiple-limit form-control" name="components[]"
                                    multiple>
                                    @foreach($components as $key => $component)
                                    <option  value="{{$component->id}}">{{$component->title}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="py-5 mb-3">
                              <label for="">Select Services </label>
                                <select class="category-multiple-limit form-control" name="services[]"
                                    multiple>
                                    @foreach($services as $key => $service)
                                    <option  value="{{$service->id}}">{{$service->title}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group mb-3">
                                <label for="" class="mb-3">Reference Link</label>
                                <input type="text" class="form-control" name="reference_link"
                                    value="{{ old('reference_link') }}" placeholder="Enter Team Mates Names">
                            </div>
                            <div class="form-group mb-3">
                              <label for="" class="mb-3">Next Project</label>
                              <input type="text" class="form-control" name="next_project"
                                  value="{{ old('next_project') }}" placeholder="Enter your next project optional!">
                          </div>

                        </div>
                        <div class="container">
                            <div class="form-group mb-3">
                                <label for="" class="mb-3">Description</label>
                                <textarea class="form-control your_summernote"name="description" rows="10">{{old('description') }}</textarea>
                            </div>
                            <div class="form-group mb-3">
                                <label for="" class="mb-3">Our Challenge</label>
                                <textarea class="form-control your_summernote"name="our_challenge" rows="10" >{{old('our_challenge') }}</textarea>
                            </div>
                            <div class="form-group mb-3">
                                <label for="" class="mb-3">Our Solution</label>
                                <textarea class="form-control your_summernote"name="our_solution"  rows="10" >{{old('our_solution') }}</textarea>
                            </div>
                            <div class="form-group mb-3">
                                <label for="" class="mb-3">Review</label>
                                <textarea class="form-control your_summernote "name="review" rows="10" >{{old('review') }}</textarea>
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
@section('scripts')
    <script>
        //project image preview
        $('input[type="file"][name="project_image"]').on('change', function() {
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
        //our challenge img preview
        const imageSelect = document.getElementById("our-challenge-img-select");
        const previewContainer = document.getElementById("our-challenge-img-preview-container");

        imageSelect.addEventListener("change", function() {
            previewContainer.innerHTML = "";
            const files = this.files;

            for (let i = 0; i < files.length; i++) {
                const file = files[i];
                const reader = new FileReader();

                reader.addEventListener("load", function() {
                    const previewImg = document.createElement("img");
                    previewImg.classList.add("preview-img");
                    previewImg.src = reader.result;
                    previewContainer.appendChild(previewImg);
                });
                reader.readAsDataURL(file);
            }
        });

        //multiple select limit allowed
        $(".category-multiple-limit").select2({
            maximumSelectionLength: 10,
            placeholder: 'Select Servie Categories ',
        });
        $(".team-multiple-limit").select2({
            maximumSelectionLength: 10,
            placeholder: 'Select Team Mates Who Worked on Poject ',
        });
        $(".compnent-multiple-limit").select2({
            maximumSelectionLength: 10,
            placeholder: 'Select Components Frameworks used in Project',
        });
    </script>
@endsection
