@extends('layout')

@section('title')
Edit Price
@stop

@section('content')
@if (Session::has('message'))
<div class="alert alert-info">{{ Session::get('message') }}</div>
@endif


{{ HTML::ul($errors->all()) }}

{{ Form::model($price, array('route' => array('prices.update', $price->id), 'method' => 'PUT')) }}


<div class="form-group">
	{{ Form::label('id', 'ID:') }}
	{{ Form::number('id', $price->id , array('class' => 'form-control')) }}
</div>

<div class="form-group">
	{{ Form::label('currency', 'Currency:') }}
	{{ Form::text('currency', $price->currency, array('class' => 'form-control')) }}
</div>

<div class="form-group">
	{{ Form::label('price', 'Price:') }}
	{{ Form::number('price', $price->price , array('class' => 'form-control')) }}
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