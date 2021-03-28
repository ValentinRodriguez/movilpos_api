<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CambiarPropiedadesToCgcatalogoTable extends Migration
{
    public function up()
    {
        Schema::table('cgcatalogo', function (Blueprint $table) {
            $table->text('cgcatalogo')->nullable()->change();
        });
    }

    public function down()
    {
        Schema::table('cgcatalogo', function (Blueprint $table) {
            $table->text('cgcatalogo')->change();
        });
    }
}
