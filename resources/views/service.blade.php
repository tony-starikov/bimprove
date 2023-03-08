@extends('master')

{{--@section('title', $page_info->__('title'))--}}

{{--@section('description', $page_info->description)--}}

@section('main')
    <div class="container-fluid d-none d-xxl-block" style="background-color: #68d1d3">
        <div class="container p-5">
            <div class="row px-5 mt-5">
                <div class="col-5 p-2 mt-5">
                    <img src="/images/image_big_1.png" class="image-fluid w-100" alt="">
                </div>

                <div class="col-7 mt-5">
                    <div class="card bg-transparent border-0 ps-5 h-100">
                        <div class="card-body bg-transparent">
                            <h2 class="text-black fw-bold display-5">
                                THE INDIVIDUAL<br>FIVE-STAR
                                <span class="d-inline-block d-sm-none">M</span>
                                <span class="d-none d-sm-inline-block d-md-none">SM</span>
                                <span class="d-none d-md-inline-block d-lg-none">MD</span>
                                <span class="d-none d-lg-inline-block d-xl-none">LG</span>
                                <span class="d-none d-xl-inline-block d-xxl-none">XL</span>
                                <span class="d-none d-xxl-inline-block">XXL</span>
                            </h2>
                            <h2 class="text-white fw-bold text-uppercase display-3">
                                {{ $service->title_en }}<br>SERVICE
                            </h2>
                        </div>
                        <div class="card-footer bg-transparent border-0">
                            <button class="btn btn-primary shadow-none btn-lg border-0 rounded-4 w-50" style="background-color: #43aeb6" type="button" data-bs-toggle="modal" data-bs-target="#exampleModal2">
                                <span class="fw-bold h4 d-block my-2">CONTACT US</span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>





    <div class="container-fluid d-none d-xxl-block">
        <div class="container p-5">
            <div class="row px-5 mt-5">
                <div class="col-12">
                    {!! $service->content !!}
                </div>
            </div>

        </div>
    </div>





    <div class="container-fluid d-none d-xxl-block">
        <div class="container p-5">
            <div class="row">
                <div class="col-12 d-flex justify-content-center">
                    <button class="btn btn-primary shadow-none btn-lg border-0 rounded-4 w-50" style="background-color: #6bdcdb" type="button" data-bs-toggle="modal" data-bs-target="#exampleModal2">
                        <span class="fw-bold h4 d-block my-2">DOWNLOAD PRESENTATION</span>
                    </button>
                </div>
            </div>

        </div>
    </div>

@endsection
