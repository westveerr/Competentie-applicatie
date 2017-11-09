<?php

namespace App\Http\Controllers;

use App\Module;

use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\DB;

class ModuleController extends Controller
{

  public function viewModules(){

      $modules = new Module();

      //query
      $query = $modules::select();

      $modules = $query -> get();

      return view("matrices.viewmodules", ['modules' => $modules]);

    }

    public function editModule($id){

        $module = new Module();

        //query
        $module = $module::find($id);
        //$module = $query -> where("modulecode","=",$modulecode);
        //$module = $query -> get();

        return view('matrices.editmodule')
                    ->with('module', $module);
    }

    public function saveEditModule($id){

      $module = new Module();

      //query
      $module = $module::find($id);

      $module->specialisatie = Input::get('specialisatie');
      $module->modulecode = Input::get('modulecode');
      $module->moduleomschrijving = Input::get('moduleomschrijving');
      $module->moduleleider = Input::get('moduleleider');
      $module->leerlijn = Input::get('leerlijn');
      $module->periode = Input::get('periode');
      $module->studiepunten = Input::get('studiepunten');

      $module->save();


      $modules = new Module();

      //query
      $query = $modules::select();

      $modules = $query -> get();

      return view("matrices.viewmodules", ['modules' => $modules]);
    }

    public function newModule(){

        $module = new Module();

        return view('matrices.newmodule')
                    ->with('module', $module);
    }

    public function saveNewModule(){

      $module = new Module();

      $module->modulecode = Input::get('modulecode');
      $module->moduleomschrijving = Input::get('moduleomschrijving');
      $module->moduleleider = Input::get('moduleleider');
      $module->periode = Input::get('periode');
      $module->studiepunten = Input::get('studiepunten');

      $module->save();

      $modules = new Module();

      //query
      $query = $modules::select();

      $modules = $query -> get();

      return view("matrices.viewmodules", ['modules' => $modules]);
    }
}
