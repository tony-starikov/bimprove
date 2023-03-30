@extends('master')

{{--@section('title', $page_info->__('title'))--}}

{{--@section('description', $page_info->description)--}}

@section('main')
    <div class="container-fluid d-none d-xxl-block" style="background: url(/images/{{ $page_info->pageItems->where('name', 'main_bg_image')->first()->value }}) no-repeat center center local; background-size: cover;">
        <div class="container p-5">
            <div class="row px-5 mt-2">
                <div class="col-12 mt-5 order-first">
                    <h1 class="d-none">Bimprove</h1>
                    <h2 class="text-white fw-bold mt-5 display-5">
                        {{ $page_info->pageItems->where('name', 'main_header')->first()->value }}
                        <span class="d-inline-block d-sm-none">M</span>
                        <span class="d-none d-sm-inline-block d-md-none">SM</span>
                        <span class="d-none d-md-inline-block d-lg-none">MD</span>
                        <span class="d-none d-lg-inline-block d-xl-none">LG</span>
                        <span class="d-none d-xl-inline-block d-xxl-none">XL</span>
                        <span class="d-none d-xxl-inline-block">XXL</span>
                    </h2>
                    <h2 class="text-white h1 fw-semibold">
                        <small>
                            {{ $page_info->pageItems->where('name', 'main_subheader')->first()->value }}
                        </small>
                    </h2>
                </div>
            </div>

            <div class="row px-5 mt-4">
                <div class="col-5 d-flex align-items-center">
                    <div>
                        @foreach($stars as $star)
                            @if($star->title_en !== 'Contact')
                                <div class="row my-2">
                                    <div class="col-2 ps-4 pe-2 d-flex align-items-center">
                                        <img src="/images/{{ $star->image_small }}" class="img-fluid w-75">
                                    </div>
                                    <div class="col-10 px-0 d-flex align-items-center">
                                        <h5 class="text-white fw-semibold m-0">
                                            <small class="text-uppercase">
                                                {{ $star->title_en }}
                                            </small>
                                        </h5>
                                    </div>
                                </div>
                            @endif
                        @endforeach
                    </div>
                </div>

                <div class="col-12 col-lg-7 px-0 order-md-4 order-lg-3 d-flex align-items-center">
                    <video
                        id="my-video"
                        class="video-js w-100"
                        height="100%"
                        width="100%"
                        controls
                        loop
                        muted
                        autoplay
                        preload="auto"
                        poster="MY_VIDEO_POSTER.jpg"
                        data-setup="{}"
                    >
                        <source src="/images/{{ $page_info->pageItems->where('name', 'video_mp4')->first()->value }}" type="video/mp4" />
                        <source src="/images/{{ $page_info->pageItems->where('name', 'video_webm')->first()->value }}" type="video/webm" />
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

            <div class="row px-5 pb-4 mt-5">
                <div class="col-12 col-md-5 col-lg-3 order-md-3 order-lg-4">

                    <button class="btn btn-primary shadow-none btn-lg border-0 rounded-4 w-100" style="background-color: #43aeb6" type="button" data-bs-toggle="modal" data-bs-target="#exampleModal2">
                        <span class="fw-bold h4 d-block my-2">CONTACT US</span>
                    </button>

                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid d-none d-xl-block d-xxl-none" style="background-color: #68d1d3">
        <div class="container p-5">
            <div class="row px-5">
                <div class="col-12 mt-5">
                    <h1 class="d-none">Bimprove</h1>
                    <h2 class="text-white fw-bold mt-5 h1">
                        {{ $page_info->pageItems->where('name', 'main_header')->first()->value }}
                        <span class="d-inline-block d-sm-none">M</span>
                        <span class="d-none d-sm-inline-block d-md-none">SM</span>
                        <span class="d-none d-md-inline-block d-lg-none">MD</span>
                        <span class="d-none d-lg-inline-block d-xl-none">LG</span>
                        <span class="d-none d-xl-inline-block d-xxl-none">XL</span>
                        <span class="d-none d-xxl-inline-block">XXL</span>
                    </h2>
                    <h2 class="text-white h2 fw-semibold" style="width: 80%">
                        <small>
                            {{ $page_info->pageItems->where('name', 'main_subheader')->first()->value }}
                        </small>
                    </h2>
                </div>
            </div>

            <div class="row px-5 mt-4">
                <div class="col-5 d-flex align-items-center">
                    <div>
                        @foreach($stars as $star)
                            @if($star->title_en !== 'Contact')
                                <div class="row mb-2">
                                    <div class="col-2 ps-4 pe-0 d-flex align-items-center">
                                        <img src="/images/{{ $star->image_small }}" class="img-fluid w-75">
                                    </div>
                                    <div class="col-10 px-0 d-flex align-items-center">
                                        <h6 class="text-white fw-semibold m-0">
                                            <small class="text-uppercase">
                                                {{ $star->title_en }}
                                            </small>
                                        </h6>
                                    </div>
                                </div>
                            @endif
                        @endforeach
                    </div>
                </div>

                <div class="col-12 col-lg-7 px-0 order-md-4 order-lg-3 d-flex align-items-center">
                    <video
                        id="my-video"
                        class="video-js w-100"
                        height="100%"
                        width="100%"
                        controls
                        loop
                        muted
                        autoplay
                        preload="auto"
                        poster="MY_VIDEO_POSTER.jpg"
                        data-setup="{}"
                    >
                        <source src="{{ $page_info->pageItems->where('name', 'video_mp4')->first()->value }}" type="video/mp4" />
                        <source src="{{ $page_info->pageItems->where('name', 'video_webm')->first()->value }}" type="video/webm" />
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

            <div class="row px-5 pb-4 mt-5">
                <div class="col-12 col-md-5 col-lg-3 order-md-3 order-lg-4">

                    <button class="btn btn-primary shadow-none btn-lg border-0 rounded-4 w-100" style="background-color: #43aeb6" type="button" data-bs-toggle="modal" data-bs-target="#exampleModal2">
                        <span class="fw-bold h5 d-block my-2">CONTACT US</span>
                    </button>

                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid d-none d-lg-block d-xl-none" style="background-color: #68d1d3">
        <div class="container p-5">
            <div class="row px-5">
                <div class="col-12 mt-3">
                    <h1 class="d-none">Bimprove</h1>
                    <h2 class="text-white fw-bold mt-5 h1">
                        {{ $page_info->pageItems->where('name', 'main_header') }}
                        <span class="d-inline-block d-sm-none">M</span>
                        <span class="d-none d-sm-inline-block d-md-none">SM</span>
                        <span class="d-none d-md-inline-block d-lg-none">MD</span>
                        <span class="d-none d-lg-inline-block d-xl-none">LG</span>
                        <span class="d-none d-xl-inline-block d-xxl-none">XL</span>
                        <span class="d-none d-xxl-inline-block">XXL</span>
                    </h2>
                    <h2 class="text-white h2 fw-semibold" style="width: 80%">
                        <small>
                            {{ $page_info->pageItems->where('name', 'main_header') }}
                        </small>
                    </h2>
                </div>
            </div>

            <div class="row px-5 mt-4">
                <div class="col-5 d-flex align-items-center">
                    <div>
                        <div class="row my-2">
                            <div class="col-3 ps-4 pe-0 d-flex align-items-center">
                                <i class="las la-2x la-comments p-1 rounded-circle me-1 text-white" style="background-color: #43aeb6"></i>
                            </div>
                            <div class="col-9 px-0 pe-2 d-flex align-items-center">
                                <h6 class="text-white fw-semibold m-0">
                                    <small>
                                        HIGHING QUALITY
                                    </small>
                                </h6>
                            </div>
                        </div>
                        <div class="row mb-2">
                            <div class="col-3 ps-4 pe-0 d-flex align-items-center">
                                <i class="las la-2x la-handshake p-1 rounded-circle me-1 text-white" style="background-color: #43aeb6"></i>
                            </div>
                            <div class="col-9 px-0 pe-2 d-flex align-items-center">
                                <h6 class="text-white fw-semibold m-0">
                                    <small>
                                        COMMUNICATION WITH PROJECT MANAGER 24/7
                                    </small>
                                </h6>
                            </div>
                        </div>
                        <div class="row mb-2">
                            <div class="col-3 ps-4 pe-0 d-flex align-items-center">
                                <i class="las la-2x la-edit p-1 rounded-circle me-1 text-white" style="background-color: #43aeb6"></i>
                            </div>
                            <div class="col-9 px-0 pe-2 d-flex align-items-center">
                                <h6 class="text-white fw-semibold m-0">
                                    <small>
                                        NON-STANDARD TASKS SOLUTIONS
                                    </small>
                                </h6>
                            </div>
                        </div>
                        <div class="row mb-2">
                            <div class="col-3 ps-4 pe-0 d-flex align-items-center">
                                <i class="las la-2x la-gem p-1 rounded-circle me-1 text-white" style="background-color: #43aeb6"></i>
                            </div>
                            <div class="col-9 px-0 pe-2 d-flex align-items-center">
                                <h6 class="text-white fw-semibold m-0">
                                    <small>
                                        QUICK PROJECT ADJUSTMENT BY THE COMMENTS
                                    </small>
                                </h6>
                            </div>
                        </div>
                        <div class="row mb-2">
                            <div class="col-3 ps-4 pe-0 d-flex align-items-center">
                                <i class="las la-2x la-coins p-1 rounded-circle me-1 text-white" style="background-color: #43aeb6"></i>
                            </div>
                            <div class="col-9 px-0 pe-2 d-flex align-items-center">
                                <h6 class="text-white fw-semibold m-0">
                                    <small>
                                        HELP IN WORK PROCESS ORGANIZATION
                                    </small>
                                </h6>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-lg-7 px-0 order-md-4 order-lg-3 d-flex align-items-center">
                    <video
                        id="my-video"
                        class="video-js w-100"
                        height="100%"
                        width="100%"
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

            <div class="row px-5 pb-4 mt-5">
                <div class="col-12 col-md-5 col-lg-3 order-md-3 order-lg-4">

                    <button class="btn btn-primary shadow-none btn-lg border-0 rounded-4 w-100" style="background-color: #43aeb6" type="button" data-bs-toggle="modal" data-bs-target="#exampleModal2">
                        <span class="fw-bold h5 d-block my-2">CONTACT US</span>
                    </button>

                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid d-none d-md-block d-lg-none" style="background-color: #68d1d3">
        <div class="container pb-5">
            <div class="row mt-5">
                <div class="col-12">
                    <h1 class="d-none">Bimprove</h1>
                    <h2 class="text-white fw-bold mt-5 h2">
                        THE INDIVIDUAL FIVE-STAR SERVICE:
                        <span class="d-inline-block d-sm-none">M</span>
                        <span class="d-none d-sm-inline-block d-md-none">SM</span>
                        <span class="d-none d-md-inline-block d-lg-none">MD</span>
                        <span class="d-none d-lg-inline-block d-xl-none">LG</span>
                        <span class="d-none d-xl-inline-block d-xxl-none">XL</span>
                        <span class="d-none d-xxl-inline-block">XXL</span>
                    </h2>
                    <h2 class="text-white h4 fw-semibold">
                        <small>
                            Unlock your AEC company's full potential with our customized BIM support, delivering a five-star service experience tailored specifically for you.
                        </small>
                    </h2>
                </div>
            </div>

            <div class="row mt-2">
                <div class="col-7">
                    <div class="row my-2">
                        <div class="col-1 d-flex align-items-center">
                            <i class="lar la-lg la-comments p-1 rounded-circle text-white" style="background-color: #43aeb6"></i>
                        </div>
                        <div class="col-11 d-flex align-items-center">
                            <h6 class="text-white fw-semibold m-0">
                                <small>
                                    HIGHING QUALITY
                                </small>
                            </h6>
                        </div>
                    </div>
                    <div class="row mb-2">
                        <div class="col-1 d-flex align-items-center">
                            <i class="las la-lg la-handshake p-1 rounded-circle me-1 text-white" style="background-color: #43aeb6"></i>
                        </div>
                        <div class="col-11 d-flex align-items-center">
                            <h6 class="text-white fw-semibold m-0">
                                <small>
                                    COMMUNICATION WITH PROJECT MANAGER 24/7
                                </small>
                            </h6>
                        </div>
                    </div>
                    <div class="row mb-2">
                        <div class="col-1 d-flex align-items-center">
                            <i class="las la-lg la-edit p-1 rounded-circle me-1 text-white" style="background-color: #43aeb6"></i>
                        </div>
                        <div class="col-11 d-flex align-items-center">
                            <h6 class="text-white fw-semibold m-0">
                                <small>
                                    NON-STANDARD TASKS SOLUTIONS
                                </small>
                            </h6>
                        </div>
                    </div>
                    <div class="row mb-2">
                        <div class="col-1 d-flex align-items-center">
                            <i class="las la-lg la-gem p-1 rounded-circle me-1 text-white" style="background-color: #43aeb6"></i>
                        </div>
                        <div class="col-11 d-flex align-items-center">
                            <h6 class="text-white fw-semibold m-0">
                                <small>
                                    QUICK PROJECT ADJUSTMENT BY THE COMMENTS
                                </small>
                            </h6>
                        </div>
                    </div>
                    <div class="row mb-2">
                        <div class="col-1 d-flex align-items-center">
                            <i class="las la-lg la-coins p-1 rounded-circle me-1 text-white" style="background-color: #43aeb6"></i>
                        </div>
                        <div class="col-11 d-flex align-items-center">
                            <h6 class="text-white fw-semibold m-0">
                                <small>
                                    HELP IN WORK PROCESS ORGANIZATION
                                </small>
                            </h6>
                        </div>
                    </div>
                </div>

                <div class="col-5 d-flex align-items-center">
                    <button class="btn btn-primary shadow-none btn-lg border-0 rounded-4 w-100" style="background-color: #43aeb6" type="button" data-bs-toggle="modal" data-bs-target="#exampleModal2">
                        <span class="fw-bold h5 d-block my-2">CONTACT US</span>
                    </button>
                </div>
            </div>

            <div class="row mt-3">

                <div class="col-12 d-flex">
                    <video
                        id="my-video"
                        class="video-js w-100"
                        height="100%"
                        width="100%"
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
        </div>
    </div>

    <div class="container-fluid d-none d-sm-block d-md-none" style="background-color: #68d1d3">
        <div class="container pb-5">
            <div class="row mt-5">
                <div class="col-12">
                    <h1 class="d-none">Bimprove</h1>
                    <h2 class="text-white fw-bold mt-5 h2">
                        THE INDIVIDUAL FIVE-STAR SERVICE:
                        <span class="d-inline-block d-sm-none">M</span>
                        <span class="d-none d-sm-inline-block d-md-none">SM</span>
                        <span class="d-none d-md-inline-block d-lg-none">MD</span>
                        <span class="d-none d-lg-inline-block d-xl-none">LG</span>
                        <span class="d-none d-xl-inline-block d-xxl-none">XL</span>
                        <span class="d-none d-xxl-inline-block">XXL</span>
                    </h2>
                    <h2 class="text-white h4 fw-semibold">
                        <small>
                            Unlock your AEC company's full potential with our customized BIM support, delivering a five-star service experience tailored specifically for you.
                        </small>
                    </h2>
                </div>
            </div>

            <div class="row mt-2">
                <div class="col-7">
                    <div class="row my-2">
                        <div class="col-1 d-flex align-items-center">
                            <i class="lar la-lg la-comments p-1 rounded-circle text-white" style="background-color: #43aeb6"></i>
                        </div>
                        <div class="col-11 d-flex align-items-center">
                            <h6 class="text-white ps-3 fw-semibold m-0">
                                <small>
                                    HIGHING QUALITY
                                </small>
                            </h6>
                        </div>
                    </div>
                    <div class="row mb-2">
                        <div class="col-1 d-flex align-items-center">
                            <i class="las la-lg la-handshake p-1 rounded-circle me-1 text-white" style="background-color: #43aeb6"></i>
                        </div>
                        <div class="col-11 d-flex align-items-center">
                            <h6 class="text-white ps-3 fw-semibold m-0">
                                <small>
                                    COMMUNICATION WITH PROJECT MANAGER 24/7
                                </small>
                            </h6>
                        </div>
                    </div>
                    <div class="row mb-2">
                        <div class="col-1 d-flex align-items-center">
                            <i class="las la-lg la-edit p-1 rounded-circle me-1 text-white" style="background-color: #43aeb6"></i>
                        </div>
                        <div class="col-11 d-flex align-items-center">
                            <h6 class="text-white ps-3 fw-semibold m-0">
                                <small>
                                    NON-STANDARD TASKS SOLUTIONS
                                </small>
                            </h6>
                        </div>
                    </div>
                    <div class="row mb-2">
                        <div class="col-1 d-flex align-items-center">
                            <i class="las la-lg la-gem p-1 rounded-circle me-1 text-white" style="background-color: #43aeb6"></i>
                        </div>
                        <div class="col-11 d-flex align-items-center">
                            <h6 class="text-white ps-3 fw-semibold m-0">
                                <small>
                                    QUICK PROJECT ADJUSTMENT BY THE COMMENTS
                                </small>
                            </h6>
                        </div>
                    </div>
                    <div class="row mb-2">
                        <div class="col-1 d-flex align-items-center">
                            <i class="las la-lg la-coins p-1 rounded-circle me-1 text-white" style="background-color: #43aeb6"></i>
                        </div>
                        <div class="col-11 d-flex align-items-center">
                            <h6 class="text-white ps-3 fw-semibold m-0">
                                <small>
                                    HELP IN WORK PROCESS ORGANIZATION
                                </small>
                            </h6>
                        </div>
                    </div>
                </div>

                <div class="col-5 d-flex align-items-center">
                    <button class="btn btn-primary shadow-none btn-lg border-0 rounded-4 w-100" style="background-color: #43aeb6" type="button" data-bs-toggle="modal" data-bs-target="#exampleModal2">
                        <span class="fw-bold h5 d-block my-2">CONTACT US</span>
                    </button>
                </div>
            </div>

            <div class="row mt-3">

                <div class="col-12 d-flex">
                    <video
                        id="my-video"
                        class="video-js w-100"
                        height="100%"
                        width="100%"
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
        </div>
    </div>

    <div class="container-fluid d-sm-none" style="background-color: #68d1d3">
        <div class="container pb-4">
            <div class="row mt-5">
                <div class="col-12">
                    <h1 class="d-none">Bimprove</h1>
                    <h2 class="text-white fw-bold mt-5 h2">
                        THE INDIVIDUAL FIVE-STAR SERVICE:
                        <span class="d-inline-block d-sm-none">M</span>
                        <span class="d-none d-sm-inline-block d-md-none">SM</span>
                        <span class="d-none d-md-inline-block d-lg-none">MD</span>
                        <span class="d-none d-lg-inline-block d-xl-none">LG</span>
                        <span class="d-none d-xl-inline-block d-xxl-none">XL</span>
                        <span class="d-none d-xxl-inline-block">XXL</span>
                    </h2>
                    <h2 class="text-white h4 fw-semibold">
                        <small>
                            Unlock your AEC company's full potential with our customized BIM support, delivering a five-star service experience tailored specifically for you.
                        </small>
                    </h2>
                </div>
            </div>

            <div class="row mt-2">
                <div class="col-12">
                    <div class="row my-2">
                        <div class="col-1 d-flex align-items-center">
                            <i class="lar la-lg la-comments p-1 rounded-circle text-white" style="background-color: #43aeb6"></i>
                        </div>
                        <div class="col-11 d-flex align-items-center">
                            <h6 class="text-white ps-1 fw-semibold m-0">
                                <small>
                                    HIGHING QUALITY
                                </small>
                            </h6>
                        </div>
                    </div>
                    <div class="row mb-2">
                        <div class="col-1 d-flex align-items-center">
                            <i class="las la-lg la-handshake p-1 rounded-circle me-1 text-white" style="background-color: #43aeb6"></i>
                        </div>
                        <div class="col-11 d-flex align-items-center">
                            <h6 class="text-white ps-1 fw-semibold m-0">
                                <small>
                                    COMMUNICATION WITH PROJECT MANAGER 24/7
                                </small>
                            </h6>
                        </div>
                    </div>
                    <div class="row mb-2">
                        <div class="col-1 d-flex align-items-center">
                            <i class="las la-lg la-edit p-1 rounded-circle me-1 text-white" style="background-color: #43aeb6"></i>
                        </div>
                        <div class="col-11 d-flex align-items-center">
                            <h6 class="text-white ps-1 fw-semibold m-0">
                                <small>
                                    NON-STANDARD TASKS SOLUTIONS
                                </small>
                            </h6>
                        </div>
                    </div>
                    <div class="row mb-2">
                        <div class="col-1 d-flex align-items-center">
                            <i class="las la-lg la-gem p-1 rounded-circle me-1 text-white" style="background-color: #43aeb6"></i>
                        </div>
                        <div class="col-11 d-flex align-items-center">
                            <h6 class="text-white ps-1 fw-semibold m-0">
                                <small>
                                    QUICK PROJECT ADJUSTMENT BY THE COMMENTS
                                </small>
                            </h6>
                        </div>
                    </div>
                    <div class="row mb-2">
                        <div class="col-1 d-flex align-items-center">
                            <i class="las la-lg la-coins p-1 rounded-circle me-1 text-white" style="background-color: #43aeb6"></i>
                        </div>
                        <div class="col-11 d-flex align-items-center">
                            <h6 class="text-white ps-1 fw-semibold m-0">
                                <small>
                                    HELP IN WORK PROCESS ORGANIZATION
                                </small>
                            </h6>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row mt-3">

                <div class="col-12 d-flex">
                    <video
                        id="my-video"
                        class="video-js w-100"
                        height="100%"
                        width="100%"
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

            <div class="row mt-4">
                <div class="col-12 d-flex align-items-center">
                    <button class="btn btn-primary shadow-none btn-lg border-0 rounded-4 w-100" style="background-color: #43aeb6" type="button" data-bs-toggle="modal" data-bs-target="#exampleModal2">
                        <span class="fw-bold h5 d-block my-2">CONTACT US</span>
                    </button>
                </div>
            </div>
        </div>
    </div>



    <div class="container-fluid d-none d-xxl-block" style="background-image: url('/images/main_page/about_bg.png'); background-position: center; background-repeat: no-repeat; background-attachment: local; background-size: cover;">
        <div class="container p-5">
            <div class="row p-5">
                <div class="col-12">
                    <h1 class="fw-bold display-5 w-75">
                        {{ $page_info->pageItems->where('name', 'about_header')->first()->value }}
                    </h1>
                </div>
                <div class="row pe-0">
                    <div class="col-5 mt-4">
                        <h2 class="h2 lh-1 fw-semibold">
                            <small>
                                {{ $page_info->pageItems->where('name', 'about_subheader')->first()->value }}
                            </small>
                        </h2>
                        <h2 class="h5 mt-3 fw-normal" style="text-align: justify">
                            <small>
                                {{ $page_info->pageItems->where('name', 'about_text')->first()->value }}
                            </small>
                        </h2>
                    </div>
                    <div class="col-7 mt-4 ps-4 pe-0">
                        <img src="/images/{{ $page_info->pageItems->where('name', 'about_image')->first()->value }}" class="img-fluid w-100" alt="team_photo">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid d-none d-xl-block d-xxl-none" style="background-color: #d4fffc">
        <div class="container p-5">
            <div class="row p-5">
                <div class="col-12">
                    <h1 class="fw-bold h1 w-75">
                        DISCOVER THE COMPREHENSIVE SERVICES OF BIMPROVE LLC
                    </h1>
                </div>
                <div class="row pe-0">
                    <div class="col-5 mt-4">
                        <h2 class="h3 lh-1 fw-semibold">
                            Our goal is to provide a personalized, 5-star level of service to each of our clients.
                        </h2>
                        <h2 class="h6 mt-3 fw-normal" style="text-align: justify">
                            In just 7 years, BIM prove LLC has grown from a single Scan to BIM service to a company with 6 independent departments, each dedicated to advancing in its respective field. Each department is focused on growth, but all are aligned in our commitment to providing exceptional, personalized service to our clients. We partner with owners, general contractors, and design firms to streamline the BIM process for projects of all sizes and industries, from small commercial to large industrial.
                        </h2>
                    </div>
                    <div class="col-7 mt-4 ps-4 pe-0">
                        <img src="/images/team_photo.png" class="img-fluid w-100" alt="team_photo">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid d-none d-lg-block d-xl-none" style="background-color: #d4fffc">
        <div class="container p-5">
            <div class="row px-5 py-4">
                <div class="col-12">
                    <h2 class="fw-bold w-75 h1">
                        DISCOVER THE COMPREHENSIVE SERVICES OF BIMPROVE LLC
                    </h2>
                </div>
                <div class="row">
                    <div class="col-12 d-flex align-items-center">
                        <h2 class="h4 w-75 fw-semibold">
                            Our goal is to provide a personalized, 5-star level of service to each of our clients.
                        </h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <h2 class="h5 mt-3 fw-normal" style="text-align: justify">
                            In just 7 years, BIM prove LLC has grown from a single Scan to BIM service to a company with 6 independent departments, each dedicated to advancing in its respective field. Each department is focused on growth, but all are aligned in our commitment to providing exceptional, personalized service to our clients. We partner with owners, general contractors, and design firms to streamline the BIM process for projects of all sizes and industries, from small commercial to large industrial.
                        </h2>
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-12">
                        <img src="/images/team_lg.png" class="img-fluid w-100" alt="team_photo">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid d-none d-md-block d-lg-none" style="background-color: #d4fffc">
        <div class="container py-5">
            <div class="row">
                <div class="col-12">
                    <h2 class="fw-bold h1">
                        DISCOVER THE COMPREHENSIVE SERVICES OF BIMPROVE LLC
                    </h2>
                </div>
                <div class="row">
                    <div class="col-12 d-flex align-items-center">
                        <h2 class="h4 fw-semibold">
                            Our goal is to provide a personalized, 5-star level of service to each of our clients.
                        </h2>
                    </div>
                </div>
                <div class="row mt-2">
                    <div class="col-12">
                        <h2 class="h6 fw-normal" style="text-align: justify">
                            In just 7 years, BIM prove LLC has grown from a single Scan to BIM service to a company with 6 independent departments, each dedicated to advancing in its respective field. Each department is focused on growth, but all are aligned in our commitment to providing exceptional, personalized service to our clients. We partner with owners, general contractors, and design firms to streamline the BIM process for projects of all sizes and industries, from small commercial to large industrial.
                        </h2>
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-12">
                        <img src="/images/team_lg.png" class="img-fluid w-100" alt="team_photo">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid d-md-none" style="background-color: #d4fffc">
        <div class="container py-5">
            <div class="row">
                <div class="col-12">
                    <h2 class="fw-bold h2">
                        DISCOVER THE COMPREHENSIVE SERVICES OF BIMPROVE LLC
                    </h2>
                </div>
                <div class="row">
                    <div class="col-12 d-flex align-items-center">
                        <h2 class="h4 fw-semibold">
                            Our goal is to provide a personalized, 5-star level of service to each of our clients.
                        </h2>
                    </div>
                </div>
                <div class="row mt-2">
                    <div class="col-12">
                        <h2 class="h6 fw-normal" style="text-align: justify">
                            In just 7 years, BIM prove LLC has grown from a single Scan to BIM service to a company with 6 independent departments, each dedicated to advancing in its respective field. Each department is focused on growth, but all are aligned in our commitment to providing exceptional, personalized service to our clients. We partner with owners, general contractors, and design firms to streamline the BIM process for projects of all sizes and industries, from small commercial to large industrial.
                        </h2>
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-12">
                        <img src="/images/team_lg.png" class="img-fluid w-100" alt="team_photo">
                    </div>
                </div>
            </div>
        </div>
    </div>




    <div class="container-fluid d-none d-xxl-block">
        <div class="container p-5">
            <div class="row p-5">
                <h2 class="display-5 fw-bold pb-0">
                    {{ $page_info->pageItems->where('name', 'services_header')->first()->value }}
                </h2>
            </div>
            <div class="row px-5 pb-5">

                @foreach($services as $service)
                    <div class="col-12 col-sm-6 col-lg-4 my-3">
                        <div class="card p-0 h-100" style="border: 4px solid #6bdcdb; border-radius: 0;">
                            <div class="service-container h-100">
                                <div class="container-fluid" style="height: 50%;">
                                    <div class="row">
                                        <div class="col-7 px-0 d-flex align-items-center">
                                            <h5 class="fw-bold ps-3" style="position: relative; bottom: 25px;">
                                                <small>
                                                    {{ $service->title_en }}
                                                </small>
                                            </h5>
                                        </div>
                                        <div class="col-5 p-0 ps-2">
                                            @if($service->video_url)
                                                <a href="#{{ $service->slug }}" class="m-0 p-0" data-bs-toggle="modal" data-bs-target="#{{ $service->slug }}">
                                                    <img src="/images/{{ $service->image }}" class="img-fluid w-100 bg-transparent position-relative" style="z-index: 10;position: relative; bottom: 30px; left: 4px">
                                                </a>
                                            @else
                                                <img src="/images/{{ $service->image }}" class="img-fluid w-100 bg-transparent position-relative" style="position: relative; bottom: 30px; left: 4px">
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer p-3 border-0 d-flex align-items-center bg-transparent" style="height: 50%;">
                                    <h6 class="text-secondary">
                                        {{ $service->description_en }}
                                    </h6>
                                </div>
                                <div class="service-overlay">
                                    <div class="d-flex align-self-center h-100 px-5" style="background-color: #6de1df">
                                        <a target="_blank" class="text-decoration-none w-100 align-self-center" href="{{ route('downloadService', [$service->slug]) }}">
                                            <button class="btn btn-primary btn-lg border-0 shadow-none rounded-4 w-100" style="background-color: #43aeb6" type="button">
                                                <span class="fw-bold h4 d-block my-2">MORE INFO</span>
                                            </button>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach

            </div>
        </div>
    </div>

    <div class="container-fluid d-none d-xl-block d-xxl-none">
        <div class="container p-5">
            <div class="row p-5">
                <h2 class="h1 fw-bold pb-0">SERVICES</h2>
            </div>
            <div class="row px-5 pb-5">

                @foreach($services as $service)
                    <div class="col-12 col-sm-6 col-lg-4 my-3">
                        <div class="card p-0 h-100" style="border: 4px solid #6bdcdb; border-radius: 0;">
                            <div class="service-container h-100">
                                <div class="container-fluid" style="height: 50%;">
                                    <div class="row">
                                        <div class="col-7 px-0 d-flex align-items-center">
                                            <h5 class="fw-bold ps-2" style="position: relative; bottom: 20px;">
                                                <small>
                                                    {{ $service->title_en }}
                                                </small>
                                            </h5>
                                        </div>
                                        <div class="col-5 p-0 ps-2">
                                            @if($service->video_url)
                                                <a href="#{{ $service->slug }}" class="m-0 p-0" data-bs-toggle="modal" data-bs-target="#{{ $service->slug }}">
                                                    <img src="/images/{{ $service->image }}" class="img-fluid w-100 bg-transparent position-relative" style="position: relative; bottom: 20px; left: 4px">
                                                </a>
                                            @else
                                                <img src="/images/{{ $service->image }}" class="img-fluid w-100 bg-transparent position-relative" style="position: relative; bottom: 20px; left: 4px">
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer px-2 py-3 border-0 d-flex align-items-center bg-transparent"  style="height: 50%;">
                                    <h6 class="text-secondary">
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

    <div class="container-fluid d-none d-lg-block d-xl-none">
        <div class="container p-5">
            <div class="row p-5 pt-4">
                <h2 class="h1 fw-bold pb-0">SERVICES</h2>
            </div>
            <div class="row px-5 pb-4">

                @foreach($services as $service)
                    <div class="col-6 my-3">
                        <div class="card p-0 h-100" style="border: 4px solid #6bdcdb; border-radius: 0;">
                            <div class="service-container h-100">
                                <div class="container-fluid" style="height: 50%;">
                                    <div class="row">
                                        <div class="col-7 px-0 d-flex align-items-center">
                                            <h5 class="fw-bold ps-3" style="position: relative; bottom: 30px;">
                                                <small>
                                                    {{ $service->title_en }}
                                                </small>
                                            </h5>
                                        </div>
                                        <div class="col-5 p-0 ps-2">
                                            @if($service->video_url)
                                                <a href="#{{ $service->slug }}" class="m-0 p-0" data-bs-toggle="modal" data-bs-target="#{{ $service->slug }}">
                                                    <img src="/images/{{ $service->image }}" class="img-fluid w-100 bg-transparent position-relative" style="position: relative; bottom: 33px; left: 4px">
                                                </a>
                                            @else
                                                <img src="/images/{{ $service->image }}" class="img-fluid w-100 bg-transparent position-relative" style="position: relative; bottom: 33px; left: 4px">
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer px-3 py-3 border-0 d-flex align-items-center bg-transparent"  style="height: 50%;">
                                    <h6 class="text-secondary">
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

    <div class="container-fluid d-none d-md-block d-lg-none">
        <div class="container py-5">
            <div class="row">
                <h2 class="h1 fw-bold pb-0">SERVICES</h2>
            </div>
            <div class="row">

                @foreach($services as $service)
                    <div class="col-6 my-3">
                        <div class="card p-0 h-100" style="border: 4px solid #6bdcdb; border-radius: 0;">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-7 px-0 d-flex align-items-center">
                                        <h5 class="fw-bold ps-3" style="position: relative; bottom: 30px;">
                                            <small>
                                                {{ $service->title_en }}
                                            </small>
                                        </h5>
                                    </div>
                                    <div class="col-5 p-0 ps-2">
                                        @if($service->video_url)
                                            <a href="#{{ $service->slug }}" class="m-0 p-0" data-bs-toggle="modal" data-bs-target="#{{ $service->slug }}">
                                                <img src="/images/{{ $service->image }}" class="img-fluid w-100 bg-transparent position-relative" style="position: relative; bottom: 30px; left: 8px">
                                            </a>
                                        @else
                                            <img src="/images/{{ $service->image }}" class="img-fluid w-100 bg-transparent position-relative" style="position: relative; bottom: 30px; left: 8px">
                                        @endif
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-12">
                                        <h6 class="text-secondary">
                                            {{ $service->description_en }}
                                        </h6>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer border-0 bg-transparent" style="background-color: #6de1df">
                                <button class="btn btn-primary btn-lg border-0 rounded-4 w-100 align-self-center" style="background-color: #43aeb6" type="button">
                                    <span class="fw-bold h5 d-block my-2">MORE INFO</span>
                                </button>
                            </div>
                        </div>
                    </div>
                @endforeach

            </div>
        </div>
    </div>

    <div class="container-fluid d-none d-sm-block d-md-none">
        <div class="container py-5">
            <div class="row">
                <h2 class="h1 fw-bold pb-0">SERVICES</h2>
            </div>
            <div class="row">

                @foreach($services as $service)
                    <div class="col-6 my-3">
                        <div class="card p-0 h-100" style="border: 4px solid #6bdcdb; border-radius: 0;">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-7 px-0 d-flex align-items-center">
                                        <h5 class="fw-bold ps-3" style="position: relative; bottom: 30px;">
                                            <small>
                                                {{ $service->title_en }}
                                            </small>
                                        </h5>
                                    </div>
                                    <div class="col-5 p-0 ps-2">
                                        @if($service->video_url)
                                            <a href="#{{ $service->slug }}" class="m-0 p-0" data-bs-toggle="modal" data-bs-target="#{{ $service->slug }}">
                                                <img src="/images/{{ $service->image }}" class="img-fluid w-100 bg-transparent position-relative" style="position: relative; bottom: 30px; left: 8px">
                                            </a>
                                        @else
                                            <img src="/images/{{ $service->image }}" class="img-fluid w-100 bg-transparent position-relative" style="position: relative; bottom: 30px; left: 8px">
                                        @endif
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-12">
                                        <h6 class="text-secondary">
                                            {{ $service->description_en }}
                                        </h6>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer border-0 bg-transparent" style="background-color: #6de1df">
                                <button class="btn btn-primary btn-lg border-0 rounded-4 w-100 align-self-center" style="background-color: #43aeb6" type="button">
                                    <span class="fw-bold h5 d-block my-2">MORE INFO</span>
                                </button>
                            </div>
                        </div>
                    </div>
                @endforeach

            </div>
        </div>
    </div>

    <div class="container-fluid d-sm-none">
        <div class="container py-5">
            <div class="row">
                <h2 class="h1 fw-bold pb-0">SERVICES</h2>
            </div>
            <div class="row">

                @foreach($services as $service)
                    <div class="col-12 my-3">
                        <div class="card p-0 h-100" style="border: 4px solid #6bdcdb; border-radius: 0;">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-7 px-0 d-flex align-items-center">
                                        <h4 class="fw-bold ps-3" style="position: relative; bottom: 30px;">
                                            <small>
                                                {{ $service->title_en }}
                                            </small>
                                        </h4>
                                    </div>
                                    <div class="col-5 p-0 ps-2">
                                        @if($service->video_url)
                                            <a href="#{{ $service->slug }}" class="m-0 p-0" data-bs-toggle="modal" data-bs-target="#{{ $service->slug }}">
                                                <img src="/images/{{ $service->image }}" class="img-fluid w-100 bg-transparent position-relative" style="position: relative; bottom: 30px; left: 8px">
                                            </a>
                                        @else
                                            <img src="/images/{{ $service->image }}" class="img-fluid w-100 bg-transparent position-relative" style="position: relative; bottom: 30px; left: 8px">
                                        @endif
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-12">
                                        <h6 class="text-secondary">
                                            {{ $service->description_en }}
                                        </h6>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer border-0 bg-transparent" style="background-color: #6de1df">
                                <button class="btn btn-primary btn-lg border-0 rounded-4 w-100 align-self-center" style="background-color: #43aeb6" type="button">
                                    <span class="fw-bold h5 d-block my-2">MORE INFO</span>
                                </button>
                            </div>
                        </div>
                    </div>
                @endforeach

            </div>
        </div>
    </div>




    <div class="d-none d-xxl-block">
        <div class="container-fluid">
            <div class="container p-5 py-0">
                <div class="row p-5 pt-0">
                    <h2 class="display-5 fw-bold pb-0">
                        {{ $page_info->pageItems->where('name', 'achievements_header')->first()->value }}
                    </h2>
                </div>
            </div>
        </div>
        <div class="container-fluid" style="background-image: url('/images/bg_achiv_1.png'); background-position: center; background-repeat: no-repeat; background-attachment: local;">
            <div class="container px-5">
                <div class="row px-5 pb-0">
                    @foreach($achievements as $achievement)
                        @if($achievement->id < 4)
                            <div class="col-12 col-sm-3 col-md-4 text-center px-5 pb-5">
                                <img src="images/{{ $achievement->image }}" class="img-fluid mb-2 d-md-none bg-transparent">
                                <img src="images/{{ $achievement->image }}" class="img-fluid w-75 bg-transparent">
                                <h6 class="fw-bold display-5 m-0">{{ $achievement->title_en }}</h6>
                                <h6 class="card-title text-dark fw-bold small d-md-none">
                                    {{ $achievement->subtitle_en }}
                                </h6>
                                <h6 class="card-title text-dark fw-bold d-none d-md-block">
                                    {{ $achievement->subtitle_en }}
                                </h6>
                            </div>
                        @endif
                    @endforeach
                </div>
            </div>
        </div>

        <div class="container-fluid" style="background-image: url('/images/bg_achiv_1.png'); background-position: center; background-repeat: no-repeat; background-attachment: local;">
            <div class="container px-5">
                <div class="row px-5 pb-0">
                    @foreach($achievements as $achievement)
                        @if($achievement->id > 3)
                            <div class="col-12 col-sm-3 col-md-4 text-center px-5 pb-5">
                                <img src="images/{{ $achievement->image }}" class="img-fluid mb-2 d-md-none">
                                <img src="images/{{ $achievement->image }}" class="img-fluid w-75">
                                <h6 class="fw-bold display-5 m-0">{{ $achievement->title_en }}</h6>
                                <h6 class="card-title text-dark fw-bold small d-md-none">
                                    {{ $achievement->subtitle_en }}
                                </h6>
                                <h6 class="card-title text-dark fw-bold d-none d-md-block">
                                    {{ $achievement->subtitle_en }}
                                </h6>
                            </div>
                        @endif
                    @endforeach
                </div>
            </div>
        </div>
    </div>

    <div class="d-none d-xl-block d-xxl-none">
        <div class="container-fluid">
            <div class="container p-5 py-0">
                <div class="row p-5 pt-0">
                    <h2 class="h1 fw-bold pb-0">ACHIEVEMENTS</h2>
                </div>
            </div>
        </div>
        <div class="container-fluid" style="background-image: url('/images/bg_ac.png'); background-position: center;">
            <div class="container px-5">
                <div class="row px-5 pb-0">

                    @foreach($achievements as $achievement)
                        @if($achievement->id > 3) @break @endif
                        <div class="col-12 col-sm-3 col-md-4 text-center px-5 pb-5">
                            <img src="/images/{{ $achievement->image }}" class="img-fluid mb-2 d-md-none">
                            <img src="/images/{{ $achievement->image }}" class="img-fluid w-75 d-none mb-3 mt-0 d-md-block mx-auto">
                            <h6 class="fw-bold display-5 m-0">{{ $achievement->title_en }}</h6>
                            <h6 class="card-title text-dark fw-bold small d-md-none">
                                {{ $achievement->subtitle_en }}
                            </h6>
                            <h6 class="card-title text-dark fw-bold d-none d-md-block">
                                {{ $achievement->subtitle_en }}
                            </h6>
                        </div>
                    @endforeach

                </div>

            </div>
        </div>
        <div class="container-fluid" style="background-image: url('/images/bg_ac.png'); background-position: center;">
            <div class="container px-5">
                <div class="row px-5 pb-0">

                    @foreach($achievements as $achievement)
                        @if($achievement->id <= 3) @continue @endif
                        <div class="col-12 col-sm-3 col-md-4 text-center px-5 pb-5">
                            <img src="/images/{{ $achievement->image }}" class="img-fluid mb-2 d-md-none">
                            <img src="/images/{{ $achievement->image }}" class="img-fluid w-75 d-none mb-3 mt-0 d-md-block mx-auto">
                            <h6 class="fw-bold display-5 m-0">{{ $achievement->title_en }}</h6>
                            <h6 class="card-title text-dark fw-bold small d-md-none">
                                {{ $achievement->subtitle_en }}
                            </h6>
                            <h6 class="card-title text-dark fw-bold d-none d-md-block">
                                {{ $achievement->subtitle_en }}
                            </h6>
                        </div>
                    @endforeach

                </div>

            </div>
        </div>
    </div>

    <div class="d-none d-lg-block d-xl-none">
        <div class="container-fluid">
            <div class="container p-5 py-0">
                <div class="row p-5 pt-0">
                    <h2 class="h1 fw-bold pb-0">ACHIEVEMENTS</h2>
                </div>
            </div>
        </div>
        <div class="container-fluid" style="background-image: url('/images/bg_ac.png'); background-position: center;">
            <div class="container px-5">
                <div class="row px-5 pb-0">

                    @foreach($achievements as $achievement)
                        @if($achievement->id > 3) @break @endif
                        <div class="col-12 col-sm-3 col-md-4 text-center px-5 pb-5">
                            <img src="images/{{ $achievement->image }}" class="img-fluid mb-2 d-md-none">
                            <img src="images/{{ $achievement->image }}" class="img-fluid w-75 d-none mb-3 mt-0 d-md-block mx-auto">
                            <h6 class="fw-bold display-5 m-0">{{ $achievement->title_en }}</h6>
                            <h6 class="card-title text-dark fw-bold small d-md-none">
                                {{ $achievement->subtitle_en }}
                            </h6>
                            <h6 class="card-title text-dark fw-bold d-none d-md-block">
                                {{ $achievement->subtitle_en }}
                            </h6>
                        </div>
                    @endforeach

                </div>

            </div>
        </div>
        <div class="container-fluid" style="background-image: url('/images/bg_ac.png'); background-position: center;">
            <div class="container px-5">
                <div class="row px-5 pb-0">

                    @foreach($achievements as $achievement)
                        @if($achievement->id <= 3) @continue @endif
                        <div class="col-12 col-sm-3 col-md-4 text-center px-5 pb-5">
                            <img src="images/{{ $achievement->image }}" class="img-fluid mb-2 d-md-none">
                            <img src="images/{{ $achievement->image }}" class="img-fluid w-75 d-none mb-3 mt-0 d-md-block mx-auto">
                            <h6 class="fw-bold display-5 m-0">{{ $achievement->title_en }}</h6>
                            <h6 class="card-title text-dark fw-bold small d-md-none">
                                {{ $achievement->subtitle_en }}
                            </h6>
                            <h6 class="card-title text-dark fw-bold d-none d-md-block">
                                {{ $achievement->subtitle_en }}
                            </h6>
                        </div>
                    @endforeach

                </div>

            </div>
        </div>
    </div>

    <div class="d-none d-md-block d-lg-none">
        <div class="container-fluid">
            <div class="container pt-5 pb-0">
                <div class="row">
                    <h2 class="h1 fw-bold pb-0">ACHIEVEMENTS</h2>
                </div>
            </div>
        </div>
        <div class="container-fluid" style="background-image: url('/images/bg_ac.png'); background-position: center;">
            <div class="container">
                <div class="row">

                    @foreach($achievements as $achievement)
                        @if($achievement->id > 3) @break @endif
                        <div class="col-4 text-center px-5">
                            <img src="images/{{ $achievement->image }}" class="img-fluid w-100 d-none mb-3 mt-0 d-md-block mx-auto">
                            <h6 class="fw-bold display-5 m-0">{{ $achievement->title_en }}</h6>
                            <h6 class="card-title text-dark fw-bold small d-md-none">
                                {{ $achievement->subtitle_en }}
                            </h6>
                            <h6 class="card-title text-dark fw-bold d-none d-md-block">
                                {{ $achievement->subtitle_en }}
                            </h6>
                        </div>
                    @endforeach

                </div>

            </div>
        </div>
        <div class="container-fluid mt-4" style="background-image: url('/images/bg_ac.png'); background-position: center;">
            <div class="container">
                <div class="row">

                    @foreach($achievements as $achievement)
                        @if($achievement->id <= 3) @continue @endif
                        <div class="col-4 text-center px-5">
                            <img src="images/{{ $achievement->image }}" class="img-fluid w-100 d-none mb-3 mt-0 d-md-block mx-auto">
                            <h6 class="fw-bold display-5 m-0">{{ $achievement->title_en }}</h6>
                            <h6 class="card-title text-dark fw-bold small d-md-none">
                                {{ $achievement->subtitle_en }}
                            </h6>
                            <h6 class="card-title text-dark fw-bold d-none d-md-block">
                                {{ $achievement->subtitle_en }}
                            </h6>
                        </div>
                    @endforeach

                </div>

            </div>
        </div>
    </div>

    <div class="d-none d-sm-block d-md-none">
        <div class="container-fluid">
            <div class="container pt-5 pb-0">
                <div class="row">
                    <h2 class="h1 fw-bold pb-0">ACHIEVEMENTS</h2>
                </div>
            </div>
        </div>
        <div class="container-fluid" style="background-image: url('/images/bg_ac.png'); background-position: center;">
            <div class="container">
                <div class="row">

                    @foreach($achievements as $achievement)
                        @if($achievement->id > 3) @break @endif
                            <div class="col-4 text-center px-4">
                                <img src="images/{{ $achievement->image }}" class="img-fluid w-100 mb-2 mt-0">
                                <h6 class="fw-bold h1 m-0">{{ $achievement->title_en }}</h6>
                                <h6 class="card-title text-dark fw-bold d-md-none">
                                    <small>
                                        {{ $achievement->subtitle_en }}
                                    </small>
                                </h6>
                            </div>
                    @endforeach

                </div>

            </div>
        </div>
        <div class="container-fluid mt-4" style="background-image: url('/images/bg_ac.png'); background-position: center;">
            <div class="container">
                <div class="row">

                    @foreach($achievements as $achievement)
                        @if($achievement->id <= 3) @continue @endif
                        <div class="col-4 text-center px-4">
                            <img src="images/{{ $achievement->image }}" class="img-fluid w-100 mb-2 mt-0">
                            <h6 class="fw-bold h1 m-0">{{ $achievement->title_en }}</h6>
                            <h6 class="card-title text-dark fw-bold d-md-none">
                                <small>
                                    {{ $achievement->subtitle_en }}
                                </small>
                            </h6>
                        </div>
                    @endforeach

                </div>

            </div>
        </div>
    </div>

    <div class="d-sm-none">
        <div class="container-fluid">
            <div class="container pt-5 pb-3">
                <div class="row">
                    <h2 class="h1 fw-bold pb-0">ACHIEVEMENTS</h2>
                </div>
            </div>
        </div>
        <div class="container-fluid" style="background-image: url('/images/bg_ac.png'); background-position: center;">
            <div class="container">
                <div class="row">

                    @foreach($achievements as $achievement)
                        @if($achievement->id > 2) @break @endif
                        <div class="col-6 text-center px-4">
                            <img src="images/{{ $achievement->image }}" class="img-fluid w-75 mb-2 mt-0">
                            <h6 class="fw-bold h1 m-0">{{ $achievement->title_en }}</h6>
                            <h6 class="card-title text-dark fw-bold d-md-none">
                                <small>
                                    {{ $achievement->subtitle_en }}
                                </small>
                            </h6>
                        </div>
                    @endforeach

                </div>

            </div>
        </div>
        <div class="container-fluid mt-4" style="background-image: url('/images/bg_ac.png'); background-position: center;">
            <div class="container">
                <div class="row">

                    @foreach($achievements as $achievement)
                        @if($achievement->id <= 2 or $achievement->id >= 5) @continue @endif
                        <div class="col-6 text-center px-4">
                            <img src="images/{{ $achievement->image }}" class="img-fluid w-75 mb-2 mt-0">
                            <h6 class="fw-bold h1 m-0">{{ $achievement->title_en }}</h6>
                            <h6 class="card-title text-dark fw-bold d-md-none">
                                <small>
                                    {{ $achievement->subtitle_en }}
                                </small>
                            </h6>
                        </div>
                    @endforeach

                </div>

            </div>
        </div>
        <div class="container-fluid mt-4" style="background-image: url('/images/bg_ac.png'); background-position: center;">
            <div class="container">
                <div class="row">

                    @foreach($achievements as $achievement)
                        @if($achievement->id < 5) @continue @endif
                        <div class="col-6 text-center px-4">
                            <img src="images/{{ $achievement->image }}" class="img-fluid w-75 mb-2 mt-0">
                            <h6 class="fw-bold h1 m-0">{{ $achievement->title_en }}</h6>
                            <h6 class="card-title text-dark fw-bold d-md-none">
                                <small>
                                    {{ $achievement->subtitle_en }}
                                </small>
                            </h6>
                        </div>
                    @endforeach

                </div>

            </div>
        </div>
    </div>




    <div class="container-fluid d-none d-xxl-block">
        <div class="container p-5">
            <div class="row p-5">
                <h2 class="display-5 fw-bold pb-0 w-75">
                    {{ $page_info->pageItems->where('name', 'stars_header')->first()->value }}
                </h2>
            </div>
            <div class="row px-5 pb-5">

                @foreach($stars as $star)
                    @if($star->title_en == 'Contact')
                        <div class="col-12 col-sm-6 col-lg-4 my-3">
                            <div class="card p-0 h-100" style="border: none; border-radius: 0;">
                                <div class="d-flex align-items-center h-50 px-5" style="background-color: #6de1df">
                                    <button class="btn btn-primary btn-lg border-0 rounded-4 shadow-none w-100" style="background-color: #43aeb6" type="button" data-bs-toggle="modal" data-bs-target="#exampleModal2">
                                        <span class="fw-bold h4 d-block my-2">CONTACT US</span>
                                    </button>
                                </div>
                            </div>
                        </div>
                    @else
                        <div class="col-12 col-sm-6 col-lg-4 my-3">
                            <div class="card p-2 h-100" style="border: 4px solid #6bdcdb; border-radius: 0;">
                                <div class="container-fluid">
                                    <div class="row">
                                        <div class="col-7 px-0 d-flex align-items-center">
                                            <h5 class="fw-bold ps-3">
                                                <small>
                                                    {{ $star->title_en }}
                                                </small>
                                            </h5>
                                        </div>
                                        <div class="col-5">
                                            <img src="/images/{{ $star->image }}" class="img-fluid p-1 w-100 bg-transparent">
                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer p-0 border-0 d-flex align-items-center" style="background-color: #ffffff">
                                    <h6 class="text-secondary px-3 py-5">
                                        {{ $star->description_en }}
                                    </h6>
                                </div>
                            </div>
                        </div>
                    @endif
                @endforeach

            </div>
        </div>
    </div>

    <div class="container-fluid d-none d-xl-block d-xxl-none">
        <div class="container p-5">
            <div class="row p-5">
                <h2 class="h1 fw-bold pb-0">YOUR BUSINESS DESERVES<br>OUR FIVE-STARS:</h2>
            </div>
            <div class="row px-5 pb-5">

                @foreach($stars as $star)
                    @if($star->title_en == 'Contact')
                        <div class="col-12 col-sm-6 col-lg-4 my-3">
                            <div class="card p-0 h-100" style="border: none; border-radius: 0;">
                                <div class="d-flex align-items-center h-50 px-5" style="background-color: #6de1df">
                                    <button class="btn btn-primary btn-lg border-0 rounded-4 shadow-none w-100" style="background-color: #43aeb6" type="button" data-bs-toggle="modal" data-bs-target="#exampleModal2">
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
                                                <small>
                                                    {{ $star->title_en }}
                                                </small>
                                            </h5>
                                        </div>
                                        <div class="col-5 p-0 ps-2">
                                            <img src="/images/{{ $star->image }}" class="img-fluid bg-transparent">
                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer p-0 border-0 d-flex align-items-center" style="background-color: #ffffff">
                                    <h6 class="text-secondary px-3 py-5">
                                        {{ $star->description_en }}
                                    </h6>
                                </div>
                            </div>
                        </div>
                    @endif
                @endforeach

            </div>
        </div>
    </div>

    <div class="container-fluid d-none d-lg-block d-xl-none">
        <div class="container p-5">
            <div class="row p-5">
                <h2 class="h1 fw-bold pb-0">YOUR BUSINESS DESERVES<br>OUR FIVE-STARS:</h2>
            </div>
            <div class="row px-5 pb-5">

                @foreach($stars as $star)
                    @if($star->title_en == 'Contact')
                        <div class="col-12 col-sm-6 col-lg-4 my-3">
                            <div class="card p-0 h-100" style="border: none; border-radius: 0;">
                                <div class="d-flex align-items-center h-50 px-3" style="background-color: #6de1df">
                                    <button class="btn btn-primary border-0 rounded-4 shadow-none w-100" style="background-color: #43aeb6" type="button" data-bs-toggle="modal" data-bs-target="#exampleModal2">
                                        <span class="fw-bold h5 d-block my-2">CONTACT US</span>
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
                                                <small>
                                                    {{ $star->title_en }}
                                                </small>
                                            </h5>
                                        </div>
                                        <div class="col-5 p-0 ps-2">
                                            <img src="/images/{{ $star->image }}" class="img-fluid bg-transparent">
                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer p-0 border-0 d-flex align-items-center" style="background-color: #ffffff">
                                    <h6 class="text-secondary px-3 py-5">
                                        {{ $star->description_en }}
                                    </h6>
                                </div>
                            </div>
                        </div>
                    @endif
                @endforeach

            </div>
        </div>
    </div>

    <div class="container-fluid d-none d-md-block d-lg-none">
        <div class="container py-5">
            <div class="row pt-5">
                <h2 class="h1 fw-bold pb-0">YOUR BUSINESS DESERVES<br>OUR FIVE-STARS:</h2>
            </div>
            <div class="row">

                @foreach($stars as $star)
                    @if($star->title_en == 'Contact')
                        <div class="col-6 my-3">
                            <div class="card p-0 h-100" style="border: none; border-radius: 0;">
                                <div class="d-flex align-items-center h-50 px-3" style="background-color: #6de1df">
                                    <button class="btn btn-primary border-0 rounded-4 shadow-none w-100" style="background-color: #43aeb6" type="button" data-bs-toggle="modal" data-bs-target="#exampleModal2">
                                        <span class="fw-bold h5 d-block my-2">CONTACT US</span>
                                    </button>
                                </div>
                            </div>
                        </div>
                    @else
                        <div class="col-6 my-3">
                            <div class="card p-0 h-100" style="border: 4px solid #6bdcdb; border-radius: 0;">
                                <div class="container-fluid">
                                    <div class="row">
                                        <div class="col-7 px-0 d-flex align-items-center">
                                            <h5 class="fw-bold ps-3">
                                                <small>
                                                    {{ $star->title_en }}
                                                </small>
                                            </h5>
                                        </div>
                                        <div class="col-5 p-0 ps-2">
                                            <img src="/images/{{ $star->image }}" class="img-fluid bg-transparent">
                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer p-0 border-0 d-flex align-items-center" style="background-color: #ffffff">
                                    <h6 class="text-secondary px-3 py-5">
                                        {{ $star->description_en }}
                                    </h6>
                                </div>
                            </div>
                        </div>
                    @endif
                @endforeach

            </div>
        </div>
    </div>

    <div class="container-fluid d-none d-sm-block d-md-none">
        <div class="container py-5">
            <div class="row pt-5">
                <h2 class="h1 fw-bold pb-0">YOUR BUSINESS DESERVES<br>OUR FIVE-STARS:</h2>
            </div>
            <div class="row">

                @foreach($stars as $star)
                    @if($star->title_en == 'Contact')
                        <div class="col-6 my-3">
                            <div class="card p-0 h-100" style="border: none; border-radius: 0;">
                                <div class="d-flex align-items-center h-50 px-3" style="background-color: #6de1df">
                                    <button class="btn btn-primary border-0 rounded-4 shadow-none w-100" style="background-color: #43aeb6" type="button" data-bs-toggle="modal" data-bs-target="#exampleModal2">
                                        <span class="fw-bold h5 d-block my-2">CONTACT US</span>
                                    </button>
                                </div>
                            </div>
                        </div>
                    @else
                        <div class="col-6 my-3">
                            <div class="card p-0 h-100" style="border: 4px solid #6bdcdb; border-radius: 0;">
                                <div class="container-fluid">
                                    <div class="row">
                                        <div class="col-7 px-0 d-flex align-items-center">
                                            <h5 class="fw-bold ps-3">
                                                <small>
                                                    {{ $star->title_en }}
                                                </small>
                                            </h5>
                                        </div>
                                        <div class="col-5 p-0 ps-2">
                                            <img src="/images/{{ $star->image }}" class="img-fluid bg-transparent">
                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer p-0 border-0 d-flex align-items-center" style="background-color: #ffffff">
                                    <h6 class="text-secondary px-3 py-5">
                                        {{ $star->description_en }}
                                    </h6>
                                </div>
                            </div>
                        </div>
                    @endif
                @endforeach

            </div>
        </div>
    </div>

    <div class="container-fluid d-sm-none">
        <div class="container py-5">
            <div class="row pt-5">
                <h2 class="h1 fw-bold pb-0">YOUR BUSINESS DESERVES<br>OUR FIVE-STARS:</h2>
            </div>
            <div class="row">

                @foreach($stars as $star)
                    @if($star->title_en == 'Contact')
                        <div class="col-12 my-3">
                            <div class="card h-100" style="border: none; border-radius: 0;">
                                <div class="d-flex align-items-center p-5" style="background-color: #6de1df">
                                    <button class="btn btn-primary border-0 rounded-4 shadow-none w-100" style="background-color: #43aeb6" type="button" data-bs-toggle="modal" data-bs-target="#exampleModal2">
                                        <span class="fw-bold h5 d-block my-2">CONTACT US</span>
                                    </button>
                                </div>
                            </div>
                        </div>
                    @else
                        <div class="col-12 my-3">
                            <div class="card p-0 h-100" style="border: 4px solid #6bdcdb; border-radius: 0;">
                                <div class="container-fluid">
                                    <div class="row">
                                        <div class="col-7 px-0 d-flex align-items-center">
                                            <h5 class="fw-bold ps-3">
                                                <small>
                                                    {{ $star->title_en }}
                                                </small>
                                            </h5>
                                        </div>
                                        <div class="col-5 p-0 ps-2">
                                            <img src="/images/{{ $star->image }}" class="img-fluid bg-transparent">
                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer p-0 border-0 d-flex align-items-center" style="background-color: #ffffff">
                                    <h6 class="text-secondary px-3 pb-3 pt-1">
                                        {{ $star->description_en }}
                                    </h6>
                                </div>
                            </div>
                        </div>
                    @endif
                @endforeach

            </div>
        </div>
    </div>




    <div class="container-fluid d-none d-xxl-block py-5 px-0" style="background-color: #d4fffb">
        <div class="container px-5">
            <div class="row p-5">
                <h2 class="display-5 fw-bold pb-0">
                    {{ $page_info->pageItems->where('name', 'testimonials_header')->first()->value }}
                </h2>
            </div>
        </div>
        <div class="row w-100 m-0 px-0 pb-5">
            <div class="col-12 w-100 px-0">
                <section id="splide1" class="splide" aria-label="Slide Container Example">
                    <div class="splide__track">
                        <ul class="splide__list">
                            @foreach($testimonials as $testimonial)
                                <li class="splide__slide">
                                    <div class="card h-100 p-2 mx-4 rounded-5 border-0" @if(($testimonial->id % 2) == 0) style="background-color: #c4c4c4" @else style="background-color: #6bdcdb" @endif >
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-4">
                                                    <img class="img w-100" src="/images/{{ $testimonial->image }}" alt="">
                                                </div>

                                                <div class="col-8">
                                                    <h6 class="text-white fw-bold h6 w-100 mt-3 mb-0">{{ $testimonial->name }} {{ $testimonial->surname }}</h6>
                                                    <h6 class="text-white fw-semibold h6 w-100">{{ $testimonial->profession }}</h6>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-12">
                                                    <p class="card-text text-white fw-semibold h6 mt-2">
                                                        {{ $testimonial->text }}
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </section>
            </div>

        </div>
    </div>

    <div class="container-fluid d-none d-xl-block d-xxl-none py-5 px-0" style="background-color: #d4fffb">
        <div class="container px-5">
            <div class="row p-5">
                <h2 class="display-5 fw-bold pb-0">TESTIMONIALS</h2>
            </div>
        </div>
        <div class="row w-100 px-0 pb-5">
            <div class="col-12 w-100 px-0">
                <section id="splide2" class="splide" aria-label="Slide Container Example">
                    <div class="splide__track">
                        <ul class="splide__list">
                            <li class="splide__slide">
                                <div class="row d-none d-lg-flex px-4">
                                    <div class="col-12 px-3">
                                        <div class="card p-3 rounded-5 border-0" style="background-color: #c4c4c4">
                                            <div class="card-body">
                                                <div class="row">
                                                    <div class="col-4 d-flex align-items-center">
                                                        <div class="w-100 align-self-center">
                                                            <img class="img w-100" src="images/partner2.png" alt="">
                                                        </div>
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
                                                    <div class="col-4 d-flex align-items-center">
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
    </div>

    <div class="container-fluid d-none d-lg-block d-xl-none py-5 px-0" style="background-color: #d4fffb">
        <div class="container px-5">
            <div class="row p-5">
                <h2 class="h1 fw-bold pb-0">TESTIMONIALS</h2>
            </div>
        </div>
        <div class="row w-100 px-0 pb-5">
            <div class="col-12 w-100 px-0">
                <section id="splide3" class="splide" aria-label="Slide Container Example">
                    <div class="splide__track">
                        <ul class="splide__list">
                            <li class="splide__slide">
                                <div class="row d-none d-lg-flex px-4">
                                    <div class="col-12 px-3">
                                        <div class="card p-3 rounded-5 border-0" style="background-color: #c4c4c4">
                                            <div class="card-body">
                                                <div class="row">
                                                    <div class="col-4 d-flex align-items-center">
                                                        <div class="w-100 align-self-center">
                                                            <img class="img w-100" src="images/partner2.png" alt="">
                                                        </div>
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
                                                    <div class="col-4 d-flex align-items-center">
                                                        <div class="w-100 align-self-center">
                                                            <img class="img w-100" src="images/partner.png" alt="">
                                                        </div>
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
    </div>

    <div class="container-fluid d-none d-md-block d-lg-none py-5 px-0" style="background-color: #d4fffb">
        <div class="container">
            <div class="row pb-3">
                <h2 class="h1 fw-bold pb-0">TESTIMONIALS</h2>
            </div>
        </div>
        <div class="row w-100 px-0">
            <div class="col-12 w-100 px-0">
                <section id="splide4" class="splide" aria-label="Slide Container Example">
                    <div class="splide__track">
                        <ul class="splide__list">
                            <li class="splide__slide">
                                <div class="row px-4">
                                    <div class="col-12 px-3">
                                        <div class="card p-3 rounded-5 border-0" style="background-color: #c4c4c4">
                                            <div class="card-body">
                                                <div class="row">
                                                    <div class="col-4 d-flex align-items-center">
                                                        <div class="w-100 align-self-center">
                                                            <img class="img w-100" src="images/partner2.png" alt="">
                                                        </div>
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
                                <div class="row px-4">
                                    <div class="col-12 px-3">
                                        <div class="card p-3 rounded-5 border-0" style="background-color: #6bdcdb">
                                            <div class="card-body">
                                                <div class="row">
                                                    <div class="col-4 d-flex align-items-center">
                                                        <div class="w-100 align-self-center">
                                                            <img class="img w-100" src="images/partner.png" alt="">
                                                        </div>
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
    </div>

    <div class="container-fluid d-none d-sm-block d-md-none py-5 px-0" style="background-color: #d4fffb">
        <div class="container">
            <div class="row pb-3">
                <h2 class="h1 fw-bold pb-0">TESTIMONIALS</h2>
            </div>
        </div>
        <div class="row w-100 px-0 pb-5">
            <div class="col-12 w-100 px-0">
                <section id="splide5" class="splide" aria-label="Slide Container Example">
                    <div class="splide__track">
                        <ul class="splide__list">
                            <li class="splide__slide">
                                <div class="row px-4">
                                    <div class="col-12 px-3">
                                        <div class="card p-3 rounded-5 border-0" style="background-color: #c4c4c4">
                                            <div class="card-body">
                                                <div class="row">
                                                    <div class="col-4 d-flex align-items-center">
                                                        <div class="w-100 align-self-center">
                                                            <img class="img w-100" src="images/partner2.png" alt="">
                                                        </div>
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
                                <div class="row px-4">
                                    <div class="col-12 px-3">
                                        <div class="card p-3 rounded-5 border-0" style="background-color: #6bdcdb">
                                            <div class="card-body">
                                                <div class="row">
                                                    <div class="col-4 d-flex align-items-center">
                                                        <div class="w-100 align-self-center">
                                                            <img class="img w-100" src="images/partner.png" alt="">
                                                        </div>
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
    </div>

    <div class="container-fluid d-sm-none py-5 px-0" style="background-color: #d4fffb">
        <div class="container">
            <div class="row pb-3">
                <div class="col-12 px-4">
                    <h2 class="h1 fw-bold pb-0">TESTIMONIALS</h2>
                </div>
            </div>
        </div>
        <div class="row w-100 px-0 pb-5">
            <div class="col-12 w-100 px-0">
                <section id="splide6" class="splide" aria-label="Slide Container Example">
                    <div class="splide__track">
                        <ul class="splide__list">
                            <li class="splide__slide">
                                <div class="row px-4">
                                    <div class="col-12 px-3">
                                        <div class="card p-3 rounded-5 border-0" style="background-color: #c4c4c4">
                                            <div class="card-body">
                                                <div class="row">
                                                    <div class="col-4 d-flex align-items-center">
                                                        <div class="w-100 align-self-center">
                                                            <img class="img w-100" src="images/partner2.png" alt="">
                                                        </div>
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
                                <div class="row px-4">
                                    <div class="col-12 px-3">
                                        <div class="card p-3 rounded-5 border-0" style="background-color: #6bdcdb">
                                            <div class="card-body">
                                                <div class="row">
                                                    <div class="col-4 d-flex align-items-center">
                                                        <div class="w-100 align-self-center">
                                                            <img class="img w-100" src="images/partner2.png" alt="">
                                                        </div>
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
    </div>




    <div class="container-fluid d-none d-xxl-block w-100 py-5 px-0">
        <div class="container px-5">
            <div class="row p-5">
                <h2 class="display-5 fw-bold pb-0">
                    {{ $page_info->pageItems->where('name', 'portfolio_header')->first()->value }}
                </h2>
            </div>
        </div>
        <div class="row w-100 px-0 m-0">
            <div class="col-12 w-100 p-0">
                <section id="splide7" class="splide" aria-label="Slide Container Example">
                    <div class="splide__track">
                        <ul class="splide__list">
                            @foreach($works as $work)
                                <li class="splide__slide px-3">
                                    <div class="splide__slide__container">
                                        <div class="portfolio-container">
                                            <div class="card border-0 text-bg-dark">
                                                <img src="/images/{{ $work->image }}" class="card-img" alt="...">
                                            </div>
                                            <div class="overlay">
                                                <div class="row p-5 py-4 text-white">
                                                    <div class="col-12">
                                                        <div class="row justify-content-between">
                                                            <div class="col-6">
{{--                                                                <h5 class="card-title h2 fw-bold">{{ $work->title }}</h5>--}}
{{--                                                                <p class="card-text h5 fw-bold">{{ $work->subtitle }}</p>--}}
{{--                                                                <h4>{{ $work->parameter_1 }}</h4>--}}
{{--                                                                <h4>{{ $work->parameter_2 }}</h4>--}}
                                                                <h4 class="fw-bold">Residential</h4>
                                                                <h4 class="fw-bold">Building</h4>
                                                            </div>
                                                            <div class="col-6">
                                                                <h4>LOD: 300</h4>
                                                                <h4>Area: 38950m2</h4>
{{--                                                                <h4>{{ $work->parameter_3 }}</h4>--}}
{{--                                                                <h4>{{ $work->parameter_4 }}</h4>--}}
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-12">
                                                                <h5 class="text-dark fw-bold">Scan to bim</h5>
                                                            </div>
                                                        </div>
                                                        <div class="row border-bottom border-3 border-white">
                                                            <div class="col-12">
                                                                <h5 class="fw-bold">Arhitecture, Structure, MEPF</h5>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-5 d-flex justify-content-center">
                                                                <img src="/images/{{ $work->image_small }}" class="img-fluid w-75 mx-auto mt-2" alt="...">
                                                            </div>
                                                            <div class="col-7">
                                                                <h6 class="mt-2">
                                                                    {{ $work->description }}
                                                                </h6>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </section>
            </div>
        </div>

        <div class="row w-100 mt-4 mx-0 px-0 pb-5">
            <div class="col-12 w-100 p-0">
                <section id="splide8" class="splide" aria-label="Slide Container Example">
                    <div class="splide__track">
                        <ul class="splide__list">
                            @foreach($works as $work)
                                <li class="splide__slide px-3">
                                    <div class="splide__slide__container">
                                        <div class="portfolio-container">
                                            <div class="card border-0 text-bg-dark">
                                                <img src="/images/{{ $work->image }}" class="card-img" alt="...">
                                            </div>
                                            <div class="overlay">
                                                <div class="row p-5 py-4 text-white">
                                                    <div class="col-12">
                                                        <div class="row justify-content-between">
                                                            <div class="col-6">
                                                                {{--                                                                <h5 class="card-title h2 fw-bold">{{ $work->title }}</h5>--}}
                                                                {{--                                                                <p class="card-text h5 fw-bold">{{ $work->subtitle }}</p>--}}
                                                                {{--                                                                <h4>{{ $work->parameter_1 }}</h4>--}}
                                                                {{--                                                                <h4>{{ $work->parameter_2 }}</h4>--}}
                                                                <h4 class="fw-bold">Residential</h4>
                                                                <h4 class="fw-bold">Building</h4>
                                                            </div>
                                                            <div class="col-6">
                                                                <h4>LOD: 300</h4>
                                                                <h4>Area: 38950m2</h4>
                                                                {{--                                                                <h4>{{ $work->parameter_3 }}</h4>--}}
                                                                {{--                                                                <h4>{{ $work->parameter_4 }}</h4>--}}
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-12">
                                                                <h5 class="text-dark fw-bold">Scan to bim</h5>
                                                            </div>
                                                        </div>
                                                        <div class="row border-bottom border-3 border-white">
                                                            <div class="col-12">
                                                                <h5 class="fw-bold">Arhitecture, Structure, MEPF</h5>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-5 d-flex justify-content-center">
                                                                <img src="/images/{{ $work->image_small }}" class="img-fluid w-75 mx-auto mt-2" alt="...">
                                                            </div>
                                                            <div class="col-7">
                                                                <h6 class="mt-2">
                                                                    {{ $work->description }}
                                                                </h6>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </section>
            </div>
        </div>
    </div>

    <div class="container-fluid d-none d-xl-block d-xxl-none w-100 py-5 px-0">
        <div class="container px-5">
            <div class="row p-5">
                <h2 class="display-5 fw-bold pb-0">PORTFOLIO</h2>
            </div>
        </div>
        <div class="row w-100 px-0">
            <div class="col-12 w-100 p-0">
                <section id="splide9" class="splide" aria-label="Slide Container Example">
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

        <div class="row w-100 mt-4 px-0 pb-5">
            <div class="col-12 w-100 p-0">
                <section id="splide10" class="splide" aria-label="Slide Container Example">
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
    </div>

    <div class="container-fluid d-none d-lg-block d-xl-none w-100 py-5 px-0">
        <div class="container px-5">
            <div class="row p-5">
                <h2 class="h1 fw-bold pb-0">PORTFOLIO</h2>
            </div>
        </div>
        <div class="row w-100 px-0">
            <div class="col-12 w-100 p-0">
                <section id="splide11" class="splide" aria-label="Slide Container Example">
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

        <div class="row w-100 mt-4 px-0 pb-5">
            <div class="col-12 w-100 p-0">
                <section id="splide12" class="splide" aria-label="Slide Container Example">
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
    </div>

    <div class="container-fluid d-none d-md-block d-lg-none w-100 py-5 px-0">
        <div class="container">
            <div class="row pb-3">
                <h2 class="h1 fw-bold pb-0">PORTFOLIO</h2>
            </div>
        </div>
        <div class="row w-100 px-0">
            <div class="col-12 w-100 p-0">
                <section id="splide13" class="splide" aria-label="Slide Container Example">
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

                                        <div class="card rounded-0 border-0" style="background-color: #6bdddb;">
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
    </div>

    <div class="container-fluid d-none d-sm-block d-md-none w-100 py-5 px-0">
        <div class="container">
            <div class="row pb-5">
                <h2 class="h1 fw-bold pb-0">PORTFOLIO</h2>
            </div>
        </div>
        <div class="row w-100 px-0">
            <div class="col-12 w-100 p-0">
                <section id="splide14" class="splide" aria-label="Slide Container Example">
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

                                        <div class="card rounded-0 border-0" style="background-color: #6bdddb;">
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
    </div>

    <div class="container-fluid d-sm-none w-100 py-5 px-0">
        <div class="container">
            <div class="row pb-3">
                <h2 class="h1 fw-bold pb-0">PORTFOLIO</h2>
            </div>
        </div>
        <div class="row w-100 px-0">
            <div class="col-12 w-100 p-0">
                <section id="splide15" class="splide px-0" aria-label="Slide Container Example">
                    <div class="splide__track">
                        <ul class="splide__list">
                            <li class="splide__slide px-0">
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

                                        <div class="card border-0 rounded-0" style="background-color: #6bdddb;">
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
    </div>




    <div class="container-fluid d-none d-xxl-block pt-5 px-0" style="background-color: #d4fffb">
        <div class="container px-5">
            <div class="row p-5">
                <h2 class="display-5 fw-bold pb-0">
                    {{ $page_info->pageItems->where('name', 'team_header')->first()->value }}
                </h2>
            </div>
        </div>

        <div class="row w-100 mx-0 px-0 pb-5">
            <div class="col-12">
                <section id="splide17" class="splide" aria-label="Slide Container Example">
                    <div class="splide__track">
                        <ul class="splide__list">
                            @foreach($teammates as $teammate)
                                <li class="splide__slide">
                                    <div class="splide__slide__container">
                                        <div class="card border-0 px-5 h-100" style="background-color: #d4fffb">
                                            <div class="text-center p-4 pt-0">
                                                <img src="/images/{{ $teammate->image }}" class="img-fluid w-100">
                                            </div>
                                            <div class="card-body pb-0 px-3">
                                                <h2 class="fw-bold">{{ $teammate->name_en }}</h2>
                                                <h2 class="fw-bold">{{ $teammate->surname_en }}</h2>
                                                <h5 class="card-title text-dark">
                                                    {{ $teammate->position_en }}
                                                </h5>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </section>
            </div>
        </div>
    </div>

    <div class="container-fluid d-none d-xl-block d-xxl-none pt-5 px-0" style="background-color: #d4fffb">
        <div class="container px-5">
            <div class="row p-5">
                <h2 class="display-5 fw-bold pb-0">TEAM</h2>
            </div>
        </div>

        <div class="row w-100 px-0 pb-5">
            <div class="col-12">
                <section id="splide18" class="splide" aria-label="Slide Container Example">
                    <div class="splide__track">
                        <ul class="splide__list">
                            @foreach($teammates as $teammate)
                                <li class="splide__slide px-1">
                                    <div class="splide__slide__container">
                                        <div class="card p-3 border-0 h-100" style="background-color: #d4fffb">
                                            <div class="text-center p-2 pt-0">
                                                <img src="{{ $teammate->image }}" class="img-fluid w-100">
                                            </div>
                                            <div class="card-body pb-0">
                                                <h2 class="fw-bold">{{ $teammate->name_en }}</h2>
                                                <h2 class="fw-bold">{{ $teammate->surname_en }}</h2>
                                                <h5 class="card-title text-dark">
                                                    {{ $teammate->position_en }}
                                                </h5>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </section>
            </div>
        </div>
    </div>

    <div class="container-fluid d-none d-lg-block d-xl-none pt-5 px-0" style="background-color: #d4fffb">
        <div class="container px-5">
            <div class="row p-5">
                <h2 class="h1 fw-bold pb-0">TEAM</h2>
            </div>
        </div>

        <div class="row w-100 px-0 pb-5">
            <div class="col-12">
                <section id="splide19" class="splide" aria-label="Slide Container Example">
                    <div class="splide__track">
                        <ul class="splide__list">
                            @foreach($teammates as $teammate)
                                <li class="splide__slide px-1">
                                    <div class="splide__slide__container">
                                        <div class="card p-4 border-0 h-100" style="background-color: #d4fffb">
                                            <div class="text-center p-2 pt-0">
                                                <img src="{{ $teammate->image }}" class="img-fluid w-100">
                                            </div>
                                            <div class="card-body pb-0">
                                                <h2 class="fw-bold">{{ $teammate->name_en }}</h2>
                                                <h2 class="fw-bold">{{ $teammate->surname_en }}</h2>
                                                <h5 class="card-title text-dark">
                                                    {{ $teammate->position_en }}
                                                </h5>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </section>
            </div>
        </div>
    </div>

    <div class="container-fluid d-none d-md-block d-lg-none px-0" style="background-color: #d4fffb">
        <div class="container">
            <div class="row pt-5 pb-3">
                <h2 class="h1 fw-bold pb-0">TEAM</h2>
            </div>
        </div>

        <div class="row w-100 px-0">
            <div class="col-12">
                <section id="splide19" class="splide" aria-label="Slide Container Example">
                    <div class="splide__track">
                        <ul class="splide__list">
                            @foreach($teammates as $teammate)
                                <li class="splide__slide px-1">
                                    <div class="splide__slide__container">
                                        <div class="card p-3 border-0 h-100" style="background-color: #d4fffb">
                                            <div class="text-center p-2 pt-0">
                                                <img src="{{ $teammate->image }}" class="img-fluid w-100">
                                            </div>
                                            <div class="card-body pb-0">
                                                <h2 class="fw-bold">{{ $teammate->name_en }}</h2>
                                                <h2 class="fw-bold">{{ $teammate->surname_en }}</h2>
                                                <h5 class="card-title text-dark">
                                                    {{ $teammate->position_en }}
                                                </h5>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </section>
            </div>
        </div>
    </div>

    <div class="container-fluid d-none d-sm-block d-md-none px-0" style="background-color: #d4fffb">
        <div class="container">
            <div class="row pt-5 pb-3">
                <h2 class="h1 fw-bold pb-0">TEAM</h2>
            </div>
        </div>

        <div class="row w-100 px-0 pb-5">
            <div class="col-12">
                <section id="splide20" class="splide" aria-label="Slide Container Example">
                    <div class="splide__track">
                        <ul class="splide__list">
                            @foreach($teammates as $teammate)
                                <li class="splide__slide px-1">
                                    <div class="splide__slide__container">
                                        <div class="card p-3 border-0 h-100" style="background-color: #d4fffb">
                                            <div class="text-center p-2 pt-0">
                                                <img src="{{ $teammate->image }}" class="img-fluid w-100">
                                            </div>
                                            <div class="card-body pb-0">
                                                <h2 class="fw-bold">{{ $teammate->name_en }}</h2>
                                                <h2 class="fw-bold">{{ $teammate->surname_en }}</h2>
                                                <h5 class="card-title text-dark">
                                                    {{ $teammate->position_en }}
                                                </h5>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </section>
            </div>
        </div>
    </div>

    <div class="container-fluid d-sm-none px-0" style="background-color: #d4fffb">
        <div class="container">
            <div class="row pt-5">
                <h2 class="h1 fw-bold pb-0">TEAM</h2>
            </div>
        </div>

        <div class="row w-100 px-0">
            <div class="col-12">
                <section id="splide21" class="splide" aria-label="Slide Container Example">
                    <div class="splide__track">
                        <ul class="splide__list">
                            @foreach($teammates as $teammate)
                                <li class="splide__slide px-1">
                                    <div class="splide__slide__container">
                                        <div class="card p-5 border-0 h-100" style="background-color: #d4fffb">
                                            <div class="text-center p-2 pt-0">
                                                <img src="{{ $teammate->image }}" class="img-fluid w-100">
                                            </div>
                                            <div class="card-body pb-0">
                                                <h2 class="fw-bold">{{ $teammate->name_en }}</h2>
                                                <h2 class="fw-bold">{{ $teammate->surname_en }}</h2>
                                                <h5 class="card-title text-dark">
                                                    {{ $teammate->position_en }}
                                                </h5>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </section>
            </div>
        </div>
    </div>





    <div class="container-fluid d-none d-xxl-block" style="background-color: #adbec1">
        <div class="container p-5">
            <div class="row p-5">
                <div class="col-6">
                    <h2 class="text-white fw-bold display-5 w-100">
                        {{ $page_info->pageItems->where('name', 'calendar_header')->first()->value }}
                    </h2>
                    <h2 class="text-white h1 fw-semibold mt-4">
                        <small>
                            {{ $page_info->pageItems->where('name', 'calendar_subheader')->first()->value }}
                        </small>
                    </h2>
                    <button class="btn btn-primary btn-lg border-0 rounded-4 shadow-none w-50 mt-4" style="background-color: #6bdcdb" type="button" data-bs-toggle="modal" data-bs-target="#exampleModal2">
                        <span class="fw-bold h4 d-block my-2">GO TO CALENDAR</span>
                    </button>
                </div>
                <div class="col-6 d-flex align-items-center">
                    <img src="/images/{{ $page_info->pageItems->where('name', 'calendar_image')->first()->value }}" class="img-fluid w-100" alt="mail_photo">
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid d-none d-xl-block d-xxl-none" style="background-color: #adbec1">
        <div class="container p-5">
            <div class="row p-5">
                <div class="col-6">
                    <h2 class="text-white fw-bold display-5 w-100">
                        UNLOCK THE FULL POTENTIAL OF OUR SERVICES.
                    </h2>
                    <h2 class="text-white h1 fw-semibold mt-4">
                        <small>
                            Sign up for a meeting now a convenient time for you!
                        </small>
                    </h2>
                    <button class="btn btn-primary btn-lg border-0 rounded-4 shadow-none w-75 mt-4" style="background-color: #6bdcdb" type="button" data-bs-toggle="modal" data-bs-target="#exampleModal2">
                        <span class="fw-bold h4 d-block my-2">GO TO CALENDAR</span>
                    </button>
                </div>
                <div class="col-6 d-flex align-items-center">
                    <img src="/images/mail.png" class="img-fluid w-100" alt="mail_photo">
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid d-none d-lg-block d-xl-none" style="background-color: #adbec1">
        <div class="container p-5">
            <div class="row p-5">
                <div class="col-6">
                    <h2 class="text-white fw-bold h1 w-100">
                        UNLOCK THE FULL POTENTIAL OF OUR SERVICES.
                    </h2>
                    <h2 class="text-white h1 fw-semibold mt-4">
                        <small>
                            Sign up for a meeting now a convenient time for you!
                        </small>
                    </h2>
                    <button class="btn btn-primary btn-lg border-0 rounded-4 shadow-none w-75 mt-4" style="background-color: #6bdcdb" type="button" data-bs-toggle="modal" data-bs-target="#exampleModal2">
                        <span class="fw-bold h4 d-block my-2">GO TO CALENDAR</span>
                    </button>
                </div>
                <div class="col-6 d-flex align-items-center">
                    <img src="/images/mail.png" class="img-fluid w-100" alt="mail_photo">
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid d-none d-md-block d-lg-none" style="background-color: #adbec1">
        <div class="container">
            <div class="row py-5">
                <div class="col-8">
                    <h2 class="text-white fw-bold h1 w-100">
                        UNLOCK THE FULL POTENTIAL OF OUR SERVICES.
                    </h2>
                    <h2 class="text-white h4 fw-semibold mt-4">
                        Sign up for a meeting now a convenient time for you!
                    </h2>
                    <button class="btn btn-primary border-0 rounded-4 shadow-none w-75 mt-4" style="background-color: #6bdcdb" type="button" data-bs-toggle="modal" data-bs-target="#exampleModal2">
                        <span class="fw-bold h5 d-block my-2">GO TO CALENDAR</span>
                    </button>
                </div>
                <div class="col-4 d-flex align-items-center">
                    <img src="/images/mail.png" class="img-fluid w-100" alt="mail_photo">
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid d-none d-sm-block d-md-none" style="background-color: #adbec1">
        <div class="container">
            <div class="row py-5">
                <div class="col-8">
                    <h2 class="text-white fw-bold h1 w-100">
                        UNLOCK THE FULL POTENTIAL OF OUR SERVICES.
                    </h2>
                    <h2 class="text-white h4 fw-semibold mt-4">
                        Sign up for a meeting now a convenient time for you!
                    </h2>
                    <button class="btn btn-primary border-0 rounded-4 shadow-none w-75 mt-4" style="background-color: #6bdcdb" type="button" data-bs-toggle="modal" data-bs-target="#exampleModal2">
                        <span class="fw-bold h5 d-block my-2">GO TO CALENDAR</span>
                    </button>
                </div>
                <div class="col-4 d-flex align-items-center">
                    <img src="/images/mail.png" class="img-fluid w-100" alt="mail_photo">
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid d-sm-none" style="background-color: #adbec1">
        <div class="container">
            <div class="row py-5">
                <div class="col-12">
                    <h2 class="text-white fw-bold h1 w-100">
                        UNLOCK THE FULL POTENTIAL OF OUR SERVICES.
                    </h2>
                    <h2 class="text-white h4 fw-semibold mt-4">
                        Sign up for a meeting now a convenient time for you!
                    </h2>
                    <button class="btn btn-primary border-0 rounded-4 shadow-none w-100 mt-4" style="background-color: #6bdcdb" type="button" data-bs-toggle="modal" data-bs-target="#exampleModal2">
                        <span class="fw-bold h5 d-block my-2">GO TO CALENDAR</span>
                    </button>
                </div>
            </div>
        </div>
    </div>

@endsection

@section('js')
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

        @foreach($services as $service)
        $(document).ready(function() {
            let url_{{ $service->slug }} = $("#{{ $service->slug }}_video").attr('src');

            $("#{{ $service->slug }}").on('hide.bs.modal', function() {
                $("#{{ $service->slug }}_video").attr('src', '');
                $("#{{ $service->slug }}_video").attr('src', url_{{ $service->slug }} );
            });

            {{--$("#{{ $service->slug }}").on('shown.bs.modal', function() {--}}
            {{--    $("#{{ $service->slug }}_video").attr('src', url_{{ $service->slug }} );--}}
            {{--});--}}
        });
        @endforeach

    </script>
@endsection
