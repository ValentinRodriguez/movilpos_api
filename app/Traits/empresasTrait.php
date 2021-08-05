<?php

namespace App\Traits;
use Illuminate\Support\Facades\DB;
use App\Librerias\Empresa;

trait empresasTrait{

    public function crearEmpresa($request)
    {
        $datos = $request->all();
        return response()->json($datos);
        $messages = [
            'required' => 'El campo :attribute es requerido.',
            'unique'   => 'El campo :attribute debe ser unico',
            'numeric'  => 'El campo :attribute debe ser numerico',
        ];

        $validator = validator($datos, [
            "nombre"             => 'required',
            "telefono_empresa"   => 'required',
            "email_empresa"      => 'required',
            "documento"          => 'required',
            "tipo_documento"     => 'required',
            "calle"              => 'required',  
            "contacto"           => 'required',   
            "telefono_contacto"  => 'required',
            "id_pais"            => 'required',
            "id_region"          => 'required',
            "id_municipio"       => 'required',
            "id_provincia"       => 'required',
            "empresa_verde"      => 'required',
            "tipo_cuadre"        => 'required',
            "valuacion_inv"      => 'required',
            "usuario_creador"    => 'required',
            "estado"             => 'required'
        ],$messages);

        if ($validator->fails()) {
            $errors = $validator->errors();
            return $this->errorResponseParams($errors->all(), $request->urlRequest);
        }else{
            if ($request->hasFile('logo')) {
                // Storage::delete('public/'.$producto->imagen);
                $imagen = $request->file('logo');
                $nombreImagen = uniqid().'.'.$imagen->getClientOriginalExtension();
                $datos['logo'] = $request->file('logo')->storeAs('uploads', 'empresa/'.$nombreImagen, 'public');
            }

            try {                
                $datos['logo'] = '';
                DB::beginTransaction();
                    $maxid=0;
                    $idsecuencia=0;
                
                    $maxid= Empresa::get('cod_cia')->max();
            
                    if ($maxid==null){
                        $idsecuencia=1;
                    }
                    else{
                        $idsecuencia=$maxid->cod_cia;
                        $idsecuencia=$idsecuencia+1;
                    }
                    $datos['cod_cia'] = $idsecuencia;
                    Empresa::create($datos);
                DB::commit();
                return $this->successResponse($datos, $request->urlRequest);
            }
            catch (\Exception $e ){
                return $this->errorResponse($e->getMessage(), $request->urlRequest);
            }            
        }
        return response()->json(array("datos" => $datos));
    }
}
 