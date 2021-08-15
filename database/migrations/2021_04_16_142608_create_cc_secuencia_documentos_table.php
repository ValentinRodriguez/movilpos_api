<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCcSecuenciaDocumentosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cc_secuencia_documentos', function (Blueprint $table) {
            $table->id();
            $table->integer('cod_vend')->nullabel();
            $table->integer('sec_vend')->nullabel();
            $table->integer('ult_recibo')->nullabel();
            $table->string('tipo_doc',2)->nullabel();
            $table->string('estado')->nullabel();
            $table->string('usuario_creador',50);
            $table->string('usuario_modificador',50)->nullable(); 
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
        Schema::dropIfExists('cc_secuencia_documentos');
    }
}
