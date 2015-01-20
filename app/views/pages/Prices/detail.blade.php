@extends('layout')

@section('title')
Price
@stop

@section('content')
<h2>{{{ $price->name }}}</h2>
<table class="table table-bordered">
	<thead>
	<tr>
		<th>ID</th>
		<th>Currency</th>
		<th>Price</th>
	</tr>
	</thead>
	<tbody>
	<tr>
		<td>{{{ $price->id }}}</td>
		<td>{{{ $price->currency }}}</td>
		<td>{{{ $price->price }}}</td>
	</tr>
	</tbody>
</table>
<!-- /row -->
@stop