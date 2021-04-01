<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CambiarCondpagoToCpTransaccionesTable extends Migration
{
    public function up()
    {
        Schema::table('cp_transacciones', function (Blueprint $table) {
            $table->text('cond_pago')->nullable()->change();
            $table->text('itbis')->nullable()->change();
        });
    }
    
    public function down()
    {
        Schema::table('cp_transacciones', function (Blueprint $table) {
            $table->text('cond_pago')->change();
            $table->text('itbis')->change();
        });
    }
}
