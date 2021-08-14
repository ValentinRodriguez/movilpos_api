<?php

namespace App\Librerias;

use Illuminate\Database\Eloquent\Model;

class Empresa extends Model
{
   // protected $table = 'empresas';
    protected $fillable = ['nombre', 'telefono_empresa', 'email_empresa','tipo_documento','documento','calle','web',
                           'empresa_verde','contacto','telefono_contacto','logo','moneda','estado','id_region',
                           'id_municipio','id_provincia','tipo_cuadre','valuacion_inv','cod_cia','id_ciudad',
                           'usuario_creador','id_pais','id_sector','tipo_empresa'];
}
