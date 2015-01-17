@extends('layout')

@section('title')
	Manufacturer
@stop

@section('content')
<div class="row correctpadding">

	<h2>{{{ $manufacturer->name }}}</h2>
	<table class="table table-bordered">
		<thead>
		<tr>
			<th>ID</th>
			<th>Name</th>
			<th>URL</th>
		</tr>
		</thead>
		<tbody>
		<tr>
			<td>{{{ $manufacturer->id }}}</td>
			<td>{{{ $manufacturer->name }}}</td>
			<td>{{{ $manufacturer->url }}}</td>
		</tr>
		</tbody>
	</table>
</div>
<!-- /row -->
@stop