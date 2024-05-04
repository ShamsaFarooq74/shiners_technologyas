@extends('layouts.blog_inc.master')
@section('title', 'Admin Panel')
@section('content')
    {{-- project headings start --}}
    <div id="blog-nav-bg">


        <div class="container">
            <div class="row gx-0 pb-3">
                <div class="col-md-12 py-4">
                    <h1 class="display-4 fw-bold d-flex justify-content-center">{{ $post->project_title }}</h1>
                </div>
                <div class="col-md-3 col-sm-6 mb-4 px-2">
                    <div class="text-center ">
                        <p class="small smallfont cfont-light">CLIENT</p>
                        <h6 class="fw-bold fs-6">{{ $post->client_company_name }}</h6>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 mb-4 px-2">
                    <div class="text-center ">
                        <p class="small cfont-light">SERVICES</p>
                        <h6 class="fw-bold fs-6 flex-wrap line-hight">
                            @foreach ($post->projectService as $key => $projectService)
                                {{ $projectService->serviceName->title }}
                                @if (!$loop->last)
                                    ,
                                @endif
                            @endforeach
                        </h6>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 mb-4 px-2">
                    <div class="text-center ">
                        <p class="small cfont-light">DATE</p>
                        <h6 class="fw-bold fs-6">{{ $post->created_at->format('M d , Y ') }}</h6>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 mb-4 px-2">
                    <div class="text-center ">
                        <p class="small cfont-light">TEAM</p>
                        @foreach ($post->projectTeam as $key => $projectTeam)
                            <h6 class="fw-bold fs-6">{{ $projectTeam->projectTeamName->name }} -
                                @foreach ($projectTeam->projectTeamName->getRoleNames() as $roleName)
                                    {{ $roleName }}
                                @endforeach

                            </h6>
                        @endforeach
                    </div>
                </div>
            </div>
            <hr>
        </div>
    </div>
    {{-- project headings end --}}
    {{-- project description start --}}
    <div class="container py-5">
        <div class="row">
            <div class="col-md-6 mx-auto pb-5">
                <img class="w-100 shadow rounded-4" src="{{ asset('assets/uploads/posts/' . $post->project_image) }}" alt="">
            </div>
        </div>
        <div class="row gx-0 pb-5">
            <div class="col-md-7 mx-auto ">
                <h5 class="text-dark text-center" style="line-height: 1.6;">
                    {!! $post->description !!}
                </h5>
            </div>
        </div>
        <div class="row gx-0 pb-3">
            <div class="col-md-6 mx-auto pb-5  ">
                <a href="{{ $post->reference_link }}"
                    target="_blank"class="d-flex justify-content-center">{{ $post->reference_link }}</a>
            </div>
        </div>
        <hr>
    </div>
    {{-- project description end --}}
    {{-- our challenges start --}}
    <div class="container">
        <div class="row">
            <div class="col-md-4  pt-5">
                <div>
                    <h1 class="display-5 fw-bold">Our <br><span class="blue5"> Challenge</span></h1>
                </div>
            </div>
            <div class="col-md-8 our-challenge py-5">
                <p class="small cfont-light">{!! $post->our_challenge !!}</p>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-md-10 mx-auto">
                        <div class="row">
                            @foreach (json_decode($post->our_challenge_images) as $image)
                                <div class="col-md-6 my-auto py-3">
                                    <img class="w-100  " src="{{ asset('assets/uploads/posts/' . $image) }}" alt=""
                                        style="border-radius:5%;">
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    {{-- our challenges start --}}
    {{-- our solution start --}}
    <div class="container py-5">
        <div class="row">
            <div class="col-md-4 pe-5 py-5">
                <div>
                    <h1 class="display-5 fw-bold">Solution & <span class="blue5"> Result</span></h1>
                </div>
            </div>
            <div class="col-md-8 our-solution">
                {!! $post->our_solution !!}
            </div>
        </div>
    </div>
    {{-- our solution end --}}

    {{-- client feedback comment start --}}
    <div class="container py-5">
        <div class="row">
            <div class="col-md-6 mx-auto">
                <h4 class="text-dark text-center pb-5">
                    {!! $post->review !!}
                </h4>
            </div>
        </div>
        <hr>
    </div>
    {{-- client feedback comment end --}}

    {{-- next project start --}}
    <div class="container py-5">
        <div class="row pb-5">
            <div class="col-md-6 mx-auto">
                <h5 class=" text-center text-secondary mb-3">NEXT PROJECT</h5>
                <h1 class="text-dark text-center pb-5 fw-bold">
                    {{ $post->next_project }}
                </h1>
            </div>
        </div>
    </div>
    {{-- next project end --}}
@endsection
