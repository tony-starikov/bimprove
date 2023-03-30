@extends('adminlte::page')

@section('title', 'Dashboard | Plugins')

@section('content_header')
    <h1>Plugins</h1>
@stop

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-2 px-0 pb-4">
                <a class="btn btn-success" type="button" href="{{ route('plugins.create') }}">ADD NEW</a>
            </div>
        </div>
        <div class="row">
            @foreach($plugins as $plugin)
                <div class="col-3 p-2">

                    <div class="card h-100">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-12 text-center">
                                    <img src="/images/{{ $plugin->logo }}" class="img-fluid">
                                </div>
                            </div>
                            <h4 class="mt-3">{{ $plugin->title_en }}</h4>
                            <h6>{{ $plugin->description_en }}</h6>
                        </div>
                        <div class="card-footer">
                            <a class="btn btn-secondary d-inline-block" type="button" href="{{ route('plugins.edit', $plugin) }}">
                                EDIT
                            </a>
                            <form class="d-inline-block" action="{{ route('plugins.destroy', $plugin) }}" method="POST">
                                @method('DELETE')
                                @csrf
                                <button type="submit" class="btn btn-danger">DELETE</button>
                            </form>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@stop
