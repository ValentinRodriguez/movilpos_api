<?php

namespace App\Http\Middleware;
use Closure;
use App\Librerias\User;
use App\Http\Controllers\ApiResponseController;

class isLogged extends ApiResponseController
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $username = $request->input('usuario_creador');        
        $session_id = $request->input('sessionId');

        $usuario = User::where('username','=',$username)->first();
        // return response()->json($usuario);
        if ($usuario->session_id == $session_id) {
            return $next($request);    
        } 
        else {
            User::where('username','=',$username)->update(['session_id' => $session_id]);
            return response()->json(array("data" => false, "msj" => "double-login"));
        }  
    }
}
