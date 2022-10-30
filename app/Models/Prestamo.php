<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Prestamo extends Model
{
    use HasFactory;

    protected $fillable = [
        'id_libro',
        'id_usuario',
        'fecha_solicitud',
        'fecha_devolucion',
        'mora',
        'estado',
    ];

}
