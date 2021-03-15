<?php

use Illuminate\Database\Seeder;
use App\Librerias\cgTipoDocumento;

class cgTipoDocumentos extends Seeder
{
    public function run()
    {
        $cheque = array('descripcion' => 'CHEQUE' );
        $transferencia = array('descripcion' => 'TRANSAFERENCIA' );

        cgTipoDocumento::create($cheque);
        cgTipoDocumento::create($transferencia);
    }
}
