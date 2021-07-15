<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Librerias\dgii;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\UsersExport;

class DgiiController extends ApiResponseController
{
    public function index(Request $request)
    {
        $rnc = dgii::get();
        return $this->successResponse($rnc, $request->urlRequest);
    }

    public function show(Request $request,$id)
    {
        // $brand = BrandsModel::find($id);
        // if ($brand == null){
        //     return $this->errorResponse($brand);
        // }
        // return $this->successResponse($brand, $request->urlRequest);
    }

    
    public function busqueda(Request $request)
    {
        $parametro = $request->get('rnc');
        $busqueda = dgii::where('rnc','LIKE',"%$parametro%")->get();                              
        return $this->successResponse($busqueda, $request->urlRequest);
    }

    public function formulario606()
    {
        return Excel::download(new UsersExport, 'users.xlsx');
    }

}
