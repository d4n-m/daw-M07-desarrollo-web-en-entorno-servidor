<!doctype html>

<html lang="es">
<head>
    <meta charset="utf-8">

    <title>2ª actividad | M07</title>
    <meta name="description" content="Programación basada en lenguajes de marcas con código embebido">
    <meta name="author" content="Dan Marius Dumitrescu">

</head>

<!--1.	Escribe un programa en el que se declare un array asociativo para guardar las notas de unos alumnos. Las claves
del array serán los nombres de los alumnos y los valores serán las notas de cada uno.

El programa deberá hacer las operaciones necesarias para mostrar los siguientes mensajes:
La nota más alta es la de Laura con un 9.
La nota más baja es la de Xavier con un 4.
La nota media de la clase es 6.4.-->

<body>

<?php

$estudiantes= array(
    'Laura' => [9.5, 5.9, 9.3, 7.8, 8.8],
    'Xavier' => [8.9, 7.4, 6.6, 9.9, 6.7]
);

$notaMasAlta = 0;
$notaMasBaja = 10;
$alumnoA = '';
$alumnoB = '';

foreach($estudiantes as $estudiante => $notas)
    foreach($notas as $key => $nota)
        if ($nota > $notaMasAlta)
        {
            $notaMasAlta = $nota;
            $alumnoA = $estudiante;
        }
        elseif ($nota < $notaMasBaja){
            $notaMasBaja = $nota;
            $alumnoB = $estudiante;
        }

$suma = 0;
$numNotas = 0;
foreach($estudiantes as $estudiante => $notas)
    $numNotas += count($notas);
    foreach($notas as $key => $nota)

foreach($estudiantes as $estudiante => $notas)
    $suma += array_sum($notas) / 5;

$media = $suma / $numNotas;
echo "<pre>La nota más alta es la de $alumnoA con un $notaMasAlta.</pre>";
echo "<pre>La nota más baja es la de $alumnoB con un $notaMasBaja.</pre>";
echo "<pre>La nota media de la clase es $media </pre>";

?>

</body>
</html>