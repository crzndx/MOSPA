
@extends('layout')

@section('title')
    Learn from 3D Models (with known prices)
@stop

@section('content')
    @if (Session::has('message'))
        <div class="alert alert-info">{{ Session::get('message') }}</div>
    @endif

    {{ Form::open(array('route' => 'fullEntry.store', 'files' => true)) }}

    <h2>Manufacturer</h2>
    <div class="form-group">
        {{ Form::label('nameManufacturer', 'Name:') }}
        {{ Form::text('nameManufacturer', Input::old('nameManufacturer'), array('class' => 'form-control', 'placeholder' => 'Max Mustermann')) }}
    </div>

    <div class="form-group">
        {{ Form::label('url', 'URL:') }}
        {{ Form::text('url', Input::old('url'), array('class' => 'form-control', 'placeholder' => 'http://www.domain.com')) }}
    </div>

    <h2>Material</h2>
    <div class="form-group">
        {{ Form::label('nameMaterial', 'Material name:') }}
        {{ Form::text('nameMaterial', Input::old('nameMaterial'), array('class' => 'form-control', 'placeholder' => 'Plastic')) }}
    </div>

    <div class="form-group">
        {{ Form::label('densityInGramsPerCm', 'Density (in g/cm^3):') }}
        {{ Form::text('densityInGramsPerCm', Input::old('densityInGramsPerCm'), array('class' => 'form-control', 'placeholder' => '2.21')) }}
    </div>

    <div class="form-group">
        {{ Form::label('pricePerKg', 'Price (per kg):') }}
        {{ Form::text('pricePerKg', Input::old('pricePerKg'), array('class' => 'form-control', 'placeholder' => '1.11')) }}
    </div>

    <h2>Printer</h2>
    <div class="form-group">
        {{ Form::label('namePrinter', 'Name:') }}
        {{ Form::text('namePrinter', Input::old('namePrinter'), array('class' => 'form-control', 'placeholder' => 'Makerbot X18')) }}
    </div>

    <h2>3D Model</h2>
    <div class="form-group">
        {{ Form::label('nameModel', 'Name:') }}
        {{ Form::text('nameModel', Input::old('nameModel'), array('class' => 'form-control', 'placeholder' => 'Fancy object name')) }}
    </div>

    <!-- not needed anymore, automatic calculation
    <div class="form-group">
        {{ Form::label('volume', 'Volume (in cm^3):') }}
        {{ Form::text('volume', Input::old('volume'), array('class' => 'form-control', 'placeholder' => '5553')) }}
    </div>

    <div class="form-group">
        {{ Form::label('weight', 'Weight (in kg):') }}
        {{ Form::text('weight', Input::old('weight'), array('class' => 'form-control', 'placeholder' => '0.120')) }}
    </div>
    -->

    <div class="form-group">
        {{ Form::label('data', 'Upload STL file:')}}
        {{ Form::file('data') }}
    </div>

    <div class="form-group">
        {{ Form::label('infill', 'Infill (in %):') }}
        {{ Form::number('infill', Input::old('infill'), array('class' => 'form-control', 'placeholder' => '10')) }}
    </div>

    <h2>Price of the model</h2>
    <div class="form-group">
        {{ Form::label('price', 'Price:') }}
        {{ Form::text('price', Input::old('price'), array('class' => 'form-control', 'placeholder' => '123.45')) }}
    </div>

    <div class="form-group">
        {{ Form::label('currency', 'Currency symbol:') }}
       <!-- {{ Form::text('currency', Input::old('currency'), array('class' => 'form-control', 'placeholder' => '€')) }} -->
        {{ Form::select('currency', array('€' => '€ (Euro)', '$' => '$ (Dollar)'), '€') }}
    </div>


    <div class="form-group">
        {{ Form::submit('Submit', array('class' => 'btn btn-primary')) }}
    </div>
    {{ Form::close() }}

    @if ($errors->any())
        <div class="alert-warning">
            {{ implode('', $errors->all('<li class="error">:message</li>')) }}
        </div>
        @endif

@stop
