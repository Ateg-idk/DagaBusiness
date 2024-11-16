<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Mantenimiento extends Model
{
    use HasFactory;

    // Definir la tabla si el nombre es diferente al plural del modelo
    protected $table = 'mantenimiento';

    // Definir los campos que pueden ser asignados en masa
    protected $fillable = ['nombre', 'descripcion', 'imagen', 'filtro'];
}

