jQuery(document).ready(function($) {
    $('#slider').bjqs({
 
         
// PARAMETROS OPCIONALES QUE NOS OFRECE EL PLUGIN
width : 1366,
height : 667,
 
// animacion
animtype : "fade", // ‘fade’ o ‘slide’
animduration : 500, // rapidez de transicion
animspeed : 4000, // delay entre animaciones
automatic : true, // automatico

// controles
showcontrols : false, // Mostrar controles prev y next
centercontrols : true, // centrar controles prev y next
nexttext : "Siguiente", // Texto para boton next
prevtext : "Anterior", // Texto para boton prev
showmarkers : false, // Mostrar botones de navegacion
centermarkers : false, // Centrar botones de navegacion

// interaccion
keyboardnav : true, // habilita navegacion por teclado
hoverpause : true, // pausa slide cuando el mouse esta encima

// presentacion
usecaptions : true, // muestra texto introducido en el tag title
responsive : true // habilita modo responsive (beta)
});
});