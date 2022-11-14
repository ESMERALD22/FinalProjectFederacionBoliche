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
        Schema::table('entrenador_centro_deportivo', function (Blueprint $table) {
            $table->foreign('idEntrenador')->references('id')->on('entrenador_datos_personales');
            $table->foreign('idFADN')->references('id')->on('fadn');
            $table->foreign('idCentroDeportivo')->references('id')->on('centro_deportivo');
            $table->foreign('idContrato')->references('id')->on('contrato');
            $table->foreign('idNivelCDAG')->references('id')->on('nivel_cdag');
            $table->foreign('idNivelFADN')->references('id')->on('nivel_Fadn');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('entrenador_centro_deportivo', function (Blueprint $table) {
            //
        });
    }
};
