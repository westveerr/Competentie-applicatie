<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableCompetentiematrix2 extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('competentiematrix', function (Blueprint $table) {
            $table->increments('id');
            $table->string("specialisatie");
            $table->string("module");
            $table->string("leerlijn");
            $table->string("periode");
            $table->integer("GIBE");
            $table->integer("GIAN");
            $table->integer("GIAD");
            $table->integer("GION");
            $table->integer("GIRE");
            $table->integer("BPBE");
            $table->integer("BPAN");
            $table->integer("BPAD");
            $table->integer("BPON");
            $table->integer("BPRE");
            $table->integer("INBE");
            $table->integer("INAN");
            $table->integer("INAD");
            $table->integer("INON");
            $table->integer("INRE");
            $table->integer("SWBE");
            $table->integer("SWAN");
            $table->integer("SWAD");
            $table->integer("SWON");
            $table->integer("SWRE");
            $table->integer("HIBE");
            $table->integer("HIAN");
            $table->integer("HIAD");
            $table->integer("HION");
            $table->integer("HIRE");
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
        Schema::drop('competentiematrix');
    }
}
