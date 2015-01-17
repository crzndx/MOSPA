@extends('layout')

@section('title')
	Printers
@stop

@section('content')
	<table class="table table-bordered">
		<thead>
		<tr>
			<th>ID</th>
			<th>Name</th>
		</tr>
		</thead>
		<tbody>
		@foreach($printers as $printer)
		<tr>
			<td>{{{ $printer->id }}}</td>
			<td>{{{ $printer->name }}}</td>
		</tr>
		@endforeach
		</tbody>
	</table>
<!-- /row -->
@stop