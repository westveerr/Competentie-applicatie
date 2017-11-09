
<form class="navbar-form navbar-left" name="filterMatrix" action="filterMatrix" method="post">
  <input type="hidden" name="_token" value="{{ csrf_token() }}" />
  <input type="hidden" name="specialisatie" value="{{ $specialisatie }}" />



@foreach($leerlijnen as $leerlijn)
  <div class="checkbox-inline">
   <label><input name="leerlijn" type="checkbox" value="" checked>{{$leerlijn['leerlijn']}}</label>
  </div>
@endforeach
<br>
<div class="form-group">
 <label for="sel1">Selecteer module:</label>
 <select name="module" class="form-control" id="sel1">
   @foreach($modules as $module)
    <option>{{$module['module']}}</option>
   @endforeach
 </select>
</div>
<br>
<div class="form-group">
 <label for="sel1">Selecteer periode:</label>
 <select name="periode" class="form-control" id="sel1">
   @foreach($periodes as $periode)
    <option>{{$periode['periode']}}</option>
   @endforeach
 </select>
</div>


    <button type="submit" class="btn btn-default">Zoek Module</button>
</form>
