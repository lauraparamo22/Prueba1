<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAdministratorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('administrators', function (Blueprint $table) {
            $table->increments('Id_Administrator');
            $table->string('AdministratorCode')->unique();
            $table->string('Name');
            $table->string('Lastname');
            $table->integer('Age');
            $table->string('Address');
            $table->string('Gender');
            $table->string('Phonenumber');
            $table->string('Emailaddress')->unique();
            $table->string('City');
            $table->string('Municipality');
            $table->string('DNI')->unique();
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
        Schema::dropIfExists('administrators');
    }
}
