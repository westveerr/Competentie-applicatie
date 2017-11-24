
@extends('layouts.master')
@section('content')
  <h1>Overzicht van alle modules</h1>

  <table id="modulematrices" class="table table-striped table-bordered" width="100%" cellspacing="0">
    <thead>
      <tr>
        <th></th>
        <th>Specialisatie</th>
        <th>Modulecode</th>
        <th>Periode</th>
        <th>Matrix</th>
        <th>Eindeisen</th>
      </tr>
    </thead>

    @foreach($allmatrices as $matrix)
      <tr>
      <td></td>
      <td>{{ $matrix->specialisatie }}</td>
      <td>{{ $matrix->modulecode }}</td>
      <td>{{ $matrix->periode }}</td>
      <td>
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
              <td class="level{{ $matrix->GIBE }}">
                @if($matrix->GIBE > 0)
                    {{ $matrix->GIBE }}
                  @endif
              </td>
              <td class="level{{ $matrix->GIAN }}">
                @if($matrix->GIAN > 0)
                    {{ $matrix->GIAN }}
                  @endif
              </td>
              <td class="level{{ $matrix->GIAD }}">
                @if($matrix->GIAD > 0)
                    {{ $matrix->GIAD }}
                  @endif
              </td>
              <td class="level{{ $matrix->GION }}">
                @if($matrix->GION > 0)
                    {{ $matrix->GION }}
                  @endif
              </td>
              <td class="level{{ $matrix->GIRE }}">
                @if($matrix->GIRE > 0)
                    {{ $matrix->GIRE }}
                @endif
              </td>
            </tr>
            <tr>
              <th scope="row">Bedrijfsprocessen</th>
              <td class="level{{ $matrix->BPBE }}">
                @if($matrix->BPBE > 0)
                    {{ $matrix->BPBE }}
                  @endif
              </td>
              <td class="level{{ $matrix->BPAN }}">
                @if($matrix->BPAN > 0)
                    {{ $matrix->BPAN }}
                  @endif
              </td>
              <td class="level{{ $matrix->BPAD }}">
                @if($matrix->BPAD > 0)
                    {{ $matrix->BPAD }}
                  @endif
              </td>
              <td class="level{{ $matrix->BPON }}">
                @if($matrix->BPON > 0)
                    {{ $matrix->BPON }}
                  @endif
              </td>
              <td class="level{{ $matrix->BPRE }}">
                @if($matrix->BPRE > 0)
                    {{ $matrix->BPRE }}
                @endif
              </td>
            </tr>
            <tr>
              <th scope="row">Infrastructuur</th>
              <td class="level{{ $matrix->INBE }}">
                @if($matrix->INBE > 0)
                    {{ $matrix->INBE }}
                  @endif
              </td>
              <td class="level{{ $matrix->INAN }}">
                @if($matrix->INAN > 0)
                    {{ $matrix->INAN }}
                  @endif
              </td>
              <td class="level{{ $matrix->INAD }}">
                @if($matrix->INAD > 0)
                    {{ $matrix->INAD }}
                  @endif
              </td>
              <td class="level{{ $matrix->INON }}">
                @if($matrix->INON > 0)
                    {{ $matrix->INON }}
                  @endif
              </td>
              <td class="level{{ $matrix->INRE }}">
                @if($matrix->INRE > 0)
                    {{ $matrix->INRE }}
                @endif
              </td>
            </tr>
            <tr>
              <th scope="row">Software</th>
              <td class="level{{ $matrix->SWBE }}">
                @if($matrix->SWBE > 0)
                    {{ $matrix->SWBE }}
                  @endif
              </td>
              <td class="level{{ $matrix->SWAN }}">
                @if($matrix->SWAN > 0)
                    {{ $matrix->SWAN }}
                  @endif
              </td>
              <td class="level{{ $matrix->SWAD }}">
                @if($matrix->SWAD > 0)
                    {{ $matrix->SWAD }}
                  @endif
              </td>
              <td class="level{{ $matrix->SWON }}">
                @if($matrix->SWON > 0)
                    {{ $matrix->SWON }}
                  @endif
              </td>
              <td class="level{{ $matrix->SWRE }}">
                @if($matrix->SWRE > 0)
                    {{ $matrix->SWRE }}
                @endif
              </td>
            </tr>
            <tr>
              <th scope="row">Hardware interfacing</th>
              <td class="level{{ $matrix->HIBE }}">
                @if($matrix->HIBE > 0)
                    {{ $matrix->HIBE }}
                  @endif
              </td>
              <td class="level{{ $matrix->HIAN }}">
                @if($matrix->HIAN > 0)
                    {{ $matrix->HIAN }}
                  @endif
              </td>
              <td class="level{{ $matrix->HIAD }}">
                @if($matrix->HIAD > 0)
                    {{ $matrix->HIAD }}
                  @endif
              </td>
              <td class="level{{ $matrix->HION }}">
                @if($matrix->HION > 0)
                    {{ $matrix->HION }}
                  @endif
              </td>
              <td class="level{{ $matrix->HIRE }}">
                @if($matrix->HIRE > 0)
                    {{ $matrix->HIRE }}
                @endif
              </td>
            </tr>
          </tbody>
        </table>
      </td>
      <td>
        eindeisen
      </td>
    </tr>
      @endforeach
@endsection
