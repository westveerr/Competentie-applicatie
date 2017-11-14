
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
            {{ $eindeis['eindeissoort'] }}
        </td>
        <td>
              <a href="/editeindeis/{{ $eindeis['id'] }}">Wijzigen</a>
        </td>
      </tr>
      @endforeach
      <tr>
        </td>
        <td>
        </td>
        <td>
        </td>
        <td>
        </td>
        <td>
          <a href="/neweindeis/{{ $modulecode }}">Nieuwe eindeis</a>
        </td>
      </tr>
    </tbody>
  </table>
@endsection
