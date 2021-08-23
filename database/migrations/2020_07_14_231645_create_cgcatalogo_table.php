<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCgcatalogoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::connection('mov_contabilidad')->create('cgcatalogo', function (Blueprint $table) {
            $table->id();
            $table->string('cuenta_no',25);
            $table->unique('cuenta_no');
            $table->string('descripcion',100);
            $table->string('origen',20);
            $table->integer('nivel');
            $table->string('codigo_estado',25);
            $table->string('aplica_a',25);
            $table->string('cuenta_resultado',10);
            $table->string('tipo_cuenta',50);
            $table->char('analitico',2);
            $table->char('depto',2);
            $table->char('referencia',2);
            $table->char('catalogo',2);
            $table->char('selectivo_consumo',2);
            $table->char('retencion',2);
            $table->string('codigo_isr');
            $table->string('usuario_creador',100);
            $table->string('usuario_modificador',100)->nullable();
            $table->string('estado',10);
            $table->string('estado_a',100)->nullable();
            $table->string('estado_m',100)->nullable();
            $table->string('estado_bg',100)->nullable();
            $table->string('estado_resultado',100)->nullable();;
            $table->string('grupo',100);
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
        Schema::connection('mov_contabilidad')->dropIfExists('cgcatalogo');
    }
}
