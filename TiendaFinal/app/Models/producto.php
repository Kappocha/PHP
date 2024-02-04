<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class producto extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'nombre',
        'descripción',
        'unidades',
        'preciou',
        'categoriaID',
    ];
    const UPDATED_AT = null;
    const CREATED_AT = null;
}
