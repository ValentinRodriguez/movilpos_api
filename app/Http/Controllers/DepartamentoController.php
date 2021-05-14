<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Librerias\Departamento;
use App\Librerias\noempleados;

class DepartamentoController extends ApiResponseController
{
    public function index()
    {
        $departamento = Departamento::orderBy('id', 'asc')->where('estado','=','activo')->get();
        return $this->successResponse($departamento);
    }

    public function store(Request $request)
    {
        $datos = array(
            "titulo"           =>$request->input("titulo"),
            "descripcion"      =>$request->input("descripcion"),
            "tipodepartamento" =>$request->input("tipodepartamento"),
            "usuario_creador"  =>$request->input("usuario_creador"), 
            "estado"           =>$request->input("estado")
        );
        
        $messages = [
             'required' => 'El campo :attribute es requerido.',
             'unique'   => 'El campo :attribute debe ser unico',
             'numeric'  => 'El campo :attribute debe ser numerico',
        ];

        $validator = validator($datos, [
            'titulo'           => 'required|string',
            'descripcion'      => 'required|string',
            'tipodepartamento' => 'required|string',
            'usuario_creador'  => 'required|string',
            'estado'           => 'required|string'
        ],$messages);

        if ($validator->fails()) {
            $errors = $validator->errors();
            return $this->errorResponseParams($errors->all());
        }else{    
                    
            try {                
                DB::beginTransaction();
                    Departamento::create($datos);               
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
        $departamento = Departamento::where([['id','=',$id],['estado','=','ACTIVO']])->first();

        if($departamento == null){
            return $this->errorResponse('No existe un departamento con esta condicion');
        }
        return $this->successResponse($departamento);
    }

    public function update(Request $request, $id)
    {
        $departamento = Departamento::find($id);

        $datos = array(
            "titulo"              =>$request->input("titulo"),
            "descripcion"         =>$request->input("descripcion"),
            "tipodepartamento"    =>$request->input("tipodepartamento"),
            "usuario_creador"     =>$request->input("usuario_creador"), 
            "usuario_modificador" =>$request->input("usuario_modificador"), 
            "estado"              =>$request->input("estado")
        );
        
        $messages = [
             'required' => 'El campo :attribute es requerido.',
             'unique'   => 'El campo :attribute debe ser unico',
             'numeric'  => 'El campo :attribute debe ser numerico',
        ];

        $validator = validator($datos, [
            'titulo'           => 'required|string',
            'descripcion'      => 'required|string',
            'tipodepartamento' => 'required|string',
            'usuario_creador'  => 'required|string',
            'estado'           => 'required|string'
        ],$messages);

        if ($validator->fails()) {
            $errors = $validator->errors();
            return $this->errorResponseParams($errors->all());
        }else{                    
            try {                
                DB::beginTransaction();
                    $departamento->update($request->all());              
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
        $departamento = Departamento::where('id','=',$id)->first();
                
        if ($departamento == null){
            return $this->errorResponse(null, "Este departamento no existe");
        }
        
        $noempleados = noempleados::where([['departamento','=',$departamento->id],
                                           ['estado','=','ACTIVO']])->
                                    first();
                                   
        if($noempleados <> null){
            return $this->errorResponse("No puede eliminar este departamento, tiene empleado/s asociado/s");
        }

        $departamento->update(['estado' => 'eliminado']);
        return $this->successResponse(null,"Departamento Eliminado");
    }

    public function busqueda(Request $request){
        $departamento = $request->get('departamento');
        $busqueda = Departamento::orderBy('id', 'asc')->where('nodepartamentos.titulo', '=', $departamento)->get();
        return $this->successResponse($busqueda);
    }
}
