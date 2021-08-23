<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCgTipoDocumentosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::connection('mov_contabilidad')->create('cg_tipo_documentos', function (Blueprint $table) {
            $table->id();
            $table->string('descripcion',30);
            $table->string('ref',3);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::connection('mov_contabilidad')->dropIfExists('cg_tipo_documentos');
    }
}

