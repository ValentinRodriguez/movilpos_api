<?php

namespace App\Http\Controllers\globales;
use Illuminate\Http\Request;

use App\Librerias\usuarios\Perfiles;
use App\Http\Controllers\ApiResponseController;

class PerfilesController extends ApiResponseController
{
    public function index(Request $request)
    {
        $perfiles = Perfiles::orderBy('created_at', 'desc')->get();
        return $this->successResponse($perfiles, $request->urlRequest);
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
}
