<?php

use App\Http\Controllers\DatosApoyoController;
use App\Http\Controllers\HabitacionController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HotelController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

//Rutas de hotel, con sus metodos http
Route::get('/hoteles/', [HotelController::class,'index']);
//local http://127.0.0.1:8000/api/hoteles/

Route::post('/hoteles/', [HotelController::class,'store']);
  /* Insertamos
    {
        "nombre": "test",
        "ciudad": "test",
        "direccion": "test",
        "nit": 200,
        "numero_habitaciones": 200
    }
 */

//local http://127.0.0.1:8000/api/hoteles/2
Route::get('/hoteles/detalles/{id}', [HotelController::class,'show']);


Route::delete('/hoteles/{id}', [HotelController::class,'destroy']);

//local http://127.0.0.1:8000/api/habitaciones

//Rutas de habitaciones, con sus metodos http
Route::get('/habitaciones/', [HabitacionController::class,'index']);
Route::post('/habitacion', [HabitacionController::class,'store']);
Route::put('/habitacion/{id}', [HabitacionController::class,'update']);
Route::delete('/habitaciones/{id}', [HabitacionController::class,'destroy']);

//Api data apoyo
Route::get('/data', [DatosApoyoController::class,'index']);