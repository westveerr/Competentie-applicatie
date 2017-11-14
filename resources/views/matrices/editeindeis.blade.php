
@extends('layouts.master')
@section('content')

{!! Form::model($eindeis, [
    'method' => 'PUT',
    'route' => ['editeindeis', $eindeis->id]
]) !!}


  <h1>Wijzigen eindeis {{$eindeis->modulecode}}</h1>

  {{ Form::model($eindeis, array('route' => array('editeindeis' , $eindeis->id), 'method' => 'PUT')) }}

    <div class="form-group">
        {{ Form::label('omschrijving', 'Omschrijving') }}
        {{ Form::text('eindeisomschrijving', $eindeis->eindeis, array('class' => 'form-control')) }}
    </div>
    <div class="form-group">
        {{ Form::label('soort', 'Soort') }}
        kennis {{ Form::radio('eindeissoort', 'kennis', array('class' => 'form-control')) }}
        inzicht {{ Form::radio('eindeissoort', 'inzicht', array('class' => 'form-control')) }}
        vaardigheid {{ Form::radio('eindeissoort', 'vaardigheid', array('class' => 'form-control')) }}
    </div>
    {{ Form::submit('Opslaan eindeis', array('class' => 'btn btn-primary')) }}

{{ Form::close() }}


@endsection
