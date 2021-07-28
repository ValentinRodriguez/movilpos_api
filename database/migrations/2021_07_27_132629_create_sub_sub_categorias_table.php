<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSubSubCategoriasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sub_sub_categorias', function (Blueprint $table) {
            $table->id();
            $table->unique('id_subsubcategoria');
            $table->integer('id_subcategoria');
            $table->string('descripcion',500);
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
        Schema::dropIfExists('sub_sub_categorias');
    }
}
