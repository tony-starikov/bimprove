<!doctype html>
<html class="w-100" lang="ua">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Main</title>
{{--    <title>@yield('title')</title>--}}

{{--    <meta name="keywords" content="Электрика Одесса, Заказать электротехнику и электрику в интернет-магазине Electro-dom, Широкий выбор, Лучшие цены в Одессе, Доставка по Украине" />--}}

{{--    <base href="https://electro-dom.od.ua/" />--}}
{{--    <meta name="description" content="@yield('description')" />--}}

    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/css/splide.min.css">

    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700&display=swap" rel="stylesheet">

    <link href="https://vjs.zencdn.net/8.0.4/video-js.css" rel="stylesheet" />

    <style>
        body {
            font-family: 'Montserrat', sans-serif;
        }
        .cards-wrapper {
            display: flex;
        }
        .small-text {
            font-size: 0.72em;
        }
        .page-link:hover {
            background-color: #ffffff;
        }
        form.footer-form input {
            -webkit-appearance: none;
            -moz-appearance: none;
            appearance: none;
            background-color: transparent !important;
        }
        form.footer-form input::placeholder {
            opacity: 1 !important; /* Firefox */
            color: #ffffff !important;
            font-size: 1.25rem !important;
            padding-left: 0 !important;
        }
        form.footer-form input[placeholder] {
            opacity: 1 !important; /* Firefox */
            color: #ffffff !important;
            font-size: 1.25rem !important;
            padding-left: 0 !important;
        }

        form.subscribe-form input {
            -webkit-appearance: none;
            -moz-appearance: none;
            appearance: none;
            background-color: transparent !important;
        }
        form.subscribe-form input::placeholder {
            opacity: 1 !important; /* Firefox */
            color: #9a9a9a !important;
            border-color: #9a9a9a !important;
            font-size: 1.25rem !important;
            padding-left: 0 !important;
        }
        form.subscribe-form input[placeholder] {
            opacity: 1 !important; /* Firefox */
            color: #9a9a9a !important;
            border-color: #9a9a9a !important;
            font-size: 1.25rem !important;
            padding-left: 0 !important;
        }

        form.donate-form input {
            -webkit-appearance: none;
            -moz-appearance: none;
            appearance: none;
            background-color: #fff !important;
        }
        form.donate-form select {
            -webkit-appearance: none;
            -moz-appearance: none;
            appearance: none;
            background-color: #fff !important;
        }
        form.donate-form input::placeholder {
            opacity: 1 !important; /* Firefox */
            color: #9a9a9a !important;
            border-color: #fff !important;
            font-size: 1.4rem !important;
            padding: 10px !important;
        }
        form.donate-form select {
            opacity: 1 !important; /* Firefox */
            color: #9a9a9a !important;
            border-color: #fff !important;
            font-size: 1.4rem !important;
            padding: 10px !important;
        }
        form.donate-form input[placeholder] {
            opacity: 1 !important; /* Firefox */
            color: #9a9a9a !important;
            border-color: #fff !important;
            font-size: 1.4rem !important;
            padding: 10px !important;
        }

        .portfolio-container {
            position: relative;
            width: 100%;
        }

        .image {
            display: block;
            width: 100%;
            height: auto;
        }

        .overlay {
            position: absolute;
            bottom: 0;
            left: 0;
            right: 0;
            background-color: #6bdddb;
            overflow: hidden;
            width: 100%;
            height:0;
            transition: .5s ease;
        }

        .portfolio-container:hover .overlay {
            bottom: 0;
            height: 100%;
        }

        .service-overlay {
            position: absolute;
            bottom: 0;
            left: 0;
            right: 0;
            background-color: #6de1df;
            overflow: hidden;
            width: 100%;
            height: 0;
            transition: .5s ease;
        }

        .service-container:hover .service-overlay {
            bottom: 0;
            height: 50%;
        }

        .service-container {
            position: relative;
        }

        .main-video {
            width: 100vw;
            height: 100vh;
            max-width: 100%;
            max-height: 100vh;
            object-fit: cover;
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            z-index: -100;
        }

        .video {
            aspect-ratio: 16 / 9;
            width: 100%;
        }

        /*input[placeholder]:focus {*/
        /*    opacity: 1 !important; !* Firefox *!*/
        /*    color: transparent !important;*/
        /*    font-size: 1.25rem !important;*/
        /*    padding-left: 0 !important;*/
        /*}*/

        /*input:focus::placeholder {*/
        /*    opacity: 1 !important; !* Firefox *!*/
        /*    color: transparent !important;*/
        /*    font-size: 1.25rem !important;*/
        /*    padding-left: 0 !important;*/
        /*}*/
    </style>
</head>
<body>

<div class="container-fluid d-none d-xxl-block px-5">
    <nav class="shadow-lg fixed-top" style="background-color: #ffffff;">
        <div class="container px-5">
            <div class="row py-2 px-5">
                <div class="col-1 px-0 d-flex justify-content-start align-items-center">
                    <a class="p-0 m-0 ms-1" href="{{ route('main') }}">
                        <img src="/images/logo.png" class="img-fluid"  alt="">
                    </a>
                </div>
                <div class="col-10 px-0 d-flex justify-content-center align-items-center">
                    <ul class="nav mx-auto">
                        @foreach($menuItems as $menuItem)
                            @if($menuItem->show_status === '1')

                                @switch($menuItem->item_name)
                                    @case('Home')
                                    <li class="nav-item">
                                        <a class="nav-link text-dark" aria-current="page" href="{{ route('main') }}">
                                            <span class="h6 fw-bold">HOME</span>
                                        </a>
                                    </li>
                                    @break

                                    @case('Services')
{{--                                    <li class="nav-item dropdown">--}}
{{--                                        <a class="nav-link text-dark dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">--}}
{{--                                            <span class="h6 fw-bold">SERVICES</span>--}}
{{--                                        </a>--}}
{{--                                        <ul class="dropdown-menu">--}}
{{--                                            @foreach($services as $service)--}}
{{--                                                <li><a class="dropdown-item fw-semibold text-uppercase" href="{{ route('service', [$service->slug]) }}">{{ $service->title_en }}</a></li>--}}
{{--                                            @endforeach--}}
{{--                                        </ul>--}}
{{--                                    </li>--}}
                                    <li class="nav-item">
                                        <a class="nav-link text-dark" aria-current="page" href="#services">
                                            <span class="h6 fw-bold">SERVICES</span>
                                        </a>
                                    </li>
                                    @break

                                    @case('Portfolio')
                                    <li class="nav-item">
                                        <a class="nav-link text-dark" aria-current="page" href="#portfolio">
                                            <span class="h6 fw-bold">PORTFOLIO</span>
                                        </a>
                                    </li>
                                    @break

                                    @case('About')
                                    <li class="nav-item">
                                        <a class="nav-link text-dark" aria-current="page" href="#about">
                                            <span class="h6 fw-bold">ABOUT</span>
                                        </a>
                                    </li>
                                    @break

                                    @case('Blog')
                                    <li class="nav-item">
                                        <a class="nav-link text-dark" aria-current="page" href="{{ route('blog') }}">
                                            <span class="h6 fw-bold">BLOG</span>
                                        </a>
                                    </li>
                                    @break

                                    @case('Products')
                                    <li class="nav-item dropdown">
                                        <a class="nav-link text-dark dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                            <span class="h6 fw-bold">PRODUCTS</span>
                                        </a>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item fw-semibold" href="{{ route('products') }}">PLUGINS</a></li>
                                            <li><a class="dropdown-item fw-semibold" href="{{ route('families') }}">FAMILIES</a></li>
                                        </ul>
                                    </li>
                                    @break

                                    @case('Achievements')
                                    <li class="nav-item">
                                        <a class="nav-link text-dark" aria-current="page" href="#team">
                                            <span class="h6 fw-bold">TEAM</span>
                                        </a>
                                    </li>
                                    @break

                                    @case('Career')
                                    <li class="nav-item">
                                        <a class="nav-link text-dark" aria-current="page" href="#">
                                            <span class="h6 fw-bold">CAREER</span>
                                        </a>
                                    </li>
                                    @break
                                @endswitch

                            @endif
                        @endforeach
                    </ul>
                </div>
                <div class="col-1 px-0 d-flex justify-content-end align-items-center">
                    <a href="{{ route('contact') }}" role="button" class="btn btn-primary btn-lg shadow-none border-0 rounded-4" style="background-color: #43aeb6">
                        <span class="fw-bold h6 d-block m-0">CONTACT&nbsp;US</span>
                    </a>
                    <div class="d-flex d-lg-none justify-content-end align-items-center">
                        <a class="nav-link text-dark p-0 m-0" aria-current="page" type="button" data-bs-toggle="modal" data-bs-target="#exampleModal">
                            <img src="/images/menu-open.png" class="img pt-2" width="60" alt="">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </nav>
</div>

<div class="container-fluid d-none d-xl-block d-xxl-none px-5">
    <nav class="shadow-lg fixed-top" style="background-color: #ffffff;">
        <div class="container px-5">
            <div class="row py-2 px-5">
                <div class="col-1 px-0 d-flex justify-content-start align-items-center">
                    <a class="p-0 m-0 ms-1" href="{{ route('main') }}">
                        <img src="/images/logo.png" class="img-fluid"  alt="">
                    </a>
                </div>
                <div class="col-10 px-0 d-flex justify-content-center align-items-center">
                    <ul class="nav mx-auto">
                        @foreach($menuItems as $menuItem)
                            @if($menuItem->show_status === '1')

                                @switch($menuItem->item_name)
                                    @case('Home')
                                    <li class="nav-item">
                                        <a class="nav-link text-dark px-2" aria-current="page" href="{{ route('main') }}">
                                            <span class="h6 small fw-bold">HOME</span>
                                        </a>
                                    </li>
                                    @break

                                    @case('Services')
                                    <li class="nav-item">
                                        <a class="nav-link text-dark px-2" aria-current="page" href="#">
                                            <span class="h6 small fw-bold">SERVICES</span>
                                        </a>
                                    </li>
                                    @break

{{--                                    @case('Services')--}}
{{--                                    <li class="nav-item dropdown">--}}
{{--                                        <a class="nav-link text-dark dropdown-toggle px-2" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">--}}
{{--                                            <span class="h6 small fw-bold">SERVICES</span>--}}
{{--                                        </a>--}}
{{--                                        <ul class="dropdown-menu">--}}
{{--                                            @foreach($services as $service)--}}
{{--                                                <li><a class="dropdown-item fw-semibold text-uppercase" href="{{ route('service', [$service->slug]) }}">{{ $service->title_en }}</a></li>--}}
{{--                                            @endforeach--}}
{{--                                        </ul>--}}
{{--                                    </li>--}}
{{--                                    @break--}}

                                    @case('Portfolio')
                                    <li class="nav-item">
                                        <a class="nav-link text-dark px-2" aria-current="page" href="#">
                                            <span class="h6 small fw-bold">PORTFOLIO</span>
                                        </a>
                                    </li>
                                    @break

                                    @case('About')
                                    <li class="nav-item">
                                        <a class="nav-link text-dark px-2" aria-current="page" href="#">
                                            <span class="h6 small fw-bold">ABOUT</span>
                                        </a>
                                    </li>
                                    @break

                                    @case('Blog')
                                    <li class="nav-item">
                                        <a class="nav-link text-dark px-2" aria-current="page" href="{{ route('blog') }}">
                                            <span class="h6 small fw-bold">BLOG</span>
                                        </a>
                                    </li>
                                    @break

                                    @case('Products')
                                    <li class="nav-item dropdown">
                                        <a class="nav-link text-dark dropdown-toggle px-2" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                            <span class="h6 small fw-bold">PRODUCTS</span>
                                        </a>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item fw-bold text-center px-0 small" href="{{ route('products') }}">PLUGINS</a></li>
                                            <li><a class="dropdown-item fw-bold text-center px-0 small" href="{{ route('families') }}">FAMILIES</a></li>
                                        </ul>
                                    </li>
                                    @break

                                    @case('Achievements')
                                    <li class="nav-item">
                                        <a class="nav-link text-dark px-2" aria-current="page" href="#team">
                                            <span class="h6 small fw-bold">TEAM</span>
                                        </a>
                                    </li>
                                    @break

                                    @case('Career')
                                    <li class="nav-item">
                                        <a class="nav-link text-dark px-2" aria-current="page" href="#">
                                            <span class="h6 small fw-bold">CAREER</span>
                                        </a>
                                    </li>
                                    @break
                                @endswitch

                            @endif
                        @endforeach
                    </ul>
                </div>
                <div class="col-1 px-0 d-flex justify-content-end align-items-center">
{{--                    <a class="btn btn-primary small btn-lg shadow-none border-0 rounded-4" style="background-color: #43aeb6" type="button" data-bs-toggle="modal" data-bs-target="#exampleModal2">--}}
{{--                        <span class="fw-bold h6 small d-block m-0">CONTACT&nbsp;US</span>--}}
{{--                    </a>--}}
                    <a href="{{ route('contact') }}" role="button" class="btn btn-primary nav-link btn-lg shadow-none border-0 rounded-4" style="background-color: #43aeb6">
                        <span class="fw-bold h6 small text-white d-block m-2">CONTACT&nbsp;US</span>
                    </a>
                    <div class="d-flex d-lg-none justify-content-end align-items-center">
                        <a class="nav-link text-dark p-0 m-0" aria-current="page" type="button" data-bs-toggle="modal" data-bs-target="#exampleModal">
                            <img src="/images/menu-open.png" class="img pt-2" width="60" alt="">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </nav>
</div>

<div class="container-fluid d-none d-lg-block d-xl-none px-5">
    <nav class="shadow-lg fixed-top" style="background-color: #ffffff;">
        <div class="container px-5">
            <div class="row py-2 px-5">
                <div class="col-1 px-0 d-flex justify-content-start align-items-center">
                    <a class="p-0 m-0 ms-1" href="{{ route('main') }}">
                        <img src="/images/logo.png" class="img-fluid"  alt="">
                    </a>
                </div>
                <div class="col-10 px-0 d-flex justify-content-center align-items-center">
                    <ul class="nav mx-auto">
                        @foreach($menuItems as $menuItem)
                            @if($menuItem->show_status == 1)

                                @switch($menuItem->item_name)
                                    @case('Home')
                                    <li class="nav-item">
                                        <a class="nav-link text-dark px-1" aria-current="page" href="{{ route('main') }}">
                                            <span class="h6 fw-bold small">HOME</span>
                                        </a>
                                    </li>
                                    @break

                                    @case('Services')
                                    <li class="nav-item">
                                        <a class="nav-link text-dark px-1" aria-current="page" href="{{ route('main') }}">
                                            <span class="h6 fw-bold small">SERVICES</span>
                                        </a>
                                    </li>
                                    @break

{{--                                    @case('Services')--}}
{{--                                    <li class="nav-item dropdown">--}}
{{--                                        <a class="nav-link text-dark dropdown-toggle px-1" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">--}}
{{--                                            <span class="h6 fw-bold small">SERVICES</span>--}}
{{--                                        </a>--}}
{{--                                        <ul class="dropdown-menu">--}}
{{--                                            @foreach($services as $service)--}}
{{--                                                <li><a class="dropdown-item text-uppercase h6 fw-semibold small" href="{{ route('service', [$service->slug]) }}">{{ $service->title_en }}</a></li>--}}
{{--                                            @endforeach--}}
{{--                                        </ul>--}}
{{--                                    </li>--}}
{{--                                    @break--}}

                                    @case('Portfolio')
                                    <li class="nav-item">
                                        <a class="nav-link text-dark px-1" aria-current="page" href="#">
                                            <span class="h6 fw-bold small">PORTFOLIO</span>
                                        </a>
                                    </li>
                                    @break

                                    @case('About')
                                    <li class="nav-item">
                                        <a class="nav-link text-dark px-1" aria-current="page" href="#">
                                            <span class="h6 fw-bold small">ABOUT</span>
                                        </a>
                                    </li>
                                    @break

                                    @case('Blog')
                                    <li class="nav-item">
                                        <a class="nav-link text-dark px-1" aria-current="page" href="{{ route('blog') }}">
                                            <span class="h6 fw-bold small">BLOG</span>
                                        </a>
                                    </li>
                                    @break

                                    @case('Products')
                                    <li class="nav-item dropdown">
                                        <a class="nav-link text-dark dropdown-toggle px-1" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                            <span class="h6 fw-bold small">PRODUCTS</span>
                                        </a>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item text-uppercase h6 fw-semibold small" href="{{ route('products') }}">PLUGINS</a></li>
                                            <li><a class="dropdown-item text-uppercase h6 fw-semibold small" href="{{ route('families') }}">FAMILIES</a></li>
                                        </ul>
                                    </li>
                                    @break

                                    @case('Achievements')
                                    <li class="nav-item">
                                        <a class="nav-link text-dark px-1" aria-current="page" href="#team">
                                            <span class="h6 fw-bold small">TEAM</span>
                                        </a>
                                    </li>
                                    @break

                                    @case('Career')
                                    <li class="nav-item">
                                        <a class="nav-link text-dark px-1" aria-current="page" href="#">
                                            <span class="h6 fw-bold small">CAREER</span>
                                        </a>
                                    </li>
                                    @break
                                @endswitch

                            @endif
                        @endforeach
                    </ul>
                </div>
                <div class="col-1 px-0 d-flex justify-content-end align-items-center">
{{--                    <button class="btn btn-primary btn shadow-none border-0 rounded-4" style="background-color: #43aeb6" type="button" data-bs-toggle="modal" data-bs-target="#exampleModal2">--}}
{{--                        <span class="fw-bold d-block m-0 small">CONTACT&nbsp;US</span>--}}
{{--                    </button>--}}
                    <a href="{{ route('contact') }}" role="button" class="btn btn-primary nav-link btn-lg shadow-none border-0 rounded-4" style="background-color: #43aeb6">
                        <span class="fw-bold small text-white d-block m-1 mx-2">CONTACT&nbsp;US</span>
                    </a>
                    <div class="d-flex d-lg-none justify-content-end align-items-center">
                        <a class="nav-link text-dark p-0 m-0" aria-current="page" type="button" data-bs-toggle="modal" data-bs-target="#exampleModal">
                            <img src="/images/menu-open.png" class="img pt-2" width="60" alt="">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </nav>
</div>

<div class="container-fluid d-lg-none">
    <nav class="shadow-lg fixed-top" style="background-color: #ffffff;">
        <div class="container">
            <div class="row py-2">
                <div class="col-2 px-0 d-flex justify-content-start align-items-center">
                    <a class="p-0 m-0 ms-1" href="{{ route('main') }}">
                        <img src="/images/logo.png" class="img-fluid" style="max-height: 50px"  alt="">
                    </a>
                </div>
                <div class="col-10 px-0 d-flex justify-content-end align-items-center">
                    <button class="btn btn-primary btn shadow-none border-0 rounded-4" style="background-color: #43aeb6" type="button" data-bs-toggle="modal" data-bs-target="#exampleModal2">
                        <span class="fw-bold d-block m-0 small">CONTACT&nbsp;US</span>
                    </button>

                    <img src="/images/menu-open.png" class="img align-self-center" width="60px" alt="" type="button" data-bs-toggle="modal" data-bs-target="#exampleModal">
                </div>
            </div>
        </div>
    </nav>
</div>

<main role="main">
    @yield('main')

    <div class="container-fluid d-none d-xxl-block px-5" style="background-color: #9a9a9a">
        <div class="container px-xxl-5">
            <div class="row px-5 pb-5">
                <div class="col-12 col-lg-6">
                    <h2 class="text-white display-6 fw-bold mt-5 d-lg-none">SOCIAL MEDIA</h2>
                    <h2 class="text-white display-6 fw-bold pb-2 pt-5 mt-5 d-none d-lg-block">SOCIAL MEDIA</h2>

                    <div class="row mt-5 w-75">
                        <div class="col-3 d-flex align-items-center">
                            <a href="#" class="text-white h4 text-decoration-none">
                                <img class="img-fluid" src="/images/social/linkedin.svg" alt="linkedin">
                            </a>
                        </div>
                        <div class="col-3 d-flex align-items-center">
                            <a href="#" class="text-white h4 text-decoration-none">
                                <img class="img-fluid" src="/images/social/instagram.svg" alt="instagram">
                            </a>
                        </div>
                        <div class="col-3 d-flex align-items-center">
                            <a href="#" class="text-white h4 text-decoration-none">
                                <img class="img-fluid" src="/images/social/facebook.svg" alt="facebook">
                            </a>
                        </div>
                        <div class="col-3 d-flex align-items-center">
                            <a href="#" class="text-white h4 text-decoration-none">
                                <img class="img-fluid" src="/images/social/youtube.svg" alt="youtube">
                            </a>
                        </div>
                    </div>

                </div>

                <div class="col-12 col-md-6 d-none d-lg-block">

                    <h2 class="text-white display-6 fw-bold mt-5 d-lg-none">CONTACTS</h2>
                    <h2 class="text-white display-6 fw-bold pb-2 pt-5 mt-5 d-none d-lg-block w-50">CONTACTS</h2>
                    <div class="row mt-5">
                        <div class="col-12">
                            <div class="d-inline-block pe-5 border-end border-2 border-white">
                                <a href="#" class="text-white text-decoration-none">
                                    <span class="fw-semibold h4">+380668901648</span>
                                </a>
                            </div>
                            <div class="d-inline-block ps-5">
                                <a href="#" class="text-white text-decoration-none">
                                    <span class="fw-semibold h4">es@bim-prove.com</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

            <div class="row mt-4 pb-3 px-5">
                <div class="col-12 d-flex justify-content-between">
                    <h4 class="fw-semibold d-inline-block text-white">SERVICES</h4>
                    <h4 class="fw-semibold d-inline-block text-white">PORTFOLIO</h4>
                    <h4 class="fw-semibold d-inline-block text-white">ABOUT</h4>
                    <h4 class="fw-semibold d-inline-block text-white">BLOG</h4>
                    <h4 class="fw-semibold d-inline-block text-white">PRODUCTS</h4>
                    <h4 class="fw-semibold d-inline-block text-white">CAREER</h4>
                    <h4 class="fw-semibold d-inline-block text-white">DONATIONS</h4>
                </div>
            </div>
            <div class="row px-5">
                <div class="col-12 px-4">
                    <div class="row pb-3 border-bottom border-white border-2">

                    </div>
                </div>
            </div>
            <div class="row p-5">
                <div class="col-12 text-center">
                    <p class="card-text text-white fw-bold h6">
                        &copy; Copyright BIMprove company LLC. All rights reserved 2022.
                    </p>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid d-none d-xl-block d-xxl-none px-5" style="background-color: #9a9a9a">
        <div class="container px-xxl-5">
            <div class="row px-5 pb-5">
                <div class="col-6">
                    <h2 class="text-white h1 fw-bold pb-2 pt-5 mt-5">SOCIAL MEDIA</h2>


                    <div class="row mt-5 w-75">
                        <div class="col-3 d-flex align-items-center">
                            <a href="#" class="text-white h4 text-decoration-none">
                                <img class="img-fluid" src="/images/social/linkedin.svg" alt="linkedin">
                            </a>
                        </div>
                        <div class="col-3 d-flex align-items-center">
                            <a href="#" class="text-white h4 text-decoration-none">
                                <img class="img-fluid" src="/images/social/instagram.svg" alt="instagram">
                            </a>
                        </div>
                        <div class="col-3 d-flex align-items-center">
                            <a href="#" class="text-white h4 text-decoration-none">
                                <img class="img-fluid" src="/images/social/facebook.svg" alt="facebook">
                            </a>
                        </div>
                        <div class="col-3 d-flex align-items-center">
                            <a href="#" class="text-white h4 text-decoration-none">
                                <img class="img-fluid" src="/images/social/youtube.svg" alt="youtube">
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-6">
                    <h2 class="text-white h1 fw-bold pb-2 pt-5 mt-5">CONTACTS</h2>
                    <div class="row mt-5">
                        <div class="col-12">
                            <div class="d-inline-block pe-2 border-end border-2 border-white">
                                <a href="#" class="text-white text-decoration-none">
                                    <span class="fw-semibold h4">+380668901648</span>
                                </a>
                            </div>
                            <div class="d-inline-block ps-2">
                                <a href="#" class="text-white text-decoration-none">
                                    <span class="fw-semibold h4">es@bim-prove.com</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

            <div class="row mt-4 pb-3 px-5">
                <div class="col-12 d-flex justify-content-between">
                    <h4 class="fw-semibold d-inline-block text-white">SERVICES</h4>
                    <h4 class="fw-semibold d-inline-block text-white">PORTFOLIO</h4>
                    <h4 class="fw-semibold d-inline-block text-white">ABOUT</h4>
                    <h4 class="fw-semibold d-inline-block text-white">BLOG</h4>
                    <h4 class="fw-semibold d-inline-block text-white">PRODUCTS</h4>
                    <h4 class="fw-semibold d-inline-block text-white">CAREER</h4>
                    <h4 class="fw-semibold d-inline-block text-white">DONATIONS</h4>
                </div>
            </div>
            <div class="row px-5">
                <div class="col-12 px-4">
                    <div class="row pb-3 border-bottom border-white border-2">

                    </div>
                </div>
            </div>
            <div class="row p-5">
                <div class="col-12 text-center">
                    <p class="card-text text-white fw-bold h6">
                        &copy; Copyright BIMprove company LLC. All rights reserved 2022.
                    </p>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid d-none d-lg-block d-xl-none px-5" style="background-color: #9a9a9a">
        <div class="container px-5">
            <div class="row px-5 pb-5">
                <div class="col-6">
                    <h2 class="text-white h1 fw-bold pb-2 pt-5 mt-5">SOCIAL MEDIA</h2>

                    <div class="row mt-5 w-75">
                        <div class="col-3 d-flex align-items-center">
                            <a href="#" class="text-white h4 text-decoration-none">
                                <img class="img-fluid" src="/images/social/linkedin.svg" alt="linkedin">
                            </a>
                        </div>
                        <div class="col-3 d-flex align-items-center">
                            <a href="#" class="text-white h4 text-decoration-none">
                                <img class="img-fluid" src="/images/social/instagram.svg" alt="instagram">
                            </a>
                        </div>
                        <div class="col-3 d-flex align-items-center">
                            <a href="#" class="text-white h4 text-decoration-none">
                                <img class="img-fluid" src="/images/social/facebook.svg" alt="facebook">
                            </a>
                        </div>
                        <div class="col-3 d-flex align-items-center">
                            <a href="#" class="text-white h4 text-decoration-none">
                                <img class="img-fluid" src="/images/social/youtube.svg" alt="youtube">
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-6">
                    <h2 class="text-white h1 fw-bold pb-2 pt-5 mt-5">CONTACTS</h2>
                    <div class="row mt-5">
                        <div class="col-12">
                            <div class="row">
                                <a href="#" class="text-white text-decoration-none">
                                    <span class="fw-semibold h5">+380668901648</span>
                                </a>
                            </div>
                            <div class="row mt-3">
                                <a href="#" class="text-white text-decoration-none">
                                    <span class="fw-semibold h5">es@bim-prove.com</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

            <div class="row mt-4 pb-3 px-5">
                <div class="col-12 d-flex justify-content-between">
                    <h6 class="fw-semibold d-inline-block text-white">SERVICES</h6>
                    <h6 class="fw-semibold d-inline-block text-white">PORTFOLIO</h6>
                    <h6 class="fw-semibold d-inline-block text-white">ABOUT</h6>
                    <h6 class="fw-semibold d-inline-block text-white">BLOG</h6>
                    <h6 class="fw-semibold d-inline-block text-white">PRODUCTS</h6>
                    <h6 class="fw-semibold d-inline-block text-white">CAREER</h6>
                    <h6 class="fw-semibold d-inline-block text-white">DONATIONS</h6>
                </div>
            </div>
            <div class="row px-5">
                <div class="col-12 px-4">
                    <div class="row pb-3 border-bottom border-white border-2">

                    </div>
                </div>
            </div>
            <div class="row p-5">
                <div class="col-12 text-center">
                    <p class="card-text text-white fw-bold h6">
                        &copy; Copyright BIMprove company LLC. All rights reserved 2022.
                    </p>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid d-lg-none" style="background-color: #9a9a9a">
        <div class="container">
            <div class="row py-3">
                <div class="col-6">
                    <h2 class="text-white h4 fw-bold pb-2">SOCIAL MEDIA</h2>

                    <div class="row w-100">
                        <div class="col-3 d-flex align-items-center">
                            <a href="#" class="text-white h4 text-decoration-none">
                                <img class="img-fluid w-75" src="/images/social/linkedin.svg" alt="linkedin">
                            </a>
                        </div>
                        <div class="col-3 d-flex align-items-center">
                            <a href="#" class="text-white h4 text-decoration-none">
                                <img class="img-fluid w-75" src="/images/social/instagram.svg" alt="instagram">
                            </a>
                        </div>
                        <div class="col-3 d-flex align-items-center">
                            <a href="#" class="text-white h4 text-decoration-none">
                                <img class="img-fluid w-75" src="/images/social/facebook.svg" alt="facebook">
                            </a>
                        </div>
                        <div class="col-3 d-flex align-items-center">
                            <a href="#" class="text-white h4 text-decoration-none">
                                <img class="img-fluid w-75" src="/images/social/youtube.svg" alt="youtube">
                            </a>
                        </div>
                    </div>

                </div>

                <div class="col-6">
                    <h2 class="text-white h4 fw-bold pb-2">CONTACTS</h2>
                    <div class="row">
                        <div class="col-12">
                            <span style="font-size: 2.2vw;" class="fw-semibold text-white d-sm-none">+380668901648 | es@bim-prove.com</span>
                            <span style="font-size: 2vw;" class="fw-semibold text-white d-none d-sm-block d-md-none">+380668901648 | es@bim-prove.com</span>
                            <span style="font-size: 1.8vw;" class="fw-semibold text-white d-none d-md-block">+380668901648 | es@bim-prove.com</span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row border-bottom border-white border-2 py-3">
                <div class="col-6">
                    <h6 class="fw-semibold text-white">SERVICES</h6>
                    <h6 class="fw-semibold text-white">PORTFOLIO</h6>
                    <h6 class="fw-semibold text-white">ABOUT</h6>
                </div>
                <div class="col-6">
                    <h6 class="fw-semibold text-white">BLOG</h6>
                    <h6 class="fw-semibold text-white">PRODUCTS</h6>
                    <h6 class="fw-semibold text-white">CAREER</h6>
                </div>
            </div>

            <div class="row py-3">
                <div class="col-12 text-center">
                    <p class="card-text text-white fw-bold h6">
                        <small>
                            &copy; Copyright BIMprove company LLC. All rights reserved 2022.
                        </small>
                    </p>
                </div>
            </div>
        </div>
    </div>
</main>



<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/js/splide.min.js"></script>

@yield('js')



@foreach($services as $service)
    @if($service->video_url)
        <!-- Modal -->
        <div class="modal fade" id="{{ $service->slug }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-xl modal-dialog-centered">
                <div class="modal-content bg-transparent border-0">
                    <div class="modal-body w-100 border-0">
                        <iframe id="{{ $service->slug }}_video" class="video w-100" src="{{ $service->video_url }}" title="YouTube video player" frameborder="0" allowfullscreen></iframe>
                    </div>
                </div>
            </div>
        </div>
    @endif
@endforeach

<!-- Modal START -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-fullscreen">
        <div class="modal-content">
            <div class="modal-body p-0">
                <div class="container-fluid h-100">
                    <div class="container">
                        <nav class="navbar navbar-expand my-lg-4" style="background-color: #ffffff;">
                            <div class="container-fluid">
                                <a class="navbar-brand" href="#">
                                    <img src="/images/logo.png" class="img" height="60"  alt="">
                                </a>
                                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                                        <li class="nav-item  d-flex align-items-center d-lg-none">
                                            <a class="nav-link text-dark px-0" type="button" data-bs-dismiss="modal" aria-label="Close">
                                                <img src="/images/menu-close.png" class="img pt-2" width="60" alt="">
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </nav>
                    </div>

                    <div class="row" style="background-color: #68d1d3">
                        <div class="col-12">
                            <h6 class="text-white text-center display-2 fw-bold my-5 d-md-none">
                                GENERAL MENU
                            </h6>
                            <h6 class="text-white text-center display-4 fw-bold my-5 d-none d-md-block">
                                GENERAL MENU
                            </h6>
                        </div>
                    </div>

                    <div class="row mt-3">

                        @foreach($menuItems as $menuItem)
                            @if($menuItem->show_status === 1)

                                @switch($menuItem->item_name)
                                    @case('Home')
                                    <div class="col-12 text-center my-2">
                                        <a href="{{ route('main') }}" role="button" class="btn btn-primary border-0 w-50 mx-auto fw-bold d-md-none" style="background-color: #6bdcdb">
                                            HOME
                                        </a>
                                        <a href="{{ route('main') }}" role="button" class="btn btn-primary border-0 w-25 mx-auto my-2 fw-bold d-none d-md-block" style="background-color: #6bdcdb">
                                            <span class="my-1 mx-0 h5 fw-bold d-block">
                                                HOME
                                            </span>
                                        </a>
                                    </div>
                                    @break

                                    {{--                                    @case('Services')--}}
                                    {{--                                    <li class="nav-item dropdown">--}}
                                    {{--                                        <a class="nav-link text-dark dropdown-toggle px-1" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">--}}
                                    {{--                                            <span class="h6 fw-bold small">SERVICES</span>--}}
                                    {{--                                        </a>--}}
                                    {{--                                        <ul class="dropdown-menu">--}}
                                    {{--                                            @foreach($services as $service)--}}
                                    {{--                                                <li><a class="dropdown-item text-uppercase h6 fw-semibold small" href="{{ route('service', [$service->slug]) }}">{{ $service->title_en }}</a></li>--}}
                                    {{--                                            @endforeach--}}
                                    {{--                                        </ul>--}}
                                    {{--                                    </li>--}}
                                    {{--                                    @break--}}

                                    @case('Portfolio')
                                    <div class="col-12 text-center my-2">
                                        <a href="{{ route('main') }}" role="button" class="btn btn-primary border-0 w-50 mx-auto fw-bold d-md-none" style="background-color: #6bdcdb">
                                            PORTFOLIO
                                        </a>
                                        <a href="{{ route('main') }}" role="button" class="btn btn-primary border-0 w-25 mx-auto my-2 fw-bold d-none d-md-block" style="background-color: #6bdcdb">
                                            <span class="my-1 mx-0 h5 fw-bold d-block">
                                                PORTFOLIO
                                            </span>
                                        </a>
                                    </div>
                                    @break

                                    @case('About')
                                    <div class="col-12 text-center my-2">
                                        <a href="{{ route('main') }}" role="button" class="btn btn-primary border-0 w-50 mx-auto fw-bold d-md-none" style="background-color: #6bdcdb">
                                            ABOUT
                                        </a>
                                        <a href="{{ route('main') }}" role="button" class="btn btn-primary border-0 w-25 mx-auto my-2 fw-bold d-none d-md-block" style="background-color: #6bdcdb">
                                            <span class="my-1 mx-0 h5 fw-bold d-block">
                                                ABOUT
                                            </span>
                                        </a>
                                    </div>
                                    @break

                                    @case('Blog')
                                    <div class="col-12 text-center my-2">
                                        <a href="{{ route('blog') }}" role="button" class="btn btn-primary border-0 w-50 mx-auto fw-bold d-md-none" style="background-color: #6bdcdb">
                                            BLOG
                                        </a>
                                        <a href="{{ route('blog') }}" role="button" class="btn btn-primary border-0 w-25 mx-auto my-2 fw-bold d-none d-md-block" style="background-color: #6bdcdb">
                                            <span class="my-1 mx-0 h5 fw-bold d-block">
                                                BLOG
                                            </span>
                                        </a>
                                    </div>
                                    @break

                                    {{--                                    @case('Products')--}}
                                    {{--                                    <li class="nav-item dropdown">--}}
                                    {{--                                        <a class="nav-link text-dark dropdown-toggle px-1" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">--}}
                                    {{--                                            <span class="h6 fw-bold small">PRODUCTS</span>--}}
                                    {{--                                        </a>--}}
                                    {{--                                        <ul class="dropdown-menu">--}}
                                    {{--                                            <li><a class="dropdown-item text-uppercase h6 fw-semibold small" href="{{ route('products') }}">PLUGINS</a></li>--}}
                                    {{--                                            <li><a class="dropdown-item text-uppercase h6 fw-semibold small" href="{{ route('families') }}">FAMILIES</a></li>--}}
                                    {{--                                        </ul>--}}
                                    {{--                                    </li>--}}
                                    {{--                                    @break--}}

                                    {{--                                    @case('Career')--}}
                                    {{--                                    <div class="col-12 text-center my-2">--}}
                                    {{--                                        <a href="#" role="button" class="btn btn-primary border-0 w-50 mx-auto fw-bold d-md-none" style="background-color: #6bdcdb">--}}
                                    {{--                                            CAREER--}}
                                    {{--                                        </a>--}}
                                    {{--                                        <a href="#" role="button" class="btn btn-primary border-0 w-25 mx-auto my-2 fw-bold d-none d-md-block" style="background-color: #6bdcdb">--}}
                                    {{--                                            <span class="my-1 mx-0 h5 fw-bold d-block">--}}
                                    {{--                                                CAREER--}}
                                    {{--                                            </span>--}}
                                    {{--                                        </a>--}}
                                    {{--                                    </div>--}}
                                    {{--                                    @break--}}
                                @endswitch

                            @endif
                        @endforeach

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Modal END -->

<!-- Modal START -->
<div class="modal fade" id="exampleModal2" tabindex="-1" aria-labelledby="exampleModalLabel2" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content h-100" style="background-color: #b5c5c8;">
            <div class="modal-body h-100 p-0">
                <div class="container-fluid min-vh-100">
                    <div class="row">
                        <div class="col-10 col-lg-10 col-xl-11"></div>
                        <div class="col-2 col-lg-2 col-xl-1">
                            <button type="button" class="btn border-0" data-bs-dismiss="modal">
                                <i class="las la-3x la-times text-white"></i>
                            </button>
                        </div>
                    </div>
                    <div class="row p-5 py-0">
                        <div class="col-12 col-xl-6 align-self-stretch">
                            <h4 class="fw-bold text-white display-6 w-100 lh-1">
                                Meet at a time that is convenient for you.
                            </h4>
                            <h4 class="h2 lh-1 mt-3 mb-3 text-white fw-semibold">
                                <small>
                                    Book a date and time that is convenient for you to discuss how we can help you.
                                </small>
                            </h4>
                            <img src="/images/main_page/calendar_image.png" class="img-fluid w-100 p-5 my-5 d-none d-xl-block" alt="mail_photo">
                        </div>
                        <div class="col-12 col-xl-6">
                            <!-- Calendly inline widget begin -->
                            <div class="calendly-inline-widget w-100" data-url="https://calendly.com/tony-starikov-1992/30min" style="height: 800px;"></div>
                            <script type="text/javascript" src="https://assets.calendly.com/assets/external/widget.js" async></script>
                            <!-- Calendly inline widget end -->
                        </div>
                    </div>
                    <div class="row p-3 pt-2 text-center d-flex align-items-center">
                        <h4 class="h4 lh-1 text-white fw-semibold">
                            <small>
                                If you have a proposal, fill out the form with your information and we'll get back to you.
                            </small>
                        </h4>
                    </div>
                    <div class="row pb-3 d-flex justify-content-center">
                        <div class="col-6 col-lg-3 col-xl-2 mb-2">
                            <a href="{{ route('contact') }}" role="button" class="btn btn-primary shadow-none btn-lg border-0 rounded-4 w-100 mx-auto" style="background-color: #43aeb6">
                                <span class="fw-bold h6 d-block m-0">CONTACT US</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Modal END -->


</body>
</html>
