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
        $icon = $json->weather[0]->icon;
        DB::table('tbl_tiempo')->insertGetId(['ciudad'=>$ciudad, 'cpostal'=>$_GET['cpostal'],'temperatura'=>$temp, 'descripcion'=>$descripcion, 'icono'=>$icon]);
        $tiempo = DB::table('tbl_tiempo')->orderByDesc('id')->limit(1)->get();
        $ranking = DB::table('tbl_tiempo')->orderBy('temperatura')->limit(5)->get();
        }
        return view('vista', compact('tiempo', 'ranking'));
    }
}
