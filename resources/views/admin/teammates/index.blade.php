@extends('adminlte::page')

@section('title', 'Dashboard | Teammates')

@section('content_header')
    <h1>Teammates</h1>
@stop

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-2 px-0 pb-4">
                <a class="btn btn-success" type="button" href="{{ route('teammates.create') }}">ADD NEW</a>
            </div>
        </div>
        <div class="row">
            @foreach($teammates as $teammate)
                <div class="col-3 p-2">

                    <div class="card h-100">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-12 text-center">
                                    <img src="/images/{{ $teammate->image }}" class="img-fluid w-50">
                                </div>
                            </div>
                            <h4 class="text-uppercase mt-3">{{ $teammate->name_en }} {{ $teammate->surname_en }}</h4>
                            <h5 class="text-uppercase mt-3">{{ $teammate->position_en }}</h5>
                        </div>
                        <div class="card-footer">
                            <a class="btn btn-secondary d-inline-block" type="button" href="{{ route('teammates.edit', $teammate) }}">
                                EDIT
                            </a>
                            <form class="d-inline-block" action="{{ route('teammates.destroy', $teammate) }}" method="POST">
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
