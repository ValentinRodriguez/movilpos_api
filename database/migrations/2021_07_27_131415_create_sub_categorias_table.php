<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSubCategoriasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::connection('mov_tienda')->create('sub_categorias', function (Blueprint $table) {
            $table->id();
            $table->integer('id_subcategoria');
            $table->unique('id_subcategoria');
            $table->integer('id_categoria');
            $table->text('id_atributo');
            $table->string('descripcion',100);
            $table->string('slug',100);
            $table->string('image',100)->nullable();
            $table->string('usuario_creador',500);
            $table->string('usuario_modificador',500)->nullable();
            $table->string('estado',100);
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
        Schema::connection('mov_tienda')->dropIfExists('sub_categorias');
    }
}
