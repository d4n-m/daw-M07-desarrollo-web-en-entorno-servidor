<!doctype html>

<html lang="es">
<head>
    <meta charset="utf-8">

    <title>1ª actividad | M07</title>
    <meta name="description" content="Inserción de código en páginas web">
    <meta name="author" content="Dan Marius Dumitrescu">

</head>

<body>
<?php
/* 1.	Escribir un programa en que se declaren tres variables con tres valores (los que tú quieras) y se guarde la suma
 de éstos en una cuarta variable. El programa debe mostrar los tres valores que se van a sumar y el resultado final.*/

$a = 100;
$b = 150;
$c = 200;
$suma = $a + $b + $c;

echo "La suma de ".$a." + ".$b." + ".$c." = "."$suma";
echo "<br><br>";

/*2.	Escribir un programa en que dadas la base y la altura de un rectángulo, calcule su área y su perímetro. Se deben
mostrar los mensajes:

El rectángulo tiene base X cm y altura Y cm.
Su área es XX cm2.
Su perímetro es YY cm.
*/

$altura = 50;
$base = 100;
$area = $altura * $base;
$perimetro = 2 * ($altura + $base);

echo "El rectángulo tiene base $base cm y altura $altura cm.";
echo "<br>";
echo "Su área es $area cm2.";
echo "<br>";
echo "Su perímetro es $perimetro cm.";
echo "<br><br>";

/*3.	Escribir un programa que, dada una cantidad de segundos, muestre por pantalla a cuántas horas, minutos y
segundos equivale. Por ejemplo, 5363 segundos equivalen a 1 horas, 29 minutos, 23 segundos.*/

$tiempo = 89563;
$horas = 0;
$minutos = 0;
$segundos = $tiempo;

while ($segundos >= 3600) {
    $segundos -= 3600;
    $horas++;
}

while ($segundos >= 60) {
    $segundos -= 60;
    $minutos++;
}

echo "$tiempo segundos equivalen a $horas horas, $minutos minutos, $segundos segundos.";
echo "<br><br>";

/*4.	Escribir un programa que guarde en tres variables los coeficientes de una ecuación de segundo grado. Debe
guardar en otras dos variables los resultados, y mostrarlos por pantalla. Para hacer la raíz cuadrada, usar la función
de PHP sqrt (número).*/

$a = 12;
$b = -9.6;
$c = 1.44;
$discriminante = sqrt(($b * $b) - (4 * $a * $c));

if ($discriminante == 0) {
    $solucion = ($b * (-1) + $discriminante) / (2 * $a);
    echo "Solución = ".$solucion."<br>";

} elseif ($discriminante > 0) {

//1er resultado: sumando la raíz
    $solucion_1 = ($b * (-1) + $discriminante) / (2 * $a);

//2o resultado: restando la raíz
    $solucion_2 = ($b * (-1) - $discriminante) / (2 * $a);
    echo "Solución 1 = ".$solucion_1."<br>";
    echo "Solución 2 = ".$solucion_2."<br>";

} else {
    echo "No tiene solución real.";
}
echo "<br>";

/*5.	Escribir un programa que, dada la longitud del radio de una circunferencia, nos muestre la longitud y el área de
la circunferencia y el volumen de la esfera equivalente. Para utilizar el número π en PHP puedes observar este link:
http://php.net/manual/es/math.constants.php.*/

$r = 10;
echo "Dado el radio de $r:<br>";

$longitud = 2 * $r;
echo "El diámetro de la esfera equivalente es de ".$longitud."<br>";

$area = 4 * M_PI * pow($r,2);
echo "El area de la circunferencia es de ≈".sprintf("%.2f", $area)."<br>";

$volumen = (4 / 3) * (M_PI * pow($r, 3));
echo "El volumen de la esfera es de ≈".sprintf("%.2f", $volumen)."<br>"

?>
</body>
</html>
