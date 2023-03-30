@extends('adminlte::page')

@section('title', 'Dashboard | Testimonials')

@section('content_header')
    <h1>Testimonials</h1>
@stop

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-2 px-0 pb-4">
                <a class="btn btn-success" type="button" href="{{ route('testimonials.create') }}">ADD NEW</a>
            </div>
        </div>
        <div class="row">
            @foreach($testimonials as $testimonial)
                <div class="col-3 p-2">

                    <div class="card h-100">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-12 text-center">
                                    <img src="/images/{{ $testimonial->image }}" class="img-fluid w-50">
                                </div>
                            </div>
                            <h4 class="text-uppercase mt-3">{{ $testimonial->name }} {{ $testimonial->surname }}</h4>
                            <h5 class="text-uppercase mt-3">{{ $testimonial->country }}</h5>
                            <h5 class="text-uppercase mt-3">{{ $testimonial->profession }}</h5>
                            <h6>{{ $testimonial->text }}</h6>
                        </div>
                        <div class="card-footer">
                            <a class="btn btn-secondary d-inline-block" type="button" href="{{ route('testimonials.edit', $testimonial) }}">
                                EDIT
                            </a>
                            <form class="d-inline-block" action="{{ route('testimonials.destroy', $testimonial) }}" method="POST">
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
