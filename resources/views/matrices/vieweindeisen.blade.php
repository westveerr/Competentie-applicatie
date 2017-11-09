
@extends('layouts.master')
@section('content')
  <h1>Beheren eindeisen - {{ $modulecode }}</h1>

  <table class="table table-striped">
    <thead>
      <tr>
        <th></th>
        <th>Eindeis</th>
        <th>Actie</th>
      </tr>
    </thead>
    <tbody>

      @foreach($eindeisen as $eindeis)
      <tr>
        <td></td>
        <td>
            {{ $eindeis['eindeis'] }}
        </td>
        <td>
          <a href="/editmodule/{{ $module['id'] }}">Wijzigen module</a><br>
            <a href="/editmatrix/{{ $module['modulecode'] }}">Wijzigen matrix</a><br>
              <a href="/editmodule/{{ $module['id'] }}">Wijzigen eindeisen</a>
        </td>
      </tr>
      @endforeach
      <tr>
        </td>
        <td>
        </td>
        <td>
          <a href="/newmodule">Nieuwe eindeis</a>
        </td>
      </tr>
    </tbody>
  </table>


@endsection
