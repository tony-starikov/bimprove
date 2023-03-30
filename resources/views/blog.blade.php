@extends('master')

{{--@section('title', $page_info->__('title'))--}}

{{--@section('description', $page_info->description)--}}

@section('main')

    <div class="container-fluid" style="background: url(/images/main_page/background.png) no-repeat center center local; background-size: cover;">

        <div class="container p-5">
            <div class="row px-5 mt-2">
                <div class="col-12 px-0 mt-5 order-first">
                    <h1 class="text-white display-5 fw-bold mt-5">
                        BIMPROVE BLOG <span class="d-inline-block d-sm-none">M</span>
                        <span class="d-none d-sm-inline-block d-md-none">SM</span>
                        <span class="d-none d-md-inline-block d-lg-none">MD</span>
                        <span class="d-none d-lg-inline-block d-xl-none">LG</span>
                        <span class="d-none d-xl-inline-block d-xxl-none">XL</span>
                        <span class="d-none d-xxl-inline-block">XXL</span>
                    </h1>
                    <h4 class="text-white fw-bold pb-2">
                        We are a team of specialists with experience in implementing BIM-technologies. We believe that BIM is not a future - BIM is today, BIM is right now. Our main goal is the most effective application of BIM technologies at all stages of project development. We always look at the project tasks through the lenses of engineering perception, which allows us to be one step ahead.
                    </h4>
                </div>

                <div class="col-12 col-md-5 col-lg-3 order-md-3 order-lg-4">

                    <div class="row d-none d-md-flex pb-5">
                        <div class="col-6 col-md-12 mt-4 px-md-2 ps-lg-0">
                            <button class="btn btn-primary btn-lg border-0 rounded-4 w-100" style="background-color: #43aeb6" type="button">
                                <span class="fw-bold h4 d-block my-1">CONTACT US</span>
                            </button>
                        </div>
                    </div>

                    <div class="row d-md-none">
                        <div class="col-6 col-md-12 mt-4 px-md-5 ps-lg-0">
                            <button class="btn btn-primary btn-lg border-0 rounded-4 w-100" style="background-color: #43aeb6" type="button">
                                <span class="fw-bold h6 d-block my-1">CONTACT US</span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid">
        <div class="container p-5">
            @foreach($posts as $post)
                <div class="row p-5">
                    <div class="col-sm-6 col-md-5">
                        <a href="{{ route('post', $post) }}">
                            <img class="img-fluid w-100" src="/images/600.png" alt="">
                        </a>
                    </div>
                    <div class="col-sm-6 col-md-7 px-lg-5 align-self-stretch position-relative">
                        <div class="row">
                            <a class="text-dark text-decoration-none" href="{{ route('post', $post) }}">
                                <h6 class="d-xl-none display-5 fw-bold">
                                    {{ $post->title_en }}
                                </h6>
                            </a>
                            <a class="text-dark text-decoration-none" href="{{ route('post', $post) }}">
                                <h6 class="d-none d-xl-block display-5 fw-bold">
                                    {{ $post->title_en }}
                                </h6>
                            </a>
                        </div>
                        <div class="row mb-sm-5">
                            <h6 class="d-md-none text-secondary">
                                Month, Day, Year - Time
                            </h6>
                            <h4 class="d-none d-md-block text-secondary">
                                Month, Day, Year - Time
                            </h4>
                        </div>
                        <div class="row mt-sm-5 w-100 position-absolute bottom-0">
                            <div class="col-12 col-lg-7">
                                <a class="btn btn-primary btn-lg border-0 rounded-4 w-100 shadow-none" style="background-color: #6bdcdb" href="{{ route('post', $post) }}" role="button">
                                    <span class="fw-bold h4 d-block my-2 mx-4">READ MORE</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="d-flex justify-content-center mt-5 py-5">
                        {{ $posts->links('vendor.pagination.custom') }}
                    </div>
                </div>
            </div>
        </div>

    </div>

@endsection
