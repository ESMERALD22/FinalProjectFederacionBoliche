<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('atleta_datos_personales', function (Blueprint $table) {
            $table->increments('id');
            $table->bigInteger('cui');
            $table->string('pasaporte', 50);
            $table->string('NIT', 25);
            $table->string('nombre1', 100);
            $table->string('nombre2', 100);
            $table->string('apellido1', 50);
            $table->string('apellido2', 50);
            $table->string('apellidoDeCasada', 50);
            $table->date('fechaNaciemiento', 50);
            $table->integer('celular');
            $table->integer('telefonodecasa');
            $table->string('genero', 50);
            $table->unsignedInteger("idMunicipio");
            $table->string('direccion', 100);
            $table->string('correo', 100);
            $table->string('estadoCivil', 100);
            $table->string('etnia', 100);
            $table->string('escolaridad', 100);
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
        Schema::dropIfExists('atleta_datos_personales');
    }
};
