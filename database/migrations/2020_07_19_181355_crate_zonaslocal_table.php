<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CrateZonaslocalTable extends Migration
{
    public function up()
    {
        Schema::create('zonas_local', function (Blueprint $table) {
            $table->id();
            $table->integer('id_zonalocal')->unique();
            $table->string('descripcion',100);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('zonas_local');
    }
}
