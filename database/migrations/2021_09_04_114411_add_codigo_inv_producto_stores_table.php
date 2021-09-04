<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddCodigoInvProductoStoresTable extends Migration
{
    public function up()
    {
        Schema::connection('mov_tienda')->table('inv_producto_stores', function (Blueprint $table) {
            $table->char('codigo',50)->after('titulo')->nullable();
        });
    }

    public function down()
    {
        Schema::connection('mov_tienda')->table('inv_producto_stores', function (Blueprint $table) {
            $table->dropColumn('codigo');
        });
    }
}
