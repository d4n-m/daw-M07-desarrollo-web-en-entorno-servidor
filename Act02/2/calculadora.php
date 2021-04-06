<?php

    echo '<!doctype html>

<html lang="es">
<head>
    <meta charset="utf-8">

    <title>Calculadora | M07</title>
    <meta name="description" content="Programación basada en lenguajes de marcas con código embebido">
    <meta name="author" content="Dan Marius Dumitrescu">
    <link rel="stylesheet" type="text/css" href="view.css" media="all">
    <script type="text/javascript" src="view.js"></script>
</head>

<!--2.	Realizar una aplicación que simule una calculadora. Constará de una página HTML con dos campos de texto para
introducir los dos operadores, y 4 RadioButtons para seleccionar la operación: suma, resta, multiplicación y división.
Se mostrará el resultado de la operación en una segunda página con la frase “El resultado de la
suma/resta/multiplicación/división es XXX”.

Hacer el programa usando un formulario de tipo POST.-->

<body id="main_body" >

<img id="top" src="top.png" alt="">
<div id="form_container">

    <h1><a>Calculadora</a></h1>';

    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];
    $operacion = $_POST['operacion'];

    echo '<p align="center"><strong>';

    if ($operacion == 'suma'){
        echo "El resultado de la suma es ".$num1 + $num2;
    }
    elseif ($operacion == 'resta'){
        echo "El resultado de la resta es ".$num1 - $num2;
    }
    elseif ($operacion == 'multiplica'){
        echo "El resultado de la multiplicación es ".$num1 * $num2;
    }
    elseif ($operacion == 'divide'){
        echo "El resultado de la división es ".$num1 / $num2;
    }
    else{
        echo "Debes marcar la operación";
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
