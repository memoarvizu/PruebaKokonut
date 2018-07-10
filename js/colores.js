//Funcion para para cambiar color de fondo segun # en la URL
function cambiarColor(param){
/* Se obtiene la URL */
url = document.URL;
/* Busca elementos depués del signo "#" con una expresión regular */
url = String(url.match(/\#+.+/));
/* limpiar la cadena quitándole el signo "#" */
url = url.replace("#", "");
/* Crear un array con parametro=valor */
url = url.split("&");

for (var i = 0; i < url.length; i++) {
  p = url[i].split("=");
  if (p[0] == param)
  {
  return decodeURIComponent(p[1]);
  }
}

/* Evalúa qué color se encuentra en la URL*/
if (p[0] == "red") {
  var boton = document.querySelector('body.vacio');
  boton.className = 'backgroundRed';
}

if (p[0] == "blue") {
  var boton = document.querySelector('body.vacio');
  boton.className = 'backgroundBlue';
}

if (p[0] == "green") {
  var boton = document.querySelector('body.vacio');
  boton.className = 'backgroundGreen';
}

//alert(url);
}
