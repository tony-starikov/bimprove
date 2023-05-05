@extends('adminlte::page')

@section('title', 'Dashboard | Edit contact')

@section('content_header')
    <h1>Edit contact</h1>
@stop

{{--@section('plugins.Summernote', true)--}}

@section('content')
    <div class="container-fluid">

        <div class="row">

            <div class="col-6">

                <form method="POST" enctype="multipart/form-data" action="{{ route('contacts.update', $contact) }}">
                    @method('PUT')
                    @csrf

                    @error('show_status')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror

                    @if($contact->name != 'phone' and $contact->name != 'email')
                        <div class="input-group flex-nowrap mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="addon-wrapping">URL</span>
                            </div>
                            <input value="{{ $contact->info }}" type="text" name="info" id="info" class="form-control" aria-describedby="addon-wrapping" required>
                        </div>

                        <div class="input-group flex-nowrap mb-3">
                            <span class="input-group-text">Image</span>
                            <input class="form-control" type="file" name="image" id="image">
                        </div>
                    @else
                        <div class="input-group flex-nowrap mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="addon-wrapping">DATA</span>
                            </div>
                            <input value="{{ $contact->info }}" type="text" name="info" id="info" class="form-control" aria-describedby="addon-wrapping" required>
                        </div>
                    @endif

                    <button type="submit" class="btn btn-success">EDIT</button>
                </form>

            </div>

        </div>

    </div>
@stop
