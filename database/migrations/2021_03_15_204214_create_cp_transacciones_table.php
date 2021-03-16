<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCpTransaccionesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cp_transacciones', function (Blueprint $table) {
            $table->id();
            $table->string('num_doc',14);
            $table->date('fecha_orig');
            $table->date('fecha_proc'); 
            $table->float('valor'); 
            $table->integer('cond_pago');
            $table->integer('orden_no')->nullable();
            $table->float('monto_itbi');
            $table->float('valor_orden')->nullable();;
            $table->float('valor_recibido')->nullable();;
            $table->string('tipo_doc',2);
            $table->smallInteger('cod_sp'); 
            $table->smallInteger('cod_sp_sec'); 
            $table->string('moneda',3); 
            $table->float('bienes')->nullable(); 
            $table->float('servicios')->nullable(); 
            $table->float('retencion')->nullable();
            $table->string('detalle',40); 
            $table->char('ncf');
            $table->smallInteger('cod_cia');    
            $table->string('tipo_orden',2)->nullable();
            $table->string('aplica_a',10); 
            $table->string('cta_ctble',10)->nullable(); 
            $table->smallInteger('tipo_fact')->nullable();
            $table->smallInteger('codigo_fiscal');
            $table->string('estado',20);
            $table->string('usuario_creador',50);
            $table->string('usuario_modificador',50)->nullable(); 
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
        Schema::dropIfExists('cp_transacciones');
    }
}
