<?php

namespace App\Http\Controllers;

use App\Librerias\sucursales;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class sucursalesController extends ApiResponseController
{
    public function index()
    {        
        $temp1 = array();
        $sucursales = sucursales::join('paises','paises.id_pais','=','sucursales.id_pais')->
                                join('ciudades','ciudades.id_ciudad','=','sucursales.id_ciudad')->
                                join('regiones','regiones.id_region','=','sucursales.id_region')->
                                join('municipios','municipios.id_municipio','=','sucursales.id_municipio')->
                                join('provincias','provincias.id_provincia','=','sucursales.id_provincia')->
                                leftjoin('sectores','sectores.id_sector','=','sucursales.id_sector')->
                                select('sucursales.*',
                                        'paises.descripcion as pais',
                                        'ciudades.descripcion as ciudad',
                                        'municipios.descripcion as municipio',
                                        'regiones.descripcion as region',
                                        'sectores.descripcion as sector',
                                        'provincias.descripcion as provincia')->        
                                orderBy('created_at', 'desc')->
                                where('sucursales.estado','=','ACTIVO')->get();

        $i=0;

        foreach ($sucursales as $key => $value) {
            $temp2 = array(
                "pais" => $sucursales[$i]['pais'],
                "ciudad" => $sucursales[$i]['ciudad'],
                "municipio" => $sucursales[$i]['municipio'],
                "region" => $sucursales[$i]['region'],
                "sector" => $sucursales[$i]['sector'],
                "provincia" => $sucursales[$i]['provincia'],
                "calle" => $sucursales[$i]['calle'],
            );
            array_push($temp1,$temp2);
            $value->detalle = $temp1;
            $i++;
        }

        return $this->successResponse($sucursales);
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
                    sucursales::create($datos);                
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
        $sucursales = sucursales::find($id);        
        return $this->successResponse($sucursales);
    }

    public function update(Request $request,  $id)
    {
        $sucursales = sucursales::find($id);        
        
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
                    $sucursales->update($datos);  
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
        $sucursales = sucursales::where('id','=',$id);             
        $sucursales->update(['estado' => 'eliminado']);        
        return $this->successResponse(null,"Registro Eliminado");
    }

    public function busqueda(Request $request)
    {
        $parametro = $request->get('sucursales');
        $sucursales = sucursales::orderBy('created_at', 'desc')->where([['estado','=','activo'],['descripcion','=',$parametro]])->get();
        return $this->successResponse($sucursales);
    }

}
