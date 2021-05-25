<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Librerias\regiones;

class RegionesController extends ApiResponseController
{
    public function index()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }

    public function show($id)
    {
        //
    }

    public function buscaRegion($id)
    {
        $ciudad = regiones::join('paises','paises.id_pais','=','regiones.id_pais')->
                            select('regiones.*')->  
                            orderBy('created_at', 'desc')->
                            where('regiones.id_pais','=',$id)->
                            get();
                            if ($ciudad == null){
                                return $this->errorResponse($ciudad);
                            }
                            return $this->successResponse($ciudad);
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
