<?php

namespace App\Http\Controllers;
use App\Http\Controllers\ApiResponseController;

use Illuminate\Http\Request;
use App\Librerias\regiones;

class RegionesController extends ApiResponseController
{
    public function index(Request $request)
    {
        //
    }

    public function store(Request $request)
    {
        //
    }

    public function show(Request $request,$id)
    {
        //
    }

    public function buscaRegion(Request $request,$id)
    {
        $ciudad = regiones::join('paises','paises.id_pais','=','regiones.id_pais')->
                            select('regiones.*')->  
                            orderBy('created_at', 'desc')->
                            where('regiones.id_pais','=',$id)->
                            get();
                            if ($ciudad == null){
                                return $this->errorResponse($ciudad);
                            }
                            return $this->successResponse($ciudad, $request->urlRequest);
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy(Request $request, $id)
    {
        //
    }
}
