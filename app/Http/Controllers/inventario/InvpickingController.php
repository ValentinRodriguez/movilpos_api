<?php

namespace App\Http\Controllers\inventario;
use App\Http\Controllers\ApiResponseController;
use App\Librerias\invtransaccionesmodel;
use Illuminate\Http\Request;

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