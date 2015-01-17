<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="">
	<meta name="author" content="">

	<title>
		MOSPA - 3D Model Open Source Pricing API
	</title>

	<!-- Bootstrap Core CSS -->
	{{ HTML::style('theme/css/MOSPA_custom.css') }}

	<!-- Bootstrap Core CSS -->
	{{ HTML::style('theme/css/bootstrap.min.css') }}

	<!-- MetisMenu CSS -->
	<!--<link href="css/plugins/metisMenu/metisMenu.min.css" rel="stylesheet"> -->
	{{ HTML::style('theme/css/plugins/metisMenu/metisMenu.min.css') }}

	<!-- Timeline CSS -->
	<!--<link href="css/plugins/timeline.css" rel="stylesheet"> -->
	{{ HTML::style('theme/css/plugins/timeline.css') }}

	<!-- Custom CSS -->
	<!--<link href="css/sb-admin-2.css" rel="stylesheet"> -->
	{{ HTML::style('theme/css/sb-admin-2.css') }}

	<!-- Morris Charts CSS -->
	<!--<link href="css/plugins/morris.css" rel="stylesheet"> -->
	{{ HTML::style('theme/css/plugins/morris.css') }}

	<!-- Custom Fonts -->
	<!-- <link href="font-awesome-4.1.0/css/font-awesome.min.css" rel="stylesheet" type="text/css"> -->
	{{ HTML::style('theme/font-awesome-4.1.0/css/font-awesome.min.css') }}

	<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
	<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
	<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
	<![endif]-->
</head>

<body>

<div id="wrapper">

<!-- Navigation -->
@include('navigation')


<div id="page-wrapper">
<div class="row">
	<div class="col-lg-12">
		<h1 class="page-header">
			@section('title')
			@show
		</h1>
	</div>
	<!-- /.col-lg-12 -->
</div>
<!-- /.row -->
	@yield('content')
<!-- /#page-wrapper -->

</div>
<!-- /#wrapper -->


<!-- Scripts are placed here -->
{{ HTML::script('theme/js/jquery.js') }}
{{ HTML::script('theme/js/bootstrap.min.js') }}

{{ HTML::script('theme/js/plugins/metisMenu/metisMenu.min.js') }}

{{ HTML::script('theme/js/plugins/morris/raphael.min.js') }}
{{ HTML::script('theme/js/plugins/morris/morris.min.js') }}

{{ HTML::script('theme/js/sb-admin-2.js') }}

</body>
</html>
