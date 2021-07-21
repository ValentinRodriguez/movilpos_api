<?php

namespace App\Http\Controllers\globales;
use App\Http\Controllers\ApiResponseController;

use App\LIbrerias\provincias;
use Illuminate\Http\Request;

class ProvinciasController extends ApiResponseController
{
    public function index(Request $request)
    {
        $provincias = provincias::orderBy('created_at', 'desc')->get();

        return $this->successResponse($provincias, $request->urlRequest);
    }

    public function buscaProvincia(Request $request,$id)
    {
        $provincia = provincias::join('regiones','regiones.id_region','=','provincias.id_region')->
                            select('provincias.*')->  
                            orderBy('created_at', 'desc')->
                            where('provincias.id_region','=',$id)->
                            get();
                            
        return $this->successResponse($provincia, $request->urlRequest);
    }
    
    public function store(Request $request)
    {
        //
    }
    
    public function show(provincias $provincias)
    {
        //
    }
    
    public function update(Request $request, provincias $provincias)
    {
        //
    }
    
    public function destroy(provincias $provincias)
    {
        //
    }
}
