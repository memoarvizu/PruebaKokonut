<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Prueba Kokonut</title>
    <link rel="shortcut icon" href="img/logo.gif">
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="iconos.css">
  </head>
  <body class="vacio">

    <!-- Tuve inconvenientes para poder hacer la suma de arrays, sólo logré
        obtener y mostrar su valor-->

    <!--Boton CHECKOUT para probar el cambio color de fondo
    según #color seleccionado -->
    <div class="fondo">
      <a href="#" class="button" onclick="cambiarColor()">
        <span class="icon-star"></span><b> CHECKOUT </b><span class="icon-star"></span>
      </a>
    </div>

    <!-- Procesar el array a enviar -->
    <?php
    function array_envia($array){
      $tmp=serialize($array);
      $tmp=urlencode($tmp);
      return $tmp;
    }
      $array=array(1,2,3);
      $array=array_envia($array);
     ?>

    <!-- Botón que envía valores de parametros 'prueba' y 'array' de URL
        para procesarlos y mostrarlos-->

    <div class="fondo">
      <a href="http://localhost/PruebaKokonut2/?prueba='Prueba'&array='<?php echo $array; ?>'" class="button">
        <span class="icon-star"></span><b> Procesar array </b><span class="icon-star"></span>
      </a>
    </div>

    <!-- Obtiene y muestra valores de la URL -->
    <br>

    <?php
    $pru=$_GET['prueba'];

    function array_recibe($url_array){
      $tmp=stripslashes($url_array);
      $tmp=urldecode($tmp);
      $tmp=unserialize($tmp);
    }

    echo "Prueba: ", $pru, "<br>";

    $array=$_GET['array'];

    echo "&array: ", $array, "<br>";

    ?>

      <script type="text/javascript" src="js/colores.js"></script>
  </body>
</html>
