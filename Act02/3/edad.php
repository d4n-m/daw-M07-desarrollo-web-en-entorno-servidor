<?php

    echo '<!doctype html>

<html lang="es">
<head>
    <meta charset="utf-8">

    <title>Calculadora-Edad | M07</title>
    <meta name="description" content="Programación basada en lenguajes de marcas con código embebido">
    <meta name="author" content="Dan Marius Dumitrescu">
    <link rel="stylesheet" type="text/css" href="view.css" media="all">
    <script type="text/javascript" src="view.js"></script>
</head>

<!--3.	Realizar una aplicación que tenga una página web con un formulario con dos campos: uno para introducir nuestro
nombre y otro para introducir nuestra edad. El formulario nos enviará a otra página en la que se nos mostrará uno de
los siguientes mensajes, en función de nuestra edad:

Hola NOMBRE, tienes EDAD años.
Hola NOMBRE, eres menor de edad, no puedes pasar.
Hacer el programa usando primero un formulario de tipo POST.-->

<body id="main_body" >

<img id="top" src="top.png" alt="">
<div id="form_container">

    <h1><a>Calculadora Edad</a></h1>';

    $nombre = $_POST['nombre'];
    $edad = $_POST['edad'];

    echo '<p align="center"><strong>';

    if($edad < 18){
        echo "Hola ".$nombre.", eres menor de edad, no puedes pasar.";
    }
    else{
        echo "Hola ".$nombre.", tienes ".$edad." años.";
    }

    echo '</strong></p><br>
    <div class="center">
        <button onclick="history.go(-1);">Atrás </button>
    </div>
    <br>
</div>
<img id="bottom" src="bottom.png" alt="">

</body>
</html>';
?>
