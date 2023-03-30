@extends('adminlte::page')

@section('title', 'Dashboard | Families')

@section('content_header')
    <h1>Families</h1>
@stop

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-2 px-0 pb-4">
                <a class="btn btn-success" type="button" href="{{ route('families.create') }}">ADD NEW</a>
            </div>
        </div>
        <div class="row">
            @foreach($families as $family)
                <div class="col-3 p-2">

                    <div class="card h-100">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-12 text-center">
                                    <img src="/images/{{ $family->image }}" class="img-fluid">
                                </div>
                            </div>
                            <h4 class="mt-3">{{ $family->title_en }}</h4>
                            <h6>{{ $family->description }}</h6>
                        </div>
                        <div class="card-footer">
                            <a class="btn btn-secondary d-inline-block" type="button" href="{{ route('families.edit', $family) }}">
                                EDIT
                            </a>
                            <form class="d-inline-block" action="{{ route('families.destroy', $family) }}" method="POST">
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
