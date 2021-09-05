<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddGaleriaImagenesInvProductoStoresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::connection('mov_tienda')->table('inv_producto_stores', function (Blueprint $table) {
            $table->text('galeriaImagenes')->after('descripcion')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::connection('mov_tienda')->table('inv_producto_stores', function (Blueprint $table) {
            $table->dropColumn('galeriaImagenes');
        });
    }
}
