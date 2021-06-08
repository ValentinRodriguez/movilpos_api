<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Librerias\municipios;

class MunicipiosController extends ApiResponseController
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
    
    public function update(Request $request, $id)
    {
        //
    }
    
    public function destroy($id)
    {
        //
    }

    public function buscaMunicipios($id)
    {
        $ciudad = municipios::join('provincias','municipios.id_provincia','=','provincias.id_provincia')->
                            select('municipios.*')->  
                            orderBy('created_at', 'desc')->
                            where('provincias.id_provincia','=',$id)->
                            get();
                            if ($ciudad == null){
                                return $this->errorResponse($ciudad);
                            }
                            return $this->successResponse($ciudad);
    }
}
