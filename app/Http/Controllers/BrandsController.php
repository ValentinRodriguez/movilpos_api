<?php

namespace App\Http\Controllers;

use App\Librerias\BrandsModel;
use App\librerias\invProductos;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BrandsController extends ApiResponseController
{
    public function index()
    {
        $brand = BrandsModel::orderBy('id_brand', 'asc')->
                              where('estado','=','ACTIVO')->
                              get();
                              
        return $this->successResponse($brand);
    }

    public function store(Request $request)
    {
        $maxid=0;
        $idsecuencia=0;
        $maxid = BrandsModel::get('id_brand')->max();
        
        if ($maxid == null){
            $idsecuencia=1;
        }
        else{
            $idsecuencia = $maxid->id_brand;
            $idsecuencia=$idsecuencia + 1;
        }

        $datos = array("id_brand"        =>$idsecuencia,
                       "descripcion"     =>$request->input("descripcion"),
                       "usuario_creador" =>$request->input("usuario_creador"),
                       "estado"          =>$request->input("estado"),
        );
        return response()->json($datos);
        $messages = [
            'required' => 'El campo :attribute es requerido.',
            'unique'   => 'El campo :attribute debe ser unico',
            'numeric'  => 'El campo :attribute debe ser numerico',
        ];

        $validator = validator($datos, [
            'descripcion'         => 'required|string',
            'usuario_creador'     => 'required|string',
            'estado'              => 'required|string'
        ],$messages);
        
        if ($validator->fails()) {
            $errors = $validator->errors();
            return $this->errorResponseParams($errors->all());
        }else{
            try {                
            DB::beginTransaction();                  
                BrandsModel::create($datos);
            DB::commit();
            return $this->successResponse($datos, 'Marca Creada satisfactoriamente');
            }
            catch (\Exception $e ){
                return $this->errorResponse($e);
            }
        }
    }

    public function show($id)
    {
        $brand = BrandsModel::find($id);
        if ($brand == null){
            return $this->errorResponse($brand);
        }
        return $this->successResponse($brand);
    }

    public function update(Request $request, $id)
    {
        $brand = BrandsModel::find($id);

        $datos = array(
            "descripcion"         =>$request->input("descripcion"),
            "usuario_modificador" =>$request->input("usuario_modificador")
        );

        $messages = [
            'required' => 'El campo :attribute es requerido.',
            'unique'   => 'El campo :attribute debe ser unico',
            'numeric'  => 'El campo :attribute debe ser numerico',
        ];

        $validator = validator($datos, [
            "descripcion"         => 'required|string',
            "usuario_modificador" => 'required|string',
        ],$messages);

        if ($validator->fails()) {
            $errors = $validator->errors();
            return $this->errorResponseParams($errors->all());
        }else{
            $brand->update($request->all());
            return $this->successResponse($brand, "Marca actualizada");
        }
    }

    public function destroy($id)
    {
        $brand = BrandsModel::find($id);

        $invproductos = InvProductos::where('id_brand','=',$id)->where('estado','=','ACTIVO')->first();
        
        if($invproductos <> null){
            return $this->errorResponse("No puede eliminar esta bodega, tiene producto/s asociado/s");
        }

        $brand->update(['estado' => 'ELIMINADO']);
        return $this->successResponse(null, "Marca eliminada");
    }

    public function busqueda(Request $request)
    {
        $parametro = $request->get('marca');
        $busqueda = BrandsModel::orderBy('id_brand', 'asc')->
                              parametro($parametro)->
                              where('estado','=','ACTIVO')->
                              get();                              
        return $this->successResponse($busqueda);
    }
}
