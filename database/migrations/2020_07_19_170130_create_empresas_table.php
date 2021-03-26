<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmpresasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('empresas', function (Blueprint $table) {
            $table->id();
            $table->integer('cod_cia')->index();
            $table->text('nombre');
            $table->text('telefono_empresa');
            $table->text('email_empresa');
            $table->text('direccion');
            $table->text('web')->nullable();;
            $table->text('contacto');
            $table->text('telefono_contacto');
            $table->text('logo');
            $table->text('moneda');
            $table->string('valuacion_inv',10);
            $table->char('tipo_cuadre',2);
            $table->integer('id_pais');
            // $table->foreign('id_pais')->references('id_pais')->on('paises');
            $table->integer('id_ciudad');
            // $table->foreign('id_ciudad')->references('id_ciudad')->on('ciudades');
            $table->string('rnc',30);
            $table->string('estado',30);
            $table->char('empresa_verde',2);
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
        Schema::dropIfExists('empresas');
    }
}
