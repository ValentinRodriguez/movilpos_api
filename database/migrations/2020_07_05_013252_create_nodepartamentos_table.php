<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use phpDocumentor\Reflection\Types\Nullable;

class CreatenoDepartamentosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('nodepartamentos', function (Blueprint $table) {
            $table->id();
            $table->text('titulo');
            $table->text('descripcion');
            $table->string('tipodepartamento',15); //Aqui se va a colocar si es PRODUCCION o ADMINISTRACION
            $table->string('usuario_creador',50);
            $table->string('usuario_modificador',50)->nullable();
            $table->string('estado',10);
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
        Schema::dropIfExists('nodepartamentos');
    }
}
