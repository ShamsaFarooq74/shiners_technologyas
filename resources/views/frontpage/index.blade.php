@extends('frontpage.master')
@section('title', 'Admin Panel')
@section('content')
    {{-- frontend showcase start --}}
    {{-- <div class="style2 overflow-hidden">
      <img src="{{asset('assets/media/bg/showcase_bg_img.png')}}" class="first-bg-img wave"alt="">
    </div> --}}
    <div class="">
        <div class="container py-5">
            <div class="row pt-5">
                <div class="col-md-10 mx-auto showcase-heading">
                    <h1 class="fw-bold text-light text-center text-uppercase  py-4">
                        Shiners technologies
                    </h1>
                    <div class=" text-light text-center mb-5" id="startchange">
                        <h5 class="line-hight">
                            BEST SOLUTIONS FOR <span class="fw-bold"><br> BIG DATA & TECHNOLOGY</span> SERVICES
                        </h5>
                    </div>
                    <div class="d-flex justify-content-center py-5">
                        <a href="https://youtu.be/pGbIOC83-So"
                            class="btn btn-info border-0 rounded-circle animationbutton"><i
                                class="fa-solid fa-play text-white p-3"></i></a>
                    </div>
                </div>
            </div>
        </div>
        {{-- frontend showcase end --}}
        {{-- heading start --}}
        <div class="brands">
            <div class="container py-5">
                <div class="row">
                    <div class="col-md-10 mx-auto py-5">
                        <div class="d-flex justify-content-between">
                            <img src="{{ asset('assets/media/logos/heading1.png') }}" width="110px"alt="">
                            <img src="{{ asset('assets/media/logos/heading2.png') }}" width="110px"alt="">
                            <img src="{{ asset('assets/media/logos/heading3.png') }}" width="110px"alt="">
                            <img src="{{ asset('assets/media/logos/heading4.png') }}" width="110px"alt="">
                            <img src="{{ asset('assets/media/logos/heading5.png') }}" width="110px"alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{-- heading end --}}
        <div class="container py-5">
            <div class="row gx-0 py-5">
                <div class="col-md-8 mx-auto">
                    <div class="text-center">
                        <h4 class="fw-bold text-light line-height-1-4 ">
                            We Can Help To Maintain And Modernize<br>
                            Your IT Infrastructure & Solve Various Infrastructure-Specific <br>
                            Issues A Business May Face.
                        </h4>
                        <p class="py-4 text-light line-hight fs-6">Shiners Technologies Co Is The Partner Of Choice For Many
                            Of
                            The World’s
                            Leading<br>
                            Enterprises, SMEs And Technology Challengers. We Help Businesses Elevate Their Value Through<br>
                            Custom Software Development, Product Design, QA And Consultancy Services.</p>
                        <div class="d-flex justify-content-center ">
                            <a href={{ route('blog.about') }}
                                class="btn border rounded-pill caboutus border-light text-light">More About Us</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>{{-- animation div end --}}
    </div>
    {{-- heading end --}}
    {{-- services start --}}
    <div class="second-bg-image ">
        <div class="container py-5">
            <h1 class="fw-bold display-6 text-light letter-spacing-20 d-flex justify-content-center">SERVICES</h1>
            <div class="py-5">
                <div class="row">
                    <div class="owl-carousel services owl-theme py-5">
                        @foreach ($services as $service)
                            <div class="cborder-right px-5">
                                <div class="d-flex flex-column text-center align-items-center justify-content-center ">
                                    <div class="mb-4 pt-3 d-flex justify-content-center align-items center "
                                        style="width: 80px; height:100px">
                                        <img src="{{ asset('assets/uploads/services/' . $service->image) }}" class="">
                                    </div>
                                    <h4 class="fw-bold text-light mb-4">{{ $service->title }}</h4>
                                    <p class="opacity-50 text-light mb-4">
                                        {{ substr(strip_tags(html_entity_decode($service->description)), 0, 88) }}
                                    </p>
                                </div>
                                <div class="d-flex  flex-wrap  justify-content-center ">
                                    @foreach (json_decode($service->tags) as $tag)
                                        <a
                                            class="text-light cservice-bg m-1 p-1 smallfont text-decoration-none">{{ $tag }}</a>
                                    @endforeach
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
        {{-- services end --}}
        {{-- works start --}}
        <div class="container py-5 ">
            <h1 class="fw-bold text-light text-uppercase d-flex justify-content-center py-5 letter-spacing-20">works</h1>
            <div class="row">
                <div class="col-md-10 mx-auto">
                    <div class="owl-carousel works owl-theme ">
                        <div class="">
                            <div class="d-flex flex-column text-center align-items-center justify-content-center ">
                                <img src="{{ asset('assets/media/slideshow/work2.png') }}"
                                    class="mb-4 pt-3 border rounded-3 border-0 " style="width:97%" alt="">
                                <a href="" class="text-decoration-none">
                                    <h4 class="fw-bold text-light mb-2">Rento Car Rental Dashboard</h4>
                                </a>
                                <a href="" class="opacity-50 text-info mb-4 text-decoration-none">LANDING PAGE, UI/UX
                                    DESIGN
                                </a>
                            </div>
                        </div>
                        <div class="">
                            <div class="d-flex flex-column text-center align-items-center justify-content-center ">
                                <img src="{{ asset('assets/media/slideshow/work.png') }}"
                                    class="mb-4 pt-3 border rounded-3 border-0 " style="width:97%" alt="">
                                <a href="" class="text-decoration-none">
                                    <h4 class="fw-bold text-light mb-2">Analys & Backup Blockchain</h4>
                                </a>
                                <a href="" class="opacity-50 text-info mb-4 text-decoration-none text-uppercase">data
                                    security, it consultation
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="d-flex justify-content-center py-5 ">
                        <a href={{ route('portfolio.portfolio') }}
                            class="px-3 py-2 btn border rounded-pill caboutus border-light text-light smallfont">See All
                            Projects</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- works end --}}

    <div class="bgdarkblue ">
        {{-- why chose us --}}
        <div class=" container border-top-bottom ">
            <h1 class="fw-bold text-uppercase text-center text-light letter-spacing-20 py-5 my-5"> why choose
                us
            </h1>
            <div class="row my-3">
                <div class="col-md-6 mx-auto text-center mb-5">
                    <img src="{{ asset('assets/media/slideshow/circles.png') }}" style="width:80%" alt="">
                </div>
                <div class="col-md-6 ">
                    <p class="my-5 text-light">WE CREATE DIFFERENTIATED VALUE TO RISE TO THE<br>
                        TOP IN THIS FIELD</p>
                    <ul class="navbar">
                        <li class="nav-link d-flex">
                            <div class="me-4 flex-shrink-0">
                                <img src="{{ asset('assets/media/icons/ch1.png') }}" alt="">
                            </div>
                            <div class="mb-4">
                                <h5 class="text-light fw-bold">Afforable Price</h5>
                                <p class="opacity-50 text-light">Nanotechnology immersion along the information high
                                    will close the loop on focusing solely</p>
                            </div>
                        </li>
                        <li class="nav-link d-flex">
                            <div class="me-4 flex-shrink-0">
                                <img src="{{ asset('assets/media/icons/ch2.png') }}" alt="">
                            </div>
                            <div class="mb-4">
                                <h5 class="text-light fw-bold">Top-Notch Experts Consulting</h5>
                                <p class="opacity-50 text-light">Our top-notch Experts with much years of experience
                                    certail will give best solutions for your business</p>
                            </div>
                        </li>
                        <li class="nav-link d-flex ">
                            <div class="me-4 flex-shrink-0">
                                <img src="{{ asset('assets/media/icons/ch3.png') }}" alt="">
                            </div>
                            <div class="mb-5">
                                <h5 class="text-light fw-bold">Dedicated Support 24/7</h5>
                                <p class="opacity-50 text-light">Customer support is always our number one priority.</p>
                            </div>
                        </li>
                    </ul>
                    <div class="mb-5 ">
                        <a href="{{ route('blog.contactUs') }}"
                            class="px-3 py-2 btn border rounded-pill caboutus border-light text-light smallfont">Request A
                            consultation</a>
                    </div>
                </div>
            </div>
            <div class="row my-5">
                <div class="col-md-10 mx-auto mb-5">
                    <div class="row gx-0 why-choose-us">
                        <div class="col-md-4">
                            <div class="d-flex justify-content-center mb-3">
                                <h1 class="fw-bold text-light me-3">25 + </h1>
                                <p class=" text-secondary text-uppercase small">Years of <br>
                                    experience
                                </p>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="d-flex justify-content-center mb-3">
                                <h1 class="fw-bold text-light me-3">1565 + </h1>
                                <p class=" text-secondary text-uppercase small">projects <br>
                                    completed
                                </p>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="d-flex justify-content-center mb-3">
                                <h1 class="fw-bold text-light me-3">240 </h1>
                                <p class=" text-secondary text-uppercase small">satisfied clients on <br>
                                    24 counteries
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <hr>
        {{-- why chose us end --}}
        {{-- reviews start --}}
        <div class="container py-5 mt-5 cbg-color">
            <div class="d-flex justify-content-center py-5">
                <h1 class="text-light fw-bold text-uppercase letter-spacing-20">
                    reviews
                </h1>
            </div>
            <div class="row">
                <div class="col-md-8 mx-auto">
                    <div class=" owl-carousel reviews owl-theme">
                        <div class="d-flex justify-content-center flex-column text-center align-items-center">
                            <h5 class=" text-center text-light p-5 lh-1-6">"We encountered a problem with processing<br>
                                big
                                data
                                and afte only 1 week, Shiners Technology's Experits provided perfect<br> it solutions, fast
                                process &
                                affordable
                                price.<br> We're really satisfied!"</h5>
                            <div class=" my-3">
                                <img src="{{ asset('assets/media/avatars/person.jpg') }}"
                                    style="border-radius: 50%;width:70px;">
                            </div>
                            <div class="mb-3">
                                <i class="fa-solid fa-star text-success"></i>
                                <i class="fa-solid fa-star text-success"></i>
                                <i class="fa-solid fa-star text-success"></i>
                                <i class="fa-solid fa-star text-success"></i>
                                <i class="fa-solid fa-star text-success"></i>
                            </div>
                            <div>
                                <p class="text-secondary small">Sale Product Manager at Flipart</p>
                            </div>
                        </div>
                        <div class="d-flex justify-content-center flex-column text-center align-items-center">
                            <h5 class=" text-center text-light p-5 lh-1-6">"We encountered a problem with processing<br>
                                big
                                data
                                and afte only 1 week, Shiners Technology's Experits provided perfect<br> it solutions, fast
                                process &
                                affordable
                                price.<br> We're really satisfied!"</h5>
                            <div class=" my-3">
                                <img src="{{ asset('assets/media/avatars/person.jpg') }}"
                                    style="border-radius: 50%;width:70px;">
                            </div>
                            <div class="mb-3">
                                <i class="fa-solid fa-star text-success"></i>
                                <i class="fa-solid fa-star text-success"></i>
                                <i class="fa-solid fa-star text-success"></i>
                                <i class="fa-solid fa-star text-success"></i>
                                <i class="fa-solid fa-star text-success"></i>
                            </div>
                            <div>
                                <p class="text-secondary small">Sale Product Manager at Flipart</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{-- reviews end --}}
    </div>{{-- background color end container --}}
    {{-- pricing plan start --}}
    <div class="pricing_plan_bg mobile-container  py-5" id="pricing-plan">
        <div class="container py-5 ">
            <div class="d-flex justify-content-center mb-5">
                <h1 class="fw-bold text-light letter-spacing-20 text-uppercase mb-5"> pricing & plan</h1>
            </div>
            <div class="row">
                <div class="col-md-10 mx-auto">
                    <div class="row mx-1 mb-3">
                        <div class="col-lg-4  pricing-border py-5 mb-4">
                            <div
                                class="d-flex justify-content-center flex-column text-center align-items-center text-light mb-4 ">
                                <img src="{{ asset('assets/media/icons/pr1.png') }}" class="mb-4"style="width:100px"
                                    alt="">
                                <h6 class="text-light text-uppercase mb-4">personal</h6>
                                <h2 class="fw-bold"><sup class="">& </sup> 9.99 <sub
                                        class="secondary-text smallfont  opacity-75">/ Year</sub></h2>
                            </div>
                            <ul class=" navbar-nav text-center text-light opacity-75 text-uppercase px-3 pb-5">
                                <li class="mb-3 price-border-2 py-3">3 projects</li>
                                <li class="mb-3">6 months support</li>
                            </ul>
                            <div class="d-flex justify-content-center my-3">
                                <a href="{{ route('blog.contactUs') }}"
                                    class="px-5 py-2 btn border rounded-pill caboutus border-info text-light smallfont">
                                    Get Started Now</a>
                            </div>
                        </div>
                        <div class="col-lg-4  pricing-border py-5 mb-4">
                            <div
                                class="d-flex justify-content-center flex-column text-center align-items-center text-light mb-4 ">
                                <img src="{{ asset('assets/media/icons/pr2.png') }}" class="mb-4"style="width:100px"
                                    alt="">
                                <h6 class="text-light text-uppercase mb-4">SMALL TEAM</h6>
                                <h2 class="fw-bold"><sup class="">& </sup> 19.50 <sub
                                        class="secondary-text smallfont  opacity-75">/ Year</sub></h2>
                            </div>
                            <ul class=" navbar-nav text-center text-light opacity-75 text-uppercase px-3 pb-5">
                                <li class="mb-3 price-border-2 py-3">3 projects</li>
                                <li class="mb-3">6 months support</li>
                            </ul>
                            <div class="d-flex justify-content-center my-3">
                                <a href="{{ route('blog.contactUs') }}"
                                    class="px-5 py-2 btn border rounded-pill caboutus border-info text-light smallfont">
                                    Get Started Now</a>
                            </div>
                        </div>
                        <div class="col-lg-4  pricing-border py-5 mb-4">
                            <div
                                class="d-flex justify-content-center flex-column text-center align-items-center text-light mb-4 ">
                                <img src="{{ asset('assets/media/icons/pr3.png') }}" class="mb-4"style="width:100px"
                                    alt="">
                                <h6 class="text-light text-uppercase mb-4">ENTERPRISE</h6>
                                <h2 class="fw-bold"><sup class="">& </sup> 29.99 <sub
                                        class="secondary-text smallfont  opacity-75">/ Year</sub></h2>
                            </div>
                            <ul class=" navbar-nav text-center text-light opacity-75 text-uppercase px-3 pb-5">
                                <li class="mb-3 price-border-2 py-3">3 projects</li>
                                <li class="mb-3">6 months support</li>
                            </ul>
                            <div class="d-flex justify-content-center my-3">
                                <a href="{{ route('blog.contactUs') }}"
                                    class="px-5 py-2 btn border rounded-pill caboutus border-info text-light smallfont">
                                    Get Started Now</a>
                            </div>
                        </div>
                    </div>
                    <div class="d-flex justify-content-center py-5">
                        <p class="text-light">You have a large team? Contact us for information about more enterprise
                            options
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- pricing plan end --}}
    {{-- Editorial start --}}
    <div class="editorial-bg-img">
        <div class="container py-5 ">
            <div class="d-flex justify-content-center mb-5">
                <h1 class="fw-bold text-light text-uppercase letter-spacing-20 display-5">editorial</h1>
            </div>
            <div class="row text-light gx-0 mb-5">
                <div class="col-md-11 mx-auto">
                    <div class="row gx-0">
                        <div class="col-md-6 editorial-border p-4  mt-5">
                            <img src="{{ asset('assets/media/images/editorial1.png') }}" class="w-100 mb-4">
                            <div class=" pb-4">
                                <p class="small">NEWS<span class="py-1 border-end border-light px-3"></span>
                                    <span class="opacity-75 ps-3 small"><i class="fa-solid fa-clock px-2"></i>Posted 3
                                        Days
                                        Ago
                                </p></span>
                            </div>
                            <h4 class="mb-3"><a href="" class="text-decoration-none text-light">NFT Game! New
                                    Oppotunity</a></h4>
                            <p class="small opacity-75 mb-3">If there’s one way that wireless technology has changed the
                                way we
                                work, it’s that will everyone is now connected [...]</p>
                            <div class=" d-flex justify-content-between small">
                                <div>
                                    <span class="rounded-circle text-light bg-primary px-2 py-1 small">A</span> <span
                                        class="px-3">By Admin</span>
                                </div>
                                <div class="d-flex justify-content-between">
                                    <div>
                                        <span class="px-4"><i class="fa-solid fa-comment pe-2"></i>24 comments </span>
                                    </div>
                                    <div>
                                        <span><i class="fa-regular fa-eye pe-2"></i> 77k views </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="editorial-border-2  my-3">
                                <div class="row gx-0 py-2 ">
                                    <div class="col-md-5   px-3 d-flex justify-content-center align-items-center py-3">
                                        <img src="{{ asset('assets/media/images/editorial2.png') }}"
                                            class="w-100 rounded-3">
                                    </div>
                                    <div class="col-md-7 ps-3 py-3">
                                        <div class=" pb-4">
                                            <p class="small">NEWS <span class="py-1 border-end border-light px-3"></span>
                                                <span class="opacity-75 ps-3 small"><i class="fa-solid fa-clock px-2"></i>
                                                    12
                                                    Days
                                                    Ago
                                            </p></span>
                                        </div>
                                        <h5 class="mb-4"><a href=""
                                                class="text-decoration-none text-light mb-3 line-height-1-4">How To
                                                Become A Python Develop Expert</a></h5>
                                        <div class="small mb-3 " style="font-size: 12px">
                                            <span class="rounded-circle text-light bg-primary p-1"
                                                style="font-size: 8px">A</span>
                                            <span class="px-1">By Admin</span>
                                            <span><i class="fa-regular fa-eye pe-1"></i> 77k views </span>
                                            <span class="px-1"><i class="fa-solid fa-comment pe-1"></i>24 comments
                                            </span>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div class="editorial-border-2  my-3">
                                <div class="row gx-0 py-2 ">
                                    <div class="col-md-5   px-3 d-flex justify-content-center align-items-center py-3">
                                        <img src="{{ asset('assets/media/images/editorial3.png') }}"
                                            class="w-100 rounded-3">
                                    </div>
                                    <div class="col-md-7 ps-3 py-3">
                                        <div class=" pb-4">
                                            <p class="small">NEWS <span class="py-1 border-end border-light px-3"></span>
                                                <span class="opacity-75 ps-3 small"><i class="fa-solid fa-clock px-2"></i>
                                                    12
                                                    Days
                                                    Ago
                                            </p></span>
                                        </div>
                                        <h5 class="mb-4"><a href=""
                                                class="text-decoration-none text-light mb-3 line-height-1-4">How To
                                                Become A Python Develop Expert</a></h5>
                                        <div class="small mb-3 " style="font-size: 12px">
                                            <span class="rounded-circle text-light bg-primary p-1"
                                                style="font-size: 8px">A</span>
                                            <span class="px-1">By Admin</span>
                                            <span><i class="fa-regular fa-eye pe-1"></i> 77k views </span>
                                            <span class="px-1"><i class="fa-solid fa-comment pe-1"></i>24 comments
                                            </span>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div class="editorial-border-3  my-3">
                                <div class="row gx-0 py-2 ">
                                    <div class="col-md-5   px-3 d-flex justify-content-center align-items-center py-3">
                                        <img src="{{ asset('assets/media/images/editorial4.png') }}"
                                            class="w-100 rounded-3">
                                    </div>
                                    <div class="col-md-7 ps-3 py-3">
                                        <div class=" pb-4">
                                            <p class="small">NEWS <span class="py-1 border-end border-light px-3"></span>
                                                <span class="opacity-75 ps-3 small"><i class="fa-solid fa-clock px-2"></i>
                                                    12
                                                    Days
                                                    Ago
                                            </p></span>
                                        </div>
                                        <h5 class="mb-4"><a href=""
                                                class="text-decoration-none text-light mb-3 line-height-1-4">How To
                                                Become A Python Develop Expert</a></h5>
                                        <div class="small mb-3 " style="font-size: 12px">
                                            <span class="rounded-circle text-light bg-primary p-1"
                                                style="font-size: 8px">A</span>
                                            <span class="px-1">By Admin</span>
                                            <span><i class="fa-regular fa-eye pe-1"></i> 77k views </span>
                                            <span class="px-1"><i class="fa-solid fa-comment pe-1"></i>24 comments
                                            </span>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="d-flex justify-content-center my-3">
                <a href="{{ route('blog.index') }}"
                    class="px-4 py-2 btn border rounded-pill caboutus border-info text-light smallfont">
                    See More Articles</a>
            </div>
        </div>
    </div>
    {{-- Editorial end --}}
    {{-- contact us start --}}
    <div class="cbg-color ">
        <div class="cborder-bottom">
            <div class="container py-5 style_22 ">
                <div class="row d-flex justify-content-center py-4">
                    <div class="col-md-8 text-center d-flex justify-content-center py-4">
                        <div>
                            <p class="text-light opacity-75">LET US OPPORTUNITY TO HELP YOU!</p>
                        </div>
                    </div>
                    <div class="col-md-8 text-center text-light d-flex justify-content-center py-4 ">
                        <div>
                            <h1 class="display-5 fw-bold  letter-spacing-20 mb-5">(+23) 5535 68 68</h1>
                            <h4 class="line-hight">ShinersTech.com</h4>
                            <h4 class="opacity-75">58 Howard St, San Francisco, CA 941</h4>
                            <div class="row">
                                <div class="col-md-6 mx-auto ">
                                    <div class="d-flex justify-content-around my-5 ">
                                        <a href="{{ route('blog.contactUs') }}"
                                            class="px-3 py-2 btn border rounded-pill caboutus border-info text-light smallfont">
                                            Let's Chat</a>
                                        <a href="{{ route('blog.contactUs') }}"
                                            class="px-4 py-2 btn border rounded-pill caboutus border-info text-light smallfont">
                                            Request Consultation</a>
                                    </div>
                                    <img src="{{ asset('assets/media/bg/contact_us.png') }}" class="global_2"
                                        alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        {{-- contact us end --}}
    @endsection
    @section('scripts')
        <script>
            var owl = $('.services');
            owl.owlCarousel({
                loop: true,
                dots: true,
                margin: 10,
                smartSpeed: 1000,
                autoplay: true,
                autoplayTimeout: 2000,
                autoplayHoverPause: true,
                responsive: {
                    0: {
                        items: 1,

                    },
                    600: {
                        items: 2,

                    },
                    1000: {
                        items: 3,
                        dots: true,
                    }
                }
            });
            $('.play').on('click', function() {
                owl.trigger('play.owl.autoplay', [1000])
            })
            $('.stop').on('click', function() {
                owl.trigger('stop.owl.autoplay')
            })



            var owl = $('.works');
            owl.owlCarousel({
                items: 2,
                loop: true,
                dots: true,
                margin: 10,
                autoplay: true,
                smartSpeed: 1000,
                autoplayTimeout: 2000,
                autoplayHoverPause: true,
                responsive: {
                    0: {
                        items: 1,

                    },
                    600: {
                        items: 1,

                    },
                    1000: {
                        items: 2,
                        dots: true,
                    }
                }
            });
            $('.play').on('click', function() {
                owl.trigger('play.owl.autoplay', [1000])
            })
            $('.stop').on('click', function() {
                owl.trigger('stop.owl.autoplay')
            })


            var owl = $('.reviews');
            owl.owlCarousel({
                items: 1,
                loop: true,
                dots: true,
                margin: 10,
                autoplay: true,
                smartSpeed: 1000,
                autoplayTimeout: 2000,
                autoplayHoverPause: true,
            });
            $('.play').on('click', function() {
                owl.trigger('play.owl.autoplay', [1000])
            })
            $('.stop').on('click', function() {
                owl.trigger('stop.owl.autoplay')
            })
            //changing navbar color on hiting id startchange//
            $(document).ready(function() {
                var scroll_start = 0;
                var startchange = $('#startchange');
                var offset = startchange.offset();
                if (startchange.length) {
                    $(document).scroll(function() {
                        scroll_start = $(this).scrollTop();
                        if (scroll_start > offset.top) {
                            $(".navbar").css('background-color', '#010049');
                        } else {
                            $('.navbar').css('background-color', '#157aa6');
                        }
                    });
                }
            });
        </script>

    @endsection
