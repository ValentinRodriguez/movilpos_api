<?php

namespace App\Http\Controllers;
use App\Http\Controllers\ApiResponseController;

use App\Librerias\Perfiles;
use Illuminate\Http\Request;

class PerfilesController extends ApiResponseController
{
    public function index(Request $request)
    {
        $perfiles = Perfiles::orderBy('created_at', 'desc')->
        get();

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
