<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class categoria extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'nombre',
        'descripción',
    ];
    const UPDATED_AT = null;
    const CREATED_AT = null;
}
