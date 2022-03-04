<?php

namespace App\Http\Controllers;

use App\Models\Hotel;
use Illuminate\Http\Request;

class HotelController extends Controller
{
    
    public function index()
    {
        //Mostramos todos los datos
        $hoteles = Hotel::all();

        return $hoteles;
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
        $hotel = new Hotel();
        $hotel->nombre = $request->nombre;
        $hotel->ciudad = $request->ciudad;
        $hotel->direccion = $request->direccion;
        $hotel->nit = $request->nit;
        $hotel->numero_habitaciones = $request->numero_habitaciones;
        //Guardamos los datos
        $hotel->save();

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
        $hotel_edit = Hotel::findOrFail($request->id);

        $hotel_edit = new Hotel();
        $hotel_edit->nombre = $request->nombre;
        $hotel_edit->ciudad = $request->ciudad;
        $hotel_edit->direccion = $request->direccion;
        $hotel_edit->nit = $request->nit;
        $hotel_edit->numero_habitaciones = $request->numero_habitaciones;

        $hotel_edit->save();

        return $hotel_edit;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
       $hotel_delete = Hotel::deleted($request->id);

       return $hotel_delete;
    }
}
