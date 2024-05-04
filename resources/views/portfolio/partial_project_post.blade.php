@if($posts)
@foreach ($posts as $post)
<div class="col-md-4 mb-5 border-dark rounded-3">
  <div class="card pb-3 shadow rounded-3 portfolio-post">
      <img class=" pb-4 rounded-3" style="height: 240px" src="{{ asset('assets/uploads/posts/'.$post->project_image) }}">
      <div class="px-4 mb-2">
          <a href="{{route('portfolio.show',$post->id)}}" class="text-decoration-none text-dark">
              <h5 class="fw-bold hover-blue-5 "> {{$post->project_title}}</h5>
          </a>
          <p class="small smallfont blue5">
            @foreach($post->projectService as $projectService)
            {{$projectService->serviceName->title}}
            @endforeach
          </p>
      </div>
      <div class="px-4 mb-3">
          <h1 class="small text-gray font-14px line-hight">{{substr(strip_tags(html_entity_decode($post->description)),0,100)}} <span>...readmore</span> </h1>
      </div>
      <div class="px-4">
        @foreach($post->projectComponents as $projectComponent)
          <a href="#" class="small smallfont cfont-light text-decoration-none cbg-gray">{{$projectComponent->projectComponentName->title}}</a>
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
