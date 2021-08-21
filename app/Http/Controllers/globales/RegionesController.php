<?php

namespace App\Http\Controllers\globales;
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
        $ciudad = regiones::join('mov_globales.paises','mov_globales.paises.id_pais','=','regiones.id_pais')->
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
