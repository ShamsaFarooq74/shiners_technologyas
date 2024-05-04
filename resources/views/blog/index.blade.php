@extends('layouts.blog_inc.master')
@section('title', 'Admin Panel')
@section('content')
    <div class="container py-5">
        {{-- blog showcase start --}}
        <div class="row d-flex justify-content-center py-4">
            <div class="col-md-8 text-center d-flex justify-content-center py-4" id="blog-nav-bg">
                <div>
                    <h1 class="display-5 fw-bold">Our <span class="blue5">Journal</span></h1>
                    <p class="cfont-light">Get the latest articles from our journal, writing, discuss and share</p>
                </div>
            </div>
        </div>
        {{-- blog showcase end --}}
    </div>
    <div class="container py-2">
        <div class="row">
            <div class="col-md-10 mx-auto ">
              <div class="owl-carousel projectslider owl-theme rounded-4">
                @foreach ($projectPosts as $key=> $post )
                  <div class="img-container rounded-5 d-flex justify-content-center">
                    <img class="w-100 rounded-5" src="{{asset('assets/uploads/posts/'.$post->project_image)}}" alt="">
                    <div class="slider-data">
                      <a href="{{route('portfolio.show',$post->id)}}" class="text-decoration-none text-light">
                        <h2 class="fw-bold hover-blue-5-slider "> {{$post->project_title}}</h2>
                    </a>
                      <div class="">
                        <h1 class="small text-light font-14px lh-1-6">{{substr(strip_tags(html_entity_decode($post->description)),0,200) }}</h1>
                    </div>
                    </div>
                  </div>

                @endforeach
              </div>
            </div>
        </div>
    </div>

    {{-- papular post section start --}}
    <div class="container py-5">
        <div class="d-flex justify-content-center">
            <h5 class="fw-bold pb-3">POPULAR POSTS</h5>
        </div>
        <div class="row gx-5 ">
          @if(isset($trending_posts))
            @foreach ($trending_posts as $trending_post)
                <div class="col-md-4 border-end border-gray">
                    <div class="card mb-3  bg-light px-4  border-0">
                        <div class="h-200 rounded-4 d-flex justify-content-center">
                            <img src="{{ asset('assets/uploads/posts/' . $trending_post->image) }}" class="card-img-top" alt="...">
                        </div>
                        <div class="card-body py-5 ">
                            <p class="small"><span class="blue5">News </span><span class="cfont-light"> | </span> <span
                                    class="small px-2 hover-blue-5 ">{{ $trending_post->created_at->diffForHumans() }}</span> </p>
                            <h5 class="card-title fw-bold mb-4">
                                <a href="{{ route('blog.postDetails', $trending_post->id) }}"
                                    class="text-decoration-none  hover-blue-5 ">{{ $trending_post->title }}</a>
                            </h5>
                            {{-- <h1 class=" card-text small smallfont cfont-light py-5 ">{{strip_tags(Str::limit($trending_post->content,120))}} </h1> --}}
                            {{-- <h1 class=" card-text small smallfont cfont-light py-5 ">{{ Str::limit($trending_post->content ?? '',50,' ...') }} </h1>--}}
                                 <p class=" card-text small smallfont cfont-light mb-4 ">{{substr(strip_tags(html_entity_decode($trending_post->content)),0,100) }}<span> ...ReadMore</span> </p>
                            {{-- <div class="wrapper">
                                 <h1 class=" card-text small smallfont cfont-light py-5 demo-2">{!!$trending_post->content!!}</h1>
                                </div> --}}
                            <div>
                                <p><i class="fa-solid fa-circle text-primary"></i> <span class="pe-4">By Admin</span>
                                    <span class="ps-4"><i class="fa-solid fa-comment pe-2"></i>{{$trending_post->Comments->count()}}</span> <span></p>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
            @endif
        </div>
    </div>
    <hr class="muted">
    {{-- papular post section start --}}
    {{-- post section start --}}
    <div class="container py-5">
        @include('layouts.inc.flashmesseges')
        <div class="row">
            <div class="col-md-9">
                @foreach ($posts as $post)

                    <div class="row py-2">
                        <div class="col-md-4">
                          <div class="h-200 rounded-4 d-flex justify-content-center">
                            <img class="
                            rounded-4 w-100 mb-3" src="{{ asset('assets/uploads/posts/' . $post->image) }}"
                                alt="">
                              </div>
                        </div>
                        <div class="col-md-8">
                            <div class="">
                                <p class="small"><span class="blue5 pe-5">NEWS</span> | <i
                                        class="fa-solid fa-clock px-2"></i>{{ $post->created_at->diffForHumans() }}</p>
                            </div>
                            <a href="{{ route('blog.postDetails', $post->id) }}" class="text-decoration-none text-dark">
                                <h5 class="fw-bold py-3">{{ $post->title }}</h5>
                            </a>
                            <p class="small cfont-light pb-5"> {{substr(strip_tags(html_entity_decode($post->content)),0,200) }}<span> ...ReadMore</span></p>
                            <div class="small ">
                                <p><i class="fa-solid fa-circle text-primary"></i> <span
                                        class="pe-4">{{ $post->User->name }}</span>
                                    <span class="ps-4 cfont-light ps-5"><i class="fa-solid fa-comment pe-2"></i>{{$post->Comments->count()}}</span>
                                </p>
                            </div>

                        </div>
                    </div>
                    <hr>
                @endforeach
                <div class="container py-5">
                  <div class="row">
                      <div class="col-md-9 d-flex justify-content-center ">
                          <div class="">
                              {{ $posts->onEachside(1)->links() }}
                          </div>

                      </div>
                  </div>

              </div>
            </div>
            <div class="col-md-3">
                <div class="form-control rounded-pill smallfont border-primary">
                  <form action="{{route('blog.search')}}" method="post">
                    @csrf

                    <input type="text" class="border-0 py-2 px-4 me-2 csearch" name="search"
                        placeholder="Search"><span><button type="submit" class=" border-0 p-0 m-0 bg-transparent"><i class=" ps-2 fa fa-thin fa-magnifying-glass"></i></button></span>
                      </form>
                </div>
                <div class="py-4">
                    <h5 class="pb-3 fw-bold d-flex justify-content-center">RECENT POST</h5>
                    @foreach($recent_posts as $post)
                    <div class="row">
                        <div class="col-md-4 col-sm-4 recent-post d-flex justify-content-center">
                            <img class="rounded-3 w-100" src="{{ asset('assets/uploads/posts/'.$post->image) }}"
                                alt="">
                        </div>
                        <div class="col-md-8 col-sm-8 mb-3">
                            <h6 class="fw-bold pb-2">{{$post->title}}</h6>
                            <p class="small smallfont cfont-light">{{substr(strip_tags(html_entity_decode($post->content)),0,50) }}<span> ...ReadMore</span>
                            </p>
                        </div>
                        @if (!$loop->last)
                        <hr class="py-4">
                    @endif

                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    {{-- post section end --}}



@endsection
@section('scripts')
<script>

var owl = $('.projectslider');
        owl.owlCarousel({
            items: 1,
            loop: true,
            dots: true,
            margin:10,
            arrows:true,
            autoplay: true,
            smartSpeed: 1000,
            autoplayTimeout: 2500,
            autoplayHoverPause: true,
        });
        $('.play').on('click', function() {
            owl.trigger('play.owl.autoplay', [1000])
        })
        $('.stop').on('click', function() {
            owl.trigger('stop.owl.autoplay')
        })

</script>
@endsection
