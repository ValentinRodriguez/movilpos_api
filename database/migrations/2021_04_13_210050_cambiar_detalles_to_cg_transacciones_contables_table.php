<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CambiarDetallesToCgTransaccionesContablesTable extends Migration
{
    public function up()
    {
        Schema::connection('mov_contabilidad')->table('cg_transacciones_contables', function (Blueprint $table) {
            $table->dropColumn('detalle_1');
            $table->dropColumn('detalle_2');          
            $table->text('detalle');  
        });
    }
    
    public function down()
    {
        Schema::connection('mov_contabilidad')->table('cg_transacciones_contables', function (Blueprint $table) {

        });
    }
}
