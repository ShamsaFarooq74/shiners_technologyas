@extends('layouts.blog_inc.master')
@section('title', 'Admin Panel')
@section('content')

    <div style="background-color:#e7f1ff" id="blog-nav-bg">
        {{-- portfolio showcase start --}}
        <div class="container">
            <div class="row d-flex justify-content-center py-4">
                <div class="col-md-8 text-center d-flex justify-content-center py-4">
                    <div>
                        <h1 class="display-5 fw-bold">Our <span class="blue5">Projects</span></h1>
                        <p class="cfont-light">We have an experienced team of production and inspection personnel to ensure
                            quality.</p>
                    </div>
                </div>
            </div>
        </div>
        {{-- porfolio showcase end --}}
        {{-- project list start --}}
        <div class="container py-3">
            <div class="row">
                <div class="col-md-10 mx-auto">
                    <div class="d-flex justify-content-around flex-wrap">
                        <a href="{{ route('portfolio.portfolio') }}"
                            class="border-0 bg-transparent fw-bold text-decoration-none nav-link mb-4 {{Request::is('portfolio-view')?'active-blue-5':''}}">All</a>
                        @foreach ($services_list as $service)
                            <form action="{{ route('project.search', $service->id) }}" method="post">
                                @csrf
                                <button type="submit" class="border-0 bg-transparent fw-bold {{Request::is('search-project/'.$service->id)?'active-blue-5':''}}">{{ $service->title }}</button>
                            </form>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
        {{-- project posts end --}}
        <div class="container pt-5 pb-2">
            <div class="row">
                <div class="col-md-11 mx-auto">
                    @include('layouts.inc.flashmesseges')
                    <div class="row">
                        @include('portfolio.partial_project_post')
                    </div>
                </div>
            </div>
        </div>
        <div class="container mb-5">
            <div class="container pt-5 pb-2">
                <div class="row">
                    <div class="col-md-11 mx-auto">
                        <div class="row " id="results">
                        </div>
                        <!-- Data Loader -->
                        <div class="auto-load text-center">
                            <svg version="1.1" id="L9" xmlns="http://www.w3.org/2000/svg"
                                xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" height="60"
                                viewBox="0 0 100 100" enable-background="new 0 0 0 0" xml:space="preserve">
                                <path fill="#000"
                                    d="M73,50c0-12.7-10.3-23-23-23S27,37.3,27,50 M30.9,50c0-10.5,8.5-19.1,19.1-19.1S69.1,39.5,69.1,50">
                                    <animateTransform attributeName="transform" attributeType="XML" type="rotate"
                                        dur="1s" from="0 50 50" to="360 50 50" repeatCount="indefinite" />
                                </path>
                            </svg>
                        </div>
                          <!-- Data Loader end -->
                    </div>
                </div>
            </div>
              <!-- Load more button-->
            <div class="d-flex justify-content-center mt-3">
                <button type="submit" class="btn rounded-pill pt-0 pb-1 px-0 border-0 borde navcbtn">
                    <div class=" btn px-4 py-2  rounded-pill  border-0  text-light fw-bold navcbtn2">
                        <a onclick="load_more()" class="text-decoration-none bg-transparent text-light">Load More</a>
                    </div>
                </button>
            </div>
        </div>
        {{-- project posts end --}}

        {{-- set project start --}}
        <div class="bg-white portfolio-globe">
            <div class="container py-5">
                <div class="row d-flex justify-content-center py-5">
                    <div class="col-md-9 text-center d-flex justify-content-center py-4">
                        <div>
                            <h1 class="display-5 fw-bold">Access your business potentials today & find opportunity for</h1>
                            <h1 class="display-5 fw-bold">bigger success</h1>
                        </div>
                    </div>
                    <div class="d-flex justify-content-center pt-5">
                        <div class="px-3">
                            <a href="{{ route('blog.contactUs') }}"
                                class="btn rounded-pill pt-0 pb-1 px-0 border-0 borde navcbtn">
                                <div class=" btn px-4 py-2  rounded-pill  border-0  text-light fw-bold navcbtn2">
                                    <span class="pe-2"> Set A Project Now </span>
                                </div>
                            </a>
                        </div>
                        <div class="px-3">
                            <a href="{{url('/')}}" type="submit" class="btn rounded-pill pt-0 pb-1 px-0 border-0 borde navcbtn">
                                <div class=" btn px-4 py-2  rounded-pill  border-0  text-light fw-bold navcbtn2">
                                    <span class="pe-2"> See Price & Plan </span>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <hr>
        </div>

        {{-- set project end --}}

    </div>

@endsection

@section('scripts')

    <script>
        var site_url = "{{ url('/') }}";

        var page = 2;
        $('.auto-load').hide();

        function load_more() {
            $.ajax({
                    url: site_url + "/portfolio-view?page=" + page,
                    type: "get",
                    datatype: "html",
                    beforeSend: function() {
                        $('.auto-load').show();
                    }

                })
                .done(function(data) {
                    page++;
                    if (data.length == 0) {
                        $('.auto-load').html("We don't have more data to display :(");
                        return;
                    }
                    $('.auto-load').hide();

                    $("#results").append(data);
                })
                .fail(function(jqXHR, ajaxOptions, thrownError) {
                    alert('No response from server');
                });
        }
    </script>
@endsection
