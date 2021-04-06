<?php
session_start();
if (isset($_POST["tipoCoche"])){
    $hayPlaza = false;
    if ($_POST["tipoCoche"] == "grande"){
        for ($i=0; $i<count($_SESSION['parking_grn']); $i++){
            if ($_SESSION['parking_grn'][$i] == 0) {
                $_SESSION['parking_grn'][$i] = 1;
                echo "Coche aparcado.";
                header( "refresh:2; index.php" );
                break;
            } elseif ($i == count($_SESSION['parking_grn'])-1) {
                echo "No hay sitio para su coche.";
                header( "refresh:2; url=index.php" );
            }
        }
    } elseif ($_POST["tipoCoche"] == "pequeno"){
        for ($i=0; $i<count($_SESSION['parking_peq']); $i++){
            if ($_SESSION['parking_peq'][$i] == 0) {
                $_SESSION['parking_peq'][$i] = 1;
                echo "Coche aparcado.";
                $hayPlaza = true;
                header( "refresh:2; index.php" );
                break;
            }
        }
        if ($hayPlaza == false) {
            for ($j=0; $j<count($_SESSION['parking_grn']); $j++){
                if ($_SESSION['parking_grn'][$j] == 0){
                    $_SESSION['parking_grn'][$j] = 1;
                    echo "Coche aparcado.";
                    $hayPlaza = true;
                    header( "refresh:2; index.php" );
                    break;
                }
            }
        }
        if ($hayPlaza == false){
            echo "No hay sitio para su coche.";
            header( "refresh:2; url=index.php" );
        }
    }
} else {
    echo '<!DOCTYPE html>
<html lang="es">
<body>

<h1>ParkingApp</h1>

<form method="POST" action="aparcar.php""">
  <p>Que tipo de coche tiene?:</p>
  <input type="radio" id="grande" name="tipoCoche" value="grande">
  <label for="grande">Coche grande</label><br>
  <input type="radio" id="pequeno" name="tipoCoche" value="pequeno">
  <label for="pequeno">Coche pequeño</label><br>
  
  <input type="submit" name="enviar" value="Enviar">
</form>

</body>
</html>';
}