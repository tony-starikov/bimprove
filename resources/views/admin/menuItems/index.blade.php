@extends('adminlte::page')

@section('title', 'Dashboard | Menu-Items')

@section('content_header')
    <h1>Menu-Items</h1>
@stop

@section('content')
    <div class="container-fluid">
        <div class="row">
            @foreach($menuItems as $menuItem)
                <div class="col-3 p-2">
                    <div class="card h-100">
                        <div class="card-body">
                            <h4 class="text-uppercase">{{ $menuItem->item_name }}</h4>
                            <h5 class=" @if($menuItem->show_status === 1) text-success @else text-danger @endif ">Display: @if($menuItem->show_status === 1) TRUE @else FALSE @endif</h5>
                        </div>
                        <div class="card-footer">
                            <a class="btn btn-secondary d-inline-block" type="button" href="{{ route('menu-items.edit', $menuItem) }}">
                                EDIT
                            </a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@stop
