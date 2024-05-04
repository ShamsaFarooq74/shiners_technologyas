@extends('layouts.blog_inc.master')
@section('title', 'Admin Panel')
@section('content')
<div class="contact-us">
    <div class="container py-5 " id="blog-nav-bg">
        {{-- Get in touch showcase start --}}
        <div class="row d-flex justify-content-center py-4">
            <div class="col-md-8 text-center d-flex justify-content-center py-4">
                <div>
                    <h1 class="display-6 fw-bold">Get In <span class="blue5">Touch</span></h1>
                    <p class="cfont-light">we will contant after receive your request in 24h</p>
                </div>
            </div>
            <div class="col-md-8 text-center d-flex justify-content-center py-4">
                <div>
                    <h1 class="display-6 fw-bold blue5 letter-spacing-20">(+92)3334478044</h1>
                    <h4>ShinersTech.com</h4>
                    <h4>Pakistan Plaza,  Lahore, Punjab 54000</h4>

                </div>
            </div>
        </div>
        {{-- Get in touch showcase end --}}
        {{-- Contact us start --}}
        <div class="background-image-container  py-5">
            <div class="row">
                <div class="col-md-8 mx-auto py-5">
                    @include('layouts.inc.flashmesseges')
                    <form action="{{ route('send.email') }}" method="post">
                        @csrf
                        <div class="row smallfont px-3 py-5">
                            <p class="text-danger d-flex justify-content-center mb-5">The field is required mark as *</p>
                            <div class="col-md-6 mb-3">
                                <input type="text" class="form-control  py-3 px-4 smallfont crounded" name="name"
                                    placeholder=" Enter Your Name">
                            </div>
                            <div class="col-md-6 mb-3">
                                <input type="email" class="form-control py-3 px-4  smallfont crounded" name="email"
                                    placeholder=" Enter You Email">
                            </div>
                            <div class="col-md-6 mb-3">
                                <input type="text" class="form-control py-3 px-4  smallfont crounded" name="subject"
                                    placeholder="Enter Email Subject">
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
                              <img  class="shiner_contact" src="{{asset('assets/media/bg/shiners_contact.png')}}" alt="">
                              <img class="shiner_message" src="{{asset('assets/media/bg/shiners_message.png')}}" alt="">

                            </div>
                            <div class="d-flex justify-content-center mt-3">
                                <button type="submit" class="btn rounded-pill pt-0 pb-1 px-0 border-0 borde navcbtn">
                                    <div class=" btn px-3 py-2  rounded-pill  border-0  text-light fw-bold navcbtn2">
                                        <span class="pe-2"> Send You Request </span>
                                    </div>
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        {{-- Contact us end --}}

    </div>
  </div>
    {{-- Map location start --}}
    <div class=" py-5">
        <div class=" py-5">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3398.92577679986!2d74.3738571!3d31.5810832!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c654e79eaa2285%3A0xaee41074fb360781!2sShiners%20Technologies!5e0!3m2!1sen!2s!4v1676268143975!5m2!1sen!2s"
                width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </div>
    {{-- Map location end --}}
@endsection
