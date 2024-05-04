@extends('layouts.blog_inc.master')
@section('title', 'Admin Panel')
@section('content')
    <div class="about-us-bg" id="blog-nav-bg">
        <div class="container pt-5">
            {{-- blog showcase start --}}
            <div class="row d-flex justify-content-center ">
                <div class="col-md-9 text-center d-flex justify-content-center ">
                    <div>
                        <h1 class="display-3 fw-bold mb-5">
                            We provide perfect<br> IT Solutions & Technology for any Startups
                        </h1>
                        <p class="cfont-light fs-6">Shiners Technology helps you unify your brand identity by collecting,
                            storing and distributing<br>
                            design tokens and assets — automatically</p>

                    </div>
                </div>
            </div>
        </div>
        {{-- blog showcase end --}}
        <div class="about-us-img">
        <div class="container pb-5">
          <div class="row">
            <div class="col-md-12">
              <div class="about-us-btn-container d-flex justify-content-center align-items-center">
                <img class="w-100" src="{{ asset('assets/media/images/about-us.png') }}" alt="">
                  <a href="https://youtu.be/pGbIOC83-So" class="about-us-btn rounded-circle about-us-animationbutton"><i
          class="fa-solid fa-play text-white p-3"></i></a>
              </div>

            </div>
          </div>

        </div>
      </div>

        <div class="row d-flex justify-content-center py-5">
            <div class="col-md-8 text-center d-flex justify-content-center py-4">
                <div class="mb-5">
                    <h1 class="display-4 fw-bold mb-3">Top <span class="blue5">Reasons</span></h1>
                    <p class="text-secondary">Unify your business data in one simple ecommerce dashboard</p>
                </div>

            </div>
            <div class="col-md-11">
                <div class="rounded-pill border border-gray">
                    <div class="py-3 ">
                        <div class="row gx-0">
                            <div class="col-lg-4 col-md-6 py-3 bright">
                                <div class="d-flex justify-content-around align-items-center text-center">
                                    <img src="{{ asset('assets/media/logos/about-code.png') }}" alt="">
                                    <h1 class="fw-bold fs-4">Front-End Friendly</h1>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 py-3 bright">
                                <div class="d-flex justify-content-around align-items-center text-center  ">
                                    <img src="{{ asset('assets/media/logos/about-price.png') }}" alt="">
                                    <h1 class="fw-bold fs-4">
                                        Affordable Price</h1>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 py-3 ">
                                <div class="d-flex justify-content-around align-items-center text-center  ">
                                    <img src="{{ asset('assets/media/logos/about-message.png') }}" alt="">
                                    <h1 class="fw-bold fs-4">24 Hour's Availability </h1>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container py-5 ">
                <div class="container">
                    <div class="row align-items-center justify-content-between gx-0">
                        <div class="col-md-4 px-3 py-5 ">
                            <div>
                                <h1 class="display-5 fw-bold mb-4">Shiner's <span class="blue5"> Philosophy</span></h1>
                                <p class="about-us-p mb-5">Like any great agency, we are only as good as the result we
                                    deliver of our recent work. Our developers are committed to maintaining the highest web
                                    standards so that your site.</p>
                            </div>
                            <div class="mt-5 philosophy-container">
                                <a href=""
                                    class="text-dark fw-bold pb-3 mb-3 b-bottom text-decoration-none d-block">Become 1st in
                                    the IT industrial</a>
                                <a href=""
                                    class="text-dark fw-bold pb-3 mb-3 b-bottom text-decoration-none d-block">Competitive
                                    Price</a>
                                <a href=""
                                    class="text-dark fw-bold pb-3 mb-3 b-bottom text-decoration-none d-block">Enhance the
                                    quality of life</a>
                            </div>
                        </div>
                        <div class="col-md-6 p-5">
                            <img src="{{ asset('assets/media/images/shinersman.png') }}" alt="">
                        </div>
                    </div>
                </div>
            </div>


            <div class="container border-top-bottom py-5 mb-5">
                <div class="container">

                <div class="row justify-content-between gx-0">
                    <div class="col-md-6 mb-5 text-center">
                        <img  class="service-img"src="{{ asset('assets/media/images/shiners_arrow.png') }}" style="width:100%" alt="">
                    </div>
                    <div class="col-md-4 pe-4">
                        <div class="mb-5">
                            <h1 class="display-4 fw-bold mb-3">Our <span class="blue5">Services</span></h1>
                            <p class="text-secondary">With Shiners Tech Marketplace, choose from hundreds of payment gateways for
                                your customers.</p>
                        </div>
                        <ul class="">
                            <li class="nav-link d-flex">
                                <div class="me-4 flex-shrink-5 ">
                                    <img class="img-50px"src="{{ asset('assets/media/icons/shiner-1.png') }}"
                                        alt="">
                                </div>
                                <div class="mb-4">
                                    <h5 class="fw-bold">IT Consultation</h5>
                                    <p class="opacity-50 ">Nanotechnology immersion along the information high will close
                                        the loop on focusing solely</p>
                                </div>
                            </li>
                            <li class="nav-link d-flex">
                                <div class="me-4 flex-shrink-0">
                                    <img class="img-50px" src="{{ asset('assets/media/icons/shiner-2.png') }}"
                                        alt="">
                                </div>
                                <div class="mb-4">
                                    <h5 class=" fw-bold">
                                        Software Design & Development</h5>
                                    <p class="opacity-50 ">Our top-notch Experts with much years of experience certail will
                                        give best solutions for your business</p>
                                </div>
                            </li>
                            <li class="nav-link d-flex ">
                                <div class="me-4 flex-shrink-0">
                                    <img class="img-50px" src="{{ asset('assets/media/icons/shiner-3.png') }}"
                                        alt="">
                                </div>
                                <div class="mb-5">
                                    <h5 class=" fw-bold">Cloud Services</h5>
                                    <p class="opacity-50 ">Customer support is always our number one priority.</p>
                                </div>
                            </li>
                        </ul>
                        <div class=" mt-3">
                            <a href="{{ route('blog.services') }}" type="submit"
                                class="btn rounded-pill pt-0 pb-1 px-0 border-0 borde navcbtn about-over-service">
                                <div class=" btn px-5   rounded-pill  border-0  text-light fw-bold navcbtn2">
                                    <span class="pe-2"> Send More </span>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>

                </div>

            </div>

            <div class="container py-5">
                <div class="text-center ">

                    <h1 class="display-4 fw-bold mb-5">Trusted By Thousand<span class="blue5"> Business</span></h1>
                    <p class="text-secondary mb-5">Unify your business data in one simple ecommerce dashboard</p>
                    <div class=" owl-carousel clients owl-theme">
                        <div class="card rounded-4 p-5 m-2 c-h d-flex justify-content-center">
                            <img class=""src="{{ asset('assets/media/icons/client-1.png') }}" alt="">
                        </div>
                        <div class="card rounded-4 p-5 m-2 c-h d-flex justify-content-center">
                            <img class=""src="{{ asset('assets/media/icons/client-2.png') }}" alt="">
                        </div>
                        <div class="card rounded-4 p-5 m-2 c-h d-flex justify-content-center">
                            <img class=""src="{{ asset('assets/media/icons/client-3.png') }}" alt="">
                        </div>
                        <div class="card rounded-4 p-5 m-2 c-h d-flex justify-content-center">
                            <img class="w-100"src="{{ asset('assets/media/icons/client-4.png') }}" alt="">
                        </div>
                        <div class="card rounded-4 p-5 m-2 c-h d-flex justify-content-center">
                            <img class=""src="{{ asset('assets/media/icons/client-5.png') }}" alt="">
                        </div>
                        <div class="card rounded-4 p-5 m-2 c-h d-flex justify-content-center">
                            <img class=""src="{{ asset('assets/media/icons/client-6.png') }}" alt="">
                        </div>
                        <div class="card rounded-4 p-5 m-2 c-h d-flex justify-content-center">
                            <img class=""src="{{ asset('assets/media/icons/client-7.png') }}" alt="">
                        </div>
                        <div class="card rounded-4 p-5 m-2 c-h d-flex justify-content-center">
                            <img class=""src="{{ asset('assets/media/icons/client-8.png') }}" alt="">
                        </div>
                    </div>
                </div>
            </div>
            <div class="row py-5">
                <div class="col-md-4 trusted-container mb-3">
                    <div class="d-flex justify-content-center">
                        <h1 class="fw-bold text-primary me-3 display-5">12 + </h1>
                        <p class=" text-uppercase small">Years of <br>
                            experience
                        </p>
                    </div>
                </div>
                <div class="col-md-4 trusted-container mb-3">
                    <div class="d-flex justify-content-center">
                        <h1 class="fw-bold text-primary me-3 display-5">1565 + </h1>
                        <p class=" text-uppercase small">projects <br>
                            completed
                        </p>
                    </div>
                </div>
                <div class="col-md-4 trusted-container mb-3">
                    <div class="d-flex justify-content-center">
                        <h1 class="fw-bold text-primary me-3 display-5">265 </h1>
                        <p class=" text-uppercase small">satisfied clients on <br>
                            24 counteries
                        </p>
                    </div>
                </div>
            </div>
            <hr class="border-gray my-5">


            <div class="container py-5">
              <div class="text-center">
                <h1 class="display-4 fw-bold mb-5">Discovery Our<span class="blue5"> Culture</span></h1>
                    <p class="text-secondary mb-5">Company’s culture is a part important of any business</p>
              </div>
              <div class="owl-carousel culture owl-theme py-5">
                <div class="card rounded-4" style="width:295px;">
                  <img class="rounded-4" src="{{asset('assets/media/images/culture-1.png')}}" alt="">

                </div>
                <div class="card rounded-4 " style="width:300px;">
                  <img class="rounded-4" src="{{asset('assets/media/images/culture-2.png')}}" alt="">

                </div>
                <div class="card rounded-4 " style="width:300px;">
                  <img class="rounded-4" src="{{asset('assets/media/images/culture-3.png')}}" alt="">

                </div>


              </div>


            </div>







            <div class="our-leaders ">
                <div class="container shadow rounded-5 bg-color py-5">

                    <div class="mb-5 text-center py-4">
                        <h1 class="display-4 fw-bold mb-3">Our <span class="blue5">Leaders</span></h1>
                        <p class="text-secondary">Profressional & Friendly is our slogan. Meet our leaders</p>
                    </div>
                    <div class="row gx-5 mb-5">
                        <div class="col-md-3 mb-3 col-sm-6">
                            <div class="card px-3 rounded-5 py-3 hover-shadow">
                                <div class="h-320px rounded-5 mb-4 d-flex justify-content-center">
                                    <img class=""src="{{ asset('assets/media/images/team-1.jpeg') }}"
                                        alt="">
                                </div>
                                <div class="text-center">
                                    <h5 class="fw-bold about-hover">Syed Bilal</h5>
                                    <p class="text-secondary">CEO Founder</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 mb-3 col-sm-6">
                            <div class="card px-3 rounded-5 py-3 hover-shadow">
                                <div class="h-320px rounded-5 mb-4 d-flex justify-content-center">
                                    <img class="w-100"src="{{ asset('assets/media/images/team-4.jpeg') }}"
                                        alt="">
                                </div>
                                <div class="text-center">
                                    <h5 class="fw-bold about-hover">Some One</h5>
                                    <p class="text-secondary">Marketing Leader</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 mb-3 col-sm-6">
                            <div class="card px-3 rounded-5 py-3 hover-shadow">
                                <div class="h-320px rounded-5 mb-4 d-flex justify-content-center">
                                    <img class=""src="{{ asset('assets/media/images/team-2.jpeg') }}"
                                        alt="">
                                </div>
                                <div class="text-center">
                                    <h5 class="fw-bold about-hover">Some One</h5>
                                    <p class="text-secondary">CTO</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-3 mb-3 col-sm-6">
                            <div class="card px-3 rounded-5 py-3 hover-shadow">
                                <div class="h-320px rounded-5 mb-4 d-flex justify-content-center">
                                    <img class="w-100"src="{{ asset('assets/media/images/team-3.jpeg') }}"
                                        alt="">
                                </div>
                                <div class="text-center">
                                    <h5 class="fw-bold about-hover">Some One</h5>
                                    <p class="text-secondary">Project Manager</p>
                                </div>
                            </div>
                        </div>



                    </div>
                </div>
            </div>

            <div class="about-contact py-5">
                <div class="container">
                    <div class="text-center mb-5">

                        <h1 class="display-4 fw-bold mb-5">Ready To Start A <span class="blue5">Project</span></h1>
                        <p class="text-secondary">We will contact You after receive your request in 24H</p>

                    </div>
                    <div class="background-image-container  py-5">
                        <div class="row">
                            <div class="col-md-8 mx-auto">
                                @include('layouts.inc.flashmesseges')
                                <form action="{{ route('send.email') }}" method="post">
                                    @csrf
                                    <div class="row smallfont px-3 py-5 my-5">
                                        <p class="text-danger d-flex justify-content-center mb-5">The field is required mark as
                                            *
                                        </p>
                                        <div class="col-md-6 mb-3">
                                            <input type="text" class="form-control  py-3 px-4 smallfont crounded"
                                                name="name" placeholder=" Enter Your Name">
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <input type="email" class="form-control py-3 px-4  smallfont crounded"
                                                name="email" placeholder=" Enter You Email">
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <input type="text" class="form-control py-3 px-4  smallfont crounded"
                                                name="subject" placeholder="Enter Email Subject">
                                        </div>
                                        <div class="col-md-12 mb-3">
                                            <textarea name="message" class="form-control py-3 px-4  smallfont crounded" cols="30" rows="10"
                                                placeholder="Enter your Message"></textarea>
                                        </div>
                                        <div class="d-flex justify-content-center">
                                            <input type="checkbox" class="form-check-input me-2 mt-0" value="">
                                            <label class="form-check-label">
                                                By submitting, i’m agreed to the <a href="#"
                                                    class="text-decoration-underline text-dark">Terms &amp; Conditons</a>
                                            </label>
                                        </div>
                                        <div>
                                            <img class="shiner_contact"
                                                src="{{ asset('assets/media/bg/shiners_contact.png') }}" alt="">
                                            <img class="shiner_message"
                                                src="{{ asset('assets/media/bg/shiners_message.png') }}" alt="">

                                        </div>
                                        <div class="d-flex justify-content-center mt-3">
                                            <button type="submit"
                                                class="btn rounded-pill pt-0 pb-1 px-0 border-0 borde navcbtn">
                                                <div
                                                    class=" btn px-3 py-2  rounded-pill  border-0  text-light fw-bold navcbtn2">
                                                    <span class="pe-2"> Send You Request </span>
                                                </div>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


        </div>

    </div>

@endsection
@section('scripts')
    <script>
        var owl = $('.clients');
        owl.owlCarousel({
            loop: true,
            dots: false,
            margin: 10,
            autoplay: true,
            slideTransition: 'linear',
            autoplaySpeed: 2000,
            autoplayTimeout: 1000,
            responsive:{
        0:{
            items:1,

        },
        600:{
            items:3,

        },
        1000:{
            items:7,


        }
    }

        });

        $('.play').on('click', function() {
            owl.trigger('play.owl.autoplay', [1000])
        })
        $('.stop').on('click', function() {
            owl.trigger('stop.owl.autoplay')
        })
        setTimeout(setSpeed, 1000);



    </script>
    <script>
        var owl = $('.culture');
            owl.owlCarousel({
                loop: true,
                dots: true,
                margin: 10,
                autoplay: false,
                smartSpeed: 2000,
                autoplayTimeout: 2000,
                autoplayHoverPause: true,
                responsive:{
        0:{
            items:1,

        },
        600:{
            items:1,

        },
        1000:{
            items:4,
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
    </script>
@endsection
