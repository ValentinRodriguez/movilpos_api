<?php

namespace App\Http\Controllers\inventario;
use Illuminate\Http\Request;
use App\Http\Controllers\ApiResponseController;
use App\Librerias\inventario\invtransaccionesmodel;

class InvpickingController extends ApiResponseController
{
    public function index(Request $request)
    {
        return $this->successResponse('Debes de enviar una bodega destino');
    }


    public function show($bodega)
    {
        $datos = invtransaccionesmodel::where([['id_bodega_d','=',$bodega],
                                               ['estado','=','activo'],
                                               ['recepcionado','=','no'],
                                               ['controltransferencia','=','si']
                                               ])
                                       ->get();
    }

    public function update(Request $request)
    {
        //
    }

    public function destroy($invpicking)
    {
        //
    }
}
