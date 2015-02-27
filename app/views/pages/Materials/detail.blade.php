@extends('layout')

@section('title')
Material
@stop

@section('content')
<h2>{{{ $material->name }}}</h2>
<table class="table table-bordered">
	<thead>
	<tr>
		<th>ID</th>
		<th>Name</th>
        <th>Density (in g/cm^3)</th>
        <th>Price (per kg)</th>
	</tr>
	</thead>
	<tbody>
	<tr>
		<td>{{{ $material->id }}}</td>
		<td>{{{ $material->name }}}</td>
        <td>{{{ $material->densityInGramsPerCm }}}</td>
        <td>{{{ $material->densityInGramsPerCm }}}</td>
	</tr>
	</tbody>
</table>
<!-- /row -->
@stop