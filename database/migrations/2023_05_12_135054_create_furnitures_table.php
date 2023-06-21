<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFurnituresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('furnitures', function (Blueprint $table) {
            $table->increments('Id_Furniture');
            $table->string('FurnitureCode')->unique();
            $table->string('Name');
            $table->string('Material');
            $table->string('Type');
            $table->double('Size');
            $table->string('Color');
            $table->string('Brand');
            $table->integer('Amount');
            $table->double('Cost');
            $table->string('Condition');
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
        Schema::dropIfExists('furnitures');
    }
}
