
@extends('layout')

@section('title')
Create new Pricepoint
@stop

@section('content')
@if (Session::has('message'))
<div class="alert alert-info">{{ Session::get('message') }}</div>
@endif

{{ Form::open(array('route' => 'prices.store')) }}

<div class="form-group">
	{{ Form::label('price', 'Price:') }}
	{{ Form::number('price', Input::old('price'), array('class' => 'form-control', 'placeholder' => '123.45')) }}
</div>

<div class="form-group">
    {{ Form::label('currency', 'Currency symbol:') }}
    {{ Form::text('currency', Input::old('currency'), array('class' => 'form-control', 'placeholder' => '€')) }}
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





