<?php

namespace App\Http\Controllers;

use App\Eindeis;

use Illuminate\Http\Request;

use App\Http\Requests;

class EindeisController extends Controller
{
  public function viewEindeisen($modulecode){

      $eindeisen = new Eindeis();

      //query
      $query = $eindeisen::select();
      $query -> where('modulecode', '=', $modulecode);

      $eindeisen = $query -> get();

      return view("matrices.vieweindeisen")
              ->with('eindeisen', $eindeisen)->with('modulecode', $modulecode);

    }
}
