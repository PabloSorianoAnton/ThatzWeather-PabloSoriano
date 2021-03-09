<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WeatherController; //similar al include

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/',[WeatherController::class,'login']);
Route::get('/mostrar',[WeatherController::class,'mostrar']);
Route::delete('/borrar/{id}',[WeatherController::class,'borrar']);
Route::get('/crear',[WeatherController::class,'crear']);
Route::post('/recibir',[WeatherController::class,'recibir']);
Route::get('/actualizar/{id}',[WeatherController::class,'actualizar']);
Route::put('/modificar/{id}',[WeatherController::class,'modificar']);
Route::post('/recibirlogin',[WeatherController::class,'recibirLogin']);
Route::get('/pagar/{id}/{precio}',[WeatherController::class,'pagar']);
Route::get('/comprado/{id}',[WeatherController::class,'comprado']);
