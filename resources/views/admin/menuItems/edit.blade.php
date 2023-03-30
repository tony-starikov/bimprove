@extends('adminlte::page')

@section('title', 'Dashboard | Edit menu item: {{ $menuItem->item_name }}')

@section('content_header')
    <h1>Edit menu item: {{ $menuItem->item_name }}</h1>
@stop

@section('plugins.Summernote', true)

@section('content')
    <div class="container-fluid">

        <div class="row">

            <div class="col-6">

                <form method="POST" enctype="multipart/form-data" action="{{ route('menu-items.update', $menuItem) }}">
                    @method('PUT')
                    @csrf

                    @error('show_status')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror

                    <input type="hidden" name="show_status" value="0">
                    <div class="form-check mb-2">
                        <input class="form-check-input" type="checkbox" name="show_status" id="show_status" value="1" @if($menuItem->show_status === '1') checked @endif >
                        <label class="form-check-label" for="show_status">
                            DISPLAY
                        </label>
                    </div>

                    <button type="submit" class="btn btn-success">EDIT</button>
                </form>

            </div>

        </div>

    </div>
@stop
