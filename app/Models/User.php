<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Hash; // Importa la clase Hash

class User extends Authenticatable
{
    use Notifiable;

    // Atributos que se pueden asignar masivamente
    protected $fillable = [
        'nombre_usuario',
        'correo',
        'contraseña',
        'fecha_registro',
        'seguidores',
        'num_posts',
    ];

    // Atributos que deben estar ocultos cuando se serializa el modelo
    protected $hidden = [
        'contraseña',
        'remember_token',
    ];

    // Deshabilitar las marcas de tiempo automáticas
    public $timestamps = false;

    // Mutador para encriptar la contraseña antes de guardarla en la base de datos
    public function setPasswordAttribute($password)
    {
        $this->attributes['contraseña'] = Hash::make($password);
    }
}
