
@extends('layouts.master')
@section('content')

{!! Form::model($module, [
    'method' => 'POST',
    'route' => ['newmodule']
]) !!}


  <h1>Nieuwe module {{$module->modulecode }}</h1>

  {{ Form::model($module, array('route' => array('newmodule'), 'method' => 'POST')) }}

    <div class="form-group">
        {{ Form::label('code', 'Modulecode') }}
        {{ Form::text('modulecode', null, array('class' => 'form-control')) }}
    </div>
    <div class="form-group">
        {{ Form::label('omschrijving', 'Moduleomschrijving') }}
        {{ Form::text('moduleomschrijving', null, array('class' => 'form-control')) }}
    </div>
    <div class="form-group">
        {{ Form::label('moduleleider', 'Moduleleider') }}
        {{ Form::text('moduleleider', null, array('class' => 'form-control')) }}
    </div>
    <div class="form-group">
        {{ Form::label('leerlijn', 'Leerlijn') }}
        {{ Form::text('leerlijn', null, array('class' => 'form-control')) }}
    </div>
    <div class="form-group">
        {{ Form::label('periode', 'Periode') }}
        {{ Form::text('periode', null, array('class' => 'form-control')) }}
    </div>
    <div class="form-group">
        {{ Form::label('studiepunten', 'Studiepunten') }}
        {{ Form::text('studiepunten', null, array('class' => 'form-control')) }}
    </div>
    {{ Form::submit('Opslaan module', array('class' => 'btn btn-primary')) }}

{{ Form::close() }}


@endsection
