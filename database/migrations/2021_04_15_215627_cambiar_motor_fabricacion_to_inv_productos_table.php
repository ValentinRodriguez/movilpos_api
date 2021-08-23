<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CambiarMotorFabricacionToInvProductosTable extends Migration
{
    public function up()
    {
        Schema::connection('mov_inventario')->table('inv_productos', function (Blueprint $table) {
            $table->string('motor',30)->nullable()->change();
            $table->string('fabricacion',5)->nullable()->change();
        });
    }

    public function down()
    {
        Schema::connection('mov_inventario')->table('inv_productos', function (Blueprint $table) {
            //
        });
    }
}
