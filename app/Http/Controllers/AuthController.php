<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\SignUpRequest;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Librerias\User;

class AuthController extends Controller
{

    public function index(Request $request)
    {
        $user  = User::orderBy('name', 'asc')->
                       leftjoin('noempleados','noempleados.email','=','users.email')->
                       leftjoin('nopuestos','nopuestos.id_puesto','=','noempleados.id_puesto')->
                       select('users.*','noempleados.primernombre','noempleados.segundonombre',
                              'noempleados.primerapellido','noempleados.segundoapellido','nopuestos.titulo as puesto')->
                       where('users.estado','=','ACTIVO')->
                       get();

        return response()->json(array("data" => $user, "code" => 200, "msj" => "Respuesta Exitosa"), 200);
    }

    public function login(Request $request)
    {
        // try {                          
            $credentials = request(['email', 'password']);
            $email = request('email');
            $sessionId = md5(uniqid());

            if (auth()->attempt($credentials)) {
                return response()->json(['error' => 'Usuario o clave incorrecta'], 401);
            }           
            User::where('email','=',$email)->update(['session_id' => $sessionId]);  
            // return $this->respondWithToken($token, $email, $sessionId);
        // }
        // catch (JWTException $e ){
        //     return response()->json(array("data" => false, "code" => 501, "msj" => $e->getMessage()), 501);
        // }      
    }

    public function signup(SignUpRequest $request)
    {
        $datos = $request->all();
        
        $messages = [
            'required' => 'El campo :attribute es requerido.',
            'unique'   => 'El campo :attribute debe ser unico',
            'numeric'  => 'El campo :attribute debe ser numerico',
        ];

        $validator = validator($datos, [
            "name"      => 'required|string',
            "surname"   => 'required|string',
            "password"  => 'required|string',
            "email"     => 'required|string',
            "estado"    => 'required|string',
        ],$messages);

        if ($validator->fails()) {
            $errors = $validator->errors();
            return response()->json($errors->all());
        }else{
            if ($request->hasFile('foto')) {
                // Storage::delete('public/'.$producto->imagen);
                $imagen = $request->file('foto');
                $nombreImagen = uniqid().'.'.$imagen->getClientOriginalExtension();
                $datos['foto']=$request->file('foto')->storeAs('uploads', 'usuarios/'.$nombreImagen, 'public');
            }

            try {                
                $user = User::create($datos);
                $sessionId = md5(uniqid());
                $token = $user->createToken('Si22500192319.')->accessToken;
                return $this->respondWithToken($token, $sessionId);
            } catch (\Exception $e ){
                return response()->json(array("data" => null, "code" => 501, "msj" => $e->getMessage()), 501);
            }

        }
    }
    
    public function logout()
    {
        return response()->json(array("data" => true, "code" => 200, "msj" => "Usuario Deslogueado"), 200);

        // $token = JWTAuth::getToken();
        // try { 
        //     $token = JWTAuth::invalidate($token);
        //     return response()->json(array("data" => true, "code" => 200, "msj" => "Usuario Deslogueado"), 200);
        // } catch (JWTException $e ){
        //     return response()->json(array("data" => false, "code" => 422, "msj" => $e->getMessage()), 501);
        // } 
    }

    public function desactivar(Request $request) {
        try {                
            DB::beginTransaction();                             
                $email = request('email'); 
                User::where('email','=',$email)->update(['estado' => 'inactivo']);                
            DB::commit();            
            return response()->json(array("data" => true, "code" => 200, "msj" => "Usuario Desactivado"), 200);
        } catch (\Exception $e ){
            return $this->errorResponse($e->getMessage(), $request->urlRequest);
        }  
    }

    public function me()
    {
        return response()->json(auth()->user());

    }

    // public function refresh()
    // {
    //     $token = JWTAuth::getToken();
    //     try{
    //         $token = JWTAuth::refresh($token);
    //         $email = request('email');
    //         $sessionId = request('sessionId');
    //         return $this->respondWithToken($token,$email,$sessionId);
    //     }catch (JWTException $e ){
    //         return response()->json(array("data" => $e, "code" => 501, "msj" => "Error"), 501);
    //     }

    // }

    protected function respondWithToken($token, $sessionId = null)
    {
        // if ($email !== null) {
        //     $bodegas_permiso = bodegasUsuarios::join('bodegas','bodegas_usuarios.id_bodega','=','bodegas.id_bodega')->
        //                               select('bodegas_usuarios.*','bodegas.descripcion')->
        //                               where('bodegas_usuarios.email','=',$email)->
        //                               get();

        //     $empleados = noempleados::where('noempleados.email','=',$email)->first();
        //     $permisos = Rol::where('rols.email','=',$email)->first();
        //     $empresa = Empresa::orderBy('created_at', 'desc')->where('estado','=','activo')->first();
        // }

        $data = [
            'access_token' => $token,
            'sessionId' => $sessionId,
            // 'expires_in' => auth::factory()->getTTL() * 8,
            // 'bodegas_permisos' => $bodegas_permiso,
            // 'empleado' => $empleados,
            // 'empresa' => $empresa,
            // 'permisos' => $permisos,
            'user' => auth()->user()
        ];

        return response()->json(array("data" => $data, "code" => 200, "msj" => "Respuesta Exitosa"), 200);
    }

    public function busqueda(Request $request)
    {
        $parametro = $request->get('parametro');
        $codigo = $request->get('codigo');
        $email = $request->get('email');
        $user  = User::orderBy('id', 'asc')->parametro($parametro)->codigo($codigo)->email($email)->get();

        return response()->json(array("data" => $user, "code" => 200, "msj" => "Respuesta Exitosa"), 200);
    }

    public function cambia()
    {
        $credentials = request(['email', 'password']);
        $email = $credentials->get('email');

        $user=    user::where('email','=',$email)->update()->all();
        if($user == null){
            return response()->json(['error' => 'Email o clave incorrecta'], 401);
        }
        else{
            return response()->json(['email' => 'Actualizacion Exitosa'], 200);
        }
    }

    public function actualizar(Request $request, $id)
    {
        $usuario = User::find($id);

        $datos = array(
            "username"              =>$request->input("username"),
            "name"                  =>$request->input("name"),
            "surname"               =>$request->input("surname"),
            "email"                 =>$request->input("email"),
            "estado"                =>$request->input("estado"),
            'id'             =>$request->input('id'),
            "foto"                  =>$request->input("foto"),
            'impresora'             =>$request->input('impresora')
       );
       
       $messages = [
            'required' => 'El campo :attribute es requerido.',
            'unique'   => 'El campo :attribute debe ser unico',
            'numeric'  => 'El campo :attribute debe ser numerico',
       ];

       $validator = validator($datos, [
           "username"              => 'required|string',
            "name"                 => 'required|string',
            "surname"              => 'required|string',
            "id"            => 'required|string',
            "email"                => 'required|string',
            "estado"               => 'required|string',
       ],$messages);

       if ($validator->fails()) {
            $errors = $validator->errors();
            return response()->json($errors->all());
       }else{
            if ($request->hasFile('foto')) {
                // Storage::delete('public/'.$producto->imagen);
                $imagen = $request->file('foto');
                $nombreImagen = uniqid().'.'.$imagen->getClientOriginalExtension();
                $datos['foto'] = $request->file('foto')->storeAs('uploads', 'usuarios/'.$nombreImagen, 'public');
            }

            if ($request->input("password") !== null) {
                $datos['password'] = $request->input("password");
            }
            $usuario->update($datos);
            return response()->json(array("data" => $usuario, "code" => 200, "msj" => "Respuesta Exitosa"), 200);
       }
    }

    public function destroy(Request $request, $id)
    {
        $usuario = User::find($id);
        // if ($usuario == null){
        //     return response()->json(array("data" => $usuario, "code" => 501, "msj" => "Respuesta Exitosa"), 501);
        // }
        $usuario->update(['estado' => 'desactivado']);
        return response()->json(array("data" => $usuario, "code" => 200, "msj" => "Respuesta Exitosa"), 200);
    }

    public function show(Request $request,$id) {
        $user = User::find($id);
        
        if ($user == null){
            return response()->json(array("data" => $user, "code" => 501, "msj" => "Respuesta Exitosa"), 501);
        }
        return response()->json(array("data" => $user, "code" => 200, "msj" => "Respuesta Exitosa"), 200);
    }

    public function busquedaUsuario(Request $request)
    {
        $username = $request->get('username');
        $user  = User::orderBy('id', 'asc')->username($username)->get();
        return response()->json(array("data" => $user, "code" => 200, "msj" => "Respuesta Exitosa"), 200);
    }

    public function busquedaEmail(Request $request)
    {
        $email = $request->get('email');
        $user  = User::orderBy('id', 'asc')->emailequal($email)->get();
        return response()->json(array("data" => $user, "code" => 200, "msj" => "Respuesta Exitosa"), 200);
    }

    public function busquedaNumEmp(Request $request)
    {
        $numemp = $request->get('empleado');
        $user  = User::orderBy('id', 'asc')->
                       where([['estado','=','activo'],['id','=',$numemp]])->
                       get();
        return response()->json(array("data" => $user, "code" => 200, "msj" => "Respuesta Exitosa"), 200);
    }

}
