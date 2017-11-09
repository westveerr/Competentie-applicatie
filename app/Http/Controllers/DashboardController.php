<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Khill\Lavacharts\Lavacharts;
use DB;

use App\Module;

class DashboardController extends Controller
{
    public function getLaraChart() {

        $lava = new Lavacharts;

        $data = \Lava::DataTable();

        $data->addStringColumn('Periode')
             ->addNumberColumn('Gebruikersinteractie')
             ->addNumberColumn('Bedrijfsprocessen')
             ->addNumberColumn('Infrastructuur');

        // Random Data For Example
        /*
        for ($a = 1; $a < 30; $a++) {
            $rowData = [
              "2017-4-$a", rand(800,1000), rand(800,1000)
            ];

            $data->addRow($rowData);
        };
        */

        $resultData = $this->getMaxperActivityData();

        foreach($resultData as $row){

          $modulearray =
          [
            $row -> periode,
            (string) $row -> gi,
            (string) $row -> bp,
            (string) $row -> inf
          ];
          $data->addRow($modulearray);
        }

        \Lava::LineChart('Stocks', $data, [
            'title' => 'Activiteitniveau per periode',
            'animation' => [
                'startup' => true,
                'easing' => 'inAndOut'
            ],
            'colors' => ['blue', '#F4C1D8']
        ]);

        \Lava::BarChart('Stocks2', $data, [
            'title' => 'Stock Market Trends',
            'animation' => [
                'startup' => true,
                'easing' => 'inAndOut'
            ],
            'colors' => ['blue', '#F4C1D8']
        ]);

        \Lava::PieChart('Stocks3', $this->getPieChartData(),
          [ 'width' => 300, 'height' => 300,
            'pieSliceText' => 'value'
          ]);



        return view('matrices.dashboard');
    }

    function getPieChartData(){

      $module = new Module();

      //query
      $query = $module::select('specialisatie', \DB::raw('SUM(studiepunten) as studiepunten'));
      //$query -> where("specialisatie", "=", "se");
      $query -> groupBy('specialisatie');
      $tabledata = $query->get();

      $lava = new Lavacharts;

      $data = \Lava::DataTable();

      $data->addStringColumn('Specialisatie');
      $data->addNumberColumn('Studiepunten');

      foreach($tabledata as $row){

        $modulearray =
        [
          $row -> specialisatie,
          (string) $row -> studiepunten
        ];
        $data->addRow($modulearray);
      }

      return $data;
    }

    public function getDashboard()
    {

      $datatable = \Lava::DataTable();

      $datatable->addStringColumn('Name');
      $datatable->addNumberColumn('Donuts Eaten');
      $datatable->addRows([
          ['Michael',   5],
          ['Elisa',     7],
          ['Robert',    3],
          ['John',      2],
          ['Jessica',   6],
          ['Aaron',     1],
          ['Margareth', 8]
      ]);
      $pieChart = \Lava::PieChart('Donuts', $datatable, [
          'width' => 400,
          'pieSliceText' => 'value'
      ]);
      $filter  = \Lava::NumberRangeFilter(1, [
          'ui' => [
              'labelStacking' => 'vertical'
          ]
      ]);

      $control = \Lava::ControlWrapper($filter, 'control');
      $chart   = \Lava::ChartWrapper($pieChart, 'chart');

      \Lava::Dashboard('Donuts')->bind($control, $chart);

      return view('matrices.dashboard');
	}

  function getMaxperActivityData(){

    $query = ("

    Select periode, max(gi) gi, max(bp) bp, max(inf) inf, max(sw), max(hi)
    From
    (
        SELECT m.periode as periode, max(gibe) as gi, max(bpbe) as bp, max(inbe) as inf, max(swbe) as sw, max(hibe) as hi
      	FROM competentiematrix cm1, modules m
      	WHERE cm1.module =m.modulecode
      	GROUP BY m.periode
        union
      	SELECT m.periode as periode, max(gian) as gi, max(bpan) as bp, max(inan) as inf, max(swan) as sw, max(hian) as hi
      	FROM competentiematrix cm1, modules m
      	WHERE cm1.module =m.modulecode
      	GROUP BY m.periode
        union
          SELECT m.periode as periode, max(giad) as gi, max(bpad) as bp, max(inad) as inf, max(swad) as sw, max(hiad) as hi
      	FROM competentiematrix cm1, modules m
      	WHERE cm1.module =m.modulecode
      	GROUP BY m.periode
        union
          SELECT m.periode as periode, max(gion) as gi, max(bpon) as bp, max(inon) as inf, max(swon) as sw, max(hion) as hi
      	FROM competentiematrix cm1, modules m
      	WHERE cm1.module =m.modulecode
      	GROUP BY m.periode
        union
          SELECT m.periode as periode, max(gire) as gi, max(bpre) as bp, max(inre) as 'in', max(swre) as sw, max(hire) as hi
      	FROM competentiematrix cm1, modules m
      	WHERE cm1.module =m.modulecode
      	GROUP BY m.periode
      ) as cm
      GROUP BY periode;

    ");

      $results = DB::select($query);

      return $results;
  }



}
