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

    <link rel="stylesheet" href="https://unpkg.com/@glidejs/glide@3.6.0/dist/css/glide.core.min.css">
    <link rel="stylesheet" href="https://unpkg.com/@glidejs/glide@3.6.0/dist/css/glide.theme.min.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600;700&display=swap" rel="stylesheet">

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
        input::-webkit-input-placeholder { /* WebKit browsers */
            color:    #fff !important;
            opacity: 1 !important;
            background-color: #b0c0c3;
            font-size: 1em;
            padding-left: 0 !important;
        }
        input::-webkit-input-placeholder:focus { /* WebKit browsers */
            color:    #fff !important;
            opacity: 1 !important;
            background-color: #b0c0c3;
            font-size: 1em;
            border: 0;
            outline: none !important;
            padding-left: 0 !important;
        }
        input:-moz-placeholder { /* Mozilla Firefox 4 to 18 */
            color:    #fff !important;
            opacity: 1 !important;
            background-color: #b0c0c3;
            font-size: 1em;
            padding-left: 0 !important;
        }
        input:-moz-placeholder:focus { /* Mozilla Firefox 4 to 18 */
            color:    #fff !important;
            opacity: 1 !important;
            background-color: #b0c0c3;
            font-size: 1em;
            border: 0;
            outline: none !important;
            padding-left: 0 !important;
        }
        input::-moz-placeholder { /* Mozilla Firefox 19+ */
            color:    #fff !important;
            opacity: 1 !important;
            background-color: #b0c0c3;
            font-size: 1em;
            padding-left: 0 !important;
        }
        input::-moz-placeholder:focus { /* Mozilla Firefox 19+ */
            color:    #fff !important;
            opacity: 1 !important;
            background-color: #b0c0c3;
            font-size: 1em;
            border: 0;
            outline: none !important;
            padding-left: 0 !important;
        }
        input:-ms-input-placeholder { /* Internet Explorer 10+ */
            color:    #fff !important;
            opacity: 1 !important;
            background-color: #b0c0c3;
            font-size: 1em;
            padding-left: 0 !important;
        }
        input:-ms-input-placeholder:focus { /* Internet Explorer 10+ */
            color:    #fff !important;
            opacity: 1 !important;
            background-color: #b0c0c3;
            font-size: 1em;
            border: 0;
            outline: none !important;
            padding-left: 0 !important;
        }
        input:-ms-input-placeholder:focus { /* Internet Explorer 10+ */
            color:    #fff !important;
            opacity: 1 !important;
            background-color: #b0c0c3;
            font-size: 1em;
            border: 0;
            outline: none !important;
            padding-left: 0 !important;
        }
        input[placeholder], [placeholder], *[placeholder] {
            color: white !important;
            opacity: 1 !important;
            background-color: #b0c0c3;
            font-size: 1em;
            padding-left: 0 !important;
        }
        input[placeholder]:focus, [placeholder]:focus, *[placeholder]:focus {
            color: white !important;
            opacity: 1 !important;
            background-color: #b0c0c3;
            font-size: 1em;
            outline: none !important;
            padding-left: 0 !important;
        }
        input:focus::placeholder {
            color: white !important;
            background-color: #b0c0c3 !important;
            border: 0;
            outline: none !important;
            padding-left: 0 !important;
        }

        ::-webkit-input-placeholder {
            font-size: 1.25rem!important;
        }

        :-moz-placeholder { /* Firefox 18- */
            font-size: 1.25rem!important;
        }
        ::-moz-placeholder {  /* Firefox 19+ */
            font-size: 1.25rem!important;
        }

        /*@media (min-width: 992px) and (max-width: 1199.98px) { ... }*/

        /*!* If the screen size is 1200px wide or more, set the font-size to 80px *!*/
        /*@media (min-width: 1200px) {*/
        /*    .font-menu {*/
        /*        font-size: 1.2vw;*/
        /*    }*/
        /*    .responsive-font-example {*/
        /*        font-size: 5vw;*/
        /*    }*/
        /*}*/
        /*!* If the screen size is smaller than 1200px, set the font-size to 80px *!*/
        /*@media (max-width: 1199.98px) {*/
        /*    .responsive-font-example {*/
        /*        font-size: 5vw;*/
        /*    }*/
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
                            <button type="button" class="btn btn-primary border-0 w-100 mx-auto fw-bold d-md-none" style="background-color: #6bdcdb">SCRIPTS</button>
                            <button type="button" class="btn btn-primary border-0 w-25 mx-auto my-2 fw-bold d-none d-md-block" style="background-color: #6bdcdb">
                                <span class="my-1 mx-0 h5 fw-bold d-block">
                                    SCRIPTS
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

<div class="container">

    <nav class="navbar navbar-expand my-lg-4" style="background-color: #ffffff;">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                <img src="/images/logo.png" class="img d-xl-none" height="60"  alt="">
                <img src="/images/logo.png" class="img-fluid d-none d-xl-block"  alt="">
            </a>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mx-auto mb-2 mb-lg-0 d-none d-lg-flex">
                    <li class="nav-item">
                        <a class="nav-link text-dark mx-lg-0 mx-xl-3" aria-current="page" href="#">
                            <p class="h5 fw-bold">SERVICES</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-dark mx-lg-0 mx-xl-3" aria-current="page" href="#">
                            <p class="h5 fw-bold">PORTFOLIO</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-dark mx-lg-0 mx-xl-3" aria-current="page" href="#">
                            <p class="h5 fw-bold">ABOUT</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-dark mx-lg-0 mx-xl-3" aria-current="page" href="{{ route('blog') }}">
                            <p class="h5 fw-bold">BLOG</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-dark mx-lg-0 mx-xl-3" aria-current="page" href="#">
                            <p class="h5 fw-bold">CONTACTS</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-dark mx-lg-0 mx-xl-3" aria-current="page" href="#">
                            <p class="h5 fw-bold">SCRIPTS</p>
                        </a>
                    </li>
                </ul>
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item d-none d-lg-block">
                        <a class="nav-link text-dark" aria-current="page" href="#">
                            <p class="h5 fw-bold">EN/UA</p>
                        </a>
                    </li>
                    <li class="nav-item d-flex d-lg-none align-items-center">
                        <a class="ms-4 nav-link text-dark d-flex align-items-center" aria-current="page" href="#">
                            <p class="h6 fw-bold mt-3 d-block d-lg-none">EN/UA</p>
                        </a>
                    </li>
                    <li class="nav-item  d-flex align-items-center d-lg-none">
                        <a class="nav-link text-dark px-0" aria-current="page" type="button" data-bs-toggle="modal" data-bs-target="#exampleModal">
                            <img src="/images/menu-open.png" class="img pt-2" width="60" alt="">
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

</div>


<main role="main" class="w-100">
    @yield('main')
</main>

<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@glidejs/glide"></script>
<script>
    const config1 = {
        type: 'carousel',
        perView: 2,
        peek: {
            before: 150,
            after: 150,
        }
    }
    const config2 = {
        type: 'carousel',
        perView: 2,
        peek: {
            before: 100,
            after: 200,
        }
    }

    new Glide('.glide1', config1).mount();
    new Glide('.glide2', config2).mount();
</script>
</body>
</html>
