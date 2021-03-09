function comprobar() {
    var ciudad = document.getElementById("ciudad").value;
    // Obtener la instancia del objeto XMLHttpRequest
    var peticion_http = new XMLHttpRequest();
    //if (peticion_http) {
    // Preparar la funcion de respuesta
    peticion_http.onreadystatechange = procesaRespuesta;
    // Preparar cadena
    var cadena = "q=" + ciudad + "&units=metric&appid=a3ac93f6417ce945ab879451ada7dc9d&lang=es";
    // Realizar peticion HTTP
    peticion_http.open('GET', 'http://api.openweathermap.org/data/2.5/weather?' + cadena, true);
    peticion_http.send(null);
}

function procesaRespuesta() {
    if (peticion_http.readyState == 4) {
        if (peticion_http.status == 200) {
            var respuesta = JSON.parse(peticion_http.responseText);
            var tiempo = document.getElementById("tiempo");
            tiempo.innerHTML = "El tiempo en " + respuesta.name + ", " + respuesta.sys.country + " es de " + respuesta.main.temp + "  C, " + respuesta.weather[0].description + "<img src='http://openweathermap.org/img/w/" + respuesta.weather[0].icon + ".png' >";
        }
    }
}