<?php

namespace App\Librerias;

use Illuminate\Database\Eloquent\Model;

class EntradasSalidas extends Model
{

    protected $table = 'inv_productos as a';
    protected $fillable =['a.codigo','a.titulo','a.costo'];
    
    public function ScopeCodigo($query, $parametro){
        if($parametro){
            return $query->where('a.codigo','=',$parametro);
                   
        }
    }

    
    public function ScopeDescripcion($query, $parametro){

        if($parametro){
            return $query->where('a.descripcion','like',"%$parametro%");
        }
    }

    public function ScopeCategoria($query,$parametro)
    {
        if($parametro){
            return $query->where('c.id_categoria','=',"$parametro");
        }
    }

    public function ScopeTipo($query,$parametro)
    {
        if($parametro){
            return $query->where('e.id_tipoinventario','=',"$parametro");
        }
    }

    public function ScopeBrand($query,$parametro)
    {
        if($parametro){
            return $query->where('d.id_brand','=',"$parametro");
        }
    }

    public function ScopeFechaInicial($query, $fechainicial){
       
        if($fechainicial){
           return $query->where('f.fecha','<=',"$fechainicial");
        }
}                        

}
