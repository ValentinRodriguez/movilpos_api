<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddUsuarioCreadorToEmpresasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::connection('mov_empresa')->table('empresas', function (Blueprint $table) {
            $table->string('usuario_creador')->after('estado');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::connection('mov_empresa')->table('empresas', function (Blueprint $table) {
            $table->dropColumn('usuario_creador');
        });
    }
}
