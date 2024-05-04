
<nav class="navbar navbar-expand-lg portfolio-nav  sticky-top fw-bold text-dark pb-4 navc fs-13px {{Request::is('portfolio-view')||Request::is('about-us')?'nav-bg-color':'bg-light'}}">
    <div class="container">

            <a class="navbar-brand me-5 " href="{{route('frontpage.index')}}"><img class="blog-brand" src="{{ asset('assets/media/logos/shiners_technologies_blue.png')}}"
                    alt=""></a>
            <button class="navbar-toggler " type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

        <div class="collapse navbar-collapse " id="navbarSupportedContent">
            <ul class="nav navbar-nav d-flex justify-space-between ">
                <li class="nav-item">
                  <a class="nav-link px-4" href="{{route('frontpage.index')}}">Home</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link px-4 dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Pages
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <li><a class="dropdown-item" href="{{route('blog.services')}}">Services</a></li>
                  <li><a class="dropdown-item" href="{{route('blog.about')}}">About</a></li>
                </ul>
              </li>
                <li class="nav-item">
                    <a class="nav-link px-4" href="{{route('portfolio.portfolio')}}">Portfolio</a>
                </li>
                <li class="nav-item px-4">
                    <a class="nav-link " href="{{route('blog.index')}}">Blog</a>
                </li>
                <li class="nav-item px-4">
                    <a class="nav-link " href="{{route('blog.contactUs')}}">Contact Us</a>
                </li>
            </ul>
            {{-- <ul class="nav navbar-nav d-flex flex-row">
              @if(Auth::check())
              <li class="nav-item dropdown  me-5">
                <a class="nav-link   dropdown-toggle me-4" href="{{ route('frontpage.index') }}"
                    id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                   <span class="fs-6">{{Auth::user()->name}}</span>
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <li><a class="dropdown-item " href="{{ route('logout') }}">Logout</a></li>
                </ul>
            </li>
            @else
              <li class="nav-item px-3">
                    <a class="nav-link" href="{{route('login')}}"><span class=" pe-2"><i class="fa fa-thin fa-user"></i></span>
                        Sign In</a>
                </li>
                <li class="nav-item ms-5">
                    <a href="{{route('register')}}" class="btn rounded-pill pt-0 pb-1 px-0 border-0 borde navcbtn">
                        <div class=" btn px-5 py-2  rounded-pill  border-0  text-light fw-bold navcbtn2">
                            Register
                        </div>
                    </a>
                </li>

                </li>
                @endif
            </ul> --}}

        </div>
    </div>
</nav>
