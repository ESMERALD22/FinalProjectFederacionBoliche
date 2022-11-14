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
        Schema::table('factores_reporte', function (Blueprint $table) {
            $table->foreign('idFactorEmocionalSensorial')->references('id')->on('factor_emocional_sensorial')->onDelete('cascade');
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('factores_reporte', function (Blueprint $table) {
            //
        });
    }
};
