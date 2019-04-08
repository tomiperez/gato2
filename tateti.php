<?php

class Tateti
{
    private $jugadores = [];

    private $tablero;

    private $z;

    public function __construct($jugador1, $marca1, $jugador2, $marca2, $x, $y, $z)
    {
        $jugador1 = new Jugador($jugador1, $marca1);
        $jugador2 = new Jugador($jugador2, $marca2);
        $this->jugadores[] = $jugador1;
        $this->jugadores[] = $jugador2;

        $tablero = new Tablero($x, $y);
        $this->tablero = $tablero;

        $this->z = $z;
    }

    public function jugar($x, $y)
    {//preguntar con damepposicion las coordenadas x y y,
        //y si esta vacio juega, aqui verifico la posicion que retorna.
        if($this->tablero->damePosicion($x, $y) == '-')
        {
            if(!$this->ganador() && !$this->tablero->lleno()){

                switch ($this->z)
                {
                    case 1: 
                    $jugador = $this->jugadores[$this->z]->dameMarca();
                    $this->tablero->marcar($x, $y, $jugador);
                    $this->z = $this->z - 1;
                    break;
    
                    case 0;
                    $jugador = $this->jugadores[$this->z]->dameMarca();
                    $this->tablero->marcar($x, $y, $jugador);
                    $this->z = $this->z + 1;
                    break;
                }
            }else {
                echo 'La casilla esta ocupada' . "\n";
                return;
            }
        }    
        $this->tablero->mostrar();
        echo "\n";
    }

    Public function ganador()
    {// no muestra los llamados pero si corta
        for($i = 0; $i < 2; $i++)
        {
            
            if($this->tablero->damePosicion($i,0) != '-' &&  $this->tablero->damePosicion($i,0)===$this->tablero->damePosicion($i, 1) && $this->tablero->damePosicion($i, 1)===$this->tablero->damePosicion($i, 2))
                                               {
                                                echo 'Hay ganador'. "\n";
                                                die;
                                                return true;
                                               } 
            elseif($this->tablero->damePosicion(0, $i) != '-' &&  $this->tablero->damePosicion(0, $i)===$this->tablero->damePosicion(1, $i) && $this->tablero->damePosicion(1, $i)===$this->tablero->damePosicion(2, $i))
                                               {
                                                echo 'Hay ganador'. "\n";
                                                die;
                                                return true;
                                               } 
            elseif($this->tablero->damePosicion(2, 0) != '-' &&  $this->tablero->damePosicion(2, 0)===$this->tablero->damePosicion(1, 1) && $this->tablero->damePosicion(1, 1)===$this->tablero->damePosicion(0, 2))
                                               {
                                                echo 'Hay ganador'. "\n";
                                                die;
                                                return true;
                                               } 
            elseif($this->tablero->damePosicion(0, 0) != '-' &&  $this->tablero->damePosicion(0, 0)===$this->tablero->damePosicion(1, 1) && $this->tablero->damePosicion(1, 1)===$this->tablero->damePosicion(2, 2))
                                               {
                                                echo 'Hay ganador'. "\n";
                                                die;
                                                return true;
                                               }                     
        }
        return false;
    }
}
