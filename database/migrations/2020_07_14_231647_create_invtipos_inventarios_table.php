<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInvtiposInventariosTable extends Migration
{    
    public function up()
    {
        Schema::create('invtipos_inventarios', function (Blueprint $table) {
            $table->id();
            $table->integer('id_tipoinventario');
            $table->unique('id_tipoinventario')->nullable();
            $table->string('descripcion',500);
            $table->string('cuenta_no',25);
            $table->foreign('cuenta_no')->references('cuenta_no')->on('cgcatalogo');
            $table->string('usuario_creador',500);
            $table->string('usuario_modificador',500)->nullable();
            $table->string('estado',100);
            $table->timestamps();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('invtipos_inventarios');
    }
}
