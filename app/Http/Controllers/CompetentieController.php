<?php

namespace App\Http\Controllers;

use App\Competentiematrix;
use App\Module;

use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Collection;

class CompetentieController extends Controller
{
    private $module;
    private $leerlijn;
    private $periodes;

    public function __construct()
    {
      $this->module = 'alle';
      $this->leerlijn = 'alle';
      $this->periodes = 10;
    }

    public function setCompetentieFilter(){

        $specialisatie = Input::get('specialisatie');
        $this->periodes = Input::get('periode_slider');
        $this->module = 'alle';
        return $this -> getCompetentiematrix($specialisatie);

    }

    public function viewAllMatrices(){

      $modules = new Module();
      $query = $modules::select();
      $modules = $query ->orderBy('periode', 'ASC')->orderBy('specialisatie', 'ASC')-> get();

      $allmatrices = new Collection;

      foreach($modules as $module){
          $this->module = $module->modulecode;

          $this->leerlijn = 'alle';
          $this->periodes = 10;

          $modulecode = $module->modulecode;

          $matrix = new Competentiematrix();

          $query = $matrix::select();
          $query -> join('modules', 'modules.modulecode', '=', 'competentiematrix.module');

          $query -> where('module', '=' , $modulecode);
          $matrix = $query -> get()->first();

          $allmatrices->push($matrix);

      }

      $returnview = 'matrices.allmatrices';

      return view($returnview, ['allmatrices' => $allmatrices, 'modules' => $modules]);
    }

    public function getCompetentiematrixByModule(){

        $searchModule = Input::get('searchModule');
        $this->module = $searchModule;

        $this->leerlijn = 'alle';
        $this->periodes = 10;

        //$session = $request->session();
        $competentie = new Competentiematrix();

        //query
        $query = $competentie::select();

        $query -> where('module', '=' , $searchModule);

        $competentiematrix = $this->getMatrixArray($query, '');

        $returnview = 'matrices.competentiematrix';

        $modules = $query -> get();

        $leerlijn = new Competentiematrix();
        $queryLeerlijn = $competentie::distinct()->select('leerlijn');
        $leerlijnen = $queryLeerlijn -> get();

        $periode = new Competentiematrix();
        $queryPeriode = $competentie::distinct()->select('periode');
        $periodes = $queryPeriode -> get();

        return view($returnview, ['competenties' => $competentiematrix, 'modules' => $modules, 'leerlijnen' => $leerlijnen, 'periode' => $periodes, 'specialisatie' => '' ]);


    }

    public function getCompetentiematrix($specialisatie)
    {
        //$session = $request->session();
        $competentie = new Competentiematrix();
        //query
        $query = $competentie::select();
        $query -> join('modules', 'modules.modulecode', '=', 'competentiematrix.module');

        $query -> where('periode', '<=' , $this->periodes);

        if($specialisatie != 'prop'){
          $query -> where('specialisatie', '=' , $specialisatie) -> orwhere('specialisatie', '=' , 'prop');
          $query -> orwhere('leerlijn', '=' , 'verp.alg.mod') -> where('periode', '<=' , $this->periodes);
        } else {
          $query -> where('specialisatie', '=' , $specialisatie);
        }

        $competentiematrix = $this->getMatrixArray($query, $specialisatie);

        $modules = $query -> get();

        $leerlijn = new Competentiematrix();

        $queryLeerlijn =  $competentie::distinct()->select('leerlijn');
        $queryLeerlijn -> join('modules', 'modules.modulecode', '=', 'competentiematrix.module');
        $leerlijnen = $queryLeerlijn -> get();

        $periode = new Competentiematrix();
        $queryPeriode = $competentie::distinct()->select('periode');
        $queryPeriode -> join('modules', 'modules.modulecode', '=', 'competentiematrix.module');
        $periodes = $queryPeriode ->orderBy( 'periode', 'ASC') -> get();

        $returnview = 'matrices.competentiematrix';

        return view($returnview, ['competenties' => $competentiematrix, 'modules' => $modules, 'leerlijnen' => $leerlijnen, 'periode' => $this->periodes, 'specialisatie' => $specialisatie ]);

    }

    function getMatrixArray($query, $specialisatie ){

    $competentiematrix =  [
         [
           'laag'  => 'Gebruikers interactie',
           'BE' => $query -> max('GIBE'),
           'BEmodule' => $this -> getModuleList('gibe', $specialisatie),
           'AN' => $query -> max('GIAN'),
           'ANmodule' => $this -> getModuleList('gian', $specialisatie),
           'AD' => $query -> max('GIAD'),
           'ADmodule' => $this -> getModuleList('giad', $specialisatie),
           'ON' => $query -> max('GION'),
           'ONmodule' => $this -> getModuleList('gion', $specialisatie),
           'RE' => $query -> max('GIRE'),
           'REmodule' => $this -> getModuleList('gire', $specialisatie)
         ],
         [
           'laag'  => 'Bedrijfsprocessen',
           'BE' => $query -> max('BPBE'),
           'BEmodule' => $this -> getModuleList('bpbe', $specialisatie),
           'AN' => $query -> max('BPAN'),
           'ANmodule' => $this -> getModuleList('bpan', $specialisatie),
           'AD' => $query -> max('BPAD'),
           'ADmodule' => $this -> getModuleList('bpad', $specialisatie),
           'ON' => $query -> max('BPON'),
           'ONmodule' => $this -> getModuleList('bpon', $specialisatie),
           'RE' => $query -> max('BPRE'),
           'REmodule' => $this -> getModuleList('bpre', $specialisatie)
         ],
         [
           'laag'  => 'Infrastructuur',
           'BE' => $query -> max('INBE'),
           'BEmodule' => $this -> getModuleList('inbe', $specialisatie),
           'AN' => $query -> max('INAN'),
           'ANmodule' => $this -> getModuleList('inan', $specialisatie),
           'AD' => $query -> max('INAD'),
           'ADmodule' => $this -> getModuleList('inad', $specialisatie),
           'ON' => $query -> max('INON'),
           'ONmodule' => $this -> getModuleList('inon', $specialisatie),
           'RE' => $query -> max('INRE'),
           'REmodule' => $this -> getModuleList('inre', $specialisatie)
         ],
         [

           'laag'  => 'Software',
           'BE' =>  $query -> max('SWBE'),
           'BEmodule' => $this -> getModuleList('swbe', $specialisatie),
           'AN' => $query -> max('SWAN'),
           'ANmodule' => $this -> getModuleList('swan', $specialisatie),
           'AD' => $query -> max('SWAD'),
           'ADmodule' => $this -> getModuleList('swad', $specialisatie),
           'ON' => $query -> max('SWON'),
           'ONmodule' => $this -> getModuleList('swon', $specialisatie),
           'RE' => $query -> max('SWRE'),
           'REmodule' =>  $this -> getModuleList('swre', $specialisatie)
         ],
         [
           'laag'  => 'Hardware interfacing',
           'BE' => $query -> max('HIBE'),
           'BEmodule' => $this -> getModuleList('hibe', $specialisatie),
           'AN' => $query -> max('HIAN'),
           'ANmodule' => $this -> getModuleList('hian', $specialisatie),
           'AD' => $query -> max('HIAD'),
           'ADmodule' => $this -> getModuleList('hiad', $specialisatie),
           'ON' => $query -> max('HION'),
           'ONmodule' => $this -> getModuleList('hion', $specialisatie),
           'RE' => $query -> max('HIRE'),
           'REmodule' => $this -> getModuleList('hire', $specialisatie)
         ]
       ];

       return $competentiematrix;
     }

    function getModuleList($competentielabel, $specialisatie){

      $competentie = new Competentiematrix();

      $laag = substr( $competentielabel , -2);
      $querycolumn = $competentielabel . " AS " . $laag;
      $queryModule = $competentie::select('module', $querycolumn );

      if($specialisatie == 'prop'){
        $wheremodulequery = "specialisatie ='" . $specialisatie . "' AND '. $competentielabel .' <= (SELECT max(".$competentielabel .") from competentiematrix where specialisatie = '" . $specialisatie . "') AND ". $competentielabel ." > 0 ";
      } else {
        $wheremodulequery = "((specialisatie ='" . $specialisatie ."' OR specialisatie = 'prop') OR leerlijn='algmodule') AND '. $competentielabel .' <= (SELECT max(".$competentielabel .") from competentiematrix where specialisatie = '" . $specialisatie . "') AND ". $competentielabel ." > 0 ";
      }

      $queryModule -> join('modules', 'modules.modulecode', '=', 'competentiematrix.module');
      $queryModule -> whereRaw($wheremodulequery);
      $modulelist = $queryModule ->orderBy($competentielabel, 'ASC')-> get();

      return $modulelist;
    }

    public function editMatrix($modulecode){

        $matrix = new Competentiematrix();

        $query = $matrix::select();

        $query -> where('module', '=' , $modulecode);
        $matrix = $query -> get()->first();

        return view('matrices.editmatrix')
                    ->with('matrix', $matrix);
    }

    public function saveEditMatrix($id){

      $matrix = new CompetentieMatrix();

      //query
      $matrix = $matrix::find($id);

      $matrix->GIBE = Input::get('GIBE');

      $matrix->save();


      $modules = new Module();

      //query
      $query = $modules::select();

      $modules = $query -> get();

      return view("matrices.viewmodules", ['modules' => $modules]);
    }


}
