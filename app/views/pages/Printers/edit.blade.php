@extends('layout')

@section('title')
Edit Printer
@stop

@section('content')
@if (Session::has('message'))
<div class="alert alert-info">{{ Session::get('message') }}</div>
@endif


{{ HTML::ul($errors->all()) }}

{{ Form::model($printer, array('route' => array('printers.update', $printer->id), 'method' => 'PUT')) }}


<div class="form-group">
	{{ Form::label('id', 'ID:') }}
	{{ Form::number('id', $printer->id , array('class' => 'form-control')) }}
</div>

<div class="form-group">
	{{ Form::label('name', 'Name:') }}
	{{ Form::text('name', $printer->name, array('class' => 'form-control')) }}
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