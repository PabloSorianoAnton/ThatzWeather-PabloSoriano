<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="{{asset('css/vista.css')}}">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous"></script>
  <title>ThatzWeather</title>
</head>

<body>
<div class="logo">
    <img src="./../public/img/Bitmap.png">
    <p class="text-white" id="eslogan">¡Que la lluvia no te pare!</p>
  </div>
@foreach($tiempo as $dia)
<div class="card" id="resultado">
    <div class="card-body">
        <div class="card" id="info" style="padding-left: 20%; width: 55%;">
            <p class="text-white">Código postal: <strong>{{$dia->cpostal}}</strong><p>
            <p class="text-white" style="margin-top: -15%;">Ciudad: <strong>{{$dia->ciudad}}</strong><p>
        </div>
        <div class="card" id="info" style=" width: 45%;">
            <img src="./../public/img/Shape.png">
            <a href="{{url('login/')}}" class="text-white" style="width: 40%; margin-top: -7%; margin-left: 12%;font-size:80%;">Buscar otra zona</a>
        </div>
            <div class="card" id="salida" style=" width: 20%;">
                <div class="card" id="titulo">
                    <p class="text-white">Ahora</p>
                </div>
                <div class="card" id="thatz" style="float: left;">
                    <p class="text-white"><strong>Holaaaa</strong></p>
                </div>
                <div class="card" id="weather"  style="float: right;">
                    <p class="text-white"><strong>{{$dia->descripcion}}</strong></p>
                    <p class="text-white"><strong>{{$dia->temperatura}}</strong></p>
                </div>
            </div>
            <div class="card" id="salida" style=" width: 40%;">
            </div>
            <div class="card" id="salida" style=" width: 40%;">
            </div>
            <!-- <thead class="thead-dark">
                <tr>
                    <th>Código postal</th>
                    <th>Ciudad</th>
                    <th>Temperatura</th>
                    <th>Descrpcion</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>{{$dia->cpostal}}</td>
                    <td>{{$dia->ciudad}}</td>
                    <td>{{$dia->temperatura}}</td>
                    <td>{{$dia->descripcion}}</td>
                </tr>
            </tbody> -->
    </div>
</div> 
@endforeach
<div class="card" id="estadis">
    <div class="card-body" style="height: 100%;">
        <p class="text-white" id="desc">Top 5 de las zonas más frías según tus búsquedas</p>
        <div class="card" id="posicion">
            <div class="card" id="num">
                <p class="text-white">1.</p>
            </div>
            <div class="card" id="num">
                <p class="text-white">2.</p>
            </div>
            <div class="card" id="num">
                <p class="text-white">3.</p>
            </div>
            <div class="card" id="num">
                <p class="text-white">4.</p>
            </div>
            <div class="card" id="num">
                <p class="text-white">5.</p>
            </div>
        </div>
            @foreach($ranking as $posicion)
            <div class="card" id="grados">
                <p class="text-white" style="margin-top: -7%;">{{$posicion->temperatura}}º</p>
            </div>
            <div class="card" id="rank">
                <p class="text-white" >Código postal: <strong>{{$posicion->cpostal}}</strong></p>
                <p class="text-white" style="margin-top: -7%;">Ciudad: <strong>{{$posicion->ciudad}}</strong></p>
                <hr>
            </div>
            @endforeach 
    </div>
</div> 
</body>
<script src="{{asset('js/app.js')}}"></script>  
</html>