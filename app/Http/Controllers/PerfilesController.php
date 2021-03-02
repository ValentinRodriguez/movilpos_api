<?php

namespace App\Http\Controllers;

use App\Librerias\Perfiles;
use Illuminate\Http\Request;

class PerfilesController extends ApiResponseController
{
    public function index()
    {
        $perfiles = Perfiles::orderBy('created_at', 'desc')->
        get();

        if ($perfiles == null){
            return $this->errorResponse($paises);
        }
        return $this->successResponse($perfiles);
    }

    public function store(Request $request)
    {
        //
    }

    public function show(cr $cr)
    {
        //
    }

    public function update(Request $request, cr $cr)
    {
        //
    }

    public function destroy(cr $cr)
    {
        //
    }
}
