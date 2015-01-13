@extends('layout')

@section('title')
Manufactuerer AND printer
@stop

@section('content')
<div class="row correctpadding">

	Printer of ID1: {{ $printerOfManufacturer }} <br>

	<table class="table table-bordered">
		@foreach($allManufacturers as $manufacturer)
		<tr>
			<td>{{{ $manufacturer->id }}}</td>
			<td>{{{ $manufacturer->name }}}</td>
		</tr>
		@endforeach
		</tbody>
	</table>

</div>
<!-- /row -->
@stop