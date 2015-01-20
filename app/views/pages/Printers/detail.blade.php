@extends('layout')

@section('title')
Printer
@stop

@section('content')
<h2>{{{ $printer->name }}}</h2>
<table class="table table-bordered">
	<thead>
	<tr>
		<th>ID</th>
		<th>Name</th>
	</tr>
	</thead>
	<tbody>
	<tr>
		<td>{{{ $printer->id }}}</td>
		<td>{{{ $printer->name }}}</td>
	</tr>
	</tbody>
</table>
<!-- /row -->
@stop