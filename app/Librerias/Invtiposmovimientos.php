<?php

namespace App\Librerias;

use Illuminate\Database\Eloquent\Model;
use App\Librerias\cgcatalogo;
use App\Librerias\User;
class Invtiposmovimientos extends Model
{
    protected $table='invtiposmovimientos';
    protected $fillable = ['id_tipomov','origen','titulo', 'descripcion','control_clientes','control_departamento',
                           'usuario_creador', 'usuario_modificador','estado','control_despachos','inv_tipomov_transferencia',
                           'control_transferencia','control_devoluciones','control_orden_compra','num_doc'];

   public function cuentasTiposMov(){
       return $this->belongsToMany('App\Librerias\codigosmov')->using('App\Librerias\codigosmovimientoscuentas');
   }

   public function usuariosTiposMov(){
      return $this->belongsToMany('App\Librerias\codigosmov')->using('App\Librerias\codigosmovimientosusuarios');
   }

   public function ScopeTitulo($query, $parametro)
   {
       if ($parametro) {
           return $query->where('invtiposmovimientos.titulo', '=', "$parametro");
       }
   }
}
