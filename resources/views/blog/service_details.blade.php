@extends('layouts.blog_inc.master')
@section('title', 'Admin Panel')
@section('content')

    {{-- project description start --}}
    <div class="container py-5" id="blog-nav-bg">
        <div class="row">
            <div class="col-md-10 mx-auto">
                <div class="row gx-0 ">
                    <div class="col-md-6 mx-auto py-5" style="background-color:#60d08f">
                        <div class=" py-5 d-flex justify-content-center align-items-center text-center">
                            <img class="w-50  py-5" src="{{ asset('assets/uploads/services/' . $service->image) }}"
                                alt="">
                        </div>
                    </div>
                    <div class="col-md-6 py-5" style="background-color:#32ACE3">
                        <div class="text-light py-5 px-5">
                            <h1 class="fs-1 fw-bold text-light mb-2 py-5">{{ $service->title }}</h1>
                            <p class="l-h-30px fs-18px mb-5 fw-lighter">{{ $service->description }}</p>
                            <div class="d-flex justify-content-center pt-4">
                                <a href="" class="btn btn-secondary fs-12px py-2 px-5">HIRE US</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container py-5">
                <div>
                    {!! $service->long_description !!}
                </div>
            </div>
        </div>
    </div>


    <div class="container pt-5 pb-2">
        <div class="row">
            <div class="col-md-11 mx-auto">
                @include('layouts.inc.flashmesseges')
                <div class="row">
                    @if ($posts)
                        @foreach ($posts as $post)
                            <div class="col-md-4 mb-3 border-dark rounded-3">
                                <div class="card pb-3 shadow rounded-3">
                                    <img class=" pb-4 rounded-3" style="height: 240px"
                                        src="{{ asset('assets/uploads/posts/' . $post->project_image) }}">
                                    <div class="px-4">
                                        <a href="{{ route('portfolio.show', $post->id) }}"
                                            class="text-decoration-none text-dark">
                                            <h5 class="fw-bold hover-blue-5 "> {{ $post->project_title }}</h5>
                                        </a>
                                        <p class="small smallfont blue5">
                                            @foreach ($post->projectService as $projectService)
                                                {{ $projectService->serviceName->title }}
                                            @endforeach
                                        </p>
                                    </div>
                                    <div class="px-4">
                                        <h1 class="small text-gray font-14px">
                                            {{ substr(strip_tags(html_entity_decode($post->description)), 0, 200) }}</h1>
                                    </div>
                                    <div class="px-4">
                                        @foreach ($post->projectComponents as $projectComponent)
                                            <a href="#"
                                                class="small smallfont cfont-light text-decoration-none cbg-gray">{{ $projectComponent->projectComponentName->title }}</a>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    @else
                        <div class="container py-5">
                            <div class="d-flex justify-content-center">
                                <h1 class="fw-bold text-warning">Sorry No Data Project Found!</h1>
                            </div>
                    @endif

                </div>
            </div>
        </div>
    </div>

@endsection
