<?php

namespace App\Http\Controllers\rrhh;
use Illuminate\Http\Request;

use App\Librerias\rrhh\Nopuesto;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\ApiResponseController;

class NopuestoController extends ApiResponseController
{
    public function index(Request $request)
    {
        $nopuestos = Nopuesto::orderBy('id', 'asc')->where('estado','=','activo')->get();
        return $this->successResponse($nopuestos, $request->urlRequest);
    }


    public function store(Request $request)
    {
        $datos = array('titulo'            =>$request->input('titulo') ,
                       'descripcion'       =>$request->input('descripcion'),
                       'sueldo_inicial'    =>$request->input('sueldo_inicial'),
                       'sueldo_actual'     =>$request->input('sueldo_actual'),
                       'usuario_creador'   =>$request->input('usuario_creador') ,
                       'estado'            =>$request->input('estado')
                    );

        $messages = ['required' => 'El campo :attribute es requerido.',
                     'unique'   => 'El campo :attribute debe ser unico',
                     'numeric'  => 'El campo :attribute debe ser numerico'];

        $validator = validator($datos,
               ["descripcion"     => 'required',
                "titulo"          => 'required',
                "sueldo_inicial"  => 'required',
                "usuario_creador" => 'required',
                "estado"          => 'required'],
        $messages);
        
        if ($validator->fails()) {
           $errors =  $validator->errors();
           return $this->errorResponse($errors);
        }
        else {
            $maxid=0;
            $idsecuencia=0;
            $maxid = Nopuesto::get('id_puesto')->max();

            if ($maxid == null){
                $idsecuencia=1;
            }
            else{
                $idsecuencia = $maxid->id_puesto;
                $idsecuencia=$idsecuencia + 1;
            }

            $datos = $datos + array('id_puesto' =>$idsecuencia);           

            try {                
                DB::beginTransaction();              
                    Nopuesto::create($datos);
                DB::commit();
                return $this->successResponse($datos, $request->urlRequest);
            }
            catch (\Exception $e ){
                return $this->errorResponse($e->getMessage(), $request->urlRequest);
            }
        }

    }

    public function show(Request $request,Nopuesto $nopuesto)
    {
        $puesto = Nopuesto::find($nopuesto);
        if ($puesto == null){
            return $this->errorResponse('No Existe Puesto');
            }
         else{
              return $this->successResponse($nopuesto, $request->urlRequest);
          }
    }

    public function update(Request $request,  $nopuesto)
    {
        $puesto = Nopuesto::find($nopuesto);
        if($puesto == null){
           return $this->errorResponse('Registro no existe');

        }
        else {
              $dato = array(
                         "titulo"              =>$request->input("titulo"),
                         "descripcion"         =>$request->input("descripcion"),
                         "usuario_modificador" =>$request->input("usuario_modificador")
                        );

             $messages = [
             'required' => 'El campo :attribute es requerido.',
             'unique'   => 'El campo :attribute debe ser unico',
             'numeric'  => 'El campo :attribute debe ser numerico',
             ];

             $validator = validator($dato, [
                'descripcion' => 'required|string|min:10|max:500',
                'titulo'      => 'required',
                'usuario_modificador' => 'required|string'
            ],$messages);

            if ($validator->fails()) {
                $errors = $validator->errors();
                return $this->errorResponse($errors);
            }else{
             //nopuestos::where('id_puesto','=',$nopuesto)->update([$puesto]);
             $puesto->update($request->all());
             return $this->successResponse($puesto, $request->urlRequest);
            }
        }
    }

    public function destroy(Request $request, $id)
    {
        $puesto = Nopuesto::find($id);
        if ($puesto == null){

            return $this->errorResponse("Registro no Existe");
        }
         $puesto->update(['estado' => 'ELIMINADO']);
         return $this->successResponse(null, $request->urlRequest);
    }

    
    public function busqueda(Request $request)
    {
        $parametro = $request->get('puesto');
        $puesto = Nopuesto::orderBy('created_at', 'desc')->
                               where([['titulo','=',$parametro],['estado','=','activo']])->
                               get();

        return $this->successResponse($puesto, $request->urlRequest);
    }
}
