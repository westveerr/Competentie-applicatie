
@extends('layouts.master')
@section('content')

{!! Form::model($matrix, [
    'method' => 'PUT',
    'route' => ['editmatrix', $matrix->id]
]) !!}

  <h1>Wijzigen competentiematrix {{$matrix-> module }}</h1>
  {{ Form::model($matrix, array('route' => array('editmatrix', $matrix->id), 'method' => 'PUT')) }}
  <table class="table table-striped">
    <thead>
      <tr>
        <th></th>
        <th>Beheren</th>
        <th>Analyseren</th>
        <th>Adviseren</th>
        <th>Ontwerpen</th>
        <th>Realiseren</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <th scope="row">Gebruikersinteractie</th>
        <td>
            {{ Form::text('GIBE', $matrix->GIBE, array('class' => 'form-control')) }}
        </td>
        <td>
          {{ Form::text('GIAN', $matrix->GIAN, array('class' => 'form-control')) }}
        </td>
        <td>
          {{ Form::text('GIAD', $matrix->GIAD, array('class' => 'form-control')) }}
        </td>
        <td>
          {{ Form::text('GION', $matrix->GION, array('class' => 'form-control')) }}
        </td>
        <td>
          {{ Form::text('GIRE', $matrix->GIRE, array('class' => 'form-control')) }}
        </td>
      </tr>
      <tr>
        <th scope="row">Bedrijfsprocessen</th>
        <td>
            {{ Form::text('BPBE', $matrix->BPBE, array('class' => 'form-control')) }}
        </td>
        <td>
          {{ Form::text('BPAN', $matrix->BPAN, array('class' => 'form-control')) }}
        </td>
        <td>
          {{ Form::text('BPAD', $matrix->BPAD, array('class' => 'form-control')) }}
        </td>
        <td>
          {{ Form::text('BPON', $matrix->BPON, array('class' => 'form-control')) }}
        </td>
        <td>
          {{ Form::text('PBRE', $matrix->BPRE, array('class' => 'form-control')) }}
        </td>
      </tr>
      <tr>
        <th scope="row">Infrastructuur</th>
        <td>
            {{ Form::text('INBE', $matrix->INBE, array('class' => 'form-control')) }}
        </td>
        <td>
          {{ Form::text('INAN', $matrix->INAN, array('class' => 'form-control')) }}
        </td>
        <td>
          {{ Form::text('INAD', $matrix->INAD, array('class' => 'form-control')) }}
        </td>
        <td>
          {{ Form::text('INON', $matrix->INON, array('class' => 'form-control')) }}
        </td>
        <td>
          {{ Form::text('INRE', $matrix->INRE, array('class' => 'form-control')) }}
        </td>
      </tr>
      <tr>
        <th scope="row">Software</th>
        <td>
            {{ Form::text('SWBE', $matrix->SWBE, array('class' => 'form-control')) }}
        </td>
        <td>
          {{ Form::text('SWAN', $matrix->SWAN, array('class' => 'form-control')) }}
        </td>
        <td>
          {{ Form::text('SWAD', $matrix->SWAD, array('class' => 'form-control')) }}
        </td>
        <td>
          {{ Form::text('SWON', $matrix->SWON, array('class' => 'form-control')) }}
        </td>
        <td>
          {{ Form::text('SWRE', $matrix->SWRE, array('class' => 'form-control')) }}
        </td>
      </tr>
      <tr>
        <th scope="row">Hardware interfacing</th>
        <td>
            {{ Form::text('HIBE', $matrix->HIBE, array('class' => 'form-control')) }}
        </td>
        <td>
          {{ Form::text('HIAN', $matrix->HIAN, array('class' => 'form-control')) }}
        </td>
        <td>
          {{ Form::text('HIAD', $matrix->HIAD, array('class' => 'form-control')) }}
        </td>
        <td>
          {{ Form::text('HION', $matrix->HION, array('class' => 'form-control')) }}
        </td>
        <td>
          {{ Form::text('HIRE', $matrix->HIRE, array('class' => 'form-control')) }}
        </td>
      </tr>
    </tbody>
  </table>

  {{ Form::submit('Wijzigen matrix', array('class' => 'btn btn-primary')) }}

{{ Form::close() }}

@endsection
