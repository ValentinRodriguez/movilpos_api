<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CrateZonaslocalTable extends Migration
{
    public function up()
    {
        Schema::connection('mov_globales')->create('zonas_local', function (Blueprint $table) {
            $table->id();
            $table->integer('id_zonalocal')->unique();
            $table->string('estado',20);
            $table->string('descripcion',100);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::connection('mov_globales')->dropIfExists('zonas_local');
    }
}
