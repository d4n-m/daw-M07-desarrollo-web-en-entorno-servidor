<?php
session_start();

$plaza = $_POST['num_plaza'];
$parking = $_SESSION['parking_peq'];

echo '<br>';
if($parking[$plaza] == 1){
    $_SESSION['parking_peq'][$plaza] = 0;
    echo "Coche retirado.<br />";
} else {
    echo "En esta plaza no se encuentra ningún coche.";
}
header( "refresh:2; index.php" );