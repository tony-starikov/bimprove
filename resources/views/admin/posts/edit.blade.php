@extends('adminlte::page')

@section('title', 'Dashboard | Posts')

@section('content_header')
    <h1>Edit the post</h1>
@stop

@section('plugins.Summernote', true)

@section('content')
    <div class="container-fluid">

        <div class="row">

            <div class="col-6">

                <form method="POST" enctype="multipart/form-data" action="{{ route('posts.update', $post) }}">
                    @method('PUT')
                    @csrf

                    @error('title_en')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror

                    <div class="input-group flex-nowrap mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="addon-wrapping">TITLE EN</span>
                        </div>
                        <input value="{{ $post->title_en }}" type="text" name="title_en" id="title_en" class="form-control" aria-describedby="addon-wrapping" required>
                    </div>

                    <div class="input-group flex-nowrap mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="addon-wrapping">SLUG</span>
                        </div>
                        <input value="{{ $post->slug }}" type="text" name="slug" id="slug" class="form-control" aria-describedby="addon-wrapping" required>
                    </div>

                    <div class="input-group flex-nowrap mb-3">
                        <span class="input-group-text">IMAGE</span>
                        <input class="form-control" type="file" name="image" id="image">
                    </div>

                    <x-adminlte-text-editor name="content">{!! $post->content !!}</x-adminlte-text-editor>

                    <button type="submit" class="btn btn-success">EDIT</button>
                </form>

            </div>

        </div>

    </div>
@stop
