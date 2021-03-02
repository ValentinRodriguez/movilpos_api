<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInvnumeracionesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('invnumeraciones', function (Blueprint $table) {
            $table->id();
            $table->integer('id_tipomov')->foreign()->references('id_tipomov')->on('invtiposmovimientos');
            $table->integer('num_doc')->nullable();
            $table->integer('secuencia')->nullable();
            $table->string('usuario_creador',100);
            $table->string('usuario_modificador',100);
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
        Schema::dropIfExists('invnumeraciones');
    }
}
