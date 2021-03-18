window.onload = function() {
    showSlides(1);
}

var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
    showSlides(slideIndex += n);
}

function currentSlide(n) {
    showSlides(slideIndex = n);
}

function showSlides(n) {
    var i;
    var slides = document.getElementsByClassName("mySlides");
    var dots = document.getElementsByClassName("dot");
    if (n > slides.length) {
        slideIndex = 1
    }
    if (n < 1) {
        slideIndex = slides.length
    }
    for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";
    }
    for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" active", "");
    }
    slides[slideIndex - 1].style.display = "block";
    dots[slideIndex - 1].className += " active";
    h = n - 1;
    comprobar(n, h);
}


/* ---------------------------------- */

function comprobar(n, h) {
    var id = [620, 78, 195, 176, 540];
    // Obtener la instancia del objeto XMLHttpRequest
    var peticion_http = new XMLHttpRequest();
    //if (peticion_http) {
    // Preparar la funcion de respuesta
    peticion_http.onreadystatechange = procesaRespuesta;
    // Preparar cadena
    var cadena = id[h] + ".json";
    console.log(cadena)
        // Realizar peticion HTTP
    peticion_http.open('GET', 'https://cdn.jsdelivr.net/gh/akabab/superhero-api@0.3.0/api/id/' + cadena, true);
    peticion_http.send(null);
    //}
    function procesaRespuesta() {
        if (peticion_http.readyState == 4) {
            if (peticion_http.status == 200) {
                var respuesta = JSON.parse(peticion_http.responseText);
                var div = document.getElementById(n);
                div.innerHTML = "<h1>El superheroe es " + respuesta.name + "</h1>";
                div.innerHTML += "<p>Inteligencia: " + respuesta.powerstats.intelligence + "</p>";
                div.innerHTML += "<p>Fuerza: " + respuesta.powerstats.strength + "</p>";
                div.innerHTML += "<p>Velocidad: " + respuesta.powerstats.speed + "</p>";
                div.innerHTML += "<p>Vida: " + respuesta.powerstats.durability + "</p>";
                div.innerHTML += "<p>Poder: " + respuesta.powerstats.power + "</p>";
                div.innerHTML += "<p>Combate: " + respuesta.powerstats.combat + "</p>";
                div.innerHTML += "<img src='" + respuesta.images.sm + "'>";

            }
        }
    }


}