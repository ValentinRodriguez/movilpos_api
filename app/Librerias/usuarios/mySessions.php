<?php

namespace App\Librerias\usuarios;
use Illuminate\Database\Eloquent\Model;

class mySessions extends Model
{
    protected $connection = 'mov_usuarios';
    protected $fillable = ['session','usuario'];  
}
