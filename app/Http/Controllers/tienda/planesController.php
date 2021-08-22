<?php

namespace App\Http\Controllers\tienda;

use Illuminate\Http\Request;
use App\Librerias\tienda\planes;
use App\Http\Controllers\ApiResponseController;

class planesController extends ApiResponseController
{
    public function index()
    {
        $planes = planes::all();
        return $this->successResponse($planes);
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
