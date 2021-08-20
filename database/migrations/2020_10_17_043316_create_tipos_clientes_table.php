<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTiposClientesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::connection('mov_ventas')->create('tipos_clientes', function (Blueprint $table) {
            $table->id();
            $table->integer('tipo_cliente');
            $table->unique('tipo_cliente');
            $table->text('descripcion')->nullable();
            $table->String('estado',20);
            $table->string('usuario_creador',100);
            $table->string('usuario_modificador',100)->nullable();
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
        Schema::connection('mov_ventas')->dropIfExists('tipos_clientes');
    }
}
