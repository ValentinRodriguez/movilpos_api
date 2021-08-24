<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Librerias\inventario\tipoProducto;
// use Illuminate\Support\Facades\DB;

class TipoProductosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // DB::table('mov_inventario.tipo_productos')->truncate();

        $fisico = array(
            'titulo' => 'fisico',
            'id_tipo' => 1,
            'estado' => 'activo',
            'usuario_creador' => 'movilsoluciones'
        );
        
        $digital = array('titulo' => 'digital',
                         'id_tipo' => 2,
                         'estado' => 'activo',
                         'usuario_creador' => 'movilsoluciones'
        );
        
        $servicio = array(
            'titulo' => 'servicio',
            'id_tipo' => 3,
            'estado' => 'activo',
            'usuario_creador'   => 'movilsoluciones'
        );
        
        tipoProducto::create($fisico);
        tipoProducto::create($digital);
        tipoProducto::create($servicio);
    }
}
