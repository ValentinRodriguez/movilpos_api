<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Librerias\Propiedadesprod;
use App\Librerias\InvProductos;

class inv_PropiedadesController extends ApiResponseController
{
    public function index(Request $request)
    {
        $propiedades = Propiedadesprod::orderBy('created_at', 'desc')->
                                    where('estado','=','ACTIVO')->
                                    get();

        return $this->successResponse($propiedades, $request->urlRequest);
    }

    public function store(Request $request)
    {
        $maxid=0;
        $idsecuencia=0;
        $maxid = Propiedadesprod::get('id_propiedad')->max();

        if ($maxid == null){
            $idsecuencia=1;
        } else {
            $idsecuencia = $maxid->id_propiedad;
            $idsecuencia=$idsecuencia + 1;
        }        

        $datos = array(
            "id_propiedad"        =>$idsecuencia,
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
            'usuario_creador'     => 'required|string',
            'estado'              => 'required|string'
        ],$messages);

        if ($validator->fails()) {
            $errors = $validator->errors();
            return $this->errorResponseParams($errors->all(), $request->urlRequest);
        }else{            
            try {                
                DB::beginTransaction();
                    Propiedadesprod::create($datos);
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
        $propiedades = Propiedadesprod::find($id);
        if ($propiedades == null){
            return $this->errorResponse($propiedades);
        }
        return $this->successResponse($propiedades, $request->urlRequest);
    }

    public function update(Request $request,  $id)
    {
        $propiedades = Propiedadesprod::find($id);

        $datos = array(
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
                    $propiedades->update($datos);                
                DB::commit();
                return $this->successResponse(1, $request->urlRequest);
            }
            catch (\Exception $e ){
                return $this->errorResponse($e->getMessage(), $request->urlRequest);
            }
            return $this->successResponse($propiedades, 'Categoría actualizada');
        }
    }

    public function destroy(Request $request, $id)
    {
        $propiedades = Propiedadesprod::where('id','=',$id);
        $invproductos = InvProductos::where('propiedad','=',$id)->first();

        if($invproductos <> null){
            return $this->errorResponse("No puede eliminar esta propiedad, tiene producto/s asociado/s");
        }
     
        $propiedades->update(['estado' => 'ELIMINADO']);
        return $this->successResponse(null, $request->urlRequest);
    }

    public function busqueda(Request $request)
    {
        $descripcion = $request->get('propiedad');
        $propiedades = Propiedadesprod::orderBy('created_at', 'desc')->
                                    where([['estado','=','activo'],['descripcion','=',$descripcion]])->
                                    get();

        return $this->successResponse($propiedades, $request->urlRequest);
    }

}
