<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CambiarPropiedadesToCgcatalogoTable extends Migration
{
    public function up()
    {
        Schema::connection('mov_contabilidad')->table('cgcatalogo', function (Blueprint $table) {
            $table->text('codigo_estado')->nullable()->change();
        });
    }

    public function down()
    {
        Schema::connection('mov_contabilidad')->table('cgcatalogo', function (Blueprint $table) {
            $table->text('codigo_estado')->change();
        });
    }
}
