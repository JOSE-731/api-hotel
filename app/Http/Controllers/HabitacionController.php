<?php

namespace App\Http\Controllers;

use App\Models\Habitacion;
use Illuminate\Http\Request;

class HabitacionController extends Controller
{
    //

    public function index()
    {
        //Mostramos todos los datos
        $habitaciones = Habitacion::all();

        return $habitaciones;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //Obtenemos los datos que se envian 
        $habitacion = new Habitacion();
        $habitacion->cantidad = $request->cantidad;
        $habitacion->tipo_habitacion = $request->tipo_habitacion;
        $habitacion->acomodacion = $request->acomodacion;
        $habitacion->id_hotel = $request->id_hotel;

        //Guardamos los datos
        $habitacion->save();

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        //Obtenemos el id del dato que se va actualizar
        $habitacion_edit = Habitacion::findOrFail($request->id);

        $habitacion_edit = new Habitacion();
        $habitacion_edit->cantidad = $request->cantidad;
        $habitacion_edit->tipo_habitacion = $request->tipo_habitacion;
        $habitacion_edit->acomodacion = $request->acomodacion;
        $habitacion_edit->id_hotel = $request->id_hotel;

        return $habitacion_edit;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Habitacion::find($id);
        $data->delete();

       return $data;
    }
}

