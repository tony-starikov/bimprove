@extends('adminlte::page')

@section('title', 'Dashboard | Stars')

@section('content_header')
    <h1>Stars</h1>
@stop

@section('content')
    <div class="container-fluid">
        <div class="row">
            @foreach($stars as $star)
                @if($star->title_en !== 'Contact')
                    <div class="col-3 p-2">

                        <div class="card h-100">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-6">
                                        <img src="/images/{{ $star->image }}" class="img-fluid w-100">
                                    </div>
                                    <div class="col-6">
                                        <img src="/images/{{ $star->image_small }}" class="img-fluid w-100">
                                    </div>
                                </div>
                                <h4 class="text-uppercase mt-3">{{ $star->title_en }}</h4>
                                <h6>{{ $star->description_en }}</h6>
                            </div>
                            <div class="card-footer">
                                <a class="btn btn-secondary d-inline-block" type="button" href="{{ route('stars.edit', $star) }}">
                                    EDIT
                                </a>
                            </div>
                        </div>
                    </div>
                @endif
            @endforeach
        </div>
    </div>
@stop
