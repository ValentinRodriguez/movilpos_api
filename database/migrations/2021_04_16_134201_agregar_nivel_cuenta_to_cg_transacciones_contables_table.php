<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AgregarNivelCuentaToCgTransaccionesContablesTable extends Migration
{
    public function up()
    {
        Schema::table('cg_transacciones_contables', function (Blueprint $table) {
            $table->string('cuenta_nivel1',20)->after('cuenta_no')->nullable();
            $table->string('cuenta_nivel2',20)->after('cuenta_no')->nullable();
        });
    }
    
    public function down()
    {
        Schema::table('cg_transacciones_contables', function (Blueprint $table) {
            $table->dropColumn('cuenta_nivel1');
            $table->dropColumn('cuenta_nivel2');
        });
    }
}
