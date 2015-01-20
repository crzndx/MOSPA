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
		<th>Edit?</th>
		<th>Delete?</th>
	</tr>
	</thead>
	<tbody>
	@foreach($printers as $printer)
	<tr>
		<td>{{{ $printer->id }}}</td>
		<td>{{{ $printer->name }}}</td>
		<td>{{ link_to_route('printers.edit', 'Edit', array($printer->id), array('class' => 'btn btn-info')) }}</td>
		<td>
			{{ Form::open(array('method' => 'DELETE', 'route' => array('printers.destroy', $printer->id))) }}
			{{ Form::submit('Delete', array('class' => 'btn btn-danger')) }}
			{{ Form::close() }}
		</td>
	</tr>
	@endforeach
	</tbody>
</table>
<!-- /row -->
@stop