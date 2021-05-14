<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CambiarCamposToInvtransaccionesdetalleTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('invtransaccionesdetalle', function (Blueprint $table) {
            $table->renameColumn('precio_venta', 'precio');
            $table->integer('id_bodega')->nullable()->change();
        });
    }

    public function down()
    {
        Schema::table('invtransaccionesdetalle', function (Blueprint $table) {
            $table->renameColumn('precio', 'precio_venta');
        });
    }
}
