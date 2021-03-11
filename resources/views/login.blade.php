<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="{{asset('css/login.css')}}">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous"></script>
  <title>Login</title>
</head>

<body>
  <div class="logo">
    <img src="./../public/img/Bitmap.png">
  </div>

  <div class="form">
    <p class="text-white">Entérate del tiempo en la zona exacta que te interesa bucando por código postal.</p>
    <form action="{{url('buscar/')}}" method="GET" enctype="multipart/form-data">
      <div class="form-group">
        <input type="text" id="cpostal" name="cpostal" class="form-control" style="border: 1px solid white; width: 120%; margin-left: -10%; background-color: transparent; color: white;" placeholder="Introduce el código postal"><br>
      </div>
      <div class="col-12">
        <button type="submit" class="boton">
          <span style="margin-right: 38%; margin-left: 38%;">Buscar</span>
          <img src="./../public/img/Shape.png">
        </button>
      </div>
    </form>
    <p>¡Que la lluvia no te pare!</p>
  </div>

</body>
</html>
