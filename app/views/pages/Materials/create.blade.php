
@extends('layout')

@section('title')
Create new Material
@stop

@section('content')
@if (Session::has('message'))
<div class="alert alert-info">{{ Session::get('message') }}</div>
@endif

{{ Form::open(array('route' => 'materials.store')) }}

<div class="form-group">
	{{ Form::label('name', 'Material name:') }}
	{{ Form::text('name', Input::old('name'), array('class' => 'form-control', 'placeholder' => 'Plastic')) }}
</div>

<div class="form-group">
    {{ Form::label('densityInGramsPerCm', 'Density (in g/cm^3):') }}
    {{ Form::text('densityInGramsPerCm', Input::old('densityInGramsPerCm'), array('class' => 'form-control', 'placeholder' => '2.21')) }}
</div>

<div class="form-group">
    {{ Form::label('pricePerKg', 'Material Price (per kg):') }}
    {{ Form::text('pricePerKg', Input::old('pricePerKg'), array('class' => 'form-control', 'placeholder' => '1.11')) }}
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





