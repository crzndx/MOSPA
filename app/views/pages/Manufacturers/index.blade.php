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
				<!-- Button trigger modal -->
				<button type="button" class="btn btn-danger" data-toggle="modal" data-target="#modal{{{ $manufacturer->id }}}">
					Delete
				</button>

				<!-- Modal -->
				<div class="modal fade" id="modal{{{ $manufacturer->id }}}" tabindex="-1" role="dialog" aria-labelledby="modalLabel{{{ $manufacturer->id }}}" aria-hidden="true">
					<div class="modal-dialog">
						<div class="modal-content">
							<div class="modal-header">
								<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
								<h4 class="modal-title" id="modalLabel{{{ $manufacturer->id }}}">Confirm deletion</h4>
							</div>
							<div class="modal-body">
								Do you really want to delete this entry?
							</div>
							<div class="modal-footer">
								<button type="button" class="btn btn-default" data-dismiss="modal" style="float:left;">Close</button>
								{{ Form::open(array('method' => 'DELETE', 'route' => array('manufacturers.destroy', $manufacturer->id))) }}
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
</div>
<!-- /row -->
@stop