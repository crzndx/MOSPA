@extends('layout')

@section('title')
	Materials
@stop

@section('content')
<div class="row correctpadding">

	<table class="table table-bordered">
		<thead>
		<tr>
			<th>ID</th>
			<th>Name</th>
		</tr>
		</thead>
		<tbody>
		@foreach($materials as $material)
		<tr>
			<td>{{{ $material->id }}}</td>
			<td>{{{ $material->name }}}</td>
		</tr>
		@endforeach
		</tbody>
	</table>

</div>
<!-- /row -->
@stop