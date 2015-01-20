@extends('layout')

@section('title')
	Prices
@stop

@section('content')
	<table class="table table-bordered">
		<thead>
		<tr>
			<th>ID</th>
			<th>Price</th>
			<th>Currency</th>
			<th>Aggregated</th>
			<th>Edit?</th>
			<th>Delete?</th>
		</tr>
		</thead>
		<tbody>
		@foreach($prices as $price)
		<tr>
			<td>{{{ $price->id }}}</td>
			<td>{{{ $price->price }}}</td>
			<td>{{{ $price->currency }}}</td>
			<td>{{{ $price->price }}} {{{ $price->currency }}}</td>
			<td>{{ link_to_route('prices.edit', 'Edit', array($price->id), array('class' => 'btn btn-info')) }}</td>
			<td>
				<!-- Button trigger modal -->
				<button type="button" class="btn btn-danger" data-toggle="modal" data-target="#modal{{{ $price->id }}}">
					Delete
				</button>

				<!-- Modal -->
				<div class="modal fade" id="modal{{{ $price->id }}}" tabindex="-1" role="dialog" aria-labelledby="modalLabel{{{ $price->id }}}" aria-hidden="true">
					<div class="modal-dialog">
						<div class="modal-content">
							<div class="modal-header">
								<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
								<h4 class="modal-title" id="modalLabel{{{ $price->id }}}">Confirm deletion</h4>
							</div>
							<div class="modal-body">
								Do you really want to delete this entry?
							</div>
							<div class="modal-footer">
								<button type="button" class="btn btn-default" data-dismiss="modal" style="float:left;">Close</button>
								{{ Form::open(array('method' => 'DELETE', 'route' => array('prices.destroy', $price->id))) }}
								{{ Form::submit('Delete', array('class' => 'btn btn-danger')) }}
								{{ Form::close() }}
							</div>
						</div>
					</div>
				</div>
			</td>
		</tr>
		@endforeach
		</tbody>
	</table>
<!-- /row -->
@stop