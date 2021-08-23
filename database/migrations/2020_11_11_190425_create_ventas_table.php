<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVentasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::connection('mov_ventas')->create('ventas', function (Blueprint $table) {
            $table->id();
            $table->integer('venta');
            $table->string('descripcion');
            $table->string('simbolo');
            $table->string('descripcion_moneda');
            $table->string('defecto');
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
        Schema::connection('mov_ventas')->dropIfExists('ventas');
    }
}
