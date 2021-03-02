<?php

namespace App\Http\Controllers;

use App\invpicking;
use App\Librerias\invtransaccionesmodel;
use Illuminate\Http\Request;

class InvpickingController extends ApiResponseController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
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
