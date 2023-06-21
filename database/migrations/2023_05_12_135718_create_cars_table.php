<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCarsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cars', function (Blueprint $table) {
            $table->increments('Id_Car');
            $table->string('CarCode')->unique();
            $table->string('Name');
            $table->string('Concept');
            $table->string('Brand');
            $table->string('Model');
            $table->string('Color');
            $table->string('Type');
            $table->string('Condition');
            $table->integer('Amount');
            $table->double('Cost');
            $table->integer('Id_Speciality')->unsigned();
            $table->foreign('Id_Speciality')->references('Id_Speciality')->on('specialities')->onDelete('cascade')->onUpdate('cascade');
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
        Schema::dropIfExists('cars');
    }
}
