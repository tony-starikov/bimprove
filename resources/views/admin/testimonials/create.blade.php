@extends('adminlte::page')

@section('title', 'Dashboard | Create testimonial')

@section('content_header')
    <h1>Add new testimonial</h1>
@stop

{{--@section('plugins.Summernote', true)--}}

@section('content')
    <div class="container-fluid">

        <div class="row">

            <div class="col-6">

                <form method="POST" enctype="multipart/form-data" action="{{ route('testimonials.store') }}">
                    @csrf

                    @error('name')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror

                    <div class="input-group flex-nowrap mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="addon-wrapping">Name</span>
                        </div>
                        <input type="text" name="name" id="name" class="form-control" aria-describedby="addon-wrapping" required>
                    </div>

                    <div class="input-group flex-nowrap mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="addon-wrapping">Surname</span>
                        </div>
                        <input type="text" name="surname" id="surname" class="form-control" aria-describedby="addon-wrapping" required>
                    </div>

                    <div class="input-group flex-nowrap mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="addon-wrapping">Profession</span>
                        </div>
                        <input type="text" name="profession" id="profession" class="form-control" aria-describedby="addon-wrapping" required>
                    </div>

                    <div class="input-group flex-nowrap mb-3">
                        <span class="input-group-text">Text</span>
                        <textarea name="text" id="text" class="form-control" aria-label="text"></textarea>
                    </div>

                    <div class="input-group flex-nowrap mb-3">
                        <span class="input-group-text">Image</span>
                        <input class="form-control" type="file" name="image" id="image" required>
                    </div>

                    <button type="submit" class="btn btn-success">ADD</button>
                </form>

            </div>

        </div>

    </div>
@stop
