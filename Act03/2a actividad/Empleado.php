<?php


abstract class Empleado
{
    private $nombre;
    private $apellidos;
    const SUELDO_BASE = 1200;

    public function __construct($nombre, $apellidos)
    {
        $this->nombre = $nombre;
        $this->apellidos = $apellidos;
    }

    public function getNombre()
    {
        return $this->nombre;
    }

    public function setNombre($nombre): void
    {
        $this->nombre = $nombre;
    }

    public function getApellidos()
    {
        return $this->apellidos;
    }

    public function setApellidos($apellidos): void
    {
        $this->apellidos = $apellidos;
    }

    public static function getSueldoBase()
    {
        return self::SUELDO_BASE;
    }

    public function __toString(): string
    {
        return
                'Nombre: '.
            self::getNombre().' <br />'.
                'Apellidos: '.
            self::getApellidos().' <br />';
    }


}