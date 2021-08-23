<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSubSubCategoriasTable extends Migration
{
    public function up()
    {
        Schema::connection('mov_tienda')->create('sub_sub_categorias', function (Blueprint $table) {
            $table->id();
            $table->integer('id_subsubcategoria');
            $table->unique('id_subsubcategoria');
            $table->integer('id_subcategoria');
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
        Schema::connection('mov_tienda')->dropIfExists('sub_sub_categorias');
    }
}
