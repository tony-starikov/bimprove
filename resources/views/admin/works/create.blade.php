@extends('adminlte::page')

@section('title', 'Dashboard | Create work')

@section('content_header')
    <h1>Add new work</h1>
@stop

{{--@section('plugins.Summernote', true)--}}

@section('content')
    <div class="container-fluid">

        <div class="row">

            <div class="col-6">

                <form method="POST" enctype="multipart/form-data" action="{{ route('works.store') }}">
                    @csrf

                    @error('name')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror

                    <div class="input-group flex-nowrap mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="addon-wrapping">Title</span>
                        </div>
                        <input type="text" name="title" id="title" class="form-control" aria-describedby="addon-wrapping" required>
                    </div>

                    <div class="input-group flex-nowrap mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="addon-wrapping">Subtitle</span>
                        </div>
                        <input type="text" name="subtitle" id="subtitle" class="form-control" aria-describedby="addon-wrapping" required>
                    </div>

                    <div class="input-group flex-nowrap mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="addon-wrapping">Parameter 1</span>
                        </div>
                        <input type="text" name="parameter_1" id="parameter_1" class="form-control" aria-describedby="addon-wrapping" required>
                    </div>

                    <div class="input-group flex-nowrap mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="addon-wrapping">Parameter 2</span>
                        </div>
                        <input type="text" name="parameter_2" id="parameter_2" class="form-control" aria-describedby="addon-wrapping" required>
                    </div>

                    <div class="input-group flex-nowrap mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="addon-wrapping">Parameter 3</span>
                        </div>
                        <input type="text" name="parameter_3" id="parameter_3" class="form-control" aria-describedby="addon-wrapping" required>
                    </div>

                    <div class="input-group flex-nowrap mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="addon-wrapping">Parameter 4</span>
                        </div>
                        <input type="text" name="parameter_4" id="parameter_4" class="form-control" aria-describedby="addon-wrapping" required>
                    </div>

                    <div class="input-group flex-nowrap mb-3">
                        <span class="input-group-text">Description</span>
                        <textarea name="description" id="description" class="form-control" aria-label="text"></textarea>
                    </div>

                    <div class="input-group flex-nowrap mb-3">
                        <span class="input-group-text">Image</span>
                        <input class="form-control" type="file" name="image" id="image" required>
                    </div>

                    <div class="input-group flex-nowrap mb-3">
                        <span class="input-group-text">Image small</span>
                        <input class="form-control" type="file" name="image_small" id="image_small" required>
                    </div>

                    <button type="submit" class="btn btn-success">ADD</button>
                </form>

            </div>

        </div>

    </div>
@stop
