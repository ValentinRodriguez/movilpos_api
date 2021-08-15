<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CambiarDetallesToCgTransaccionesContablesTable extends Migration
{
    public function up()
    {
        Schema::table('cg_transacciones_contables', function (Blueprint $table) {
            $table->dropColumn('detalle_1');
            $table->dropColumn('detalle_2');          
            $table->text('detalle');  
        });
    }
    
    public function down()
    {
        Schema::table('cg_transacciones_contables', function (Blueprint $table) {

        });
    }
}
