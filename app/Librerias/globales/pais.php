<?php

namespace App\Librerias\globales;

use Illuminate\Database\Eloquent\Model;

class pais extends Model
{
    protected $connection = 'mov_globales';
    protected $table = "paises";

    protected $fillable = ["id_pais","descripcion","longitud","latitud","usuario_creador","usuario_modificador"];

    // public function bodegas(){
    //     return $this->belongsTo('App\Librerias\Bodegas', 'foreign_key');
    // }
}
