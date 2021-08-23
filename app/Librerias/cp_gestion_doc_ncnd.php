<?php

namespace App\Librerias;

use Illuminate\Database\Eloquent\Model;

class cp_gestion_doc_ncnd extends Model
{
    protected $table='cp_transacciones';
    protected $fillable = ['num_doc','tipo_doc','cta_ctble','cod_sp','cod_sp_sec','fecha_orig', 'fecha_proc',     
    'valor','monto_itbi','detalle','codigo_fiscal','ncf','cta_ctble','estado','usuario_creador','cod_cia','aplica_a'];

}
