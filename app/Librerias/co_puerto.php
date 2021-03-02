<?php


namespace App\Librerias;

use Illuminate\Database\Eloquent\Model;

class co_puerto extends Model
{
    protected $fillable = ["descripcion","dias","estado","usuario_creador","ususario_modificador"];

}
