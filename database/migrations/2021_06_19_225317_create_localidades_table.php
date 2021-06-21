<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLocalidadesTable extends Migration
{
    public function up()
    {
        Schema::create('localidades', function (Blueprint $table) {
            $table->id();
            $table->integer('cod_cia');
            $table->string('descripcion',100);
            $table->string('direccion',200)->nullable();
            $table->integer('id_pais');
            $table->integer('id_zonalocal');
            $table->integer('id_ciudad')->nullable();
            $table->smallInteger('id_region');
            $table->smallInteger('id_municipio');
            $table->smallInteger('id_provincia');
            $table->smallInteger('id_sector')->nullable();
            $table->string('estado',20);
            $table->string('usuario_creador',50);
            $table->string('usuario_modificador',50)->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('localidades');
    }
}
