<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInvbodegasusuariosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('invbodegasusuarios', function (Blueprint $table) {
            $table->id();
            $table->integer('id_bodega');
            $table->foreign('id_bodega')->references('id_bodega')->on('bodegas');
            $table->string('email',50);
            $table->unique('id_bodega','email');
            $table->foreign('email')->references('email')->on('users');
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
        Schema::dropIfExists('invbodegasusuarios');
    }
}
