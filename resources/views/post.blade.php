@extends('master')

{{--@section('title', $page_info->__('title'))--}}

{{--@section('description', $page_info->description)--}}

@section('main')

    <div class="container-fluid d-none d-xxl-block" style="background: url(/images/main_page/cubes.png) no-repeat center center local; background-size: cover;">
        <div class="container p-5">
            <div class="row p-5 mt-5">
                <div class="col-5 px-0 ps-2">
                    <img class="img-fluid w-100" src="/images/{{ $post->image }}" alt="">
                </div>
                <div class="col-7 px-0 ps-4 align-self-stretch position-relative">
                    <div class="row">
                        <h6 class="h1 text-white fw-bold">
                            {{ $post->title_en }}
                        </h6>
                    </div>
                    <div class="row">
                        <h5 class="text-white">
                            Month, Day, Year - Time
                        </h5>
                    </div>
                    <div class="row w-100 position-absolute bottom-0">
                        <div class="col-12">
                            <a href="{{ route('contact') }}" role="button" class="btn btn-primary btn-lg border-0 rounded-4 shadow-none w-50" style="background-color: #43aeb6">
                                <span class="fw-bold h4 d-block my-1">CONTACT US</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid d-none d-xl-block d-xxl-none" style="background: url(/images/main_page/cubes.png) no-repeat center center local; background-size: cover;">
        <div class="container p-5">
            <div class="row p-5 mt-5">
                <div class="col-5 px-0 ps-2">
                    <img class="img-fluid w-100" src="/images/{{ $post->image }}" alt="">
                </div>
                <div class="col-7 px-0 ps-4 align-self-stretch position-relative">
                    <div class="row">
                        <h6 class="h2 text-white fw-bold">
                            {{ $post->title_en }}
                        </h6>
                    </div>
                    <div class="row">
                        <h5 class="text-white">
                            Month, Day, Year - Time
                        </h5>
                    </div>
                    <div class="row w-100 position-absolute bottom-0">
                        <div class="col-12">
                            <a href="{{ route('contact') }}" role="button" class="btn btn-primary btn-lg border-0 rounded-4 shadow-none w-50" style="background-color: #43aeb6">
                                <span class="fw-bold h4 d-block my-1">CONTACT US</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid d-none d-lg-block d-xl-none" style="background: url(/images/main_page/cubes.png) no-repeat center center local; background-size: cover;">
        <div class="container p-5">
            <div class="row p-5 mt-5">
                <div class="col-5 px-0 ps-2">
                    <img class="img-fluid w-100" src="/images/{{ $post->image }}" alt="">
                </div>
                <div class="col-7 px-0 ps-4 align-self-stretch position-relative">
                    <div class="row">
                        <h6 class="h3 text-white fw-bold">
                            {{ $post->title_en }}
                        </h6>
                    </div>
                    <div class="row">
                        <h6 class="text-white">
                            Month, Day, Year - Time
                        </h6>
                    </div>
                    <div class="row w-100 position-absolute bottom-0">
                        <div class="col-12">
                            <a href="{{ route('contact') }}" role="button" class="btn btn-primary btn-lg border-0 rounded-4 shadow-none w-50" style="background-color: #43aeb6">
                                <span class="fw-bold h4 d-block my-1">CONTACT US</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid d-none d-md-block d-lg-none" style="background: url(/images/main_page/cubes.png) no-repeat center center local; background-size: cover;">
        <div class="container py-5">
            <div class="row mt-5">
                <div class="col-12 px-0">
                    <img class="img-fluid w-100" src="/images/{{ $post->image }}" alt="">
                </div>
                <div class="col-12 px-0 mt-2 align-self-stretch position-relative">
                    <div class="row">
                        <h6 class="h3 text-white fw-bold">
                            {{ $post->title_en }}
                        </h6>
                    </div>
                    <div class="row">
                        <h6 class="text-white">
                            Month, Day, Year - Time
                        </h6>
                    </div>
                    <div class="row w-100">
                        <div class="col-12">
                            <a href="{{ route('contact') }}" role="button" class="btn btn-primary btn-lg border-0 rounded-4 shadow-none w-50" style="background-color: #43aeb6">
                                <span class="fw-bold h4 d-block my-1">CONTACT US</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid d-none d-sm-block d-md-none" style="background: url(/images/main_page/cubes.png) no-repeat center center local; background-size: cover;">
        <div class="container py-5">
            <div class="row mt-5">
                <div class="col-12 px-0">
                    <img class="img-fluid w-100" src="/images/{{ $post->image }}" alt="">
                </div>
                <div class="col-12 px-0 mt-2 align-self-stretch position-relative">
                    <div class="row">
                        <h6 class="h3 text-white fw-bold">
                            {{ $post->title_en }}
                        </h6>
                    </div>
                    <div class="row">
                        <h6 class="text-white">
                            Month, Day, Year - Time
                        </h6>
                    </div>
                    <div class="row w-100">
                        <div class="col-12">
                            <a href="{{ route('contact') }}" role="button" class="btn btn-primary btn-lg border-0 rounded-4 shadow-none w-50" style="background-color: #43aeb6">
                                <span class="fw-bold h4 d-block my-1">CONTACT US</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid d-sm-none" style="background: url(/images/main_page/cubes.png) no-repeat center center local; background-size: cover;">
        <div class="container py-5">
            <div class="row mt-5">
                <div class="col-12 px-0">
                    <img class="img-fluid w-100" src="/images/{{ $post->image }}" alt="">
                </div>
                <div class="col-12 px-0 mt-2 align-self-stretch position-relative">
                    <div class="row">
                        <h6 class="h3 text-white fw-bold">
                            {{ $post->title_en }}
                        </h6>
                    </div>
                    <div class="row">
                        <h6 class="text-white">
                            Month, Day, Year - Time
                        </h6>
                    </div>
                    <div class="row w-100">
                        <div class="col-12">
                            <a href="{{ route('contact') }}" role="button" class="btn btn-primary btn-lg border-0 rounded-4 shadow-none w-100" style="background-color: #43aeb6">
                                <span class="fw-bold h4 d-block my-1">CONTACT US</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="container-fluid d-none d-lg-block">
        <div class="container p-5 pb-3">

            <div class="row p-5">
                <div class="col-12">
                    {!! $post->content !!}
                </div>
            </div>

{{--            <div class="row mt-5 pt-5">--}}
{{--                <div class="col-12">--}}

{{--                    <div class="row d-none d-md-flex pb-5 justify-content-center">--}}
{{--                        <div class="col-md-7 col-lg-6 col-xl-5 col-xxl-4 mt-4 px-md-2 ps-lg-0">--}}
{{--                            <a class="btn btn-primary btn-lg border-0 rounded-4 w-100" style="background-color: #6bdcdb" href="{{ route('subscribe') }}" role="button">--}}
{{--                                <span class="fw-bold h4 d-block my-1">SUBSCRIBE TO OUR BLOG</span>--}}
{{--                            </a>--}}
{{--                        </div>--}}
{{--                    </div>--}}

{{--                    <div class="row d-md-none justify-content-center">--}}
{{--                        <div class="col-8 mt-4 px-md-5 ps-lg-0">--}}
{{--                            <a class="btn btn-primary btn-lg border-0 rounded-4 w-100" style="background-color: #6bdcdb" href="{{ route('subscribe') }}" role="button">--}}
{{--                                <span class="fw-bold h6 d-block my-1">SUBSCRIBE TO OUR BLOG</span>--}}
{{--                            </a>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}

{{--            <div class="row">--}}
{{--                <div class="col-12">--}}
{{--                    <div id="carouselExampleControls" class="carousel carousel-dark slide" data-bs-ride="carousel">--}}
{{--                        <div class="carousel-inner px-5">--}}
{{--                            <div class="carousel-item active">--}}
{{--                                <div class="card border-0">--}}
{{--                                    <div class="card-body">--}}
{{--                                        <div class="row px-5 pb-5 pb-sm-0 py-sm-5 ">--}}
{{--                                            <div class="col-sm-12 col-lg-6">--}}
{{--                                                <a href="#">--}}
{{--                                                    <img class="img-fluid w-100" src="/images/600.png" alt="">--}}
{{--                                                </a>--}}
{{--                                            </div>--}}
{{--                                            <div class="col-sm-12 col-lg-6 ps-lg-5">--}}
{{--                                                <div class="row">--}}
{{--                                                    <a class="text-dark text-decoration-none" href="#">--}}
{{--                                                        <h6 class="d-xl-none display-6 fw-bold">--}}
{{--                                                            10 REASONS TO TRANSFER--}}
{{--                                                        </h6>--}}
{{--                                                    </a>--}}
{{--                                                    <a class="text-dark text-decoration-none" href="#">--}}
{{--                                                        <h6 class="d-none d-xl-block display-3 fw-bold">--}}
{{--                                                            10 REASONS TO TRANSFER--}}
{{--                                                        </h6>--}}
{{--                                                    </a>--}}
{{--                                                </div>--}}
{{--                                                <div class="row mb-sm-5">--}}
{{--                                                    <h6 class="d-md-none text-secondary">--}}
{{--                                                        Month, Day, Year - Time--}}
{{--                                                    </h6>--}}
{{--                                                    <h4 class="d-none d-md-block text-secondary">--}}
{{--                                                        Month, Day, Year - Time--}}
{{--                                                    </h4>--}}
{{--                                                </div>--}}
{{--                                                <div class="row mt-sm-5">--}}
{{--                                                    <div class="col-12 col-lg-7">--}}
{{--                                                        <a class="btn btn-primary btn-lg border-0 rounded-4 w-100" style="background-color: #6bdcdb" href="#" role="button">--}}
{{--                                                            <span class="fw-bold h4 d-block my-2 mx-4">READ MORE</span>--}}
{{--                                                        </a>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="carousel-item">--}}
{{--                                <div class="card border-0">--}}
{{--                                    <div class="card-body">--}}
{{--                                        <div class="row px-5 pb-5 pb-sm-0 py-sm-5 ">--}}
{{--                                            <div class="col-sm-12 col-lg-6">--}}
{{--                                                <a href="#">--}}
{{--                                                    <img class="img-fluid w-100" src="/images/600.png" alt="">--}}
{{--                                                </a>--}}
{{--                                            </div>--}}
{{--                                            <div class="col-sm-12 col-lg-6 ps-lg-5">--}}
{{--                                                <div class="row">--}}
{{--                                                    <a class="text-dark text-decoration-none" href="#">--}}
{{--                                                        <h6 class="d-xl-none display-6 fw-bold">--}}
{{--                                                            10 REASONS TO TRANSFER--}}
{{--                                                        </h6>--}}
{{--                                                    </a>--}}
{{--                                                    <a class="text-dark text-decoration-none" href="#">--}}
{{--                                                        <h6 class="d-none d-xl-block display-3 fw-bold">--}}
{{--                                                            10 REASONS TO TRANSFER--}}
{{--                                                        </h6>--}}
{{--                                                    </a>--}}
{{--                                                </div>--}}
{{--                                                <div class="row mb-sm-5">--}}
{{--                                                    <h6 class="d-md-none text-secondary">--}}
{{--                                                        Month, Day, Year - Time--}}
{{--                                                    </h6>--}}
{{--                                                    <h4 class="d-none d-md-block text-secondary">--}}
{{--                                                        Month, Day, Year - Time--}}
{{--                                                    </h4>--}}
{{--                                                </div>--}}
{{--                                                <div class="row mt-sm-5">--}}
{{--                                                    <div class="col-12 col-lg-7">--}}
{{--                                                        <a class="btn btn-primary btn-lg border-0 rounded-4 w-100" style="background-color: #6bdcdb" href="#" role="button">--}}
{{--                                                            <span class="fw-bold h4 d-block my-2 mx-4">READ MORE</span>--}}
{{--                                                        </a>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <button class="carousel-control-prev" style="width: 50px" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">--}}
{{--                            <img src="/images/slider_arrow_left.png" aria-hidden="true">--}}
{{--                            <span class="visually-hidden">Previous</span>--}}
{{--                        </button>--}}
{{--                        <button class="carousel-control-next" style="width: 50px" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">--}}
{{--                            <img src="/images/slider_arrow_right.png" aria-hidden="true">--}}
{{--                            <span class="visually-hidden">Next</span>--}}
{{--                        </button>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
        </div>
    </div>

    <div class="container-fluid d-lg-none">
        <div class="container pt-5 pb-2">

            <div class="row">
                <div class="col-12">
                    {!! $post->content !!}
                </div>
            </div>

            {{--            <div class="row mt-5 pt-5">--}}
            {{--                <div class="col-12">--}}

            {{--                    <div class="row d-none d-md-flex pb-5 justify-content-center">--}}
            {{--                        <div class="col-md-7 col-lg-6 col-xl-5 col-xxl-4 mt-4 px-md-2 ps-lg-0">--}}
            {{--                            <a class="btn btn-primary btn-lg border-0 rounded-4 w-100" style="background-color: #6bdcdb" href="{{ route('subscribe') }}" role="button">--}}
            {{--                                <span class="fw-bold h4 d-block my-1">SUBSCRIBE TO OUR BLOG</span>--}}
            {{--                            </a>--}}
            {{--                        </div>--}}
            {{--                    </div>--}}

            {{--                    <div class="row d-md-none justify-content-center">--}}
            {{--                        <div class="col-8 mt-4 px-md-5 ps-lg-0">--}}
            {{--                            <a class="btn btn-primary btn-lg border-0 rounded-4 w-100" style="background-color: #6bdcdb" href="{{ route('subscribe') }}" role="button">--}}
            {{--                                <span class="fw-bold h6 d-block my-1">SUBSCRIBE TO OUR BLOG</span>--}}
            {{--                            </a>--}}
            {{--                        </div>--}}
            {{--                    </div>--}}
            {{--                </div>--}}
            {{--            </div>--}}

            {{--            <div class="row">--}}
            {{--                <div class="col-12">--}}
            {{--                    <div id="carouselExampleControls" class="carousel carousel-dark slide" data-bs-ride="carousel">--}}
            {{--                        <div class="carousel-inner px-5">--}}
            {{--                            <div class="carousel-item active">--}}
            {{--                                <div class="card border-0">--}}
            {{--                                    <div class="card-body">--}}
            {{--                                        <div class="row px-5 pb-5 pb-sm-0 py-sm-5 ">--}}
            {{--                                            <div class="col-sm-12 col-lg-6">--}}
            {{--                                                <a href="#">--}}
            {{--                                                    <img class="img-fluid w-100" src="/images/600.png" alt="">--}}
            {{--                                                </a>--}}
            {{--                                            </div>--}}
            {{--                                            <div class="col-sm-12 col-lg-6 ps-lg-5">--}}
            {{--                                                <div class="row">--}}
            {{--                                                    <a class="text-dark text-decoration-none" href="#">--}}
            {{--                                                        <h6 class="d-xl-none display-6 fw-bold">--}}
            {{--                                                            10 REASONS TO TRANSFER--}}
            {{--                                                        </h6>--}}
            {{--                                                    </a>--}}
            {{--                                                    <a class="text-dark text-decoration-none" href="#">--}}
            {{--                                                        <h6 class="d-none d-xl-block display-3 fw-bold">--}}
            {{--                                                            10 REASONS TO TRANSFER--}}
            {{--                                                        </h6>--}}
            {{--                                                    </a>--}}
            {{--                                                </div>--}}
            {{--                                                <div class="row mb-sm-5">--}}
            {{--                                                    <h6 class="d-md-none text-secondary">--}}
            {{--                                                        Month, Day, Year - Time--}}
            {{--                                                    </h6>--}}
            {{--                                                    <h4 class="d-none d-md-block text-secondary">--}}
            {{--                                                        Month, Day, Year - Time--}}
            {{--                                                    </h4>--}}
            {{--                                                </div>--}}
            {{--                                                <div class="row mt-sm-5">--}}
            {{--                                                    <div class="col-12 col-lg-7">--}}
            {{--                                                        <a class="btn btn-primary btn-lg border-0 rounded-4 w-100" style="background-color: #6bdcdb" href="#" role="button">--}}
            {{--                                                            <span class="fw-bold h4 d-block my-2 mx-4">READ MORE</span>--}}
            {{--                                                        </a>--}}
            {{--                                                    </div>--}}
            {{--                                                </div>--}}
            {{--                                            </div>--}}
            {{--                                        </div>--}}
            {{--                                    </div>--}}
            {{--                                </div>--}}
            {{--                            </div>--}}
            {{--                            <div class="carousel-item">--}}
            {{--                                <div class="card border-0">--}}
            {{--                                    <div class="card-body">--}}
            {{--                                        <div class="row px-5 pb-5 pb-sm-0 py-sm-5 ">--}}
            {{--                                            <div class="col-sm-12 col-lg-6">--}}
            {{--                                                <a href="#">--}}
            {{--                                                    <img class="img-fluid w-100" src="/images/600.png" alt="">--}}
            {{--                                                </a>--}}
            {{--                                            </div>--}}
            {{--                                            <div class="col-sm-12 col-lg-6 ps-lg-5">--}}
            {{--                                                <div class="row">--}}
            {{--                                                    <a class="text-dark text-decoration-none" href="#">--}}
            {{--                                                        <h6 class="d-xl-none display-6 fw-bold">--}}
            {{--                                                            10 REASONS TO TRANSFER--}}
            {{--                                                        </h6>--}}
            {{--                                                    </a>--}}
            {{--                                                    <a class="text-dark text-decoration-none" href="#">--}}
            {{--                                                        <h6 class="d-none d-xl-block display-3 fw-bold">--}}
            {{--                                                            10 REASONS TO TRANSFER--}}
            {{--                                                        </h6>--}}
            {{--                                                    </a>--}}
            {{--                                                </div>--}}
            {{--                                                <div class="row mb-sm-5">--}}
            {{--                                                    <h6 class="d-md-none text-secondary">--}}
            {{--                                                        Month, Day, Year - Time--}}
            {{--                                                    </h6>--}}
            {{--                                                    <h4 class="d-none d-md-block text-secondary">--}}
            {{--                                                        Month, Day, Year - Time--}}
            {{--                                                    </h4>--}}
            {{--                                                </div>--}}
            {{--                                                <div class="row mt-sm-5">--}}
            {{--                                                    <div class="col-12 col-lg-7">--}}
            {{--                                                        <a class="btn btn-primary btn-lg border-0 rounded-4 w-100" style="background-color: #6bdcdb" href="#" role="button">--}}
            {{--                                                            <span class="fw-bold h4 d-block my-2 mx-4">READ MORE</span>--}}
            {{--                                                        </a>--}}
            {{--                                                    </div>--}}
            {{--                                                </div>--}}
            {{--                                            </div>--}}
            {{--                                        </div>--}}
            {{--                                    </div>--}}
            {{--                                </div>--}}
            {{--                            </div>--}}
            {{--                        </div>--}}
            {{--                        <button class="carousel-control-prev" style="width: 50px" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">--}}
            {{--                            <img src="/images/slider_arrow_left.png" aria-hidden="true">--}}
            {{--                            <span class="visually-hidden">Previous</span>--}}
            {{--                        </button>--}}
            {{--                        <button class="carousel-control-next" style="width: 50px" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">--}}
            {{--                            <img src="/images/slider_arrow_right.png" aria-hidden="true">--}}
            {{--                            <span class="visually-hidden">Next</span>--}}
            {{--                        </button>--}}
            {{--                    </div>--}}
            {{--                </div>--}}
            {{--            </div>--}}
        </div>
    </div>

@endsection
