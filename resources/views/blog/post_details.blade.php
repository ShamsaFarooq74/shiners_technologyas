@extends('layouts.blog_inc.master')
@section('title', 'Admin Panel')
@section('content')

    {{-- heading start --}}
    <div class="container pb-5" id="blog-nav-bg">
        <div class=" d-flex justify-content-center">
            <h1 class="fw-bold pb-3"> {{$post->title}}</h1>
        </div>
        <div class="d-flex justify-content-center pb-4">
            <p class="small fw-bold"><span class="blue5"> NEWS </span>
                |
                <span class="cfont-light"><i class="fa-solid fa-clock px-2"></i>{{ $post->created_at->diffForHumans() }}
            </p></span>

        </div>
        <div class="row pb-5">
            <div class="col-md-12 mx-autoalign-items-center ">
                <img class="w-100 cpost-image" src="{{ asset('assets/uploads/posts/' . $post->image) }}" alt="">
            </div>
        </div>
        <div class="col-md-6 ps-4 d-flex justify-content-between small fontlight">
            <div>
                <i class="fa-solid fa-circle text-primary"></i> <span class="pe-4">{{ $post->User->name }}</span>
            </div>
            <div>
                <span class="ps-4"><i class="fa-solid fa-comment pe-2"></i>{{$count}} comments </span>
            </div>
        </div>
        <div class="row py-5">
          <div class="col-md-9">
            <div class="row">
              <div class="col-md-10 mx-auto">
                <div class="">{!!$post->content!!}</div>
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
                    <div class="col-md-4">
                        <img class="rounded-3 w-100" src="{{ asset('assets/uploads/posts/'.$post->image) }}"
                            alt="">
                    </div>
                    <div class="col-md-8">
                        <h6 class="fw-bold pb-2">{{$post->title}}</h6>
                        <p class="small smallfont cfont-light">{{substr(strip_tags(html_entity_decode($post->content)),0,50) }}<span> ...ReadMore</span>
                        </p>
                    </div>
                    <hr class="py-4">
                </div>
                @endforeach
            </div>
        </div>




        </div>

    </div>
    {{-- heading end --}}
    {{-- user comments start --}}
    <div class="container py-5">
        <div class="row">
            <h4>{{ $count }} comments</h4>
            @foreach ($comments as $comment)
                <div class="col-md-9">
                    <div class="px-5 py-4" style="background-color:#eaebeb">
                        <div class="d-flex justify-content-between">
                          <p class="fw-bold pb-2">{{ $comment->name }}</p>
                          <p class="text-muted small"> {{ $comment->created_at->format('d-M-y') }}</p>

                        </div>
                        <p class="small " style="line-height:2.5">{{ $comment->comment }}</p>

                    </div>
                    <hr>
                </div>
            @endforeach

        </div>
    </div>
    {{-- user comments end --}}
    {{-- leave a comment start --}}
    <div class="container py-5">
        <h3 class="fw-bold pb-4">Leave A Comment</h3>
        <div class="row">
            <div class="col-md-9">
                @include('layouts.inc.flashmesseges')
                <form action="{{ route('comment.store', $post->id) }}" class="smallfont px-3" method="post">
                    @csrf
                    <div class="row">
                        <div class="mb-3 col-md-12">
                            <textarea name="comment" class="form-control py-3 px-4  smallfont rounded-3" cols="30" rows="10"
                                placeholder="Leave Your Comment"></textarea>
                        </div>
                        <div class="mb-3 col-md-6">
                            <input type="text" class="form-control  py-3 px-4 smallfont rounded-3" name="name"
                                placeholder=" Enter Your Name">
                        </div>
                        <div class="col-md-6 mb-3">
                            <input type="email" class="form-control py-3 px-4  smallfont rounded-3" name="email"
                                placeholder=" Enter You Email">
                        </div>
                        <div class="pb-4">
                            <input type="checkbox" class="form-check-input me-2 mt-0" value="">
                            <label class="form-check-label">
                                Save my name & email in this browser for next time I comment
                            </label>
                        </div>
                        <div class=" mt-3">
                            <button type="submit" class="btn rounded-pill pt-0 pb-1 px-0 border-0 borde navcbtn">
                                <div class=" btn px-3 py-2  rounded-pill  border-0  text-light fw-bold navcbtn2">
                                    <span class="pe-2">Sumbit Comment </span>
                                </div>
                            </button>

                        </div>
                    </div>
                </form>
            </div>
        </div>

    </div>
    {{-- leave a comment end --}}
@endsection

