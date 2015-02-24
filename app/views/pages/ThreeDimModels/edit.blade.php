@extends('layout')

@section('title')
Edit 3D Model
@stop

@section('content')
@if (Session::has('message'))
<div class="alert alert-info">{{ Session::get('message') }}</div>
@endif


{{ HTML::ul($errors->all()) }}

{{ Form::model($threeDimModel, array('route' => array('threeDimModels.update', $threeDimModel->id), 'method' => 'PUT')) }}


<div class="form-group">
	{{ Form::label('id', 'ID:') }}
	{{ Form::number('id', $threeDimModel->id , array('class' => 'form-control')) }}
</div>

<div class="form-group">
	{{ Form::label('name', 'Name:') }}
	{{ Form::text('name', $threeDimModel->name, array('class' => 'form-control')) }}
</div>

<div class="form-group">
	{{ Form::label('volume', 'Volume (in cbm):') }}
	{{ Form::text('volume', $threeDimModel->volume, array('class' => 'form-control')) }}
</div>

<div class="form-group">
	{{ Form::label('weight', 'Weight (in kg):') }}
	{{ Form::text('weight', $threeDimModel->weight, array('class' => 'form-control')) }}
</div>

<div class="form-group">
    {{ Form::label('data', 'File:') }}
    {{ Form::text('data', $threeDimModel->data, array('class' => 'form-control')) }}
</div>

<div class="form-group">
	{{ Form::submit('Update', array('class' => 'btn btn-primary')) }}
</div>
{{ Form::close() }}

@if ($errors->any())
<div class="alert-warning">
	{{ implode('', $errors->all('<li class="error">:message</li>')) }}
</div>
@endif

@stop
<!-- /row -->
@stop