<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Librerias\Invtiposmovimientos;
use App\Librerias\Invcuentasmovimientos;
use App\Librerias\InvUsuarioMovimiento;

class Invcodigosmovimientos extends ApiResponseController
{
    public function index()
    {
        $codigomov = Invtiposmovimientos::orderby('id_tipomov','ASC')->
                                          where('estado','=','ACTIVO')->get();

        $cuentas = Invcuentasmovimientos::join('cgcatalogo','cgcatalogo.cuenta_no','=','invcuentasmovimientos.cuenta_no')->
                                          orderby('invcuentasmovimientos.id_tipomov','ASC')->
                                          select('invcuentasmovimientos.id_tipomov','cgcatalogo.*')->
                                          where('invcuentasmovimientos.estado','=','ACTIVO')->
                                          where('cgcatalogo.estado','=','ACTIVO')->
                                          get();

        $usuarios = InvUsuarioMovimiento::join('users','users.email','=','invusuariosmovimientos.email')->
                                          orderby('invusuariosmovimientos.id_tipomov','ASC')->
                                          select('invusuariosmovimientos.*','users.name as name','users.surname as surname','users.username as username')->
                                          where('invusuariosmovimientos.estado','=','ACTIVO')->
                                          where('users.estado','=','ACTIVO')->
                                          get();

        $respuesta = array('codigosmov' => $codigomov, 'cuentas' => $cuentas,'usuarios' => $usuarios);
        return $this->successResponse($respuesta);
    }

    public function store(Request $request)
    {        
        $datos = array(
            "descripcion"            =>strtolower($request->input("descripcion")),
            "titulo"                 =>strtolower($request->input("titulo")),
            "usuario_creador"        =>strtolower($request->input("usuario_creador")),
            "estado"                 =>strtolower($request->input("estado")),
            "origen"                 =>strtolower($request->input("origen")),
            "cuenta_no"              =>$request->input("cuenta_no"),
            "control_clientes"       =>$request->input("control_clientes"),
            "control_despachos"      =>$request->input("control_despachos"),
            "control_transferencia"  =>$request->input("control_transferencia"),
            "control_devoluciones"   =>$request->input("control_devoluciones"),
            "control_departamento"   =>$request->input("control_departamento"),
            "control_orden_compra"   =>$request->input("control_orden_compra"),
            "num_doc"                => 0,
            "inv_tipomov_transferencia" =>$request->input("inv_tipomov_transferencia")            
        );
        
        if ($datos['control_clientes'] == null) {
            $datos['control_clientes'] = 'no';
        }
        if ($datos['control_despachos'] == null) {
            $datos['control_despachos'] = 'no';
        }
        if ($datos['control_transferencia'] == null) {
            $datos['control_transferencia'] = 'no';
        }
        if ($datos['control_devoluciones'] == null) {
            $datos['control_devoluciones'] = 'no';
        }
        if ($datos['control_departamento'] == null) {
            $datos['control_departamento'] = 'no';
        }
        if ($datos['control_orden_compra'] == null) {
            $datos['control_orden_compra'] = 'no';
        }
        
        $messages = [
             'required' => 'El campo :attribute es requerido.',
             'unique'   => 'El campo :attribute debe ser unico',
             'numeric'  => 'El campo :attribute debe ser numerico',
        ];

        $validator = validator($datos, [
            'descripcion'     => 'required|string',
            'titulo'          => 'required|string',
            'cuenta_no'       => 'required',
            'usuario_creador' => 'required|string',
            'estado'          => 'required|string'
        ],$messages);
        
        if ($validator->fails()) {
            $errors = $validator->errors();
            return $this->errorResponseParams($errors->all());
        }else{
            
            try {
                $maxid=0;
                $idsecuencia=0;
                $maxid = Invtiposmovimientos::get('id_tipomov')->max();
               
                if ($maxid == null){
                    $idsecuencia=1;
                } else{
                    $idsecuencia = $maxid->id_tipomov;
                    $idsecuencia=$idsecuencia + 1;
                }                               

                $datos = $datos + array('id_tipomov' =>$idsecuencia);

                DB::beginTransaction();                
                    Invtiposmovimientos::create($datos);
                    
                    $totalCuentas = count($datos['cuenta_no']);
                    for ($i=0; $i < $totalCuentas; $i++) {                        
                        $cuentas = array("id_tipomov" => $idsecuencia,
                                         "cuenta_no"  => $datos['cuenta_no'][$i],
                                         "estado"     => 'activo'
                        );

                        $messages = [
                            'required' => 'El campo :attribute es requerido.',
                            'unique'   => 'El campo :attribute debe ser unico',
                            'numeric'  => 'El campo :attribute debe ser numerico',
                        ];
        
                        $validator = validator($cuentas, [
                            'id_tipomov' => 'required',
                            'cuenta_no'  => 'required',
                            'estado'     => 'required'
                        ],$messages);

                        if ($validator->fails()) {
                            $errors = $validator->errors();   
                            return $this->errorResponseParams($errors->all());                            
                        }
                        
                        Invcuentasmovimientos::create($cuentas);
                    }
                DB::commit();
                return $this->successResponse(1);
            }
            catch (\Exception $e ){
                DB::rollBack();
                $datos = $e;
                return $this->errorResponse($datos);
            }

        }
    }

    public function show($id)
    {
        $codigomov = Invtiposmovimientos::orderby('id_tipomov','ASC')->
                                          where([['id_tipomov','=', $id],['estado','=','ACTIVO']])->
                                          get();

        $cuentas = Invcuentasmovimientos::join('cgcatalogo','cgcatalogo.cuenta_no','=','invcuentasmovimientos.cuenta_no')->
                                        orderby('invcuentasmovimientos.id_tipomov','ASC')->
                                        select('invcuentasmovimientos.id_tipomov','cgcatalogo.*')->
                                        where([['id_tipomov','=', $id],['invcuentasmovimientos.estado','=','ACTIVO']])->
                                        where('cgcatalogo.estado','=','ACTIVO')->
                                        get();

        $usuarios = InvUsuarioMovimiento::join('users','users.email','=','invusuariosmovimientos.email')->
                                        orderby('invusuariosmovimientos.id_tipomov','ASC')->
                                        select('invusuariosmovimientos.*','users.name as name','users.surname as surname','users.username as username')->
                                        where([['invusuariosmovimientos.id_tipomov','=', $id],['users.estado','=','ACTIVO'],['invusuariosmovimientos.estado','=','ACTIVO']])->
                                        get();

        $respuesta = array('codigosmov' => $codigomov, 'cuentas' => $cuentas,'usuarios' => $usuarios);
        return $this->successResponse($respuesta);
    }

    public function update(Request $request, $id)
    {
        $codmov = Invtiposmovimientos::where('id_tipomov','=',$id)->orWhere('estado','=','ACTIVO')->get();
        $cuentas = $request->input("cuenta_no");
        
        if($codmov == null){
            return $this->errorResponse(null, "Registro no Existe");
        } else {

        $datos = $request->all();

        $usuarios = array("id_tipomov" => $request->input("id_tipomov"),
                          "email"      => $request->input("email"));

        $messages = [
            'required' => 'El campo :attribute es requerido.',
            'unique'   => 'El campo :attribute debe ser unico',
            'numeric'  => 'El campo :attribute debe ser numerico',
        ];
        
        $validator = validator($datos, [
            'descripcion'          => 'required|string',
            'titulo'               => 'required|string',
            'cuenta_no'            => 'required',
            'usuario_creador'      => 'required|string',
            'usuario_modificador'  => 'required|string',
            'estado'               => 'required|string'
        ],$messages);
        
        if ($validator->fails()) {
            $errors = $validator->errors();
            return $this->errorResponseParams($errors->all());
        }
        else{                        
            try {
                DB::beginTransaction();
                    $producto = Invtiposmovimientos::where([['id_tipomov','=',$id],['estado','=','activo']])->first();
                    $producto->
                    update(["descripcion"           =>$request->input("descripcion")],
                            ["titulo"                =>$request->input("titulo")],
                            ["origen"                =>$request->input("origen")],
                            ["estado"                =>$request->input("estado")],
                            ["control_clientes"      =>$request->input("control_clientes")],
                            ["control_despachos"     =>$request->input("control_despachos")],
                            ["control_departamento"  =>$request->input("control_despachos")],
                            ["control_transferencia" =>$request->input("control_transferencia")],
                            ["control_devoluciones"  =>$request->input("control_devoluciones")],
                            ["control_orden_compra"  =>$request->input("control_orden_compra")],
                            ["usuario_modificador"   =>$request->input("usuario_modificador")],
                            ["usuario_creador"       =>$request->input("usuario_creador")]
                    );
                    
                    $totalCuentas = count($datos['cuenta_no']);
                    
                    for ($i=0; $i < $totalCuentas; $i++) {
                        $cuenta = array("id_tipomov" => $id,
                                         "cuenta_no" => $cuentas[$i]['cuenta_no'],
                                         "estado"    => 'activo',
                        );                        
                        $messages = [
                            'required' => 'El campo :attribute es requerido.',
                            'unique'   => 'El campo :attribute debe ser unico',
                            'numeric'  => 'El campo :attribute debe ser numerico',
                        ];
        
                        $validator = validator($cuenta, [
                            'id_tipomov' => 'required',
                            'cuenta_no'  => 'required',
                            'estado'     => 'required'
                        ],$messages);
        
                        if ($validator->fails()) {                                
                            $errors = $validator->errors();
                            return $this->errorResponseParams($errors->all());
                        }
                        DB::table('invcuentasmovimientos')->where([ ['id_tipomov','=',$id], ['cuenta_no','=',$cuentas[$i]['cuenta_no']] ])->delete();
                        Invcuentasmovimientos::create($cuenta);
                    }

                DB::commit();
                return $this->successResponse(1);
            } catch (\Exception $e ){
                DB::rollBack();
                $datos =$e;
                return $this->errorResponse($datos);
            }            
        }
        }
    }
   
    public function destroy($id){

        $codmov = Invtiposmovimientos::find($id);
        $cuentas = Invcuentasmovimientos::where('id_tipomov', '=', "$codmov->id_tipomov");
        $usuarios = InvUsuarioMovimiento::where('id_tipomov', '=', "$codmov->id_tipomov");

        if ($codmov == null){
            return $this->errorResponse(null, "Registro no Existe");
        }
        $codmov->update(['estado' => 'ELIMINADO']);
        $cuentas->update(['estado' => 'ELIMINADO']);
        $usuarios->update(['estado' => 'ELIMINADO']);
        return $this->successResponse(null, "Registro Eliminado");
    }

    public function busquedaTipo(Request $request) {
        $titulo = $request->get('titulo');

        $tipo  = Invtiposmovimientos::orderBy('id', 'asc')->
                               titulo($titulo)->
                               get();
        return $this->successResponse($tipo);
    }

    public function concederPermisosMovimiento(Request $request){

        $datos = array('id_tipomov'       =>$request->input('id_tipomov'),
                       'email'            =>$request->input('email'),
                       'usuario_creador'  =>$request->input('usuario_creador'),
                       'usuario_permisos' =>$request->input('usuario_permisos'),
                       'estado'           =>$request->input('estado'),
        );
        
        $messages = [
            'required' => 'El campo :attribute es requerido.',
            'numeric'  => 'El campo :attribute debe ser numerico'
        ];

        $validator = validator($datos, [
            "id_tipomov"        => 'required',
            "usuario_creador"  => 'required',
            "usuario_permisos" => 'required'
        ],$messages);

        if ($validator->fails()) {
            $errors =  $validator->errors();
            return $this->errorResponse($errors);
        }
        else {            
            DB::beginTransaction();

                $usuario_permisos = json_decode($datos['usuario_permisos']);
                for ($i=0; $i < count($usuario_permisos); $i++) { 
                    
                    $coincidencia = InvUsuarioMovimiento::where([['id_tipomov','=',$datos['id_tipomov']],
                                                                 ['email','=',$usuario_permisos[$i]->email]
                                                                ])->
                                                          get();
                                                          
                    if (count($coincidencia) === 0) {
                        InvUsuarioMovimiento::insert(['email'           => $usuario_permisos[$i]->email, 
                                                      'id_tipomov'      => $datos['id_tipomov'],
                                                      'usuario_creador' => $datos['usuario_creador'],
                                                      'estado'          => $datos['estado'],
                                                    ]);
                    }
                }
            DB::commit();
            return $this->successResponse($datos, "Permisos Concedidos");
        }
    }

    public function permisosMovimiento($id)
    {
        $usuarios = InvUsuarioMovimiento::join('users','users.email','=','invusuariosmovimientos.email')->
                                        orderby('invusuariosmovimientos.id_tipomov','ASC')->
                                        select('invusuariosmovimientos.*','users.name as name','users.surname as surname','users.username as username')->
                                        where([['invusuariosmovimientos.estado','=','ACTIVO'],
                                               ['invusuariosmovimientos.id_tipomov','=',$id],
                                               ['users.estado','=','activo']])->
                                        get();
        return $this->successResponse($usuarios);
    }
    
}
