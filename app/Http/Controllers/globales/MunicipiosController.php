<?php

namespace App\Http\Controllers\globales;
use Illuminate\Http\Request;

use App\Librerias\globales\municipios;
use App\Http\Controllers\ApiResponseController;

class MunicipiosController extends ApiResponseController
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
    
    public function update(Request $request, $id)
    {
        //
    }
    
    public function destroy(Request $request, $id)
    {
        //
    }

    public function buscaMunicipios(Request $request,$id)
    {
        $ciudad = municipios::join('provincias','municipios.id_provincia','=','provincias.id_provincia')->
                            select('municipios.*')->  
                            orderBy('created_at', 'desc')->
                            where('provincias.id_provincia','=',$id)->
                            get();
                            
                            return $this->successResponse($ciudad, $request->urlRequest);
    }
}
