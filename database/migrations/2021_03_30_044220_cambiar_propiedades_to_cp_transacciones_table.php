<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CambiarPropiedadesToCpTransaccionesTable extends Migration
{
    public function up()
    {
        Schema::connection('mov_cuentasxpagar')->table('cp_transacciones', function (Blueprint $table) {
            $table->text('detalle')->nullable()->change();
        });
    }

    public function down()
    {
        Schema::connection('mov_cuentasxpagar')->table('cp_transacciones', function (Blueprint $table) {
            $table->text('detalle')->change();
        });
    }
}
