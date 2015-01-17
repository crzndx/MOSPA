@extends('layout')

@section('title')
	Manufacturers
@stop

@section('content')
<div class="row correctpadding">

	@if (Session::has('message'))
	<div class="alert alert-info">{{ Session::get('message') }}</div>
	@endif

	<table class="table table-bordered">
		<thead>
		<tr>
			<th>ID</th>
			<th>Name</th>
			<th>URL</th>
			<th>Edit?</th>
			<th>Delete?</th>
		</tr>
		</thead>
		<tbody>
		@foreach($manufacturers as $manufacturer)
		<tr>
			<td>{{{ $manufacturer->id }}}</td>
			<td>{{{ $manufacturer->name }}}</td>
			<td>{{{ $manufacturer->url }}}</td>
			<td>{{ link_to_route('manufacturers.edit', 'Edit', array($manufacturer->id), array('class' => 'btn btn-info')) }}</td>
			<td>
				{{ Form::open(array('method' => 'DELETE', 'route' => array('manufacturers.destroy', $manufacturer->id))) }}
				{{ Form::submit('Delete', array('class' => 'btn btn-danger')) }}
				{{ Form::close() }}
			</td>
		</tr>
		@endforeach
		</tbody>
	</table>
</div>
<!-- /row -->
@stop