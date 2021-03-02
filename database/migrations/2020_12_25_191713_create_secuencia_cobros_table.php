<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSecuenciaCobrosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('secuencia_cobros', function (Blueprint $table) {
            $table->id();
            $table->string('documento',5);
            $table->integer('secuencia');
            $table->string('usuario_creador',30);
            $table->string('usuario_modificador',30)->nullable();
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
        Schema::dropIfExists('secuencia_cobros');
    }
}
