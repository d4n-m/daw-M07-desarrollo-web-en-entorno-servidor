<?php
session_start();
if (isset($_POST["tipoCoche"])) {
    if ($_POST["tipoCoche"] == "grande"){

        echo '
<h1>ParkingApp</h1>
<form action="retirarCocheGrande.php" method="post">
<p>Introduzca el número de plaza:</p>
    <select name="num_plaza">
        <option value="" disabled selected>Plaza coche</option>';
for ($i=0; $i<(count($_SESSION['parking_grn'])); $i++){
    echo '<option value="'.$i.'">'.($i+1).'</option>';
}
    echo '</select>
    <input type="submit" name="enviar" value="Enviar">
</form>';
    } elseif ($_POST["tipoCoche"] == "pequeno"){
        echo '
<h1>ParkingApp</h1>
<form action="retirarCochePequeno.php" method="post">
<p>Introduzca el número de plaza:</p>
    <select name="num_plaza">
        <option value="" disabled selected>Plaza coche</option>';
        for ($i=0; $i<(count($_SESSION['parking_peq'])); $i++){
            echo '<option value="'.$i.'">'.($i+1).'</option>';
        }
        echo '</select>
    <input type="submit" name="enviar" value="Enviar">
</form>';
    }
} else {
    echo '<!DOCTYPE html>
<html lang="es">
<body>

<h1>ParkingApp</h1>

<form method="POST" action="retirar.php">
  <p>Que tipo de coche vas a retirar?:</p>
  <input type="radio" id="grande" name="tipoCoche" value="grande">
  <label for="grande">Coche grande</label><br>
  <input type="radio" id="pequeno" name="tipoCoche" value="pequeno">
  <label for="pequeno">Coche pequeño</label><br>
  
  <input type="submit" name="enviar" value="Enviar">
</form>

</body>
</html>';
}