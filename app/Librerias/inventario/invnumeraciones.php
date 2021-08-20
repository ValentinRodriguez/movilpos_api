<?php

namespace App\Librerias\inventario;
use Illuminate\Database\Eloquent\Model;

class invnumeraciones extends Model
{
    protected $connection = 'mov_inventario';
    protected $table='invnumeraciones';
    protected $fillable = ['id_tipomov','num_doc','secuencia','usuario_creador','usuario_modificador'];
}
