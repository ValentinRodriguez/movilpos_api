<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CambiarPropiedadesToInvProductosTable extends Migration
{
    public function up()
    {
        Schema::connection('mov_inventario')->table('inv_productos', function (Blueprint $table) {
            $table->text('galeriaImagenes')->nullable()->change();
        });
    }

    public function down()
    {
        Schema::connection('mov_inventario')->table('inv_productos', function (Blueprint $table) {
            $table->text('galeriaImagenes')->change();
        });
    }
}
