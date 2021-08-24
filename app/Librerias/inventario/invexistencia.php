<?php

namespace App\Librerias\inventario;
use Illuminate\Database\Eloquent\Model;

class invexistencia extends Model
{
    protected $connection = 'mov_inventario';
    protected $table = 'inv_productos as a';
    
    public function ScopeFechaInicial($query, $fechainicial){
       
        if($fechainicial){
           return $query->where('f.fecha','<=',"$fechainicial");
        }
    }   

    public function ScopeDescripcion($query, $parametro){

        if($parametro){
            return $query->where('a.descripcion','like',"%$parametro%");
        }
    }
}
