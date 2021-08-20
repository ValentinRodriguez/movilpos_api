<?php

use Illuminate\Database\Seeder;
use App\Librerias\ventas\ve_CondicionesPago;

class veCondPagosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $pesos = array( 'defecto' => 'si',
                        'dias'=> '0',
                        'descripcion' =>'prestamo',
                        'cond_pago' => 1,
                        'estado' => 'activo', 
                        'usuario_creador'=> 'movilsoluciones',
                        'usuario_modificador'=> ''
        );

        ve_CondicionesPago::create($pesos);
    }
}
