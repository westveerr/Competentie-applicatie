
@extends('layouts.master')
@section('content')
  <h1>{{ $specialisatie}}</h1>
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

      @foreach($competenties as $competentie)
      <tr>
        <th scope="row">{{$competentie['laag']}}</th>
        <td class="level{{ $competentie['BE'] }}">
          @if($competentie['BE'] > 0)
            <button type="button" class="btn" data-toggle="popover" title="Modules" data-html="true" data-content="
            @foreach($competentie['BEmodule'] as $bemodule)
              {{$bemodule['module']}} {{$bemodule['be']}}<br>
            @endforeach">
              {{ $competentie['BE'] }}
            </button>
          @endif
        </td>
        <td class="level{{ $competentie['AN'] }}">
          @if($competentie['AN'] > 0)
            <button type="button" class="btn" data-toggle="popover" title="Modules" data-html="true" data-content="
            @foreach($competentie['ANmodule'] as $anmodule)
              {{$anmodule['module']}} {{$anmodule['an']}}<br>
            @endforeach">
              {{ $competentie['AN'] }}
            </button>
          @endif
        </td>
        <td class="level{{ $competentie['AD'] }}">
          @if($competentie['AD'] > 0)
            <button type="button" class="btn" data-toggle="popover" title="Modules" data-html="true" data-content="
            @foreach($competentie['ADmodule'] as $admodule)
              {{$admodule['module']}} {{$admodule['ad']}}<br>
            @endforeach">
              {{ $competentie['AD'] }}
            </button>
          @endif
        </td>
        <td class="level{{ $competentie['ON'] }}">
          @if($competentie['ON'] > 0)
            <button type="button" class="btn" data-toggle="popover" title="Modules" data-html="true" data-content="
            @foreach($competentie['ONmodule'] as $onmodule)
              {{$onmodule['module']}} {{$onmodule['on']}}<br>
            @endforeach">
              {{ $competentie['ON'] }}
            </button>
          @endif
        </td>
        <td class="level{{ $competentie['RE'] }}">
          @if($competentie['RE'] > 0)
            <button type="button" class="btn" data-toggle="popover" title="Modules" data-html="true" data-content="
            @foreach($competentie['REmodule'] as $remodule)
              {{$remodule['module']}} {{$remodule['re']}}<br>
            @endforeach">
              {{ $competentie['RE'] }}
            </button>
          @endif
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>

  <form class="navbar-form navbar-left" name="filterMatrix" action="filterMatrix" method="post">
    <input type="hidden" name="_token" value="{{ csrf_token() }}" />
    <input type="hidden" name="specialisatie" value="{{ $specialisatie }}" />


    <div>
      <label for="sel1">Selecteer periode:</label> <input name="periode_slider" id="ex1" data-slider-id='ex1Slider' type="text" data-slider-min="0" data-slider-max="10" data-slider-step="1" data-slider-value="{{$periode}}" onChange="javascript:document.forms[0].submit();" />
    </div>
  </form>





@endsection
