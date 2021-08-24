<?php

namespace App\Librerias\globales;

use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    protected $connection = 'mov_globales';
    protected $table = "menus";
}
