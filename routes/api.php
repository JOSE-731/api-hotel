<?php

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
//local http://127.0.0.1:8000/api/hoteles

//Rutas de hotel, con sus metodos http
Route::get('/hoteles', [HotelController::class,'index']);
Route::post('/hotele', [HotelController::class,'store']);
Route::put('/hoteles/{id}', [HotelController::class,'update']);
Route::delete('/hoteles/{id}', [HotelController::class,'destroy']);