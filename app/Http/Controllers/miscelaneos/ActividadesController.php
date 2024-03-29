<?php

namespace App\Http\Controllers\miscelaneos;
use App\Http\Controllers\ApiResponseController;

use App\Librerias\miscelaneos\Actividades;
use App\Mail\actividadesMailable;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use DateTime;

class ActividadesController extends ApiResponseController
{
    public function index(Request $request)
    {
        // return response()->json($request);
        $actividades = Actividades::orderBy('created_at', 'desc')->
                                    where([['estado','=','ACTIVO'],['username','=',$request['usuario_creador']]])->
                                    get();

        return $this->successResponse($actividades, $request->urlRequest);
    }

    public function store(Request $request)
    {
        $datos = array(
            "title"           =>$request->input("title"),
            "start"           =>$request->input("start"),
            "end"             =>$request->input("end"),
            "notificacion"    =>$request->input("notificacion"),
            "url"             =>$request->input("url"),
            "enviado"         =>$request->input("enviado"),
            "estado"          =>$request->input("estado")
        );
        // return response()->json($datos); 
        $messages = [
            'required' => 'El campo :attribute es requerido.',
            'unique'   => 'El campo :attribute debe ser unico',
            'numeric'  => 'El campo :attribute debe ser numerico',
        ];
        
        $validator = validator($datos, [
            'title'        => 'required',
            'start'        => 'required',
            'notificacion' => 'required',
            'estado'       => 'required'
        ],$messages);

        if ($validator->fails()) {
            $errors = $validator->errors();
            return $this->errorResponseParams($errors->all(), $request->urlRequest);
        }else{            
            try {       
                // return response()->json($datos);         
                DB::beginTransaction();  
                    $datos['username'] = $request['usuario_creador'];
                    Actividades::create($datos);
                DB::commit();
                return $this->successResponse($datos, $request->urlRequest);
            }
            catch (\Exception $e ){
                return $this->errorResponse($e->getMessage(), $request->urlRequest);
            }
        }
    }

    public function show(Request $request,$id)
    {
        $categoria = Actividades::find($id);
        if ($categoria == null){
            return $this->errorResponse($categoria);
        }
        return $this->successResponse($categoria, $request->urlRequest);
    }

    public function update(Request $request,  $id)
    {
        $actividad = Actividades::find($id);

        $datos = array(
            "title"           =>$request->input("title"),
            "start"           =>$request->input("start"),
            "end"             =>$request->input("end"),
            "notificacion"    =>$request->input("notificacion"),
            "url"             =>$request->input("url"),
            "username"        =>$request->input("username"),
            "estado"          =>$request->input("estado")
        );
        //return response()->json($datos);
        $messages = [
             'required' => 'El campo :attribute es requerido.',
             'unique'   => 'El campo :attribute debe ser unico',
             'numeric'  => 'El campo :attribute debe ser numerico',
        ];

        $validator = validator($datos, [
            'title'        => 'required',
            'start'        => 'required',
            'notificacion' => 'required',
            'estado'       => 'required'
        ],$messages);

        if ($validator->fails()) {
            $errors = $validator->errors();
            return $this->errorResponseParams($errors->all(), $request->urlRequest);
        }else{            
            try {              
                DB::beginTransaction();              
                    $actividad->update($datos);
                DB::commit();
                return $this->successResponse($datos, $request->urlRequest);
            }
            catch (\Exception $e ){
                return $this->errorResponse($e->getMessage(), $request->urlRequest);
            }
        }
    }

    public function destroy(Request $request, $id)
    {
        $actividad = Actividades::find($id);

        if($actividad == null){
            return $this->errorResponse("Esta actividad no existe");
        }
     
        $actividad->update(['estado' => 'ELIMINADO']);
        return $this->successResponse(null, $request->urlRequest);
    }

    public function busqueda(Request $request)
    {
        $usuario = $request->get('username');
        // $email = $request->get('usuario');

        $categoria = Actividades::orderBy('created_at', 'desc')->
                                  where([['estado','=','ACTIVO'],['username','=',$usuario]])->
                                  get();

        return $this->successResponse($categoria, $request->urlRequest);
    }

    public function ActividadesVencidas()
    {
        $rango = array();
        $date = new DateTime;

        $date->modify('-1 hour');
        $rango['desde'] = $date->format('Y-m-d H:i:s');

        $date->modify('+2 hour');
        $rango['hasta'] = $date->format('Y-m-d H:i:s');
        
        $actividades = Actividades::orderBy('created_at', 'desc')-> 
                                    join('mov_usuarios.users','mov_usuarios.users.username','=','actividades.username')->
                                    where([['actividades.enviado','=','no'],
                                           ['actividades.estado','=','ACTIVO']])->
                                    wherebetween('actividades.notificacion',[$rango['desde'], $rango['hasta']])->      
                                    select('actividades.*','mov_usuarios.users.email')->
                                    get();    
                                                              
        if (count($actividades) != 0) {
            foreach ($actividades as $key => $value) {
                Mail::to($value->email)->send(new actividadesMailable($actividades));
                Actividades::where('id', $value->id)->update(['enviado' => 'si']);
            }
            return $this->successResponse($actividades);
        }else{
            return $this->successResponse(1);
        }
    }
}
