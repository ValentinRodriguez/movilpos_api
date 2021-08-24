<?php

namespace App\Librerias;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Passport\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, Notifiable;
  
    protected $connection = 'mov_usuarios';
    
    protected $fillable = ['username','name','surname','email','impresora','password','foto','estado','id'];

    protected $hidden = ['password', 'remember_token'];

    protected $casts = ['email_verified_at' => 'datetime'];

    // protected $dispatchesEvents = [
    //     'updated' => userUpdated::class,
    //     'deleted' => userDeleted::class,
    // ];

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
