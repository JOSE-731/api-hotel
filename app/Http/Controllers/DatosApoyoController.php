<?php

namespace App\Http\Controllers;

use App\Models\DatosApoyo;
use Illuminate\Http\Request;

class DatosApoyoController extends Controller
{
    public function index()
    {
        //Mostramos todos los datos
        $data = DatosApoyo::all();

        return $data;
    }
}
