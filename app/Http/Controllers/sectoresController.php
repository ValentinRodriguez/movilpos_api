<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Librerias\sectores;

class sectoresController extends ApiResponseController
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

    public function buscaSectores($id)
    {
        $ciudad = sectores::select('sectores.*')->  
                            orderBy('sectores.descripcion')->
                            where('sectores.id_ciudad','=',$id)->
                            get();
                            if ($ciudad == null){
                                return $this->errorResponse($ciudad);
                            }
                            return $this->successResponse($ciudad);
    }
}
