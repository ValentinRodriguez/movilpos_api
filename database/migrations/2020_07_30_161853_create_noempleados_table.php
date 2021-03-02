<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNoempleadosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('noempleados', function (Blueprint $table) {
            $table->id('id_numemp');
            $table->integer('departamento')->foreign()->references('departamento')->on('nodepartamentos');
            $table->integer('id_puesto')->foreign()->references('id_puesto')->on('nopuestos');
            $table->integer('id_nivel');
            $table->string('primernombre',100)->nullable();
            $table->string('segundonombre',100);
            $table->string('primerapellido',100)->nullable();
            $table->string('segundoapellido',100);
            $table->date('fecha_entrada')->nullable();
            $table->date('fecha_salida');
            $table->date('fecha_termino_contrato'); //Esta es la fecha del compromiso de la empresa con el empleado
            $table->date('fecha_nacimiento')->nullable();
            $table->string('estado_civil',100); // Aqui se va acoloar un combo con CASADO, SOLTERO, UNION LIBRE
            $table->string('tipo_sangre',20);
            $table->string('cedula',11)->unique();
            $table->string('licencia',11);
            $table->float('sueldo');
            $table->string('id_moneda')->foreign()->references('id_moneda')->on('monedas');
            $table->string('id_pais',50)->foreign()->references('id_pais')->on('paises');
            $table->string('tipo_empleado',50);  //Si el empleado es quincenal semanal
            $table->string('tipo_cuenta',20);
            $table->string('cuenta_no',25)->foreign()->references('cuenta_no')->on('cgcatalogo');
            $table->float('monto_adicional'); // Este valor es para ingresos adicionales fijos que la empresa deea darle al empleado
            $table->text('foto_empleado');
            $table->char('is_vend', 2);
            $table->char('is_sup', 2);
            $table->string('calle',100);
            $table->string('sector',100);
            $table->string('localidad_no',50);
            $table->string('id_ciudad',50)->foreign()->references('id_ciudad')->on('ciudades');
            $table->string('email',50)->foreign()->references('id_pais')->on('paises');
            $table->string('codigobancodestino',8);
            $table->string('digiverbancodestino',1);
            $table->string('cuentabancaria',50);
            $table->string('tipo_sueldo',50);
            $table->string('codigoretirocomercial',50);
            $table->string('estadolegal',50);
            $table->string('estado',10);
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
        Schema::dropIfExists('noempleados');
    }
}
