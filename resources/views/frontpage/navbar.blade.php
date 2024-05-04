<div class ="first-bg-img">
<nav class="navbar navbar-expand-lg sticky-top pb-4 frontnav py-4">
    <div class="container gx-0">
        <a class="navbar-brand  shiner-brand" href="{{route('frontpage.index')}}"><img src="{{ asset('assets/media/logos/shiners_technologies.png') }}"
                class="w-100  pe-5"alt=""></a>
        <button class="navbar-toggler " type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse pt-0 mt-0  ms-5" id="navbarSupportedContent">
            <ul class="nav navbar-nav c-ul ">
                <li class="nav-item">
                  <a class="nav-link mt-3 px-4 text-light fs-14px  text-uppercase" href="{{ route('frontpage.index') }}">Home</a>
              </li>
              <li class=" nav-item dropdown">
                <a class=" nav-link mt-3 dropdown-toggle nav-link px-4 text-light fs-14px  text-uppercase pb-3"  href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                  Pages
                </a>

                <ul class="dropdown-menu cbg-secondary mt-3" aria-labelledby="dropdownMenuLink">
                  <li><a class="dropdown-item text-light fs-14px py-2 text-uppercase" href="{{route('blog.services')}}">Services</a></li>
                  <li><a class="dropdown-item text-light fs-14px py-2 text-uppercase" href="{{route('blog.about')}}">About</a></li>
                  <li><a class="dropdown-item text-light fs-14px py-2 text-uppercase" href="#">Data Analysis</a></li>
                  <li><a class="dropdown-item text-light fs-14px py-2 text-uppercase" href="#">App Landing</a></li>
                  <li><a class="dropdown-item text-light fs-14px py-2 text-uppercase" href="#">It Solution</a></li>
                  <li><a class="dropdown-item text-light fs-14px py-2 text-uppercase" href="#">Saas Technology</a></li>
                </ul>
              </li>
              {{-- <li class="nav-item dropdown">
                 <a class="nav-link mt-3 dropdown-toggle nav-link px-4 text-light fs-14px  text-uppercase pb-3" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Pages
                </a>
                <ul class="dropdown-menu cbg-secondary mt-3 p-2" aria-labelledby="navbarDropdown">
                  <li><a class="dropdown-item nav-link ps-4 pe-5 py-2 text-light fs-14px  text-uppercase" href="{{route('blog.services')}}">Services</a></li>
                  <li><a class="dropdown-item nav-link  ps-4 pe-5 py-2 text-light fs-14px  text-uppercase" href="{{route('blog.about')}}">About</a></li>
                </ul>
              </li> --}}
                <li class="nav-item">
                    <a class="nav-link mt-3 px-4 text-light fs-14px  text-uppercase" href="{{ route('portfolio.portfolio') }}">Portfolio</a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link mt-3 px-4 text-light fs-14px  text-uppercase" href="{{ route('blog.index') }}">Blog</a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link mt-3 ps-4 text-light fs-14px  text-uppercase" href="{{ route('blog.contactUs') }}">Contact</a>
                </li>
            </ul>

            @if (Auth::check())
                <ul class="nav navbar-nav mx-auto">
                    <li class="nav-item dropdown  me-5">
                        <a class="nav-link  text-light dropdown-toggle" href="{{ route('frontpage.index') }}"
                            id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            {{ Auth::user()->name }}
                        </a>
                        <ul class="dropdown-menu bg-transparent me-0 pe-0 on-hover-bg" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item text-light me-0 pe-0" href="{{ route('logout') }}">Logout</a>
                            </li>
                        </ul>
                    </li>
                </ul>
            @else
                <ul class="nav navbar-nav mx-auto mt-1 d-flex flex-row justify-content-between">
                    <li class="nav-item ">
                        <a class="nav-link text-light" href="{{ route('login') }}"><span class=" pe-2"><i
                                    class="fa fa-thin fa-user"></i></span>
                            Sign In</a>
                    </li>
                    <li class="nav-item ms-2">
                        <a
                            href="{{ route('register') }}"class=" btn px-3 py-2 rounded-pill border-1 border-light text-light frontnavbtn">
                            <span class="px-3 small text-center"> Register</span>
                        </a>
                    </li>
                </ul>
            @endif

        </div>
    </div>
</nav>
