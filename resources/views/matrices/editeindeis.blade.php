
@extends('layouts.master')
@section('content')

{!! Form::model($module, [
    'method' => 'PUT',
    'route' => ['editmodule', $module->id]
]) !!}


  <h1>Wijzigen module {{$module->modulecode }}</h1>


  {{ Form::model($module, array('route' => array('editmodule', $module->id), 'method' => 'PUT')) }}
    <div class="form-group">
        {{ Form::label('specialisatie', 'Specialisatie') }}
        {{ Form::text('specialisatie', $module->specialisatie, array('class' => 'form-control')) }}
    </div>
    <div class="form-group">
        {{ Form::label('modulecode', 'Modulecode') }}
        {{ Form::text('modulecode', $module->modulecode, array('class' => 'form-control')) }}
    </div>
    <div class="form-group">
        {{ Form::label('omschrijving', 'Moduleomschrijving') }}
        {{ Form::text('moduleomschrijving', $module->moduleomschrijving, array('class' => 'form-control')) }}
    </div>
    <div class="form-group">
        {{ Form::label('moduleleider', 'Moduleleider') }}
        {{ Form::text('moduleleider', $module->moduleleider, array('class' => 'form-control')) }}
    </div>
    <div class="form-group">
        {{ Form::label('leerlijn', 'Leerlijn') }}
        {{ Form::text('leerlijn', $module->leerlijn, array('class' => 'form-control')) }}
    </div>
    <div class="form-group">
        {{ Form::label('periode', 'Periode') }}
        {{ Form::text('periode', $module->periode, array('class' => 'form-control')) }}
    </div>
    <div class="form-group">
        {{ Form::label('studiepunten', 'Studiepunten') }}
        {{ Form::text('studiepunten', $module->studiepunten, array('class' => 'form-control')) }}
    </div>
    {{ Form::submit('Wijzigen module', array('class' => 'btn btn-primary')) }}

{{ Form::close() }}


@endsection
