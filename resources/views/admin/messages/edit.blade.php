@extends('adminlte::page')

@section('title', 'Dashboard | Edit message')

@section('content_header')
    <h1>Edit message</h1>
@stop

{{--@section('plugins.Summernote', true)--}}

@section('content')
    <div class="container-fluid">

        <div class="row">

            <div class="col-6">

                <form method="POST" enctype="multipart/form-data" action="{{ route('messages.update', $message) }}">
                    @method('PUT')
                    @csrf

                    @error('show_status')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror

                    <div class="input-group flex-nowrap mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="addon-wrapping">Name</span>
                        </div>
                        <input value="{{ $message->name }}" type="text" name="name" id="name" class="form-control" aria-describedby="addon-wrapping" required>
                    </div>

                    <div class="input-group flex-nowrap mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="addon-wrapping">Surname</span>
                        </div>
                        <input value="{{ $message->surname }}" type="text" name="surname" id="surname" class="form-control" aria-describedby="addon-wrapping">
                    </div>

                    <div class="input-group flex-nowrap mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="addon-wrapping">Email</span>
                        </div>
                        <input value="{{ $message->email }}" type="text" name="email" id="email" class="form-control" aria-describedby="addon-wrapping" required>
                    </div>

                    <div class="input-group flex-nowrap mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="addon-wrapping">Phone</span>
                        </div>
                        <input value="{{ $message->phone }}" type="text" name="phone" id="phone" class="form-control" aria-describedby="addon-wrapping">
                    </div>

                    <div class="input-group flex-nowrap mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="addon-wrapping">Company</span>
                        </div>
                        <input value="{{ $message->company }}" type="text" name="company" id="company" class="form-control" aria-describedby="addon-wrapping">
                    </div>

                    <div class="input-group flex-nowrap mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="addon-wrapping">Message</span>
                        </div>
                        <input value="{{ $message->message }}" type="text" name="message" id="message" class="form-control" aria-describedby="addon-wrapping" required>
                    </div>

                    <div class="input-group mb-3">
                        <label class="input-group-text" for="inputGroupSelect01">Status</label>
                        <select name="status" class="form-select" id="inputGroupSelect01">
                            <option @if($message->status == '1') selected @endif value="1">answered</option>
                            <option @if($message->status == '0') selected @endif value="0">without answer</option>
                        </select>
                    </div>


                    <button type="submit" class="btn btn-success">EDIT</button>
                </form>

            </div>

        </div>

    </div>
@stop
