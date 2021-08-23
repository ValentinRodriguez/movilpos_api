<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCoCuentasProveedoresTable extends Migration
{
    public function up()
    {
        Schema::connection('mov_compras')->create('co_cuentas_proveedores', function (Blueprint $table) {
            $table->id();
            $table->string('descripcion',100);
            $table->integer('cod_sp');
            $table->integer('cod_sp_sec');
            $table->string('cuenta_no',25);
            $table->float('porciento');
            $table->string('estado',10);
            $table->timestamps();
        });
    }
    
    public function down()
    {
        Schema::connection('mov_compras')->dropIfExists('co_cuentas_proveedores');
    }
}
