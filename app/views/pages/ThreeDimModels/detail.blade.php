@extends('layout')

@section('title')
3D Model
@stop

@section('content')
<h2>{{{ $threeDimModel->name }}}</h2>
<table class="table table-bordered">
	<thead>
	<tr>
		<th>ID</th>
		<th>Name</th>
		<th>Volume</th>
		<th>Weight</th>
        <th>Infill</th>
        <th>File</th>
	</tr>
	</thead>
	<tbody>
	<tr>
		<td>{{{ $threeDimModel->id }}}</td>
		<td>{{{ $threeDimModel->name }}}</td>
		<td>{{{ $threeDimModel->volume }}}</td>
		<td>{{{ $threeDimModel->weight }}}</td>
        <td>{{{ $threeDimModel->infill }}}</td>
        <td>{{{ $threeDimModel->data }}}</td>
	</tr>
	</tbody>
</table>
<!-- /row -->
@stop