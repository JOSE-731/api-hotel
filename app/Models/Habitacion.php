<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Habitacion extends Model
{
    use HasFactory;

    //Nombre de la tabla
    protected $table = "hotels";

    //Nombre de los campos
    protected $fillable = ['nombre', 'ciudad', 'direccion', 'nit', 'numero_habitantes'];
    public $timestamps = false;
}
