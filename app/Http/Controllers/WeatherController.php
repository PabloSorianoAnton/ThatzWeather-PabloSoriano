<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use PayPal\Api\Order;

class WeatherController extends Controller{
    public function login(){
        return view('login');
    }

    public function vista(){
        return view('vista');
    }

    public function buscar(){
        if($_GET["cpostal"]==null) {
            return redirect('login');
            die();
        } else { 
        $datos = file_get_contents ("http://api.openweathermap.org/data/2.5/weather?zip=".$_GET['cpostal'].",es&units=metric&appid=6682dabc389796ef2723e3330b13900a&lang=es");
        $json = json_decode($datos);
        $ciudad = $json->name;
        $descripcion = $json->weather[0]->description;
        $cpostal = $_GET['cpostal'];
        $temp = $json->main->temp;
        $descripcion = $json->weather[0]->description;
        // DB::table('tbl_tiempo')->insertGetId(['ciudad'=>$ciudad, 'cpostal'=>$_GET['cpostal'],'temperatura'=>$temp, 'descripcion'=>$descripcion]);
        // $tiempo = "SELECT * FROM `tbl_tiempo` order by id DESC LIMIT 1";
        $tiempo = DB::table('tbl_tiempo')->orderByDesc('id')->limit(1)->get();
        // echo "La temperatura en ".$ciudad."es de ".$temp."<br>";
        // echo "Estado del cielo: ".$estado_cielo;
        // echo "Descripción: ". $descripcion;
        // echo "Temperatura: ".$temp." K [Máx: ".$tempmax."K, Mín: ".$tempmin."K]";
        // echo "Presión: ".$presion;
        // echo "Humedad: ".$humedad;
        }
        return view('vista', compact('tiempo'));
    }
}
