@extends('layout')

@section('title')
Create new 3D Model
@stop

@section('content')
@if (Session::has('message'))
<div class="alert alert-info">{{ Session::get('message') }}</div>
@endif

{{ Form::open(array('route' => 'threeDimModels.store', 'files' => true )) }}

<div class="form-group">
	{{ Form::label('name', 'Name:') }}
	{{ Form::text('name', Input::old('name'), array('class' => 'form-control', 'placeholder' => 'Fancy object name')) }}
</div>

<div class="form-group">
	{{ Form::label('volume', 'Volume (in cbm):') }}
	{{ Form::text('volume', Input::old('volume'), array('class' => 'form-control', 'placeholder' => '5553')) }}
</div>

<div class="form-group">
	{{ Form::label('weight', 'Weight (in kg):') }}
	{{ Form::text('weight', Input::old('weight'), array('class' => 'form-control', 'placeholder' => '0.120')) }}
</div>

<div class="form-group">
    {{ Form::label('data', 'Upload STL file:')}}
    {{ Form::file('data') }}
</div>





<div class="form-group">
	{{ Form::submit('Submit', array('class' => 'btn btn-primary')) }}
</div>
{{ Form::close() }}

@if ($errors->any())
<div class="alert-warning">
	{{ implode('', $errors->all('<li class="error">:message</li>')) }}
</div>
@endif

@stop
<!-- /row -->





