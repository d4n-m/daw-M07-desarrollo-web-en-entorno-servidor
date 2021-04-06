<?php
session_start();

echo "<br>";
echo $_POST["opcion"];
if(isset($_POST['enviar'])) {
    if ($_POST["opcion"] == "aparcar") {
        header("Location:aparcar.php");
    } elseif ($_POST["opcion"] == "retirar") {
        header("Location:retirar.php");
    } elseif ($_POST["opcion"] == "estado") {
        header("Location:estado.php");
    } else {
        echo "Hay que hacer una selección.";
        header("Location:index.php");
    }
}