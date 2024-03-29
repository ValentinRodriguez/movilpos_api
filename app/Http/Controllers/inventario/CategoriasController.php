<?php

namespace App\Http\Controllers\inventario;
use Illuminate\Http\Request;
use App\Librerias\SubCategoria;
use App\Librerias\SubSubCategoria;
use Illuminate\Support\Facades\DB;
use App\Librerias\inventario\InvProductos;
use App\Librerias\inventario\CategoriasModel;
use App\Http\Controllers\ApiResponseController;

class CategoriasController extends ApiResponseController
{
    public function index(Request $request)
    {
        $categoria = CategoriasModel::orderBy('created_at', 'desc')->
                                      where('estado','=','ACTIVO')->
                                      get();
    }

    public function store(Request $request)
    {
        $maxid=0;
        $idsecuencia=0;
        $maxid = CategoriasModel::get('id_categoria')->max();

        if ($maxid == null){
            $idsecuencia=1;
        } else {
            $idsecuencia = $maxid->id_categoria;
            $idsecuencia=$idsecuencia + 1;
        }

        $datos = array(
            "id_categoria"         =>$idsecuencia,
            "descripcion"          =>$request->input("descripcion"),
            "usuario_creador"      =>$request->input("usuario_creador"),
            "usuario_modificador"  =>$request->input("usuario_modificador"),   
            "estado"               =>$request->input("estado")
        );

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
            return $this->errorResponseParams($errors->all(), $request->urlRequest);
        }else{            
            try {                
                DB::beginTransaction();              
                    CategoriasModel::create($datos);
                DB::commit();
                return $this->successResponse($datos, $request->urlRequest);
            }
            catch (\Exception $e ){
                return $this->errorResponse($e->getMessage(), $request->urlRequest);
            }
        }

    }

    public function show(Request $request,$id)
    {
        $categoria = CategoriasModel::find($id);
        if ($categoria == null){
            return $this->errorResponse($categoria);
        }
        return $this->successResponse($categoria, $request->urlRequest);
    }

    public function update(Request $request,  $id)
    {
        $categoria = CategoriasModel::find($id);

        $datos = array(
            "id_categoria"        =>$request->input("id_categoria"),
            "descripcion"         =>$request->input("descripcion"),
            "usuario_creador"     =>$request->input("usuario_creador"),
            "usuario_modificador" =>$request->input("usuario_modificador"),
            "estado"              =>$request->input("estado")
        );

        $messages = [
             'required' => 'El campo :attribute es requerido.',
             'unique'   => 'El campo :attribute debe ser unico',
             'numeric'  => 'El campo :attribute debe ser numerico',
        ];

        $validator = validator($datos, [
            'descripcion'         => 'required|string',
            "id_categoria"        => 'required',
            "usuario_creador"     => 'required|string',
            "usuario_modificador" => 'required|string',
            "estado"              => 'required|string',
        ],$messages);

        if ($validator->fails()) {
            $errors = $validator->errors();
            return $this->errorResponseParams($errors->all(), $request->urlRequest);
        }else{
            try {
                DB::beginTransaction(); 
                $categoria->update($datos);                
                DB::commit();
                return $this->successResponse($datos, $request->urlRequest);
            }
            catch (\Exception $e ){
                return $this->errorResponse($e->getMessage(), $request->urlRequest);
            }
            return $this->successResponse($categoria, $request->urlRequest);
        }
    }

    public function destroy(Request $request, $id)
    {
        $categoria = CategoriasModel::where('id_categoria','=',$id);
        $invproductos = InvProductos::where('id_categoria','=',$id)->first();

        if($invproductos <> null){
            return $this->errorResponse("No puede eliminar Categoria, tiene producto/s asociado/s");
        }
     
        $categoria->update(['estado' => 'ELIMINADO']);
        return $this->successResponse(null, $request->urlRequest);
    }

    public function busqueda(Request $request)
    {
        $parametro = $request->get('categoria');
        $categoria = CategoriasModel::orderBy('created_at', 'desc')->
                                      parametro($parametro)->
                                      where('estado','=','activo')->
                                      get();

        return $this->successResponse($categoria, $request->urlRequest);
    }
}
