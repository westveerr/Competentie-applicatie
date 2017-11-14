<?php

namespace App\Http\Controllers;

use App\Eindeis;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

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
              ->with('eindeisen', $eindeisen)
              ->with('modulecode', $modulecode);

    }

    public function newEindeis($modulecode){

        $eindeis = new Eindeis();

        return view('matrices.neweindeis')
                    ->with('eindeis', $eindeis)->with('modulecode', $modulecode);
    }

    public function saveNewEindeis(Request $request){

      $eindeis = new Eindeis();

      $eindeis->modulecode = $request->modulecode;
      $eindeis->eindeis = Input::get('eindeisomschrijving');
      $eindeis->eindeissoort = Input::get('eindeissoort');

      $eindeis->save();


      return $this->viewEindeisen($eindeis->modulecode);
    }

    public function editEindeis($id){

        $eindeis = new Eindeis();

        //query
        $eindeis = $eindeis::find($id);

        //return $id;
        return view('matrices.editeindeis')
                    ->with('eindeis', $eindeis);
    }

    public function saveEditEindeis($id){

      $eindeis = new Eindeis();

      //query
      $eindeis = $eindeis::find($id);

      $eindeis->eindeis = Input::get('eindeisomschrijving');
      $eindeis->eindeissoort = Input::get('eindeissoort');

      $eindeis->save();

      return $this->viewEindeisen($eindeis->modulecode);
    }

}
