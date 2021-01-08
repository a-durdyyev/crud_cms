<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCoursesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('courses', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->string('cursa');
            $table->integer('clientID');
            $table->date('plecareData');
            $table->string('plecareLocatie');
            $table->date('sosireData');
            $table->string('sosireLocatie');
            $table->date('intoarcereData');
            $table->string('intoarcereLocatie');
            $table->integer('europaletiIncarcat');
            $table->integer('europaletiDescarcat');
            $table->float('pret');
            $table->float('kilometriParcurs');
            $table->text('notes');

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
        Schema::dropIfExists('courses');
    }
}
