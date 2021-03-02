<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCiudadesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ciudades', function (Blueprint $table) {
            $table->id();
            $table->integer('id_ciudad');
            $table->unique('id_ciudad');
            $table->string('descripcion',100);
            $table->string('capital',50);
            $table->integer('id_pais');
            $table->string('usuario_modificador',50)->nullable();
            $table->string('usuario_creador',50);
            $table->foreign('id_pais')->references('id_pais')->on('paises');
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
        Schema::dropIfExists('ciudades');
    }
}
