@extends('adminlte::page')

@section('title', 'Dashboard | Edit plugin')

@section('content_header')
    <h1>Edit plugin</h1>
@stop

{{--@section('plugins.Summernote', true)--}}

@section('content')
    <div class="container-fluid">

        <div class="row">

            <div class="col-6">

                <form method="POST" enctype="multipart/form-data" action="{{ route('plugins.update', $plugin) }}">
                    @method('PUT')
                    @csrf

                    @error('show_status')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror

                    <div class="input-group flex-nowrap mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="addon-wrapping">Title</span>
                        </div>
                        <input value="{{ $plugin->title_en }}" type="text" name="title_en" id="title_en" class="form-control" aria-describedby="addon-wrapping" required>
                    </div>

                    <div class="input-group flex-nowrap mb-3">
                        <span class="input-group-text">Description</span>
                        <textarea name="description_en" id="description_en" class="form-control" aria-label="text" required>{{ $plugin->description_en }}</textarea>
                    </div>

                    <div class="input-group flex-nowrap mb-3">
                        <span class="input-group-text">Youtube URL</span>
                        <textarea name="video_url" id="video_url" class="form-control" aria-label="text" required>{{ $plugin->video_url }}</textarea>
                    </div>

                    <div class="input-group flex-nowrap mb-3">
                        <span class="input-group-text">Image</span>
                        <input class="form-control" type="file" name="image" id="image">
                    </div>

                    <div class="input-group flex-nowrap mb-3">
                        <span class="input-group-text">Logo</span>
                        <input class="form-control" type="file" name="logo" id="logo">
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
