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
        Schema::create('reporte_psicologico', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('idLic');
            $table->unsignedInteger('idAtleta');
            $table->date('fechaHora');
            $table->time('Hora');
            $table->integer('numeroSesion');
            $table->text('impresionClinica');
            $table->text('analisisSemiologico');
            $table->text('desarrollo');
            $table->text('observaciones');
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
        Schema::dropIfExists('reporte_psicologico');
    }
};
