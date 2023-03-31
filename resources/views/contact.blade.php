@extends('master')

{{--@section('title', $page_info->__('title'))--}}

{{--@section('description', $page_info->description)--}}

@section('main')
    <div class="container-fluid" style="background-color: #bacacd">
        <div class="container p-5">
            <div class="row px-5 my-5">
                <div class="col-6 mt-5">
                    <h2 class="text-white display-4 fw-bold pb-2 d-none d-lg-block mt-2">CONTACT US</h2>

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
                <div class="col-6 mt-5 d-flex align-items-center">
                    <h2 class="p-5 text-white h2 fw-semibold">
                        <small>
                            Unlock your AEC company's full potential with our customized BIM support, delivering a five-star service experience tailored specifically for you.
                        </small>
                    </h2>
                </div>
            </div>
        </div>
    </div>
@endsection
