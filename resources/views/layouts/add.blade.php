@extends('layouts.app')

@section('title','Global4et')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-sm-12">
            @include('components.form',[
                'action'    =>  route('store'),
                'method'    =>  'POST',
                'title'     =>  'Add',
                'submitBtnText'=> 'Submit'
            ])
        </div>
    </div>
</div>