<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id',
        'rol_id',
        'asesor_tese_id',
        'nombre_usuario',
        'apaterno_usuario',
        'amaterno_usuario',
        'matricula_usuario',
        'email',
        'password',
        'domicilio_usuario',
        'creditos_usuario',
        'telefono_usuario',
        'nombre_empresa',
        'rfc_empresa',
        'telefono_empresa',
        'web_empresa',
        'giro_empresa',
        'direccion_empresa',
        'nombre_dirige_documentacion',
        'cargo_dirige_documentacion',
        'horario_residencia',
        'nombre_proyecto',
        'beneficio_empresa',
        'asesor_empresa',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function rol()
    {
        return $this->belongsTo(Rol::class, 'rol_id', 'id')->withDefault();
    }

    public function asesor()
    {
        return $this->belongsTo(User::class, 'asesor_tese_id', 'id')->withDefault();
    }
}
