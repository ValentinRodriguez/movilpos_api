<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRequisicionesDetallesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::connection('mov_inventario')->create('requisiciones_detalles', function (Blueprint $table) {
            $table->id();
            $table->integer('num_req');
            $table->char('tipo_inv',20);
            $table->integer('codigo');
            $table->float('cantidad');
            $table->integer('cod_sp');
            $table->integer('cod_sp_sec');
            $table->float('precio');
            $table->char('procesada',2);
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
        Schema::connection('mov_inventario')->dropIfExists('requisiciones_detalles');
    }
}
