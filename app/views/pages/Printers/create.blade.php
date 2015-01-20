@extends('layout')

@section('title')
Create new Printer
@stop

@section('content')
@if (Session::has('message'))
<div class="alert alert-info">{{ Session::get('message') }}</div>
@endif

{{ Form::open(array('route' => 'printers.store')) }}
<div class="form-group">
	{{ Form::label('id', 'ID:') }}
	{{ Form::number('id', Input::old('id'), array('class' => 'form-control', 'placeholder' => 'ID')) }}
</div>

<div class="form-group">
	{{ Form::label('name', 'Name:') }}
	{{ Form::text('name', Input::old('name'), array('class' => 'form-control', 'placeholder' => 'Makerbot X18')) }}
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





