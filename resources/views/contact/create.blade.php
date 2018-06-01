@extends('layouts.default')
@section('content')

<div class="contactMain">
    <div class="titleMain">
        <h2>CONTACT</h2>
        <i class="fa fa-2x fa-envelope" aria-hidden="true"></i>
    </div>
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif

    {{ Form::open(['route' => 'contact.store', 'class' => 'form']) }}

    <div class="form-group">
        {{ Form::label('nom', 'Votre nom') }}
        {{ Form::text('nom', null, ['class' => 'form-control']) }}
    </div>

    <div class="form-group">
        {{ Form::label('mail', 'Votre mail') }}
        {{ Form::text('mail', null, ['class' => 'form-control']) }}
    </div>       

    <div class="form-group">
    	{{ Form::label('website', 'Votre site web') }}
        {{ Form::text('website', null, ['class' => 'form-control']) }}
    </div>

    <div class="form-group">
    	{{ Form::label('message', 'Votre message') }}
        {{ Form::textarea('message', null, ['class' => 'form-control']) }}
    </div> 

    {{ Form::submit('Envoyer', ['class' => 'btn btn-info']) }}

    {{ Form::close() }} 
</div>
@stop