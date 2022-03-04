<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DatosApoyo extends Model
{
    use HasFactory;
    protected $table = "datos_apoyos";

    //Nombre de los campos
    protected $fillable = ['tipo_habitacion', 'acomodacion'];
}
