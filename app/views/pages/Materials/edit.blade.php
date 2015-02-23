@extends('layout')

@section('title')
Edit Material
@stop

@section('content')
@if (Session::has('message'))
<div class="alert alert-info">{{ Session::get('message') }}</div>
@endif


{{ HTML::ul($errors->all()) }}

{{ Form::model($material, array('route' => array('materials.update', $material->id), 'method' => 'PUT')) }}


<div class="form-group">
	{{ Form::label('id', 'ID:') }}
	{{ Form::number('id', $material->id , array('class' => 'form-control')) }}
</div>

<div class="form-group">
	{{ Form::label('name', 'Name:') }}
	{{ Form::text('name', $material->name, array('class' => 'form-control')) }}
</div>

<div class="form-group">
    {{ Form::label('densityInGramsPerCm', 'Density (in g/cm^3):') }}
    {{ Form::text('densityInGramsPerCm', $material->densityInGramsPerCm, array('class' => 'form-control')) }}
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