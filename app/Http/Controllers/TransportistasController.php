<?php

namespace App\Http\Controllers;

use App\Librerias\transportistas;
use App\Librerias\zonas;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TransportistasController extends ApiResponseController
{
    public function index()
    {
        $datos= transportistas::orderBy('id', 'asc')->
                                where('estado','=','activo')->                             
                                get();
        if ($datos == null or $datos == '') {
            return $this->errorResponse('No existen datos');
        }
        else{
            return $this->successResponse($datos);
        }
    }

    public function store(Request $request)
    {
        $datos = $request->all();
        
        $messages = [
            'required' => 'El campo :attribute es requerido.',
            'unique'   => 'El campo :attribute debe ser unico',
            'numeric'  => 'El campo :attribute debe ser numerico',
        ];
        
        $validator = validator($datos, [
            "cedula"            => 'required',
            "nombre"            => 'required',
            "cod_transportista" => 'required',
            "calle"             => 'required',
            "casa_num"          => 'required',
            "barrio"            => 'required',
            "urbanizacion"      => 'required',
            "cod_zona"          => 'required',
            "cod_provincia"     => 'required',
            "id_pais"           => 'required',
            "telefono"          => 'required',
            "estado"            => 'required',
            "usuario_creador"   => 'required'
        ],$messages);
       
        if ($validator->fails()) {
            $errors =  $validator->errors();
            return $this->errorResponseParams($errors->all());
        } else {
            
            $maxid=0;
            $idsecuencia=0;
            $maxid = transportistas::get('sec_transp')->max();

            if ($maxid == null){
                $idsecuencia=1;
            } else {
                $idsecuencia = $maxid->sec_transp;
                $idsecuencia=$idsecuencia + 1;
            }
            try{
                DB::beginTransaction(); 
                    $datos = $datos + array('sec_transp' =>$idsecuencia);
                    transportistas::create($datos);
                DB::commit();                    
                return $this->successResponse(1);
            } catch (\Exception $e ){
                return $this->errorResponse($e);
            }
        }
    }
    
    public function show($id)
    {
        $zona = Zonas::orderBy('created_at', 'desc')->get();

        $transportista = transportistas::find($id);
        $transportista->zona = $zona;
        if ($transportista == null){
            return $this->errorResponse($transportista);
        }
        return $this->successResponse($transportista);
    }
    
    public function update(Request $request, $id)
    {
        $transportista = transportistas::find($id);

        $datos = $request->all();
       
        $messages = [
            'required' => 'El campo :attribute es requerido.',
            'unique'   => 'El campo :attribute debe ser unico',
            'numeric'  => 'El campo :attribute debe ser numerico',
        ];

        $validator = validator($datos, [
            "cedula"            => 'required',
            "nombre"            => 'required',
            "cod_transportista" => 'required',
            "calle"             => 'required',
            "casa_num"          => 'required',
            "barrio"            => 'required',
            "urbanizacion"      => 'required',
            "cod_zona"          => 'required',
            "cod_provincia"     => 'required',
            "id_pais"           => 'required',
            "telefono"          => 'required',
            "estado"            => 'required',
            "usuario_creador"   => 'required',
            "usuario_modificador"   => 'required'
        ],$messages);

        // return response()->json($datos);
        
        if ($validator->fails()) {
            $errors = $validator->errors();
            return $this->errorResponseParams($errors->all());
        }else{
            try {
                DB::beginTransaction();  
                    $transportista->update($datos);
                DB::commit();
                return $this->successResponse(1);
            }
            catch (\Exception $e ){
                return $this->errorResponse($e);
            }
        }
    }
    
    public function destroy($id)
    {
        $transportista = transportistas::find($id);
        
        if ($transportista == null){
            return $this->errorResponse(null, "Este transportista no existe");
        }

        $transportista->update(['estado' => 'eliminado']);
        return $this->successResponse(null,"transportista Eliminado");
    }
}
