<?php


namespace App\Librerias\compras;
use Illuminate\Database\Eloquent\Model;

class co_puerto extends Model
{
    protected $connection = 'mov_compras';
    protected $fillable = ["descripcion","dias","estado","usuario_creador","ususario_modificador"];

}
