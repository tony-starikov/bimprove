@extends('adminlte::page')

@section('title', 'Dashboard | Edit star: {{ $star->title_en }}')

@section('content_header')
    <h1>Edit star: {{ $star->title_en }}</h1>
@stop

{{--@section('plugins.Summernote', true)--}}

@section('content')
    <div class="container-fluid">

        <div class="row">

            <div class="col-6">

                <form method="POST" enctype="multipart/form-data" action="{{ route('stars.update', $star) }}">
                    @method('PUT')
                    @csrf

                    @error('show_status')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror

                    <div class="input-group flex-nowrap mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="addon-wrapping">TITLE EN</span>
                        </div>
                        <input value="{{ $star->title_en }}" type="text" name="title_en" id="title_en" class="form-control" placeholder="REQUIRED" aria-describedby="addon-wrapping" required>
                    </div>

                    <div class="input-group flex-nowrap mb-3">
                        <span class="input-group-text">DESCRIPTION EN</span>
                        <textarea name="description_en" id="description_en" class="form-control" aria-label="description_en">{{ $star->description_en }}</textarea>
                    </div>

                    <div class="input-group flex-nowrap mb-3">
                        <span class="input-group-text">IMAGE</span>
                        <input class="form-control" type="file" name="image" id="image">
                    </div>

                    <div class="input-group flex-nowrap mb-3">
                        <span class="input-group-text">IMAGE SMALL</span>
                        <input class="form-control" type="file" name="image_small" id="image_small">
                    </div>

                    <button type="submit" class="btn btn-success">EDIT</button>
                </form>

            </div>

        </div>

    </div>
@stop
