<?php
function MyAutoload($nombre_clase){
    require_once($nombre_clase.".php");
}
spl_autoload_register('MyAutoload');

$empleados = array(
    new Programador("Dan", "Dumitrescu", 100, false),
    new Programador("Brendan", "Eich", 10, true),
    new Comercial("Kim", "Kardashian", 1000),
    new Comercial("Colonel", "Sanders", 9)
);

foreach ($empleados as $empleado) {

    echo $empleado->__toString();
    echo "Sueldo: ".$empleado->calculaSueldo()."€";
    echo "<br /><br />";
}