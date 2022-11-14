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
        Schema::create('entrenador_centro_deportivo', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('idEntrenador');
            $table->string('foto');
            $table->string('correo',100);
            $table->string('nivelAcademico');
            $table->integer('añosExperiencia');
            $table->unsignedInteger('idFADN');
            $table->unsignedInteger('idNivelFADN');
            $table->unsignedInteger('idCentroDeportivo');
            $table->unsignedInteger('idNivelCDAG');
            $table->unsignedInteger('idContrato');
            
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
        Schema::dropIfExists('entrenador_centro_deportivo');
    }
};
