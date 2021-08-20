<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CambiarCamposToInvTransaccionesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::connection('mov_inventario')->table('invtransaccionesmaster', function (Blueprint $table) {
            $table->string('tipo_doc',20)->after('factura')->nullable();
            $table->string('num_rnc',20)->change();
            $table->renameColumn('num_rnc', 'documento');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::connection('mov_inventario')->table('invtransaccionesmaster', function (Blueprint $table) {
            $table->dropColumn('tipo_doc');
            $table->renameColumn('documento', 'num_rnc');
        });
    }
}
