@extends('adminlte::page')

@section('title', 'Dashboard | Works')

@section('content_header')
    <h1>Works</h1>
@stop

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-2 px-0 pb-4">
                <a class="btn btn-success" type="button" href="{{ route('works.create') }}">ADD NEW</a>
            </div>
        </div>
        <div class="row">
            @foreach($works as $work)
                <div class="col-3 p-2">

                    <div class="card h-100">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-6 text-center">
                                    <img src="/images/{{ $work->image }}" class="img-fluid">
                                </div>
                                <div class="col-6 text-center">
                                    <img src="/images/{{ $work->image_small }}" class="img-fluid">
                                </div>
                            </div>
                            <h4 class="mt-3">{{ $work->title }}</h4>
                            <h5 class="mt-3">{{ $work->subtitle }}</h5>
                            <h5 class="mt-3">{{ $work->parameter_1 }}</h5>
                            <h5 class="mt-3">{{ $work->parameter_2 }}</h5>
                            <h5 class="mt-3">{{ $work->parameter_3 }}</h5>
                            <h5 class="mt-3">{{ $work->parameter_4 }}</h5>
                            <h6>{{ $work->description }}</h6>
                        </div>
                        <div class="card-footer">
                            <a class="btn btn-secondary d-inline-block" type="button" href="{{ route('works.edit', $work) }}">
                                EDIT
                            </a>
                            <form class="d-inline-block" action="{{ route('works.destroy', $work) }}" method="POST">
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
