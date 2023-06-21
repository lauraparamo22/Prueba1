<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateComputerEquipmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('computer_equipments', function (Blueprint $table) {
            $table->increments('Id_ComputerEquipment');
            $table->string('ComputerEquipmentCode')->unique();
            $table->string('Name');
            $table->string('Brand');
            $table->string('Model');
            $table->string('Material');
            $table->double('Size');
            $table->double('Cost');
            $table->string('Color');
            $table->integer('Amount');
            $table->string('Condition');
            $table->string('Type');
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
        Schema::dropIfExists('computer_equipments');
    }
}
