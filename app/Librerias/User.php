<?php

namespace App\Librerias;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Tymon\JWTAuth\Contracts\JWTSubject;

class User extends Authenticatable implements JWTSubject
{
    use Notifiable;

    protected $fillable = ['username','name','surname','email','impresora',
                           'password','foto','estado','id_numemp'];

    protected $hidden = [
        'password', 'remember_token',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function getJWTIdentifier()
    {
        return $this->getKey();
    }

    public function getJWTCustomClaims()
    {
        return [];
    }

    public function setPasswordAttribute($value)
    {
        $this->attributes['password'] = bcrypt($value);
    }


    
    public function ScopeParametro($query, $parametro)
    {
        if ($parametro) {
            return $query->where('username', 'LIKE', "%$parametro%")->
                           orWhere('name', 'LIKE', "%$parametro%");                        
        }
    }

    public function ScopeUsername($query, $parametro)
    {
        if ($parametro) {
            return $query->where('username', '=', "$parametro");                        
        }
    }

    public function ScopeEmailequal($query, $parametro)
    {
        if ($parametro) {
            return $query->where('email', '=', "$parametro");                        
        }
    }

    public function ScopeName($query, $parametro)
    {
        if ($parametro) {
            return $query->orWhere('name', 'LIKE', "%$parametro%");                        
        }
    }

    public function ScopeUsuario($query, $parametro)
    {
        if ($parametro) {
            return $query->where('users.username', 'LIKE', "%$parametro%");
        }
    }

    public function ScopeCodigo($query, $parametro)
    {
        if ($parametro) {
            return $query->where('users.id', 'LIKE', "%$parametro%");
        }
    }

    public function ScopeEmail($query, $parametro)
    {
        if ($parametro) {
            return $query->where('users.email', 'LIKE', "%$parametro%");
        }
    }

    public function ScopePuesto($query, $parametro)
    {
        if ($parametro) {
            return $query->where('users.id_puesto', 'LIKE', "%$parametro%");
        }
    }
}
