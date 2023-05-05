@extends('adminlte::page')

@section('title', 'Dashboard | Contacts')

@section('content_header')
    <h1>Contacts</h1>
@stop

@section('content')
    <div class="container-fluid">
        <div class="row">
            @foreach($contacts as $contact)
                <div class="col-3 p-2">

                    <div class="card h-100 bg-secondary">
                        <div class="card-body">
                            @if($contact->name != 'phone' and $contact->name != 'email')
                                <div class="row">
                                    <div class="col-12 text-center">
                                        <img src="/images/{{ $contact->image }}" class="img-fluid">
                                    </div>
                                </div>
                            @endif
                            <h4 class="mt-3">{{ $contact->name }}</h4>
                            <h5 class="mt-3">{{ $contact->info }}</h5>
                        </div>
                        <div class="card-footer">
                            <a class="btn btn-primary d-inline-block" type="button" href="{{ route('contacts.edit', $contact) }}">
                                EDIT
                            </a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@stop
