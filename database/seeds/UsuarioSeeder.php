<?php

use Illuminate\Database\Seeder;
use App\Librerias\User;

class UsuarioSeeder extends Seeder
{
    public function run()
    {
        $User = array(
            'username'  => 'movilsoluciones' ,
            'name'      => 'usuario',
            'surname'   => 'prueba',
            'empresa'   => 1,
            'surname'   => 'prueba',
            'id_numemp' => 1,
            'email'     => 'valentinrodriguez1427@gmail.com',
            'password'  => '123',            
            'foto'      => '',
            'is_vend'   => 'V',
            'impresora' => '192.168.1.565/printer',
            'estado'    => 'activo'
        );        
        
        User::create($User);
    }
}
