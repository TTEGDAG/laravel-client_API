@extends('layouts.app')

@section('title','Client-API')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-sm-12">
            @include('components.form',[
                'action'    =>  route('index'),
                'method'    =>  'GET',
                'title'     =>  'Show',
                'disabled'  =>  'disabled',
                'emailValue'=>  old('email', $client->email),
                'firstNameValue'=>  old('first_name', $client->first_name),
                'lastNameValue' =>  old('last_name', $client->last_name),
                'avatarValue' =>  old('avatar', $client->avatar),
                'submitBtnText'=> 'Return back'
            ])
        </div>
    </div>
</div>