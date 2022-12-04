@extends('master')

{{--@section('title', $page_info->__('title'))--}}

{{--@section('description', $page_info->description)--}}

@section('main')

    <div class="container-fluid" style="background-color: #68d1d3">

        <div class="container">
            <div class="row pb-5">
                <div class="col-12 order-first">
                    <div class="d-md-none">
                        <h1 class="text-white display-6 fw-bold mt-5">
                            BIMPROVE BLOG <span class="d-inline-block d-sm-none">M</span>
                            <span class="d-none d-sm-inline-block d-md-none">SM</span>
                            <span class="d-none d-md-inline-block d-lg-none">MD</span>
                            <span class="d-none d-lg-inline-block d-xl-none">LG</span>
                            <span class="d-none d-xl-inline-block d-xxl-none">XL</span>
                            <span class="d-none d-xxl-inline-block">XXL</span>
                        </h1>
                        <p class="text-white fw-bold pb-2">
                            We are a team of specialists with experience in implementing BIM-technologies. We believe that BIM is not a future - BIM is today, BIM is right now. Our main goal is the most effective application of BIM technologies at all stages of project development. We always look at the project tasks through the lenses of engineering perception, which allows us to be one step ahead.
                        </p>
                    </div>
                    <div class="d-none d-md-block">
                        <h1 class="text-white display-2 fw-bold mt-5 pt-md-0 pt-lg-5">
                            BIMPROVE BLOG <span class="d-inline-block d-sm-none">M</span>
                            <span class="d-none d-sm-inline-block d-md-none">SM</span>
                            <span class="d-none d-md-inline-block d-lg-none">MD</span>
                            <span class="d-none d-lg-inline-block d-xl-none">LG</span>
                            <span class="d-none d-xl-inline-block d-xxl-none">XL</span>
                            <span class="d-none d-xxl-inline-block">XXL</span>
                        </h1>
                        <h4 class="text-white fw-bold pb-2 w-75">
                            We are a team of specialists with experience in implementing BIM-technologies. We believe that BIM is not a future - BIM is today, BIM is right now. Our main goal is the most effective application of BIM technologies at all stages of project development. We always look at the project tasks through the lenses of engineering perception, which allows us to be one step ahead.
                        </h4>
                    </div>
                </div>

                <div class="col-12 col-md-5 col-lg-3 order-md-3 order-lg-4">

                    <div class="row d-none d-md-flex">
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
        <div class="container py-5">
            @for($i = 1; $i < 5; $i++)
                <div class="row pb-5 pb-sm-0 py-sm-5 ">
                    <div class="col-sm-6 col-md-5">
                        <img class="img-fluid w-100" src="images/600.png" alt="">
                    </div>
                    <div class="col-sm-6 col-md-7 px-lg-5">
                        <div class="row">
                            <h4 class="fw-bold">
                                10 REASONS TO TRANSFER FROM ARCHICAD TO BIM
                            </h4>
                            <h6 class="d-xl-none display-6 fw-bold">
                                10 REASONS TO TRANSFER FROM ARCHICAD TO BIM
                            </h6>
                            <h6 class="d-none d-xl-block display-3 fw-bold">
                                10 REASONS TO TRANSFER FROM ARCHICAD TO BIM
                            </h6>
                        </div>
                        <div class="row mb-sm-5">
                            <h6 class="d-md-none text-secondary">
                                Month, Day, Year - Time
                            </h6>
                            <h4 class="d-none d-md-block text-secondary">
                                Month, Day, Year - Time
                            </h4>
                        </div>
                        <div class="row mt-sm-5">
                            <div class="col-12 col-lg-7">
                                <button class="btn btn-primary btn-lg border-0 rounded-4 w-100" style="background-color: #6bdcdb" type="button">
                                    <span class="fw-bold h4 d-block my-2 mx-4">READ MORE</span>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            @endfor
        </div>

    </div>

    <div class="container-fluid" style="background-color: #b0c0c3">
        <div class="container">
            <div class="row pb-5">
                <div class="col-12 col-lg-6">

                    <h2 class="text-white display-6 fw-bold mt-5 d-lg-none">CONTACT US</h2>
                    <h2 class="text-white display-5 fw-bold pb-2 pt-5 mt-5 d-none d-lg-block">CONTACT US</h2>

{{--                    <h2 class="text-white display-6 fw-bold mt-5">CONTACT US</h2>--}}
                    <form class="text-white" action="post">
                        <div class="mb-5">
                            <input type="text" name="name" class="form-control fw-bold shadow-none border-0 border-bottom border-white border-5 text-white" id="exampleFormControlInput1" placeholder="Name">
                        </div>
                        <div class="mb-5">
                            <input type="email" name="email" class="form-control fw-bold shadow-none border-0 border-bottom border-white border-5 text-white" id="exampleFormControlInput2" placeholder="Email">
                        </div>
                        <div class="mb-5">
                            <input type="text" name="phone" class="form-control fw-bold shadow-none border-0 border-bottom border-white border-5 text-white" id="exampleFormControlInput3" placeholder="Phone">
                        </div>
                        <div class="mb-5">
                            <input type="text" name="company" class="form-control fw-bold shadow-none border-0 border-bottom border-white border-5 text-white" id="exampleFormControlInput4" placeholder="Company">
                        </div>
                        <div class="mb-5">
                            <input type="text" name="message" class="form-control fw-bold shadow-none border-0 border-bottom border-white border-5 text-white" id="exampleFormControlInput5" placeholder="Message">
                        </div>

                        <button type="submit" class="btn btn-primary btn-lg border-0 w-100 mx-auto fw-bold d-lg-none" style="background-color: #6bdcdb">
                            <span class="fw-bold h6 d-block my-1">SUBMIT</span>
                        </button>

                        <button type="submit" class="btn btn-primary btn-lg border-0 w-50 fw-bold d-none d-lg-block" style="background-color: #6bdcdb">
                            <span class="fw-bold h4 d-block my-1">SUBMIT</span>
                        </button>

                    </form>
                </div>

                <div class="col-12 col-md-6 d-none d-lg-block ps-5">

                    <h2 class="text-white display-6 fw-bold mt-5 d-lg-none">SOCIAL MEDIA</h2>
                    <h2 class="text-white display-5 fw-bold pb-2 pt-5 mt-5 d-none d-lg-block">SOCIAL MEDIA</h2>

{{--                    <h2 class="text-white display-6 fw-bold mt-5">SOCIAL MEDIA</h2>--}}
                    <a href="#" class="text-white h4 text-decoration-none">
                        <div class="row mb-3">
                            <div class="col-2"><i class="lab la-2x la-linkedin-in"></i></div>
                            <div class="col-10 px-0 pt-3"><h4 class="fw-bold mb-0 me-0 ms-2">BIMprove LLC</h4></div>
                        </div>
                    </a>
                    <a href="#" class="text-white h4 text-decoration-none">
                        <div class="row mb-3">
                            <div class="col-2"><i class="lab la-2x la-instagram"></i></div>
                            <div class="col-10 px-0 pt-3"><h5 class="fw-bold mb-0 me-0 ms-2">@bimprove</h5></div>
                        </div>
                    </a>
                    <a href="#" class="text-white h4 text-decoration-none">
                        <div class="row">
                            <div class="col-2"><i class="lab la-2x la-facebook-f"></i></div>
                            <div class="col-10 px-0 pt-3"><h5 class="fw-bold mb-0 me-0 ms-2 ">@bimproveworld</h5></div>
                        </div>
                    </a>

                    <h2 class="text-white display-6 fw-bold mt-5 d-lg-none">CONTACTS</h2>
                    <h2 class="text-white display-5 fw-bold pb-2 pt-5 mt-5 d-none d-lg-block">CONTACTS</h2>

{{--                    <h2 class="text-white display-6 fw-bold mt-5">CONTACTS</h2>--}}
                    <a href="#" class="text-white h4 text-decoration-none">
                        <div class="row mb-3">
                            <div class="col-2"><i class="las la-2x la-phone"></i></div>
                            <div class="col-10 px-0 pt-3"><h5 class="fw-bold mb-0 me-0 ms-2">+380668901648</h5></div>
                        </div>
                    </a>
                    <a href="#" class="text-white h4 text-decoration-none">
                        <div class="row">
                            <div class="col-2"><i class="las la-2x la-envelope"></i></div>
                            <div class="col-10 px-0 pt-3"><h5 class="fw-bold mb-0 me-0 ms-2 ms-md-1">es@bim-prove.com</h5></div>
                        </div>
                    </a>

                </div>

                <div class="col-12 col-md-6 d-lg-none">
                    <h2 class="text-white display-6 fw-bold mt-5">SOCIAL MEDIA</h2>
                    <a href="#" class="text-white h4 text-decoration-none">
                        <div class="row mb-3">
                            <div class="col-2"><i class="lab la-2x la-linkedin-in"></i></div>
                            <div class="col-10 px-0 pt-3"><h4 class="fw-bold mb-0 me-0 ms-2">BIMprove LLC</h4></div>
                        </div>
                    </a>
                    <a href="#" class="text-white h4 text-decoration-none">
                        <div class="row mb-3">
                            <div class="col-2"><i class="lab la-2x la-instagram"></i></div>
                            <div class="col-10 px-0 pt-3"><h5 class="fw-bold mb-0 me-0 ms-2">@bimprove</h5></div>
                        </div>
                    </a>
                    <a href="#" class="text-white h4 text-decoration-none">
                        <div class="row">
                            <div class="col-2"><i class="lab la-2x la-facebook-f"></i></div>
                            <div class="col-10 px-0 pt-3"><h5 class="fw-bold mb-0 me-0 ms-2 ">@bimproveworld</h5></div>
                        </div>
                    </a>
                </div>

                <div class="col-12 col-md-6 d-lg-none ps-md-4">
                    <h2 class="text-white display-6 fw-bold mt-5">CONTACTS</h2>
                    <a href="#" class="text-white h4 text-decoration-none">
                        <div class="row mb-3">
                            <div class="col-2"><i class="las la-2x la-phone"></i></div>
                            <div class="col-10 px-0 pt-3"><h5 class="fw-bold mb-0 me-0 ms-2">+380668901648</h5></div>
                        </div>
                    </a>
                    <a href="#" class="text-white h4 text-decoration-none">
                        <div class="row">
                            <div class="col-2"><i class="las la-2x la-envelope"></i></div>
                            <div class="col-10 px-0 pt-3"><h5 class="fw-bold mb-0 me-0 ms-2 ms-md-1">es@bim-prove.com</h5></div>
                        </div>
                    </a>
                </div>
            </div>
        </div>

    </div>

@endsection
