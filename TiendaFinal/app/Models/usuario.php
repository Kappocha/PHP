<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class usuario extends Model
{
    use HasFactory;

    protected $fillable = [
        'Nick',
        'Email',
        'Nombre',
        'Apellidos',
        'ID',
        'Fecha_nacimiento',
        'Contrasena',
        'Rol',
    ];
    const UPDATED_AT = null;
    const CREATED_AT = null;
}
