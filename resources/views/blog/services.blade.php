@extends('layouts.blog_inc.master')
@section('title', 'Admin Panel')
@section('content')
    <div class="blog-bg-color pb-5" id="blog-nav-bg">
        <div class="container py-5">
            {{-- our services start --}}
            <div class="row d-flex justify-content-center py-4">
                <div class="col-md-8 text-center d-flex justify-content-center py-4">
                    <div>
                        <h1 class="display-5 fw-bold mb-3">Our <span class="blue5">Services</span></h1>
                        <p class="text-secondary">We provide perfect IT Solutions for your business</p>
                    </div>
                </div>
            </div>
            <div class="row">
                @foreach ($services as $service)
                    <div class="col-md-3 py-2">
                        <div class="card shadow-sm">
                            <div
                                class="mx-4 my-4  d-flex text-center flex-column align-items-center justify-content-center">
                                <div class=" d-flex align-items-center text-center" style="width:70px;height:80px;">
                                    <img src="{{ asset('assets/uploads/services/' . $service->image) }}" class=" w-100"
                                        alt="">
                                </div>
                                <h5 class="fw-bold my-3"><a href="{{ route('blog.service-details', $service->id) }}"
                                        class="nav-link hover-blue-5">{{ $service->title }}</a></h5>
                                <p class="text-secondary small mb-3">
                                    {{ substr(strip_tags(html_entity_decode($service->description)), 0, 88) }}</p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>

    {{-- our services end --}}
    {{-- optimize user experience start --}}
    <div class="container py-5">
        <div class="row gx-0">
            <div class="col-md-4">
                <h1 class="fw-bold pb-3">Optimized User <span class="blue5"> Experiences</span></h1>
                <p class="small text-secondary">The uploading and updating processes made by suppliers can be streamlined
                    through front-end dashboards that create better ease of access.</p>
                <div class="navbar-nav optimized-container mb-5">
                    <li class="nav-item"><a class="fw-bold nav-link" href="">Sales
                            Breakdown & Funnel</a></li>
                    <li class="nav-item"><a class="fw-bold nav-link" href="">Abadoned
                            Carts</a></li>
                    <li class="nav-item"><a class="fw-bold nav-link" href="">Revenue
                            by Channel & Devices</a></li>
                    <li class="nav-item"><a class="fw-bold nav-link" href="">Sales
                            Forecast</a></li>
                </div>
            </div>

            <div class="col-md-8 optimized-img">
                <div class="d-block rounded-3">
                    <img src="{{ asset('assets/media/slideshow/3.png') }}" class="w-100 " alt="">
                </div>
            </div>
        </div>
    </div>
    {{-- optimize user experience end --}}

    {{-- payment gateway start --}}
    <div class="payment-gateway">
    <div class="container py-5">
        <div class="row">
            <div class="col-md-8 p-5 payment_bg mb-5">
                <img src="{{ asset('assets/media/bg/payment.png') }}" class="w-100" alt="">
            </div>
            <div class="col-md-4 py-5 ">
                <div>
                    <h1 class="display-6 fw-bold">100 + Payment<span class="blue5"> Result</span></h1>
                </div>
                <p class="small cfont-light">With Shiners Tech Marketplace, choose from hundreds of payment gateways for
                    your
                    customers. From PayPal to Stripe to Skrill, Visa Debit, Master Card, etc</p>
                <div class="d-flex">
                    <span class="bg-primary rounded-circle mb-3 px-2 small"><i
                            class="fa fa-solid fa-check text-light"></i></span>
                    <h6 class="fw-bold ps-2 small">
                        100% Guarantee Secure Payment</h6>
                </div>
                <div class="d-flex">
                    <span class="bg-primary rounded-circle mb-3 px-2 small"><i
                            class="fa fa-solid fa-check text-light"></i></span>
                    <h6 class="fw-bold ps-2 small">1% Extra Fees For All</h6>
                </div>
                <div class="d-flex">
                    <span class="bg-primary rounded-circle mb-3 px-2 small"><i
                            class="fa fa-solid fa-check text-light"></i></span>
                    <h6 class="fw-bold ps-2 small">Support Dispute & Refund 24/7</h6>
                </div>
                <div class=" mt-3">
                    <a href="{{route('blog.contactUs')}}" class="btn rounded-pill pt-0 pb-1 px-0 border-0 borde navcbtn">
                        <div class=" btn px-3 py-2  rounded-pill  border-0  text-light fw-bold navcbtn2">
                            <span class="pe-2"> Send You Request </span>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
    </div>
    {{-- payment gateway end --}}

    {{-- customize start --}}
    <div class="container py-5">
        <div class="row gx-0">
            <div class="col-md-4">
                <h1 class="fw-bold pb-3">Easy To<span class="blue5"> Customizable</span></h1>
                <p class="small text-secondary mb-4">Dashboards are meant to be personal tools for website managers and
                    suppliers to enjoy, and are therefore largely modifiable.</p>
                <p class="small cfont-light">When it comes to customer actions, website administrators can choose the
                    permissions of each supplier, allowing them to limit or empower commerce activity as needed.</p>
                <h3 class="blue5">42,000+</h3>
                <p class="small text-secondary">Marketplace Owners Trust Us</p>
            </div>

            <div class="col-md-8 easy-to-customize">
                <div class="d-block rounded-3">
                    <img src="{{ asset('assets/media/slideshow/3.png') }}" class="w-100 " alt="">
                </div>
            </div>
        </div>
    </div>
    {{-- customer end --}}
    {{-- client review start --}}
    <div class="row d-flex justify-content-center py-4" style="background-color: #f3f7fe">
        <div class="col-md-8 text-center d-flex justify-content-center py-4">
            <div class="py-4">
                <h1 class="display-5 fw-bold mb-3">Clients <span class="blue5">Reviews</span></h1>
                <p class="text-secondary">Shiners Tech loved from thoudsands customer worldwide and get trusted from big
                    companies.</p>
            </div>


        </div>
    </div>

    {{-- client review end --}}

    <div class="py-5">
        <div class="container">
            <div class="row">
                <div class="owl-carousel Reviews owl-theme">
                    <a href="" class="nav-link shadow ">
                        <div class="card mt-3 align-items-center p-2 text-center">
                            <div class="card-body ">
                                <div class="my-3">
                                    <i class="fa-solid fa-star text-success"></i>
                                    <i class="fa-solid fa-star text-success"></i>
                                    <i class="fa-solid fa-star text-success"></i>
                                    <i class="fa-solid fa-star text-success"></i>
                                    <i class="fa-solid fa-star text-success"></i>
                                </div>
                                <div class="my-3">
                                    <h5>"10/10 for all related to shiners Tech E-Com Dashboard. it's too perfect!"</h5>
                                </div>
                                <div class="d-flex justify-content-center my-3">
                                    <img src="{{ asset('assets/media/avatars/person.jpg') }}"
                                        style="border-radius: 50%;width:70px;">
                                </div>
                                <div>
                                    <h6 class="fw-bold">Syed Bilal</h6>
                                    <p class="text-secondary small">Sale Product Manager at Flipart</p>
                                </div>
                            </div>
                        </div>
                    </a>
                    <a href="" class="nav-link shadow ">
                        <div class="card mt-3 align-items-center p-2 text-center">
                            <div class="card-body ">
                                <div class="my-3">
                                    <i class="fa-solid fa-star text-success"></i>
                                    <i class="fa-solid fa-star text-success"></i>
                                    <i class="fa-solid fa-star text-success"></i>
                                    <i class="fa-solid fa-star text-success"></i>
                                    <i class="fa-solid fa-star text-success"></i>
                                </div>
                                <div class="my-3">
                                    <h5>"10/10 for all related to shiners Tech E-Com Dashboard. it's too perfect!"</h5>
                                </div>
                                <div class="d-flex justify-content-center my-3">
                                    <img src="{{ asset('assets/media/avatars/person.jpg') }}"
                                        style="border-radius: 50%;width:70px;">
                                </div>
                                <div>
                                    <h6 class="fw-bold">Syed Bilal</h6>
                                    <p class="text-secondary small">Sale Product Manager at Flipart</p>
                                </div>
                            </div>
                        </div>
                    </a>
                    <a href="" class="nav-link shadow ">
                        <div class="card mt-3 align-items-center p-2 text-center">
                            <div class="card-body ">
                                <div class="my-3">
                                    <i class="fa-solid fa-star text-success"></i>
                                    <i class="fa-solid fa-star text-success"></i>
                                    <i class="fa-solid fa-star text-success"></i>
                                    <i class="fa-solid fa-star text-success"></i>
                                    <i class="fa-solid fa-star text-success"></i>
                                </div>
                                <div class="my-3">
                                    <h5>"10/10 for all related to shiners Tech E-Com Dashboard. it's too perfect!"</h5>
                                </div>
                                <div class="d-flex justify-content-center my-3">
                                    <img src="{{ asset('assets/media/avatars/person.jpg') }}"
                                        style="border-radius: 50%;width:70px;">
                                </div>
                                <div>
                                    <h6 class="fw-bold">Syed Bilal</h6>
                                    <p class="text-secondary small">Sale Product Manager at Flipart</p>
                                </div>
                            </div>
                        </div>
                    </a>
                    <a href="" class="nav-link shadow ">
                        <div class="card mt-3 align-items-center p-2 text-center">
                            <div class="card-body ">
                                <div class="my-3">
                                    <i class="fa-solid fa-star text-success"></i>
                                    <i class="fa-solid fa-star text-success"></i>
                                    <i class="fa-solid fa-star text-success"></i>
                                    <i class="fa-solid fa-star text-success"></i>
                                    <i class="fa-solid fa-star text-success"></i>
                                </div>
                                <div class="my-3">
                                    <h5>"10/10 for all related to shiners Tech E-Com Dashboard. it's too perfect!"</h5>
                                </div>
                                <div class="d-flex justify-content-center my-3">
                                    <img src="{{ asset('assets/media/avatars/person.jpg') }}"
                                        style="border-radius: 50%;width:70px;">
                                </div>
                                <div>
                                    <h6 class="fw-bold">Syed Bilal</h6>
                                    <p class="text-secondary small">Sale Product Manager at Flipart</p>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>

            </div>
        </div>

    </div>
@endsection

@section('scripts')
    <script>
        var owl = $('.Reviews');
        owl.owlCarousel({
            items: 3,
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
                        items: 2,

                    },
                    1000: {
                        items: 4,
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
