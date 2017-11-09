<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableModule6 extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('modules', function (Blueprint $table) {
          $table->increments('id');
          $table->string("specialisatie");
          $table->string("modulecode");
          $table->string("moduleomschrijving");
          $table->string("moduleleider");
          $table->string("leerlijn");
          $table->integer("periode");
          $table->integer("studiepunten");
          $table->timestamps();
      });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('modules');
    }
}
