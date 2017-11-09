<?php

use Illuminate\Database\Seeder;

class tests2_seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      for($i =0; $i<100; $i++)
      {
        DB::table('tests2')->insert([
          'voornaam' => str_random(10),

        ]);
      }
    }
}
