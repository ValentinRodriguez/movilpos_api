<?php

namespace App\Http\Controllers;

use App\Librerias\localidades;
use Illuminate\Http\Request;

class LocalidadesController extends ApiResponseController
{
    public function index()
    {
        $localidades = localidades::orderBy('created_at', 'desc')->where('estado','=','ACTIVO')->get();
        return $this->successResponse($localidades);
    }

    public function store(Request $request)
    {
        $datos = array(
            "cod_cia"         =>$request->input("cod_cia"),
            "descripcion"     =>$request->input("descripcion"),
            "direccion"       =>$request->input("direccion"),
            "id_pais"         =>$request->input("id_pais"),
            "id_zonalocal"    =>$request->input("id_zonalocal"),
            "id_ciudad"       =>$request->input("id_ciudad"),
            "id_region"       =>$request->input("id_region"),
            "id_municipio"    =>$request->input("id_municipio"),
            "id_provincia"    =>$request->input("id_provincia"),
            "id_sector"       =>$request->input("id_sector"),
            "estado"          =>$request->input("estado"),
            "usuario_creador" =>$request->input("usuario_creador")
        );

        $messages = [
             'required' => 'El campo :attribute es requerido.',
             'unique'   => 'El campo :attribute debe ser unico',
             'numeric'  => 'El campo :attribute debe ser numerico',
        ];

        $validator = validator($datos, [
            'divisa'          => 'required|string',
            'descripcion'  => 'required|string',
            'simbolo'         => 'required|string',
            'usuario_creador' => 'required|string',
            'estado'          => 'required|string'
        ],$messages);

        if ($validator->fails()) {
            $errors = $validator->errors();
            return $this->errorResponseParams($errors->all());
        }else{            
            try {                
                DB::beginTransaction();  
                    localidades::create($datos);                
                DB::commit();                
                return $this->successResponse(1);
            }
            catch (\Exception $e ){
                return $this->errorResponse($e->getMessage());
            }
        }
    }

    public function show($id)
    {
        $localidades = localidades::find($id);        
        if ($localidades == null){            
            return $this->errorResponse($localidades);
        }
        return $this->successResponse($localidades);
    }

    public function update(Request $request,  $id)
    {
        $localidades = localidades::find($id);        
        
        $datos = array(
            "cod_cia"         =>$request->input("cod_cia"),
            "descripcion"     =>$request->input("descripcion"),
            "direccion"       =>$request->input("direccion"),
            "id_pais"         =>$request->input("id_pais"),
            "id_zonalocal"    =>$request->input("id_zonalocal"),
            "id_ciudad"       =>$request->input("id_ciudad"),
            "id_region"       =>$request->input("id_region"),
            "id_municipio"    =>$request->input("id_municipio"),
            "id_provincia"    =>$request->input("id_provincia"),
            "id_sector"       =>$request->input("id_sector"),
            "estado"          =>$request->input("estado"),
            "usuario_creador" =>$request->input("usuario_creador"),
            "usuario_modificador" =>$request->input("usuario_modificador")
        );

        $messages = [
             'required' => 'El campo :attribute es requerido.',
             'unique'   => 'El campo :attribute debe ser unico',
             'numeric'  => 'El campo :attribute debe ser numerico',
        ];

        $validator = validator($datos, [
            "cod_cia"     => 'required',
            "descripcion" => 'required',
            "direccion"   => 'required',
            "id_pais"     => 'required',
            "id_zonalocal"=> 'required',
            "id_ciudad"   => 'required',
            "id_region"   => 'required',
            "id_municipio"=> 'required',
            "id_provincia"=> 'required',
            "id_sector"   => 'required',
            'usuario_creador' => 'required',
            'usuario_modificador' => 'required',
            'estado'          => 'required'
        ],$messages);

        if ($validator->fails()) {
            $errors = $validator->errors();
            return $this->errorResponseParams($errors->all());
        }else{            
            try {                
                DB::beginTransaction();  
                    $localidades->update($datos);  
                DB::commit();
                return $this->successResponse(1);
            }
            catch (\Exception $e ){
                return $this->errorResponse($e->getMessage());
            }
        }
    }

    public function destroy($id)
    {
        $localidades = localidades::where('id','=',$id);             
        $localidades->update(['estado' => 'eliminado']);        
        return $this->successResponse(null,"Registro Eliminado");
    }

    public function busqueda(Request $request)
    {
        $parametro = $request->get('localidades');
        $localidades = localidades::orderBy('created_at', 'desc')->where([['estado','=','activo'],['divisa','=',$parametro]])->get();
        return $this->successResponse($localidades);
    }

}
