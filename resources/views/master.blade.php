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
            bottom: 100%;
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
                                        <li class="nav-item d-flex d-lg-none align-items-center">
                                            <a class="ms-4 nav-link text-dark d-flex align-items-center" aria-current="page" href="#">
                                                <p class="h6 fw-bold mt-3 d-block d-lg-none">EN/UA</p>
                                            </a>
                                        </li>
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
                        <div class="col-12 my-2">
                            <button type="button" class="btn btn-primary border-0 w-100 mx-auto fw-bold d-md-none" style="background-color: #6bdcdb">SERVICES</button>
                            <button type="button" class="btn btn-primary border-0 w-25 mx-auto my-2 fw-bold d-none d-md-block" style="background-color: #6bdcdb">
                                <span class="my-1 mx-0 h5 fw-bold d-block">
                                    SERVICES
                                </span>
                            </button>
                        </div>
                        <div class="col-12 my-2">
                            <button type="button" class="btn btn-primary border-0 w-100 mx-auto fw-bold d-md-none" style="background-color: #6bdcdb">PORTFOLIO</button>
                            <button type="button" class="btn btn-primary border-0 w-25 mx-auto my-2 fw-bold d-none d-md-block" style="background-color: #6bdcdb">
                                <span class="my-1 mx-0 h5 fw-bold d-block">
                                    PORTFOLIO
                                </span>
                            </button>
                        </div>
                        <div class="col-12 my-2">
                            <button type="button" class="btn btn-primary border-0 w-100 mx-auto fw-bold d-md-none" style="background-color: #6bdcdb">ABOUT</button>
                            <button type="button" class="btn btn-primary border-0 w-25 mx-auto my-2 fw-bold d-none d-md-block" style="background-color: #6bdcdb">
                                <span class="my-1 mx-0 h5 fw-bold d-block">
                                    ABOUT
                                </span>
                            </button>
                        </div>
                        <div class="col-12 my-2">
                            <button type="button" class="btn btn-primary border-0 w-100 mx-auto fw-bold d-md-none" style="background-color: #6bdcdb">BLOG</button>
                            <button type="button" class="btn btn-primary border-0 w-25 mx-auto fw-bold d-none d-md-block" style="background-color: #6bdcdb">
                                <span class="my-1 mx-0 h5 fw-bold d-block">
                                    BLOG
                                </span>
                            </button>
                        </div>
                        <div class="col-12 my-2">
                            <button type="button" class="btn btn-primary border-0 w-100 mx-auto fw-bold d-md-none" style="background-color: #6bdcdb">CONTACTS</button>
                            <button type="button" class="btn btn-primary border-0 w-25 mx-auto my-2 fw-bold d-none d-md-block" style="background-color: #6bdcdb">
                                <span class="my-1 mx-0 h5 fw-bold d-block">
                                    CONTACTS
                                </span>
                            </button>
                        </div>
                        <div class="col-12 my-2">
                            <button type="button" class="btn btn-primary border-0 w-100 mx-auto fw-bold d-md-none" style="background-color: #6bdcdb">PRODUCTS</button>
                            <button type="button" class="btn btn-primary border-0 w-25 mx-auto my-2 fw-bold d-none d-md-block" style="background-color: #6bdcdb">
                                <span class="my-1 mx-0 h5 fw-bold d-block">
                                    PRODUCTS
                                </span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Modal END -->

<!-- Modal START -->
<div class="modal fade" id="exampleModal2" tabindex="-1" aria-labelledby="exampleModalLabel2" aria-hidden="true">
    <div class="modal-dialog modal-fullscreen">
        <div class="modal-content h-100" style="background-color: #b5c5c8;">
            <div class="modal-body p-0">
                <div class="container h-100">
                    <div class="row mt-1 d-flex justify-content-end">
                        <div class="col-1">
                            <button type="button" class="btn border-0" style="width: 70px" data-bs-dismiss="modal">
                                <i class="las la-3x la-times text-white"></i>
                            </button>
                        </div>
                    </div>
                    <div class="row d-flex justify-content-center">
                        <div class="col-5">
                            <h2 class="text-white display-4 fw-bold pb-2 d-none d-lg-block">CONTACT US</h2>

                            <form class="text-white footer-form" action="post">
                                <div class="row mb-5">
                                    <div class="col-6">
                                        <input type="text" name="name" class="form-control fw-bold shadow-none border-0 border-bottom border-white border-3 text-white rounded-0" id="exampleFormControlInput1" placeholder="Name">
                                    </div>
                                    <div class="col-6">
                                        <input type="text" name="last_name" class="form-control fw-bold shadow-none border-0 border-bottom border-white border-3 text-white rounded-0" id="exampleFormControlInput2" placeholder="Last name">
                                    </div>
                                </div>
                                <div class="mb-5">
                                    <input type="email" name="email" class="form-control fw-bold shadow-none border-0 border-bottom border-white border-3 text-white rounded-0" id="exampleFormControlInput3" placeholder="Email">
                                </div>
                                <div class="mb-5">
                                    <input type="text" name="phone" class="form-control fw-bold shadow-none border-0 border-bottom border-white border-3 text-white rounded-0" id="exampleFormControlInput4" placeholder="Phone">
                                </div>
                                <div class="mb-5">
                                    <input type="text" name="company" class="form-control fw-bold shadow-none border-0 border-bottom border-white border-3 text-white rounded-0" id="exampleFormControlInput5" placeholder="Company">
                                </div>
                                <div class="mb-5">
                                    <input type="text" name="message" class="form-control fw-bold shadow-none border-0 border-bottom border-white border-3 text-white rounded-0" id="exampleFormControlInput6" placeholder="Message">
                                </div>

                                <button type="submit" class="btn btn-primary btn-lg border-0 w-100 mx-auto fw-bold d-lg-none" style="background-color: #6bdcdb">
                                    <span class="fw-bold h6 d-block my-1">SUBMIT</span>
                                </button>

                                <button type="submit" class="btn btn-primary btn-lg border-0 w-50 fw-bold d-none d-lg-block" style="background-color: #6bdcdb">
                                    <span class="fw-bold h4 d-block my-1">SUBMIT</span>
                                </button>

                            </form>
                        </div>
                        <div class="col-5">
                            <!-- Calendly inline widget begin -->
                            <div class="calendly-inline-widget w-100" data-url="https://calendly.com/tony-starikov-1992/30min" style="width:450px;height:95vh;"></div>
                            <script type="text/javascript" src="https://assets.calendly.com/assets/external/widget.js" async></script>
                            <!-- Calendly inline widget end -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Modal END -->

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
                        <li class="nav-item">
                            <a class="nav-link text-dark" aria-current="page" href="{{ route('main') }}">
                                <span class="h6 fw-bold">HOME</span>
                            </a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link text-dark dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <span class="h6 fw-bold">SERVICES</span>
                            </a>
                            <ul class="dropdown-menu">
                                @foreach($services as $service)
                                    <li><a class="dropdown-item fw-semibold text-uppercase" href="#">{{ $service->title_en }}</a></li>
                                @endforeach
                            </ul>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link text-dark" aria-current="page" href="#">
                                <span class="h6 fw-bold">PORTFOLIO</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-dark" aria-current="page" href="{{ route('contact') }}">
                                <span class="h6 fw-bold">ABOUT</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-dark" aria-current="page" href="{{ route('blog') }}">
                                <span class="h6 fw-bold">BLOG</span>
                            </a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link text-dark dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <span class="h6 fw-bold">PRODUCTS</span>
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item fw-bold text-center px-0" href="{{ route('products') }}">PLUGINS</a></li>
                                <li><a class="dropdown-item fw-bold text-center px-0" href="{{ route('families') }}">FAMILIES</a></li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-dark" aria-current="page" href="#">
                                <span class="h6 fw-bold">CAREER</span>
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="col-1 px-0 d-flex justify-content-end align-items-center">
                    <button class="btn btn-primary btn-lg shadow-none border-0 rounded-4" style="background-color: #43aeb6" type="button" data-bs-toggle="modal" data-bs-target="#exampleModal2">
                        <span class="fw-bold h6 d-block m-0">CONTACT&nbsp;US</span>
                    </button>
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
                        <li class="nav-item">
                            <a class="nav-link text-dark px-2" aria-current="page" href="{{ route('main') }}">
                                <span class="h6 fw-bold">HOME</span>
                            </a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link text-dark dropdown-toggle px-2" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <span class="h6 fw-bold">SERVICES</span>
                            </a>
                            <ul class="dropdown-menu">
                                @foreach($services as $service)
                                    <li><a class="dropdown-item fw-semibold text-uppercase" href="#">{{ $service->title_en }}</a></li>
                                @endforeach
                            </ul>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link text-dark px-2" aria-current="page" href="#">
                                <span class="h6 fw-bold">PORTFOLIO</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-dark px-2" aria-current="page" href="{{ route('contact') }}">
                                <span class="h6 fw-bold">ABOUT</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-dark px-2" aria-current="page" href="{{ route('blog') }}">
                                <span class="h6 fw-bold">BLOG</span>
                            </a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link text-dark dropdown-toggle px-2" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <span class="h6 fw-bold">PRODUCTS</span>
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item fw-bold text-center px-0" href="{{ route('products') }}">PLUGINS</a></li>
                                <li><a class="dropdown-item fw-bold text-center px-0" href="{{ route('families') }}">FAMILIES</a></li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-dark px-2" aria-current="page" href="#">
                                <span class="h6 fw-bold">CAREER</span>
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="col-1 px-0 d-flex justify-content-end align-items-center">
                    <button class="btn btn-primary btn-lg shadow-none border-0 rounded-4" style="background-color: #43aeb6" type="button" data-bs-toggle="modal" data-bs-target="#exampleModal2">
                        <span class="fw-bold h6 d-block m-0">CONTACT&nbsp;US</span>
                    </button>
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
                        <li class="nav-item">
                            <a class="nav-link text-dark px-1" aria-current="page" href="{{ route('main') }}">
                                <span class="h6 fw-bold small">HOME</span>
                            </a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link text-dark dropdown-toggle px-1" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <span class="h6 fw-bold small">SERVICES</span>
                            </a>
                            <ul class="dropdown-menu">
                                @foreach($services as $service)
                                    <li><a class="dropdown-item fw-semibold text-uppercase" href="#">{{ $service->title_en }}</a></li>
                                @endforeach
                            </ul>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link text-dark px-1" aria-current="page" href="#">
                                <span class="h6 fw-bold small">PORTFOLIO</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-dark px-1" aria-current="page" href="{{ route('contact') }}">
                                <span class="h6 fw-bold small">ABOUT</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-dark px-1" aria-current="page" href="{{ route('blog') }}">
                                <span class="h6 fw-bold small">BLOG</span>
                            </a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link text-dark dropdown-toggle px-1" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <span class="h6 fw-bold small">PRODUCTS</span>
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item fw-bold text-center px-0" href="{{ route('products') }}">PLUGINS</a></li>
                                <li><a class="dropdown-item fw-bold text-center px-0" href="{{ route('families') }}">FAMILIES</a></li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-dark px-1" aria-current="page" href="#">
                                <span class="h6 fw-bold small">CAREER</span>
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="col-1 px-0 d-flex justify-content-end align-items-center">
                    <button class="btn btn-primary btn shadow-none border-0 rounded-4" style="background-color: #43aeb6" type="button" data-bs-toggle="modal" data-bs-target="#exampleModal2">
                        <span class="fw-bold d-block m-0 small">CONTACT&nbsp;US</span>
                    </button>
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
                        <div class="col-3">
                            <a href="#" class="text-white h4 text-decoration-none">
                                <i class="lab la-2x la-linkedin-in"></i>
                            </a>
                        </div>
                        <div class="col-3">
                            <a href="#" class="text-white h4 text-decoration-none">
                                <i class="lab la-2x la-instagram"></i>
                            </a>
                        </div>
                        <div class="col-3">
                            <a href="#" class="text-white h4 text-decoration-none">
                                <i class="lab la-2x la-facebook-f"></i>
                            </a>
                        </div>
                        <div class="col-3">
                            <a href="#" class="text-white h4 text-decoration-none">
                                <i class="lab la-2x la-youtube"></i>
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
                        <div class="col-3">
                            <a href="#" class="text-white h4 text-decoration-none">
                                <i class="lab la-2x la-linkedin-in"></i>
                            </a>
                        </div>
                        <div class="col-3">
                            <a href="#" class="text-white h4 text-decoration-none">
                                <i class="lab la-2x la-instagram"></i>
                            </a>
                        </div>
                        <div class="col-3">
                            <a href="#" class="text-white h4 text-decoration-none">
                                <i class="lab la-2x la-facebook-f"></i>
                            </a>
                        </div>
                        <div class="col-3">
                            <a href="#" class="text-white h4 text-decoration-none">
                                <i class="lab la-2x la-youtube"></i>
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
                        <div class="col-3">
                            <a href="#" class="text-white h4 text-decoration-none">
                                <i class="lab la-2x la-linkedin-in"></i>
                            </a>
                        </div>
                        <div class="col-3">
                            <a href="#" class="text-white h4 text-decoration-none">
                                <i class="lab la-2x la-instagram"></i>
                            </a>
                        </div>
                        <div class="col-3">
                            <a href="#" class="text-white h4 text-decoration-none">
                                <i class="lab la-2x la-facebook-f"></i>
                            </a>
                        </div>
                        <div class="col-3">
                            <a href="#" class="text-white h4 text-decoration-none">
                                <i class="lab la-2x la-youtube"></i>
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

                    <div class="row w-75">
                        <div class="col-6">
                            <a href="#" class="text-white h4 text-decoration-none">
                                <i class="lab la-2x la-linkedin-in"></i>
                            </a>
                        </div>
                        <div class="col-6">
                            <a href="#" class="text-white h4 text-decoration-none">
                                <i class="lab la-2x la-instagram"></i>
                            </a>
                        </div>
                        <div class="col-6">
                            <a href="#" class="text-white h4 text-decoration-none">
                                <i class="lab la-2x la-facebook-f"></i>
                            </a>
                        </div>
                        <div class="col-6">
                            <a href="#" class="text-white h4 text-decoration-none">
                                <i class="lab la-2x la-youtube"></i>
                            </a>
                        </div>
                    </div>

                </div>

                <div class="col-6">
                    <h2 class="text-white h4 fw-bold pb-2">CONTACTS</h2>
                    <div class="row">
                        <div class="col-12">
                            <div class="row">
                                <a href="#" class="text-white text-decoration-none">
                                    <span class="fw-semibold h6">+380668901648</span>
                                </a>
                            </div>
                            <div class="row mt-3">
                                <a href="#" class="text-white text-decoration-none">
                                    <span class="fw-semibold h6">es@bim-prove.com</span>
                                </a>
                            </div>
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
<script>

    let elms = document.getElementsByClassName( 'splide' );

    let configs = [
        {
            type   : 'loop',
            perPage: 3,
            padding: { left: '10%', right: '10%' },
            arrows: boolean = true,
        },
        {
            type   : 'loop',
            perPage: 2,
            padding: { left: '10%', right: '10%' },
            arrows: boolean = true,
        },
        {
            type   : 'loop',
            perPage: 2,
            padding: { left: '5%', right: '5%' },
            arrows: boolean = true,
        },
        {
            type   : 'loop',
            perPage: 1,
            padding: { left: '15%', right: '15%' },
            arrows: boolean = true,
        },
        {
            type   : 'loop',
            perPage: 1,
            padding: { left: '15%', right: '15%' },
            arrows: boolean = true,
        },
        {
            type   : 'loop',
            perPage: 1,
            arrows: boolean = true,
        },

        // port
        {
            type   : 'loop',
            perPage: 2,
            padding: { left: '20%', right: '20%' },
            arrows: boolean = true,
        },
        {
            type   : 'loop',
            perPage: 2,
            padding: { left: '15%', right: '25%' },
            arrows: boolean = true,
        },

        {
            type   : 'loop',
            perPage: 2,
            padding: { left: '10%', right: '10%' },
            arrows: boolean = true,
        },
        {
            type   : 'loop',
            perPage: 2,
            padding: { left: '5%', right: '15%' },
            arrows: boolean = true,
        },

        {
            type   : 'loop',
            perPage: 2,
            padding: { left: '10%', right: '10%' },
            arrows: boolean = true,
        },
        {
            type   : 'loop',
            perPage: 2,
            padding: { left: '5%', right: '15%' },
            arrows: boolean = true,
        },

        {
            type   : 'loop',
            perPage: 1,
            padding: { left: '20%', right: '20%' },
            arrows: boolean = true,
        },

        {
            type   : 'loop',
            perPage: 1,
            padding: { left: '10%', right: '10%' },
            arrows: boolean = true,
        },

        {
            type   : 'loop',
            perPage: 1,
            arrows: boolean = true,
        },

        //team

        {
            type   : 'loop',
            perPage: 4,
            arrows: boolean = true,
        },

        {
            type   : 'loop',
            perPage: 4,
            arrows: boolean = true,
        },

        {
            type   : 'loop',
            perPage: 3,
            arrows: boolean = true,
        },

        {
            type   : 'loop',
            perPage: 3,
            arrows: boolean = true,
        },

        {
            type   : 'loop',
            perPage: 2,
            arrows: boolean = true,
        },

        {
            type   : 'loop',
            perPage: 1,
            arrows: boolean = true,
        },
    ];

    for ( let i = 0; i < elms.length; i++ ) {
        new Splide( elms[ i ], configs[ i ] ).mount();
    }
</script>
</body>
</html>
