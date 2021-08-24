<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVeCotizacionesDetallesTable extends Migration
{
    public function up()
    {
        Schema::connection('mov_ventas')->create('ve_cotizaciones_detalles', function (Blueprint $table) {
            $table->id();
            $table->integer('cod_cia');
            $table->char('ventas',1);
            $table->integer('cotizacion_no');
            $table->foreign('cotizacion_no')->references('cotizacion_no')->on('ve_cotizaciones');
            $table->smallInteger('area');
            $table->smallInteger('cod_n');
            $table->integer('cod_grupo');
            $table->integer('cod_tipo');
            $table->integer('cod_sec');
            $table->string('descripcion',80);
            $table->float('cantidad_1');
            $table->float('cantidad');
            $table->float('precio');
            $table->float('porc_desc');
            $table->char('nombre_file',50);
            $table->string('estado',15);;
            $table->string('usuario_creador',50);
            $table->string('usuario_modificador',50);          
            $table->text('producto');
            $table->string('descripcion_area',100);
            $table->integer('id_kit');
            $table->float('cantidad_reservada');
            $table->date('fecha_inicio_reserva');
            $table->date('fecha_vence_reserva');
            $table->string('cotizacion_no_crm',100);
            $table->integer('secuencia');
            $table->timestamps();
        });
    }
    
    public function down()
    {
        Schema::connection('mov_ventas')->dropIfExists('ve_cotizaciones_detalles');
    }
}
