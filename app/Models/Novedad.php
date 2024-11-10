<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Novedad extends Model
{
    // use HasFactory;

    protected $table = "novedades";
    
    protected $primaryKey = "novedades_id";

    protected $fillable = ['titulo', 'fecha_publicacion', 'categoria', 'info_abreviada', 'descripcion', 'portada', 'descripcion_portada'];
}
