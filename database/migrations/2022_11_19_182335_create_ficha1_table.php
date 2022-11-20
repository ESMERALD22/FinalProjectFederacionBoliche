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
        Schema::create('ficha1', function (Blueprint $table) {
            $table->increments('id');
            $table->bigInteger('cuiAtleta');
            $table->string('pasaporte', 50);
            $table->string('NIT', 25);
            $table->string('nombre1A', 100);
            $table->string('nombre2A', 100);
            $table->string('apellido1A', 50);
            $table->string('apellido2A', 50);
            $table->string('apellidoDeCasadaA', 50);
            $table->date('fechaNaciemientoA', 50);
            $table->integer('celularA');
            $table->integer('telefonodecasaA');
            $table->string('generoA', 50);
            $table->unsignedInteger("idMunicipioA");
            $table->string('direccionA', 100);
            $table->string('correoA', 100);
            $table->string('estadoCivilA', 100);
            $table->string('etniaA', 100);
            $table->string('escolaridadA', 100);
            $table->string('fotografiaA');
            

            $table->bigInteger('cuiEncargado');
            $table->string('nombre1E',100);
            $table->string('nombre2E',100);
            $table->string('apellido1E',50);
            $table->string('apellido2E',50);
            $table->string('apellidoDeCasadaE',50);
            $table->date('fechaNaciemientoE',50);
            $table->integer('telefonodecasaE');
            $table->integer('celularE');
            $table->string('generoE',50);
            $table->string('direccionE',100);


            $table->decimal('pesoA');
            $table->decimal('alturaA');

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
        Schema::dropIfExists('ficha1');
    }
};
