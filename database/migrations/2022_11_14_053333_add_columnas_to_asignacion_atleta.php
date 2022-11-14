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
        Schema::table('asignacion_atleta', function (Blueprint $table) {
            $table->foreign('idPRT')->references('id')->on('prt');
            $table->foreign('idLineaDesarrollo')->references('id')->on('linea_desarrollo');
            $table->foreign('idCentroDeportivo')->references('id')->on('centro_deportivo');
            $table->foreign('idFADN')->references('id')->on('fadn');
            $table->foreign('idTipoAtleta')->references('id')->on('tipo_atleta');
            $table->foreign('idEtapaDeportiva')->references('id')->on('etapa_deportiva');
            $table->foreign('idEntrenador')->references('id')->on('entrenador_datos_personales');
            $table->foreign('idCategoria')->references('id')->on('categoria');
            $table->foreign('idAtleta')->references('id')->on('atleta_datos_personales');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('asignacion_atleta', function (Blueprint $table) {
            //
        });
    }
};
