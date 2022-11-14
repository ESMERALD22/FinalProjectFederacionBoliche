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
        Schema::create('asignacion_atleta', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('idAtleta');
            $table->unsignedInteger('idCategoria');
            $table->unsignedInteger('idPRT');
            $table->unsignedInteger('idLineaDesarrollo');
            $table->unsignedInteger('idCentroDeportivo');
            $table->unsignedInteger('idFADN');
            $table->unsignedInteger('idEtapaDeportiva');
            $table->unsignedInteger('idEntrenador');
            $table->integer('experienciaDeportivaYears');
            $table->integer('experienciaDeportivaMeses');
            $table->boolean('practicante');
            $table->boolean('federado');
            $table->string('modalidad',50);
            $table->boolean('adaptado');
            $table->unsignedInteger('idTipoAtleta');
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
        Schema::dropIfExists('asignacion_atleta');
    }
};
