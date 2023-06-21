<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLaboratoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('laboratories', function (Blueprint $table) {
            $table->increments('Id_Laboratory');
            $table->string('LaboratoryCode')->unique();
            $table->string('Number');
            $table->integer('Ability');
            $table->string('Condition');
            $table->double('Size');
            $table->integer('Amount');
            $table->integer('Id_Furniture')->unsigned();
            $table->integer('Id_ComputerEquipment')->unsigned();
            $table->integer('Id_Speciality')->unsigned();
            $table->foreign('Id_Furniture')->references('Id_Furniture')->on('furnitures')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('Id_ComputerEquipment')->references('Id_ComputerEquipment')->on('computer_equipments')->onDelete('cascade')->onUpdate('cascade');
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
        Schema::dropIfExists('laboratories');
    }
}
