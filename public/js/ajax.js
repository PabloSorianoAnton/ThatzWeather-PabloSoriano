window.onload = function() {
    modal = document.getElementById("myModal");
    read();
}

function objetoAjax() {
    var xmlhttp = false;
    try {
        xmlhttp = new ActiveXObject("Msxml2.XMLHTTP");
    } catch (e) {
        try {
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        } catch (E) {
            xmlhttp = false;
        }
    }
    if (!xmlhttp && typeof XMLHttpRequest != 'undefined') {
        xmlhttp = new XMLHttpRequest();
    }
    return xmlhttp;
}

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

function openmodal(id, nombre, descripcion, precio) {
    modal.style.display = "block";
    document.getElementById('id1').value = id;
    document.getElementById('nombre1').value = nombre;
    document.getElementById('descripcion1').value = descripcion;
    document.getElementById('precio1').value = precio;
}

function closeModal() {
    modal.style.display = "none";
}

window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}