<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVeCotizacionesTable extends Migration
{
    public function up()
    {
        Schema::connection('mov_ventas')->create('ve_cotizaciones', function (Blueprint $table) {
            $table->id();
            $table->integer('cod_cia');
            $table->smallInteger('ventas');
            $table->unique('cotizacion_no');
            $table->integer('cotizacion_no');
            $table->integer('tipo_cliente');
            $table->integer('sec_cliente');
            $table->string('nombre_cliente',60);
            $table->char('rnc',11);
            $table->string('nombre_proyecto',60);
            $table->string('direccion_cliente',60);
            $table->smallInteger('cod_provincia');
            $table->string('direccion_proyecto',170);
            $table->string('telefono_r char',20);
            $table->string('telefono_o', 20);
            $table->string('email',100);
            $table->float('tipo_precio');            
            $table->char('celular char',20);
            $table->float('prima');            
            $table->string('celular',20);            
            $table->date('fecha');
            $table->date('fecha_entrega');
            $table->char('plazo_entrega',60);
            $table->string('comentario',60);
            $table->string('contacto',60);
            $table->smallInteger('cond_pago');
            $table->smallInteger('sec_vend');
            $table->float('porc_itbi');
            $table->float('total_bruto');
            $table->float('sub_total');
            $table->float('monto_desc');
            $table->float('monto_itbi');
            $table->float('total_neto');
            $table->float('monto_dolar');
            $table->string('estado',15);
            $table->string('usuario_creador',50);
            $table->string('usuario_modificador',50);
            // $table->('cotizacion_no_crm');
            $table->string('direccion_facturacion',100);
            $table->smallInteger('num_emp_inst');
            $table->string('instalador');
            $table->string('codigo_dgii',20);
            $table->char('sec_vend_aux',10);
            $table->timestamps();
        });
    }
    
    public function down()
    {
        Schema::connection('mov_ventas')->dropIfExists('ve_cotizaciones');
    }
}
