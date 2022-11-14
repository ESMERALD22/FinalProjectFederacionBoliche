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
        Schema::create('centro_deportivo', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombreCentroDeportivo',100);
            $table->string('direccion',100);
            $table->string('implementacion',50);
            $table->string('accesibilidad',50);
            $table->unsignedInteger('idFADN');
            $table->unsignedInteger('idInstitucion');
            $table->string("espacioFisico");
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
        Schema::dropIfExists('centro_deportivo');
    }
};
