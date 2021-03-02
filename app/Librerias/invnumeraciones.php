<?php

namespace App\Librerias;

use Illuminate\Database\Eloquent\Model;

class invnumeraciones extends Model
{
    protected $table='invnumeraciones';
    protected $fillable = ['id_tipomov','num_doc','secuencia','usuario_creador','usuario_modificador'];
}
