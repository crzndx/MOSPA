@extends('layout')

@section('title')
    Index Full Entries
@stop

@section('content')
    <div class="row correctpadding">

        @if (Session::has('message'))
            <div class="alert alert-info">{{ Session::get('message') }}</div>
        @endif

        <table class="table table-bordered">
            <thead>
            <tr>
                <th>Material</th>
                <th>3D Model</th>
                <th>Material Density (in g/cm^3)</th>
                <th>Material Price (per kg)</th>
                <th>Model Infill (in %)</th>
                <th>Model Volume (in cm^3)</th>
                <th>Model Weight (in g)</th>
                <th>Price</th>
            </tr>
            </thead>
            <tbody>
            @foreach($fullEntries as $fullEntry)
                <tr>
                    <td>{{{ $fullEntry->name }}}</td>
                    <td>{{{ $fullEntry->data }}}</td>
                    <td>{{{ $fullEntry->densityInGramsPerCm }}}</td>
                    <td>{{{ $fullEntry->pricePerKg }}}</td>
                    <td>{{{ $fullEntry->infill }}}</td>
                    <td>{{{ $fullEntry->volume }}}</td>
                    <td>{{{ $fullEntry->weight }}}</td>
                    <td>{{{ $fullEntry->price }}}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
    <!-- /row -->

    <script>
        var data = <?php echo json_encode($js_data) ?>;

        console.log(data);
        console.log(data.length);
        console.log(data[0].data);
    </script>
@stop