<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title')</title>


    <link href="{{ asset('dependencies/css/bootstrap.min.css')}}" rel="stylesheet">


    <!-- google fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <!-- owl carousel -->
        <link href="{{ asset('dependencies/css/owl.carousel.min.css')}}" rel="stylesheet">
        <link href="{{ asset('dependencies/css/owl.theme.default.min.css')}}" rel="stylesheet">

    <!-- font awsome -->
    <script src="{{ asset('dependencies/js/fontawesome.js') }}" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css" integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="stylesheet" href="{{ asset('dependencies/css/custom.css') }}"!important>
</head>

<body style="overflow-x: hidden;">
  @include('frontpage.navbar')
   @yield('content')
   @include('frontpage.footer')
    <!-- Scripts -->
    <script src="{{ asset('dependencies/js/jquery.min.js') }}"></script>
    <script src="{{ asset('dependencies/js/bootstrap.bundle.min.js') }}" defer></script>
    <script src="{{ asset('dependencies/js/popper.min.js') }}" defer></script>
    <script src="{{ asset('dependencies/js/owl.carousel.min.js') }}"></script>

    @yield('scripts')
</body>

</html>
