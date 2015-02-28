@extends('layout')

@section('title')
	Dashboard
@stop

@section('content')

<div class="row-fluid-5">
	<div class="span2">
		<div class="panel panel-primary">
			<div class="panel-heading">
				<div class="row">
					<div class="col-xs-3">
						<i class="fa fa-shopping-cart fa-4x"></i>
					</div>
					<div class="col-xs-9 text-right">
						<div class="huge">{{ $allManufacturers }}</div>
						<div>Manufacturers</div>
					</div>
				</div>
			</div>
			<a href="/manufacturers">
				<div class="panel-footer">
					<span class="pull-left">View Details</span>
					<span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
					<div class="clearfix"></div>
				</div>
			</a>
		</div>
	</div>
	<div class="span2">
		<div class="panel panel-purple">
			<div class="panel-heading">
				<div class="row">
					<div class="col-xs-3">
						<i class="fa fa-wrench fa-4x"></i>
					</div>
					<div class="col-xs-9 text-right">
						<div class="huge">{{ $allMaterials }}</div>
						<div>Materials</div>
					</div>
				</div>
			</div>
			<a href="/materials">
				<div class="panel-footer">
					<span class="pull-left">View Details</span>
					<span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
					<div class="clearfix"></div>
				</div>
			</a>
		</div>
	</div>
	<div class="span2">
		<div class="panel panel-green">
			<div class="panel-heading">
				<div class="row">
					<div class="col-xs-3">
						<i class="fa fa-print fa-4x"></i>
					</div>
					<div class="col-xs-9 text-right">
						<div class="huge">{{ $allPrinters }}</div>
						<div>Printers</div>
					</div>
				</div>
			</div>
			<a href="/printers">
				<div class="panel-footer">
					<span class="pull-left">View Details</span>
					<span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
					<div class="clearfix"></div>
				</div>
			</a>
		</div>
	</div>
	<div class="span2">
		<div class="panel panel-yellow">
			<div class="panel-heading">
				<div class="row">
					<div class="col-xs-3">
						<i class="fa fa-cube fa-4x"></i>
					</div>
					<div class="col-xs-9 text-right">
						<div class="huge">{{ $allThreeDimModels }}</div>
						<div>3D Models</div>
					</div>
				</div>
			</div>
			<a href="/threeDimModels">
				<div class="panel-footer">
					<span class="pull-left">View Details</span>
					<span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
					<div class="clearfix"></div>
				</div>
			</a>
		</div>
	</div>
	<div class="span2">
		<div class="panel panel-red">
			<div class="panel-heading">
				<div class="row">
					<div class="col-xs-3">
						<i class="fa fa-money fa-4x"></i>
					</div>
					<div class="col-xs-9 text-right">
						<div class="huge">{{ $allPrices }}</div>
						<div>Prices</div>
					</div>
				</div>
			</div>
			<a href="/prices">
				<div class="panel-footer">
					<span class="pull-left">View Details</span>
					<span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
					<div class="clearfix"></div>
				</div>
			</a>
		</div>
	</div>
</div>
<!-- /row -->


<div class="row">
<div class="col-lg-6">
    <div class="panel panel-teal">
        <div class="panel-heading">
            <div class="row">
                <div class="col-xs-3">
                    <i class="fa fa-euro fa-4x"></i>
                </div>
                <div class="col-xs-9 text-right">
                    <div class="huge">Calculate price</div>
                    <div>by uploading a 3D model </div>
                </div>
            </div>
        </div>
        <a href="/fullEntry/create">
            <div class="panel-footer">
                <span class="pull-left">Calculate price</span>
                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                <div class="clearfix"></div>
            </div>
        </a>
    </div>
</div>

<div class="col-lg-6">
    <div class="panel panel-violet">
        <div class="panel-heading">
            <div class="row">
                <div class="col-xs-9 text-left">
                    <div class="huge">Show all</div>
                    <div>thus far calculated prices</div>
                </div>
                <div class="col-xs-3 text-right">
                    <i class="fa fa-list fa-4x"></i>
                </div>
            </div>
        </div>
        <a href="/fullEntry">
            <div class="panel-footer">
                <span class="pull-left">Show all</span>
                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                <div class="clearfix"></div>
            </div>
        </a>
    </div>
</div>
</div>

@stop