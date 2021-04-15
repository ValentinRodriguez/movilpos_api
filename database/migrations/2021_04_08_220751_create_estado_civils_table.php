<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEstadoCivilsTable extends Migration
{
    public function up()
    {
        Schema::create('estado_civil', function (Blueprint $table) {
            $table->id();
            $table->string('descripcion');
            $table->string('usuario_creador');
            $table->string('estado');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('estado_civil');
    }
}
