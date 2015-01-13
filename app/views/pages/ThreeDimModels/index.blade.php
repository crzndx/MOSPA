@extends('layout')

@section('title')
	3D Models
@stop

@section('content')
<div class="row correctpadding">

	@foreach($priceOfModels as $model)
		{{ $model }} <br>
	@endforeach

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
			<!--<td>{{{ $threeDimModel->printerId }}}</td>-->
		</tr>
		@endforeach
		</tbody>
	</table>

</div>
<!-- /row -->
@stop