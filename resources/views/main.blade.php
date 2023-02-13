@extends('master')

{{--@section('title', $page_info->__('title'))--}}

{{--@section('description', $page_info->description)--}}

@section('main')
    <div class="container-fluid" style="background-color: #68d1d3">
        <div class="container px-xxl-5 py-5">
            <div class="row px-5 mt-5">
                <div class="col-12 mt-5 order-first">
                    <h1 class="text-white fw-bold mt-5 display-5">
                        THE INDIVIDUAL FIVE-STAR SERVICE:
                        <span class="d-inline-block d-sm-none">M</span>
                        <span class="d-none d-sm-inline-block d-md-none">SM</span>
                        <span class="d-none d-md-inline-block d-lg-none">MD</span>
                        <span class="d-none d-lg-inline-block d-xl-none">LG</span>
                        <span class="d-none d-xl-inline-block d-xxl-none">XL</span>
                        <span class="d-none d-xxl-inline-block">XXL</span>
                    </h1>
                    <h2 class="text-white h1 fw-semibold" style="width: 80%">
                        <small>
                            Unlock your AEC company's full potential with our customized BIM support, delivering a five-star service experience tailored specifically for you.
                        </small>
                    </h2>
                </div>
            </div>

            <div class="row px-5 mt-4">
                <div class="col-12 ps-0 pe-4 col-md-7 col-lg-5 d-flex align-items-center order-md-2">
{{--                    <div class="d-md-none">--}}
{{--                        <h6 class="text-white fw-bold mb-2 mt-lg-5">--}}
{{--                            <i class="las la-1x la-comments p-2 rounded-circle me-1" style="background-color: #43aeb6"></i>--}}
{{--                            <small>FAST FEEDBACK</small>--}}
{{--                        </h6>--}}
{{--                        <h6 class="text-white fw-bold mb-2">--}}
{{--                            <i class="las la-1x la-handshake p-2 rounded-circle me-1" style="background-color: #43aeb6"></i>--}}
{{--                            <small>PROFESSIONAL CONSULTATIONS</small>--}}
{{--                        </h6>--}}
{{--                        <h6 class="text-white fw-bold mb-2">--}}
{{--                            <i class="las la-1x la-edit p-2 rounded-circle me-1" style="background-color: #43aeb6"></i>--}}
{{--                            <small>FREE ADJUSTMENTS</small>--}}
{{--                        </h6>--}}
{{--                        <h6 class="text-white fw-bold mb-2">--}}
{{--                            <i class="las la-1x la-gem p-2 rounded-circle me-1" style="background-color: #43aeb6"></i>--}}
{{--                            <small>HIGH QUALITY BIM MODELS</small>--}}
{{--                        </h6>--}}
{{--                    </div>--}}

                    <div class="d-none d-md-block">

                        <div class="row my-2">
                            <div class="col-2 ps-4 pe-0 d-flex align-items-center">
                                <i class="las la-2x la-comments p-1 rounded-circle me-1 text-white" style="background-color: #43aeb6"></i>
                            </div>
                            <div class="col-10 px-0 d-flex align-items-center">
                                <h5 class="text-white fw-semibold m-0">
                                    <small>
                                        HIGHING QUALITY
                                    </small>
                                </h5>
                            </div>
                        </div>

                        <div class="row mb-2">
                            <div class="col-2 ps-4 pe-0 d-flex align-items-center">
                                <i class="las la-2x la-handshake p-1 rounded-circle me-1 text-white" style="background-color: #43aeb6"></i>
                            </div>
                            <div class="col-10 px-0 d-flex align-items-center">
                                <h5 class="text-white fw-semibold m-0">
                                    <small>
                                        COMMUNICATION WITH PROJECT MANAGER 24/7
                                    </small>
                                </h5>
                            </div>
                        </div>

                        <div class="row mb-2">
                            <div class="col-2 ps-4 pe-0 d-flex align-items-center">
                                <i class="las la-2x la-edit p-1 rounded-circle me-1 text-white" style="background-color: #43aeb6"></i>
                            </div>
                            <div class="col-10 px-0 d-flex align-items-center">
                                <h5 class="text-white fw-semibold m-0">
                                    <small>
                                        NON-STANDARD TASKS SOLUTIONS
                                    </small>
                                </h5>
                            </div>
                        </div>

                        <div class="row mb-2">
                            <div class="col-2 ps-4 pe-0 d-flex align-items-center">
                                <i class="las la-2x la-gem p-1 rounded-circle me-1 text-white" style="background-color: #43aeb6"></i>
                            </div>
                            <div class="col-10 px-0 d-flex align-items-center">
                                <h5 class="text-white fw-semibold m-0">
                                    <small>
                                        QUICK PROJECT ADJUSTMENT BY THE COMMENTS
                                    </small>
                                </h5>
                            </div>
                        </div>

                        <div class="row mb-2">
                            <div class="col-2 ps-4 pe-0 d-flex align-items-center">
                                <i class="las la-2x la-coins p-1 rounded-circle me-1 text-white" style="background-color: #43aeb6"></i>
                            </div>
                            <div class="col-10 px-0 d-flex align-items-center">
                                <h5 class="text-white fw-semibold m-0">
                                    <small>
                                        HELP IN WORK PROCESS ORGANIZATION
                                    </small>
                                </h5>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-lg-7 px-0 order-md-4 order-lg-3 d-flex align-items-center">
                    <video
                        id="my-video"
                        class="video-js w-100"
                        height="300"
                        controls
                        loop
                        muted
                        autoplay
                        preload="auto"
                        poster="MY_VIDEO_POSTER.jpg"
                        data-setup="{}"
                    >
                        <source src="/images/video.mp4" type="video/mp4" />
                        <source src="/images/video.webm" type="video/webm" />
                        <p class="vjs-no-js">
                            To view this video please enable JavaScript, and consider upgrading to a
                            web browser that
                            <a href="https://videojs.com/html5-video-support/" target="_blank"
                            >supports HTML5 video</a
                            >
                        </p>
                    </video>
                </div>
            </div>

            <div class="row px-5 mt-5 mb-4">
                <div class="col-12 col-md-5 col-lg-3 order-md-3 order-lg-4">

                    <button class="btn btn-primary btn-lg border-0 rounded-4 w-100" style="background-color: #43aeb6" type="button">
                        <span class="fw-bold h4 d-block my-2">CONTACT US</span>
                    </button>

                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid" style="background-color: #d4fffc">
        <div class="container px-xxl-5">
            <div class="row p-5">
                <div class="col-12">
                    <h1 class="fw-bold mt-5 display-5 w-75">
                        DISCOVER THE COMPREHENSIVE SERVICES OF BIMPROVE LLC
                    </h1>
                </div>
                <div class="row">
                    <div class="col-6 mt-3">
                        <h2 class="h1 fw-semibold">
                            <small>
                                Our goal is to provide a personalized, 5-star level of service to each of our clients.
                            </small>
                        </h2>
                    </div>
                </div>
                <div class="row mb-5 pe-0">
                    <div class="col-6 mt-3">
                        <h2 class="h4 fw-normal" style="text-align: justify">
                            <small>
                                In just 7 years, BIM prove LLC has grown from a single Scan to BIM service to a company with 6 independent departments, each dedicated to advancing in its respective field. Each department is focused on growth, but all are aligned in our commitment to providing exceptional, personalized service to our clients. We partner with owners, general contractors, and design firms to streamline the BIM process for projects of all sizes and industries, from small commercial to large industrial.
                            </small>
                        </h2>
                    </div>
                    <div class="col-6 mt-3 ps-4 pe-0">
                        <img src="/images/team_photo.png" class="img-fluid" alt="team_photo">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid mt-4">
        <div class="container px-xxl-5">
            <div class="row px-5">
                <h2 class="display-6 fw-bold mt-5 d-lg-none">SERVICES</h2>
                <h2 class="display-5 fw-bold pb-2 pt-5 my-5 d-none d-lg-block">SERVICES</h2>
            </div>
        </div>
    </div>

    <div class="container-fluid">
        <div class="container px-xxl-5">
            <div class="row px-5">

                @foreach($services as $service)
                    <div class="col-12 col-sm-6 col-lg-4 my-3">
                        <div class="card p-0 h-100" style="border: 4px solid #6bdcdb; border-radius: 0;">
                            <div class="service-container">
                                <div class="container-fluid">
                                    <div class="row">
                                        <div class="col-7 px-0 d-flex align-items-center">
                                            <h5 class="fw-bold ps-3" style="position: relative; bottom: 25px;">
                                                {{ $service->title_en }}
                                            </h5>
                                        </div>
                                        <div class="col-5 p-0 ps-2">
                                            <img src="/images/{{ $service->image }}" class="img-fluid w-100 bg-transparent position-relative" style="position: relative; bottom: 25px;">
                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer p-0 border-0 d-flex align-items-center" style="background-color: #ffffff">
                                    <h6 class="text-secondary px-3 pb-5">
                                        {{ $service->description_en }}
                                    </h6>
                                </div>
                                <div class="service-overlay">
                                    <div class="d-flex align-self-center h-100 px-5" style="background-color: #6de1df">
                                        <button class="btn btn-primary btn-lg border-0 rounded-4 w-100 align-self-center" style="background-color: #43aeb6" type="button">
                                            <span class="fw-bold h4 d-block my-2">MORE INFO</span>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach

            </div>
        </div>
    </div>

    <div class="container-fluid mt-4">
        <div class="container px-xxl-5">
            <div class="row px-5">
                <h2 class="display-6 fw-bold mt-5 d-lg-none">YOUR BUSINESS DESERVES<br>OUR FIVE-STARS:</h2>
                <h2 class="display-5 fw-bold pb-2 pt-5 my-5 d-none d-lg-block">YOUR BUSINESS DESERVES<br>OUR FIVE-STARS:</h2>
            </div>
        </div>
    </div>

    <div class="container-fluid">
        <div class="container px-xxl-5">
            <div class="row px-5">

                @for($i = 1; $i < 7; $i++)
                    @if($i == 6)
                        <div class="col-12 col-sm-6 col-lg-4 my-3">
                            <div class="card p-0 h-100" style="border: none; border-radius: 0;">
                                <div class="d-flex align-items-center h-50 px-5" style="background-color: #6de1df">
                                    <button class="btn btn-primary btn-lg border-0 rounded-4 w-100" style="background-color: #43aeb6" type="button">
                                        <span class="fw-bold h4 d-block my-2">CONTACT US</span>
                                    </button>
                                </div>
                            </div>
                        </div>
                    @else
                        <div class="col-12 col-sm-6 col-lg-4 my-3">
                            <div class="card p-0 h-100" style="border: 4px solid #6bdcdb; border-radius: 0;">
                                <div class="container-fluid">
                                    <div class="row">
                                        <div class="col-7 px-0 d-flex align-items-center">
                                            <h5 class="fw-bold ps-3">
                                                Highing quality
                                            </h5>
                                        </div>
                                        <div class="col-5 p-0 ps-2">
                                            <img src="/images/star.png" class="img-fluid bg-transparent">
                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer p-0 border-0 d-flex align-items-center" style="background-color: #ffffff">
                                    <h6 class="text-secondary px-3 py-5">
                                        Benefit from constant communication with a dedicated project manager available 24/7
                                    </h6>
                                </div>
                            </div>
                        </div>
                    @endif
                @endfor

            </div>
        </div>
    </div>

{{--    <div class="container-fluid mt-4">--}}
{{--        <div class="container px-xxl-5">--}}
{{--            <div class="row px-5">--}}
{{--                <h2 class="display-6 fw-bold mt-5 d-lg-none">ACHIEVEMENTS</h2>--}}
{{--                <h2 class="display-5 fw-bold pb-2 pt-5 my-5 d-none d-lg-block">ACHIEVEMENTS</h2>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}

{{--    <div class="container-fluid">--}}
{{--        <div class="container px-xxl-5">--}}
{{--            <div class="row px-5">--}}

{{--                <div class="col-12 col-sm-3 col-md-4 text-center p-5">--}}
{{--                    <img src="images/achievement1.png" class="img-fluid mb-2 d-md-none">--}}
{{--                    <img src="images/achievement1.png" class="img-fluid w-75 mb-2 mt-4 d-none d-md-block mx-auto">--}}
{{--                    <h6 class="fw-bold display-6 m-0">130</h6>--}}
{{--                    <h6 class="card-title text-dark fw-bold small d-md-none">--}}
{{--                        COMPLETED PROJECTS--}}
{{--                    </h6>--}}
{{--                    <h6 class="card-title text-dark fw-bold d-none d-md-block">--}}
{{--                        COMPLETED PROJECTS--}}
{{--                    </h6>--}}
{{--                </div>--}}

{{--                <div class="col-12 col-sm-3 col-md-4 text-center p-5">--}}
{{--                    <img src="images/achievement1.png" class="img-fluid mb-2 d-md-none">--}}
{{--                    <img src="images/achievement1.png" class="img-fluid w-75 mb-2 mt-4 d-none d-md-block mx-auto">--}}
{{--                    <h6 class="fw-bold display-6 m-0">130</h6>--}}
{{--                    <h6 class="card-title text-dark fw-bold small d-md-none">--}}
{{--                        COMPLETED PROJECTS--}}
{{--                    </h6>--}}
{{--                    <h6 class="card-title text-dark fw-bold d-none d-md-block">--}}
{{--                        COMPLETED PROJECTS--}}
{{--                    </h6>--}}
{{--                </div>--}}

{{--                <div class="col-12 col-sm-3 col-md-4 text-center p-5">--}}
{{--                    <img src="images/achievement1.png" class="img-fluid mb-2 d-md-none">--}}
{{--                    <img src="images/achievement1.png" class="img-fluid w-75 mb-2 mt-4 d-none d-md-block mx-auto">--}}
{{--                    <h6 class="fw-bold display-6 m-0">130</h6>--}}
{{--                    <h6 class="card-title text-dark fw-bold small d-md-none">--}}
{{--                        COMPLETED PROJECTS--}}
{{--                    </h6>--}}
{{--                    <h6 class="card-title text-dark fw-bold d-none d-md-block">--}}
{{--                        COMPLETED PROJECTS--}}
{{--                    </h6>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}

{{--    <div class="container-fluid mt-4">--}}
{{--        <div class="container px-xxl-5">--}}
{{--            <div class="row px-5">--}}
{{--                <h2 class="display-6 fw-bold mt-5 d-lg-none">MODELS</h2>--}}
{{--                <h2 class="display-5 fw-bold pb-2 pt-5 my-5 d-none d-lg-block">MODELS</h2>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}

{{--    <div class="container-fluid px-0 d-lg-none" style="background-color: #acbcbf">--}}
{{--        <div class="container px-xxl-5">--}}
{{--            <div class="row px-5">--}}
{{--                <div class="col-12 px-0">--}}
{{--                    <div id="carouselExampleControls4" class="carousel slide" data-bs-ride="carousel">--}}
{{--                        <div class="carousel-indicators mb-0">--}}
{{--                            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>--}}
{{--                            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>--}}
{{--                            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>--}}
{{--                            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="3" aria-label="Slide 4"></button>--}}
{{--                            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="4" aria-label="Slide 5"></button>--}}
{{--                        </div>--}}
{{--                        <div class="carousel-inner">--}}
{{--                            @for ($i = 1; $i < 6; $i++)--}}
{{--                                <div class="carousel-item @if($i == 1) active @endif">--}}
{{--                                    <div class="cards-wrapper">--}}
{{--                                        <div class="card border-0 rounded-0 w-100">--}}
{{--                                            <div class="row">--}}
{{--                                                <div class="col-12">--}}
{{--                                                    <img class="img w-100" src="images/mod.png" alt="">--}}
{{--                                                </div>--}}
{{--                                            </div>--}}

{{--                                            <div class="row" style="background-color: #acbcbf">--}}
{{--                                                <div class="col-12 text-center" style="background-color: #acbcbf">--}}
{{--                                                    <button class="btn btn-sm btn-primary border-0 rounded-4 w-50 mx-auto my-2" style="background-color: #6bdcdb" type="button">--}}
{{--                                                        <span class="fw-bold d-block m-0 small">--}}
{{--                                                            DOWNLOAD<br>--}}
{{--                                                            MODEL--}}
{{--                                                        </span>--}}
{{--                                                    </button>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}

{{--                                            <div class="row pb-4 pt-2" style="background-color: #acbcbf">--}}
{{--                                                <div class="col-4 text-center px-0">--}}
{{--                                                    <h6 class="text-white text-center fw-bold small-text mt-1">--}}
{{--                                                        ARCHITECTURE--}}
{{--                                                    </h6>--}}
{{--                                                </div>--}}
{{--                                                <div class="col-4 text-center">--}}
{{--                                                    <h6 class="text-white text-center fw-bold">--}}
{{--                                                        STRUCTURE--}}
{{--                                                    </h6>--}}
{{--                                                </div>--}}
{{--                                                <div class="col-4 text-center px-0">--}}
{{--                                                    <h6 class="text-white text-center fw-bold small-text mt-1">--}}
{{--                                                        PLUMBING--}}
{{--                                                    </h6>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            @endfor--}}
{{--                        </div>--}}
{{--                        <button class="carousel-control-prev" style="width: 30px" type="button" data-bs-target="#carouselExampleControls4" data-bs-slide="prev">--}}
{{--                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>--}}
{{--                            <span class="visually-hidden">Previous</span>--}}
{{--                        </button>--}}
{{--                        <button class="carousel-control-next" style="width: 30px" type="button" data-bs-target="#carouselExampleControls4" data-bs-slide="next">--}}
{{--                            <span class="carousel-control-next-icon" aria-hidden="true"></span>--}}
{{--                            <span class="visually-hidden">Next</span>--}}
{{--                        </button>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}

{{--    <div class="container-fluid d-none d-lg-block d-xl-none">--}}
{{--        <div class="row px-5 py-5" style="background-color: #b6c7ca">--}}
{{--            <div class="col-12">--}}
{{--                <div id="carouselExampleControls8" class="carousel slide" data-bs-ride="carousel">--}}
{{--                    <div class="carousel-inner">--}}
{{--                        @for ($i = 1; $i < 5; $i++)--}}
{{--                            <div class="carousel-item @if($i == 1) active @endif">--}}
{{--                                <div class="row">--}}
{{--                                    <div class="col-6">--}}
{{--                                        <div class="row py-5">--}}
{{--                                            <div class="col-2 d-flex align-items-center">--}}
{{--                                                <img class="img-fluid" src="images/circle2.png" alt="">--}}
{{--                                            </div>--}}
{{--                                            <div class="col-10 d-flex align-items-center">--}}
{{--                                                <h4 class="text-white fw-bold mb-0">--}}
{{--                                                    ARCHITECTURE--}}
{{--                                                </h4>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                        <div class="row">--}}
{{--                                            <div class="col-2 d-flex align-items-center">--}}
{{--                                                <img class="img-fluid" src="images/circle1.png" alt="">--}}
{{--                                            </div>--}}
{{--                                            <div class="col-10 d-flex align-items-center">--}}
{{--                                                <h1 class="text-white fw-bold mb-0">--}}
{{--                                                    STRUCTURE--}}
{{--                                                </h1>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                        <div class="row">--}}
{{--                                            <div class="col-2">--}}
{{--                                            </div>--}}
{{--                                            <div class="col-10">--}}
{{--                                                <p class="text-white fw-bold mt-2 h4">--}}
{{--                                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum, quam. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum, quam.--}}
{{--                                                </p>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                        <div class="row">--}}
{{--                                            <div class="col-2">--}}
{{--                                            </div>--}}
{{--                                            <div class="col-10">--}}
{{--                                                <button class="btn btn-sm btn-primary border-0 rounded-4 w-50 my-2" style="background-color: #6bdcdb"type="button">--}}
{{--                                                    <span class="h5 fw-bold d-block mx-3 my-1">--}}
{{--                                                        DOWNLOAD<br>MODEL--}}
{{--                                                    </span>--}}
{{--                                                </button>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                        <div class="row py-5">--}}
{{--                                            <div class="col-2 d-flex align-items-center">--}}
{{--                                                <img class="img-fluid" src="images/circle2.png" alt="">--}}
{{--                                            </div>--}}
{{--                                            <div class="col-10 d-flex align-items-center">--}}
{{--                                                <h4 class="text-white fw-bold mb-0">--}}
{{--                                                    PLUMBING--}}
{{--                                                </h4>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                        <div class="row py-5">--}}
{{--                                            <div class="col-2 d-flex align-items-center">--}}
{{--                                                <img class="img-fluid" src="images/circle2.png" alt="">--}}
{{--                                            </div>--}}
{{--                                            <div class="col-10 d-flex align-items-center">--}}
{{--                                                <h4 class="text-white fw-bold mb-0">--}}
{{--                                                    HEATING--}}
{{--                                                </h4>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                        <div class="row py-5">--}}
{{--                                            <div class="col-2 d-flex align-items-center">--}}
{{--                                                <img class="img-fluid" src="images/circle2.png" alt="">--}}
{{--                                            </div>--}}
{{--                                            <div class="col-10 d-flex align-items-center">--}}
{{--                                                <h4 class="text-white fw-bold mb-0">--}}
{{--                                                    ELECTRICAL--}}
{{--                                                </h4>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <div class="col-6 d-flex align-items-center">--}}
{{--                                        <img class="img-fluid" src="images/model_lg.png" alt="">--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        @endfor--}}
{{--                    </div>--}}
{{--                    <button class="carousel-control-prev" style="width: 30px" type="button" data-bs-target="#carouselExampleControls8" data-bs-slide="prev">--}}
{{--                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>--}}
{{--                        <span class="visually-hidden">Previous</span>--}}
{{--                    </button>--}}
{{--                    <button class="carousel-control-next" style="width: 30px" type="button" data-bs-target="#carouselExampleControls8" data-bs-slide="next">--}}
{{--                        <span class="carousel-control-next-icon" aria-hidden="true"></span>--}}
{{--                        <span class="visually-hidden">Next</span>--}}
{{--                    </button>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}

{{--    <div class="container-fluid d-none d-xl-block" style="background-color: #b6c7ca">--}}
{{--        <div class="container px-xxl-5" style="background-color: #b6c7ca">--}}
{{--            <div class="row px-5 py-5" style="background-color: #b6c7ca">--}}
{{--                <div class="col-6">--}}
{{--                    <div class="row py-5">--}}
{{--                        <div class="col-2 d-flex align-items-center">--}}
{{--                            <img class="img-fluid" src="images/circle2.png" alt="">--}}
{{--                        </div>--}}
{{--                        <div class="col-10 d-flex align-items-center">--}}
{{--                            <h4 class="text-white fw-bold mb-0">--}}
{{--                                ARCHITECTURE--}}
{{--                            </h4>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="row">--}}
{{--                        <div class="col-2 d-flex align-items-center">--}}
{{--                            <img class="img-fluid" src="images/circle1.png" alt="">--}}
{{--                        </div>--}}
{{--                        <div class="col-10 d-flex align-items-center">--}}
{{--                            <h1 class="text-white fw-bold mb-0">--}}
{{--                                STRUCTURE--}}
{{--                            </h1>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="row">--}}
{{--                        <div class="col-2">--}}
{{--                        </div>--}}
{{--                        <div class="col-10">--}}
{{--                            <p class="text-white fw-bold mt-2 h4">--}}
{{--                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum, quam. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum, quam.--}}
{{--                            </p>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="row">--}}
{{--                        <div class="col-2">--}}
{{--                        </div>--}}
{{--                        <div class="col-10">--}}
{{--                            <button class="btn btn-sm btn-primary border-0 rounded-4 w-50 my-2" style="background-color: #6bdcdb"type="button">--}}
{{--                                                    <span class="h5 fw-bold d-block mx-3 my-1">--}}
{{--                                                        DOWNLOAD<br>MODEL--}}
{{--                                                    </span>--}}
{{--                            </button>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="row py-5">--}}
{{--                        <div class="col-2 d-flex align-items-center">--}}
{{--                            <img class="img-fluid" src="images/circle2.png" alt="">--}}
{{--                        </div>--}}
{{--                        <div class="col-10 d-flex align-items-center">--}}
{{--                            <h4 class="text-white fw-bold mb-0">--}}
{{--                                PLUMBING--}}
{{--                            </h4>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="row py-5">--}}
{{--                        <div class="col-2 d-flex align-items-center">--}}
{{--                            <img class="img-fluid" src="images/circle2.png" alt="">--}}
{{--                        </div>--}}
{{--                        <div class="col-10 d-flex align-items-center">--}}
{{--                            <h4 class="text-white fw-bold mb-0">--}}
{{--                                HEATING--}}
{{--                            </h4>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="row py-5">--}}
{{--                        <div class="col-2 d-flex align-items-center">--}}
{{--                            <img class="img-fluid" src="images/circle2.png" alt="">--}}
{{--                        </div>--}}
{{--                        <div class="col-10 d-flex align-items-center">--}}
{{--                            <h4 class="text-white fw-bold mb-0">--}}
{{--                                ELECTRICAL--}}
{{--                            </h4>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="col-6 d-flex align-items-center">--}}
{{--                    <img class="img-fluid" src="images/model_lg.png" alt="">--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}

    <div class="container-fluid mt-4" style="background-color: #d4fffb">
        <div class="container px-xxl-5">
            <div class="row px-5">
                <h2 class="display-6 fw-bold mt-5 d-lg-none">TESTIMONIALS</h2>
                <h2 class="display-5 fw-bold pb-2 pt-5 my-5 d-none d-lg-block">TESTIMONIALS</h2>
            </div>
        </div>
    </div>

    <div class="container-fluid" style="background-color: #d4fffb">
        <div class="row pb-5">
            <div class="col-12 p-0">
                <section id="splide3" class="splide" aria-label="Slide Container Example">
                    <div class="splide__track">
                        <ul class="splide__list">
                            <li class="splide__slide">
                                <div class="row d-none d-lg-flex px-4">
                                    <div class="col-12 px-3">
                                        <div class="card p-3 rounded-5 border-0" style="background-color: #c4c4c4">
                                            <div class="card-body">
                                                <div class="row">
                                                    <div class="col-4">
                                                        <img class="img w-100" src="images/partner2.png" alt="">
                                                    </div>

                                                    <div class="col-8 d-flex align-items-center">

                                                        <div class="w-100 align-self-center">
                                                            <h6 class="text-white fw-bold h5 w-100 mb-0">Organization</h6>
                                                            <h6 class="text-white fw-bold h5 w-100">Country</h6>

                                                            <h6 class="text-white fw-bold h5 w-100 mb-0">Name Surname</h6>
                                                            <h6 class="text-white fw-bold h5 w-100">Profession</h6>
                                                        </div>

                                                    </div>
                                                </div>

                                                <div class="row">
                                                    <div class="col-12">
                                                        <p class="card-text text-white fw-bold h6 mt-2">
                                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Delectus doloremque, eligendi et expedita impedit maxime numquam quae quos tenetur unde?
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="splide__slide">
                                <div class="row d-none d-lg-flex px-4">
                                    <div class="col-12 px-3">
                                        <div class="card p-3 rounded-5 border-0" style="background-color: #6bdcdb">
                                            <div class="card-body">
                                                <div class="row">
                                                    <div class="col-4">
                                                        <img class="img w-100" src="images/partner.png" alt="">
                                                    </div>

                                                    <div class="col-8 d-flex align-items-center">

                                                        <div class="w-100 align-self-center">
                                                            <h6 class="text-white fw-bold h5 w-100 mb-0">Organization</h6>
                                                            <h6 class="text-white fw-bold h5 w-100">Country</h6>

                                                            <h6 class="text-white fw-bold h5 w-100 mb-0">Name Surname</h6>
                                                            <h6 class="text-white fw-bold h5 w-100">Profession</h6>
                                                        </div>

                                                    </div>
                                                </div>

                                                <div class="row">
                                                    <div class="col-12">
                                                        <p class="card-text text-white fw-bold h6 mt-2">
                                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Delectus doloremque, eligendi et expedita impedit maxime numquam quae quos tenetur unde?
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </section>
            </div>
        </div>
        <div class="row p-4"></div>
    </div>

    <div class="container-fluid mt-4">
        <div class="container px-xxl-5">
            <div class="row px-5">
                <h2 class="display-6 fw-bold mt-5 d-lg-none">PORTFOLIO</h2>
                <h2 class="display-5 fw-bold pb-2 pt-5 my-5 d-none d-lg-block">PORTFOLIO</h2>
            </div>
        </div>
    </div>

    <div class="container-fluid">
        <div class="row">
            <div class="col-12 p-0">
                <section id="splide1" class="splide" aria-label="Slide Container Example">
                    <div class="splide__track">
                        <ul class="splide__list">
                            <li class="splide__slide px-3">
                                <div class="splide__slide__container">
                                    <div class="portfolio-container">
                                        <div class="card border-0 text-bg-dark">
                                            <img src="/images/building.png" class="card-img" alt="...">
                                            <div class="card-img-overlay p-5 d-flex align-items-end">
                                                <div>
                                                    <h5 class="card-title h2 fw-bold">Residential Building</h5>
                                                    <p class="card-text h5 fw-bold">Scan to bim</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="overlay">
                                            <div class="row p-5 py-4 text-white">
                                                <div class="col-12">
                                                    <div class="row border-bottom border-3 border-white justify-content-between">
                                                        <div class="col-6">
                                                            <h4>LOD: 300</h4>
                                                            <h4>Time: 40h</h4>
                                                        </div>
                                                        <div class="col-6">
                                                            <h4>Precision: 15mm</h4>
                                                            <h4>Success: 100%</h4>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-5 d-flex justify-content-center align-items-center">
                                                            <img src="/images/proj.png" class="img w-75 image mt-3 mx-auto" alt="...">
                                                        </div>
                                                        <div class="col-7">
                                                            <h5 class="mt-3">
                                                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam libero obcaecati quidem vitae voluptatem. Aperiam asperiores dignissimos eius repellat? Alias, quo!
                                                            </h5>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </section>
            </div>
        </div>

        <div class="row mt-4">
            <div class="col-12 p-0">
                <section id="splide2" class="splide" aria-label="Slide Container Example">
                    <div class="splide__track">
                        <ul class="splide__list">
                            <li class="splide__slide px-3">
                                <div class="splide__slide__container">
                                    <div class="portfolio-container">
                                        <div class="card border-0 text-bg-dark">
                                            <img src="/images/building.png" class="card-img" alt="...">
                                            <div class="card-img-overlay p-5 d-flex align-items-end">
                                                <div>
                                                    <h5 class="card-title h2 fw-bold">Residential Building</h5>
                                                    <p class="card-text h5 fw-bold">Scan to bim</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="overlay">
                                            <div class="row p-5 py-4 text-white">
                                                <div class="col-12">
                                                    <div class="row border-bottom border-3 border-white justify-content-between">
                                                        <div class="col-6">
                                                            <h4>LOD: 300</h4>
                                                            <h4>Time: 40h</h4>
                                                        </div>
                                                        <div class="col-6">
                                                            <h4>Precision: 15mm</h4>
                                                            <h4>Success: 100%</h4>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-5 d-flex justify-content-center align-items-center">
                                                            <img src="/images/proj.png" class="img w-75 image mt-3 mx-auto" alt="...">
                                                        </div>
                                                        <div class="col-7">
                                                            <h5 class="mt-3">
                                                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam libero obcaecati quidem vitae voluptatem. Aperiam asperiores dignissimos eius repellat? Alias, quo!
                                                            </h5>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </section>
            </div>
        </div>

        <div class="row p-4"></div>
    </div>

    <div class="container-fluid mt-5" style="background-color: #d4fffb">
        <div class="container px-xxl-5">
            <div class="row px-5">
                <h2 class="display-6 fw-bold mt-5 d-lg-none">TEAM</h2>
                <h2 class="display-5 fw-bold pb-2 pt-5 my-5 d-none d-lg-block">TEAM</h2>
            </div>
        </div>
    </div>

    <div class="container-fluid">
        <div class="row p-5" style="background-color: #d4fffb">
            <div class="col-12">
                <section id="splide4" class="splide" aria-label="Slide Container Example">
                    <div class="splide__track">
                        <ul class="splide__list">
                            <li class="splide__slide px-1">
                                <div class="splide__slide__container">
                                    <div class="row px-5">
                                        <div class="col-12 px-0">
                                            <div class="card border-0 h-100" style="background-color: #d4fffb">
                                                <div class="text-center mt-3 p-1 ">
                                                    <img src="images/team.png" class="img-fluid w-75">
                                                </div>
                                                <div class="card-body pb-0 px-1 mx-auto">
                                                    <h2 class="fw-bold">Vitaly</h2>
                                                    <h2 class="fw-bold">Vinogradov</h2>
                                                    <h5 class="card-title text-dark">
                                                        Appintment, status
                                                    </h5>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </section>
            </div>
        </div>
    </div>

    <div class="container-fluid" style="background-color: #adbec1">
    <div class="container py-5 px-xxl-5">
        <div class="row p-5">
            <div class="col-6 pb-5 px-0">
                <h1 class="text-white fw-bold mt-5 display-5 w-100">
                    UNLOCK THE FULL POTENTIAL OF OUR SERVICES.
                </h1>
                <h2 class="text-white h1 fw-semibold mt-4">
                    <small>
                        Sign up for a meeting now a convenient time for you!
                    </small>
                </h2>
                <button class="btn btn-primary btn-lg border-0 rounded-4 w-50 mt-4" style="background-color: #6bdcdb" type="button">
                    <span class="fw-bold h4 d-block my-2">GO TO CALENDAR</span>
                </button>
            </div>
            <div class="col-6 pb-5 px-0">
                <img src="/images/mail.png" class="img-fluid mt-5" alt="mail_photo">
            </div>
        </div>
    </div>
</div>

@endsection
