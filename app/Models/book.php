<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class book extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'editorial',
        'descripcion',
        'resumen',
        'id_autor',
    ];
    public function bookAutor(){
        return $this->belongsTo(Autor::class, 'id_autor');
    }
    public function bookBorrow($id_user){
        return $this->hasMany(Prestamo::class, 'id_libro')->where('id_usuario', $id_user);
    }
}
