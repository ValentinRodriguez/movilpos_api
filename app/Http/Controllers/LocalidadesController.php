<?php

namespace App\Http\Controllers;

use App\Librerias\localidades;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LocalidadesController extends ApiResponseController
{
    public function index()
    {        
        $temp1 = array();
        $localidades = localidades::join('paises','paises.id_pais','=','localidades.id_pais')->
                                    join('ciudades','ciudades.id_ciudad','=','localidades.id_ciudad')->
                                    join('regiones','regiones.id_region','=','localidades.id_region')->
                                    join('municipios','municipios.id_municipio','=','localidades.id_municipio')->
                                    join('provincias','provincias.id_provincia','=','localidades.id_provincia')->
                                    leftjoin('sectores','sectores.id_sector','=','localidades.id_sector')->
                                    select('localidades.*',
                                           'paises.descripcion as pais',
                                           'ciudades.descripcion as ciudad',
                                           'municipios.descripcion as municipio',
                                           'regiones.descripcion as region',
                                           'sectores.descripcion as sector',
                                           'provincias.descripcion as provincia')->        
                                    orderBy('created_at', 'desc')->
                                    where('localidades.estado','=','ACTIVO')->get();

        $i=0;

        foreach ($localidades as $key => $value) {
            $temp2 = array(
                "pais" => $localidades[$i]['pais'],
                "ciudad" => $localidades[$i]['ciudad'],
                "municipio" => $localidades[$i]['municipio'],
                "region" => $localidades[$i]['region'],
                "sector" => $localidades[$i]['sector'],
                "provincia" => $localidades[$i]['provincia'],
                "calle" => $localidades[$i]['calle'],
            );
            array_push($temp1,$temp2);
            $value->detalle = $temp1;
            $i++;
        }

        return $this->successResponse($localidades);
    }

    public function store(Request $request)
    {
        $datos = array(
            "cod_cia"         =>$request->input("cod_cia"),
            "descripcion"     =>$request->input("descripcion"),
            // "direccion"       =>$request->input("direccion"),
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
            "cod_cia"         => 'required',  
            "descripcion"     => 'required',  
            // "direccion"    => 'required', 
            "id_pais"         => 'required',
            // "id_zonalocal"    => 'required',
            "id_ciudad"       => 'required', 
            "id_region"       => 'required',
            "id_municipio"    => 'required',
            "id_provincia"    => 'required',
            // "id_sector"       => 'required',
            "estado"          => 'required',  
            "usuario_creador" => 'required'
        ],$messages);

        if ($validator->fails()) {
            $errors = $validator->errors();
            return $this->errorResponseParams($errors->all());
        }else{            
            try {                
                DB::beginTransaction();  
                // return response()->json($datos);
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
        $localidades = localidades::orderBy('created_at', 'desc')->where([['estado','=','activo'],['descripcion','=',$parametro]])->get();
        return $this->successResponse($localidades);
    }

}
