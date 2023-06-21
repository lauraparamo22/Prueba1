<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMachinesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('machines', function (Blueprint $table) {
            $table->increments('Id_Machine');
            $table->string('MachineCode')->unique();
            $table->string('Name');
            $table->double('Size');
            $table->string('Condition');
            $table->integer('Amount');
            $table->string('Concept');
            $table->string('Material');
            $table->string('Brand');
            $table->string('Model');
            $table->double('Cost');
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
        Schema::dropIfExists('machines');
    }
}
