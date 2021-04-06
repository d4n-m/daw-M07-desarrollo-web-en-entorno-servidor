<?php
session_start();

echo "<h2>ESTADO plazas de coches PEQUEÑOS</h2>";
foreach ($_SESSION['parking_peq'] as $key => $value){
    if ($value == 0) {
        echo '<pre>('.$value.') --> Plaza '.($key+1).' está VACÍA. </pre>';
    } else {
        echo '<pre>('.$value.') --> Plaza '.($key+1).' está OCUPADA. </pre>';
    }
}

echo "<h2>ESTADO plazas de coches GRANDES</h2>";
foreach ($_SESSION['parking_grn'] as $key => $value){
    if ($value == 0) {
        echo '<pre>('.$value.') --> Plaza '.($key+1).' está VACÍA. </pre>';
    } else {
        echo '<pre>('.$value.') --> Plaza '.($key+1).' está OCUPADA. </pre>';
    }
}