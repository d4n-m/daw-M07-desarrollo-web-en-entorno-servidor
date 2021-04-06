<?php

    echo '<!doctype html>

<html lang="es">
<head>
    <meta charset="utf-8">

    <title>Calificaciones | M07</title>
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

    <h1><a>Notas</a></h1>';

$nota = $_POST['nota'];

echo '<p align="center"><strong>';

switch ($nota){
    case $nota <= 4.99:
        echo "Suspenso";
        break;
    case $nota <= 6.99:
        echo "Aprobado";
        break;
    case $nota <= 8.99:
        echo "Notable";
        break;
    case $nota <= 9.99:
        echo "Excelente";
        break;
    case $nota == 10:
        echo "Matrícula de honor";
        break;
    default:
        echo "Nota inválida.";
        break;
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
