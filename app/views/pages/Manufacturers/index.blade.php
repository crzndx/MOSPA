@extends('layout')

@section('title')
	Manufacturers
@stop

@section('content')
<div class="row correctpadding">

	<table class="table table-bordered">
		<thead>
		<tr>
			<th>ID</th>
			<th>Name</th>
			<th>URL</th>
		</tr>
		</thead>
		<tbody>
		@foreach($manufacturers as $manufacturer)
		<tr>
			<td>{{{ $manufacturer->id }}}</td>
			<td>{{{ $manufacturer->name }}}</td>
			<td>{{{ $manufacturer->url }}}</td>
		</tr>
		@endforeach
		</tbody>
	</table>
</div>
<!-- /row -->
@stop