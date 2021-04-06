<?php
echo '<!doctype html>

<html lang="es">
<head>
    <meta charset="utf-8">

    <title>Calcula|Sueldo | M07</title>
    <meta name="description" content="Programación basada en lenguajes de marcas con código embebido">
    <meta name="author" content="Dan Marius Dumitrescu">
    <link rel="stylesheet" type="text/css" href="view.css" media="all">
    <script type="text/javascript" src="view.js"></script>
</head>
<!--5.	Escribir un programa que nos pida mediante un formulario el nombre de un empleado y las horas semanales trabajadas.
El programa mostrará un mensaje del tipo:

FULANITO has trabajado X horas. Tu sueldo es XXXX €.
El sueldo se calcula de la siguiente forma:
•	Si trabaja 40 horas o menos se le paga 16 €/hora.
•	Si trabaja más de 40 horas, se le paga 16 €/hora las primeras 40 horas y 20 €/hora las horas extra.-->

<body id="main_body" >

<img id="top" src="top.png" alt="">
<div id="form_container">

    <h1><a>Calcula|Sueldo</a></h1>';

$nombre = $_POST['nombre'];
$horas = $_POST['horas'];
$sueldo = 0;

if($horas <= 40){
    $sueldo = $horas * 16;
}
elseif ($horas > 40){
    $sueldo = 40 * 16 + ($horas - 40) * 20;   //40 horas a 16€
}                                             //horas extras a 20€

echo '<p align="center"><strong>';
echo $nombre." has trabajado ".$horas." horas. Tu sueldo es de ".$sueldo."€.";
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
