<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWhiteboardsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('whiteboards', function (Blueprint $table) {
            $table->increments('Id_Whiteboard');
            $table->string('WhiteboardCode')->unique();
            $table->string('Condition');
            $table->integer('Amount');
            $table->double('Cost');
            $table->string('Type');
            $table->string('Color');
            $table->string('Material');
            $table->double('size');
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
        Schema::dropIfExists('whiteboards');
    }
}
