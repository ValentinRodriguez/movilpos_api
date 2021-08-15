<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CambiarLimiteToEmpresasTable extends Migration
{
    public function up()
    {
        Schema::table('empresas', function (Blueprint $table) {
           $table->text('limite_usuarios')->nullable()->change();
        });
    }

    public function down()
    {
        Schema::table('empresas', function (Blueprint $table) {
           $table->text('limite_usuarios')->change();
        });
    }
}
