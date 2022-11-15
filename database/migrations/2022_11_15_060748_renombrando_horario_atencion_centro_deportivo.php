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
        //
        Schema::table('horario_atencion_centro_deportivo', function (Blueprint $table) {
            $table->dropForeign(['idCentroDeportivo']);
        });
        Schema::rename('horario_atencion_centro_deportivo', 'horario_atencion_cd');
        Schema::table('horario_atencion_cd', function (Blueprint $table) {
            $table->foreign('idCentroDeportivo')->references('id')->on('centro_deportivo');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
};
