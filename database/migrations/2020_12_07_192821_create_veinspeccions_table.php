<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVeinspeccionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('veinspeccions', function (Blueprint $table) {
            $table->id();
            $table->string('descripcion');
            $table->string('tipo_inspeccion');
            $table->string('estado');
            $table->char('usuario_creador',50);
            $table->char('usuario_modificador',50);
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
        Schema::dropIfExists('veinspeccions');
    }
}
