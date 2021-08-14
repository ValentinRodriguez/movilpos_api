<?php

use Illuminate\Database\Seeder;
use App\Librerias\Empresa;

class empresaSeeder extends Seeder
{
    public function run()
    {
        $empresa = array(
            'nombre' => 'empresa general',
            'telefono_empresa' => '(XXX)-XXX-XXXX',
            'email_empresa' => 'XXXX@XXX.XXX',
            'documento' => 'XXXXXXXXXXX',
            'tipo_documento' => 'X',
            'tipo_empresa' => 'D',
            'calle' =>'XXXXXXXXXXX',
            'web' =>'XXXXXXXXXXX',
            'empresa_verde' => 'no',
            'contacto' => 'XXXXXXXXXXX',
            'telefono_contacto' => 'XXXXXXXXXXX',
            'logo' => 'XX',
            'moneda' =>'XX',
            'estado' =>'activo',
            'id_pais' => 1,
            'id_region' => 7,
            'id_provincia' => 19,
            'id_municipio'=> 69,
            'id_ciudad' => 69,
            'id_sector' => NULL,
            'valuacion_inv' => 'standard',
            'cod_cia' => 1,
            'tipo_cuadre' => 'm',
            'usuario_creador'=> 'movilsoluciones'
        );
         
        Empresa::create($empresa);
    }
}
