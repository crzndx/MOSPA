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
	</tr>
	</thead>
	<tbody>
	<tr>
		<td>{{{ $manufacturer->id }}}</td>
		<td>{{{ $manufacturer->name }}}</td>
        <td>{{{ $manufacturer->densityInGramsPerCm }}}</td>
	</tr>
	</tbody>
</table>
<!-- /row -->
@stop