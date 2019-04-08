<?php 

class Jugador
{
    private $nombre;
    private $marca;

    public function __construct($nombre, $marca)
    {
        $this->nombre = $nombre;
        $this->marca = $marca;
    }

    public function dameNombre()
    {
        return $this->nombre;
    }

    public function dameMarca()
    {
        return $this->marca;
    }
}
