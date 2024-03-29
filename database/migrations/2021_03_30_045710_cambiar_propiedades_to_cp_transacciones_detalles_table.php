<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CambiarPropiedadesToCpTransaccionesDetallesTable extends Migration
{    
    public function up()
    {
        Schema::connection('mov_cuentasxpagar')->table('cp_transacciones_detalles', function (Blueprint $table) {
            $table->text('detalles')->nullable()->change();
        });
    }
    
    public function down()
    {
        Schema::connection('mov_cuentasxpagar')->table('cp_transacciones_detalles', function (Blueprint $table) {
            $table->text('detalles')->change();
        });
    }
}
