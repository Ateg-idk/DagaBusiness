<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Servicio extends Model
{
    use HasFactory;
    
    protected $fillable = ['nombres', 'apellidos', 'email', 'telefono', 'servicio', 'descripcion'];
}
