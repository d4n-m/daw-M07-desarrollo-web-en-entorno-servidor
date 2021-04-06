<?php


class Comercial extends Empleado
{
    private $numVentas;
    private static $bonificacion = 500;

    public function __construct($nombre, $apellidos, $numVentas)
    {
        parent::__construct($nombre, $apellidos);
        $this->numVentas = $numVentas;
    }

    public function calculaSueldo() {
        $sueldo = self::SUELDO_BASE;

        if ($this->numVentas > 10){
            return $sueldo + self::$bonificacion;
        } else return $sueldo;
    }

    public function getNumVentas()
    {
        return $this->numVentas;
    }

    public function setNumVentas($numVentas): void
    {
        $this->numVentas = $numVentas;
    }

    public static function getBonificacion(): int
    {
        return self::$bonificacion;
    }

    public static function setBonificacion(int $bonificacion): void
    {
        self::$bonificacion = $bonificacion;
    }

    public function __toString(): string
    {
        return
            'COMERCIAL: <br />'.
            parent::__toString().' '.
            'Número de ventas: '.
            self::getNumVentas().' <br />';
    }

}