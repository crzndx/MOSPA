@extends('layout')

@section('title')
	Materials
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
		@foreach($materials as $material)
		<tr>
			<td>{{{ $material->id }}}</td>
			<td>{{{ $material->name }}}</td>
			<td>{{ link_to_route('materials.edit', 'Edit', array($material->id), array('class' => 'btn btn-info')) }}</td>
			<td>
				{{ Form::open(array('method' => 'DELETE', 'route' => array('materials.destroy', $material->id))) }}
				{{ Form::submit('Delete', array('class' => 'btn btn-danger')) }}
				{{ Form::close() }}
			</td>
		</tr>
		@endforeach
		</tbody>
	</table>
@stop