<?php


class Programador extends Empleado
{
    private $horasExtras;
    private $objetivosAlcanzados;
    private static $bonificacion = 600;

    public function __construct($nombre, $apellidos, $horasExtras, $objetivosAlcanzados)
    {
        parent::__construct($nombre, $apellidos);
        $this->horasExtras = $horasExtras;
        $this->objetivosAlcanzados = $objetivosAlcanzados;
    }

    public function calculaSueldo() {
        $sueldo = self::SUELDO_BASE + ($this->horasExtras * 20);

        if ($this->objetivosAlcanzados == true){
            return $sueldo + self::$bonificacion;
        } else return $sueldo;
    }

    public function getHorasExtras()
    {
        return $this->horasExtras;
    }

    public function setHorasExtras($horasExtras): void
    {
        $this->horasExtras = $horasExtras;
    }

    public function getObjetivosAlcanzados()
    {
        return $this->objetivosAlcanzados;
    }

    public function setObjetivosAlcanzados($objetivosAlcanzados): void
    {
        $this->objetivosAlcanzados = $objetivosAlcanzados;
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
                'PROGRAMADOR: <br />'.
            parent::__toString().' '.
                'Horas extras: '.
            self::getHorasExtras().' <br />'.
                'Objetivos alcanzados: '.
            self::getObjetivosAlcanzados().' <br />';
    }
}