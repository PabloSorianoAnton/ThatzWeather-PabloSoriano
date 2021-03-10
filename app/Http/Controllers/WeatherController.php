<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class WeatherController extends Controller{
    public function login(){
        return view('login');
    }

    public function buscar(){
        if($_GET["cpostal"]==null) {
            return redirect('login');
            die();
        }
        // return view('vista');
        $datos = file_get_contents ("http://api.openweathermap.org/data/2.5/weather?zip=".$_GET['cpostal'].",es&units=metric&appid=6682dabc389796ef2723e3330b13900a&lang=es");
        $json = json_decode($datos);
        $ciudad = $json->name;
        // $lat = $json->coord->lat;
        // $lon = $json->coord->lon;
        $temp = $json->main->temp;
        $tempmax = $json->main->temp_max;
        $tempmin = $json->main->temp_min;
        $presion = $json->main->pressure;
        $humedad = $json->main->humidity;
        // $vel_viento = $json->main->temp;
        $estado_cielo = $json->weather[0]->main;
        $descripcion = $json->weather[0]->description;

        echo "La temperatura en ".$ciudad."es de ".$temp;
        echo "Estado del cielo: ".$estado_cielo;
        echo "Descripción: ". $descripcion;
        echo "Temperatura: ".$temp." K [Máx: ".$tempmax."K, Mín: ".$tempmin."K]";
        echo "Presión: ".$presion;
        echo "Humedad: ".$humedad;
    }
}
