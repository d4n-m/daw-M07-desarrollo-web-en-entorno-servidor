<?php
session_start();

if(!isset($_SESSION['parking_peq']) && !isset($_SESSION['parking_grn'])){

    $_SESSION['parking_peq'] = array_fill(0, 10, 0);
    $_SESSION['parking_grn'] = array_fill(0, 14, 0);
}
    echo '<!DOCTYPE html>
<html lang="es">
<body>

<h1>ParkingApp</h1>

<form method="POST" action="main.php">
  <p>Que deseas hacer?:</p>
  <input type="radio" id="aparcar" name="opcion" value="aparcar">
  <label for="aparcar">Aparcar coche</label><br>
  <input type="radio" id="retirar" name="opcion" value="retirar">
  <label for="retirar">Retirar coche</label><br>
  <input type="radio" id="estado" name="opcion" value="estado">
  <label for="estado">Ver estado del parking</label><br>
  <input type="submit" name="enviar" value="Enviar">
</form>

</body>
</html>';
