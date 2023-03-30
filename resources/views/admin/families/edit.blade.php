@extends('adminlte::page')

@section('title', 'Dashboard | Edit family')

@section('content_header')
    <h1>Edit family</h1>
@stop

{{--@section('plugins.Summernote', true)--}}

@section('content')
    <div class="container-fluid">

        <div class="row">

            <div class="col-6">

                <form method="POST" enctype="multipart/form-data" action="{{ route('families.update', $family) }}">
                    @method('PUT')
                    @csrf

                    @error('show_status')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror

                    <div class="input-group flex-nowrap mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="addon-wrapping">Title</span>
                        </div>
                        <input value="{{ $family->title_en }}" type="text" name="title_en" id="title_en" class="form-control" aria-describedby="addon-wrapping" required>
                    </div>

                    <div class="input-group flex-nowrap mb-3">
                        <span class="input-group-text">Description</span>
                        <textarea name="description_en" id="description_en" class="form-control" aria-label="text">{{ $family->description_en }}</textarea>
                    </div>

                    <div class="input-group flex-nowrap mb-3">
                        <span class="input-group-text">Image</span>
                        <input class="form-control" type="file" name="image" id="image">
                    </div>

                    <div class="input-group flex-nowrap mb-3">
                        <span class="input-group-text">Download file</span>
                        <input class="form-control" type="file" name="file" id="file">
                    </div>

                    <button type="submit" class="btn btn-success">EDIT</button>
                </form>

            </div>

        </div>

    </div>
@stop
