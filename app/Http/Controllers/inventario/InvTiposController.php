<?php

namespace App\Http\Controllers\inventario;
use App\Http\Controllers\ApiResponseController;

use App\Librerias\invTipos;
use App\Librerias\InvProductos;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class InvTiposController extends ApiResponseController
{
    public function index(Request $request)
    {
        $tipos = invTipos::orderBy('created_at', 'desc')->
                           where('estado','=','ACTIVO')->
                           get();
       
        return $this->successResponse($tipos, $request->urlRequest);
    }

    public function store(Request $request)
    {
        $datos = array("descripcion"        =>$request->input("descripcion"),
                       "usuario_creador"    =>$request->input("usuario_creador"),
                       "usuario_modificador"=>$request->input("usuario_modificador"),
                       "cuenta_no"          =>$request->input("cuenta_no"),
                       "estado"             =>$request->input("estado"),
                       );

        $messages = ['required' => 'El campo :attribute es requerido.',
                     'unique'   => 'El campo :attribute debe ser unico',
                     'numeric'  => 'El campo :attribute debe ser numerico',
                    ];

        $validator = validator($datos, [
            'descripcion'         => 'required',
            'usuario_creador'     => 'required|string',
            'estado'              => 'required|string',
            'cuenta_no'           => 'required'
        ], $messages);

        if ($validator->fails()) {
            $errors = $validator->errors();
            return $this->errorResponse($errors->all());
        } else {
            try {
                DB::beginTransaction();  
                    $maxid=0;
                    $idsecuencia=0;
                    $maxid = invTipos::get('id_tipoinventario')->max();
        
                    if ($maxid == null){
                        $idsecuencia=1;
                    }
                    else{
                        $idsecuencia = $maxid->id_tipoinventario;
                        $idsecuencia=$idsecuencia + 1;
                    }
        
                    $datos = $datos + array('id_tipoinventario' =>$idsecuencia);
                    
                    invTipos::create($datos);
                DB::commit();
                return $this->successResponse($datos, 'Tipo de inventario guardado');                
            } catch (\Exception $e) {
                return $this->errorResponse($e->getMessage(), $request->urlRequest);
            }
        }
    }

    public function show(Request $request,$id)
    {
        $tipo = invTipos::find($id);

        if ($tipo == null){
            return $this->errorResponse($tipo);
        }
        return $this->successResponse($tipo, $request->urlRequest);
    }

    public function update(Request $request, $id)
    {
        $tipo = invTipos::find($id);

        $datos = array(
            "descripcion"         =>$request->input("descripcion"),
            "cuenta_no"            =>$request->input("cuenta_no"),
            "usuario_modificador" =>$request->input("usuario_modificador"),
            "estado"              =>"activo"
        );
        // return response($datos);
        $messages = [
            'required' => 'El campo :attribute es requerido.',
            'unique'   => 'El campo :attribute debe ser unico',
            'numeric'  => 'El campo :attribute debe ser numerico',
        ];

        $validator = validator($datos, [
            "descripcion"         => 'required|string',
            "cuenta_no"           => 'required',
            "usuario_modificador" => 'required|string'
        ], $messages);

        if ($validator->fails()) {
            $errors = $validator->errors();
            return $this->errorResponseParams($errors->all(), $request->urlRequest);
        } else {
            $tipo->update($datos);
            return $this->successResponse($tipo, 'Tipo de inventario actualizado');
        }
    }

    public function destroy(Request $request, $id)
    {
        $tipo = invTipos::find($id);

        $invproductos = InvProductos::where('id_tipoinventario','=',$id)->first();

        if($invproductos <> null){
            return $this->errorResponse("No puede eliminar tipo de inventario, tiene producto/s asociado/s");
        }

        $tipo->update(['estado' => 'ELIMINADO']);
        return $this->successResponse(null, $request->urlRequest,"Tipo de inventario Eliminado");
    }

    public function busqueda(Request $request)
    {
        $parametro = $request->get('invtipo');
        $invTipo = invTipos::orderBy('created_at', 'desc')->
                             parametro($parametro)->
                             where('estado','=','activo')->
                             get();

        return $this->successResponse($invTipo, $request->urlRequest);
    }
}
