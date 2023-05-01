@extends('adminlte::page')

@section('title', 'Dashboard | Messages')

@section('content_header')
    <h1>Messages</h1>
@stop

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-2 px-0 pb-4">
                <a class="btn btn-success" type="button" href="{{ route('export.csv') }}">DOWNLOAD ALL CONTACTS</a>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Name</th>
                            <th scope="col">Surname</th>
                            <th scope="col">Email</th>
                            <th scope="col">Phone</th>
                            <th scope="col">Company</th>
                            <th scope="col">Message</th>
                            <th scope="col">Functions</th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach($messages as $message)
                        <tr class="text-white @if($message->status) bg-success @else bg-danger @endif ">
                            <th scope="row">{{ $message->id }}</th>
                            <td>{{ $message->name }}</td>
                            <td>{{ $message->surname }}</td>
                            <td>{{ $message->email }}</td>
                            <td>{{ $message->phone }}</td>
                            <td>{{ $message->company }}</td>
                            <td>{{ $message->message }}</td>
                            <td class="bg-secondary">
                                <a class="btn btn-primary d-inline-block" type="button" href="{{ route('messages.edit', $message) }}">
                                    EDIT
                                </a>
                                <form class="mx-2 d-inline-block" action="{{ route('messages.destroy', $message) }}" method="POST">
                                    @method('DELETE')
                                    @csrf
                                    <button type="submit" class="btn btn-warning">DELETE</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@stop
