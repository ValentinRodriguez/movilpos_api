<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRecepcionVehiculosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('recepcion_vehiculos', function (Blueprint $table) {
            $table->id();
            $table->integer('cliente');
            $table->string('recibido',100);
            $table->string('entregado',100);
            $table->date('fecha_entrega');
            $table->char('fabricacion',5)->nullable();
            $table->smallinteger('id_brand');
            $table->smallinteger('id_categoria');
            $table->integer('kilometraje');
            $table->string('placa',30);
            $table->string('chasis',30);
            $table->string('imagen',50)->nullable();
            $table->string('tipo_producto',30);
            $table->smallinteger('id_propiedad');
            $table->string('estado',20);
            $table->text('inspecciones');
            $table->text('archivos');
            $table->text('carroceria')->nullable();
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
        Schema::dropIfExists('recepcion_vehiculos');
    }
}
