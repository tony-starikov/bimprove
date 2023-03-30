@extends('adminlte::page')

@section('title', 'Dashboard | Posts')

@section('content_header')
    <h1>Add new post</h1>
@stop

@section('plugins.Summernote', true)

@section('content')
    <div class="container-fluid">

        <div class="row">

            <div class="col-6">

                <form method="POST" enctype="multipart/form-data" action="{{ route('posts.store') }}">
                    @csrf

                    @error('name')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror

                    <div class="input-group flex-nowrap mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="addon-wrapping">TITLE EN</span>
                        </div>
                        <input type="text" name="title_en" id="title_en" class="form-control" placeholder="REQUIRED" aria-describedby="addon-wrapping" required>
                    </div>

                    <div class="input-group flex-nowrap mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="addon-wrapping">SLUG</span>
                        </div>
                        <input type="text" name="slug" id="slug" class="form-control" placeholder="SLUG" aria-describedby="addon-wrapping" required>
                    </div>

                    <div class="input-group flex-nowrap mb-3">
                        <span class="input-group-text">IMAGE</span>
                        <input class="form-control" type="file" name="image" id="image">
                    </div>

                    @php
                        $config = [
                            "height" => "800",
                            "styleTags" => ['p', 'h6'],
                        ];
                    @endphp

                    <x-adminlte-text-editor name="content" :config="$config"></x-adminlte-text-editor>

                    <button type="submit" class="btn btn-success">ADD</button>
                </form>

            </div>

        </div>

    </div>
@stop
