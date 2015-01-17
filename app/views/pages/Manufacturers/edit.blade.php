@extends('layout')

@section('title')
Edit Manufacturer
@stop

@section('content')
	@if (Session::has('message'))
	<div class="alert alert-info">{{ Session::get('message') }}</div>
	@endif


	{{ HTML::ul($errors->all()) }}

	{{ Form::model($manufacturer, array('route' => array('manufacturers.update', $manufacturer->id), 'method' => 'PUT')) }}


	<div class="form-group">
		{{ Form::label('id', 'ID:') }}
		{{ Form::number('id', $manufacturer->id , array('class' => 'form-control')) }}
	</div>

	<div class="form-group">
		{{ Form::label('name', 'Name:') }}
		{{ Form::text('name', $manufacturer->name, array('class' => 'form-control')) }}
	</div>

	<div class="form-group">
		{{ Form::label('url', 'URL:') }}
		{{ Form::text('url', $manufacturer->url, array('class' => 'form-control')) }}
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