@extends('layout')

@section('title')
Material
@stop

@section('content')
<h2>{{{ $mateerial->name }}}</h2>
<table class="table table-bordered">
	<thead>
	<tr>
		<th>ID</th>
		<th>Name</th>
	</tr>
	</thead>
	<tbody>
	<tr>
		<td>{{{ $manufacturer->id }}}</td>
		<td>{{{ $manufacturer->name }}}</td>
	</tr>
	</tbody>
</table>
<!-- /row -->
@stop