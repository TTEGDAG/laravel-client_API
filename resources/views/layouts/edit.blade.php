@extends('layouts.app')

@section('title','Client-API')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-sm-12">
            @include('components.form',[
                'action'    =>  route('update', ['id' => $client->id]),
                'method'    =>  'PUT',
                'title'     =>  'Edit',
                'emailValue'=>  old('email', $client->email),
                'firstNameValue'=>  old('first_name', $client->first_name),
                'lastNameValue' =>  old('last_name', $client->last_name),
                'avatarValue' =>  old('avatar', $client->avatar),
                'submitBtnText'=> 'Update'
            ])
        </div>
    </div>
</div>