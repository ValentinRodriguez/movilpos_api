<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTipoMonedasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tipo_monedas', function (Blueprint $table) {
            $table->id();
            $table->string("divisa",5);
            $table->string("descripcion",30);
            $table->string("simbolo",5);
            $table->string("estado",10);
            $table->string("usuario_creador",50);
            $table->string("usuario_modificador",50)->nullable();
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
        Schema::dropIfExists('tipo_monedas');
    }
}
