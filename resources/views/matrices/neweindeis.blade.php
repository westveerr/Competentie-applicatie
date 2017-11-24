
@extends('layouts.master')
@section('content')

{!! Form::model($eindeis, [
    'method' => 'POST',
    'route' => ['neweindeis']
]) !!}


  <h1>Nieuwe eindeis {{$modulecode }}</h1>

  {{ Form::model($eindeis, array('route' => array('neweindeis'), 'method' => 'POST')) }}

    {{ Form::hidden('modulecode', $modulecode ) }}

    <div class="form-group">
        {{ Form::label('omschrijving', 'Omschrijving') }}
        {{ Form::text('eindeisomschrijving', null, array('class' => 'form-control')) }}
    </div>
    <div class="form-group">
        {{ Form::label('soort', 'Soort') }}
        {{ Form::text('eindeissoort', null, array('class' => 'form-control')) }}
    </div>
    {{ Form::submit('Opslaan eindeis', array('class' => 'btn btn-primary')) }}

{{ Form::close() }}


@endsection
