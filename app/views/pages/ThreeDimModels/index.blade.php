@extends('layout')

@section('title')
	3D Models
@stop

@section('content')

	<table class="table table-bordered">
		<thead>
		<tr>
			<th>ID</th>
			<th>Name</th>
			<th>volume</th>
			<th>weight</th>
            <th>Infill</th>
            <th>Filepath</th>
			<th>Edit?</th>
			<th>Delete?</th>
		</tr>
		</thead>
		<tbody>
		@foreach($threeDimModels as $threeDimModel)
		<tr>
			<td>{{{ $threeDimModel->id }}}</td>
			<td>{{{ $threeDimModel->name }}}</td>
			<td>{{{ $threeDimModel->volume }}}</td>
			<td>{{{ $threeDimModel->weight }}}</td>
            <td>{{{ $threeDimModel->infill }}}</td>
            <td>{{{ $threeDimModel->data }}}</td>
			<td>{{ link_to_route('threeDimModels.edit', 'Edit', array($threeDimModel->id), array('class' => 'btn btn-info')) }}</td>
			<td>
				<!-- Button trigger modal -->
				<button type="button" class="btn btn-danger" data-toggle="modal" data-target="#modal{{{ $threeDimModel->id }}}">
					Delete
				</button>

				<!-- Modal -->
				<div class="modal fade" id="modal{{{ $threeDimModel->id }}}" tabindex="-1" role="dialog" aria-labelledby="modalLabel{{{ $threeDimModel->id }}}" aria-hidden="true">
					<div class="modal-dialog">
						<div class="modal-content">
							<div class="modal-header">
								<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
								<h4 class="modal-title" id="modalLabel{{{ $threeDimModel->id }}}">Confirm deletion</h4>
							</div>
							<div class="modal-body">
								Do you really want to delete this entry?
							</div>
							<div class="modal-footer">
								<button type="button" class="btn btn-default" data-dismiss="modal" style="float:left;">Close</button>
								{{ Form::open(array('method' => 'DELETE', 'route' => array('threeDimModels.destroy', $threeDimModel->id))) }}
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