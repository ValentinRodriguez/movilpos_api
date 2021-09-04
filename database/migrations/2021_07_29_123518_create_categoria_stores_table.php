<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCategoriaStoresTable extends Migration
{
    public function up()
    {
        Schema::connection('mov_tienda')->create('categoria_stores', function (Blueprint $table) {
            $table->id();
            $table->integer('id_categoria');
            $table->unique('id_categoria');
            $table->text('id_atributo');
            $table->char('codigo',10);
            $table->string('descripcion',100);
            $table->string('slug',100);
            $table->string('image',100)->nullable();
            $table->string('usuario_creador',500);
            $table->string('usuario_modificador',500)->nullable();
            $table->string('estado',100);
            $table->timestamps();
        });
    }
    
    public function down()
    {
        Schema::connection('mov_tienda')->dropIfExists('categoria_stores');
    }
}
