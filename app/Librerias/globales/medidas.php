<?php

namespace App\Librerias\globales;

use Illuminate\Database\Eloquent\Model;

class medidas extends Model
{
    protected $connection = 'mov_globales';
    protected $fillable = ["estado","codigo","nombre",];
}
