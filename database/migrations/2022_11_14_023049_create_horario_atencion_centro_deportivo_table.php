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
        Schema::create('horario_atencion_centro_deportivo', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('idCentroDeportivo');
            $table->string('dia',50);
            $table->time('horaApertura');
            $table->time('horaCierre');
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
        Schema::dropIfExists('horario_atencion_centro_deportivo');
    }
};
