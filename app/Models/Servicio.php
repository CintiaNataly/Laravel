<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Servicio extends Model
{
    use HasFactory;

    protected $table = "servicios";
    
    protected $primaryKey = "servicios_id";

    protected $fillable = ['nombre', 'tarifa_acceso', 'tarifa_socios', 'descripcion', 'condiciones', 'portada', 'descripcion_portada'];
}
