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
        Schema::create('factores_reporte', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('idFactorEmocionalSensorial');
            $table->unsignedInteger('idReporte');
            $table->unsignedInteger('puntuacion');
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
        Schema::dropIfExists('factores_reporte');
    }
};
