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
        Schema::table('inscripcion', function (Blueprint $table) {
            $table->string("direccion",100);
            $table->unsignedInteger("idMunicipioReside");
            $table->foreign('idMunicipioReside')->references('id')->on('municipio');
        
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('inscripcion', function (Blueprint $table) {
            //
        });
    }
};
