<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCoFacturasProveedoresCuentasTable extends Migration
{    
    public function up()
    {
        Schema::create('co_facturas_proveedores_cuentas', function (Blueprint $table) {
            $table->id();
            $table->datetime('fecha');
            $table->smallInteger('cod_sp');
            $table->smallInteger('cod_sp_sec');
            $table->string('factura',14);
            $table->string('tipo_doc',2);
            $table->string('cuenta_no',8);
            $table->smallInteger('departamento');
            $table->string('num_doc',12);
            $table->smallInteger('cod_aux');
            $table->smallInteger('cod_sec');
            $table->string('detalles',30);
            $table->float('debito');
            $table->float('credito');
            $table->smallInteger('tipo_fact');
            $table->smallInteger('cod_cia');
            $table->string('estado',20);
            $table->string('usuario_creador',50);
            $table->string('usuario_modificador',50)->nullable(); 
            $table->timestamps();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('co_facturas_proveedores_cuentas');
    }
}
