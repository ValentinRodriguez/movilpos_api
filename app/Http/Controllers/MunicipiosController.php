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
        $ciudad = municipios::join('regiones','municipios.id_region','=','regiones.id_region')->
                            select('municipios.*')->  
                            orderBy('created_at', 'desc')->
                            where('regiones.id_region','=',$id)->
                            get();
                            if ($ciudad == null){
                                return $this->errorResponse($ciudad);
                            }
                            return $this->successResponse($ciudad);
    }
}
