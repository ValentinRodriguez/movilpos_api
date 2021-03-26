<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class CreateCiudadesTable extends Migration
{
    public function up()
    {
        Schema::create('ciudades', function (Blueprint $table) {
            $table->id();
            $table->integer('id_ciudad')->unsigned();
            // $table->unique('id_ciudad');
            $table->integer('id_pais');
            // $table->foreign('id_pais')->references('id_pais')->on('paises');
            $table->string('descripcion',100);
            $table->string('capital',50);
            $table->string('usuario_creador',50);
            $table->string('usuario_modificador',50)->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS = 0'); 
            Schema::dropIfExists('ciudades');
        DB::statement('SET FOREIGN_KEY_CHECKS = 1');
    }
}
