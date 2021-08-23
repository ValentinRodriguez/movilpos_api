<?php

use Illuminate\Database\Seeder;
use App\Librerias\contabilidadGeneral\cgTipoDocumento;

class cgTipoDocumentos extends Seeder
{
    public function run()
    {
        $cheque = array('descripcion' => 'CHEQUE','ref' => 'CK' );
        $transferencia = array('descripcion' => 'TRANSAFERENCIA','ref' => 'TR' );
        $chequePrepagado = array('descripcion' => 'CHEQUE PREPAGADO','ref' => 'CKP' );

        cgTipoDocumento::create($cheque);
        cgTipoDocumento::create($chequePrepagado);
        cgTipoDocumento::create($transferencia);
    }
}
