<?php

use Illuminate\Database\Seeder;
use App\Librerias\bancos;
class bancosSeeder extends Seeder
{
    public function run()
    {
        $bancos = array(
            ['descripcion'=>'BanReservas', 'usuario_creador'=>'movilsoluciones','usuario_modificador'=>'','estado'=>'activo'],
            ['descripcion'=>'Banco Agricola', 'usuario_creador'=>'movilsoluciones','usuario_modificador'=>'','estado'=>'activo'],
            ['descripcion'=>'Banco Popular Dominicano', 'usuario_creador'=>'movilsoluciones','usuario_modificador'=>'','estado'=>'activo'],
            ['descripcion'=>'Banco BHD Leon', 'usuario_creador'=>'movilsoluciones','usuario_modificador'=>'','estado'=>'activo'],
            ['descripcion'=>'Banco Vimenca', 'usuario_creador'=>'movilsoluciones','usuario_modificador'=>'','estado'=>'activo'],
            ['descripcion'=>'Banco Santa Cruz', 'usuario_creador'=>'movilsoluciones','usuario_modificador'=>'','estado'=>'activo'],
            ['descripcion'=>'Banco Caribe', 'usuario_creador'=>'movilsoluciones','usuario_modificador'=>'','estado'=>'activo'],
            ['descripcion'=>'Banco BDI', 'usuario_creador'=>'movilsoluciones','usuario_modificador'=>'','estado'=>'activo'],
            ['descripcion'=>'Banco Lopez de Haro', 'usuario_creador'=>'movilsoluciones','usuario_modificador'=>'','estado'=>'activo'],
            ['descripcion'=>'Banco Ademi', 'usuario_creador'=>'movilsoluciones','usuario_modificador'=>'','estado'=>'activo'],
            ['descripcion'=>'Banco BELLBANK', 'usuario_creador'=>'movilsoluciones','usuario_modificador'=>'','estado'=>'activo'],
            ['descripcion'=>'Banco Multiple Activo Dominicana', 'usuario_creador'=>'movilsoluciones','usuario_modificador'=>'','estado'=>'activo'],
            ['descripcion'=>'Scotiabank', 'usuario_creador'=>'movilsoluciones','usuario_modificador'=>'','estado'=>'activo'],
            ['descripcion'=>'Citibank', 'usuario_creador'=>'movilsoluciones','usuario_modificador'=>'','estado'=>'activo'],
            ['descripcion'=>'Banco Promerica', 'usuario_creador'=>'movilsoluciones','usuario_modificador'=>'','estado'=>'activo'],
            ['descripcion'=>'Banesco', 'usuario_creador'=>'movilsoluciones','usuario_modificador'=>'','estado'=>'activo'],
            ['descripcion'=>'Bancamerica', 'usuario_creador'=>'movilsoluciones','usuario_modificador'=>'','estado'=>'activo'],
            ['descripcion'=>'Bancos de Ahorro y Credito', 'usuario_creador'=>'movilsoluciones','usuario_modificador'=>'','estado'=>'activo'],
            ['descripcion'=>'Banco Atlantico', 'usuario_creador'=>'movilsoluciones','usuario_modificador'=>'','estado'=>'activo'],
            ['descripcion'=>'Banco Bancotui', 'usuario_creador'=>'movilsoluciones','usuario_modificador'=>'','estado'=>'activo'],
            ['descripcion'=>'Banco BDA', 'usuario_creador'=>'movilsoluciones','usuario_modificador'=>'','estado'=>'activo'],
            ['descripcion'=>'Banco Adopem', 'usuario_creador'=>'movilsoluciones','usuario_modificador'=>'','estado'=>'activo'],
            ['descripcion'=>'Banco Agricola De La Republica Dominicana', 'usuario_creador'=>'movilsoluciones','usuario_modificador'=>'','estado'=>'activo'],
            ['descripcion'=>'Banco Pyme Bhd', 'usuario_creador'=>'movilsoluciones','usuario_modificador'=>'','estado'=>'activo'],
            ['descripcion'=>'Banco Capital', 'usuario_creador'=>'movilsoluciones','usuario_modificador'=>'','estado'=>'activo'],
            ['descripcion'=>'Banco Confisa', 'usuario_creador'=>'movilsoluciones','usuario_modificador'=>'','estado'=>'activo'],
            ['descripcion'=>'Banco Empire', 'usuario_creador'=>'movilsoluciones','usuario_modificador'=>'','estado'=>'activo'],
            ['descripcion'=>'Banco Motor Credito', 'usuario_creador'=>'movilsoluciones','usuario_modificador'=>'','estado'=>'activo'],
            ['descripcion'=>'Banco Rio', 'usuario_creador'=>'movilsoluciones','usuario_modificador'=>'','estado'=>'activo'],
            ['descripcion'=>'Banco Del Caribe', 'usuario_creador'=>'movilsoluciones','usuario_modificador'=>'','estado'=>'activo'],
            ['descripcion'=>'Banco Inmobiliario (Banaci)', 'usuario_creador'=>'movilsoluciones','usuario_modificador'=>'','estado'=>'activo'],
            ['descripcion'=>'Banco Gruficorp', 'usuario_creador'=>'movilsoluciones','usuario_modificador'=>'','estado'=>'activo'],
            ['descripcion'=>'Banco Cofaci', 'usuario_creador'=>'movilsoluciones','usuario_modificador'=>'','estado'=>'activo'],
            ['descripcion'=>'Banco Bonanza', 'usuario_creador'=>'movilsoluciones','usuario_modificador'=>'','estado'=>'activo'],
            ['descripcion'=>'Banco Fihogar', 'usuario_creador'=>'movilsoluciones','usuario_modificador'=>'','estado'=>'activo'],
            ['descripcion'=>'Banco Federal', 'usuario_creador'=>'movilsoluciones','usuario_modificador'=>'','estado'=>'activo'],
            ['descripcion'=>'Banco Micro', 'usuario_creador'=>'movilsoluciones','usuario_modificador'=>'','estado'=>'activo'],
            ['descripcion'=>'Banco Union', 'usuario_creador'=>'movilsoluciones','usuario_modificador'=>'','estado'=>'activo'],
            ['descripcion'=>'Asociacion Popular', 'usuario_creador'=>'movilsoluciones','usuario_modificador'=>'','estado'=>'activo'],
            ['descripcion'=>'Asociacion Popular de Ahorros y Prestamos', 'usuario_creador'=>'movilsoluciones','usuario_modificador'=>'','estado'=>'activo'],
            ['descripcion'=>'Asociacion Cibao', 'usuario_creador'=>'movilsoluciones','usuario_modificador'=>'','estado'=>'activo'],
            ['descripcion'=>'Asociacion Nortena', 'usuario_creador'=>'movilsoluciones','usuario_modificador'=>'','estado'=>'activo'],
            ['descripcion'=>'Asociacion Peravia', 'usuario_creador'=>'movilsoluciones','usuario_modificador'=>'','estado'=>'activo'],
            ['descripcion'=>'Asociacion Romana', 'usuario_creador'=>'movilsoluciones','usuario_modificador'=>'','estado'=>'activo'],
            ['descripcion'=>'Asociacion Higuamo', 'usuario_creador'=>'movilsoluciones','usuario_modificador'=>'','estado'=>'activo'],
            ['descripcion'=>'Asociacion La Vega Real', 'usuario_creador'=>'movilsoluciones','usuario_modificador'=>'','estado'=>'activo'],
            ['descripcion'=>'Asociacion Duarte', 'usuario_creador'=>'movilsoluciones','usuario_modificador'=>'','estado'=>'activo'],
            ['descripcion'=>'Asociacion Barahona', 'usuario_creador'=>'movilsoluciones','usuario_modificador'=>'','estado'=>'activo'],
            ['descripcion'=>'Asociacion Maguana', 'usuario_creador'=>'movilsoluciones','usuario_modificador'=>'','estado'=>'activo'],
            ['descripcion'=>'Asociacion Mocana', 'usuario_creador'=>'movilsoluciones','usuario_modificador'=>'','estado'=>'activo'],
            ['descripcion'=>'Asociacion Bonao', 'usuario_creador'=>'movilsoluciones','usuario_modificador'=>'','estado'=>'activo'],
            ['descripcion'=>'Asociacion La Nacional', 'usuario_creador'=>'movilsoluciones','usuario_modificador'=>'','estado'=>'activo']
        );
  
        foreach ($bancos as $key => $value) {
            bancos::create($value);
        } 
    }
}
