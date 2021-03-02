<?php

namespace App\Http\Controllers;

use App\Librerias\Modulos;
use Illuminate\Http\Request;

class ModulosController extends ApiResponseController
{
    
    public function index()
    {
        $modulos = Modulos::orderBy('orden', 'asc')->get();
        return $this->successResponse($modulos);
    }

    public function store(Request $request)
    {
        //
    }

    public function show(Modulos $modulos)
    {
        //
    }

    public function update(Request $request, Modulos $modulos)
    {
        //
    }

    public function destroy(Modulos $modulos)
    {
        //
    }
}
