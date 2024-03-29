<?php

namespace App\Traits;

trait ApiResponse{

    public function successResponse($data, $urlRequest = '', $msj = 'Respuesta Exitosa',  $code = 200)
    {

        return response()->json(array("data" => $data, "urlRequest" => $urlRequest, "code" => $code, "msj" => $msj), $code);
    }

    public function errorResponse($data, $urlRequest = '', $msj = 'Respuesta con errores',  $code = 501)
    {        
        return response()->json(array("data" => $data, "urlRequest" => $urlRequest, "msj" => $msj, "code" => $code), $code);
    }

    public function errorResponseParams($data, $urlRequest = '', $msj = 'Error en parametros', $code = 502)
    {        
        if ($data ==null){
            $msj = 'El Registro que intenta eliminar no existe';
        };
        return response()->json(array("data" => $data, "urlRequest" => $urlRequest, "code" => $code, "msj" => $msj), $code);
    }
}
 