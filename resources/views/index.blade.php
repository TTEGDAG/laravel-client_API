@extends('layouts.app')

@section('title', 'Client-API')

@section('content')
<div class="container">
    @include('layouts.alert')
    <div class="row">
        <div class="col-sm-11">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">id</th>
                        <th scope="col">email</th>
                        <th scope="col">first name</th>
                        <th scope="col">last name</th>
                        <th scope="col">avatar</th>
                        <th scope="col">action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($clients as $client)
                    <tr>
                        <th scope="row">{{$client->id}}</th>
                        <td>{{$client->email}}</td>
                        <td>{{$client->first_name}}</td>
                        <td>{{$client->last_name}}</td>
                        <td>{{$client->avatar}}</td>
                        <td>
                            <div class="btn-group" role="group" aria-label="actions">
                                <a href="{{route('show', ['id' => $client->id])}}" role="button" class="btn btn-info btn-sm">Show</a>
                                <a href="{{route('edit', ['id' => $client->id])}}" role="button" class="btn btn-warning btn-sm">Edit</a>
                                <form action="{{route('delete' , ['client' => $client])}}" method="POST" novalidate>
                                    @csrf
                                    @method('DELETE')
                                    <button role="button" class="btn btn-danger btn-sm" type="submit">
                                        Delete
                                    </button>
                                </form>
                            </div>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <div class="col-sm-1">
            <a href="{{route('add')}}" type="button" class="btn btn-success btn-sm">Add new</a>
        </div>
    </div>
</div>
@endsection