
@extends('layouts.master')
@section('content')


  <h1>Beheren module</h1>

  <table id="modules" class="table table-striped table-bordered" width="100%" cellspacing="0">
    <thead>
      <tr>
        <th></th>
        <th>Specialisatie</th>
        <th>Modulecode</th>
        <th>Moduleomschrijving</th>
        <th>Moduleleider</th>
        <th>Leerlijn</th>
        <th>Periode</th>
        <th>Studiepunten</th>
        <th>Actie</th>
      </tr>
    </thead>
    <tbody>

      @foreach($modules as $module)
      <tr>
        <td></td>
        <td>
            {{ $module['specialisatie'] }}
        </td>
        <td>
            {{ $module['modulecode'] }}
        </td>
        <td>
            {{ $module['moduleomschrijving'] }}
        </td>
        <td>
            {{ $module['moduleleider'] }}
        </td>
        <td>
            {{ $module['leerlijn'] }}
        </td>
        <td>
            {{ $module['periode'] }}
        </td>
        <td>
            {{ $module['studiepunten'] }}
        </td>
        <td>
          <a href="/editmodule/{{ $module['id'] }}">Wijzigen module</a><br>
            <a href="/editmatrix/{{ $module['modulecode'] }}">Wijzigen matrix</a><br>
              <a href="/viewEindeisen/{{ $module['modulecode'] }}">Wijzigen eindeisen</a>
        </td>
      </tr>
      @endforeach
      <tr>
        <td></td>
        <td>
        </td>
        <td>
        </td>
        <td>
        </td>
        <td>
        </td>
        <td>
        </td>
        <td>
        </td>
        <td>
        </td>
        <td>
          <a href="/newmodule">Nieuwe module</a>
        </td>
      </tr>
    </tbody>
  </table>


@endsection
