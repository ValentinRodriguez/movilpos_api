<?php

namespace App\Http\Controllers;

use App\Librerias\sucursales;
use App\Librerias\Empresa;
use App\Librerias\pais;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class sucursalesController extends ApiResponseController
{
    public function index(Request $request)
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

        return $this->successResponse($sucursales, $request->urlRequest);
    }

    public function autollenado(Request $request)
    {     
        $respuesta = array();

        $empresa = Empresa::where('estado','=','ACTIVO')->get();
        $paises = pais::where('estado','=','ACTIVO')->get();

        $_empresa = array("label" => 'empresas', "data" => $empresa, "icono" => 'fas fa-dolly-flatbed');
        $_paises = array("label" => 'paises', "data" => $paises, "icono" => 'fas fa-dolly-flatbed');
        
        array_push($respuesta,$_empresa);  
        array_push($respuesta,$_paises);

        return $this->successResponse($respuesta, $request->urlRequest);
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
            "id_pais"         => 'required',
            "id_ciudad"       => 'required', 
            "id_region"       => 'required',
            "id_municipio"    => 'required',
            "id_provincia"    => 'required',
            "estado"          => 'required',  
            "usuario_creador" => 'required'
        ],$messages);

        if ($validator->fails()) {
            $errors = $validator->errors();
            return $this->errorResponseParams($errors->all(), $request->urlRequest);
        }else{            
            try {                
                DB::beginTransaction();  
                // return response()->json($datos);
                    sucursales::create($datos);                
                DB::commit();                
                return $this->successResponse(1, $request->urlRequest);
            }
            catch (\Exception $e ){
                return $this->errorResponse($e->getMessage(), $request->urlRequest);
            }
        }
    }

    public function show(Request $request,$id)
    {
        $sucursales = sucursales::find($id);        
        return $this->successResponse($sucursales, $request->urlRequest);
    }

    public function sucursalXempresa(Request $request,$codcia)
    {
        $sucursales = sucursales::where('cod_cia','=',$codcia)->get();        
        return $this->successResponse($sucursales, $request->urlRequest);
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
            return $this->errorResponseParams($errors->all(), $request->urlRequest);
        }else{            
            try {                
                DB::beginTransaction();  
                    $sucursales->update($datos);  
                DB::commit();
                return $this->successResponse(1, $request->urlRequest);
            }
            catch (\Exception $e ){
                return $this->errorResponse($e->getMessage(), $request->urlRequest);
            }
        }
    }

    public function destroy(Request $request, $id)
    {
        $sucursales = sucursales::where('id','=',$id);             
        $sucursales->update(['estado' => 'eliminado']);        
        return $this->successResponse(null, $request->urlRequest,"Registro Eliminado");
    }

    public function busqueda(Request $request)
    {
        $parametro = $request->get('sucursales');
        $sucursales = sucursales::orderBy('created_at', 'desc')->where([['estado','=','activo'],['descripcion','=',$parametro]])->get();
        return $this->successResponse($sucursales, $request->urlRequest);
    }

}
