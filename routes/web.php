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
Route::get('login',[WeatherController::class,'login']);
Route::get('/buscar',[WeatherController::class,'buscar']);
Route::delete('/borrar/{id}',[WeatherController::class,'borrar']);
Route::get('/pagar/{id}/{precio}',[WeatherController::class,'pagar']);

