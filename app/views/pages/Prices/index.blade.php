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
		</tr>
		</thead>
		<tbody>
		@foreach($prices as $price)
		<tr>
			<td>{{{ $price->id }}}</td>
			<td>{{{ $price->price }}}</td>
			<td>{{{ $price->currency }}}</td>
			<td>{{{ $price->price }}} {{{ $price->currency }}}</td>

		</tr>
		@endforeach
		</tbody>
	</table>
<!-- /row -->
@stop