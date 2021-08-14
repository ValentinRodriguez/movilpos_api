<?php

namespace App\Http\Controllers\globales;
use App\Http\Controllers\ApiResponseController;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Librerias\zonas;
use App\Librerias\zonas_provincias;

class ZonasController extends ApiResponseController
{
    public function index(Request $request)
    {
        $zona = Zonas::orderBy('created_at', 'desc')->get();
        foreach ($zona as $key => $value) {
            $zonaProvincia = zonas_provincias::join('provincias','provincias.id_provincia','=','zonas_provincias.id_provincia')->
                                               select('zonas_provincias.id_provincia','provincias.descripcion')->
                                               where('id_zona','=',$value->id_zonalocal)->
                                               get();

            $value->zona_provincia = $zonaProvincia;
        }
        return $this->successResponse($zona, $request->urlRequest);
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        $numerosecuencia = zonas::get('id_zonalocal')->max();

        if( $numerosecuencia == null){
            $numerosecuencia = 1;
        }
        else{
            $numerosecuencia =$numerosecuencia->id_zonalocal + 1;
        }
        
        $datos = array("id_zonalocal" => $numerosecuencia,
                       "descripcion"  => $request->input("descripcion"),       
                       "provincias"   => $request->input("provincias"),  
                       "estado"       => $request->input("estado")
        );
        // return response()->json($datos);
        $messages = ['required' => 'El campo :attribute es requerido.',
                     'unique'   => 'El campo :attribute debe ser unico',
                     'numeric'  => 'El campo :attribute debe ser numerico'
        ];

        $validator = validator($datos, [
                'id_zonalocal' => 'required',
                'estado'       => 'required',
                'descripcion'  => 'required|string|min:1|max:500' 
        ], $messages);

        if ($validator->fails()) {
            $errors = $validator->errors();
            return $this->errorResponseParams($errors->all(), $request->urlRequest);
        } else {
            DB::beginTransaction();
                zonas::create($datos);
                    
                if (count($datos['provincias']) !== 0) {
                    $datosd = null;

                    $id_zona = zonas_provincias::get('id_zona')->max();

                    if( $id_zona == null){
                        $id_zona = 1;
                    }
                    else{
                        $id_zona = $id_zona->id_zona + 1;
                    }
                    // return response()->json($datos['provincias']);
                    for ($i=0; $i < count($datos['provincias']); $i++) {
                        $datosd = array('id_provincia' => $datos['provincias'][$i]['id_provincia'],
                                        'id_zona' => $id_zona);
                        
                        $messages = [
                            'required' => 'El campo :attribute es requerido.'
                        ];
        
                        $validator = validator($datosd, [
                            'id_provincia' => 'required'
                        ],$messages);
                        
                        if ($validator->fails()) {
                            $errors = $validator->errors();
                            return $this->errorResponseParams($errors->all(), $request->urlRequest);                        
                        }                                                               
                        zonas_provincias::create($datosd);
                    }                        
                }else{
                    return $this->errorResponse(null, "No hay provincias vinculadas a la zona.");
                }
            DB::commit();
            return $this->successResponse($datos, $request->urlRequest);
        }
    }
    
    public function show(zonas $zonas)
    {
        //
    }
    
    public function buscarZonaProvincia(Request $request, $id)
    {
        $zonaProv = zonas_provincias::join('zonas_local','zonas_local.id_zonalocal','=','zonas_provincias.id_zona')->
                                      select('zonas_provincias.*','zonas_local.descripcion as desc_zona')->
                                      where('id_provincia','=',$id)->
                                      get();

        return $this->successResponse($zonaProv, $request->urlRequest);
    }

    public function update(Request $request, $id)
    {
        $zona = zonas::find($id);

        $datos = array(
        "descripcion"=>$request->input("descripcion"));

        $messages = [
            'required' => 'El campo :attribute es requerido.',
            'unique'   => 'El campo :attribute debe ser unico',
            'numeric'  => 'El campo :attribute debe ser numerico',
        ];

        $validator = validator($datos, [
             'descripcion' => 'required|string|min:10|max:500'
        ], $messages);

        if ($validator->fails()) {
            $errors = $validator->errors();
            return $this->errorResponseParams($errors->all(), $request->urlRequest);
        } else {
            $zona->update($request->all());
            return $this->successResponse($zona, $request->urlRequest);
        }
    }
    
    public function destroy(Request $request, $id)
    {
        $zona = zonas::find($id);

        if ($zona == null){
            return $this->response()->json(array("msj:" => "Registro no Existe"));
        }

        $zona->update(['estado' => 'ELIMINADO']);
        return response()->json(array("msj:" => "Registro Eliminado"));
    }

    public function busqueda(Request $request)
    {
        $parametro = $request->get('zona');
        $zona = zonas::orderBy('created_at', 'desc')->where([['estado','=','activo'],['descripcion','=',$parametro]])->get();
        return $this->successResponse($zona, $request->urlRequest);
    }
}
    
    

