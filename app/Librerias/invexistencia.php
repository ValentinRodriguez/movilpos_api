<?php

namespace App\Librerias;

use Illuminate\Database\Eloquent\Model;

class invexistencia extends Model
{
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
