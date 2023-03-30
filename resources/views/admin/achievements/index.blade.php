@extends('adminlte::page')

@section('title', 'Dashboard | Achievements')

@section('content_header')
    <h1>Achievements</h1>
@stop

@section('content')
    <div class="container-fluid">
        <div class="row">
            @foreach($achievements as $achievement)
                <div class="col-3 p-2">

                    <div class="card h-100">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-12 text-center">
                                    <img src="/images/{{ $achievement->image }}" class="img-fluid w-50">
                                </div>
                            </div>
                            <h4 class="text-uppercase mt-3">{{ $achievement->title_en }}</h4>
                            <h6>{{ $achievement->subtitle_en }}</h6>
                        </div>
                        <div class="card-footer">
                            <a class="btn btn-secondary d-inline-block" type="button" href="{{ route('achievements.edit', $achievement) }}">
                                EDIT
                            </a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@stop
