<?php

use Illuminate\Database\Seeder;

class competentiematrix_seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      for($i =0; $i<1; $i++)
      {
        DB::table('competentiematrix')->insert([
          'specialisatie' => 'BDAM',
          'module' => 'ipbdam2',
          'leerlijn' => 'specialisatieproject',
          'periode' => '1',
          'GIBE' => '0',
          'GIAN' => '0',
          'GIAD' => '0',
          'GION' => '0',
          'GIRE' => '0',
          'BPBE' => '0',
          'BPAN' => '2',
          'BPAD' => '0',
          'BPON' => '0',
          'BPRE' => '0',
          'INBE' => '0',
          'INAN' => '0',
          'INAD' => '0',
          'INON' => '0',
          'INRE' => '2',
          'SWBE' => '0',
          'SWAN' => '0',
          'SWAD' => '0',
          'SWON' => '2',
          'SWRE' => '2',
          'HIBE' => '0',
          'HIAN' => '0',
          'HIAD' => '0',
          'HION' => '0',
          'HIRE' => '0',
        ]);
      }
    }
}
