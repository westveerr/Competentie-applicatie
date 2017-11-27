<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableEindeisen2 extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('eindeisen', function (Blueprint $table) {
          $table->increments('id');
          $table->string("modulecode");
          $table->text("eindeis");
          $table->string("eindeissoort");
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
        Schema::drop('eindeisen');
    }
}
