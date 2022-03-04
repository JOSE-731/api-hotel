<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Habitacion extends Model
{
    use HasFactory;

    //Nombre de la tabla
    protected $table = "habitacions";

    //Nombre de los campos
    protected $fillable = ['cantidad', 'tipo_habitacion', 'acomodacion', 'id_hotel'];
    public $timestamps = false;
}
