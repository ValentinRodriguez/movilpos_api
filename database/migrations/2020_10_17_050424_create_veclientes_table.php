<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVeclientesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('veclientes', function (Blueprint $table) {
            $table->id();
            $table->integer('tipo_cliente');
            $table->foreign('tipo_cliente')->references('tipo_cliente')->on('tipos_clientes');
            $table->integer('sec_cliente');
            $table->string('nombre',100);
            $table->integer('tipo_documento');
            $table->foreign('tipo_documento')->references('tipo_documento')->on('tipo_documento');
            $table->string('num_rnc',15);
            $table->string('cedula',15);
            $table->integer('vendedor');
            $table->integer('limite_credito')->nullable();
            $table->integer('cond_pago')->nullable();
            $table->integer('tipo_negocio');
            $table->foreign('tipo_negocio')->references('tipo_negocio')->on('tipo_negocio');
            $table->string('ncf',100)->nullable();
            $table->string('generico',10)->nullable();
            $table->string('direccion',200)->nullable();
            $table->string('urbanizacion',500)->nullable();
            $table->string('telefono_oficina')->nullable();
            $table->integer('id_pais')->nullable();
            $table->foreign('id_pais')->references('id_pais')->on('paises');
            $table->integer('id_zonalocal')->nullable();
            $table->foreign('id_zonalocal')->references('id_zonalocal')->on('zonas_local');
            $table->integer('id_ciudad')->nullable();
            $table->foreign('id_ciudad')->references('id_ciudad')->on('ciudades');
            $table->string('celular')->nullable();
            $table->string('telefono_casa',50);
            $table->string('email',100);
            $table->string('url',100)->nullable();
            $table->string('estado',20)->nullable();
            $table->char('condicion_recibo',2)->nullable();
            $table->text('contacto')->nullable();
            $table->string('usuario_creador',100);
            $table->string('usuario_modificador',100)->nullable();
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
        Schema::dropIfExists('veclientes');
    }
}