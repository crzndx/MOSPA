@extends('layout')

@section('title')
    Calculated price
@stop

@section('content')
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-teal">
                <div class="panel-heading">
                    <div class="row">
                        <div class="col-xs-9 text-left">
                            <div class="huge">{{{ $price }}} {{{ $currency }}}</div>
                            <div>Estimated price depending on your inputs</div>
                        </div>
                        <div class="col-xs-3 text-right">
                            <i class="fa fa-money fa-4x"></i>
                        </div>
                    </div>
                </div>
                <a href="/fullEntry/create">
                    <div class="panel-footer">
                        <span class="pull-left">Calculate another price</span>
                        <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                        <div class="clearfix"></div>
                    </div>
                </a>
            </div>
        </div>
    </div>

    <script src="theme/js/plugins/thingiviewjs/Three.js"></script>
    <script src="theme/js/plugins/thingiviewjs/plane.js"></script>
    <script src="theme/js/plugins/thingiviewjs/thingiview.js"></script>

    <script>
        window.onload = function() {
            thingiurlbase = "theme/js/plugins/thingiviewjs/";
            thingiview = new Thingiview("viewer");
            thingiview.setObjectColor('#C0D8F0');
            thingiview.initScene();
            thingiview.loadSTL("/../../../../uploads/{{{ $filename }}}");
        }
    </script>

    </head>
    <body>

    <div class="row correctpadding">
        <div class="text-left" style="width:430px; float:left;">
            <h2>3D Model Preview</h2>
            <div class="panel panel-default">
                <div class="panel-body">
                    <div id="viewer" style="width: 400px; height:400px;"></div>
                </div>
            </div>
        </div>

        <div class="text-left" style="margin-left: 460px; padding-right: 0px; height: 330px;">
            <h2>Model attributes</h2>
            <div class="panel panel-default">
                <div class="panel-body" style="padding-bottom: 0px;">

                    <div class="table-responsive">
                        <table class="table table-bordered table-hover">
                            <tbody>
                            <tr>
                                <td>Manufacturer:</td>
                                <td>{{{ $nameManufacturer }}}</td>
                            </tr>
                            <tr>
                                <td>Web:</td>
                                <td>{{{ $url }}}</td>
                            </tr>
                            <tr>
                                <td>Material:</td>
                                <td>{{{ $nameMaterial }}}</td>
                            </tr>
                            <tr>
                                <td>Material Density:</td>
                                <td>{{{ $densityInGramsPerCm }}} g/cm^3</td>
                            </tr>
                            <tr>
                                <td>Material Density:</td>
                                <td>{{{ $densityInGramsPerCm }}}</td>
                            </tr>
                            <tr>
                                <td>Material Price:</td>
                                <td>{{{ $pricePerKg }}}{{{ $currency }}}/kg</td>
                            </tr>
                            <tr>
                                <td>Material Price:</td>
                                <td>{{{ $pricePerKg }}}{{{ $currency }}} per kg</td>
                            </tr>
                            <tr>
                                <td>Infill Material:</td>
                                <td>{{{ $infill }}}%</td>
                            </tr>
                            <tr>
                                <td>Weight:</td>
                                <td>{{{ $weight }}}g</td>
                            </tr>
                            <tr>
                                <td>Volume:</td>
                                <td>{{{ $volume }}}%</td>
                            </tr>
                            <tr>
                                <td>Price:</td>
                                <td>{{{ $price }}} {{{ $currency }}}</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

@stop