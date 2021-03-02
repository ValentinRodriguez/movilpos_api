<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCoTipoProveedoresTable extends Migration
{
    public function up()
    {
        Schema::create('co_tipo_proveedores', function (Blueprint $table) {
            $table->id();
            $table->integer('tipo_proveedor');
            $table->string('descripcion',100);
            $table->string('cuenta_no',25);
            $table->foreign('cuenta_no')->references('cuenta_no')->on('cgcatalogo');
            $table->string('estado',10);
            $table->string('usuario_creador');
            $table->string('usuario_modificador',50)->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('co_tipo_proveedores');
    }
}
