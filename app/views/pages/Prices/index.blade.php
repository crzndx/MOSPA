@extends('layout')

@section('title')
	Prices
@stop

@section('content')
	<table class="table table-bordered">
		<thead>
		<tr>
			<th>ID</th>
			<th>Price</th>
			<th>Currency</th>
			<th>Aggregated</th>
			<th>Edit?</th>
			<th>Delete?</th>
		</tr>
		</thead>
		<tbody>
		@foreach($prices as $price)
		<tr>
			<td>{{{ $price->id }}}</td>
			<td>{{{ $price->price }}}</td>
			<td>{{{ $price->currency }}}</td>
			<td>{{{ $price->price }}} {{{ $price->currency }}}</td>
			<td>{{ link_to_route('prices.edit', 'Edit', array($price->id), array('class' => 'btn btn-info')) }}</td>
			<td>
				{{ Form::open(array('method' => 'DELETE', 'route' => array('prices.destroy', $price->id))) }}
				{{ Form::submit('Delete', array('class' => 'btn btn-danger')) }}
				{{ Form::close() }}
			</td>
		</tr>
		@endforeach
		</tbody>
	</table>
<!-- /row -->
@stop