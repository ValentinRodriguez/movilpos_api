<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Librerias\sectores;

class sectoresController extends Controller
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
        $ciudad = sectores::join('ciudades','ciudades.id_ciudad','=','sectores.id_ciudad')->
                            select('sectores.*')->  
                            orderBy('created_at', 'desc')->
                            where('regiones.id_pais','=',$id)->
                            get();
                            if ($ciudad == null){
                                return $this->errorResponse($ciudad);
                            }
                            return $this->successResponse($ciudad);
    }
}
