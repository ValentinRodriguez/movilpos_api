<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Librerias\dgii;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\UsersExport;

class DgiiController extends ApiResponseController
{
    public function index()
    {
        $rnc = dgii::paginate(15);
        return $this->successResponse($rnc);
    }

    public function show($id)
    {
        // $brand = BrandsModel::find($id);
        // if ($brand == null){
        //     return $this->errorResponse($brand);
        // }
        // return $this->successResponse($brand);
    }

    
    public function busqueda(Request $request)
    {
        $parametro = $request->get('rnc');
        $busqueda = dgii::where('rnc','=',$parametro)->get();                              
        return $this->successResponse($busqueda);
    }

    public function formulario606()
    {
        return Excel::download(new UsersExport, 'users.xlsx');
    }

}
