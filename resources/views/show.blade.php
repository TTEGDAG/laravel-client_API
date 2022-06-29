@extends('layouts.app')

@section('title', 'Client-API')

@section('content')
<div class="container h-100">
    <div class="row h-100 justify-content-center align-items-center">
        <div class="card col-sm-2 center">
            <div class="text-center">
                @if( $client->avatar )
                <img src="{{ $client->avatar }}" class="img-thumbnail" alt="user-img" width="120" height="120">
                @else
                <img src="" class="img-circle img-thumbnail" alt="No avatar" width="120" height="120">
                @endif
                <h5 class="m-b-5">Full name</h5>
                <p class="m-b-5">{{ $client->first_name }} {{ $client->last_name }}</p>
                <h5 class="m-b-5">Email</h5>
                <p class="text-muted m-b-5">{{ $client->email }}</p>
                <a href="{{url()->previous()}}" class="btn btn-primary">Return back</a>
            </div>
        </div>
    </div>
</div>
@endsection