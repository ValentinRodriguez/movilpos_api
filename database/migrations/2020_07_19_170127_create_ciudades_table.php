<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class CreateCiudadesTable extends Migration
{
    public function up()
    {
        Schema::connection('mov_globales')->create('mov_globales.ciudades', function (Blueprint $table) {
            $table->id();
            $table->integer('id_ciudad')->unsigned();
            $table->integer('id_municipio');
            $table->string('descripcion',100);
            $table->string('estado',15);
            $table->timestamps();
        });
    }

    public function down()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS = 0'); 
            Schema::connection('mov_globales')->dropIfExists('mov_globales.ciudades');
        DB::statement('SET FOREIGN_KEY_CHECKS = 1');
    }
}
