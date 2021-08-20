<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInvtiposmovimientosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::connection('mov_inventario')->create('invtiposmovimientos', function (Blueprint $table) {
            $table->id();
            $table->integer('id_tipomov')->unique();
            $table->string('titulo',100);
            $table->string('descripcion',500);
            $table->string('origen',100);
            $table->string('control_clientes',10)->default('no');
            $table->string('control_despachos',10)->default('no');
            $table->string('control_devoluciones',10)->default('no');
            $table->string('control_transferencia',10)->default('no');
            $table->string('control_departamento',10)->default('no');
            $table->string('control_orden_compra',10)->default('no');
            $table->string('inv_tipomov_transferencia',10)->nullable();
            $table->integer('num_doc');
            $table->string('estado',100);
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
        Schema::connection('mov_inventario')->dropIfExists('invtiposmovimientos');
    }
}
