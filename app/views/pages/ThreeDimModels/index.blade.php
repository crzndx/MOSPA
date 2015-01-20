@extends('layout')

@section('title')
	3D Models
@stop

@section('content')

	<table class="table table-bordered">
		<thead>
		<tr>
			<th>ID</th>
			<th>Name</th>
			<th>x</th>
			<th>y</th>
			<th>z</th>
			<th>volume</th>
			<th>weight</th>
			<th>Edit?</th>
			<th>Delete?</th>
		</tr>
		</thead>
		<tbody>
		@foreach($threeDimModels as $threeDimModel)
		<tr>
			<td>{{{ $threeDimModel->id }}}</td>
			<td>{{{ $threeDimModel->name }}}</td>
			<td>{{{ $threeDimModel->x }}}</td>
			<td>{{{ $threeDimModel->y }}}</td>
			<td>{{{ $threeDimModel->z }}}</td>
			<td>{{{ $threeDimModel->volume }}}</td>
			<td>{{{ $threeDimModel->weight }}}</td>
			<td>{{ link_to_route('threeDimModels.edit', 'Edit', array($threeDimModel->id), array('class' => 'btn btn-info')) }}</td>
			<td>
				{{ Form::open(array('method' => 'DELETE', 'route' => array('threeDimModels.destroy', $threeDimModel->id))) }}
				{{ Form::submit('Delete', array('class' => 'btn btn-danger')) }}
				{{ Form::close() }}
			</td>
		</tr>
		@endforeach
		</tbody>
	</table>

<!-- /row -->
@stop