@extends('adminlte::page')

@section('title', 'Dashboard | Posts')

@section('content_header')
    <h1>Posts</h1>
@stop

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-2 px-0 pb-4">
                <a class="btn btn-success" type="button" href="{{ route('posts.create') }}">ADD NEW</a>
            </div>
        </div>
        <div class="row">
            @foreach($posts as $post)
                <div class="col-3 p-2">
                    <div class="card h-100">
                        <img src="/images/{{ $post->image }}" class="card-img-top w-75 mx-auto mt-2 p-5" alt="...">
                        <div class="card-body">
                            <h4>{{ $post->title_en }}</h4>
                        </div>
                        <div class="card-footer">
                            <a class="btn btn-secondary d-inline-block" type="button" href="{{ route('posts.edit', $post) }}">
                                EDIT
                            </a>
                            <form class="d-inline-block" action="{{ route('posts.destroy', $post) }}" method="POST">
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
