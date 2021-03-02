<?php

namespace App\Traits;

trait ApiResponse{

    public function successResponse($data, $msj = 'Respuesta Exitosa', $code = 200)
    {

        return response()->json(array("data" => $data, "code" => $code, "msj" => $msj), $code);
    }

    public function errorResponse($data, $msj = 'Repuesta con errores', $code = 501)
    {        
        if ($data ==null){
            $msj = 'El Registro que intenta eliminar no existe';
        };
        return response()->json(array("data" => $data, "code" => $code, "msj" => $msj), $code);
    }

    public function errorResponseParams($data, $msj = 'Error en parametros', $code = 502)
    {        
        if ($data ==null){
            $msj = 'El Registro que intenta eliminar no existe';
        };
        return response()->json(array("data" => $data, "code" => $code, "msj" => $msj), $code);
    }
}
 