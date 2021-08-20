<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePropiedadesTable extends Migration
{
    public function up()
    {
        Schema::connection('mov_inventario')->create('propiedades', function (Blueprint $table) {
            $table->id();
            $table->integer('id_propiedad')->unique();
            $table->string('descripcion',50);
            $table->string('estado',10);
            $table->string('usuario_creador',50);
            $table->string('usuario_modificador',50)->nullable();
            $table->timestamps();
        });
    }
    
    public function down()
    {
        Schema::connection('mov_inventario')->dropIfExists('propiedades');
    }
}
