<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUtensilsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('utensils', function (Blueprint $table) {
            $table->increments('Id_Utensils');
            $table->string('UtensilsCode')->unique();
            $table->string('Name');
            $table->double('Size');
            $table->string('Condition');
            $table->integer('Amount');
            $table->string('Material');
            $table->string('Concept');
            $table->string('Type');
            $table->string('Brand');
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
        Schema::dropIfExists('utensils');
    }
}
