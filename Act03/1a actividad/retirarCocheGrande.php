<?php
session_start();

$plaza = $_POST['num_plaza'];
$parking = $_SESSION['parking_grn'];

echo '<br>';
if($parking[$plaza] == 1){
    $_SESSION['parking_grn'][$plaza] = 0;
    echo "Coche retirado.<br />";
} else {
    echo "En esta plaza no se encuentra ningún coche.";
}
header( "refresh:2; index.php" );
