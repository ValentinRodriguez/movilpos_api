<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInvareasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('invareas', function (Blueprint $table) {
            $table->id('area');
            $table->string('titulo')->nullable();
            $table->string('descripcion')->nullable();
            $table->string('usuario_creador');
            $table->string('usuario_modificador');
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
        Schema::dropIfExists('invareas');
    }
}
