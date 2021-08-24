<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInspeccionesVehiculosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::connection('mov_inventario')->create('inspecciones_vehiculos', function (Blueprint $table) {
            $table->id();
            $table->string('descripcion');
            $table->string('campo');
            $table->string('valor');
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
        Schema::connection('mov_inventario')->dropIfExists('inspecciones_vehiculos');
    }
}
