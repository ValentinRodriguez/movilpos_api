<?php

namespace App\Http\Controllers\globales;
use App\Http\Controllers\ApiResponseController;

use App\Librerias\Rol;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class RolController extends ApiResponseController
{
    
    public function index(Request $request)
    {
        $rols = Rol::orderBy('id', 'asc')->get();
        return $this->successResponse($rols, $request->urlRequest);
    }
        
    public function store(Request $request)
    {
        $datos = array("email"           =>$request->input("email"),
                       "usuario"         =>$request->input("usuario"),
                       "perfil"          =>$request->input("perfil"),
                       "modulos"         =>$request->input("modulos"),
                       "programas"       =>$request->input("programas"),                       
                       "notificaciones"  =>$request->input("notificaciones"),
                       "estado"          =>$request->input("estado"),
                       "usuario_creador" =>$request->input("usuario_creador")
        );
        
        $messages = [
            'required' => 'El campo :attribute es requerido.',
            'unique'   => 'El campo :attribute debe ser unico',
            'string'   => 'El campo :attribute debe ser texto',
        ];

        $validator = validator($datos, [
            "email"           => 'required|string',
            "usuario"         => 'required|string',
            "perfil"          => 'required',
            "modulos"         => 'required',
            "programas"       => 'required',
            "notificaciones"  => 'required',
            "estado"          => 'required',
            "usuario_creador" => 'required'
        ],$messages);

        if ($validator->fails()) {
            $errors = $validator->errors();
            return $this->errorResponseParams($errors->all(), $request->urlRequest);
        }else{

            try {
                DB::beginTransaction();  
                    $rol = Rol::where([['usuario','=',$datos['usuario']],
                                       ['email','=',$datos['email']],
                                       ['estado','=','activo']])->first();
                                
                    if ($rol != null) {
                        $rol->update($datos);
                        // return $this->successResponse($datos, $request->urlRequest);
                    }else{
                        Rol::create($datos);
                    }
                DB::commit();
                return $this->successResponse($datos, $request->urlRequest);
            }
            catch (\Exception $e ){
                return $this->errorResponse($e->getMessage(), $request->urlRequest);
            } 
        }
    }
    
    public function show(Request $request,$email)
    {
        try {
            $rol = Rol::where('email','=',$email)->first();
            return $this->successResponse($rol, $request->urlRequest);
        }
        catch (\Exception $e ){
            return $this->errorResponse($e->getMessage(), $request->urlRequest);
        } 
    }
    
    public function update(Request $request, Rol $rol)
    {
        //
    }
    
    public function destroy(Request $request,$email)
    {
        $rol = Rol::where('email','=',$email);
        $rol->update(['estado' => 'eliminado']);
        return $this->successResponse($rol, $request->urlRequest);
    }

    public function rolUsuario(Request $request,$usuario, $email)
    {
        $rol = Rol::where([['usuario','=',$usuario],['email','=',$email],['estado','=','activo']])->get();
        return $this->successResponse($rol, $request->urlRequest);
    }

    
}
